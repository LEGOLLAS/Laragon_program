<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>자기소개서</title>
    <link rel="stylesheet" href="http://localhost/work5/resources/css/style.css">
  </head>
  <body>
    <div id="form_header">
        <h1>자기소개서</h1>
    </div>
    <div class="form_content">
        <ul>
          <li class='a'>이름 : {{$intro_key['name']}}</li>
          <li class='a'>나이 : {{$intro_key['age']}}</li>
          <li class='a'>이메일 : {{$intro_key['email']}}</li>
          <li class='a'>대학교 : {{$intro_key['university']}}</li>
          <li class='a'>학과 : {{$intro_key['study']}}</li>
          <li class='a'>군대 : {{$intro_key['army']}}</li>
          <li class='a'>주소 : {{$intro_key['address']}}</li>
        </ul>
    </div>
  </body>
</html>
