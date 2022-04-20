<?php

namespace App\Enums;

class StatusMessage
{
    const SUCCESS = 'success';
    const ERROR = 'error';
    const WARNING = 'warning';
    const INFO = 'info';

    /** Mensagens de retorno padrão */
    const MSG_SUCCESS = 'Operação realizada com sucesso!';
    const MSG_ERROR = 'Ocorreu um erro ao realizar a operação!';
    const MSG_WARNING = 'Atenção!';
    const MSG_INFO = 'Informação!';

    /** Mensagens de retorno padrão delete*/
    const MSG_SUCCESS_DELETE = 'Registro excluído com sucesso!';
    const MSG_ERROR_DELETE = 'Ocorreu um erro ao excluir o registro!';
    const MSG_WARNING_DELETE = 'Atenção!';
    const MSG_INFO_DELETE = 'Informação!';

    /** Mensagens de retorno padrão update*/
    const MSG_SUCCESS_UPDATE = 'Registro atualizado com sucesso!';
    const MSG_ERROR_UPDATE = 'Ocorreu um erro ao atualizar o registro!';
    const MSG_WARNING_UPDATE = 'Atenção!';
    const MSG_INFO_UPDATE = 'Informação!';

    /** Mensagens de retorno padrão create*/
    const MSG_SUCCESS_CREATE = 'Registro criado com sucesso!';
    const MSG_ERROR_CREATE = 'Ocorreu um erro ao criar o registro!';
    const MSG_WARNING_CREATE = 'Atenção!';
    const MSG_INFO_CREATE = 'Informação!';

    /** Mensagens de retorno padrão user*/
    const MSG_ERROR_DELETE_SELF = 'Não é possível excluir o usuário logado!';


}
