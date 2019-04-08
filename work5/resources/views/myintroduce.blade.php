<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>홍지혁 데이터 테이블</title>
    <link rel="stylesheet" href="http://localhost/work5/resources/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body>
    <form class='form_register' action="action" type='get'>
        <div class='register_form'>
           <input type="submit" name="modification" value="등록">
        </div>
        <div class='register_form'>
           <input class="search_bt" type="submit" value="Search">
           <input class="search_bt" type="search" placeholder="Search" style="width:200px; ">
        </div>
    </form>
    <table class="form_content">
        <tr>
            <th>번호</th>
            <th>이메일</th>
            <th>회원구분</th>
            <th>이름(한글)</th>
            <th>이름(영어)</th>
            <th>성별</th>
            <th>직위</th>
            <th>근무처명</th>
            <th colspan="3" style='border-right: 0;'>연락처</th>
        </tr>
        @foreach ($introKey as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->member}}</td>
            <td>{{$item->kname}}</td>
            <td>{{$item->ename}}</td>
            <td>{{$item->sex}}</td>
            <td>{{$item->spot}}</td>
            <td>{{$item->position}}</td>
            <td>{{$item->callnum}}</td>
            <td style='border-right: 0;'>
                <form action="" name="" type='get'>
                    <input class='form_bt' type="submit" name="modification" value="수정">
                    <input class='form_bt'  type="submit" name="delete" value="삭제">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div id="page_wrap" style="text-align:center">
        {!!$introKey->appends([ 'searchString' => Request::get('searchString')])->render()!!}
    </div>
  </body>
</html>
