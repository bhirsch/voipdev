<?php /* Smarty version 2.6.26, created on 2010-04-27 15:25:10
         compiled from CRM/Contact/Form/Search/BasicCriteria.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Contact/Form/Search/BasicCriteria.tpl', 31, false),array('function', 'crmURL', 'CRM/Contact/Form/Search/BasicCriteria.tpl', 56, false),array('modifier', 'crmReplace', 'CRM/Contact/Form/Search/BasicCriteria.tpl', 162, false),)), $this); ?>
<fieldset>
    <div class="form-item">
    <?php if ($this->_tpl_vars['rows']): ?>
        <?php if ($this->_tpl_vars['context'] == 'smog'): ?>
            <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Find Members within this Group<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
        <?php endif; ?>
    <?php else: ?>
        <?php if ($this->_tpl_vars['context'] == 'smog'): ?>
            <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Find Members within this Group<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
        <?php elseif ($this->_tpl_vars['context'] == 'amtg'): ?>
            <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Find Contacts to Add to this Group<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
        <?php endif; ?>
    <?php endif; ?>

<?php if ($this->_tpl_vars['config']->groupTree): ?>
<?php echo '
<script type="text/javascript">
dojo.require("dojo.parser");
dojo.require("dijit.Dialog");
dojo.require("dojo.data.ItemFileWriteStore");
dojo.require("civicrm.CheckboxTree");
dojo.require("dijit.form.CheckBox"); 

function displayGroupTree( ) {
    // do not recreate if tree is already created
    if ( dijit.byId(\'checkboxtree\') ) {
	return;
    }

    var dataUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/groupTree','h' => 0), $this);?>
"<?php echo ';
    
    '; ?>

    <?php if ($this->_tpl_vars['groupIds']): ?>
        dataUrl = dataUrl + '?gids=' + '<?php echo $this->_tpl_vars['groupIds']; ?>
'
    <?php endif; ?>
    <?php echo '

    var treeStore = new dojo.data.ItemFileWriteStore({url:dataUrl});
    
    var treeModel = new civicrm.tree.CheckboxTreeStoreModel({
	    store: treeStore,
	    query: {type:\'rootGroup\'},
	    rootId: \'allGroups\',
	    rootLabel: \'All Groups\',
	    childrenAttrs: ["children"]
	});
    var tree = new civicrm.CheckboxTree({
	    id : "checkboxtree",
	    model: treeModel,
        showRoot: false
	});
    
    var dd = dijit.byId(\'id-groupPicker\');

    var button1 = new dijit.form.Button({label: "Done", type: "submit"});                                                                   
    dd.containerNode.appendChild(button1.domNode);      
    
    dd.containerNode.appendChild(tree.domNode);

    var button2 = new dijit.form.Button({label: "Done", type: "submit"});                                                                   
    dd.containerNode.appendChild(button2.domNode);      

    tree.startup();

};

function getCheckedNodes( ) 
{
    var treeStore = dijit.byId("checkboxtree").model.store ;
    treeStore.fetch({query: {checked:true},queryOptions: {deep:true}, onComplete: setCheckBoxValues});
};         

function setCheckBox( ) 
{
    var groupNames = '; ?>
"<?php echo $this->_tpl_vars['groupNames']; ?>
"<?php echo ';
    if ( groupNames ) {
	var grp  = document.getElementById(\'id-group-names\');
	grp.innerHTML = groupNames;
    }
};

function setCheckBoxValues(items,request) 
{
    var groupLabel = "" ;
    var groupIds   = "";

    var myTreeStore = dijit.byId("checkboxtree").model.store;

    for (var i = 0; i < items.length; i++){
	var item = items[i];
	groupLabel = groupLabel + myTreeStore.getLabel(item) + "<BR/>" ;
	if ( groupIds != \'\' ) {
	    groupIds = groupIds + \',\';
	}
	groupIds = groupIds + item[\'id\'];
    }

    var grp  = document.getElementById(\'id-group-names\');    
    grp.innerHTML = groupLabel;
    
    var groupId   = document.getElementById(\'group\');
    groupId.value = groupIds;
};                     


dojo.addOnLoad( function( ) {
     setCheckBox( );
});
</script>
'; ?>

<?php endif; ?>

    <?php echo '<table class="'; ?><?php echo $this->_tpl_vars['form']['sort_name']['name']; ?><?php echo '"><tr><td class="label">'; ?><?php echo $this->_tpl_vars['form']['sort_name']['label']; ?><?php echo ' '; ?><?php echo $this->_tpl_vars['form']['sort_name']['html']; ?><?php echo '</td>'; ?><?php if ($this->_tpl_vars['form']['contact_type']): ?><?php echo '<td class="label">'; ?><?php echo $this->_tpl_vars['form']['contact_type']['label']; ?><?php echo ' '; ?><?php echo $this->_tpl_vars['form']['contact_type']['html']; ?><?php echo '</td>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['form']['group']): ?><?php echo '<td class="label">'; ?><?php if ($this->_tpl_vars['context'] == 'smog'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['form']['group_contact_status']['label']; ?><?php echo '<br />'; ?><?php else: ?><?php echo ''; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'in'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ' &nbsp;'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['context'] == 'smog'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['form']['group_contact_status']['html']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php if ($this->_tpl_vars['config']->groupTree): ?><?php echo '<a href="#" onclick="dijit.byId(\'id-groupPicker\').show(); displayGroupTree( );">'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Select Group(s)'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</a><div class="tundra" style="background-color: #f4eeee;" dojoType="dijit.Dialog" id="id-groupPicker" title="Select Group(s)" execute="getCheckedNodes();"></div><br /><span id="id-group-names"></span>'; ?><?php else: ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['group']['html'])) ? $this->_run_mod_handler('crmReplace', true, $_tmp, 'class', 'big') : smarty_modifier_crmReplace($_tmp, 'class', 'big')); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo '</td>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['form']['tag']): ?><?php echo '<td class="label">'; ?><?php echo $this->_tpl_vars['form']['tag']['label']; ?><?php echo ' '; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['tag']['html'])) ? $this->_run_mod_handler('crmReplace', true, $_tmp, 'class', 'medium') : smarty_modifier_crmReplace($_tmp, 'class', 'medium')); ?><?php echo '</td>'; ?><?php endif; ?><?php echo '<td style="vertical-align: bottom;">'; ?><?php echo $this->_tpl_vars['form']['buttons']['html']; ?><?php echo '</td></tr></table>'; ?>

    </div>
</fieldset>