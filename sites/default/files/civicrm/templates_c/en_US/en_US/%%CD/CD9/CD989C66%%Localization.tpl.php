<?php /* Smarty version 2.6.26, created on 2010-04-27 15:23:06
         compiled from CRM/Admin/Form/Setting/Localization.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Admin/Form/Setting/Localization.tpl', 28, false),)), $this); ?>
<div class="form-item">

    <fieldset><legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Language and Currency<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>    
        <dl>
            <dt><?php echo $this->_tpl_vars['form']['lcMessages']['label']; ?>
</dt><dd><?php echo $this->_tpl_vars['form']['lcMessages']['html']; ?>
</dd>
            <dt>&nbsp;</dt><dd class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Default language used for this installation.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dd>
            <?php if ($this->_tpl_vars['form']['languageLimit']): ?>
              <dt><?php echo $this->_tpl_vars['form']['languageLimit']['label']; ?>
</dt><dd><?php echo $this->_tpl_vars['form']['languageLimit']['html']; ?>
</dd>
              <dt>&nbsp;</dt><dd class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Languages available to users of this installation.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dd>
              <dt><?php echo $this->_tpl_vars['form']['addLanguage']['label']; ?>
</dt><dd><?php echo $this->_tpl_vars['form']['addLanguage']['html']; ?>
</dd>
              <dt>&nbsp;</dt><dd class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add a new language to this installation.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dd>
            <?php endif; ?>
            <dt><?php echo $this->_tpl_vars['form']['inheritLocale']['label']; ?>
</dt><dd><?php echo $this->_tpl_vars['form']['inheritLocale']['html']; ?>
</dd>
            <dt>&nbsp;</dt><dd class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If checked, CiviCRM will follow CMS language changes.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dd>
            <dt><?php echo $this->_tpl_vars['form']['defaultCurrency']['label']; ?>
</dt><dd><?php echo $this->_tpl_vars['form']['defaultCurrency']['html']; ?>
</dd>
            <dt>&nbsp;</dt><dd class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Default currency assigned to contributions and other monetary transactions.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dd>
            <dt><?php echo $this->_tpl_vars['form']['lcMonetary']['label']; ?>
</dt><dd><?php echo $this->_tpl_vars['form']['lcMonetary']['html']; ?>
</dd>
            <dt>&nbsp;</dt><dd class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Locale for monetary display (affects formatting specifiers below).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dd>
            <dt><?php echo $this->_tpl_vars['form']['moneyformat']['label']; ?>
</dt><dd><?php echo $this->_tpl_vars['form']['moneyformat']['html']; ?>
</dd>
            <dt>&nbsp;</dt><dd class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Format for displaying monetary amounts.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dd>
            <dt><?php echo $this->_tpl_vars['form']['moneyvalueformat']['label']; ?>
</dt><dd><?php echo $this->_tpl_vars['form']['moneyvalueformat']['html']; ?>
</dd>
            <dt>&nbsp;</dt><dd class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Format for displaying monetary values.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dd>
            <dt><?php echo $this->_tpl_vars['form']['customTranslateFunction']['label']; ?>
</dt><dd><?php echo $this->_tpl_vars['form']['customTranslateFunction']['html']; ?>
</dd>
            <dt>&nbsp;</dt><dd class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Function name to use for translation inplace of the default CiviCRM translate function. <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dd>
            <dt><?php echo $this->_tpl_vars['form']['legacyEncoding']['label']; ?>
</dt><dd><?php echo $this->_tpl_vars['form']['legacyEncoding']['html']; ?>
</dd>
            <dt>&nbsp;</dt><dd class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If import files are NOT encoded as UTF-8, specify an alternate character encoding for these files. The default of <strong>Windows-1252</strong> will work for Excel-created .CSV files on many computers.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dd>
            <dt><?php echo $this->_tpl_vars['form']['fieldSeparator']['label']; ?>
</dt><dd><?php echo $this->_tpl_vars['form']['fieldSeparator']['html']; ?>
</dd>
            <dt>&nbsp;</dt><dd class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Global CSV separator character. Modify this setting to enable import and export of different kinds of CSV files (for example: ',' ';' ':' '|' ).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dd>
        </dl>
    </fieldset>
    <fieldset><legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contact Address Fields - Selection Values<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
        <dl>
            <dt><?php echo $this->_tpl_vars['form']['defaultContactCountry']['label']; ?>
</dt><dd><?php echo $this->_tpl_vars['form']['defaultContactCountry']['html']; ?>
</dd>
            <dt>&nbsp;</dt><dd class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This value is selected by default when adding a new contact address.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dd>
            <dt><?php echo $this->_tpl_vars['form']['countryLimit']['label']; ?>
</dt><dd><?php echo $this->_tpl_vars['form']['countryLimit']['html']; ?>
</dd>
            <dt class="">&nbsp;</dt><dd class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Which countries are available in the Country selection field when adding or editing contact addresses. Profile and Custom 'Country' fields also use this setting. To include ALL countries, leave the right-hand box empty.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dd>
            <dt><?php echo $this->_tpl_vars['form']['provinceLimit']['label']; ?>
</dt><dd><?php echo $this->_tpl_vars['form']['provinceLimit']['html']; ?>
</dd>
            <dt class="">&nbsp;</dt><dd class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>State/province listings are populated dynamically based on the selected Country for all standard contact address editing forms, as well as for <strong>Profile forms which include both a Country and a State/Province field</strong>.  This setting controls which countries' states and/or provinces are available in the State / Province selection field <strong>for Custom Fields</strong> or for Profile forms which do NOT include a Country field.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dd>
        </dl>
    </fieldset>
    <fieldset><legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Multiple Languages Support<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>    
      <dl>
        <?php if ($this->_tpl_vars['form']['languageLimit']): ?>
          <dt>&nbsp;</dt><dd class="description"><?php $this->_tag_stack[] = array('ts', array('1' => "http://documentation.civicrm.org")); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This is a multilingual installation. It contains certain schema differences compared to regular installations of CiviCRM. Please <a href="%1">refer to the documentation</a> for details.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dd>
          <dt><?php echo $this->_tpl_vars['form']['makeSinglelingual']['label']; ?>
</dt><dd><?php echo $this->_tpl_vars['form']['makeSinglelingual']['html']; ?>
</dd>
          <dt>&nbsp;</dt><dd class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Check this box and click 'Save' to switch this installation from multi- to single-language.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dd>
          <dd class="description"><span style="color:red"><?php echo $this->_tpl_vars['warning']; ?>
</span>
        <?php elseif ($this->_tpl_vars['form']['makeMultilingual']): ?>
          <dt><?php echo $this->_tpl_vars['form']['makeMultilingual']['label']; ?>
</dt><dd><?php echo $this->_tpl_vars['form']['makeMultilingual']['html']; ?>
</dd>
          <dt>&nbsp;</dt><dd class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Check this box and click 'Save' to switch this installation from single- to multi-language, then add further languages.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dd>
          <dd class="description"><span style="color:red"><?php echo $this->_tpl_vars['warning']; ?>
</span>
        <?php else: ?>
          <dd class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>In order to use this functionality, the installation's database user must have privileges to create triggers (in MySQL 5.0 this means the SUPER privilege). This install does not seem to have the required privilege enabled.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dd>
          <dd class="description"><span style="color:red"><?php echo $this->_tpl_vars['warning']; ?>
</span>
        <?php endif; ?>
      </dl>
    </fieldset>
    <dl>
        <dt></dt><dd><?php echo $this->_tpl_vars['form']['buttons']['html']; ?>
</dd>
    </dl>
<div class="spacer"></div>
</div>