<?php

if ($this->GetQs('product') == '') {
  include 'view_default.php';
} else {
  include 'view_items.php';
}

