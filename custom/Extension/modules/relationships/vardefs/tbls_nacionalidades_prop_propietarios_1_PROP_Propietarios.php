<?php
// created: 2018-08-09 15:24:59
$dictionary["PROP_Propietarios"]["fields"]["tbls_nacionalidades_prop_propietarios_1"] = array (
  'name' => 'tbls_nacionalidades_prop_propietarios_1',
  'type' => 'link',
  'relationship' => 'tbls_nacionalidades_prop_propietarios_1',
  'source' => 'non-db',
  'module' => 'TBLS_Nacionalidades',
  'bean_name' => 'TBLS_Nacionalidades',
  'vname' => 'LBL_TBLS_NACIONALIDADES_PROP_PROPIETARIOS_1_FROM_TBLS_NACIONALIDADES_TITLE',
  'id_name' => 'tbls_nacionalidades_prop_propietarios_1tbls_nacionalidades_ida',
);
$dictionary["PROP_Propietarios"]["fields"]["tbls_nacionalidades_prop_propietarios_1_name"] = array (
  'name' => 'tbls_nacionalidades_prop_propietarios_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TBLS_NACIONALIDADES_PROP_PROPIETARIOS_1_FROM_TBLS_NACIONALIDADES_TITLE',
  'save' => true,
  'id_name' => 'tbls_nacionalidades_prop_propietarios_1tbls_nacionalidades_ida',
  'link' => 'tbls_nacionalidades_prop_propietarios_1',
  'table' => 'tbls_nacionalidades',
  'module' => 'TBLS_Nacionalidades',
  'rname' => 'name',
);
$dictionary["PROP_Propietarios"]["fields"]["tbls_nacionalidades_prop_propietarios_1tbls_nacionalidades_ida"] = array (
  'name' => 'tbls_nacionalidades_prop_propietarios_1tbls_nacionalidades_ida',
  'type' => 'link',
  'relationship' => 'tbls_nacionalidades_prop_propietarios_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TBLS_NACIONALIDADES_PROP_PROPIETARIOS_1_FROM_PROP_PROPIETARIOS_TITLE',
);
