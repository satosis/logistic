<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Keyword;
use App\Http\Requests\AdminRequestProduct;
use Illuminate\Support\Str;
use Carbon\Carbon;
class AdminProductController extends Controller
{
    public function index(){
        $product=Product::paginate(10);
        $category =Category::all();
        $viewData=[
            'product' =>$product,
            'category' =>$category
        ];
        return view('admin.product.index',$viewData);
    } 
    public function create(){
        // $type =(new Product())->getCountry();
        // dd($type);
        $category =Category::all();
        $keywords=  Keyword::all();
        $keywordOld =[];
        return view('admin.product.create',compact('category','keywords','keywordOld'));
    }
    public function store(AdminRequestProduct $request){
        $data=$request->except('_token','pro_avatar','attribute','keywords');
        $data['pro_slug']=Str::slug($data['pro_name']);
        $data['created_at']=Carbon::now();
        if($request->pro_avatar){
            $image =upload_image('pro_avatar');
            if($image['code']==1)
                $data['pro_avatar']=$image['name'];

        }
        $id=Product::insertGetId($data);
        if($id){
            $this->syncKeyword($request->keyword,$id);
        }
        if($request->file){
            return $this->syncAlbumImageAndProduct($request->file,$id);
        }
        return redirect()->back();
    }
    public function edit($id){
        $category =Category::all();
        $product =Product::findOrFail($id);
        $keywords=Keyword::all();
        $keywordOld =\DB::table('product_keywords')
                        ->where('pk_product_id',$id)
                        ->pluck('pk_keyword_id')
                        ->toArray();
        if(!$keywordOld) $keywordOld=[];
        $image =\DB::table('product_images')
                ->where('product_id',$id)->get();
        $viewData =[
            'category' =>$category,
            'product'  =>$product,
            'keywords' =>$keywords,
            'keywordOld'=>$keywordOld,
            'image'     =>$image ?? []
        ];
        return view('admin.product.update',$viewData);
    }
    public function update(AdminRequestProduct $request ,$id){
        $product = Product::find($id);
        $data =$request->except("_token",'pro_avatar','attribute','keywords','file');
        $data['pro_slug'] =Str::slug($request->pro_name);
        $data['updated_at'] =Carbon::now();
        if($request->pro_avatar){
            $image =upload_image('pro_avatar');
            if($image['code']==1){
                $data['pro_avatar']=$image['name'];
            }
        }
        $product->update($data);
        if($request->file){
            return $this->syncAlbumImageAndProduct($request->file,$id);
        }
        return redirect()->back();
    }
    //getClientOriginalExtension getClientOriginalName là những function có sẵn
    public function syncAlbumImageAndProduct($request,$id){
        foreach($request as $list =>$fileImage){
            $ext = $fileImage->getClientOriginalExtension(); 
            $extend =[
                'jpg','png','jpeg','PNG','JPG'
            ];
            if(!in_array($ext,$extend)) return false;
            $filename =date('Y-m-d__').Str::slug($fileImage->getClientOriginalName()).'.'.$ext;
            $path =public_path().'/uploads/'.date('Y/m/d');
            if(!\File::exists($path)){
                mkdir($path,0777,true);
            }
            $fileImage->move($path,$filename);
            \DB::table('product_images')
            ->insert([
                'al_name' =>$fileImage->getClientOriginalName(),
                'al_slug' =>$filename,
                'product_id'=>$id,
                'created_at' =>Carbon::now()
            ]);
        }
    }
    public function hot($id){
        $product =Product::find($id);
        $product->pro_hot = !$product->pro_hot;
        $product->save();
        return redirect()->back();
    }
    public function active($id){
        $product =Product::find($id);
        $product->pro_active = !$product->pro_active;
        $product->save();
        return redirect()->back();
    }
    public function delete($id){
        $product =Product::find($id);
        if($product) $product->delete(); 
        return redirect()->back(); 
    }
    public function deleteImage($id){
        \DB::table('product_images')->where('id',$id)->delete();
        return redirect()->back();
    }
    private function syncKeyword($keyword,$idProduct){
        if(!empty($keyword)){
            $data=[];
            foreach($keyword as $key =>$keywords){
                $data=[
                    'pk_product_id' =>$idProduct,
                    'pk_keyword_id' =>$keywords
                ];
            }
           \DB::table('product_keywords')->where('pk_product_id',$idProduct)->delete();
           \DB::table('product_attributes')->insert($data);
        }
    }

}
