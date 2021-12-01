<?php

    function defineCategoryCompetitor(string $name, string $age) : ?string
    {
        $category[] = "Criança";
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

                case ($age == null):
                    setMessageSucess("Informe os dados do competidor");
                    return null;
                break;

                default:
                    setMessageSucess("Categoria não existe, entre em contato com Administrador.");
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