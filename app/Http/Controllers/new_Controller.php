<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShowUser;
use App\St_insert;


class new_Controller extends Controller
{

public function showUser(){

	$show = ShowUser ::all();
	return view('showUser')->with('student',$show);
}


public function dele($ID){
	$students=ShowUser::findOrFail($ID);
 	$students->delete();
	// ShowUser::delete('delete from student where ID=?',[$ID]);
	 return "done";
	// redirect('')->with('sucess','delete data');
}

public function index(){
	return view("index");
}




// // insert data in table
//     function insertRec(Request $request){
//     	$teacher = new St_insert;
//     	$teacher->name = $request->name;
//     	$teacher->f_name = $request->f_name;
//     	$teacher->save();
//     	// return back();
    	

//     }
 }
