<?php

class Password{

    private $characters = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J",
            "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
    private $simbols = ["@", "!", "#", "$", "%", "*", ".", ","];
    private $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
    private $password;
    private $pass = [];

    public function __construct(int $size)
    {
        $this->generate($size);
    }

    private function generate(int $param){

        $newPass = "";

        /** MESCLA OS DADOS DE TODOS OS ARRAYS*/
        $this->pass = array_merge($this->characters, $this->simbols, $this->numbers);

        /** EMBARALHA OS DADOS DO ARRAY PARA FICAR ALEATÓRIO */
        shuffle($this->pass);

        for($c = 0; $c < $param; $c++){

            $n = random_int(0, sizeof($this->pass) -1);

            if($n % 2 == 0){
                /** DEIXA O CARACTERE MINUSCULO SE O RESTO DA DIVISÃO FOR ZERO */
                $newPass .= strtolower($this->pass[$n]);
                continue;
            }

            $newPass .= $this->pass[$n]; 
        }

        $this->setPassword($newPass);
        
    }

    public function setPassword($var){
        $this->password = $var;
    }

    public function getPassowrd(){
        return $this->password;
    }

}