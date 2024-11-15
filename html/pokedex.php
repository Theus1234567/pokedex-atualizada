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
        <h1 style="margin-bottom: 30px;"><strong>Região Kanto</strong></h1>
        <p style="margin-bottom: 2px;">Esta é uma lista de Pokémon na ordem ditada pelo Pokédex Regional da região de Kanto. Este Pokédex contém 151 Pokémon, começando com Bulbassauro e terminando com Mew. Posteriormente em Pokémon: Let's Go, Pikachu! e Let's Go, Eevee! foram incluídos Meltan e Melmetal, somando agora 153 Pokémon e Melmetal se tornando o último.</p> <br>
        <p> A numeração deste Pokédex serviria como base para a listagem oficial de todos os Pokémon introduzidos, com os Pokémon das gerações subsequentes sendo adicionados ao final.</p>
        <h2 style="padding-bottom: 10px;"><strong>Lista de pokemóns da Região Kanto</strong></h2>


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
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/bulbasaur.avif" style="height: 56px; width: 60px;"></td>
                    <td>Bulbasaur</td>
                    <td><a class="type-grass type-icon" style="color: white;">Grass</a> <br>
                        <a class="type-poison type-icon" style="color: white">Poison</a></td>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>2</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/ivysaur.avif" style="height: 56px; width: 60px;"></td>
                    <td>Ivyssauro</td>
                    <td><a class="type-grass type-icon" style="color: #fff;">Grass</a> <br>
                        <a class="type-poison type-icon" style="color: #fff;">Poison</a></td>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>3</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/venusaur.avif" style="height: 56px; width: 60px;"></td>
                    <td>Venusaur</td>
                    <td><a class="type-grass type-icon" style="color: white;">Grass</a> <br>
                        <a class="type-poison type-icon" style="color: white">Poison</a></td>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>4</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/charmander.avif" style="height: 56px; width: 60px;"></td>
                    <td>Charmander</td>
                    <td><a class="type-fire type-icon" style="color: white;">Fire</a> <br>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>5</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/charmeleon.avif" style="height: 56px; width: 60px;"></td>
                    <td>Charmelon</td>
                    <td><a class="type-fire type-icon" style="color: white;">Fire</a> <br>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>6</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/charizard.avif" style="height: 56px; width: 60px;"></td>
                    <td>Charizard</td>
                    <td><a class="type-fire type-icon" style="color: white;">Fire</a> <br>
                        <a class="type-flying type-icon" style="color: white">Flying</a></td>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>7</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/squirtle.avif" style="height: 56px; width: 60px;"></td>
                    <td>Squirtle</td>
                    <td><a class="type-water type-icon" style="color: white;">Water</a> <br>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>8</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/wartortle.avif" style="height: 56px; width: 60px;"></td>
                    <td>Wartotle</td>
                    <td><a class="type-water type-icon" style="color: white;">Water</a> <br>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>9</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/blastoise.avif" style="height: 56px; width: 60px;"></td>
                    <td>Blastoise</td>
                    <td><a class="type-water type-icon" style="color: white;">Water</a> <br>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>10</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/caterpie.avif" style="height: 56px; width: 60px;"></td>
                    <td>Caterpie</td>
                    <td><a class="type-bug type-icon" style="color: white;">Bug</a> <br>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>11</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/metapod.avif" style="height: 56px; width: 60px;"></td>
                    <td>Metapod</td>
                    <td><a class="type-bug type-icon" style="color: white;">Bug</a> <br>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>12</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/butterfree.avif" style="height: 56px; width: 60px;"></td>
                    <td>Butterfree</td>
                    <td><a class="type-bug type-icon" style="color: white;">Bug</a> <br>
                        <a class="type-flying type-icon" style="color: white">Flying</a></td>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>13</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/weedle.avif" style="height: 56px; width: 60px;"></td>
                    <td>Weedle</td>
                    <td><a class="type-bug type-icon" style="color: white;">Bug</a> <br>
                        <a class="type-poison type-icon" style="color: white">Poison</a></td>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>14</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/kakuna.avif" style="height: 56px; width: 60px;"></td>
                    <td>Kakuna</td>
                    <td><a class="type-bug type-icon" style="color: white;">Bug</a> <br>
                        <a class="type-poison type-icon" style="color: white">Poison</a></td>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>15</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/beedrill.avif" style="height: 56px; width: 60px;"></td>
                    <td>Beedrill</td>
                    <td><a class="type-bug type-icon" style="color: white;">Bug</a> <br>
                        <a class="type-poison type-icon" style="color: white">Poison</a></td>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>16</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/pidgey.avif" style="height: 56px; width: 60px;"></td>
                    <td>Pidgey</td>
                    <td><a class="type-normal type-icon" style="color: white;">Normal</a> <br>
                        <a class="type-flying type-icon" style="color: white">Flying</a></td>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>17</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/pidgeotto.avif" style="height: 56px; width: 60px;"></td>
                    <td>Pidgeotto</td>
                    <td><a class="type-normal type-icon" style="color: white;">Normal</a> <br>
                        <a class="type-flying type-icon" style="color: white">Flying</a></td>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>18</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/pidgeot.avif" style="height: 56px; width: 60px;"></td>
                    <td>Pidgeot</td>
                    <td><a class="type-normal type-icon" style="color: white;">Normal</a> <br>
                        <a class="type-flying type-icon" style="color: white">Flying</a></td>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>19</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/rattata.avif" style="height: 56px; width: 60px;"></td>
                    <td>Rattata</td>
                    <td><a class="type-dark type-icon" style="color: white;">Dark </a>
                        <a class="type-normal type-icon" style="color: white;">Normal</a> <br>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>20</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/raticate.avif" style="height: 56px; width: 60px;"></td>
                    <td>Raticate</td>
                    <td><a class="type-dark type-icon" style="color: white;">Dark</a>
                        <a class="type-normal type-icon" style="color: white;">Normal</a> <br>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>21</td>
                    <td><img src="https://img.pokemondb.net/sprites/sword-shield/icon/spearow.png" style="height: 56px; width: 60px;"></td>
                    <td>Spearow</td>
                    <td><a class="type-normal type-icon" style="color: white;">Normal</a> <br>
                        <a class="type-flying type-icon" style="color: white">Flying</a></td>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>22</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/fearow.avif" style="height: 56px; width: 60px;"></td>
                    <td>Fearow</td>
                    <td><a class="type-normal type-icon" style="color: white;">Normal</a> <br>
                        <a class="type-flying type-icon" style="color: white">Flying</a></td>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>23</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/ekans.avif" style="height: 56px; width: 60px;"></td>
                    <td>Ekans</td>
                    <td><a class="type-poison type-icon" style="color: white;">Poison</a> <br>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>24</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/arbok.avif" style="height: 56px; width: 60px;"></td>
                    <td>Arbok</td>
                    <td><a class="type-poison type-icon" style="color: white">Poison</a></td>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>25</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/pikachu.avif" style="height: 56px; width: 60px;"></td>
                    <td>Pikachu</td>
                    <td><a class="type-electric type-icon" style="color: white;">Electric</a> </td>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>26</td>
                    <td><img src="https://img.pokemondb.net/sprites/sword-shield/icon/raichu.png" style="height: 56px; width: 60px;"></td>
                    <td>Raichu</td>
                    <td><a class="type-electric type-icon" style="color: white;">Electric</a> </td>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>27</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/sandshrew.avif" style="height: 56px; width: 60px;"></td>
                    <td>Sandshrew</td>
                    <td><a class="type-ground type-icon" style="color: white;">Ground</a> </td>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>28</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/sandslash.avif" style="height: 56px; width: 60px;"></td>
                    <td>Sandslash</td>
                    <td><a class="type-ground type-icon" style="color: white;">Ground</a> <br>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>29</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/nidoran-f.avif" style="height: 56px; width: 60px;"></td>
                    <td>Nidoran ♀</td>
                    <td><a class="type-poison type-icon" style="color: white;">Poison</a> <br>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>30</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/nidorina.avif" style="height: 56px; width: 60px;"></td>
                    <td>Nidorina</td>
                    <td>
                        <a class="type-poison type-icon" style="color: white">Poison</a></td>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>31</td>
                    <td><img src="https://img.pokemondb.net/sprites/sword-shield/icon/nidoqueen.png" style="height: 56px; width: 60px;"></td>
                    <td>Nidoqueen</td>
                    <td><a class="type-poison type-icon" style="color: white">Poison</a> <br>
                        <a class="type-ground type-icon" style="color: white;">Ground</a> </td>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>32</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/nidoran-m.avif" style="height: 56px; width: 60px;"></td>
                    <td>Nidoran ♂</td>
                    <td>
                        <a class="type-poison type-icon" style="color: white">Poison</a></td>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>33</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/nidorino.avif" style="height: 56px; width: 60px;"></td>
                    <td>Nidorino</td>
                    <td>
                        <a class="type-poison type-icon" style="color: white">Poison</a></td>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>34</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/nidoking.avif" style="height: 56px; width: 60px;"></td>
                    <td>Nidoking</td>
                    <td><a class="type-poison type-icon" style="color: white;">Poison</a> <br>
                        <a class="type-ground type-icon" style="color: white">Ground</a></td>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>35</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/clefairy.avif" style="height: 56px; width: 60px;"></td>
                    <td>Clefairy</td>
                    <td><a class="type-fairy type-icon" style="color: white;">Fairy</a> <br>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>36</td>
                    <td><img src="https://img.pokemondb.net/sprites/sword-shield/icon/clefable.png" style="height: 56px; width: 60px;"></td>
                    <td>Clefable</td>
                    <td><a class="type-fairy type-icon" style="color: white;">Fairy</a> <br>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>37</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/vulpix.avif" style="height: 56px; width: 60px;"></td>
                    <td>Vulpix</td>
                    <td><a class="type-fire type-icon" style="color: white;">Fire</a> <br>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>38</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/ninetales.avif" style="height: 56px; width: 60px;"></td>
                    <td>Ninetales</td>
                    <td><a class="type-fire type-icon" style="color: white;">Fire</a> <br>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>39</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/jigglypuff.avif" style="height: 56px; width: 60px;"></td>
                    <td>Jigglypuff</td>
                    <td><a class="type-normal type-icon" style="color: white;">Normal</a> <br>
                        <a class="type-fairy type-icon" style="color: white">Fairy</a></td>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>40</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/wigglytuff.avif" style="height: 56px; width: 60px;"></td>
                    <td>Wigglytuff</td>
                    <td><a class="type-normal type-icon" style="color: white;">Normal</a> <br>
                        <a class="type-fairy type-icon" style="color: white">Fairy</a></td>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>41</td>
                    <td><img src="https://img.pokemondb.net/sprites/sword-shield/icon/zubat.png" style="height: 56px; width: 60px;"></td>
                    <td>Zubat</td>
                    <td><a class="type-poison type-icon" style="color: white;">Poison</a> <br>
                        <a class="type-flying type-icon" style="color: white">Flying</a></td>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>42</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/golbat.avif" style="height: 56px; width: 60px;"></td>
                    <td>Golbat</td>
                    <td><a class="type-poison type-icon" style="color: white;">Poison</a> <br>
                        <a class="type-flying type-icon" style="color: white">Flying</a></td>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>43</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/oddish.avif" style="height: 56px; width: 60px;"></td>
                    <td>Oddish</td>
                    <td><a class="type-grass type-icon" style="color: white;">Grass</a> <br>
                        <a class="type-poison type-icon" style="color: white">Poison</a></td>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>44</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/gloom.avif" style="height: 56px; width: 60px;"></td>
                    <td>Gloom</td>
                    <td><a class="type-grass type-icon" style="color: white;">Grass</a> <br>
                        <a class="type-poison type-icon" style="color: white">Poison</a></td>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>45</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/vileplume.avif" style="height: 56px; width: 60px;"></td>
                    <td>Vileplume</td>
                    <td><a class="type-grass type-icon" style="color: white;">Grass</a> <br>
                        <a class="type-poison type-icon" style="color: white">Poison</a></td>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>46</td>
                    <td><img src="https://img.pokemondb.net/sprites/sword-shield/icon/paras.png" style="height: 56px; width: 60px;"></td>
                    <td>Paras</td>
                    <td><a class="type-bug type-icon" style="color: white;">Bug</a> <br>
                        <a class="type-grass type-icon" style="color: white">Grass</a></td>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>47</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/parasect.avif" style="height: 56px; width: 60px;"></td>
                    <td>Parasect</td>
                    <td><a class="type-bug type-icon" style="color: white;">Bug</a> <br>
                        <a class="type-grass type-icon" style="color: white">Grass</a></td>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>48</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/venonat.avif" style="height: 56px; width: 60px;"></td>
                    <td>Venonat</td>
                    <td><a class="type-bug type-icon" style="color: white;">Bug</a> <br>
                        <a class="type-poison type-icon" style="color: white">Poison</a></td>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>49</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/venomoth.avif" style="height: 56px; width: 60px;"></td>
                    <td>Venomoth</td>
                    <td><a class="type-bug type-icon" style="color: white;">Bug</a> <br>
                        <a class="type-poison type-icon" style="color: white">Poison</a></td>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>50</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/diglett.avif" style="height: 56px; width: 60px;"></td>
                    <td>Diglett</td>
                    <td><a class="type-ground type-icon" style="color: white;">Ground</a> <br>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>51</td>
                    <td><img src="https://img.pokemondb.net/sprites/sword-shield/icon/dugtrio.png" style="height: 56px; width: 60px;"></td>
                    <td>Dugtrio</td>
                    <td><a class="type-ground type-icon" style="color: white;">Ground</a> <br>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>52</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/meowth.avif" style="height: 56px; width: 60px;"></td>
                    <td>Meowth</td>
                    <td><a class="type-dark type-icon" style="color: white;">Dark</a> <br>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>53</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/persian.avif" style="height: 56px; width: 60px;"></td>
                    <td>Persian</td>
                    <td><a class="type-dark type-icon" style="color: white;">Dark</a> <br>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>54</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/psyduck.avif" style="height: 56px; width: 60px;"></td>
                    <td>Psyduck</td>
                    <td><a class="type-water type-icon" style="color: white;">Water</a> <br>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>55</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/golduck.avif" style="height: 56px; width: 60px;"></td>
                    <td>Golduck</td>
                    <td><a class="type-water type-icon" style="color: white;">Water</a> <br>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>56</td>
                    <td><img src="https://img.pokemondb.net/sprites/sword-shield/icon/mankey.png" style="height: 56px; width: 60px;"></td>
                    <td>Mankey</td>
                    <td><a class="type-fighting type-icon" style="color: white;">Fighting</a> <br>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>57</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/primeape.avif" style="height: 56px; width: 60px;"></td>
                    <td>Primeape</td>
                    <td><a class="type-fighting type-icon" style="color: white;">Fighting</a> <br>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>58</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/growlithe.avif" style="height: 56px; width: 60px;"></td>
                    <td>Growlithe</td>
                    <td><a class="type-fire type-icon" style="color: white;">Fire</a> <br>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>59</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/arcanine.avif" style="height: 56px; width: 60px;"></td>
                    <td>Arcanine</td>
                    <td><a class="type-fire type-icon" style="color: white;">Fogo</a> <br>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>60</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/poliwag.avif" style="height: 56px; width: 60px;"></td>
                    <td>Poliwag</td>
                    <td><a class="type-water type-icon" style="color: white;">Water</a> <br>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>61</td>
                    <td><img src="https://img.pokemondb.net/sprites/sword-shield/icon/poliwhirl.png" style="height: 56px; width: 60px;"></td>
                    <td>Poliwhirl</td>
                    <td><a class="type-water type-icon" style="color: white;">Water</a> <br>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>62</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/poliwrath.avif" style="height: 56px; width: 60px;"></td>
                    <td>Poliwrath</td>
                    <td><a class="type-water type-icon" style="color: white;">Water</a> <br>
                        <a class="type-fighting type-icon" style="color: white">Fighting</a></td>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>63</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/abra.avif" style="height: 56px; width: 60px;"></td>
                    <td>Abra</td>
                    <td><a class="type-psychic type-icon" style="color: white;">Psychic</a> <br>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>64</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/kadabra.avif" style="height: 56px; width: 60px;"></td>
                    <td>Kadabra</td>
                    <td><a class="type-psychic type-icon" style="color: white;">Psychic</a> <br>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>65</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/alakazam.avif" style="height: 56px; width: 60px;"></td>
                    <td>Alakazam</td>
                    <td><a class="type-psychic type-icon" style="color: white;">Psychic</a> <br>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>66</td>
                    <td><img src="https://img.pokemondb.net/sprites/sword-shield/icon/machop.png" style="height: 56px; width: 60px;"></td>
                    <td>Machop</td>
                    <td><a class="type-fighting type-icon" style="color: white;">Fighting</a> <br>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>67</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/machoke.avif" style="height: 56px; width: 60px;"></td>
                    <td>Machoke</td>
                    <td><a class="type-fighting type-icon" style="color: white;">Fighting</a> <br>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>68</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/machamp.avif" style="height: 56px; width: 60px;"></td>
                    <td>Machamp</td>
                    <td><a class="type-fighting type-icon" style="color: white;">Fighting</a> <br>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>69</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/bellsprout.avif" style="height: 56px; width: 60px;"></td>
                    <td>Bellsprout</td>
                    <td><a class="type-grass type-icon" style="color: white;">Grass</a> <br>
                        <a class="type-poison type-icon" style="color: white">Poison</a></td>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>70</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/weepinbell.avif" style="height: 56px; width: 60px;"></td>
                    <td>Weepinbell</td>
                    <td><a class="type-grass type-icon" style="color: white;">Grass</a> <br>
                        <a class="type-poison type-icon" style="color: white">Poison</a></td>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>71</td>
                    <td><img src="https://img.pokemondb.net/sprites/sword-shield/icon/victreebel.png" style="height: 56px; width: 60px;"></td>
                    <td>Victreebel</td>
                    <td><a class="type-grass type-icon" style="color: white;">Grass</a> <br>
                        <a class="type-poison type-icon" style="color: white">Poison</a></td>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>72</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/tentacool.avif" style="height: 56px; width: 60px;"></td>
                    <td>Tentacoll</td>
                    <td><a class="type-water type-icon" style="color: white;">Water</a> <br>
                        <a class="type-poison type-icon" style="color: white">Poison</a></td>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>73</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/tentacruel.avif" style="height: 56px; width: 60px;"></td>
                    <td>Tentacruel</td>
                    <td><a class="type-water type-icon" style="color: white;">Water</a> <br>
                        <a class="type-poison type-icon" style="color: white">Poison</a></td>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>74</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/geodude.avif" style="height: 56px; width: 60px;"></td>
                    <td>Geodude</td>
                    <td><a class="type-rock type-icon" style="color: white;">Rock</a> <br>
                        <a class="type-ground type-icon" style="color: white">Ground</a></td>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>75</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/graveler.avif" style="height: 56px; width: 60px;"></td>
                    <td>Graveler</td>
                    <td><a class="type-rock type-icon" style="color: white;">Rock</a> <br>
                        <a class="type-ground type-icon" style="color: white">Ground</a></td>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>76</td>
                    <td><img src="https://img.pokemondb.net/sprites/sword-shield/icon/golem.png" style="height: 56px; width: 60px;"></td>
                    <td>Golem</td>
                    <td><a class="type-rock type-icon" style="color: white;">Rock</a> <br>
                        <a class="type-ground type-icon" style="color: white">Ground</a></td>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>77</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/ponyta.avif" style="height: 56px; width: 60px;"></td>
                    <td>Ponyta</td>
                    <td><a class="type-fire type-icon" style="color: white;">Fire</a> <br>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>78</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/rapidash.avif" style="height: 56px; width: 60px;"></td>
                    <td>Rapidash</td>
                    <td><a class="type-fire type-icon" style="color: white;">Fire</a> <br>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>79</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/slowpoke.avif" style="height: 56px; width: 60px;"></td>
                    <td>Slowpoke</td>
                    <td><a class="type-water type-icon" style="color: white;">Water</a> <br>
                        <a class="type-psychic type-icon" style="color: white">Psychic</a></td>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>80</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/slowbro.avif" style="height: 56px; width: 60px;"></td>
                    <td>Slowbro</td>
                    <td><a class="type-water type-icon" style="color: white;">WaterGrass</a> <br>
                        <a class="type-psychic type-icon" style="color: white">Psychic</a></td>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>81</td>
                    <td><img src="https://img.pokemondb.net/sprites/sword-shield/icon/magnemite.png" style="height: 56px; width: 60px;"></td>
                    <td>Magnemite</td>
                    <td><a class="type-electric type-icon" style="color: white;">Electric</a> <br>
                        <a class="type-steel type-icon" style="color: white">Steel</a></td>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>82</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/magneton.avif" style="height: 56px; width: 60px;"></td>
                    <td>Magneton</td>
                    <td><a class="type-electric type-icon" style="color: white;">Electric</a> <br>
                        <a class="type-steel type-icon" style="color: white">Steel</a></td>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>83</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/farfetchd.avif" style="height: 56px; width: 60px;"></td>
                    <td>Farfetch'd</td>
                    <td><a class="type-fighting type-icon" style="color: white;">Fighting</a> <br>
                        
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>84</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/doduo.avif" style="height: 56px; width: 60px;"></td>
                    <td>Doduo</td>
                    <td><a class="type-normal type-icon" style="color: white;">Normal</a> <br>
                        <a class="type-flying type-icon" style="color: white">Flying</a></td>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>85</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/dodrio.avif" style="height: 56px; width: 60px;"></td>
                    <td>Dodrio</td>
                    <td><a class="type-normal type-icon" style="color: white;">Normal</a> <br>
                        <a class="type-flying type-icon" style="color: white">Flying</a></td>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>86</td>
                    <td><img src="https://img.pokemondb.net/sprites/sword-shield/icon/seel.png" style="height: 56px; width: 60px;"></td>
                    <td>Seel</td>
                    <td><a class="type-water type-icon" style="color: white;">Water</a> <br>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>87</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/dewgong.avif" style="height: 56px; width: 60px;"></td>
                    <td>Dewgong</td>
                    <td><a class="type-water type-icon" style="color: white;">Water</a> <br>
                        <a class="type-ice type-icon" style="color: white">Ice</a></td>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>88</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/grimer.avif" style="height: 56px; width: 60px;"></td>
                    <td>Grimer</td>
                    <td><a class="type-poison type-icon" style="color: white;">Poison</a> <br>
                        <a class="type-dark type-icon" style="color: white;">Dark</a> </td>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>89</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/muk.avif" style="height: 56px; width: 60px;"></td>
                    <td>Muk</td>
                    <td><a class="type-poison type-icon" style="color: white">Poison</a>
                    <a class="type-dark type-icon" style="color: white;">Dark</a></td>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>90</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/shellder.avif" style="height: 56px; width: 60px;"></td>
                    <td>Shellder</td>
                    <td><a class="type-water type-icon" style="color: white;">Water</a> <br>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>91</td>
                    <td><img src="https://img.pokemondb.net/sprites/sword-shield/icon/cloyster.png" style="height: 56px; width: 60px;"></td>
                    <td>Cloyster</td>
                    <td><a class="type-water type-icon" style="color: white;">Water</a> <br>
                        <a class="type-ice type-icon" style="color: white">Ice</a></td>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>92</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/gastly.avif" style="height: 56px; width: 60px;"></td>
                    <td>Gastly</td>
                    <td><a class="type-ghost type-icon" style="color: white;">Ghost</a> <br>
                        <a class="type-poison type-icon" style="color: white">Poison</a></td>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>93</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/haunter.avif" style="height: 56px; width: 60px;"></td>
                    <td>Haunter</td>
                    <td><a class="type-ghost type-icon" style="color: white;">Ghost</a> <br>
                        <a class="type-poison type-icon" style="color: white">Poison</a></td>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>94</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/gengar.avif" style="height: 56px; width: 60px;"></td>
                    <td>Gengar</td>
                    <td><a class="type-ghost type-icon" style="color: white;">Ghost</a> <br>
                        <a class="type-poison type-icon" style="color: white">Poison</a></td>>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>95</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/onix.avif" style="height: 56px; width: 60px;"></td>
                    <td>Onix</td>
                    <td><a class="type-rock type-icon" style="color: white;">Rock</a> <br>
                        <a class="type-ground type-icon" style="color: white">Ground</a></td>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>96</td>
                    <td><img src="https://img.pokemondb.net/sprites/sword-shield/icon/drowzee.png" style="height: 56px; width: 60px;"></td>
                    <td>Drowzee</td>
                    <td><a class="type-psychic type-icon" style="color: white;">Psychic</a> <br>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>97</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/hypno.avif" style="height: 56px; width: 60px;"></td>
                    <td>Hypno</td>
                    <td><a class="type-psychic type-icon" style="color: white;">Psychic</a> <br>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>98</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/krabby.avif" style="height: 56px; width: 60px;"></td>
                    <td>Krabby</td>
                    <td><a class="type-water type-icon" style="color: white;">Water</a> <br>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>99</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/kingler.avif" style="height: 56px; width: 60px;"></td>
                    <td>Kingler</td>
                    <td><a class="type-water type-icon" style="color: white;">Water</a> <br>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>100</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/voltorb.avif" style="height: 56px; width: 60px;"></td>
                    <td>Voltorb</td>
                    <td><a class="type-electric type-icon" style="color: white;">Electric</a> <br>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>101</td>
                    <td><img src="https://img.pokemondb.net/sprites/sword-shield/icon/electrode.png" style="height: 56px; width: 60px;"></td>
                    <td>Electrode</td>
                    <td><a class="type-electric type-icon" style="color: white;">Electric</a> <br>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>102</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/exeggcute.avif" style="height: 56px; width: 60px;"></td>
                    <td>Exeggcute</td>
                    <td><a class="type-grass type-icon" style="color: white;">Grass</a> <br>
                        <a class="type-psychic type-icon" style="color: white">Psychic</a></td>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>103</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/exeggutor.avif" style="height: 56px; width: 60px;"></td>
                    <td>Exeggutor</td>
                    <td><a class="type-grass type-icon" style="color: white;">Grass</a> <br>
                        <a class="type-psychic type-icon" style="color: white">Psychic</a></td>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>104</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/cubone.avif" style="height: 56px; width: 60px;"></td>
                    <td>Cubone</td>
                    <td><a class="type-ground type-icon" style="color: white;">Ground</a> <br>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>105</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/marowak.avif" style="height: 56px; width: 60px;"></td>
                    <td>Marowak</td>
                    <td><a class="type-fire type-icon" style="color: white;">fire</a> <br>
                        <a class="type-ghost type-icon" style="color: white;">ghost</a> </td>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>106</td>
                    <td><img src="https://img.pokemondb.net/sprites/sword-shield/icon/hitmonlee.png" style="height: 56px; width: 60px;"></td>
                    <td>Hitmonlee</td>
                    <td><a class="type-fighting type-icon" style="color: white;">Fighting</a> <br>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>107</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/hitmonchan.avif" style="height: 56px; width: 60px;"></td>
                    <td>Hitmonchan</td>
                    <td><a class="type-fighting type-icon" style="color: white;">Fighting</a> <br>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>108</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/lickitung.avif" style="height: 56px; width: 60px;"></td>
                    <td>Lickitung</td>
                    <td><a class="type-normal type-icon" style="color: white;">Normal</a> <br>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>109</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/koffing.avif" style="height: 56px; width: 60px;"></td>
                    <td>Koffing</td>
                    <td><a class="type-poison type-icon" style="color: white">Poison</a></td>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>110</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/weezing.avif" style="height: 56px; width: 60px;"></td>
                    <td>Weezing</td>
                    <td><a class="type-poison type-icon" style="color: white">Poison</a></td>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>111</td>
                    <td><img src="https://img.pokemondb.net/sprites/sword-shield/icon/rhyhorn.png" style="height: 56px; width: 60px;"></td>
                    <td>Rhyhorn</td>
                    <td><a class="type-ground type-icon" style="color: white;">Ground</a> <br>
                        <a class="type-rock type-icon" style="color: white">Rock</a></td>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>112</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/rhydon.avif" style="height: 56px; width: 60px;"></td>
                    <td>Rhydon</td>
                    <td><a class="type-ground type-icon" style="color: white;">Ground</a> <br>
                        <a class="type-rock type-icon" style="color: white">Rock</a></td>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>113</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/chansey.avif" style="height: 56px; width: 60px;"></td>
                    <td>Chansey</td>
                    <td><a class="type-normal type-icon" style="color: white;">Normal</a> <br>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>114</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/tangela.avif" style="height: 56px; width: 60px;"></td>
                    <td>Tangela</td>
                    <td><a class="type-grass type-icon" style="color: white;">Grass</a> <br>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>115</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/kangaskhan.avif" style="height: 56px; width: 60px;"></td>
                    <td>Kangaskhan</td>
                    <td><a class="type-normal type-icon" style="color: white;">Normal</a> <br>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>116</td>
                    <td><img src="https://img.pokemondb.net/sprites/sword-shield/icon/horsea.png" style="height: 56px; width: 60px;"></td>
                    <td>Horsea</td>
                    <td><a class="type-water type-icon" style="color: white;">Water</a> <br>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>117</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/seadra.avif" style="height: 56px; width: 60px;"></td>
                    <td>Seadra</td>
                    <td><a class="type-water type-icon" style="color: white;">Water</a> <br>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>118</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/goldeen.avif" style="height: 56px; width: 60px;"></td>
                    <td>Goldeen</td>
                    <td><a class="type-water type-icon" style="color: white;">Water</a> <br>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>119</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/seaking.avif" style="height: 56px; width: 60px;"></td>
                    <td>Seaking</td>
                    <td><a class="type-water type-icon" style="color: white;">Water</a> <br>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>120</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/staryu.avif" style="height: 56px; width: 60px;"></td>
                    <td>Staryu</td>
                    <td><a class="type-water type-icon" style="color: white;">Water</a> <br>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>121</td>
                    <td><img src="https://img.pokemondb.net/sprites/sword-shield/icon/starmie.png" style="height: 56px; width: 60px;"></td>
                    <td>Starmie</td>
                    <td><a class="type-water type-icon" style="color: white;">Water</a> <br>
                        <a class="type-psychic type-icon" style="color: white">Psychic</a></td>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>122</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/mr-mime.avif" style="height: 56px; width: 60px;"></td>
                    <td>Mr. Mime</td>
                    <td><a class="type-psychic type-icon" style="color: white;">Psychic</a> <br>
                        <a class="type-fairy type-icon" style="color: white">Fairy</a></td>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>123</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/scyther.avif" style="height: 56px; width: 60px;"></td>
                    <td>Scyther</td>
                    <td><a class="type-bug type-icon" style="color: white;">Bug</a> <br>
                        <a class="type-flying type-icon" style="color: white">Flying</a></td>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>124</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/jynx.avif" style="height: 56px; width: 60px;"></td>
                    <td>Jynx</td>
                    <td><a class="type-ice type-icon" style="color: white;">Ice</a> <br>
                        <a class="type-psychic type-icon" style="color: white">Psychic</a></td>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>125</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/electabuzz.avif" style="height: 56px; width: 60px;"></td>
                    <td>Electabuzz</td>
                    <td><a class="type-electric type-icon" style="color: white;">Electric</a> <br>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>126</td>
                    <td><img src="https://img.pokemondb.net/sprites/sword-shield/icon/magmar.png" style="height: 56px; width: 60px;"></td>
                    <td>Magmar</td>
                    <td><a class="type-fire type-icon" style="color: white;">Fire</a> <br>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>127</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/pinsir.avif" style="height: 56px; width: 60px;"></td>
                    <td>Pinsir</td>
                    <td><a class="type-bug type-icon" style="color: white;">Bug</a> <br>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>128</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/tauros.avif" style="height: 56px; width: 60px;"></td>
                    <td>Tauros</td>
                    <td><a class="type-normal type-icon" style="color: white;">Normal</a> <br>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>129</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/magikarp.avif" style="height: 56px; width: 60px;"></td>
                    <td>Magikarp</td>
                    <td><a class="type-water type-icon" style="color: white;">Water</a> <br>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>130</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/gyarados.avif" style="height: 56px; width: 60px;"></td>
                    <td>Gyarados</td>
                    <td><a class="type-water type-icon" style="color: white;">Water</a> <br>
                        <a class="type-dark type-icon" style="color: white">Dark</a></td>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>131</td>
                    <td><img src="https://img.pokemondb.net/sprites/sword-shield/icon/lapras.png" style="height: 56px; width: 60px;"></td>
                    <td>Lapras</td>
                    <td><a class="type-water type-icon" style="color: white;">Water</a> <br>
                        <a class="type-ice type-icon" style="color: white">Ice</a></td>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>132</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/ditto.avif" style="height: 56px; width: 60px;"></td>
                    <td>Ditto</td>
                    <td><a class="type-normal type-icon" style="color: white;">Normal</a> <br>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>133</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/eevee.avif" style="height: 56px; width: 60px;"></td>
                    <td>Eevee</td>
                    <td><a class="type-normal type-icon" style="color: white;">Normal</a> <br>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>134</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/vaporeon.avif" style="height: 56px; width: 60px;"></td>
                    <td>Vaporeon</td>
                    <td><a class="type-water type-icon" style="color: white;">Water</a> <br>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>135</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/jolteon.avif" style="height: 56px; width: 60px;"></td>
                    <td>Jolteon</td>
                    <td><a class="type-electric type-icon" style="color: white;">Electric</a> <br>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>136</td>
                    <td><img src="https://img.pokemondb.net/sprites/sword-shield/icon/flareon.png" style="height: 56px; width: 60px;"></td>
                    <td>Flareon</td>
                    <td><a class="type-fire type-icon" style="color: white;">Fire</a> <br>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>137</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/porygon.avif" style="height: 56px; width: 60px;"></td>
                    <td>Porygon</td>
                    <td><a class="type-normal type-icon" style="color: white;">Normal</a> <br>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>138</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/omanyte.avif" style="height: 56px; width: 60px;"></td>
                    <td>Omanyte</td>
                    <td><a class="type-rock type-icon" style="color: white;">Rock</a> <br>
                        <a class="type-water type-icon" style="color: white">Water</a></td>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>139</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/omastar.avif" style="height: 56px; width: 60px;"></td>
                    <td>Omastar</td>
                    <td><a class="type-rock type-icon" style="color: white;">Rock</a> <br>
                        <a class="type-water type-icon" style="color: white">Water</a></td>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>140</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/kabuto.avif" style="height: 56px; width: 60px;"></td>
                    <td>Kabuto</td>
                    <td><a class="type-rock type-icon" style="color: white;">Rock</a> <br>
                        <a class="type-water type-icon" style="color: white">Water</a></td>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>141</td>
                    <td><img src="https://img.pokemondb.net/sprites/sword-shield/icon/kabutops.png" style="height: 56px; width: 60px;"></td>
                    <td>Kabutops</td>
                    <td><a class="type-rock type-icon" style="color: white;">Rock</a> <br>
                        <a class="type-water type-icon" style="color: white">Water</a></td>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>142</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/aerodactyl.avif" style="height: 56px; width: 60px;"></td>
                    <td>Aerodactyl</td>
                    <td><a class="type-rock type-icon" style="color: white;">Rock</a> <br>
                        <a class="type-flying type-icon" style="color: white">Flying</a></td>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>143</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/snorlax.avif" style="height: 56px; width: 60px;"></td>
                    <td>Snorlax</td>
                    <td><a class="type-normal type-icon" style="color: white;">Normal</a> <br>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>144</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/articuno.avif" style="height: 56px; width: 60px;"></td>
                    <td>Articuno</td>
                    <td><a class="type-ice type-icon" style="color: white;">Ice</a> <br>
                        <a class="type-flying type-icon" style="color: white">Flying</a></td>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>145</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/zapdos.avif" style="height: 56px; width: 60px;"></td>
                    <td>Zapdos</td>
                    <td><a class="type-electric type-icon" style="color: white;">Electric</a> <br>
                        <a class="type-flying type-icon" style="color: white">Flying</a></td>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>146</td>
                    <td><img src="https://img.pokemondb.net/sprites/sword-shield/icon/moltres.png" style="height: 56px; width: 60px;"></td>
                    <td>Moltres</td>
                    <td><a class="type-flying type-icon" style="color: white;">Flying</a> <br>
                        <a class="type-dark type-icon" style="color: white">Dark</a></td>
                    <td>Kanto</td>
                </tr>   
    
    
    
                <tbody><tr>
                    <td>147</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/dratini.avif" style="height: 56px; width: 60px;"></td>
                    <td>Dratini</td>
                    <td><a class="type-dragon type-icon" style="color: white;">Dragon</a> <br>
                    <td>Kanto</td>
                </tr> 
    
    
    
                <tbody><tr></tr>
                    <td>148</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/dragonair.avif" style="height: 56px; width: 60px;"></td>
                    <td>Dragonair</td>
                    <td><a class="type-dragon type-icon" style="color: white;">Dragon</a> <br>
                    <td>Kanto</td>
                </tr>
    
    
    
                <tbody><tr></tr>
                    <td>149</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/dragonite.avif" style="height: 56px; width: 60px;"></td>
                    <td>Dragonite</td>
                    <td><a class="type-dragon type-icon" style="color: white;">Dragon</a> <br>
                        <a class="type-flying type-icon" style="color: white">Flying</a></td>
                    <td>Kanto</td>
                </tr>
        
    
                <tbody><tr></tr>
                    <td>150</td>
                    <td><img src="https://img.pokemondb.net/sprites/scarlet-violet/icon/avif/mewtwo.avif" style="height: 56px; width: 60px;"></td>
                    <td>Mewtwo</td>
                    <td><a class="type-psychic type-icon" style="color: white;">Psychic</a> <br>
                    <td>Kanto</td>
                </tr>
                        
            
            
                <tbody><tr>
                    <td>151</td>
                    <td><img src="https://img.pokemondb.net/sprites/sword-shield/icon/mew.png" style="height: 56px; width: 60px;"></td>
                    <td>Mew</td>
                    <td><a class="type-psychic type-icon" style="color: white;">Psychic</a> <br>
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