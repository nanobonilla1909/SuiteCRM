<?php
// created: 2018-08-09 15:24:59
$dictionary["tbls_nacionalidades_prop_propietarios_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'tbls_nacionalidades_prop_propietarios_1' => 
    array (
      'lhs_module' => 'TBLS_Nacionalidades',
      'lhs_table' => 'tbls_nacionalidades',
      'lhs_key' => 'id',
      'rhs_module' => 'PROP_Propietarios',
      'rhs_table' => 'prop_propietarios',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tbls_nacionalidades_prop_propietarios_1_c',
      'join_key_lhs' => 'tbls_nacionalidades_prop_propietarios_1tbls_nacionalidades_ida',
      'join_key_rhs' => 'tbls_nacionalidades_prop_propietarios_1prop_propietarios_idb',
    ),
  ),
  'table' => 'tbls_nacionalidades_prop_propietarios_1_c',
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
      'name' => 'tbls_nacionalidades_prop_propietarios_1tbls_nacionalidades_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'tbls_nacionalidades_prop_propietarios_1prop_propietarios_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'tbls_nacionalidades_prop_propietarios_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'tbls_nacionalidades_prop_propietarios_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'tbls_nacionalidades_prop_propietarios_1tbls_nacionalidades_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'tbls_nacionalidades_prop_propietarios_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'tbls_nacionalidades_prop_propietarios_1prop_propietarios_idb',
      ),
    ),
  ),
);