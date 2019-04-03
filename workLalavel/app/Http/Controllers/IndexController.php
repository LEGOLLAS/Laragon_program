<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\View;
//use Illuminate\Http\Request;


class IndexController extends Controller {

  
    public function getIndex() {
 
 
 
 echo "11";
     //   return view($this->layoutCode . '.index', array(
     //       'popupList' => $popupList,
     //       'nowDate' => $nowDate,
     //   ));
    }

	public function ji(){
		//echo 'index';
		
		array( array('강아지', '고양이', '소'),
			   array('과일', '사과', '귤')
			   );
		//return view('welcome');
	}
	
	
	
	public function greeting(){
		//echo 'greeting';
	
	$arr2 = array('강아지', '고양이', '소');
	$arr3 = array('배', '사과', '귤');
	$result = array('동물'=>$arr2, '과일'=>$arr3 ); 	
	//print_r($result);
	//exit;
		return view('greeting', array('result'=>$result));
	}
	
}
