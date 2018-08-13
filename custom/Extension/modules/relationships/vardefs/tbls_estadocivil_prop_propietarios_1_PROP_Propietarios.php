<?php
// created: 2018-08-09 15:24:22
$dictionary["PROP_Propietarios"]["fields"]["tbls_estadocivil_prop_propietarios_1"] = array (
  'name' => 'tbls_estadocivil_prop_propietarios_1',
  'type' => 'link',
  'relationship' => 'tbls_estadocivil_prop_propietarios_1',
  'source' => 'non-db',
  'module' => 'TBLS_EstadoCivil',
  'bean_name' => 'TBLS_EstadoCivil',
  'vname' => 'LBL_TBLS_ESTADOCIVIL_PROP_PROPIETARIOS_1_FROM_TBLS_ESTADOCIVIL_TITLE',
  'id_name' => 'tbls_estadocivil_prop_propietarios_1tbls_estadocivil_ida',
);
$dictionary["PROP_Propietarios"]["fields"]["tbls_estadocivil_prop_propietarios_1_name"] = array (
  'name' => 'tbls_estadocivil_prop_propietarios_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TBLS_ESTADOCIVIL_PROP_PROPIETARIOS_1_FROM_TBLS_ESTADOCIVIL_TITLE',
  'save' => true,
  'id_name' => 'tbls_estadocivil_prop_propietarios_1tbls_estadocivil_ida',
  'link' => 'tbls_estadocivil_prop_propietarios_1',
  'table' => 'tbls_estadocivil',
  'module' => 'TBLS_EstadoCivil',
  'rname' => 'name',
);
$dictionary["PROP_Propietarios"]["fields"]["tbls_estadocivil_prop_propietarios_1tbls_estadocivil_ida"] = array (
  'name' => 'tbls_estadocivil_prop_propietarios_1tbls_estadocivil_ida',
  'type' => 'link',
  'relationship' => 'tbls_estadocivil_prop_propietarios_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TBLS_ESTADOCIVIL_PROP_PROPIETARIOS_1_FROM_PROP_PROPIETARIOS_TITLE',
);
