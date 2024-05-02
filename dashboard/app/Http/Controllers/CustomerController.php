<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CustomersExport;
use App\Imports\CustomersImport;


class CustomerController extends Controller
{


    public function import(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new CustomersImport, $file);
    }
    
    public function export(){
        // return "Try";

        return Excel::download(new CustomersExport, 'Customer.xlsx');
    }
}
