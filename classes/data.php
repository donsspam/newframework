<?php

namespace Donsapp;

//========================================================================
class Data {
  private static $_results = null;
  private static $_name    = null;

  public static function Get($query, $field, $row){ return self::$_results[$query][$row][$field]; }
  public static function GetRowCount($query){ return count(self::$_results[$query]); }
  public static function SetName($x){ self::$_name = $x; }

//========================================================================
  public static function Set($x){
    self::$_results[self::$_name] = $x;
    \Donsapp\Debug::Set('Stored named query: ' . self::$_name);
    self::$_name = '';
  }

//========================================================================
  public static function GetData($query, $field, $lookin, $lookfor){
    $key = array_search($lookfor, array_column(self::$_results[$query], $lookin));
    return self::$_results[$query][$key][$field];
  }

}
