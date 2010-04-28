<?php /* Smarty version 2.6.26, created on 2010-04-27 15:31:50
         compiled from CRM/Contact/Form/Edit/Notes.tpl */ ?>
<h3 class="head"> 
    <span class="ui-icon ui-icon-triangle-1-e"></span><a href="#"><?php echo $this->_tpl_vars['title']; ?>
</a>
</h3>
<div id="notesBlock" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
   <table class="form-layout-compressed">
     <tr>
       <td colspan=3><?php echo $this->_tpl_vars['form']['subject']['label']; ?>
<br  >
        <?php echo $this->_tpl_vars['form']['subject']['html']; ?>
</td>
     </tr>
     <tr>
       <td colspan=3><?php echo $this->_tpl_vars['form']['note']['label']; ?>
<br />
        <?php echo $this->_tpl_vars['form']['note']['html']; ?>

       </td>
     </tr>
   </table>
</div>