<?php /* Smarty version Smarty-3.1.21, created on 2021-06-09 19:50:41
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\common\daterange_picker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8024659260c0f161e36fa4-56372192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d9adbb74c03960cfe605cb9bff4dc7722bbd642' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\common\\daterange_picker.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8024659260c0f161e36fa4-56372192',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'extra_class' => 0,
    'data_url' => 0,
    'result_ids' => 0,
    'start_date' => 0,
    'end_date' => 0,
    'settings' => 0,
    'use_predefined_periods' => 0,
    'show_ranges' => 0,
    'data_event' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c0f162019ee2_44474980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c0f162019ee2_44474980')) {function content_60c0f162019ee2_44474980($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\modifier.date_format.php';
if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\block.inline_script.php';
if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('month_name_abr_1','month_name_abr_2','month_name_abr_3','month_name_abr_4','month_name_abr_5','month_name_abr_6','month_name_abr_7','month_name_abr_8','month_name_abr_9','month_name_abr_10','month_name_abr_11','month_name_abr_12','weekday_abr_0','weekday_abr_1','weekday_abr_2','weekday_abr_3','weekday_abr_4','weekday_abr_5','weekday_abr_6','today','yesterday','this_month','last_month','this_year','last_year','custom_range','apply','clear','cancel','from','to'));
?>
<div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
    class="cm-date-range <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_class']->value, ENT_QUOTES, 'UTF-8');?>
"
    <?php if ($_smarty_tpl->tpl_vars['data_url']->value) {?>data-ca-target-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['result_ids']->value) {?>data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    data-ca-time-from="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['start_date']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-time-to="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['end_date']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-date-format="<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_date_format']=="month_first") {?>MM/DD/YYYY<?php } else { ?>DD/MM/YYYY<?php }?>"
    data-ca-displayed-format="<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_date_format']=="month_first") {?>MMM DD, YYYY<?php } else { ?>DD MMM, YYYY<?php }?>"
    data-ca-use-predefined-periods="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['use_predefined_periods']->value)===null||$tmp==='' ? "true" : $tmp), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-show-ranges="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['show_ranges']->value)===null||$tmp==='' ? "true" : $tmp), ENT_QUOTES, 'UTF-8');?>
"
    <?php if ($_smarty_tpl->tpl_vars['data_event']->value) {?>data-ca-event="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_event']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <a class="btn-text">
        <span>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_date_format']=="month_first") {?>
                <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['start_date']->value,"%b %d, %Y"), ENT_QUOTES, 'UTF-8');?>
 — <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['end_date']->value,"%b %d, %Y"), ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
                <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['start_date']->value,"%d %b %Y"), ENT_QUOTES, 'UTF-8');?>
 — <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['end_date']->value,"%d %b %Y"), ENT_QUOTES, 'UTF-8');?>

            <?php }?>
        </span>
        <b class="caret"></b>
    </a>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript" class="cm-ajax_force">
    (function (_, $) {
        _.tr({
            default_lang: '<?php echo htmlspecialchars(strtr((defined('DEFAULT_LANGUAGE') ? constant('DEFAULT_LANGUAGE') : null), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',
            month_name_abr_1: '<?php echo strtr($_smarty_tpl->__("month_name_abr_1"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            month_name_abr_2: '<?php echo strtr($_smarty_tpl->__("month_name_abr_2"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            month_name_abr_3: '<?php echo strtr($_smarty_tpl->__("month_name_abr_3"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            month_name_abr_4: '<?php echo strtr($_smarty_tpl->__("month_name_abr_4"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            month_name_abr_5: '<?php echo strtr($_smarty_tpl->__("month_name_abr_5"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            month_name_abr_6: '<?php echo strtr($_smarty_tpl->__("month_name_abr_6"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            month_name_abr_7: '<?php echo strtr($_smarty_tpl->__("month_name_abr_7"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            month_name_abr_8: '<?php echo strtr($_smarty_tpl->__("month_name_abr_8"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            month_name_abr_9: '<?php echo strtr($_smarty_tpl->__("month_name_abr_9"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            month_name_abr_10: '<?php echo strtr($_smarty_tpl->__("month_name_abr_10"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            month_name_abr_11: '<?php echo strtr($_smarty_tpl->__("month_name_abr_11"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            month_name_abr_12: '<?php echo strtr($_smarty_tpl->__("month_name_abr_12"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            weekday_abr_0: '<?php echo strtr($_smarty_tpl->__("weekday_abr_0"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            weekday_abr_1: '<?php echo strtr($_smarty_tpl->__("weekday_abr_1"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            weekday_abr_2: '<?php echo strtr($_smarty_tpl->__("weekday_abr_2"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            weekday_abr_3: '<?php echo strtr($_smarty_tpl->__("weekday_abr_3"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            weekday_abr_4: '<?php echo strtr($_smarty_tpl->__("weekday_abr_4"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            weekday_abr_5: '<?php echo strtr($_smarty_tpl->__("weekday_abr_5"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            weekday_abr_6: '<?php echo strtr($_smarty_tpl->__("weekday_abr_6"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            today: '<?php echo strtr($_smarty_tpl->__("today"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            yesterday: '<?php echo strtr($_smarty_tpl->__("yesterday"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            this_month: '<?php echo strtr($_smarty_tpl->__("this_month"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            last_month: '<?php echo strtr($_smarty_tpl->__("last_month"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            this_year: '<?php echo strtr($_smarty_tpl->__("this_year"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            last_year: '<?php echo strtr($_smarty_tpl->__("last_year"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            custom_range: '<?php echo strtr($_smarty_tpl->__("custom_range"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            apply: '<?php echo strtr($_smarty_tpl->__("apply"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            clear: '<?php echo strtr($_smarty_tpl->__("clear"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            cancel: '<?php echo strtr($_smarty_tpl->__("cancel"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            from: '<?php echo strtr($_smarty_tpl->__("from"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            to: '<?php echo strtr($_smarty_tpl->__("to"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
        });
        _.daterangepicker = {
        };
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo smarty_function_script(array('src'=>"js/tygh/date_picker.js"),$_smarty_tpl);?>

<?php }} ?>
