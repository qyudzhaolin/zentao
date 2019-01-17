<?php
 die();
?>

10:51:20 syntax error, unexpected '}', expecting ',' or ';' in D:\www\zentao\module\hello\control.php on line 24 when visiting /index.php?m=hello&amp;f=word

10:51:37 ERROR: the module hello has no word method in D:\www\zentao\framework\base\router.class.php on line 1648, last called by D:\www\zentao\www\index.php on line 67 through function loadModule.
 in D:\www\zentao\framework\base\router.class.php on line 2215 when visiting /index.php?m=hello&amp;f=word

10:56:33 Call to undefined method helloModel::word() in D:\www\zentao\module\hello\control.php on line 23 when visiting /index.php?m=hello&amp;f=word

11:02:19 ERROR: the view file D:\www\zentao\module\hello\view\word.html.php not found in D:\www\zentao\framework\base\control.class.php on line 390, last called by D:\www\zentao\framework\base\control.class.php on line 625 through function setViewFile.
 in D:\www\zentao\framework\base\router.class.php on line 2215 when visiting /index.php?m=hello&amp;f=word

11:02:58 syntax error, unexpected end of file, expecting ',' or ';' in D:\www\zentao\module\hello\view\word.html.php on line 2 when visiting /index.php?m=hello&amp;f=word

17:30:56 ERROR: SQLSTATE[HY000] [1045] Access denied for user 'root'@'10.16.16.3' (using password: YES) in D:\www\zentao\framework\base\router.class.php on line 2164, last called by D:\www\zentao\framework\base\router.class.php on line 2115 through function connectByPDO.
 in D:\www\zentao\framework\base\router.class.php on line 2215 when visiting 
