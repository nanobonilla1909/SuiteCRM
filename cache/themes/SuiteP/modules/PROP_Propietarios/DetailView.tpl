

<script language="javascript">
    {literal}
    SUGAR.util.doWhen(function () {
        return $("#contentTable").length == 0;
    }, SUGAR.themes.actionMenu);
    {/literal}
</script>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="{$module}">
<input type="hidden" name="record" value="{$fields.id.value}">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
{if !$config.enable_action_menu}
<div class="buttons">
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='PROP_Propietarios'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} 
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='PROP_Propietarios'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='{$id}';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} 
{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='PROP_Propietarios'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form); return false;" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if} 
{if $bean->aclAccess("edit") && $bean->aclAccess("delete")}<input title="{$APP.LBL_DUP_MERGE}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='PROP_Propietarios'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='Step1'; _form.module.value='MergeRecords';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Merge" value="{$APP.LBL_DUP_MERGE}" id="merge_duplicate_button">{/if} 
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=PROP_Propietarios", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>                    {/if}
</form>
</div>
</td>
<td align="right" width="20%" class="buttons">{$ADMIN_EDIT}
</td>
</tr>
</table>
{sugar_include include=$includes}
<div class="detail-view">
<div class="mobile-pagination">{$PAGINATION}</div>

<ul class="nav nav-tabs">

{if $config.enable_action_menu and $config.enable_action_menu != false}
<li role="presentation" class="active">
<a id="tab0" data-toggle="tab" class="hidden-xs">
{sugar_translate label='LBL_CONTACT_INFORMATION' module='PROP_Propietarios'}
</a>
<a id="xstab0" href="#" class="visible-xs first-tab dropdown-toggle" data-toggle="dropdown">
{sugar_translate label='LBL_CONTACT_INFORMATION' module='PROP_Propietarios'}
</a>
</li>

