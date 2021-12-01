<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../categoria-natacao/public/styles/style.css">
    <title>Competição - Natação</title>
</head>
<body>
    
    <div class="main">
        <form action="script.php" method="post">
            <div class="fields">
                
                <h2 class="title">Dados Competidor</h2>

                <div class="input-competitor">
                    <input type="text" name="name" placeholder="nome">
                </div>
                
                <div class="input-competitor">
                    <input type="text" name="age" placeholder="idade">
                </div>

                <div class="send-data">
                    <button type="submit">Cadastrar</button>
                </div>

                <div class="result">
                    <?php
                        include "./services/message.php";

                        $messageSucess = getMessageSucess();
                        if(!empty($messageSucess))
                        {
                            echo $messageSucess;
                        }

                        $messagemError = getMessageError();
                        if(!empty($messagemError))
                        {
                            echo $messagemError;
                        }
                    ?>
                </div>

            </div>
        </form>
    </div>

</body>
</html>