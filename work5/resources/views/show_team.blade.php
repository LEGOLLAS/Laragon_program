<link rel="stylesheet" href="http://localhost/work5/resources/css/style.css">
<title>팀소개</title>
<div id="form_header">
    <h1>팀 테이블</h1>
</div>
  <!--전체 테이블을 반복하고 키의 수만큼 반복시킴 -->
  @foreach ($team_key as $key => $value)
    <table id="team_table">
        <tr>
          <!--상단 제목에 팀 이름을 반복적으로 불러옴 -->
          <th colspan="3">{{$key}}</th>
        </tr>
        <!--테이블안에 행을 반복시킴xxxx-->
      @foreach ($value as $keys => $values)
        <tr>
          <!--안에 키와 값을 반복적으로 불러옴 -->
          <td colspan="2">{{$keys}}</td>
          <td colspan="2">{{$values}}</td>
        </tr>
      @endforeach
    </table>
  @endforeach
</div>
