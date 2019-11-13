<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="imagens/png" href="{{asset('imagens/logo.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="icon" type="imagens/png" href="{{asset('imagens/joystick.png')}}">
    <title>Save Earth</title>
</head>

<body>
    <header>
        <a onclick="FuncaoParaSair()" class="nav-link" href="/">Sair</a>
    </header>

    <script>
        function FuncaoParaSair() {
            let retornoBotao = confirm('Tem certeza que deseja sair?');

            if (retornoBotao)
                location.replace("/");
        }
    </script>

    <img class="foto" src="{{asset('imagens/astronauta3.png')}}" alt="astronauta">
    <p class="frase"> Olá, sou o astronauta 11, venho do ano 2050 e preciso da sua ajuda para salvarmos o nosso planeta.
        A sua missão, é passar no nosso teste para que você possa nos provar, que consegue incentivar as outras crianças a cuidar do planeta.
        Vamos nessa ?</p>
    <form class="nodisplay" method="post" action="/jogar">
        @csrf
        <input class="nodisplay" type="text" name="nome" placeholder="Nome">
        <button class="botoes2">VAMOS LÁ</button>
    </form>


    <script>
        function typeWriter(elemento) {
            const textoArray = elemento.innerHTML.split('');
            elemento.innerHTML = '';
            textoArray.forEach((letra, i) => {
                setTimeout(function() {
                    elemento.innerHTML += letra;
                }, 30 * i)
            });
        }
        const titulo = document.querySelector('p');
        typeWriter(titulo);
    </script>

</html>