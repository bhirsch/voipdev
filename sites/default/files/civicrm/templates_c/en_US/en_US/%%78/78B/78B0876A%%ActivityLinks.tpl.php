<?php /* Smarty version 2.6.26, created on 2010-04-27 15:23:35
         compiled from CRM/Activity/Form/ActivityLinks.tpl */ ?>
<?php if ($this->_tpl_vars['cdType'] == false): ?>
<?php if ($this->_tpl_vars['contact_id']): ?>
<?php $this->assign('contactId', $this->_tpl_vars['contact_id']); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['showOtherActivityLink']): ?><?php echo $this->_tpl_vars['form']['other_activity']['html']; ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['hookLinks']): ?>
   <?php $_from = $this->_tpl_vars['hookLinks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['link']):
?>
<?php if ($this->_tpl_vars['link']['img']): ?>
      <a href="<?php echo $this->_tpl_vars['link']['url']; ?>
"><img src="<?php echo $this->_tpl_vars['link']['img']; ?>
" alt="<?php echo $this->_tpl_vars['link']['title']; ?>
" /></a>&nbsp;
<?php endif; ?>
      <a href="<?php echo $this->_tpl_vars['link']['url']; ?>
"><?php echo $this->_tpl_vars['link']['title']; ?>
</a>&nbsp;&nbsp;
   <?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php endif; ?>