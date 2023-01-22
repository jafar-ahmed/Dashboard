<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultipleImageController extends Controller
{
    public function save(Request $request)
    {
        $image = array();
        if($files = $request->file('image')){
            foreach($files as $file){

            }
        }
    }
}
