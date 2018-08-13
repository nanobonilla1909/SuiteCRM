<?php
$module_name = 'PROP_Propietarios';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_CONTACT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'lbl_contact_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'prop_clasificacionpropietario_prop_propietarios_1_name',
            'label' => 'LBL_PROP_CLASIFICACIONPROPIETARIO_PROP_PROPIETARIOS_1_FROM_PROP_CLASIFICACIONPROPIETARIO_TITLE',
          ),
          1 => 
          array (
            'name' => 'idfox',
            'label' => 'LBL_IDFOX',
          ),
        ),
        1 => 
        array (
          0 => 'phone_mobile',
          1 => 'last_name',
        ),
        2 => 
        array (
          0 => 'email1',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'primary',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'fechadeingreso',
            'label' => 'LBL_FECHADEINGRESO',
          ),
          1 => 
          array (
            'name' => 'tbls_estadocivil_prop_propietarios_1_name',
            'label' => 'LBL_TBLS_ESTADOCIVIL_PROP_PROPIETARIOS_1_FROM_TBLS_ESTADOCIVIL_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'genero',
            'label' => 'LBL_GENERO',
          ),
          1 => 
          array (
            'name' => 'fechadenacimiento',
            'label' => 'LBL_FECHADENACIMIENTO',
          ),
        ),
      ),
    ),
  ),
);
;
?>
