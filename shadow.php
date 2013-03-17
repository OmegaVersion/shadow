<?php
/**
 * ������shadow�����ļ�
 * 
 * ������
 * 1. class autoload����
 * 2. ���������������
 * 3. ���������ͻ����쳣����
 * 
 * @author monkee<zomboo1@126.com>
 * @copyright 2013-2014
 * @package shadow
 * @version 0.1.0
 */

if(!defined("DS")){
	define("DS", DIRECTORY_SEPARATOR);
}

define("SD_ROOT", dirname(__FILE__));

spl_autoload_register("__sd_autoload");
function __sd_autoload($class){
	$classPath = str_replace('_', DS, $class);
	if(strpos($classPath, DS) === false){
		$classPath .= DS . $class;
	}
	$classPath = SD_ROOT . DS . $classPath . '.class.php';
	if(!is_file($classPath)){
		throw new SDException("Class {$class} is not defined,should be {$classPath}."); //�����б�ķ���Ҳ�У����磺����Ϊ
	}
	include_once $classPath;
}


class SDException extends Exception{}