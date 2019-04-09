<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>상세보기</title>
    <link rel="stylesheet" href="http://localhost/work5/resources/css/style.css">
  </head>
  <body>
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
        <tr>
            <td>{{$showMe->id}}</td>
            <td>{{$showMe->email}}</td>
            <td>{{$showMe->member}}</td>
            <td>{{$showMe->kname}}</td>
            <td>{{$showMe->ename}}</td>
            <td>{{$showMe->sex}}</td>
            <td>{{$showMe->spot}}</td>
            <td>{{$showMe->position}}</td>
            <td colspan="3" style='border-right: 0;'>{{$showMe->callnum}}</td>
        </tr>
    </table>
  </body>
</html>
