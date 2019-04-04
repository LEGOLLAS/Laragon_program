<link rel="stylesheet" href="http://localhost/work5/resources/css/style.css">
<title>가입하기</title>
<div id="form_header">
    <h1>가입</h1>
</div>
<form class="form_join" action="/work5/public/join_output" method="post">
{{ csrf_field() }}
  <table>
    <tr>
      <td>이름 : </td>
      <td><input type="text" name="join_name" value=""></td>
    </tr>
    <tr>
      <td>아이디 : </td>
      <td><input type="text" name="join_id" value=""></td>
    </tr>
    <tr>
      <td>이메일 : </td>
      <td><input type="text" name="join_email" value=""></td>
    </tr>
    <tr>
      <td id="aaa"><input type="submit" name="input_join" value="가입하기"></td>
    </tr>
  </table>
</form>
