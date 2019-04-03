<?php
echo '<b>배열에서 Key와 Value 이해하기</b>'.'</br>';
//다차원 배열에서 value 선택하는 방법
$team = array(
	'1팀'=>array('팀장'=>'홍지혁', '부팀장'=>'크로스', '팀원'=>'모드리치'),
	'2팀'=>array('팀장'=>'호날두', '부팀장'=>'벤제마', '팀원'=>'베일'),
	'3팀'=>array('팀장'=>'반페르시', '부팀장'=>'루니', '팀원'=>'비디치'),
	);

	foreach($team as $key=>$value){
		foreach($value as $keys => $values){
			echo $key.'에서 '.$keys.'은 '.$values.'입니다.'.'</br>';
		}
	}

echo '</br>'.'<b>배열 정렬하기</b>'.'</br>';
//배열의 정렬을 적용하기
function print1($arr) {
    foreach ($arr as $value) {
        echo "$value, ";
    }
    echo "</br>";
}

function print2($aarr) {
    foreach ($aarr as $key => $value) {
    echo "($key, $value), ";
    }
    echo "</br>";
}

//sort() 적용하기 : 기본 정렬(오름차순)
$fruit = array('사과', '배', '귤 ');
sort($fruit);
print1($fruit);

//resort() 적용하기 : 역순 정렬
rsort($fruit);
print1($fruit);

//asort() 적용하기 : 내용을 기준으로 오름차순
$student = array('홍지혁'=>'26', 
								 '김철수'=>'19',
								 '박수진'=>'32',
								 '김미영'=>'29',
								 '나영수'=>'22');
asort($student);
print2($student);

//ksort() 적용하기 : 키값을 기준으로 오름차순
ksort($student);
print2($student);

//arsort() 적용하기 : asort()의 역순으로 정렬
arsort($student);
print2($student);

//krsort() 적용하기 : ksort()의 역순으로 정렬
krsort($student);
print2($student);
?>
