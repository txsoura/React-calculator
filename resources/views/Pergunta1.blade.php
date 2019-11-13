<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Save Earth</title>
</head>

<body>

    <header>
        <img class="logo" src="imagens/logo-nasa.png">
    </header>
    <div class="container">
        <div>
            <p class="frase" style="margin-top:150px; margin-left:-5%;">
                {{$pergunta[1]->questao}}
            </p>

            <a href="/jogar1" class="btn-success">Sim</a>
            <a href="/jogar1" class="btn-danger">Não</a>
            <div>
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
</body>

<script>
    function typeWriter(elemento) {

        const textoArray = elemento.innerHTML.split('');

        elemento.innerHTML = '';

        textoArray.forEach((letra, i) => {

            setTimeout(function() {

                elemento.innerHTML += letra;

            }, 75 * i)

        });

    }

    const titulo = document.querySelector('h1');

    typeWriter(titulo);
</script>

</html>