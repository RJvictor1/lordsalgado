<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link rel="icon" type="imagem/png" href="imagens/icon.png" />
    <title>Lord do Salgado</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <style>

    .image {
      opacity: 1;
      display: block;
      width: 100%;
      height: auto;
      transition: .5s ease;
      backface-visibility: hidden;
    }

    .middle {
      transition: .5s ease;
      opacity: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%)
    }

    .container:hover .image {
      opacity: 0.3;
    }

    .container:hover .middle {
      opacity: 1;
    }

    .text {
      background-color: #4CAF50;
      color: white;
      font-size: 16px;
      padding: 16px 32px;
    }

        footer{ 
        padding:1px 0;
        width: 100%;
        background: #f00;
        color:#fff;
        }

        body{
          background-color: #000;
          color: #fff;
        }
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
    </style>
  </head>
  <body>
      <div class="container-fluid text-center">
        <div class="row" style="background:#222;color:#fff;padding: 10px; ">
          <div class="col-sm-12">
            <h4>SALGADOS E DOCES PARA TODOS OS GOSTOS</h4>
          </div>
        </div>
        <div class="row" style="background:#CD2626; height:30px ">
          <div class="col-sm-12">
            <marquee><h5>Segunda a Sabado das 10H as 21H   Domingo das 10H as 14H </h5></marquee>
          </div>
        </div>
      </div>

    <nav style="background: #222;"  class="navbar navbar-expand-sm navbar-dark sticky-top">
      <a class="navbar-brand" href="index.php"><img class="img-fluid" src="imagens/logo.png" alt="logo" height="73px" width="121px" ></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="collapsibleNavbar">
        <ul class=" navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php" style="padding: 25px ;"><h6>Home</h6></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="salgados.php" style="padding: 25px ;"><h6>Salgados</h6></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="massas.php" style="padding: 25px ;"><h6>Massas</h6></a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="bebidas.php" style="padding: 25px ;"><h6>Bebidas</h6></a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="doces.php" style="padding: 25px ;"><h6>Doces</h6></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="todos.php" style="padding: 25px ; color: #f00"><h6>Todos os Produtos</h6></a>
          </li>
          <li class="nav-item"" >
            <a class="nav-link" href="orcamento.php" style="padding: 25px ; color: #f00;"><h6>Orçamento</h6></a>
          </li>    
        </ul>
        <form class="form-inline my-2 my-lg-0"  method="post" action="todos.php">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar Produto" aria-label="Search" name="p">
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
      </div>  
    </nav>
    <section><!doctype html>
