<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function store(Request $request)
{
    abort_unless(\Gate::allows('company_create'), 403);
    $company = Company::create($request->all());
    return redirect()->route('admin.companies.index');
}
}
