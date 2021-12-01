<?php

    session_start();

    function setMessageSucess(string $message) : void
    {
        $_SESSION['message-sucess'] = $message;
    }

    function getMessageSucess() : ?string
    {
        if(isset($_SESSION['message-sucess']))
            return $_SESSION['message-sucess'];

        return null;
    }

    function setMessageError(string $message) : void
    {
        $_SESSION['message-error'] = $message;
    }

    function getMessageError() : ?string
    {
        if(isset($_SESSION['message-error']))
            return $_SESSION['message-error'];

        return null;
    }

    function removeMessageSucess() : void
    {
        if(isset($_SESSION['message-sucess']))
            unset($_SESSION['message-sucess']);
    }

    function removeMessageError() : void
    {
        if(isset($_SESSION['message-error']))
            unset($_SESSION['message-error']);
    }

?>