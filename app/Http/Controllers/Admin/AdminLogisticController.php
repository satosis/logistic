<?php

namespace App\Http\Controllers\Admin;

use App\Exports\LogisticExport;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Logistic;
use App\Models\Rating;
use Auth;
use DB;
use Arr;
use Excel;
use Illuminate\Http\Request;

class AdminLogisticController extends Controller
{
    public function home()
    {
        return redirect()->to('/admin-auth/login');
    }

    public function index(Request $request)
    {
        $logistics = Logistic::orderBy('id', 'desc')->where('status', '<', '5');
        if ($request->id) $logistics->where('id', $request->id);
        if ($order_number = $request->order_number) {
            $logistics->where('order_number', 'like', '%' . $order_number . '%');
        }
        if ($customer_name = $request->customer_name) {
            $logistics->where('customer_name', 'like', '%' . $customer_name . '%');
        }

        if ($shipping_date = $request->shipping_date) {
            $logistics->where('shipping_date', $shipping_date);
        }
        $logistics = $logistics->paginate(10);
        $viewData = [
            'logistic' => $logistics,
            'query' => $request->query()
        ];
        return view('admin.logistic.index', $viewData);
    }

    public function create()
    {
        $logistics = new Logistic();
        return view('admin.logistic.create', compact('logistics'));
    }

    public function user()
    {
        $logistics = new Logistic();
        return view('layout.user', compact('logistics'));
    }

    public function store(Request $request) {
        $data = $request->except('_token', 'submit');
        $data['status'] = 1;
        $logisticId = Logistic::create($data);
        return redirect()->to('/api-admin');
    }

    private function mapRatingDefault()
    {
        $ratingDefault = [];
        for ($i = 1; $i <= 5; $i++) {
            $ratingDefault[$i] = [
                'count_number' => 0,
                'total' => 0,
                'r_number' => 0
            ];
        }
        return $ratingDefault;
    }

    public function detail($id)
    {
        $logistics = Logistic::find($id);

        $rating = Rating::where('r_product_id', $id)->get();
        $viewData = [
            'rating' => $rating,
            'logistics' => $logistics
        ];

        return view('admin.logistic.detail', $viewData);
    }

    public function edit($id)
    {
        $logistics = Logistic::find($id);
        return view('admin.logistic.update', compact('logistics'));
    }

    public function update($id, Request $request)
    {
        $data = $request->except('_token', 'submit');
        $logistics = Logistic::find($id);
        $logistics->order_number = $data['order_number'];
        $logistics->customer_name = $data['customer_name'];
        $logistics->recipient_address = $data['recipient_address'];
        $logistics->shipping_address = $data['shipping_address'];
        $logistics->shipping_date = $data['shipping_date'];
        $logistics->delivery_date = $data['delivery_date'];
        $logistics->save();
        return redirect()->to('/api-admin');
    }

    public function reviewstore(Request $request)
    {
        $review = new Rating();
        $review->r_user_id = get_data_user('admins', 'id');
        $review->r_product_id= $request->r_product_id;
        $review->r_number = $request->r_number;
        $review->r_content = $request->r_content;
        $review->save();
        return redirect()->back()->with('msg','Your review has been submitted Successfully,');
    }

    public function getAction($action, $id)
    {
        $logistics = Logistic::find($id);
        if ($action == 'delete') {
            $logistics = Logistic::find($id);
            $rating = Rating::where('r_product_id', $id)->get();
            foreach($rating as $list) {
                $list->delete();
            }
            if ($logistics) {
                $logistics->delete();

                return redirect()->back();
            }
            return redirect()->back();
        }
        if ($logistics) {
            switch ($action) {
                case 'process':
                    $logistics->status = 2;
                    break;
                case 'success':
                    $logistics->status = 3;
                    break;

                case 'cancel':
                    $logistics->status = -1;
                    break;

                case 'confirm':
                    $logistics->status = 4;
                    break;
            }
            $logistics->save();
        }
        return redirect()->back();
    }
}
