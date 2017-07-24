<?php

namespace Donsapp;

class Page   {
  public function Setup() {
    \Donsapp\Debug::Set('Page setup initiated');
    \Donsapp\Sql::ExecuteSql(' SELECT * FROM don_log ; ');
//    echo "<br> asd  ROW 0 = " . \Donsapp\Sql::GetField('ip_addr');
  }
}
