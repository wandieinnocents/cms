<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    //

    // dashboard
    public function dashboard(){
        
        return view('back_end.pages_backend.admin_dashboard.dashboard');
    }

    // view orders
    public function view_orders(){

         return view('back_end.pages_backend.orders_backend.view_orders');
        
    }

    // quotations
    public function quotes(){
        return view('back_end.pages_backend.quotes_backend.view_quotes');
    }

  

   

    

  


}
