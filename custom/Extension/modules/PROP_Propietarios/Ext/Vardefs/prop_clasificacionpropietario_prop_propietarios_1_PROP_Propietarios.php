<?php
// created: 2018-08-09 15:23:57
$dictionary["PROP_Propietarios"]["fields"]["prop_clasificacionpropietario_prop_propietarios_1"] = array (
  'name' => 'prop_clasificacionpropietario_prop_propietarios_1',
  'type' => 'link',
  'relationship' => 'prop_clasificacionpropietario_prop_propietarios_1',
  'source' => 'non-db',
  'module' => 'PROP_ClasificacionPropietario',
  'bean_name' => 'PROP_ClasificacionPropietario',
  'vname' => 'LBL_PROP_CLASIFICACIONPROPIETARIO_PROP_PROPIETARIOS_1_FROM_PROP_CLASIFICACIONPROPIETARIO_TITLE',
  'id_name' => 'prop_clasiecc3ietario_ida',
);
$dictionary["PROP_Propietarios"]["fields"]["prop_clasificacionpropietario_prop_propietarios_1_name"] = array (
  'name' => 'prop_clasificacionpropietario_prop_propietarios_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROP_CLASIFICACIONPROPIETARIO_PROP_PROPIETARIOS_1_FROM_PROP_CLASIFICACIONPROPIETARIO_TITLE',
  'save' => true,
  'id_name' => 'prop_clasiecc3ietario_ida',
  'link' => 'prop_clasificacionpropietario_prop_propietarios_1',
  'table' => 'prop_clasificacionpropietario',
  'module' => 'PROP_ClasificacionPropietario',
  'rname' => 'name',
);
$dictionary["PROP_Propietarios"]["fields"]["prop_clasiecc3ietario_ida"] = array (
  'name' => 'prop_clasiecc3ietario_ida',
  'type' => 'link',
  'relationship' => 'prop_clasificacionpropietario_prop_propietarios_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PROP_CLASIFICACIONPROPIETARIO_PROP_PROPIETARIOS_1_FROM_PROP_PROPIETARIOS_TITLE',
);
