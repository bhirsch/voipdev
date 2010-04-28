<?php /* Smarty version 2.6.26, created on 2010-04-27 15:25:00
         compiled from CRM/Group/Form/Search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Group/Form/Search.tpl', 26, false),)), $this); ?>
<fieldset><legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Find Groups<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
<div class="form-item">
<table class="form-layout">
    <tr>
        <td><?php echo $this->_tpl_vars['form']['title']['label']; ?>
<br />
            <?php echo $this->_tpl_vars['form']['title']['html']; ?>
<br />
            <span class="description font-italic">
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Complete OR partial group name.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </span>
        </td>
        <td><?php echo $this->_tpl_vars['form']['group_type']['label']; ?>
<br />
            <?php echo $this->_tpl_vars['form']['group_type']['html']; ?>
<br />
            <span class="description font-italic">
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Filter search by group type(s).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </span>
        </td>
        <td><?php echo $this->_tpl_vars['form']['visibility']['label']; ?>
<br />
            <?php echo $this->_tpl_vars['form']['visibility']['html']; ?>
<br />
            <span class="description font-italic">
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Filter search by visibility.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </span>
        </td>
	<td>
            <label> Status</label><br />		
	    <?php echo $this->_tpl_vars['form']['active_status']['html']; ?>

	    <?php echo $this->_tpl_vars['form']['active_status']['label']; ?>
&nbsp;
	    <?php echo $this->_tpl_vars['form']['inactive_status']['html']; ?>

            <?php echo $this->_tpl_vars['form']['inactive_status']['label']; ?>
		
	 </td>
    </tr>
     <tr>
        <td><?php echo $this->_tpl_vars['form']['buttons']['html']; ?>
</td><td colspan="2">
    </tr>
</table>
</div>
</fieldset>