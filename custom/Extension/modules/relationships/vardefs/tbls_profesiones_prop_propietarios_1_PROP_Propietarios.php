<?php
// created: 2018-08-09 15:26:53
$dictionary["PROP_Propietarios"]["fields"]["tbls_profesiones_prop_propietarios_1"] = array (
  'name' => 'tbls_profesiones_prop_propietarios_1',
  'type' => 'link',
  'relationship' => 'tbls_profesiones_prop_propietarios_1',
  'source' => 'non-db',
  'module' => 'TBLS_Profesiones',
  'bean_name' => 'TBLS_Profesiones',
  'vname' => 'LBL_TBLS_PROFESIONES_PROP_PROPIETARIOS_1_FROM_TBLS_PROFESIONES_TITLE',
  'id_name' => 'tbls_profesiones_prop_propietarios_1tbls_profesiones_ida',
);
$dictionary["PROP_Propietarios"]["fields"]["tbls_profesiones_prop_propietarios_1_name"] = array (
  'name' => 'tbls_profesiones_prop_propietarios_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TBLS_PROFESIONES_PROP_PROPIETARIOS_1_FROM_TBLS_PROFESIONES_TITLE',
  'save' => true,
  'id_name' => 'tbls_profesiones_prop_propietarios_1tbls_profesiones_ida',
  'link' => 'tbls_profesiones_prop_propietarios_1',
  'table' => 'tbls_profesiones',
  'module' => 'TBLS_Profesiones',
  'rname' => 'name',
);
$dictionary["PROP_Propietarios"]["fields"]["tbls_profesiones_prop_propietarios_1tbls_profesiones_ida"] = array (
  'name' => 'tbls_profesiones_prop_propietarios_1tbls_profesiones_ida',
  'type' => 'link',
  'relationship' => 'tbls_profesiones_prop_propietarios_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TBLS_PROFESIONES_PROP_PROPIETARIOS_1_FROM_PROP_PROPIETARIOS_TITLE',
);
