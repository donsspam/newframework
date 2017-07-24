<?php

namespace Donsapp;

//========================================================================
class Baseclass {
  public $name = 'base';
  private $_page_render_start_time = null;
  private $_page_render_finish_time = null;
  public function SetPageRenderStartTime() { $this->_page_render_start_time = microtime(true); }
  public function SetPageRenderFinishTime() { $this->_page_render_finish_time = number_format(microtime(true) - $this->_page_render_start_time,3); }
  public function GetPageRenderFinishTime() { return $this->_page_render_finish_time; }
  public static function RunSql($sql){
    Sql::ExecuteSql($sql);
  }
}