{/if}
{if $config.enable_action_menu and $config.enable_action_menu != false}
<li id="tab-actions" class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">Acciones<span class="suitepicon suitepicon-action-caret"></span></a>
<ul class="dropdown-menu">
<li>{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='PROP_Propietarios'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} </li>
<li>{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='PROP_Propietarios'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='{$id}';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} </li>
<li>{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='PROP_Propietarios'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form); return false;" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if} </li>
<li>{if $bean->aclAccess("edit") && $bean->aclAccess("delete")}<input title="{$APP.LBL_DUP_MERGE}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='PROP_Propietarios'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='Step1'; _form.module.value='MergeRecords';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Merge" value="{$APP.LBL_DUP_MERGE}" id="merge_duplicate_button">{/if} </li>
<li>{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=PROP_Propietarios", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}</li>
</ul>        </li>
<li class="tab-inline-pagination">
{$PAGINATION}
</li>
{/if}
</ul>
<div class="clearfix"></div>

{if $config.enable_action_menu and $config.enable_action_menu != false}

<div class="tab-content">
{else}

<div class="tab-content" style="padding: 0; border: 0;">
{/if}


{if $config.enable_action_menu and $config.enable_action_menu != false}
<div class="tab-pane-NOBOOTSTRAPTOGGLER active fade in" id='tab-content-0'>





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_PROP_CLASIFICACIONPROPIETARIO_PROP_PROPIETARIOS_1_FROM_PROP_CLASIFICACIONPROPIETARIO_TITLE' module='PROP_Propietarios'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="relate" field="prop_clasificacionpropietario_prop_propietarios_1_name"  >

{if !$fields.prop_clasificacionpropietario_prop_propietarios_1_name.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.prop_clasiecc3ietario_ida.value)}
{capture assign="detail_url"}index.php?module=PROP_ClasificacionPropietario&action=DetailView&record={$fields.prop_clasiecc3ietario_ida.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="prop_clasiecc3ietario_ida" class="sugar_field" data-id-value="{$fields.prop_clasiecc3ietario_ida.value}">{$fields.prop_clasificacionpropietario_prop_propietarios_1_name.value}</span>
{if !empty($fields.prop_clasiecc3ietario_ida.value)}</a>{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_IDFOX' module='PROP_Propietarios'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="idfox"  >

{if !$fields.idfox.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.idfox.value) <= 0}
{assign var="value" value=$fields.idfox.default_value }
{else}
{assign var="value" value=$fields.idfox.value }
{/if} 
<span class="sugar_field" id="{$fields.idfox.name}">{$fields.idfox.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_MOBILE_PHONE' module='PROP_Propietarios'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="phone" field="phone_mobile"  class="phone">

{if !$fields.phone_mobile.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.phone_mobile.value)}
{assign var="phone_value" value=$fields.phone_mobile.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_OFFICE_PHONE' module='PROP_Propietarios'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="phone" field="phone_work"  class="phone">

{if !$fields.phone_work.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.phone_work.value)}
{assign var="phone_value" value=$fields.phone_work.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_IDENTIFICACION' module='PROP_Propietarios'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="identificacion"  >

{if !$fields.identificacion.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.identificacion.value) <= 0}
{assign var="value" value=$fields.identificacion.default_value }
{else}
{assign var="value" value=$fields.identificacion.value }
{/if} 
<span class="sugar_field" id="{$fields.identificacion.name}">{$fields.identificacion.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">
</div>

<div class="clear"></div>
</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_EMAIL_ADDRESS' module='PROP_Propietarios'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field inlineEdit" type="varchar" field="email1" colspan='3' >

{if !$fields.email1.hidden}
{counter name="panelFieldCount" print=false}
<span id='email1_span'>
{$fields.email1.value}
</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_PRIMARY_ADDRESS' module='PROP_Propietarios'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field inlineEdit" type="varchar" field="primary_address_street" colspan='3' >

{if !$fields.primary_address_street.hidden}
{counter name="panelFieldCount" print=false}

<table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td width='99%'>
<input type="hidden" class="sugar_field" id="primary_address_street"
value="{$fields.primary_address_street.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="primary_address_city"
value="{$fields.primary_address_city.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="primary_address_state"
value="{$fields.primary_address_state.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="primary_address_country"
value="{$fields.primary_address_country.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="primary_address_postalcode"
value="{$fields.primary_address_postalcode.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br}">
{$fields.primary_address_street.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br}
<br>
{$fields.primary_address_city.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br} {$fields.primary_address_state.value|escape:'html_entity_decode'|strip_tags|url2html|nl2br}
&nbsp;&nbsp;{$fields.primary_address_postalcode.value|escape:'html_entity_decode'|strip_tags|url2html|nl2br}
<br>
{$fields.primary_address_country.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br}
</td>
<td class='dataField' width='1%'>
{$custom_code_primary}
</td>
</tr>
</table>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>
                        </div>
{else}

<div class="tab-pane-NOBOOTSTRAPTOGGLER panel-collapse"></div>
{/if}
</div>

<div class="panel-content">
<div>&nbsp;</div>





{if $config.enable_action_menu and $config.enable_action_menu != false}

{else}

<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse" href="#top-panel--1" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_CONTACT_INFORMATION' module='PROP_Propietarios'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel--1" data-id="LBL_CONTACT_INFORMATION">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_PROP_CLASIFICACIONPROPIETARIO_PROP_PROPIETARIOS_1_FROM_PROP_CLASIFICACIONPROPIETARIO_TITLE' module='PROP_Propietarios'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="relate" field="prop_clasificacionpropietario_prop_propietarios_1_name"  >

{if !$fields.prop_clasificacionpropietario_prop_propietarios_1_name.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.prop_clasiecc3ietario_ida.value)}
{capture assign="detail_url"}index.php?module=PROP_ClasificacionPropietario&action=DetailView&record={$fields.prop_clasiecc3ietario_ida.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="prop_clasiecc3ietario_ida" class="sugar_field" data-id-value="{$fields.prop_clasiecc3ietario_ida.value}">{$fields.prop_clasificacionpropietario_prop_propietarios_1_name.value}</span>
{if !empty($fields.prop_clasiecc3ietario_ida.value)}</a>{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_IDFOX' module='PROP_Propietarios'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="idfox"  >

{if !$fields.idfox.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.idfox.value) <= 0}
{assign var="value" value=$fields.idfox.default_value }
{else}
{assign var="value" value=$fields.idfox.value }
{/if} 
<span class="sugar_field" id="{$fields.idfox.name}">{$fields.idfox.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_MOBILE_PHONE' module='PROP_Propietarios'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="phone" field="phone_mobile"  class="phone">

{if !$fields.phone_mobile.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.phone_mobile.value)}
{assign var="phone_value" value=$fields.phone_mobile.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_OFFICE_PHONE' module='PROP_Propietarios'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="phone" field="phone_work"  class="phone">

{if !$fields.phone_work.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.phone_work.value)}
{assign var="phone_value" value=$fields.phone_work.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_IDENTIFICACION' module='PROP_Propietarios'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="identificacion"  >

{if !$fields.identificacion.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.identificacion.value) <= 0}
{assign var="value" value=$fields.identificacion.default_value }
{else}
{assign var="value" value=$fields.identificacion.value }
{/if} 
<span class="sugar_field" id="{$fields.identificacion.name}">{$fields.identificacion.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">
</div>

<div class="clear"></div>
</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_EMAIL_ADDRESS' module='PROP_Propietarios'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field inlineEdit" type="varchar" field="email1" colspan='3' >

{if !$fields.email1.hidden}
{counter name="panelFieldCount" print=false}
<span id='email1_span'>
{$fields.email1.value}
</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_PRIMARY_ADDRESS' module='PROP_Propietarios'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field inlineEdit" type="varchar" field="primary_address_street" colspan='3' >

{if !$fields.primary_address_street.hidden}
{counter name="panelFieldCount" print=false}

<table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td width='99%'>
<input type="hidden" class="sugar_field" id="primary_address_street"
value="{$fields.primary_address_street.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="primary_address_city"
value="{$fields.primary_address_city.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="primary_address_state"
value="{$fields.primary_address_state.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="primary_address_country"
value="{$fields.primary_address_country.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="primary_address_postalcode"
value="{$fields.primary_address_postalcode.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br}">
{$fields.primary_address_street.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br}
<br>
{$fields.primary_address_city.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br} {$fields.primary_address_state.value|escape:'html_entity_decode'|strip_tags|url2html|nl2br}
&nbsp;&nbsp;{$fields.primary_address_postalcode.value|escape:'html_entity_decode'|strip_tags|url2html|nl2br}
<br>
{$fields.primary_address_country.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br}
</td>
<td class='dataField' width='1%'>
{$custom_code_primary}
</td>
</tr>
</table>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>
                            </div>
</div>
</div>
{/if}





{if $config.enable_action_menu and $config.enable_action_menu != false}

<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse" href="#top-panel-0" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_EDITVIEW_PANEL1' module='PROP_Propietarios'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel-0"  data-id="LBL_EDITVIEW_PANEL1">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_FECHADEINGRESO' module='PROP_Propietarios'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="fechadeingreso"  >

{if !$fields.fechadeingreso.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.fechadeingreso.value) <= 0}
{assign var="value" value=$fields.fechadeingreso.default_value }
{else}
{assign var="value" value=$fields.fechadeingreso.value }
{/if}
<span class="sugar_field" id="{$fields.fechadeingreso.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TBLS_ESTADOCIVIL_PROP_PROPIETARIOS_1_FROM_TBLS_ESTADOCIVIL_TITLE' module='PROP_Propietarios'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="relate" field="tbls_estadocivil_prop_propietarios_1_name"  >

{if !$fields.tbls_estadocivil_prop_propietarios_1_name.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.tbls_estadocivil_prop_propietarios_1tbls_estadocivil_ida.value)}
{capture assign="detail_url"}index.php?module=TBLS_EstadoCivil&action=DetailView&record={$fields.tbls_estadocivil_prop_propietarios_1tbls_estadocivil_ida.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="tbls_estadocivil_prop_propietarios_1tbls_estadocivil_ida" class="sugar_field" data-id-value="{$fields.tbls_estadocivil_prop_propietarios_1tbls_estadocivil_ida.value}">{$fields.tbls_estadocivil_prop_propietarios_1_name.value}</span>
{if !empty($fields.tbls_estadocivil_prop_propietarios_1tbls_estadocivil_ida.value)}</a>{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_GENERO' module='PROP_Propietarios'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="genero"  >

{if !$fields.genero.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.genero.value) <= 0}
{assign var="value" value=$fields.genero.default_value }
{else}
{assign var="value" value=$fields.genero.value }
{/if} 
<span class="sugar_field" id="{$fields.genero.name}">{$fields.genero.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_FECHADENACIMIENTO' module='PROP_Propietarios'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="fechadenacimiento"  >

{if !$fields.fechadenacimiento.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.fechadenacimiento.value) <= 0}
{assign var="value" value=$fields.fechadenacimiento.default_value }
{else}
{assign var="value" value=$fields.fechadenacimiento.value }
{/if}
<span class="sugar_field" id="{$fields.fechadenacimiento.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TBLS_NACIONALIDADES_PROP_PROPIETARIOS_1_FROM_TBLS_NACIONALIDADES_TITLE' module='PROP_Propietarios'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="relate" field="tbls_nacionalidades_prop_propietarios_1_name"  >

{if !$fields.tbls_nacionalidades_prop_propietarios_1_name.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.tbls_nacionalidades_prop_propietarios_1tbls_nacionalidades_ida.value)}
{capture assign="detail_url"}index.php?module=TBLS_Nacionalidades&action=DetailView&record={$fields.tbls_nacionalidades_prop_propietarios_1tbls_nacionalidades_ida.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="tbls_nacionalidades_prop_propietarios_1tbls_nacionalidades_ida" class="sugar_field" data-id-value="{$fields.tbls_nacionalidades_prop_propietarios_1tbls_nacionalidades_ida.value}">{$fields.tbls_nacionalidades_prop_propietarios_1_name.value}</span>
{if !empty($fields.tbls_nacionalidades_prop_propietarios_1tbls_nacionalidades_ida.value)}</a>{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">
</div>

<div class="clear"></div>
</div>
                                </div>
</div>
</div>
{else}

<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse" href="#top-panel-0" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_EDITVIEW_PANEL1' module='PROP_Propietarios'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel-0" data-id="LBL_EDITVIEW_PANEL1">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_FECHADEINGRESO' module='PROP_Propietarios'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="fechadeingreso"  >

{if !$fields.fechadeingreso.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.fechadeingreso.value) <= 0}
{assign var="value" value=$fields.fechadeingreso.default_value }
{else}
{assign var="value" value=$fields.fechadeingreso.value }
{/if}
<span class="sugar_field" id="{$fields.fechadeingreso.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TBLS_ESTADOCIVIL_PROP_PROPIETARIOS_1_FROM_TBLS_ESTADOCIVIL_TITLE' module='PROP_Propietarios'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="relate" field="tbls_estadocivil_prop_propietarios_1_name"  >

{if !$fields.tbls_estadocivil_prop_propietarios_1_name.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.tbls_estadocivil_prop_propietarios_1tbls_estadocivil_ida.value)}
{capture assign="detail_url"}index.php?module=TBLS_EstadoCivil&action=DetailView&record={$fields.tbls_estadocivil_prop_propietarios_1tbls_estadocivil_ida.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="tbls_estadocivil_prop_propietarios_1tbls_estadocivil_ida" class="sugar_field" data-id-value="{$fields.tbls_estadocivil_prop_propietarios_1tbls_estadocivil_ida.value}">{$fields.tbls_estadocivil_prop_propietarios_1_name.value}</span>
{if !empty($fields.tbls_estadocivil_prop_propietarios_1tbls_estadocivil_ida.value)}</a>{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_GENERO' module='PROP_Propietarios'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="genero"  >

{if !$fields.genero.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.genero.value) <= 0}
{assign var="value" value=$fields.genero.default_value }
{else}
{assign var="value" value=$fields.genero.value }
{/if} 
<span class="sugar_field" id="{$fields.genero.name}">{$fields.genero.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_FECHADENACIMIENTO' module='PROP_Propietarios'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="fechadenacimiento"  >

{if !$fields.fechadenacimiento.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.fechadenacimiento.value) <= 0}
{assign var="value" value=$fields.fechadenacimiento.default_value }
{else}
{assign var="value" value=$fields.fechadenacimiento.value }
{/if}
<span class="sugar_field" id="{$fields.fechadenacimiento.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TBLS_NACIONALIDADES_PROP_PROPIETARIOS_1_FROM_TBLS_NACIONALIDADES_TITLE' module='PROP_Propietarios'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="relate" field="tbls_nacionalidades_prop_propietarios_1_name"  >

{if !$fields.tbls_nacionalidades_prop_propietarios_1_name.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.tbls_nacionalidades_prop_propietarios_1tbls_nacionalidades_ida.value)}
{capture assign="detail_url"}index.php?module=TBLS_Nacionalidades&action=DetailView&record={$fields.tbls_nacionalidades_prop_propietarios_1tbls_nacionalidades_ida.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="tbls_nacionalidades_prop_propietarios_1tbls_nacionalidades_ida" class="sugar_field" data-id-value="{$fields.tbls_nacionalidades_prop_propietarios_1tbls_nacionalidades_ida.value}">{$fields.tbls_nacionalidades_prop_propietarios_1_name.value}</span>
{if !empty($fields.tbls_nacionalidades_prop_propietarios_1tbls_nacionalidades_ida.value)}</a>{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">
</div>

<div class="clear"></div>
</div>
                            </div>
</div>
</div>
{/if}
</div>
</div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>            <script type="text/javascript" src="include/InlineEditing/inlineEditing.js"></script>
<script type="text/javascript" src="modules/Favorites/favorites.js"></script>
{literal}
<script type="text/javascript">

                    var selectTabDetailView = function(tab) {
                        $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
                        $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
                    };

                    var selectTabOnError = function(tab) {
                        selectTabDetailView(tab);
                        $('#content ul.nav.nav-tabs > li').removeClass('active');
                        $('#content ul.nav.nav-tabs > li a').css('color', '');

                        $('#content ul.nav.nav-tabs > li').eq(tab).find('a').first().css('color', 'red');
                        $('#content ul.nav.nav-tabs > li').eq(tab).addClass('active');

                    };

                    var selectTabOnErrorInputHandle = function(inputHandle) {
                        var tab = $(inputHandle).closest('.tab-pane-NOBOOTSTRAPTOGGLER').attr('id').match(/^detailpanel_(.*)$/)[1];
                        selectTabOnError(tab);
                    };


                    $(function(){
                        $('#content ul.nav.nav-tabs > li > a[data-toggle="tab"]').click(function(e){
                            if(typeof $(this).parent().find('a').first().attr('id') != 'undefined') {
                                var tab = parseInt($(this).parent().find('a').first().attr('id').match(/^tab(.)*$/)[1]);
                                selectTabDetailView(tab);
                            }
                        });
                    });

                </script>
{/literal}