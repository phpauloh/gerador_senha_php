<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Senhas</title>
    
    <link rel="stylesheet" href="/src/css/style.css">
</head>
<body>
    <section>
        <div class="box">
            <div class="form">

                <h2>Selecione a quantidade de caracteres para a senha:</h2>

                <form action="helper.php" method="POST">
                    <div class="inputs">
                        <input type="radio" id="oito" name="input" value="8" checked>
                        <label for="oito">8</label>

                        <input type="radio" id="doze" name="input" value="12">
                        <label for="doze">12</label>

                        <input type="radio" id="dezesseis" name="input" value="16">
                        <label for="dezesseis">16</label><br>
                        <button>GERAR SENHA</button>
                    </div>                    
                </form>
            </div>
        </div>
    </section>
</body>
</html>
