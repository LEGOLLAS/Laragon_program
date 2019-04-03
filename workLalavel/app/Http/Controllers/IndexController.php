<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\View;
//use Illuminate\Http\Request;


class IndexController extends Controller {


    public function getIndex() {

      return view ('index');
     //   return view($this->layoutCode . '.index', array(
     //       'popupList' => $popupList,
     //       'nowDate' => $nowDate,
     //   ));
    }

  	public function greeting(){
      return view ('greeting');
  	}

    public function greeting_ok(){
      return view ('greeting_ok');
  	}

}
