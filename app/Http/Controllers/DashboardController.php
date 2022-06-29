<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if(Auth::user()->hasRole('admin')){
            return view('dashboards.adminDashboard');
        }elseif(Auth::user()->hasRole('staff')){
            return view('dashboards.staffDashboard');
        }elseif(Auth::user()->hasRole('doctor')){
            return view('dashboards.doctorDashboard');
        }elseif(Auth::user()->hasRole('dealer')){
            return view('dashboards.dealerDashboard');
        }elseif(Auth::user()->hasRole('customer')){
            return view('dashboards.customerDashboard');
        }
    }
}
