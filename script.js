$(document).ready(function () {
    $('.cpf').mask('000.000.000-00');
    $('.date').mask('00/00/0000');
    $('.phone').mask('(00)00000-0000');

    $('.cpf').on('input', function () {
        $(this).mask('000.000.000-00');
    });

    $('.date').on('input', function () {
        $(this).mask('00/00/0000');
    });

    $('.phone').on('input', function () {
        $(this).mask('(00)00000-0000');
    });
});

const loginText = document.querySelector(".title-text .login");
const loginForm = document.querySelector("form.login");
const loginBtn = document.querySelector("label.login");
const signupBtn = document.querySelector("label.signup");
const signupLink = document.querySelector("form .signup-link a");
signupBtn.onclick = (() => {
    loginForm.style.marginLeft = "-50%";
    loginText.style.marginLeft = "-50%";
});
loginBtn.onclick = (() => {
    loginForm.style.marginLeft = "0%";
    loginText.style.marginLeft = "0%";
});
signupLink.onclick = (() => {
    signupBtn.click();
    return false;

    $(document).ready(function () {
        $('.date').mask('00/00/0000');
        $('.phone').mask('(00) 00000-0000');
    });
});

function Avaliar(estrela) {
    var url = window.location;
    url = url.toString()
    url = url.split("index.html");
    url = url[0];

    var s1 = document.getElementById("s1").src;
    var s2 = document.getElementById("s2").src;
    var s3 = document.getElementById("s3").src;
    var s4 = document.getElementById("s4").src;
    var s5 = document.getElementById("s5").src;
    var avaliacao = 0;

    if (estrela == 5) {
        if (s5 == url + "Imagens/star0.png") {
            document.getElementById("s1").src = "Imagens/star1.png";
            document.getElementById("s2").src = "Imagens/star1.png";
            document.getElementById("s3").src = "Imagens/star1.png";
            document.getElementById("s4").src = "Imagens/star1.png";
            document.getElementById("s5").src = "Imagens/star0.png";
            avaliacao = 4;
        } else {
            document.getElementById("s1").src = "Imagens/star1.png";
            document.getElementById("s2").src = "Imagens/star1.png";
            document.getElementById("s3").src = "Imagens/star1.png";
            document.getElementById("s4").src = "Imagens/star1.png";
            document.getElementById("s5").src = "Imagens/star1.png";
            avaliacao = 5;
        }
    }

    //ESTRELA 4
    if (estrela == 4) {
        if (s4 == url + "Imagens/star0.png") {
            document.getElementById("s1").src = "Imagens/star1.png";
            document.getElementById("s2").src = "Imagens/star1.png";
            document.getElementById("s3").src = "Imagens/star1.png";
            document.getElementById("s4").src = "Imagens/star1.png";
            document.getElementById("s5").src = "Imagens/star1.png";
            avaliacao = 3;
        } else {
            document.getElementById("s1").src = "Imagens/star1.png";
            document.getElementById("s2").src = "Imagens/star1.png";
            document.getElementById("s3").src = "Imagens/star1.png";
            document.getElementById("s4").src = "Imagens/star1.png";
            document.getElementById("s5").src = "Imagens/star0.png";
            avaliacao = 4;
        }
    }

    //ESTRELA 3
    if (estrela == 3) {
        if (s3 == url + "Imagens/star0.png") {
            document.getElementById("s1").src = "Imagens/star1.png";
            document.getElementById("s2").src = "Imagens/star1.png";
            document.getElementById("s3").src = "Imagens/star1.png";
            document.getElementById("s4").src = "Imagens/star1.png";
            document.getElementById("s5").src = "Imagens/star0.png";
            avaliacao = 2;
        } else {
            document.getElementById("s1").src = "Imagens/star1.png";
            document.getElementById("s2").src = "Imagens/star1.png";
            document.getElementById("s3").src = "Imagens/star1.png";
            document.getElementById("s4").src = "Imagens/star0.png";
            document.getElementById("s5").src = "Imagens/star0.png";
            avaliacao = 3;
        }
    }

    //ESTRELA 2
    if (estrela == 2) {
        if (s2 == url + "Imagens/star0.png") {
            document.getElementById("s1").src = "Imagens/star1.png";
            document.getElementById("s2").src = "Imagens/star1.png";
            document.getElementById("s3").src = "Imagens/star1.png";
            document.getElementById("s4").src = "Imagens/star0.png";
            document.getElementById("s5").src = "Imagens/star0.png";
            avaliacao = 1;
        } else {
            document.getElementById("s1").src = "Imagens/star1.png";
            document.getElementById("s2").src = "Imagens/star1.png";
            document.getElementById("s3").src = "Imagens/star0.png";
            document.getElementById("s4").src = "Imagens/star0.png";
            document.getElementById("s5").src = "Imagens/star0.png";
            avaliacao = 2;
        }
    }

    //ESTRELA 1
    if (estrela == 1) {
        if (s1 == url + "Imagens/star0.png") {
            document.getElementById("s1").src = "Imagens/star1.png";
            document.getElementById("s2").src = "Imagens/star1.png";
            document.getElementById("s3").src = "Imagens/star0.png";
            document.getElementById("s4").src = "Imagens/star0.png";
            document.getElementById("s5").src = "Imagens/star0.png";
            avaliacao = 0;
        } else {
            document.getElementById("s1").src = "Imagens/star1.png";
            document.getElementById("s2").src = "Imagens/star0.png";
            document.getElementById("s3").src = "Imagens/star0.png";
            document.getElementById("s4").src = "Imagens/star0.png";
            document.getElementById("s5").src = "Imagens/star0.png";
            avaliacao = 1;
        }
    }
    document.getElementById('rating').value = avaliacao;
}

function addTexto() {
    var Tudo = document.getElementById("Tudo")
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    var selecionados = [];

    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
            selecionados.push(checkboxes[i].value);
        }
    }
    selecionados = selecionados.sort();
    Tudo.value = selecionados
}

const clearInput = () => {
    const input = document.getElementsByTagName("input")[0];
    input.value = "";
};

const clearBtn = document.getElementById("clear-btn");
clearBtn.addEventListener("click", clearInput);