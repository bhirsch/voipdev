<?php /* Smarty version 2.6.26, created on 2010-04-27 15:23:35
         compiled from CRM/Contact/Page/View/CustomDataFieldView.tpl */ ?>
<tr>
<?php if ($this->_tpl_vars['element']['options_per_line'] != 0): ?>
      <td class="label"><?php echo $this->_tpl_vars['element']['field_title']; ?>
</td>
      <td>
                    <?php $_from = $this->_tpl_vars['element']['field_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
              <?php echo $this->_tpl_vars['val']; ?>

          <?php endforeach; endif; unset($_from); ?>
      </td>
  <?php else: ?>
      <td class="label"><?php echo $this->_tpl_vars['element']['field_title']; ?>
</td>
      <?php if ($this->_tpl_vars['element']['field_type'] == 'File'): ?>
          <?php if ($this->_tpl_vars['element']['field_value']['displayURL']): ?>
              <td><a href="javascript:imagePopUp('<?php echo $this->_tpl_vars['element']['field_value']['displayURL']; ?>
')" ><img src="<?php echo $this->_tpl_vars['element']['field_value']['displayURL']; ?>
" height = "100" width="100"></a></td>
          <?php else: ?>
              <td class="html-adjust"><a href="<?php echo $this->_tpl_vars['element']['field_value']['fileURL']; ?>
"><?php echo $this->_tpl_vars['element']['field_value']['fileName']; ?>
</a></td>
          <?php endif; ?>
      <?php else: ?>
          <td class="html-adjust"><?php echo $this->_tpl_vars['element']['field_value']; ?>
</td>
      <?php endif; ?>
<?php endif; ?>
</tr>