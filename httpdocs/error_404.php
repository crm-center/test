<?php
/*
 * @copyright  2010 ryocho
 * @author     ryocho <info@ryocho.jp>
*/

/*************************************
 * include
*/
require_once("./conf/user/commonfile.php"); //include�ե�����

/*************************************
 * code
*/




/*************************************
 * �ڡ�����ɽ��
*/
$smarty->display(basename($_SERVER['SCRIPT_NAME'],".php").".tpl");

