<?php

if(isset($_GET["i"])){
	$i = $_GET["i"];
}
if(isset($_GET["z"])){
	$z = $_GET["z"];
}
if(isset($_GET["count"])){
	$count = $_GET["count"];
}
//phpinfo();
header('Content-Type: image/jpeg');
$url = "https://cloud.addictivetips.com/wp-content/uploads/2017/10/Purple-Night-Sky.jpg";
    $source = imagecreatetruecolor(1000, 1000);
      imagefill($source,0,0,imagecolorallocate($source,rand(0,0),rand(0,0),rand(0,0)));
//$source = imagecreatefromjpeg($url);
//$cropped = imagecrop($source, ['x' => 0, 'y' => 0, 'width' => 500, 'height' => 500]);
//imagejpeg($cropped);


$colors = Array();

for ($y=0; $y < 50; $y++) { 
	$colors[] = imagecolorallocate($source, rand(0,255), rand(0,255), rand(0,255));
}
$max = count($colors);
$color = $colors[rand(0,49)];
/*
imagefill($temp_image,0,0,imagecolorallocate($temp_image,255,255,255));

imagecopyresampled(
	$temp_image, 
	$source,  
	0,  
	0,  
	0,
	0,
	$temp_width, 
	$temp_height,
	imagesx($source), 
	imagesy($source)
);
*/
$middlex = imagesx($source)/2;
$middley = imagesy($source)/2;

for ($q=0; $q < 5000; $q++) {


	$p = $q/2;
 
//$z= rand(0,1000);
	$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, rand(0,$i)-$p, rand(0,$z)-$p, $color);
}
for ($q=0; $q < 5000; $q++) { 


	$p = $q/2;
	//$i = rand(0,1000);
//$z= rand(0,1000);
	$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, rand(0,$i)+$p, rand(0,$z)+$p, $color);
}
/*
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i, $z, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-10, $z-10, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-20, $z-20, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-30, $z-30, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-40, $z-40, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-50, $z-50, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-60, $z-60, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-70, $z-70, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-80, $z-80, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-90, $z-90, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-100, $z-100, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-110, $z-110, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-120, $z-120, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-130, $z-130, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-140, $z-140, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-150, $z-150, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-160, $z-160, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-170, $z-170, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-180, $z-180, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-190, $z-190, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-200, $z-200, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-210, $z-210, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-220, $z-220, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-230, $z-230, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-240, $z-240, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-250, $z-250, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-260, $z-260, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-270, $z-270, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-280, $z-280, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-290, $z-290, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-300, $z-300, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-310, $z-310, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-320, $z-320, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-330, $z-330, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-340, $z-340, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-350, $z-350, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-360, $z-360, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-370, $z-370, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-380, $z-380, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-390, $z-390, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-400, $z-400, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-410, $z-410, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-420, $z-420, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-430, $z-430, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-440, $z-440, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-450, $z-450, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-460, $z-460, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-470, $z-470, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-480, $z-480, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-490, $z-490, $color);
$color = $colors[rand(0,$max)];
imageellipse($source, $middlex, $middley, $i-500, $z-500, $color);
*/
/*
$color = $colors[rand(0,$max)];
imagerectangle($source, $i, 20, $middlex, 480, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, $i, 30, $middlex, 470, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, $i, 40, $middlex, 460, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, $i, 50, $middlex, 450, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, $i, 60, $middlex, 440, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, $i, 70, $middlex, 430, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, $i, 80, $middlex, 420, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, $i, 90, $middlex, 410, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, $i, 100, $middlex, 400, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, $i, 110, $middlex, 390, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, $i, 120, $middlex, 380, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, $i, 130, $middlex, 370, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, $i, 140, $middlex, 360, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, $i, 150, $middlex, 350, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, $i, 160, $middlex, 340, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, $i, 170, $middlex, 330, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, $i, 180, $middlex, 320, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, $i, 190, $middlex, 310, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, $i, 200, $middlex, 300, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, $i, 210, $middlex, 290, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, $i, 220, $middlex, 280, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, $i, 230, $middlex, 270, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, $i, 240, $middlex, 260, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, $i, 250, $middlex, 250, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, $i, 260, $middlex, 240, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, $i, 270, $middlex, 230, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, $i, 280, $middlex, 220, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, $i, 290, $middlex, 210, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, $i, 300, $middlex, 200, $color);

$color = $colors[rand(0,$max)];
imagerectangle($source, 0, 250, 1000, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 10, 250, 990, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 20, 250, 980, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 30, 250, 970, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 40, 250, 960, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 50, 250, 950, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 60, 250, 940, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 70, 250, 930, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 80, 250, 920, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 90, 250, 910, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 100, 250, 900, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 110, 250, 890, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 120, 250, 880, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 130, 250, 870, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 140, 250, 860, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 150, 250, 850, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 160, 250, 840, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 170, 250, 830, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 180, 250, 820, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 190, 250, 810, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 200, 250, 800, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 210, 250, 790, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 220, 250, 780, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 230, 250, 770, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 240, 250, 760, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 250, 250, 750, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 260, 250, 740, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 270, 250, 730, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 280, 250, 720, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 290, 250, 710, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 300, 250, 700, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 310, 250, 690, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 320, 250, 680, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 330, 250, 670, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 340, 250, 660, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 350, 250, 650, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 360, 250, 640, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 370, 250, 630, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 380, 250, 620, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 390, 250, 610, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 400, 250, 600, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 410, 250, 590, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 420, 250, 580, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 430, 250, 570, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 440, 250, 560, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 450, 250, 550, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 460, 250, 540, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 470, 250, 530, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 480, 250, 520, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 490, 250, 510, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 500, 250, 500, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 510, 250, 490, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 520, 250, 480, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 530, 250, 470, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 540, 250, 460, $z, $color);
$color = $colors[rand(0,$max)];
imagerectangle($source, 550, 250, 450, $z, $color);


//imagerectangle($source, 0, 100, 600, 600, $one);
//imagerectangle($source, 50, 100, 600, 600, $one);
//imagerectangle($source, 100, 0, 500, 500, $two);
//imagerectangle($source, 200, 300, 450, 450, $three);
*/

	imagejpeg($source);




?>