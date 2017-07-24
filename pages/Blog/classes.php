<?php

namespace Donsapp;

class Page   {
  public function Setup() {
    \Donsapp\Debug::Set('Page setup initiated');
    \Donsapp\Sql::ExecuteSql(' SELECT * FROM ron_size_list ; ');
    //echo "<br> asd  ROW 0 = " . \Donsapp\Sql::GetField('ron_size_list');
  }
}
