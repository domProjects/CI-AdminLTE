<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Ion Auth Lang - English
*
* Author: Ben Edmunds
*         ben.edmunds@gmail.com
*         @benedmunds
*
* Location: http://github.com/benedmunds/ion_auth/
*
* Created:  03.14.2010
*
* Description:  English language file for Ion Auth messages and errors
*
*/

// Account Creation
$lang['account_creation_successful']            = 'Cuenta creada correctamente';
$lang['account_creation_unsuccessful']          = 'No fue posible crear cuenta';
$lang['account_creation_duplicate_email']       = 'Email ya en uso o inválido';
$lang['account_creation_duplicate_identity']    = 'Identidad ya en uso o inválida';
$lang['account_creation_missing_default_group'] = 'No se ha fijado el grupo por defecto';
$lang['account_creation_invalid_default_group'] = 'Nombre de grupo inválido';


// Password
$lang['password_change_successful']          = 'Contraseña cambiada correctamente';
$lang['password_change_unsuccessful']        = 'No fue posible cambiar la contraseña';
$lang['forgot_password_successful']          = 'Se envió el email de reinicio de contraseña';
$lang['forgot_password_unsuccessful']        = 'No fue posible reiniciar la contraseña';

// Activation
$lang['activate_successful']                 = 'Cuenta activada';
$lang['activate_unsuccessful']               = 'No fue posible activar la cuenta';
$lang['deactivate_successful']               = 'Cuenta desactivada';
$lang['deactivate_unsuccessful']             = 'No fue posible desactivar la cuenta';
$lang['activation_email_successful']         = 'Email de activación enviado';
$lang['activation_email_unsuccessful']       = 'No fue posible enviar el email de activación';

// Login / Logout
$lang['login_successful']                    = 'Identificado correctamente';
$lang['login_unsuccessful']                  = 'Identificación incorrecta';
$lang['login_unsuccessful_not_active']       = 'La cuenta está suspendida';
$lang['login_timeout']                       = 'Bloqueado temporalmente. Prueba más tarde.';
$lang['logout_successful']                   = 'Sesión cerrada correctamente';

// Account Changes
$lang['update_successful']                   = 'Información de la cuenta actualizada correctamente';
$lang['update_unsuccessful']                 = 'No fue posible actualizar la información de la cuenta';
$lang['delete_successful']                   = 'Usuario eliminado';
$lang['delete_unsuccessful']                 = 'No fue posible eliminar el usuario';

// Groups
$lang['group_creation_successful']           = 'Grupo creado correctamente';
$lang['group_already_exists']                = 'Nombre de grupo ya en uso';
$lang['group_update_successful']             = 'Detalles del grupo actualizados correctamente';
$lang['group_delete_successful']             = 'Grupo eliminado';
$lang['group_delete_unsuccessful']           = 'No fue posible eliminar el grupo';
$lang['group_delete_notallowed']             = 'No se puede eliminar el grupo Admin';
$lang['group_name_required']                 = 'El nombre del grupo es un campo requerido';
$lang['group_name_admin_not_alter']          = 'El nombre del grupo Admin no puede ser cambiado';

// Activation Email
$lang['email_activation_subject']            = 'Activación de cuenta';
$lang['email_activate_heading']              = 'Activa la cuenta para %s';
$lang['email_activate_subheading']           = 'Por favor, haga click en el siguiente link para %s.';
$lang['email_activate_link']                 = 'Activar tu cuenta';

// Forgot Password Email
$lang['email_forgotten_password_subject']    = 'Verificación de Contraseña olvidada';
$lang['email_forgot_password_heading']       = 'Restaura la contraseña para  %s';
$lang['email_forgot_password_subheading']    = 'Por favor, haga click en el siguiente link para %s.';
$lang['email_forgot_password_link']          = 'Restaura tu contraseña';

// New Password Email
$lang['email_new_password_subject']          = 'Nueva Contraseña';
$lang['email_new_password_heading']          = 'Nueva Contraseña para %s';
$lang['email_new_password_subheading']       = 'Su contraseña se ha restaurado a: %s';
