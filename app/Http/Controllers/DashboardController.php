<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    

    public function adminDashBoard() 
    {
    	return view('csrm.adminpanel.pages.home');
    }
}
