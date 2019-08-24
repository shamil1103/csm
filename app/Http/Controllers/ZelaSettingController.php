<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ZelaTbl;

class ZelaSettingController extends Controller
{
    public function createZela()
    {
    	$zelaObj	= new ZelaTbl();

    	$zelaData	= $zelaObj->all();

    	return view('csrm.adminpanel.pages.zela-thana-union-setting', compact('zelaData'));

    }

    public function storeZela(Request $request)
    {
    	$zelaObj	= new ZelaTbl();

    	$inputs	= $request->all();

    	$zelaSave	= $zelaObj->create($inputs);

    	if($zelaSave) {
    		return redirect()->back();
    	}else{
    		return redirect()->back();
    	}

    }
}
