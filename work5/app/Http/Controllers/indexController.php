<?php
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Work5;


//Controller에서 상속
class IndexController extends Controller{

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

  //참가자 메소드
    public function index(){

       $outData = Work5::orderby('id','desc')->paginate(10);
       //function introduce에서 만든 배열을 intro_key라는 키와 함께 view에 myintroduce로 리턴.
        return view ('participants', array('introKey'=>$outData));
    }
    public function create(){
        return view ('create');
    }
    public function edit(Request $request){
      $id = $request->get('id');
      $result = Work5::find($id);
      return view ('update', array('result'=>$result));
    }

    public function store(Request $request){

            $id = null;
            $postData= $request->all();

          //  return $postData;

            $resource = Work5::findOrNew($id);
            $resource->fill($postData);
            $resource->save();

         //   echo '저장되었습니다';

            return redirect('/');
    }
    public function update(Request $request){
        $id = $request->get('id');
         $postData= $request->all();
         $resource = Work5::findOrNew($id);
         $resource->fill($postData);
         $resource->save();
        return redirect('/');
    }
    public function delete(Request $request){
        $id = $request->all();
        Work5::destroy($id);
        return redirect('/');
    }
    public function show(Request $request){
      //  $showData = $request->all();
        $id = $request->get('id');
        $result = Work5::find($id);
        return view ('showInfo', array('showMe'=>$result));
    }
    public function search(Request $request){
        return redirect ('/');
    }
}
