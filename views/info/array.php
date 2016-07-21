<?php
$color = array('white','#FFF252','#5283FF','#52FFEC','#FF70D7','#CF5454','#7EFD30');
$girl_name = array('Наташа','Юля','Катя','Арюна','Марина');
$relationship = array('любит','не любит','плюнет в','поцелует','прижмет к сердцу');
$boy_name = array('Тимура','Юру','Алдара','Илью','меня');

$girl_rand_max = count($girl_name)-1;
$relationship_rand_max = count($relationship)-1;
$boy_rand_max = count($boy_name)-1;
$color_max = count($color)-1;
printf('{"girl_name":"%s","relationship":"%s",
	"boy_name":"%s", "color":"%s"}',$girl_name[rand(0,$girl_rand_max)],
	   $relationship[rand(0,$relationship_rand_max)],
	   $boy_name[rand(0,$boy_rand_max)], $color[rand(0,$color_max)]);
?>