<?php /* Smarty version 2.6.26, created on 2010-04-27 15:23:35
         compiled from CRM/Contact/Page/View/CustomDataView.tpl */ ?>
<?php $this->assign('customGroupCount', 1); ?>
<?php $_from = $this->_tpl_vars['viewCustomData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['customGroupId'] => $this->_tpl_vars['customValues']):
?>
    <?php $this->assign('count', $this->_tpl_vars['customGroupCount']%2); ?>
    <?php if ($this->_tpl_vars['count'] == $this->_tpl_vars['side']): ?>
        <?php $_from = $this->_tpl_vars['customValues']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cvID'] => $this->_tpl_vars['cd_edit']):
?>
            <div class="customFieldGroup ui-corner-all">
                <table>
                  <tr>
                    <td colspan="2" class="grouplabel"><?php echo $this->_tpl_vars['cd_edit']['title']; ?>
</td>
                  </tr>
                  <?php $_from = $this->_tpl_vars['cd_edit']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field_id'] => $this->_tpl_vars['element']):
?>
                     <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/View/CustomDataFieldView.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                  <?php endforeach; endif; unset($_from); ?>
                </table>
            </div>
        <?php endforeach; endif; unset($_from); ?>
    <?php endif; ?>
    <?php $this->assign('customGroupCount', $this->_tpl_vars['customGroupCount']+1); ?>
<?php endforeach; endif; unset($_from); ?>