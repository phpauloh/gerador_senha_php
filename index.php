<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Senhas</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@600&family=Roboto+Condensed&display=swap');

        *{
            margin: 0;
            padding: 0;
            font-family: 'Roboto Condensed', sans-serif;
            font-weight: bolder;
        }

        body{
            background-color: #F0FFFF;
            color: #000000;
        }

        section{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100%;    
            background: url('bg.jpg')no-repeat;
            background-position: center;
            background-size: cover;
        }

        .box{
            position: relative;
            width: 600px;
            height: 450px;
            background: transparent;
            border: 2px solid #A9A9A9;
            border-radius: 20px;
            backdrop-filter: blur(15px);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h2{
        font-size: 1em;
        text-align: center;
        font-family: 'Kanit', sans-serif;
        text-transform: uppercase;
        }

        .inputs{
            position: relative;
            text-align: center;
            font-size: 19px;
            padding: 10px;
            font-weight: bold;
        }

        button{
            margin: 4%;
            width: 180px;
            height: 30px;
            border: 2px solid #4682B4;
            border-radius: 15px;
            cursor: pointer;
            background: transparent;
            color: #4682B4;
            font-size: 15px;
        }

        button:hover{
            background-color: #4682B4;
            color: #FFF;
            border: none;
            font-weight: 100;
        }
    </style>
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
