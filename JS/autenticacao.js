
var user = prompt("Insira seu login:");
var pass = prompt("Insira sua senha:");
var meuLogin = "Niraldo";
var minhaSenha = "1234";
var tentativas = 1;

while (user !== meuLogin || pass !== minhaSenha) {
    if (tentativas >= 3) {
        alert("Senha incorreta! Você excedeu o número máximo de tentativas. Sua conta está bloqueada.");
        break;
    }
    alert("Senha incorreta! Tentativa " + tentativas + "/3");
    user = prompt("Insira seu login:");
    pass = prompt("Insira sua senha:");
    tentativas++;
}

if (user === meuLogin && pass === minhaSenha) {
    alert("Estou logado!");
}
