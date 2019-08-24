<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdalatTbl;

class CortSettingController extends Controller
{
    

    public function createAdalat()
    {
    	$cortObj	= new AdalatTbl();

    	$cortData	= $cortObj->all();

    	return view('csrm.adminpanel.pages.cort-setting', compact('cortData'));

    }

    public function storeAdalat(Request $request)
    {
    	$cortObj	= new AdalatTbl();

    	$inputs	= $request->all();

    	$cortSave	= $cortObj->create($inputs);

    	if($cortSave) {
    		return redirect()->back();
    	}else{
    		return redirect()->back();
    	}

    }
    
}
