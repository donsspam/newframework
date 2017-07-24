<?php

namespace Donsapp;
use \PDO;

//========================================================================
class Database {
  private static $_database_type     = null;
  private static $_database_hostname = null;
  private static $_database_username = null;
  private static $_database_password = null;
  private static $_database_port     = null;
  private static $_database_name     = null;
  private static $_connection        = null;
  private static $_connection_status = null;
  public static function Setup(){
    Debug::Set('Database setup initiated');
    self::SetType('mysql');
    self::SetHostname('localhost');

  self::SetUsername('zaphod');
  self::SetPassword('pz8oVR5E72EuFyGp');
  self::SetDefaultDatabase('zaphod_test1');

    //self::SetUsername(getenv('DEV_USERNAME'));
    //self::SetPassword(getenv('DEV_PASSWORD'));
    //self::SetDefaultDatabase('test');

    self::SetPort('3306');

    Debug::Set('Database type: ' . self::GetType());
    Debug::Set('Database host: ' . self::GetHostname());
    Debug::Set('Database username: ***************');
    Debug::Set('Database password: ***************');
    Debug::Set('Database port: ' . self::GetPort());
    Debug::Set('Database default database: ' . self::GetDefaultDatabase());
    try {
      self::SetConnection(new PDO(self::GetType() .
        ': host='  . self::GetHostname() .
        '; port='  . self::GetPort() .
        '; dbname='. self::GetDefaultDatabase(), self::GetUsername(), self::GetPassword()));
      self::SetConnectionStatus('ok');
      Debug::Set('Database connection SUCCESS');
    } catch(PDOException $e) {
      self::SetConnectionStatus($e->getMessage());
      Debug::Set('Database connection FAILED');
    }
  }
  private static function SetType($x){ self::$_database_type = $x; }
  private static function GetType(){ return self::$_database_type; }
  private static function SetHostname($x){ self::$_database_hostname = $x; }
  private static function GetHostname(){ return self::$_database_hostname; }
  private static function SetUsername($x){ self::$_database_username = $x; }
  private static function GetUsername(){ return self::$_database_username; }
  private static function SetPassword($x){ self::$_database_password = $x; }
  private static function GetPassword(){ return self::$_database_password; }
  private static function SetPort($x){ self::$_database_port = $x; }
  private static function GetPort(){ return self::$_database_port; }
  private static function SetDefaultDatabase($x){ self::$_database_name = $x; }
  private static function GetDefaultDatabase(){ return self::$_database_name; }
  private static function SetConnection($x){ self::$_connection = $x; }
  public  static function GetConnection(){ return self::$_connection; }
  private static function SetConnectionStatus($x){ self::$_connection_status = $x; }
  public  static function GetConnectionStatus(){ return self::$_connection_status; }
}
