<?php

namespace Donsapp;
use \PDO;

//========================================================================
class Sql {
  public static $_sql        = null;
  public static $_statement  = null;
  public static $_name       = null;

  public static function SetQueryName($x){ self::$_name = $x; }
  private static function SetStatement(){ self::$_statement = Database::GetConnection()->prepare(self::$_sql); }
  private static function ExecuteStatement(){ self::$_statement->execute(); }
  public static function GetRowsAffected(){ return self::$_statement->rowCount();   }
  public static function SetSql($sql, $additive = 0){ if ($additive) self::$_sql .= $sql; else self::$_sql = $sql; }
  public static function GetSql(){ return self::$_sql; }

//========================================================================
  public static function ExecuteSql($sql = ''){
    self::SetSql($sql);
    self::Execute();
  }

//========================================================================
  public static function Execute(){
    self::SetStatement();
    self::ExecuteStatement();
    Debug::Set('Sql (' . self::GetRowsAffected() . ' rows): ' . self::$_sql);
    if (self::$_name) { Data::SetName(self::$_name); Data::Set(self::$_statement->fetchAll(PDO::FETCH_ASSOC)); }
    self::$_name = null;
  }

}
