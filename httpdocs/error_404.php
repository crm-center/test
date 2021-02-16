<?php
/*
 * @copyright  2010 ryocho
 * @author     ryocho <info@ryocho.jp>
*/

/*************************************
 * include
*/
require_once("./conf/user/commonfile.php"); //includeファイル

/*************************************
 * code
*/




/*************************************
 * ページを表示
*/
$smarty->display(basename($_SERVER['SCRIPT_NAME'],".php").".tpl");

