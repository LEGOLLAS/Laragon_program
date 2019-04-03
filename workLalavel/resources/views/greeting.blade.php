<style media="screen">
  #input_form{width: 300px; border: 1px solid black;}
  .input_title{width: 70px; float: left;}
  .input_content{width: 250px; margin: 10 auto;}
  #register{width: 100%;}
</style>

<form class="" action="http://localhost/workLalavel/public/greeting_ok" method="post">
    <div id="input_form">
      <div class="input_content">
        <div class="input_title">이름 : </div><input type="text" name="form_name" value="이름을 입력하세요">
      </div>
      <div class="input_content">
        <div class="input_title">이메일 : </div><input type="text" name="form_email" value="이메일을 입력하세요">
      </div>
      <div class="input_content">
        <div class="input_title">연락처 : </div><input type="tel" name="form_num" title="전화번호를 입력하세요." placeholder="00*-000*-0000" pattern="[0-9]{2,3}-[0-9]{3,4}-[0-9]{3,4}" maxlength="13">
      </div>
      <div class="input_content">
        <input id='register' type="button" name="input_confirm" value="등록">
      </div>
    <div>
</form>
