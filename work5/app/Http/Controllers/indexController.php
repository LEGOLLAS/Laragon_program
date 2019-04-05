<?php
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Controller에서 상속
class IndexController extends Controller{


  public function introduce(){

    //자기소개 배열
    $intro = array('name'=>'홍지혁',
                   'age'=>'만 24세',
                   'email'=>'gurwl1885@gmail.com',
                   'university'=>'제주대학교',
                   'study'=>'컴퓨터공학전공',
                   'army'=>'군필',
                   'address'=>'제주특별자치도 제주시 독짓골 8길 57, 명주아파트 2차 203호'
                 );

      $outjson = json_encode($intro, JSON_UNESCAPED_UNICODE);
      
     //function introduce에서 만든 배열을 intro_key라는 키와 함께 view에 myintroduce로 리턴.
      return view ('myintroduce', array('introKey'=>$outjson));
  }

 //가입 funtion인  join_input
  public function join_input(){
    return view ('join_input');
  }

  //Request 객체에 $request변수를 파라미터로 받아와서 \
  //이름,아이디,이메일별로 데이터를 가져온다.
  public function join_output(Request $request){

    $postData = $request->all();

    //각각 키을 부여받고 배열로 view에 있는 join_put으로 넘어간다.
    return view ('join_output', array('aaa'=>$postData['join_name'],
                                     'bbb'=>$postData['join_id'],
                                     'ccc'=>$postData['join_email']));
  }

  public function show_team(){
    //다중 배열을 가진 변수 정의
    $team = array('1team'=>array('Leader'=>'홍지혁',
                                 'Second_Leader'=>'김영철',
                                 'Team_Member'=>'김일수'),
                  '2team'=>array('Leader'=>'이철수',
                                 'Second_Leader'=>'이민혁',
                                 'Member'=>'강수원'),
                  '3team'=>array('Leader'=>'홍승민',
                                 'Second_Leader'=>'좌민혁',
                                 'Member'=>'장대한')
                  );
    //team_key라는 키를 부여한 view단에 show_team에게 전달
    return view ('show_team', array('team_key'=>$team));
  }

}
