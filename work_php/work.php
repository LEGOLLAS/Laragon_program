<?php
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

?>