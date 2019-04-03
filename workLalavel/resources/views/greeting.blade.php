<style media="screen">
  #input_form{width: 300px; border: 1px solid black;}
  .input_title{width: 70px; float: left;}
  .input_content{width: 250px; margin: 10 auto;}
  .callnum{width: 38px;}
  #register{width: 100%;}
</style>

<form class="" action="/workLalavel/public/greeting_ok" method="post">
{{ csrf_field() }}
    <div id="input_form">
      <div class="input_content">
        <div class="input_title">이름 : </div><input type="text" name="form_name" value="">
      </div>
      <div class="input_content">
        <div class="input_title">이메일 : </div><input type="text" name="form_email" value="">
      </div>
      <div class="input_content">
        <div class="input_title">연락처 : </div>
        <input class="callnum" type="tel" name="form_num" title="전화번호를 입력하세요.">&nbsp;-&nbsp;
        <input class="callnum" type="tel" name="form_num" title="전화번호를 입력하세요.">&nbsp;-&nbsp;
        <input class="callnum" type="tel" name="form_num" title="전화번호를 입력하세요.">
      </div>
      <div class="input_content">
        <input id='register' type="submit" name="input_confirm" value="등록" >
      </div>
    <div>
</form>
