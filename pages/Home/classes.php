<?php

namespace Donsapp;

class Page extends Baseclass  {
  public function Setup() {
    Debug::Set('Page setup initiated');
    Sql::SetQueryName('log_file');
    Sql::ExecuteSql(' SELECT * FROM don_log ; ');
    $this->RunSql(' SELECT * FROM don_log ; ');
    //echo "<br> logid = " . \Donsapp\Data::Get('log_file','id',234);
  }
}
