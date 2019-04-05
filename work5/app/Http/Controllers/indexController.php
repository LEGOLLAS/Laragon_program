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
     //$intro 배열을 json으로 변환
      $outjson = json_encode($intro);

     //function introduce에서 만든 배열을 intro_key라는 키와 함께 view에 myintroduce로 리턴.
      return view ('myIntroduce', array('introKey'=>$outjson));
  }

 //가입 funtion인  join_input
  public function joinInput(){
    return view ('joinInput');
  }

  //Request 객체에 $request변수를 파라미터로 받아와서 \
  //이름,아이디,이메일별로 데이터를 가져온다.
  public function joinOutput(Request $request){

    $postData = $request->all();

    //각각 키을 부여받고 배열로 view에 있는 join_put으로 넘어간다.
    return view ('joinOutput', array('joinName'=>$postData['join_name'],
                                     'joinId'=>$postData['join_id'],
                                     'joinEmail'=>$postData['join_email']));
  }

  public function showTeam(){
    //다중 배열을 가진 변수 정의
    $team = array('team1'=>array('Leader'=>'홍지혁',
                                 'SecondLeader'=>'김영철',
                                 'TeamMember'=>'김일수'),
                  'team2'=>array('Leader'=>'이철수',
                                 'SecondLeader'=>'이민혁',
                                 'Member'=>'강수원'),
                  'team3'=>array('Leader'=>'홍승민',
                                 'SecondLeader'=>'좌민혁',
                                 'Member'=>'장대한')
                  );
    //team_key라는 키를 부여한 view단에 show_team에게 전달
    return view ('showTeam', array('teamKey'=>$team));
  }

}
