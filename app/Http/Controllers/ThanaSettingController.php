<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ThanaTbl;

class ThanaSettingController extends Controller
{
    public function createThana()
    {
    	$thanaObj	= new ThanaTbl();

    	$thanaData	= $thanaObj->all();

    	return view('csrm.adminpanel.pages.zela-thana-union-setting', compact('thanaData'));

    }

    public function storeThana(Request $request)
    {
    	$thanaObj	= new ThanaTbl();

    	$inputs	= $request->all();

    	$thanaSave	= $thanaObj->create($inputs);

    	if($thanaSave) {
    		return redirect()->back();
    	}else{
    		return redirect()->back();
    	}

    }
}
