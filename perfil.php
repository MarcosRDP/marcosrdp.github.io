<?php
    document.getElementById("nome_completo").innerHTML = "Nome";
    document.getElementById("info").innerHTML = "???";
?>

<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <script>
            function executar() {
              document.getElementById("nome_completo").textContent = document.getElementById("inputNome").value + " " + document.getElementById("inputSobrenome").value;
              document.getElementById('perfil').style.display = '';
              if(document.getElementById("masculino").checked == true){
                document.getElementById("info").textContent = "Sexo: Masculino";
              }
              if(document.getElementById("feminino").checked == true){
                document.getElementById("info").textContent = "Sexo: Feminino";
              }
              if(document.getElementById("outros").checked == true){
                document.getElementById("info").textContent = "Sexo: Outros";
              }
			      }
        </script>
        <style>
            .centralizar{
                text-align: center;
            }
            .direita{
                text-align: right;
            }
        </style>
    </head>
    <body style="background-color: black">
        <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="cadastro.html">Cadastro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="layout.html">Layout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Desativado</a>
            </li>
          </ul>

          <div class="centralizar">
            <div id="perfil" class="card" style="width: 18rem; display: none">
              <img class="card-img-top" src="imagens/perfil.svg" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 id="nome_completo" class="card-title"></h5>
                <p id="info" class="card-text"></p>
              </div>
            </div>
          </div>
    </body>
</html>