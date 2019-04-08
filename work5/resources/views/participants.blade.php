<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>홍지혁 데이터 테이블</title>
    <link rel="stylesheet" href="http://localhost/work5/resources/css/style.css">
  </head>
  <body>
    <div class="table_top">
        <div class='register_form'>
           <input type="button" name="modification" value="등록하기" onClick="location.href='http://localhost/work5/public/create'">
        </div>
        <div class='register_form'>
           <input class="search_bt" type="submit" value="Search">
           <input class="search_bt" type="search" placeholder="Search" style="width:200px; ">
        </div>
      </div>
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
                <input class='form_bt' type="button" name="modification" value="수정" onClick="location.href='http://localhost/work5/public/update?id=1'">
                <input class='form_bt'  type="button" name="delete" value="삭제" onClick="location.href=''">
            </td>
        </tr>
        @endforeach
    </table>
    <div id="page_wrap" style="text-align:center">
        {!!$introKey->appends([ 'searchString' => Request::get('searchString')])->render()!!}
    </div>
  </body>
</html>
