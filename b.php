<style media="screen">
  #input_form{width: 300px; border: 1px solid black;}
  .input_title{width: 70px; float: left;}
  .input_content{width: 250px; margin: 10 auto;}
  .callnum{width: 38px;}
  #register{width: 100%;}
</style>
<?php
$a = $_GET['form_name'];


 ?>
<?php print_r($_POST); ?>
<form class="" action="/workLalavel/public/greeting_ok" method="get">
    <div id="input_form">
      <div class="input_content">
        <div class="input_title">이름 : </div><?php echo $_GET['form_name']?>
      </div>
      <div class="input_content">
        <div class="input_title">이메일 : </div><?php echo $_GET['form_email1']?>
      </div>
      <div class="input_content">
        <div class="input_title">연락처 : </div>
        <?php ///echo $_GET['form_num1']?>&nbsp;-&nbsp;
        <?php //echo $_GET['form_num2']?>&nbsp;-&nbsp;
        <?php //echo $_GET['form_num3']?>
      </div>
    <div>
</form>
