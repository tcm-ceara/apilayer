<?php
// auto-generated by sfDatabaseConfigHandler
// date: 2010/07/05 10:20:11

return array(
'propel' => new sfPropelDatabase(array (
  'classname' => 'MssqlPropelPDO',
  'phptype' => 'mssql',
  'dsn' => 'dblib:host=localhost;dbname=banco;charset=utf-8',
  'username' => 'usuario',
  'password' => 'senha',
  'encoding' => NULL,
  'pooling' => true,
  'name' => 'propel',
)),

'banco_aberto' => new sfPropelDatabase(array (
  'dsn' => 'pgsql:host=localhost;dbname=banco;user=usuario;password=senha',
  'name' => 'banco_aberto',
)),);
