<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>메인 화면</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  </head>
    <style>
    @media (min-width: 768px) {
      .container {
        width: 750px;
      }
    }

    @media (min-width: 992px) {
      .container {
        width: 940px;
      }
    }

    /*사실 이 블럭은 없어도 된다*/
    @media (min-width: 1200px) {
      .container {
        width: 1800px;
      }
    }
    </style>

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
              <li><a href="http://localhost/work1/public/register">REGISTER</a></li>
           </ul>
        </div>
      <!--/.navbar-collapse -->
      </div>
    </div>
    <div class="container">
    	<h2 style='margin-top:60px;'>회원목록</h2>
    	<table class="table table-bordered table-striped nanum table-hover">
    	  <thead>
    	    <tr class="success">
    	      <th class='text-center'>번호</th>
    	      <th class='text-center'>사용자 계정</th>
            <th class='text-center'>회원등급</th>
    	      <th class='text-center'>한글이름</th>
            <th class='text-center'>영문이름</th>
    	      <th class='text-center'>성별</th>
            <th class='text-center'>직위</th>
    	      <th class='text-center'>근무처명</th>
            <th class='text-center'>연락처</th>
            <th class='text-center' colspan="2">편집</th>
    	    </tr>
    	  </thead>
    	  <tbody>
          @foreach($postData as $item)
          <tr>
            <td class='text-center'>{{$item->id}}</td>
            <td class='text-center'>{{$item->email}}</td>
            <td class='text-center'>{{$item->member}}</td>
            <td class='text-center'>{{$item->kname}}</td>
            <td class='text-center'>{{$item->ename}}</td>
            <td class='text-center'>{{$item->sex}}</td>
            <td class='text-center'>{{$item->spot}}</td>
            <td class='text-center'>{{$item->position}}</td>
            <td class='text-center'>{{$item->callNumber}}</td>
            <td class='text-center'>
              <button type="button" class="btn btn-info btn-xs" onclick="window.location.href='http://localhost/work1/public/detailPage?id={{$item->id}}'">
                상세보기
              </button>
            </td>
            <td class='text-center'>
              <button type="button" class="btn btn-danger btn-xs">삭제하기</button>
            </td>
          </tr>
          @endforeach
    	  </tbody>
    	</table>

     <style media="screen">
       #page_wrap{ width: 600px; text-align:center; margin: 0 auto;}
     </style>

      <div id="page_wrap" style="text-align:center">
        {!!$postData->appends([ 'searchString' => Request::get('searchString')])->render()!!}
      </div>
    </div>
  </body>
</html>
