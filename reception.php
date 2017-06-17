<?php

use Ncmb\NCMB;

$appkey = "dbd746445561ca4da9a05b60c990b9612cbfeda9a49e8a6298a5a51a66019d38";
$clientkey = "7ff49414b18fef5ba3e0d897c58f2893ce5a9bf52ea8280224288f962b4277c2";

NCMB::initialize($appkey, $clientkey);

$className = 'TestClass';

// 保存
$friend = new Object($className);
$friend->name = 'サーバルちゃん';
$firend->phrase = 'たーのしー';
$friend->save();

// 読み込み
$query = new Query($className);
$query->equalTo('name', 'サーバルちゃん');
$friends = $query->find();

?>
