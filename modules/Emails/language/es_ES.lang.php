<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_EMAIL_INFORMATION' => 'EMAIL',
    'LBL_FW' => 'RV:',
    'LBL_RE' => 'RE:',

    'LBL_BUTTON_CREATE' => 'Crear',
    'LBL_BUTTON_EDIT' => 'Editar',
    'LBL_BUTTON_EDIT_EDIT_DRAFT' => 'Editar Borrador',
    'LBL_QS_DISABLED' => '(La Búsqueda Rápida no está disponible para este módulo. Por favor, use el botón de selección.)',
    'LBL_SIGNATURE_PREPEND' => 'Firma sobre la respuesta',
    'LBL_IMPORT' => 'Importar',
    'LBL_LOADING' => 'Cargando ...',
    'LBL_MARKING' => 'Marcando',

    'LBL_CONFIRM_DELETE_EMAIL' => '¿Esta seguro que desea eliminar este email?',
    'LBL_ENTER_FOLDER_NAME' => 'Por favor, introduzca un nombre de carpeta',

    'LBL_ERROR_SELECT_MODULE' => 'Por favor, seleccione un módulo para el campo Relacionado con',

    'ERR_ARCHIVE_EMAIL' => 'Error: Seleccione los emails a archivar.',
    'ERR_DELETE_RECORD' => 'Error: Debe especificar un número de registro para eliminar la cuenta.',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Cuentas',
    'LBL_ADD_DASHLETS' => 'Agregar SuiteCRM Dashlets',
    'LBL_ADD_DOCUMENT' => 'Agregar Documentos',
    'LBL_ADD_ENTRIES' => 'Agregar Entradas',
    'LBL_ADD_FILE' => 'Agregar Archivos',
    'LBL_ATTACHMENTS' => 'Adjuntos:',
    'LBL_ATTACH_FILES' => 'Adjuntar Archivos',
    'LBL_ATTACH_DOCUMENTS' => 'Adjuntar Documentos',
    'LBL_HAS_ATTACHMENT' => '¿Tiene Adjunto?:',
    'LBL_BCC' => 'CCO:',
    'LBL_BODY' => 'Cuerpo:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Incidencias',
    'LBL_CC' => 'CC:',
    'LBL_COMPOSE_MODULE_NAME' => 'Redactar Email',
    'LBL_CONTACT_NAME' => 'Contacto:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
    'LBL_CREATED_BY' => 'Creado por',
    'LBL_DATE_SENT' => 'Fecha Envío:',
    'LBL_DATE' => 'Fecha envío:',
    'LBL_DELETE_FROM_SERVER' => 'Eliminar mensaje del servidor',
    'LBL_DESCRIPTION' => 'Descripción',
    'LBL_EDIT_ALT_TEXT' => 'Editar Texto Plano',
    'LBL_SEND_IN_PLAIN_TEXT' => 'Enviar en Texto Plano',
    'LBL_SEND_CONFIRM_OPT_IN' => 'Enviar mensaje de autorización',
    'LBL_EMAIL_ATTACHMENT' => 'Archivo Adjunto',
    'LBL_EMAIL_SELECTOR_SELECT' => 'Seleccionar',
    'LBL_EMAIL_SELECTOR_CLEAR' => 'Limpiar',
    'LBL_EMAIL' => 'Correo electrónico:',
    'LBL_EMAILS_ACCOUNTS_REL' => 'Emails:Cuentas',
    'LBL_EMAILS_BUGS_REL' => 'Emails:Incidencias',
    'LBL_EMAILS_CASES_REL' => 'Emails:Casos',
    'LBL_EMAILS_CONTACTS_REL' => 'Emails:Contactos',
    'LBL_EMAILS_LEADS_REL' => 'Emails:Clientes Potenciales',
    'LBL_EMAILS_OPPORTUNITIES_REL' => 'Emails:Oportunidades',
    'LBL_EMAILS_NOTES_REL' => 'Emails:Notas',
    'LBL_EMAILS_PROJECT_REL' => 'Emails:Proyecto',
    'LBL_EMAILS_PROJECT_TASK_REL' => 'Emails:Tareas de proyecto',
    'LBL_EMAILS_PROSPECT_REL' => 'Emails:Público objetivo',
    'LBL_EMAILS_CONTRACTS_REL' => 'Correo electrónico: contrato',
    'LBL_EMAILS_TASKS_REL' => 'Emails:Tareas',
    'LBL_EMAILS_USERS_REL' => 'Emails:Usuarios',
    'LBL_EMPTY_FOLDER' => 'No hay emails a mostrar',
    'LBL_SELECT_FOLDER' => 'Seleccionar Carpeta',
    'LBL_ERROR_SENDING_EMAIL' => 'Error enviando email',
    'LBL_ERROR_SAVING_DRAFT' => 'Error Guardando Borrador',
    'LBL_FROM_NAME' => 'Nombre del Remitente',
    'LBL_FROM' => 'De:',
    'LBL_REPLY_TO' => 'Responder A:',
    'LBL_HTML_BODY' => 'Cuerpo de HTML',
    'LBL_INVITEE' => 'Destinatarios',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Clientes Potenciales',
    'LBL_MESSAGE_SENT' => 'Mensaje Enviado',
    'LBL_MODIFIED_BY' => 'Modificado Por',
    'LBL_MODULE_NAME' => 'Todos los Emails',
    'LBL_MODULE_TITLE' => 'Emails: Inicio',
    'LBL_MY_EMAILS' => 'Correos',
    'LBL_NEW_FORM_TITLE' => 'Guardar Email',
    'LBL_NONE' => 'Ninguno',
    'LBL_NOT_SENT' => 'Error de Envío',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Datos Adjuntos',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Proyectos',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Tareas de Proyecto',
    'LBL_RAW' => 'Código fuente del email',
    'LBL_SAVE_AS_DRAFT_BUTTON_TITLE' => 'Guardar Borrador',
    'LBL_DISREGARD_DRAFT_BUTTON_TITLE' => 'Descartar el borrador',
    'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de Emails',
    'LBL_SEND_ANYWAYS' => 'Este correo no tiene asunto. ¿Enviar/guardar de todas formas?',
    'LBL_SEND_BUTTON_LABEL' => 'Enviar',
    'LBL_SEND_BUTTON_TITLE' => 'Enviar',
    'LBL_SEND' => 'ENVIAR',
    'LBL_SENT_MODULE_NAME' => 'Emails Enviados',
    'LBL_SHOW_ALT_TEXT' => 'Mostrar Texto Plano',
    'LBL_SIGNATURE' => 'Firma',
    'LBL_SUBJECT' => 'Asunto:',
    'LBL_TEXT_BODY' => 'Cuerpo de Texto',
    'LBL_TIME' => 'Hora envío:',
    'LBL_TO_ADDRS' => 'Para',
    'LBL_USERS_SUBPANEL_TITLE' => 'Usuarios',
    'LBL_USERS' => 'Usuarios',

    'LNK_CALL_LIST' => 'Llamadas',
    'LBL_EMAIL_RELATE' => 'Relacionado con',
    'LNK_EMAIL_TEMPLATE_LIST' => 'Ver Plantillas de Email',
    'LNK_MEETING_LIST' => 'Reuniones',
    'LNK_NEW_CALL' => 'Registrar Llamada',
    'LNK_NEW_EMAIL_TEMPLATE' => 'Crear Plantilla de Email',
    'LNK_NEW_EMAIL' => 'Enviar Email',
    'LNK_NEW_MEETING' => 'Programar Reunión',
    'LNK_NEW_NOTE' => 'Nueva Nota o Archivo Adjunto',
    'LNK_NEW_SEND_EMAIL' => 'Redactar',
    'LNK_NEW_TASK' => 'Nueva Tarea',
    'LNK_NOTE_LIST' => 'Notas',
    'LNK_SENT_EMAIL_LIST' => 'Emails Enviados',
    'LNK_TASK_LIST' => 'Tareas',
    'LNK_VIEW_CALENDAR' => 'Hoy',

    'LBL_LIST_ASSIGNED' => 'Asignado',
    'LBL_LIST_CONTACT_NAME' => 'Nombre Contacto',
    'LBL_LIST_DATE_SENT' => 'Fecha Envío',
    'LBL_LIST_DATE' => 'Fecha Envío',
    'LBL_LIST_FORM_DRAFTS_TITLE' => 'Borrador',
    'LBL_LIST_FORM_SENT_TITLE' => 'Emails Enviados',
    'LBL_LIST_FORM_TITLE' => 'Lista de Emails',
    'LBL_LIST_FROM_ADDR' => 'De',
    'LBL_LIST_RELATED_TO' => 'Tipo de Destinatario',
    'LBL_LIST_SUBJECT' => 'Asunto',
    'LBL_LIST_TO_ADDR' => 'Para',
    'LBL_LIST_TYPE' => 'Tipo',

    'WARNING_SETTINGS_NOT_CONF' => 'Advertencia: Su configuración de correo no está preparada para el envío de correo.',

    // for All emails
    'LBL_BUTTON_RAW_LABEL' => 'Mostrar Código Fuente',
    'LBL_BUTTON_RAW_LABEL_HIDE' => 'Ocultar Código Fuente',

    // for InboundEmail
    'LBL_BUTTON_CHECK' => 'Comprobar Correo',
    'LBL_BUTTON_CHECK_TITLE' => 'Comprobar Correo Nuevo',
    'LBL_BUTTON_FORWARD' => 'Reenviar',
    'LBL_BUTTON_REPLY_TITLE' => 'Responder',
    'LBL_BUTTON_REPLY_ALL' => 'Responder a Todos',
    'LBL_CASES_SUBPANEL_TITLE' => 'Casos',
    'LBL_INBOUND_TITLE' => 'Correo Entrante',
    'LBL_INTENT' => 'Intento',
    'LBL_MESSAGE_ID' => 'ID Mensaje',
    'LBL_REPLY_HEADER_1' => 'El',
    'LBL_REPLY_HEADER_2' => 'escribió:',
    'LBL_REPLY_TO_ADDRESS' => 'Dirección de Responder A',
    'LBL_REPLY_TO_NAME' => 'Nombre de Responder A',

    'LBL_LIST_BUG' => 'Incidencias',
    'LBL_LIST_CASE' => 'Casos',
    'LBL_LIST_CONTACT' => 'Contactos',
    'LBL_LIST_LEAD' => 'Clientes Potenciales',
    'LBL_LIST_TASK' => 'Tareas',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuario Asignado',

    // for Inbox
    'LBL_ALL' => 'Todo',
    'LBL_ASSIGN_WARN' => 'Asegúrese de que las dos opciones están seleccionadas.',
    'LBL_BACK_TO_GROUP' => 'Volver a Bandeja de Entrada de Grupo',
    'LBL_BUTTON_DISTRIBUTE_TITLE' => 'Asignar',
    'LBL_BUTTON_DISTRIBUTE' => 'Asignar',
    'LBL_BUTTON_GRAB_TITLE' => 'Tomar del Grupo',
    'LBL_BUTTON_GRAB' => 'Tomar del Grupo',
    'LBL_CREATE_BUG' => 'Nueva Incidencia',
    'LBL_CREATE_CASE' => 'Nuevo Caso',
    'LBL_CREATE_CONTACT' => 'Nuevo Contacto',
    'LBL_CREATE_LEAD' => 'Nuevo Cliente Potencial',
    'LBL_CREATE_TASK' => 'Nueva Tarea',
    'LBL_DIST_TITLE' => 'Asignación',
    'LBL_LOCK_FAIL_DESC' => 'El elemento elegido no está disponible actualmente.',
    'LBL_LOCK_FAIL_USER' => 'ha tomado posesión.',
    'LBL_MASS_DELETE_ERROR' => 'No se ha seleccionado ningún elemento para su borrado.',
    'LBL_NEW' => 'Nuevo',
    'LBL_NEXT_EMAIL' => 'Siguiente Elemento Libre',
    'LBL_REPLIED' => 'Respondido',
    'LBL_TO' => 'Para:',
    'LBL_TOGGLE_ALL' => 'Cambiar Todo',
    'LBL_UNKNOWN' => 'Desconocido',
    'LBL_USE' => 'Asignar:',
    'LBL_ASSIGN_SELECTED_RESULTS_TO' => 'Asignar Resultados Seleccionados a:',
    'LBL_USER_SELECT' => 'Seleccionar Usuarios',
    'LBL_USING_RULES' => 'Usando Reglas:',
    'LBL_WARN_NO_DIST' => 'No se ha seleccionado el método de distribución',
    'LBL_WARN_NO_USERS' => 'No se han seleccionado usuarios',
    'LBL_IMPORT_STATUS_TITLE' => 'Estado',
    'LBL_INDICATOR' => 'Indicador',
    'LBL_LIST_STATUS' => 'Estado',
    'LBL_LIST_TITLE_GROUP_INBOX' => 'Bandeja de Entrada de Grupo',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Borradores',
    'LBL_LIST_TITLE_MY_INBOX' => 'Bandeja de entrada',
    'LBL_LIST_TITLE_MY_SENT' => 'Email Enviado',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Emails Archivados',

    'LNK_MY_DRAFTS' => 'Borradores',
    'LNK_MY_INBOX' => 'Email',
    'LNK_VIEW_MY_INBOX' => 'Ver Email',
    'LNK_QUICK_REPLY' => 'Responder',
    'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED' => 'No se ha especificado un Equipo Principal',
    'LBL_INSERT_CONTACT_EMAIL' => 'Insertar la dirección de Email desde un contacto',
    'LBL_INSERT_ACCOUNT_EMAIL' => 'Insertar la dirección de Email desde una Cuenta',
    'LBL_INSERT_TARGET_EMAIL' => 'Insertar la Dirección de Email desde un Objetivo',
    'LBL_INSERT_USER_EMAIL' => 'Insertar la dirección de Email desde un Usuario',
    'LBL_INSERT_LEAD_EMAIL' => 'Insertar la dirección de Email desde un Cliente Potencial',
    'LBL_INSERT_ERROR_BLANK_EMAIL' => 'Dirección de email inválida',

    // advanced search
    'LBL_ASSIGNED_TO' => 'Asignado A:',
    'LBL_MEMBER_OF' => 'Padre',
    'LBL_QUICK_CREATE' => 'Creación Rápida',
    'LBL_STATUS' => 'Estado de Email:',
    'LBL_EMAIL_FLAGGED' => 'Etiquetado:',
    'LBL_EMAIL_REPLY_TO_STATUS' => 'Estado de Responder A:',
    'LBL_TYPE' => 'Tipo:',
    //#20680 EmialTemplate Ext.Message.show;
    'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => '¡Por favor, compruebe los siguiente!',
    'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => 'Al seleccionar esta plantilla el cuerpo del correo ya introducido será reemplazado. ¿Desea continuar?',
    'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG' => 'Al seleccionar "--Ninguno--" se limpiará cualquier información ya introducida en el cuerpo del correo. ¿Desea continuar?',
    'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE' => 'Aviso',
    'LBL_EMAILTEMPLATE_MESSAGE_MULTIPLE_RECIPIENTS' => 'Utilizar una plantilla de correo electrónico que contiene las variables de contacto, como el nombre del contacto, para enviar mensajes de correo electrónico a varios destinatarios puede tener resultados inesperados. Se recomienda que se utilice una campaña de correo electrónico para envíos masivos.',
    'LBL_CHECK_ATTACHMENTS' => 'Por favor, compruebe los archivos adjuntos.',
    'LBL_HAS_ATTACHMENTS' => 'Este email ya tiene archivos adjuntos. ¿Desea preservarlos?',
    'LBL_HAS_ATTACHMENT_INDICATOR' => 'Tiene Adjuntos',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Falta campo requerido',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Campo requerido no válido',
    'LBL_FILTER_BY_RELATED_BEAN' => 'Sólo mostrar destinatarios relacionados',
    'LBL_ADD_INBOUND_ACCOUNT' => 'Añadir',
    'LBL_ADD_OUTBOUND_ACCOUNT' => 'Añadir',
    'LBL_EMAIL_ACCOUNTS_INBOUND' => 'Propiedades de Cuenta de Correo',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT' => 'Servidor de Correo Saliente SMTP',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS' => 'Servidores de Correo Saliente SMTP',
    'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS' => 'Cuentas de Correo',
    'LBL_EMAIL_SETTINGS_INBOUND' => 'Correo Entrante',
    'LBL_EMAIL_SETTINGS_OUTBOUND' => 'Correo Saliente',
    'LBL_ADD_CC' => 'Añadir Cc',
    'LBL_ADD_BCC' => 'Añadir Cco',
    'LBL_MOVE_TO_BCC' => 'Mover a Bcc',
    'LBL_ADD_TO_ADDR' => 'Añadir Para',
    'LBL_SELECTED_ADDR' => 'Seleccionado',
    'LBL_ADD_CC_BCC_SEP' => '|',
    'LBL_SEND_EMAIL_FAIL_TITLE' => 'Error Enviando Correo',
    'LBL_EMAIL_DETAIL_VIEW_SHOW' => 'mostrar',
    'LBL_EMAIL_DETAIL_VIEW_MORE' => 'más',
    'LBL_MORE_OPTIONS' => 'Más',
    'LBL_LESS_OPTIONS' => 'Menos',
    'LBL_MAILBOX_TYPE_PERSONAL' => 'Personal',
    'LBL_MAILBOX_TYPE_GROUP' => 'Grupo',
    'LBL_MAILBOX_TYPE_GROUP_FOLDER' => 'Grupo - Auto-Importación',
    'LBL_SEARCH_FOR' => 'Buscar',
    'LBL_EMAIL_INBOUND_TYPE_HELP' => '<b>Personal</b>: Cuenta de correo accesible por usted. Sólo usted puede administrar e importar correos desde esta cuenta.<br><b>Grupo</b>: Cuenta de correo accesible por miembros de equipos específicos. Los miembros de equipos pueden administrar e importar correos de esta cuenta.<br><b>Grupo - auto-importación</b>: Cuenta de correo accesible por miembros de equipos específicos. Los correos son importados como registros de forma automática.',
    'LBL_ADDRESS_BOOK_SEARCH_HELP' => 'Introduzca una dirección de correo, Nombre, Apellido o Nombre de Cuenta para encontrar destinatarios.',
    'LBL_TEST_SETTINGS' => 'Probar Configuración',
    'LBL_EMPTY_EMAIL_BODY' => '<p><span style="color: #888888;"><em>Este Mensaje No Tiene Contenido</em></span></p>',
    'LBL_HAS_EMPTY_EMAIL_SUBJECT' => 'Por favor especificar un asunto',
    'LBL_HAS_EMPTY_EMAIL_BODY' => 'Por favor escriba su mensaje en el cuerpo',
    'LBL_HAS_INVALID_EMAIL_CC' => 'La(s) dirección(es) en el campo Cc son inválidas',
    'LBL_HAS_INVALID_EMAIL_BCC' => 'La(s) dirección(es) en el campo Bcc son inválidas',
    'LBL_HAS_INVALID_EMAIL_TO' => 'La(s) dirección(es) en el campo To son inválidas',
    'LBL_TEST_EMAIL_SUBJECT' => 'Correo de Prueba desde SuiteCRM',
    'LBL_NO_SUBJECT' => '(sin asunto)',
    'LBL_CHECKING_ACCOUNT' => 'Comprobando Cuenta',
    'LBL_OF' => 'de',
    'LBL_TEST_EMAIL_BODY' => 'Este correo se ha enviado para comprobar la información sobre el servidor de correo saliente proporcionada en la aplicación SuiteCRM. La recepción con éxito de este correo confirma que la información proporcionada acerca del servidor de correo saliente es válida.',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'El administrador aún no ha configurado la cuenta saliente por defecto.  No es posible enviar un correo de prueba.',
    'LBL_MAIL_SMTPAUTH_REQ' => '¿Usar autenticación SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Contraseña SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Puerto SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'Servidor SMTP:',
    'LBL_MAIL_SMTPUSER' => 'Nombre de Usuario SMTP:',
    'LBL_MAIL_SMTP_SETTINGS' => 'Especificación de Servidor SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Elija su proveedor de Email:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Contraseña de Yahoo! Mail:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID de Yahoo! Mail:',
    'LBL_GMAIL_SMTPPASS' => 'Contraseña de Gmail:',
    'LBL_GMAIL_SMTPUSER' => 'Dirección de Email de Gmail:',
    'LBL_EXCHANGE_SMTPPASS' => 'Contraseña de Exchange:',
    'LBL_EXCHANGE_SMTPUSER' => 'Nombre de usuario de Exchange:',
    'LBL_EXCHANGE_SMTPPORT' => 'Puerto de Servidor Exchange:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Servidor Exchange:',

    'LBL_EDIT_LAYOUT' => 'Editar diseño' /*for 508 compliance fix*/,
    'LBL_ATTACHMENT' => 'Adjunto' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Eliminar' /*for 508 compliance fix*/,
    'LBL_CREATE_CASES' => 'Crear caso' /*for 508 compliance fix*/,
    'LBL_CREATE_LEADS' => 'Crear cliente potencial' /*for 508 compliance fix*/,
    'LBL_CREATE_CONTACTS' => 'Crear contacto' /*for 508 compliance fix*/,
    'LBL_CREATE_BUGS' => 'Nueva Incidencia' /*for 508 compliance fix*/,
    'LBL_CREATE_TASKS' => 'Crear tarea' /*for 508 compliance fix*/,
    'LBL_CHECK_INLINE' => 'Correcto' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'Cerrar' /*for 508 compliance fix*/,
    'LBL_HELP' => 'Ayuda' /*for 508 compliance fix*/,
    'LBL_WAIT' => 'Esperar' /*for 508 compliance fix*/,
    'LBL_CHECKEMAIL' => 'Revisar el correo electrónico' /*for 508 compliance fix*/,
    'LBL_COMPOSEEMAIL' => 'Redactar Email' /*for 508 compliance fix*/,
    'LBL_EMAILSETTINGS' => 'Configuración de Email' /*for 508 compliance fix*/,

    // SNIP
    'LBL_EMAILS_MEETINGS_REL' => 'Emails:Reuniones',
    'LBL_DATE_MODIFIED' => 'Fecha de modificación',

    'LBL_CATEGORY' => 'Categoría',
    'LBL_LIST_CATEGORY' => 'Categoría',
    'LBL_EMAIL_TEMPLATE' => 'Plantilla de Email',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Descartar el borrador',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Esta operación eliminará este mensaje, ¿desea continuar?',
    'LBL_EMAIL_DRAFT_DELETED' => 'El borrador ha sido eliminado',
    'LBL_EMAIL_DRAFT_ERROR_DELETING' => 'Se ha producido un error al intentar eliminar el borrador.',

    'LBL_QUICK_CREATE_SUCCESS1' => 'El registro se ha creado con éxito.', // PR 5651
    'LBL_QUICK_CREATE_SUCCESS2' => 'Haga clic en Aceptar para ver el nuevo registro.', // PR 5651
    'LBL_QUICK_CREATE_SUCCESS3' => 'Haga clic en Cancelar para volver al correo electrónico.', // PR 5651

    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Aplicar una plantilla de mensaje',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Esta operación borrará el campo cuerpo del mensaje, ¿quiere continuar?',

    'LBL_MAILBOX_ID' => 'ID de Buzón',
    'LBL_PARENT_ID' => 'ID Padre',
    'LBL_LAST_SYNCED' => 'Ultima sincronización',
    'LBL_ORPHANED' => 'Huérfanos',
    'LBL_IMAP_KEYWORDS' => 'IMAP Claves',
    'LBL_ERROR_NO_FOLDERS' => 'Error: No hay carpetas disponibles. Por favor revise su configuración de correo.',
    'LBL_ORIGINAL_MESSAGE_SEPERATOR' => '---',

    'LBL_MARK_UNREAD' => 'Marcar como no leído',
    'LBL_MARK_READ' => 'Marcar como leído',
    'LBL_MARK_FLAGGED' => 'Marca como destacado',
    'LBL_MARK_UNFLAGGED' => 'Marcar como no destacado',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Mensaje de autorización enviado',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Mensaje de autorización fallido',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Confirmar el Token de Autorización',

    'ERR_NO_RETURN_ID' => 'Adjunto no encontrado.',

    'LBL_LIST_DATE_MODIFIED' => 'Última Modificación',
    'LNK_IMPORT_CAMPAIGNS' => 'Importar campaña',
);