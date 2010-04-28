<?php /* Smarty version 2.6.26, created on 2010-04-27 15:25:34
         compiled from CRM/Contact/Form/Edit/Demographics.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Contact/Form/Edit/Demographics.tpl', 37, false),)), $this); ?>
<h3 class="head"> 
    <span class="ui-icon ui-icon-triangle-1-e"></span><a href="#"><?php echo $this->_tpl_vars['title']; ?>
</a>
</h3>

<div id="demographics" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
  <fieldset>
  <div class="form-item">
        <span class="labels"><?php echo $this->_tpl_vars['form']['gender_id']['label']; ?>
</span>
        
	<span class="fields">
        <?php echo $this->_tpl_vars['form']['gender_id']['html']; ?>

        &nbsp;&nbsp;(&nbsp;<a href="#" title="unselect" onclick="unselectRadio('gender_id', '<?php echo $this->_tpl_vars['form']['formName']; ?>
'); return false;"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>unselect<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>&nbsp;)
        </span>
  </div>
  <div class="form-item">
        <span class="labels"><?php echo $this->_tpl_vars['form']['birth_date']['label']; ?>
</span>
        <span class="fields"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'birth_date')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></span>
  </div>
  <div class="form-item">
       <?php echo $this->_tpl_vars['form']['is_deceased']['html']; ?>

       <?php echo $this->_tpl_vars['form']['is_deceased']['label']; ?>

  </div>
  <div id="showDeceasedDate" class="form-item">
       <span class="labels"><?php echo $this->_tpl_vars['form']['deceased_date']['label']; ?>
</span>
       <span class="fields"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'deceased_date')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></span>
  </div> 
  </fieldset>
</div>

<?php echo '
<script type="text/javascript">
    showDeceasedDate( );    
    function showDeceasedDate( )
    {
        if (document.getElementsByName("is_deceased")[0].checked) {
      	    show(\'showDeceasedDate\');
        } else {
	    hide(\'showDeceasedDate\');
        }
    }     
</script>
'; ?>