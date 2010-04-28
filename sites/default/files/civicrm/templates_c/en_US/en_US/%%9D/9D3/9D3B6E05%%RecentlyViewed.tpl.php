<?php /* Smarty version 2.6.26, created on 2010-04-27 15:22:29
         compiled from CRM/Block/RecentlyViewed.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'CRM/Block/RecentlyViewed.tpl', 36, false),)), $this); ?>
<div id="recently-viewed">
    <ul>
    <?php $_from = $this->_tpl_vars['recentlyViewed']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
         <li class="<?php echo $this->_tpl_vars['item']['type']; ?>
"><a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" title="<?php echo $this->_tpl_vars['item']['title']; ?>
">
         <?php if ($this->_tpl_vars['item']['image_url']): ?>
            <div class="icon crm-icon <?php if ($this->_tpl_vars['item']['subtype']): ?><?php echo $this->_tpl_vars['item']['subtype']; ?>
<?php else: ?><?php echo $this->_tpl_vars['item']['type']; ?>
<?php endif; ?>-icon" style="background: url('<?php echo $this->_tpl_vars['item']['image_url']; ?>
')"></div>
         <?php else: ?>
            <div class="icon crm-icon <?php echo $this->_tpl_vars['item']['type']; ?>
<?php if ($this->_tpl_vars['item']['subtype']): ?>-subtype<?php endif; ?>-icon"></div>
         <?php endif; ?>
         <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 28, "..", true) : smarty_modifier_truncate($_tmp, 28, "..", true)); ?>
</a></li>
    <?php endforeach; endif; unset($_from); ?>
   </ul>
</div>