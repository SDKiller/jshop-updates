<?php 
/**
* @version      4.10.0 05.11.2013
* @author       MAXXmarketing GmbH
* @package      Jshopping
* @copyright    Copyright (C) 2010 webdesigner-profi.de. All rights reserved.
* @license      GNU/GPL
*/
defined('_JEXEC') or die();
$jshopConfig = JSFactory::getConfig();
JHtml::_('bootstrap.tooltip');
?>
<div id="j-sidebar-container" class="span2">
    <?php echo $this->sidebar; ?>
</div>
<div id="j-main-container" class="span10">
<?php displaySubmenuConfigs('image');?>
<div class="jshop_edit">
<form action="index.php?option=com_jshopping&controller=config" method="post" name="adminForm" id="adminForm" enctype="multipart/form-data">
<?php print $this->tmp_html_start?>
<input type="hidden" name="task" value="">
<input type="hidden" name="tab" value="3">

<div class="col100">
<fieldset class="adminform">
    <legend><?php echo _JSHOP_IMAGE_VIDEO_PARAMETERS ?></legend>
<table class="admintable table-striped">
  <tr>
    <td class="key" style="width:200px;">
      <?php echo _JSHOP_IMAGE_CATEGORY_WIDTH?>
    </td>
    <td>
      <input type="text" name="image_category_width" id="image_category_width" value ="<?php echo $jshopConfig->image_category_width?>" />
      <?php echo JHTML::tooltip(_JSHOP_IMAGE_SIZE_INFO) ?>
    </td>
    <td>
    </td>
  </tr>
  <tr>
    <td class="key">
      <?php echo _JSHOP_IMAGE_CATEGORY_HEIGHT?>
    </td>
    <td>
      <input type="text" name="image_category_height" id="image_category_height" value ="<?php echo $jshopConfig->image_category_height?>" />
      <?php echo JHTML::tooltip(_JSHOP_IMAGE_SIZE_INFO) ?>
    </td>
    <td>
    </td>
  </tr>
  <tr><td></td></tr>
  <tr>
    <td class="key">
      <?php echo _JSHOP_IMAGE_PRODUCT_THUMB_WIDTH?>
    </td>
    <td>
      <input type="text" name="image_product_width" id="image_product_width" value ="<?php echo $jshopConfig->image_product_width?>" />
      <?php echo JHTML::tooltip(_JSHOP_IMAGE_SIZE_INFO) ?>
    </td>
    <td>
    </td>
  </tr>
  <tr>
    <td class="key">
      <?php echo _JSHOP_IMAGE_PRODUCT_THUMB_HEIGHT?>
    </td>
    <td>
      <input type="text" name="image_product_height" id="image_product_height" value ="<?php echo $jshopConfig->image_product_height?>" />
      <?php echo JHTML::tooltip(_JSHOP_IMAGE_SIZE_INFO) ?>
    </td>
  </tr>
  <tr><td></td></tr>
  <tr>
    <td class="key">
      <?php echo _JSHOP_IMAGE_PRODUCT_FULL_WIDTH;?>
    </td>
    <td>
      <input type="text" name="image_product_full_width" id="image_product_full_width" value ="<?php echo $jshopConfig->image_product_full_width?>" />
      <?php echo JHTML::tooltip(_JSHOP_IMAGE_SIZE_INFO) ?>
    </td>
  </tr>
  <tr>
    <td class="key">
      <?php echo _JSHOP_IMAGE_PRODUCT_FULL_HEIGHT; ?>
    </td>
    <td>
      <input type="text" name="image_product_full_height" id="image_product_full_height" value ="<?php echo $jshopConfig->image_product_full_height?>" />
      <?php echo JHTML::tooltip(_JSHOP_IMAGE_SIZE_INFO);?>
    </td>
    <td>
    </td>
  </tr>
  <tr><td></td></tr>
  <tr>
    <td class="key">
      <?php echo _JSHOP_IMAGE_PRODUCT_ORIGINAL_WIDTH;?>
    </td>
    <td>
      <input type="text" name="image_product_original_width" value="<?php echo $jshopConfig->image_product_original_width?>" />
      <?php echo JHTML::tooltip(_JSHOP_IMAGE_SIZE_INFO);?>
    </td>
  </tr>
  <tr>
    <td class="key">
      <?php echo _JSHOP_IMAGE_PRODUCT_ORIGINAL_HEIGHT; ?>
    </td>
    <td>
      <input type="text" name="image_product_original_height" value="<?php echo $jshopConfig->image_product_original_height?>" />
      <?php echo JHTML::tooltip(_JSHOP_IMAGE_SIZE_INFO);?>
    </td>
    <td>
    </td>
  </tr>
  <tr><td></td></tr>
  <tr>
    <td class="key">
      <?php echo _JSHOP_VIDEO_PRODUCT_WIDTH;?>
    </td>
    <td>
      <input type="text" name="video_product_width" value ="<?php echo $jshopConfig->video_product_width?>" />      
    </td>
  </tr>
  <tr>
    <td class="key">
      <?php echo _JSHOP_VIDEO_PRODUCT_HEIGHT; ?>
    </td>
    <td>
      <input type="text" name="video_product_height" value ="<?php echo $jshopConfig->video_product_height?>" />
    </td>
    <td>
    </td>
  </tr>
  <tr>
    <td class="key">
      <?php echo _JSHOP_IMAGE_RESIZE_TYPE; ?>
    </td>
    <td>
      <?php print $this->select_resize_type;?>
    </td>
    <td>
    </td>
</tr>

<tr>
    <td class="key">
        <?php echo _JSHOP_OC_image_quality?>
    </td>
    <td>
        <input type="text" name="image_quality" value ="<?php echo $jshopConfig->image_quality?>" />
    </td>
</tr>

<tr>
    <td class="key">
        <?php echo _JSHOP_OC_image_fill_color?>
    </td>
    <td>
        <input type="text" name="image_fill_color" value ="<?php echo $jshopConfig->image_fill_color?>" />
    </td>
</tr>

<?php $pkey="etemplatevar";if ($this->$pkey){print $this->$pkey;}?>
</table>
</fieldset>
</div>
<div class="clr"></div>
<?php print $this->tmp_html_end?>
</form>
</div>
</div>