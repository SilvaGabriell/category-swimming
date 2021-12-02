<?php
    function nameValidate(string $name) : bool
    {
        if(empty($name))
        {
            setMessageError('O nome não pode ser vazio, por favor preencha-o novamente');
            return false;
        }
        else if(strlen($name) < 3)
        {
            setMessageError('O nome não pode conter menos de 3 caracteres');
            return false;
        }
        else if(strlen($name) > 30)
        {
            setMessageError('O nome não pode conter mais de 30 caracteres');
            return false;
        }
            return true;
    }
    
    function ageValidate(string $age) : bool
    {
        if(empty($age))
        {
            setMessageError('A idade não pode ser vazio, por favor preencha-o novamente');
            return false;
        }
        
        else if(!is_numeric($age))
        {
            setMessageError('Informe um número para idade');
            return false;
        }
        return true;
    }
?>