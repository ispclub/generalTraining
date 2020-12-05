<?php

$flag = 'ispclub{34sy_m4th_fck1ng_sh1t}';
session_start();
$result = new stdClass();
$result->status = null;
$result->message = '';
if($_SERVER["REQUEST_METHOD"] === 'GET') {
	session_destroy();
	session_start();
	$_SESSION['expired'] = time();
	$rd_operator = ['+', '-'];
	$num1 = mt_rand(499999, 989999);
	$num2 = mt_rand(10000, 999999 - $num1);
	$str = $num1. ' '.$rd_operator[mt_rand(0, 1)]. ' ' .$num2;
	$_SESSION['answer'] = caculator($str);
	$result->status = 1;
	$result->message = $str;
} elseif($_SERVER["REQUEST_METHOD"] === 'POST') {
	if(isset($_POST['answer']) && $_SESSION['answer']) {
		if(intval($_POST['answer']) === $_SESSION['answer']) {
			if(time() - $_SESSION['expired'] <= 3) {
				$result->status = 1;
				$result->message = $flag;
			} else {
				$result->status = 2;
				$result->message = 'Tính nhẩm mà lâu zayyy';
			}
		} else {
			$result->status = 0;
			$result->message = 'Sai!!!';
		}
	} else {
		$result->status = 0;
		$result->message = 'Forbidden';
	}
} else {
	header('Content-Type: application/json');
    header('HTTP/1.1 403 Forbidden');
    die('Method '.$_SERVER['REQUEST_METHOD'].' not accepted');
}

function caculator($str) {
	$str = trim($str);
	if(strpos($str, '+') !== false) {
		return intval(explode("+",$str)[0]) + intval(explode("+",$str)[1]);
	} else {
		return intval(explode("-",$str)[0]) - intval(explode("-",$str)[1]);
	}
}
echo json_encode($result);