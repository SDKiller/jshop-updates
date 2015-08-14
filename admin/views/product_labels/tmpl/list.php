<?php
/**
* @version      4.3.1 13.08.2013
* @author       MAXXmarketing GmbH
* @package      Jshopping
* @copyright    Copyright (C) 2010 webdesigner-profi.de. All rights reserved.
* @license      GNU/GPL
*/
defined('_JEXEC') or die('Restricted access');

displaySubmenuOptions();
$rows=$this->rows;
$i=0;
?>
<form action="index.php?option=com_jshopping&controller=productlabels" method="post" name="adminForm" id="adminForm">
<?php print $this->tmp_html_start?>
<table class="table table-striped">
<thead>
  <tr>
    <th class="title" width ="10">
      #
    </th>
    <th width="20">
	  <input type="checkbox" name="checkall-toggle" value="" title="<?php echo JText::_('JGLOBAL_CHECK_ALL'); ?>" onclick="Joomla.checkAll(this)" />
    </th>
    <th align="left">
      <?php echo JHTML::_('grid.sort', _JSHOP_TITLE, 'name', $this->filter_order_Dir, $this->filter_order); ?>
    </th>
    <th align="left">
      <?php echo _JSHOP_IMAGE;?>
    </th>    
    <th width="50" class="center">
    	<?php print _JSHOP_EDIT?>
    </th>
    <th width="40" class="center">
        <?php echo JHTML::_('grid.sort', _JSHOP_ID, 'id', $this->filter_order_Dir, $this->filter_order); ?>
    </th>
  </tr>
</thead>
<?php foreach($rows as $row){ ?>
  <tr class="row<?php echo $i % 2;?>">
   <td>
     <?php echo $i+1;?>
   </td>
   <td>
     <?php echo JHtml::_('grid.id', $i, $row->id);?>
   </td>
   <td>
     <a href="index.php?option=com_jshopping&controller=productlabels&task=edit&id=<?php echo $row->id; ?>"><?php echo $row->name;?></a>
   </td>
   <td>
    <?php if ($row->image){?>
        <img src="<?php echo $this->config->image_labels_live_path."/".$row->image?>" alt=""/>
    <?php }?>
   </td>
	<td class="center">
		<a class="btn btn-micro"  href='index.php?option=com_jshopping&controller=productlabels&task=edit&id=<?php print $row->id;?>'>
            <i class="icon-edit"></i>
        </a>
	</td>
    <td class="center">
        <?php print $row->id;?>
    </td>
  </tr>
<?php
$i++;  
}
?>
</table>

<input type="hidden" name="filter_order" value="<?php echo $this->filter_order?>" />
<input type="hidden" name="filter_order_Dir" value="<?php echo $this->filter_order_Dir?>" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="hidemainmenu" value="0" />
<input type="hidden" name="boxchecked" value="0" />
<?php print $this->tmp_html_end?>
</form>