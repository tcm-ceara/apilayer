<?php
if (!in_array(@$_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1','192.168.1.53','172.16.0.109')))
{
  die('You are not allowed to access this file.');
}


require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('backend', 'prod', false);
sfContext::createInstance($configuration)->dispatch();
