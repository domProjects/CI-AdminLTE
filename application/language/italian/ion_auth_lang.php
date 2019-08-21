<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Ion Auth Lang - Italian
*
* Author: Ben Edmunds
*         ben.edmunds@gmail.com
*         @benedmunds
*
* Author: Fabio Ingala (italian translation)
*         fabio@ingala.it
*         @mr_etabeta
*
* Location: http://github.com/benedmunds/ion_auth/
*
* Created:  03.14.2010
* Updated:  09.09.2017
*
* Description:  Italian language file for Ion Auth messages and errors
*
*/

// Account Creation
$lang['account_creation_successful']            = 'Account creato con successo';
$lang['account_creation_unsuccessful']          = 'Impossibile creare l\' Account';
$lang['account_creation_duplicate_email']       = 'Email gi&agrave; in uso o non valida';
$lang['account_creation_duplicate_identity']    = 'Identit&agrave; gi&agrave; in uso o non valida';
$lang['account_creation_missing_default_group'] = 'Gruppo di default non impostato';
$lang['account_creation_invalid_default_group'] = 'Nome gruppo di default non valido';


// Password
$lang['password_change_successful']          = 'Password modificata con successo';
$lang['password_change_unsuccessful']        = 'Impossibile cambiare la password';
$lang['forgot_password_successful']          = 'Email per il reset della password inviata';
$lang['forgot_password_unsuccessful']        = 'Impossibile resettare la password';

// Activation
$lang['activate_successful']                 = 'Account attivato';
$lang['activate_unsuccessful']               = 'Impossibile attivare l\'account';
$lang['deactivate_successful']               = 'Account disattivato';
$lang['deactivate_unsuccessful']             = 'Impossibile disattivare l\'account';
$lang['activation_email_successful']         = 'Email di attivazione inviata';
$lang['activation_email_unsuccessful']       = 'Impossibile inviare l\'email di attivazione';

// Login / Logout
$lang['login_successful']                    = 'Login eseguito';
$lang['login_unsuccessful']                  = 'Login errato';
$lang['login_unsuccessful_not_active']       = 'L\'account non &egrave; attivo';
$lang['login_timeout']                       = 'Sessione chiusa. Prova pi&ugrave; tardi.';
$lang['logout_successful']                   = 'Disconnesso con successo';

// Account Changes
$lang['update_successful']                   = 'Informazioni account aggiornate con successo';
$lang['update_unsuccessful']                 = 'Impossibile aggiornare le informazioni dell\'account';
$lang['delete_successful']                   = 'Utente cancellato';
$lang['delete_unsuccessful']                 = 'Impossibile cancellare l\'utente';

// Groups
$lang['group_creation_successful']           = 'Gruppo creato con successo';
$lang['group_already_exists']                = 'Nome del gruppo gi&agrave; in uso';
$lang['group_update_successful']             = 'Dati sul gruppo aggiornati';
$lang['group_delete_successful']             = 'Gruppo cancellato';
$lang['group_delete_unsuccessful']           = 'Impossibile cancellare il gruppo';
$lang['group_delete_notallowed']             = 'Non &egrave; possibile cancellare il gruppo degli amministratori';
$lang['group_name_required']                 = 'Il campo nome gruppo &egrave; obbligatorio';
$lang['group_name_admin_not_alter']          = 'Il nome del gruppo amministratori non pu&ograve; essere modificato';

// Activation Email
$lang['email_activation_subject']            = 'Attivazione account';
$lang['email_activate_heading']              = 'Account attivato per %s';
$lang['email_activate_subheading']           = 'Prego clicca su questo link per %s.';
$lang['email_activate_link']                 = 'Attiva il tuo account';

// Forgot Password Email
$lang['email_forgotten_password_subject']    = 'Verifca password dimenticata';
$lang['email_forgot_password_heading']       = 'Reset della password per %s';
$lang['email_forgot_password_subheading']    = 'Prego clicca su questo link per %s.';
$lang['email_forgot_password_link']          = 'Resetta la tua password';

// New Password Email
$lang['email_new_password_subject']          = 'Nuova password';
$lang['email_new_password_heading']          = 'Nuova password per %s';
$lang['email_new_password_subheading']       = 'La tua password &egrave; stata resettata a: %s';
