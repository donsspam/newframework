<?php

namespace Donsapp;
require_once('includes.php');

Debug::Set('Setup');

$o = new App();
$o->SetPageRenderStartTime();
$o->Setup();

$class_file = './pages/' . $o->_page . '/classes.php';
if (is_file($class_file)) {
  require_once($class_file);
  $p = new Page();
  $p->Setup();
}
$p = new Page();
$p->Setup();

$o->SetPageRenderFinishTime();

