<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function customerDetails()
    {
        $obj= new Customer();
        $result= $obj->get();
        dd($result);

    }
}
