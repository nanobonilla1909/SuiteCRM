<?php
// created: 2018-08-09 15:23:57
$dictionary["prop_clasificacionpropietario_prop_propietarios_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'prop_clasificacionpropietario_prop_propietarios_1' => 
    array (
      'lhs_module' => 'PROP_ClasificacionPropietario',
      'lhs_table' => 'prop_clasificacionpropietario',
      'lhs_key' => 'id',
      'rhs_module' => 'PROP_Propietarios',
      'rhs_table' => 'prop_propietarios',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'prop_clasificacionpropietario_prop_propietarios_1_c',
      'join_key_lhs' => 'prop_clasiecc3ietario_ida',
      'join_key_rhs' => 'prop_clasi55c5etarios_idb',
    ),
  ),
  'table' => 'prop_clasificacionpropietario_prop_propietarios_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'prop_clasiecc3ietario_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'prop_clasi55c5etarios_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'prop_clasificacionpropietario_prop_propietarios_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'prop_clasificacionpropietario_prop_propietarios_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'prop_clasiecc3ietario_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'prop_clasificacionpropietario_prop_propietarios_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'prop_clasi55c5etarios_idb',
      ),
    ),
  ),
);