<?php
/**
 * shadow���Ļ���ʹ����
 * 
 * 1. Ϊ����ṩʹ��ָ�Ϻ�˵��
 * 
 * @author monkee<zomboo1@126.com>
 * @copyright 2013-2014
 * @package shadow
 * @version 0.1.0
 */

include "shadow.php";

//�����Զ������Ƿ�����

$autoClass = new Sample(); //���������Ƿ�����
$autoClass = new Sample_SubClass(); //���Ը��������������Ƿ�����
$autoClass = new Sample_SubClass_SecClass(); //��������µĶ༶�����Ƿ�����

$constants = get_defined_constants(true);
print_r($constants['user']);