<?php
$config->installed       = true;
$config->debug           = false;
// $config->requestType     = 'PATH_INFO';
$config->requestType     = 'GET';
$config->db->host        = '10.16.0.130';
// $config->db->host        = '127.0.0.1';
$config->db->port        = '3306';
$config->db->name        = 'zentao';
$config->db->user        = 'root';
$config->db->password    = 'ypw2018@963852';
$config->db->prefix      = 'zt_';
$config->webRoot         = getWebRoot();
$config->default->lang   = 'zh-cn';
