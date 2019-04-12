<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>마이페이지</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"></button>
           <a class="navbar-brand hidden-xs" href="http://localhost/work1/public/">CRUD HONG</a>
           <form class="navbar-form pull-left" role="search">
              <div class="input-group">
                 <input type="text" class="form-control" placeholder="Search">
                 <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                 </div>
              </div>
           </form>
        </div>
        <div class="navbar-collapse collapse">
           <ul class="nav navbar-nav navbar-right">
              <li><a href="http://localhost/work1/public/">HOME</a></li>
              <li><a href="http://localhost/work1/public/register">REGISTER</a></li>
           </ul>
        </div>
      <!--/.navbar-collapse -->
      </div>
    </div>
    <style media="screen">
      .text-center{border-left: 1px solid #ddd; border-right: 1px solid #ddd;}
    </style>

    <article class="container">
            <div class="page-header">
                <div class="col-md-6 col-md-offset-3">
                  <h2>상세페이지</h2>
                  <table class='table'>
                    <tr>
                      <td class='text-center' style='font-size:18px; '>번호</td>
                      <td class='text-center'>{{$choiceData->id}}</td>
                    </tr>
                    <tr>
                      <td class='text-center' style='font-size:18px; '>아이디(이메일)</td>
                      <td class='text-center'>{{$choiceData->email}}</td>
                    </tr>
                    <tr>
                      <td class='text-center' style='font-size:18px; '>회원구분</td>
                      <td class='text-center'>{{$choiceData->member}}</td>
                    </tr>
                    <tr>
                      <td class='text-center' style='font-size:18px; '>성명(한글)</td>
                      <td class='text-center'>{{$choiceData->kname}}</td>
                    </tr>
                    <tr>
                      <td class='text-center' style='font-size:18px; '>성명(영문)</td>
                      <td class='text-center'>{{$choiceData->ename}}</td>
                    </tr>
                    <tr>
                      <td class='text-center' style='font-size:18px; '>성별</td>
                      <td class='text-center'>{{$choiceData->sex}}</td>
                    </tr>
                    <tr>
                      <td class='text-center' style='font-size:18px; '>직위</td>
                      <td class='text-center'>{{$choiceData->spot}}</td>
                    </tr>
                    <tr>
                      <td class='text-center' style='font-size:18px; '>근무처명</td>
                      <td class='text-center'>{{$choiceData->position}}</td>
                    </tr>
                    <tr>
                      <td class='text-center' style='border-bottom:1px solid #ddd; font-size:18px;'>연락처</td>
                      <td class='text-center' style='border-bottom:1px solid #ddd'>{{$choiceData->callNumber}}</td>
                    </tr>
                  </table>
                </div>
            </div>
    </article>
    <div class="text-center" style='margin:0 auto'>
        <a href="http://localhost/work1/public/edit?id={{$choiceData->id}}"  class="btn btn-warning" style='width:100px; margin:0 auto;'>수정하기</a>
    </div>
  </body>
</html>
