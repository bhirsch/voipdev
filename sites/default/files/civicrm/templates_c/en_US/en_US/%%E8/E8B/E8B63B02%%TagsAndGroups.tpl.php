<?php /* Smarty version 2.6.26, created on 2010-04-27 15:25:34
         compiled from CRM/Contact/Form/Edit/TagsAndGroups.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'CRM/Contact/Form/Edit/TagsAndGroups.tpl', 38, false),array('modifier', 'is_numeric', 'CRM/Contact/Form/Edit/TagsAndGroups.tpl', 41, false),)), $this); ?>
<?php if ($this->_tpl_vars['title']): ?>
    <h3 class="head"> 
	<span class="ui-icon ui-icon-triangle-1-e"></span><a href="#"><?php echo $this->_tpl_vars['title']; ?>
</a>
    </h3>
    <div id="tagGroup" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
    <fieldset>
<?php endif; ?>
    <table class="form-layout-compressed" style="width:98%">
	<tr>
	    <?php $_from = $this->_tpl_vars['tagGroup']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
				<?php if (! $this->_tpl_vars['type'] || $this->_tpl_vars['type'] == $this->_tpl_vars['key']): ?>
		<td width=<?php echo smarty_function_cycle(array('name' => 'tdWidth','values' => "\"70%\",\"30%\""), $this);?>
><span class="label"><?php if ($this->_tpl_vars['title']): ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['key']]['label']; ?>
<?php endif; ?></span>
		    <table>
			<?php $_from = $this->_tpl_vars['form'][$this->_tpl_vars['key']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['it']):
?>
			    <?php if (((is_array($_tmp=$this->_tpl_vars['k'])) ? $this->_run_mod_handler('is_numeric', true, $_tmp) : is_numeric($_tmp))): ?>
				<tr class=<?php echo smarty_function_cycle(array('values' => "'odd-row','even-row'",'name' => $this->_tpl_vars['key']), $this);?>
>
				    <td>
					<strong><?php echo $this->_tpl_vars['it']['html']; ?>
</strong><br/>
					<?php if ($this->_tpl_vars['item'][$this->_tpl_vars['k']]['description']): ?>
					    <div style="font-size:10px;padding-left:20px;">
						<?php echo $this->_tpl_vars['item'][$this->_tpl_vars['k']]['description']; ?>

					    </div>
					<?php endif; ?>
				    </td>
				</tr>
			    <?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>   
		    </table>
		</td>
		<?php endif; ?>
	    <?php endforeach; endif; unset($_from); ?>
	</tr>
    </table>   
<?php if ($this->_tpl_vars['title']): ?>
    </fieldset>
    </div>
<?php endif; ?>