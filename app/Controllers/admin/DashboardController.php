<?php

namespace App\Controllers\admin;

use App\classes\Session;
use App\Controllers\Controller;

class DashboardController extends Controller
{
    public function show(){
        Session::add('admin', 'You are welcome, admin user');
        Session::remove('admin');

        if(Session::has('admin')){
            $msg = Session::get('admin');
        }else{
            $msg = 'Not defined';
        }
        return view('admin/dashboard', ['admin' => $msg]);
    }
}
