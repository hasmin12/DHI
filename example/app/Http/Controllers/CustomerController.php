<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\CustomersDataTables;
class CustomerController extends Controller
{
    //
    public function index(CustomersDataTables $dataTable)
    {
        return $dataTable->render('customers.index');
    }
    public function import(){

    }

    public function export(){
        
    }
}
