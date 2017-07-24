<div style="border: 0px solid green;  ">

  <p>App settings</p>
  <br><br>

  <form name="form1" id="form1" method="POST" action="">

    <input type="hidden" name="hid_posted" id="hid_posted" value="1">
    <input type="hidden" name="p" id="p" value="<?php echo $this->GetQs('p'); ?>">

    <label for="var1">Variable:</label>
    <input type="textbox" name="txt_name" id="txt_name" value="<?php echo $this->GetQs('txt_name'); ?>">
    <br><br>


    <input type="button" onclick="DoSetAddress();" name="btn_update" id="btn_update" value="Update">

  </form>

</div>
