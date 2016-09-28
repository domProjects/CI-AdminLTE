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
$lang['account_creation_successful']            = 'Conta criada com sucesso';
$lang['account_creation_unsuccessful']          = 'Não é possível criar a conta';
$lang['account_creation_duplicate_email']       = 'E-mail já utilizado ou inválido';
$lang['account_creation_duplicate_identity']    = 'Identidade já utilizada ou inválida';
$lang['account_creation_missing_default_group'] = 'Grupo padrão não está definido';
$lang['account_creation_invalid_default_group'] = 'Inválido o nome do grupo padrão definido';


// Password
$lang['password_change_successful']          = 'Senha alterada com sucesso';
$lang['password_change_unsuccessful']        = 'Não é possível alterar a senha';
$lang['forgot_password_successful']          = 'Redefinição de senha enviado por e-mail';
$lang['forgot_password_unsuccessful']        = 'Não é possível trocar a senha';

// Activation
$lang['activate_successful']                 = 'Conta ativada';
$lang['activate_unsuccessful']               = 'Não é possível ativar a conta';
$lang['deactivate_successful']               = 'Conta desativada';
$lang['deactivate_unsuccessful']             = 'Não é possível desativar a conta';
$lang['activation_email_successful']         = 'Ativação enviada por e-mail';
$lang['activation_email_unsuccessful']       = 'Não é possível enviar ativação por e-mail';

// Login / Logout
$lang['login_successful']                    = 'Logado com sucesso';
$lang['login_unsuccessful']                  = 'Login incorreto';
$lang['login_unsuccessful_not_active']       = 'Conta está inativa';
$lang['login_timeout']                       = 'Temporariamente bloqueada. Tente mais tarde.';
$lang['logout_successful']                   = 'Desconectado com sucesso';

// Account Changes
$lang['update_successful']                   = 'Informações da conta atualizados com sucesso';
$lang['update_unsuccessful']                 = 'Não é possível atualizar informações da conta';
$lang['delete_successful']                   = 'Usuário excluído';
$lang['delete_unsuccessful']                 = 'Não foi possível excluir o usuário';

// Groups
$lang['group_creation_successful']           = 'Grupo criado com sucesso';
$lang['group_already_exists']                = 'Nome do grupo já existe';
$lang['group_update_successful']             = 'Detalhes do grupo atualizado';
$lang['group_delete_successful']             = 'Grupo excluído';
$lang['group_delete_unsuccessful']           = 'Não é possível excluir grupo';
$lang['group_delete_notallowed']             = 'Não pode excluir grupo de administradores';
$lang['group_name_required']                 = 'Nome do grupo é um campo obrigatório';
$lang['group_name_admin_not_alter']          = 'Nome do grupo Admin não pode ser alterado';

// Activation Email
$lang['email_activation_subject']            = 'Ativação de conta';
$lang['email_activate_heading']              = 'Ativar conta para %s';
$lang['email_activate_subheading']           = 'Por favor, clique neste link para %s.';
$lang['email_activate_link']                 = 'Ative sua conta';

// Forgot Password Email
$lang['email_forgotten_password_subject']    = 'Verificação para recuperação de senha';
$lang['email_forgot_password_heading']       = 'Redefinir senha para %s';
$lang['email_forgot_password_subheading']    = 'Por favor, clique neste link para %s.';
$lang['email_forgot_password_link']          = 'Redefinir sua senha';

// New Password Email
$lang['email_new_password_subject']          = 'Nova senha';
$lang['email_new_password_heading']          = 'Nova senha para %s';
$lang['email_new_password_subheading']       = 'Sua senha foi redefinida para : %s';
