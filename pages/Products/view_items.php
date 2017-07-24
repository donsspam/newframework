<div style=" clear: both; max-width: 1200px; margin: auto; ">

<h2> <a class="link1" href="?page=Products">Products</a> > <?php echo $this->GetQs('product'); ?></h2>
<br>

<?php

$directory = './images/Products/' . $this->GetQs('product') . '/';
$newdir = scandir($directory);
$scanned_directory = array_diff($newdir, array('..', '.'));

foreach ($scanned_directory as $file_name) {
  if ($file_name == 'index.php') continue;
?>


  <div class="product-div-2">
    <h3 style="font-weight:normal; ">Buy on eBay or Amazon </h3>
    <br>
    <a class="link1" href="<?php echo $directory.$file_name ?>">
      <img title="<?php echo $file_name; ?>" src="<?php echo $directory.$file_name ?>">
    </a>
  </div>

<?php
}
?>


</div>

<div style="clear: both;"></div>

