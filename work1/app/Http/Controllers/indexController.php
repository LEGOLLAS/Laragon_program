<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Work1;

class indexController extends Controller{

  public function index(){
    $postData = Work1::orderby('id','asc')->paginate(10);
    return view ('main.main', array('postData'=>$postData));
  }

  public function create(){
    return view ('register.register');
  }

  public function show(){
    return view ('mypage.mypage');
  }
}
