<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Save Earth</title>
</head>

<body>
    <header>
        <img class="logo" src="{{asset('imagens/logo-nasa.png')}}" alt="Logo space apps">
        <h1 class="titulo-principal">save earth</h1>
    </header>
    <div class="container">
        <img class="astro" src="{{asset('imagens/astronauta2.png')}}" alt="astronauta">
        <div class="botao">
            <a class="btn-primary" href="/introducao">jogar</a>
            <a class="btn-primary" href="/ranking">ranking</a>
        </div>
        <img class="terra" src="{{asset('imagens/salve.png')}}" alt="planeta terra">
    </div>


</body>
<script>
    function typeWriter(elemento) {
        const textoArray = elemento.innerHTML.split('');
        elemento.innerHTML = '';
        textoArray.forEach((letra, i) => {
            setTimeout(function () {
                elemento.innerHTML += letra;
            }, 75 * i)
        });
    }
    const titulo = document.querySelector('h1');
    typeWriter(titulo);
</script>

</html>