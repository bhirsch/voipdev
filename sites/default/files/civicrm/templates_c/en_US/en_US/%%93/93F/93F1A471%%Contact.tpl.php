<?php /* Smarty version 2.6.26, created on 2010-04-27 15:25:32
         compiled from CRM/Contact/Form/Contact.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Contact/Form/Contact.tpl', 33, false),array('function', 'crmURL', 'CRM/Contact/Form/Contact.tpl', 181, false),)), $this); ?>
<?php if ($this->_tpl_vars['addBlock']): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Edit/".($this->_tpl_vars['blockName']).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
<div class="crm-submit-buttons">
   <?php echo $this->_tpl_vars['form']['buttons']['html']; ?>

</div>
<span style="float:right;"><a href="#expand" id="expand"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Expand all tabs<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></span>
<br/>
<div class="accordion ui-accordion ui-widget ui-helper-reset">
    <h3 class="head"> 
        <span class="ui-icon ui-icon-triangle-1-e" id='contact'></span><a href="#"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contact Details<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
    </h3>
    <div id="contactDetails" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
        <fieldset>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Edit/".($this->_tpl_vars['contactType']).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <br/>
        <table class="form-layout-compressed">
            <?php $_from = $this->_tpl_vars['blocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block'] => $this->_tpl_vars['label']):
?>
               <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Edit/".($this->_tpl_vars['block']).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endforeach; endif; unset($_from); ?>
		</table>
		<table class="form-layout-compressed">
            <tr class="last-row">
            <?php if ($this->_tpl_vars['form']['home_URL']): ?>
              <td><?php echo $this->_tpl_vars['form']['home_URL']['label']; ?>
<br />
                  <?php echo $this->_tpl_vars['form']['home_URL']['html']; ?>

              </td>
            <?php endif; ?>
              <td><?php echo $this->_tpl_vars['form']['contact_source']['label']; ?>
<br />
                  <?php echo $this->_tpl_vars['form']['contact_source']['html']; ?>

              </td>
              <td><?php echo $this->_tpl_vars['form']['external_identifier']['label']; ?>
<br />
                  <?php echo $this->_tpl_vars['form']['external_identifier']['html']; ?>

              </td>
              <?php if ($this->_tpl_vars['contactId']): ?>
				<td><label for="internal_identifier"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Internal Id<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label><br /><?php echo $this->_tpl_vars['contactId']; ?>
</td>
			  <?php endif; ?>
            </tr>            
        </table>

                <?php echo $this->_tpl_vars['form']['_qf_Contact_refresh_dedupe']['html']; ?>

        <?php if ($this->_tpl_vars['isDuplicate']): ?>&nbsp;&nbsp;<?php echo $this->_tpl_vars['form']['_qf_Contact_upload_duplicate']['html']; ?>
<?php endif; ?>
        <div class="spacer"></div>
        </fieldset>
    </div>
    
    <?php $_from = $this->_tpl_vars['editOptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['title']):
?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Edit/".($this->_tpl_vars['name']).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endforeach; endif; unset($_from); ?>
</div>
<br />
<div class="crm-submit-buttons">
   <?php echo $this->_tpl_vars['form']['buttons']['html']; ?>

</div>

<?php echo '
<script type="text/javascript" >
var action = "'; ?>
<?php echo $this->_tpl_vars['action']; ?>
<?php echo '";
cj(function( ) {
    cj(\'.accordion .head\').addClass( "ui-accordion-header ui-helper-reset ui-state-default ui-corner-all");

    cj(\'.accordion .head\').hover( function( ) { 
        cj(this).addClass( "ui-state-hover");
    }, function() { 
        cj(this).removeClass( "ui-state-hover");
    }).bind(\'click\', function( ) { 
        var checkClass = cj(this).find(\'span\').attr( \'class\' );
        var len        = checkClass.length;
        if ( checkClass.substring( len - 1, len ) == \'s\' ) {
            cj(this).find(\'span\').removeClass( ).addClass(\'ui-icon ui-icon-triangle-1-e\');
        } else {
            cj(this).find(\'span\').removeClass( ).addClass(\'ui-icon ui-icon-triangle-1-s\');
        }
        cj(this).next( ).toggle(); return false; 
    }).next( ).hide( );
    
    cj(\'span#contact\').removeClass( ).addClass(\'ui-icon ui-icon-triangle-1-s\');
    cj("#contactDetails").show( );
	
	cj(\'div.accordion div.ui-accordion-content\').each( function() {
		//remove tab which doesn\'t have any element
		if ( ! cj.trim( cj(this).text() ) ) { 
			ele     = cj(this);
			prevEle = cj(this).prev();
			cj( ele ).remove();
			cj( prevEle).remove();
		}
		//open tab if form rule throws error
		if ( cj(this).children().find(\'span.error\').text() ) {
			cj(this).show().prev().children(\'span:first\').removeClass( ).addClass(\'ui-icon ui-icon-triangle-1-s\');
		}
	});
	if ( action == 2 ) {
		//highlight the tab having data inside.
		cj(\'div.accordion div.ui-accordion-content :input\').each( function() { 
			var element = cj(this).closest("div.ui-accordion-content").attr("id");
			eval(\'var \' + element + \' = "";\');
			switch( cj(this).attr(\'type\') ) {
			case \'checkbox\':
			case \'radio\':
			  if( cj(this).is(\':checked\') ) {
			    eval( element + \' = true;\'); 
			  }
			  break;
			  
			case \'text\':
			case \'textarea\':
			  if( cj(this).val() ) {
			    eval( element + \' = true;\');
			  }
			  break;
			  
			case \'select-one\':
			case \'select-multiple\':
			  if( cj(\'select option:selected\' ) && cj(this).val() ) {
			    eval( element + \' = true;\');
			  }
			  break;		
			  
			case \'file\':
			  if( cj(this).next().html() ) eval( element + \' = true;\');
			  break;
			}
			if( eval( element + \';\') ) { 
			  cj(this).closest("div.ui-accordion-content").prev().children(\'a:first\').css( \'font-weight\', \'bold\' );
			}
		});
	}
});

cj(\'a#expand\').click( function( ){
    if( cj(this).attr(\'href\') == \'#expand\') {   
        var message     = '; ?>
"<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Collapse all tabs<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"<?php echo ';
        var className   = \'ui-icon ui-icon-triangle-1-s\';
        var event       = \'show\';
        cj(this).attr(\'href\', \'#collapse\');
    } else {
        var message     = '; ?>
"<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Expand all tabs<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"<?php echo ';
        var className   = \'ui-icon ui-icon-triangle-1-e\';
        var event       = \'hide\';
        cj(this).attr(\'href\', \'#expand\');
    }
    
    cj(this).html(message);
    cj(\'div.accordion div.ui-accordion-content\').each(function() {
        cj(this).parent().find(\'h3 span\').removeClass( ).addClass(className);
        eval( " var showHide = cj(this)." + event + "();" );
    }); 
});

//current employer default setting
var employerId = "'; ?>
<?php echo $this->_tpl_vars['currentEmployer']; ?>
<?php echo '";
if ( employerId ) {
    var dataUrl = "'; ?>
<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/contactlist','h' => 0,'q' => "org=1&id="), $this);?>
<?php echo '" + employerId ;
    cj.ajax({ 
        url     : dataUrl,   
        async   : false,
        success : function(html){
            //fixme for showing address in div
            htmlText = html.split( \'|\' , 2);
            cj(\'input#current_employer\').val(htmlText[0]);
            cj(\'input#current_employer_id\').val(htmlText[1]);
        }
    }); 
}

cj("input#current_employer").click( function( ) {
    cj("input#current_employer_id").val(\'\');
});
</script>
'; ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/additionalBlocks.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formNavigate.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php endif; ?>