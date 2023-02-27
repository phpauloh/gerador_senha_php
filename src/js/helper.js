function copyPass(){    

    let variavel = document.getElementById('senha-gerada').innerHTML;

    navigator.clipboard.writeText(variavel);
    alert("Senha copiada");
}