<?php

$viewpass = '1234'; // 密码必须大于3位。留空则任何人可以访问
$title = '赵波的简历';
$subtitle = 'Java开发工程师';
$content = file_get_contents("me.md");;

$data['local'] = 1;


if( strlen( $viewpass ) > 0 && trim($_REQUEST['vpass']) != $viewpass )
{
	$data['errno'] = '0';
	$data['show'] = 0;
	$data['title'] = '';
	$data['subtitle'] = '';
	$data['content'] = '';
}
else
{
	
	$data['errno'] = '0';
	$data['show'] = 1;
	$data['title'] = $title;
	$data['subtitle'] = $subtitle;
	$data['content'] = $content;

}

echo json_encode( $data );
