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
        <form action="/work5/puclic/search" method="get">
            {{ csrf_field() }}
          <div class='register_form'>
             <input class="search_bt" type="submit" value="Search">
             <input class="search_bt" type="search" name ='searchData' value="" placeholder="Search" style="width:200px; ">
          </div>
        </form>
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
            <td>
                <input class='form_bt' type="button" name="modification" value="수정" onClick="location.href='http://localhost/work5/public/update?id={{$item->id}}'">
               <form class="" action="/work5/public/delete" method="post">
                 {{ csrf_field() }}
                 <input type="hidden" name="id" value="{{$item->id}}">
                 <input class='form_bt'  type="submit" name="delete" value="삭제">
               </form>
            </td>
            <td style='border-right: 0;'>
                <a href="http://localhost/work5/public/info">상세보기</a>
            </td>
        </tr>
        @endforeach
    </table>
    <div id="page_wrap" style="text-align:center">
        {!!$introKey->appends([ 'searchString' => Request::get('searchString')])->render()!!}
    </div>
  </body>
</html>
