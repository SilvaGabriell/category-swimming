<?php

    function defineCategoryCompetitor(string $name, string $age) : ?string
    {
        $category[] = "Infantil";
        $category[] = "Adolescente";
        $category[] = "Adulto";
        $category[] = "Idoso";

        if(nameValidate($name) && ageValidate($age))
        {
            removeMessageError();

            switch ($category) 
            {
                case ($age >= 6 && $age <= 12):
                    setMessageSucess("O competidor $name irá participar na categoria $category[0]");
                    return null;
                break;

                case ($age >= 13 && $age < 18):
                    setMessageSucess("O competidor $name irá participar na categoria $category[1]");
                    return null;
                break;

                case ($age >= 18 && $age <= 59):
                    setMessageSucess("O competidor $name irá participar na categoria $category[2]");  
                    return null; 
                break;

                case ($age >= 60 && $age <= 100):
                    setMessageSucess("O competidor $name irá participar na categoria $category[3]");
                    return null;
                break;

                default:
                    setMessageSucess("Categoria inexistente, contacte o Administrador!");
                    return null;
                break;
            }
                 return true;
        }
        else
        {
            removeMessageSucess();
            return getMessageError();
        }
    }
?>