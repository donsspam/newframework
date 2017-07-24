<?php

namespace Donsapp;

//========================================================================
class Debug {
  private static $debug_new = null;
  private static $debug_trace = null;
  private static $debug_caller = null;
  public static $_debug_text = '';
  public static function Set($x){
    self::$debug_new    = $x;
    self::$debug_trace  = debug_backtrace();
    self::$debug_caller = array_shift(self::$debug_trace);
    self::$debug_new    = basename(self::$debug_caller['file']). ' (' . self::$debug_caller['line'] . ') ' . self::$debug_new;
    self::$_debug_text .= self::$debug_new . '<br>' . PHP_EOL;
  }
  public static function Get(){ return self::$_debug_text; }
}
