<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>자기소개서</title>
    <link rel="stylesheet" href="http://localhost/work5/resources/css/style.css">
  </head>
  <body>

    <?php
    //JSON을 다시 PHP 배열로 변환
    $convertData = json_decode($introKey);
    ?>

    <div id="form_header">
        <h1>자기소개서</h1>
    </div>
    <div class="form_content">
        <ul>
          <li class='a'>이름 : {{$convertData->name}}</li>

        </ul>
    </div>
  </body>
</html>
