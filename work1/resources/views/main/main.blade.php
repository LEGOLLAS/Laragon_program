<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>메인 화면</title>
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
              <li class="active"><a href="http://localhost/work1/public/">HOME</a></li>
              <li><a href="http://localhost/work1/public/mypage">MYPAGE</a></li>
              <li><a href="http://localhost/work1/public/register">REGISTER</a></li>
           </ul>
        </div>
      <!--/.navbar-collapse -->
      </div>
    </div>
    <div class="container">
    	<h2 style='margin-top:60px;'>회원목록</h2>
    	<table class="table table-bordered table-striped nanum">
    	  <thead>
    	    <tr>
    	      <th>번호</th>
    	      <th>사용자 계정</th>
            <th>회원등급</th>
    	      <th>한글이름</th>
            <th>영문이름</th>
    	      <th>성별</th>
            <th>직위</th>
    	      <th>근무처명</th>
            <th>연락처</th>
    	    </tr>
    	  </thead>
    	  <tbody>
          @foreach($postData as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->member}}</td>
            <td>{{$item->kname}}</td>
            <td>{{$item->ename}}</td>
            <td>{{$item->sex}}</td>
            <td>{{$item->spot}}</td>
            <td>{{$item->position}}</td>
            <td>{{$item->callNumber}}</td>
          </tr>
          @endforeach
    	  </tbody>
    	</table>

     <style media="screen">
       #page_wrap{ width: 560px; text-align:center; margin: 0 auto;}
     </style>

      <div id="page_wrap" style="text-align:center">
        {!!$postData->appends([ 'searchString' => Request::get('searchString')])->render()!!}
      </div>
    </div>
  </body>
</html>
