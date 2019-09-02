<?php
$date = date('YmdHis');
$img_array = array('https://business.caw.ac.uk/test/dynamic_img.png', 'https://business.caw.ac.uk/test/dynamic_img.jpg', 'https://business.caw.ac.uk/test/dynamic_img.jpeg', 'https://business.caw.ac.uk/test/dynamic_img.gif');
$img = $img_array[0];
if(isset($_GET['img']) && !empty($_GET['img']) ){
	$img = $img_array[$_GET['img'] ];
}
$header_array = array(
	'png' => 'Content-Type: image/png',
	'jpeg' => 'Content-Type: image/jpeg',
	'jpg' => 'Content-Type: image/jpeg',
	'gif' => 'Content-Type: image/gif'
);
$img_info = pathinfo($img);

//echo $header_array[$img_info['extension']];
//echo $img;

if(array_key_exists($img_info['extension'],$header_array) ){
	header($header_array[$img_info['extension']]);
}
readfile($img . '?date=' . $date);
?>