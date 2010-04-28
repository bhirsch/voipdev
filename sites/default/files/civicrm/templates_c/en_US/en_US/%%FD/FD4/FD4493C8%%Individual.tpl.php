<?php /* Smarty version 2.6.26, created on 2010-04-27 15:25:33
         compiled from CRM/Contact/Form/Edit/Individual.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'crmReplace', 'CRM/Contact/Form/Edit/Individual.tpl', 67, false),array('block', 'ts', 'CRM/Contact/Form/Edit/Individual.tpl', 89, false),)), $this); ?>
<table class="form-layout-compressed">
    <tr>
        <?php if ($this->_tpl_vars['form']['prefix_id']): ?>
	    <td>
                <?php echo $this->_tpl_vars['form']['prefix_id']['label']; ?>
<br/>
                <?php echo $this->_tpl_vars['form']['prefix_id']['html']; ?>

            </td>    
        <?php endif; ?>
        <td>
            <?php echo $this->_tpl_vars['form']['first_name']['label']; ?>
<br /> 
            <?php if ($this->_tpl_vars['action'] == 2): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_contact','field' => 'first_name','id' => $this->_tpl_vars['contactId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endif; ?>
            <?php echo $this->_tpl_vars['form']['first_name']['html']; ?>

        </td>
        <td>
            <?php echo $this->_tpl_vars['form']['middle_name']['label']; ?>
<br />
            <?php if ($this->_tpl_vars['action'] == 2): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_contact','field' => 'middle_name','id' => $this->_tpl_vars['contactId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endif; ?>
            <?php echo $this->_tpl_vars['form']['middle_name']['html']; ?>

        </td>
        <td>
            <?php echo $this->_tpl_vars['form']['last_name']['label']; ?>
<br />
            <?php if ($this->_tpl_vars['action'] == 2): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_contact','field' => 'last_name','id' => $this->_tpl_vars['contactId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endif; ?>
            <?php echo $this->_tpl_vars['form']['last_name']['html']; ?>

        </td>
	<?php if ($this->_tpl_vars['form']['suffix_id']): ?>
            <td>
                <?php echo $this->_tpl_vars['form']['suffix_id']['label']; ?>
<br/>
                <?php echo $this->_tpl_vars['form']['suffix_id']['html']; ?>

            </td>
	<?php endif; ?>
    </tr>
    
    <tr>
        <td colspan="2">
            <?php echo $this->_tpl_vars['form']['current_employer']['label']; ?>
&nbsp;&nbsp;<br />
            <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['current_employer']['html'])) ? $this->_run_mod_handler('crmReplace', true, $_tmp, 'class', 'twenty') : smarty_modifier_crmReplace($_tmp, 'class', 'twenty')); ?>

            <div id="employer_address" style="display:none;"></div>
        </td>
        <td>
            <?php echo $this->_tpl_vars['form']['job_title']['label']; ?>
<br />
            <?php echo $this->_tpl_vars['form']['job_title']['html']; ?>

        </td>
        <td>
            <?php echo $this->_tpl_vars['form']['nick_name']['label']; ?>
<br />
            <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['nick_name']['html'])) ? $this->_run_mod_handler('crmReplace', true, $_tmp, 'class', 'big') : smarty_modifier_crmReplace($_tmp, 'class', 'big')); ?>

        </td>
        <td>
            <?php if ($this->_tpl_vars['action'] == 1 && $this->_tpl_vars['contactSubType']): ?>&nbsp;<?php else: ?>
               <?php echo $this->_tpl_vars['form']['contact_sub_type']['label']; ?>
<br />
               <?php echo $this->_tpl_vars['form']['contact_sub_type']['html']; ?>

            <?php endif; ?>
        </td>
    </tr>
</table>
<?php echo '
<script type="text/javascript">
var dataUrl        = "'; ?>
<?php echo $this->_tpl_vars['employerDataURL']; ?>
<?php echo '";
var newContactText = "'; ?>
(<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>new contact record<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)<?php echo '";
cj(\'#current_employer\').autocomplete( dataUrl, { 
                                      width        : 250, 
                                      selectFirst  : false,
                                      matchCase    : true, 
                                      matchContains: true
    }).result( function(event, data, formatted) {
        var foundContact   = ( parseInt( data[1] ) ) ? cj( "#current_employer_id" ).val( data[1] ) : cj( "#current_employer_id" ).val(\'\');
        if ( ! foundContact.val() ) {
            cj(\'div#employer_address\').html(newContactText).show();    
        } else {
            cj(\'div#employer_address\').html(\'\').hide();    
        }
    }).bind(\'change blur\', function() {
        if ( !cj( "#current_employer_id" ).val( ) ) {
            cj(\'div#employer_address\').html(newContactText).show();    
        }
});

// remove current employer id when current employer removed.
cj("form").submit(function() {
  if ( !cj(\'#current_employer\').val() ) cj( "#current_employer_id" ).val(\'\');
});

</script>
'; ?>
