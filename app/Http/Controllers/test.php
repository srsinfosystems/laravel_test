<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class test extends Controller
{
    public function test(Request $request){
    	if ($request->isMethod('post')) {
    		if($request->submit == 'delete'){
    			DB::table('test')->where('id','=', $request->id)->delete();
    		}else{
    			if(isset($request->id) && $request->id != ''){
    			DB::table('test')->where('id','=', $request->id)->update(
					[	'title' => $request->title,
						'description'=> $request->description,
						'modified' => date("Y-m-d H:s:i")
					]);
;    		}else{
				DB::table('test')->insert(
					[	'title' => $request->title,
						'description'=> $request->description
					]);
    		}
    		}
    		

    	}
    	$data = DB::table('test')->get();
    	return view("test.test", ['data'=>$data]);
    }

}
