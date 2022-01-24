<?php
/*
* Name:template_php.php
*
*/
require_once('exampleClass.php');

$options['loop_count'] = 5;
$options['loop_count'] = 5;

$exInstance = new exampleClass();
$exInstance->outlog('処理を開始します。');
$exInstance->execute($argv);
$exInstance->outlog('処理を終了します。');