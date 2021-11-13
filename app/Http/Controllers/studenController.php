<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;

class studenController extends Controller
{
    

  public function index()
{
  $studen=  DB::table('students')->get();
  return view ('index',compact('studen'));
}

    public function show($id){
      $studen=  DB::table('students')->find($id);
      return view ('show',compact('studen'));


}}


