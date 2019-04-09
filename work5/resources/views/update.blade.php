<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>등록하기</title>
    <link rel="stylesheet" href="http://localhost/work5/resources/css/style.css">
  </head>
  <body>
    <div class="register">
        <form class="register_info" action="/work5/public/participants" method="post">
          {{ csrf_field() }}
          <table>
            <tr>
              <td>번호 : </td>
              <td></td>
            </tr>
            <tr>
              <td>이메일 : </td>
              <td><input type="text" name="create_email" value="{{$result->email}}"></td>
            </tr>
            <tr>
              <td>회원구분 : </td>
              <td><input type="text" name="create_member" value="{{$result->member}}"></td>
            </tr>
            <tr>
              <td>이름(한글) : </td>
              <td><input type="text" name="create_kname" value="{{$result->kname}}"></td>
            </tr>
            <tr>
              <td>이름(영어) : </td>
              <td><input type="text" name="create_ename" value="{{$result->ename}}"></td>
            </tr>
            <tr>
              <td>성별 : </td>
              <td><input type="text" name="create_sex" value="{{$result->sex}}"></td>
            </tr>
            <tr>
              <td>직위 : </td>
              <td><input type="text" name="create_spot" value="{{$result->spot}}"></td>
            </tr>
            <tr>
              <td>근무처명 : </td>
              <td><input type="text" name="create_position" value="{{$result->position}}"></td>
            </tr>
            <tr>
              <td>연락처 : </td>
              <td><input type="text" name="create_callnum" value="{{$result->callnum}}"></td>
            </tr>
            <tr>
              <td id="aaa"><input type="submit" name="input_join" value="가입하기"></td>
            </tr>
          </table>
        </form>
    </div>
  </body>
</html>
