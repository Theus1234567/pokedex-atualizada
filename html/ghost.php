<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokédex - Região Kanto</title>
    <link rel="icon" type="image/png" href="https://assets.pokemon.com/static2/_ui/img/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style type="text/css">

      html, body{
        height: 100%;
        background-color: rgb(56, 56, 56);  
        margin: 0%;
        padding: 0%;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }

      .img-pokemon{
        display: flexbox;
        height: auto;
        width: 80px;
        justify-content: flex-start;
      }

      .img-pokemon:hover{
        transform: scale(1.1);
        cursor: pointer;
      }

      .container{
        display: flex;
        justify-content: center;
        align-items: center;
        height: auto;
        width: auto;
      }
      
      .content-list{
        background-color: white;
        height: none;
        width: 70%;
        margin-top: 40px;
        max-width: 1236px;
        position: relative;
        padding: 50px 50px 50px 50px;
      }

      .img-background{
        height: auto;
        width: auto;
        opacity: 0.4;
        position:absolute;
        width: 100%;
      }

      .img-background-config{
        background-color: black;
      }

      .img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Garante que a imagem cubra o container */
        position: relative;
      }

      table, th, td {
        border: 1px solid black;
        padding: 0%;
        margin: 0%;
      }

      td{
        height: 65px;
        width: 65px;
        padding: 4px 0px 2px 0px;
        overflow: hidden;
      }

      table{
        height: auto;
        width: 100%;
        text-align: center;
      }

      .type-icon {
        display: inline-block;
        width: 66px;
        margin-bottom: 4px;
        background: #dbdbdb;
        border: 1px solid #a3a3a3;
        border-radius: 4px;
        border: 1px solid rgba(0,0,0,.2);
        color: #fff;
        font-size: .75rem;
        font-weight: normal;
        line-height: 1.5rem;
        text-align: center;
        text-shadow: 1px 1px 2px rgba(0,0,0,.7);
        text-transform: uppercase;
        transition: opacity .4s;
      }


      /*Cor dos fundos dos tipos
      ----------------------------
      ----------------------------*/

      .type-grass{
        background-color: #7c5;
      }

      .type-dragon{
        background-color: #7766EE;
      }
      .type-grass:hover{
        background-color: rgb(89, 165, 59);
        cursor: pointer;
      }

      .type-poison{
        background-color: #a59;
      }

      .type-poison:hover{
        background-color: rgb(136, 68, 122);
        cursor: pointer;
      }

      .type-ghost{
        background-color: #66b;
      }

      .type-ghost:hover{
        background-color: rgb(71, 71, 138);
        cursor: pointer;
      }

      .type-fire{
        background-color: #f42;
      }

      .type-fire:hover{
        background-color: rgb(179, 47, 23);
        cursor: pointer;
      }

      .type-flying{
        background-color: #89f;
      }

      .type-flying:hover{
        background-color: rgb(65, 86, 202);
        cursor: pointer;
      }

      .type-water{
        background-color: #39f;
      }

      .type-water:hover{
        background-color: rgb(35, 107, 180);
        cursor: pointer;
      }

      .type-ground{
        background-color: #db5;
      }

      .type-ground:hover{
        background-color: rgb(168, 143, 65);
        cursor: pointer;
      }

      .type-bug{
        background-color: #ab2;
      }

      .type-bug:hover{
        background-color: rgb(135, 150, 26);
        cursor: pointer;
      }

      .type-normal{
        background-color: #aa9;
      }

      .type-normal:hover{
        background-color: rgb(131, 131, 119);
        cursor: pointer;
      }

      .type-dark{
        background-color: #754;
      }

      .type-dark:hover{
        background-color: rgb(92, 66, 53);
        cursor: pointer;
      }

      .type-electric{
        background-color: #fc3;
      }   

      .type-electric:hover{
        background-color: rgb(192, 154, 38);
        cursor: pointer;
      }
      
      .type-psychic{
        background-color: #f59;
      }

      .type-psychic:hover{
        background-color: rgb(197, 65, 118);
        cursor: pointer;
      }

      .type-ice{
        background-color: #6cf;
      }

      .type-ice:hover{
        background-color: rgb(73, 147, 184);
        cursor: pointer;
      }

      .type-steel{
        background-color: #aab;
      }

      .type-steel:hover{
        background-color: rgb(122, 122, 133);
        cursor: pointer;
      }

      .type-fairy{
        background-color: #e9e;
      }

      .type-fairy:hover{
        background-color: rgb(190, 120, 190);
        cursor: pointer;
      }


      .type-fighting{
        background-color: #b54;
      }

      .type-fighting:hover{
        background-color: rgb(156, 72, 57);
        cursor: pointer;
      }

      .type-rock{
        background-color: #ba6;
      }

      .type-rock:hover{
        background-color: rgb(139, 127, 76);
        cursor: pointer;
      }

      .container-nav{
        display: flex;
        background-color: rgb(255, 255, 142);
        padding: 15px;
        margin: 0%;
        justify-items: space-between;
        align-items: center;
        justify-content: center;
      }

      .logo-obj{
        display: flex;
        align-items: center;
        padding: 0%;
        margin: 0%;
      }

      .logo-obj li{
        margin: 0 20px;
      }

      .logo-obj a{
        text-decoration: none;
        color: black;
        font-weight: 600;
      }

      .inicio:hover{
        transform: scale(1.1);
        cursor: pointer;
      }

      .categoria:hover{
        transform: scale(1.1);
        cursor: pointer;
      }

      .treinador:hover{
        transform: scale(1.1);
        cursor: pointer;
      }

      .cadastro:hover{
        transform: scale(1.1);
        cursor: pointer;
      }

      ul{
        display: inline-flex;
        justify-content: space-evenly;
        list-style-type: none; 
        padding: 0; 
        margin-right: 0%;  
      }

      .dropdown {
        border: none;
        background: none;
      }

    .btn {
        background-color: rgb(255, 255, 142); 
        border: none; 
        outline: none;
        color: black; 
    }

    .btn:hover{
        background-color: rgb(255, 255, 142);
        color: black;
        transform: scale(1.1);
        border: none;
    }
    
    .btn-secondary:not(:disabled):not(.disabled).active:focus, .btn-secondary:not(:disabled):not(.disabled):active:focus, .show>.btn-secondary.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgb(255, 255, 142);
    }
    .btn-secondary:not(:disabled):not(.disabled).active, .btn-secondary:not(:disabled):not(.disabled):active, .show>.btn-secondary.dropdown-toggle {
        color: #000000;
        background-color: rgb(255, 255, 142);
        border-color: rgb(255, 255, 142);
    }
    .btn:not(:disabled):not(.disabled) {
        cursor: pointer;
    }
    .btn-secondary.focus, .btn-secondary:focus {
        box-shadow: 0 0 0 .2rem rgb(255, 255, 142);
    }
    .btn.focus, .btn:focus {
        outline: 0;
        box-shadow: 0 0 0 .2rem rgb(255, 255, 142);
    }
    .btn:focus, .btn:hover {
        text-decoration: none;
    }

    .dropdown-menu {
        background-color: rgb(255, 255, 142);
        margin-top: 50px;
        box-shadow: none; 
        transform: translateY(-10px);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .dropdown.show .dropdown-menu {
        display: block; 
        opacity: 1; 
        transform: translateY(0); 
    }

    .dropdown-item {
        background: rgb(255, 255, 142);
        border: none;
        color: rgb(0, 0, 0); 
        padding: 5px; 
        text-align: center; 
    }

    .dropdown-item:hover {
        background: rgb(255, 255, 142); 
        color: black;
    }


    </style>
</head>
<body>
  <nav class="container-nav">
    <ul class="logo-obj">
      <div class="img-config-logo">
        <a href="pokedex.php">
            <img src="https://th.bing.com/th/id/R.de8a0f82f1449b48f71828ede116ecd9?rik=gwf9F0ZL90b0tw&riu=http%3a%2f%2fpluspng.com%2fimg-png%2fpokemon-logo-png-pokemon-logo-text-png-1428-1390.png&ehk=xcPPKSYiaFwoVSTL9JMZq%2foHXfffz%2bbO4RjmbqQ5b6I%3d&risl=&pid=ImgRaw&r=0" alt="Pokemon"
            class="img-pokemon">  
        </a>
      </div>
          <li class="inicio"><a href="pokedex.php">Início</a></li>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" 
            style="font-weight: 600;">
                Categoria
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item" type="button"><a class="type-grass type-icon" href="grass.php" style="color: white;">Grass</a></button>
              <button class="dropdown-item" type="button"><a class="type-poison type-icon" href="poison.php" style="color: white">Poison</a></button>
              <button class="dropdown-item" type="button"><a class="type-fire type-icon" href="fire.php" style="color: white">Fire</a></button>
              <button class="dropdown-item" type="button"><a class="type-flying type-icon" href="flying.php"style="color: white">Flying</a></button>
              <button class="dropdown-item" type="button"><a class="type-water type-icon" href="water.php" style="color: white">Water</a></button>
              <button class="dropdown-item" type="button"><a class="type-bug type-icon" href="bug.php" style="color: white">Bug</a></button>
              <button class="dropdown-item" type="button"><a class="type-normal type-icon" href="normal.php" style="color: white">Normal</a></button>
              <button class="dropdown-item" type="button"><a class="type-electric type-icon" href="electric.php" style="color: white">Electric</a></button>
              <button class="dropdown-item" type="button"><a class="type-ground type-icon" href="ground.php" style="color: white">Ground</a></button>
              <button class="dropdown-item" type="button"><a class="type-fairy type-icon" href="fairy.php" style="color: white">Fairy</a></button>
              <button class="dropdown-item" type="button"><a class="type-fighting type-icon" href="fighting.php" style="color: white">Fighting</a></button>
              <button class="dropdown-item" type="button"><a class="type-psychic type-icon" href="psychic.php" style="color: white">Psychic</a></button>
              <button class="dropdown-item" type="button"><a class="type-rock type-icon" href="rock.php" style="color: white">Rock</a></button>
              <button class="dropdown-item" type="button"><a class="type-steel type-icon" href="steel.php" style="color: white">Steel</a></button>
              <button class="dropdown-item" type="button"><a class="type-ice type-icon" href="ice.php" style="color: white">Ice</a></button>
              <button class="dropdown-item" type="button"><a class="type-dark type-icon" href="dark.php" style="color: white">Dark</a></button>
              <button class="dropdown-item" type="button"><a class="type-ghost type-icon" href="ghost.php" style="color: white">Ghost</a></button>

            </div>
          </div>
        <li class="treinador"><a href="treinador.php">Treinador</a></li>
        <li class="cadastro"><a href="cadastro.php">Cadastro</a></li>
    </ul>
  </nav>
    <div class="img-background-config">   <!--Imagem de fundo--> 
      <img src="https://i.postimg.cc/brpsj812/kanto-map-letsgo.png" class="img-background">
    </div>
<div class="container">     <!--Container mãe, o fundo branco-->
    
    <div class="content-list">      <!--O conteúdo da lista-->
        <h1 style="margin-bottom: 30px;"><strong>Pokémon Tipo Ghost</strong></h1>

        <!--Lista dos pokemóns-->

        <table class="pokedex-list">
            <thead class="head-pokedex">
                <tr>
                    <th>N°</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Region</th>
                </tr>
            </thead>
            
    
            
                <tbody><tr>
                    <td>1</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/gastly.avif" style="height: 56px; width: 60px;"></td>
                    <td>Gastly</td>
                    <td><a class="type-ghost type-icon" style="color: white;">Ghost</a> <br>
                        <a class="type-poison type-icon" style="color: white">Poison</a></td>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>2</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/haunter.avif" style="height: 56px; width: 60px;"></td>
                    <td>Haunter</td>
                    <td><a class="type-ghost type-icon" style="color: white;">Ghost</a> <br>
                        <a class="type-poison type-icon" style="color: white">Poison</a></td>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>3</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/gengar.avif" style="height: 56px; width: 60px;"></td>
                    <td>Gengar</td>
                    <td><a class="type-ghost type-icon" style="color: white;">Ghost</a> <br>
                        <a class="type-poison type-icon" style="color: white">Poison</a></td>>
                    <td>Kanto</td>
                </tr>
        

        
    
                <tbody><tr></tr>
                    <td>4</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/marowak.avif" style="height: 56px; width: 60px;"></td>
                    <td>Marowak</td>
                    <td><a class="type-fire type-icon" style="color: white;">fire</a> <br>
                        <a class="type-ghost type-icon" style="color: white;">ghost</a> </td>
                    <td>Kanto</td>
                </tr>
                        
            
            
                
        </div>
      </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>