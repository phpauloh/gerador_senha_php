<?php

/*require "../app/classes/Password.php";

$c = new Password(12);

echo "<pre>";
print_r($c->generate(12));
echo "</pre>";*/

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Senhas</title>

    <style>
        *{
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <section>
        <div class="box">
            <div class="form">

                <h2>Selecione a quantidade de caracteres para a senha:</h2>

                <form action="" method="POST">                    
                    <input type="radio" id="oito" name="input" value="8" checked>
                    <label for="oito">8</label>

                    <input type="radio" id="doze" name="input" value="12">
                    <label for="doze">12</label>

                    <input type="radio" id="dezesseis" name="input" value="16">
                    <label for="dezesseis">16</label>

                    <button>GERAR SENHA</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
