<?php
  include 'usrCtl.php';
  $res = new UserController();

  $reservas = $res->get();
  
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Turismo</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">BajaTours</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Servicios</a>
        </li>

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </div>
  </nav>


  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Inicio</li>
    </ol>
  </nav>

<!--Carrusel y cuadros-->
<div class="container">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="1.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>La mejor empresa de turísmo en Baja California Sur</h5>
          <p>Contamos con la mejor infraestructura para brindarte el mejor servicio.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Las mejores playas estan en BCS</h5>
          <p>Las playas más hermosas de México están en nuestro estado.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="3.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Un lugar para disfrutar</h5>
          <p>¿Buscas una aventura emocionante?¿Una playa tranquila? Tenemos el destino perfecto para ti.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>
  
  <div class="row">
    <div class="card-deck" style="margin-top: 20px;">
      <div class="card">
        <img src="1.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Descarga nuestra app</h5>
          <p class="card-text">Puedes ver todos nuestros servicios y hacer tus reservaciones directamente en nuestra app.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Disponible para Android y iOS</small>
        </div>
      </div>
      <div class="card">
        <img src="2.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Descuento para nacionales</h5>
          <p class="card-text">Tenemos un precio especial para todas las personas que sean mexicanas y muestren su INE vigente.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Válido durante todo el año</small>
        </div>
      </div>
      <div class="card">
        <img src="3.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Promociones inigualables</h5>
          <p class="card-text">¡Cada mes tenemos promociones únicas que te harán disfrutar al máximo!</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Sujeto a disponibilidad</small>
        </div>
      </div>
    </div>
  </div>
</div>


<!--mision vision -->
<div class="container"style="margin-top: 50px;">
  <div class="row">
    <div class="col-sm-4">
      <h1>Misión</h1>
      <p style="text-align: justify;">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>
    <div class="col-sm-4">
      <h1>Visión</h1>
      <p style="text-align: justify;">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>
    <div class="col-sm-4">
      <h1>Trayectoria</h1>
      <p style="text-align: justify;">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>
  </div>
</div>

<!--Tabla tours-->
<div class="container" style="margin-top: 50px;">
  <?php
    if (isset($_SESSION['status']) && $_SESSION['status']=='Success'): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Correcto!</strong> <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php unset($_SESSION['status'])?>
  <?php endif?>
  <?php
    if (isset($_SESSION['status']) && $_SESSION['status']=='error'): ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php unset($_SESSION['status'])?>
    <?php endif?>
<h3>Tours </h3>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Tour</th>
        <th scope="col">Duración</th>
        <th scope="col">Reservación</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Nado con Tiburón Ballena</td>
        <td>3:00 hrs</td>
        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Reservar
        </button></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Paddle Board</td>
        <td>1:30 hrs</td>
        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Reservar
        </button></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Mountain Bike La Ventana MTB Park</td>
        <td>4:00 hrs</td>
        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Reservar
        </button></td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Ecoturismo en Loreto</td>
        <td>48 hrs</td>
        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Reservar
          </button></td>
      </tr>
    </tbody>
  </table>
</div>

<!--Tabla registros -->
<div class="container" style="margin-top: 50px;">
    <?php
    if (isset($_SESSION['status']) && $_SESSION['status']=='Success'): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Correcto!</strong> <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php unset($_SESSION['status'])?>
    <?php endif?>
    <?php
    if (isset($_SESSION['status']) && $_SESSION['status']=='error'): ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php unset($_SESSION['status'])?>
    <?php endif?>
<h3>Reservaciones hechas</h3>
  <table class="table table-hover">
  <thead class="table-info">
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Actividad</th>
      <th scope="col">Personas</th>
      <th scope="col">Email</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($reservas as $reserva): ?>
    <tr>
      <th><?= $reserva['nombre']?></th>
      <td><?= $reserva['actividad']?></td>
      <td><?= $reserva['cantidad']?></td>
      <td><a href="mailto:<?= $reserva['email']?>"><?= $reserva['email']?></a></td>
      <td>
        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
          <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Opciones
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
              <a class="dropdown-item" data-info='<?= json_encode($reserva)?>' href="#" data-toggle="modal" data-target="#exampleModal" onclick="edit(this)"><i class="fa fa-pencil"></i> Editar</a>
              <a class="dropdown-item" data-info='<?= json_encode($reserva)?>' href="#" data-target="#exampleModal" onclick="remove(<?= $reserva['id'] ?>)"><i class="fa fa-trash"></i> Eliminar</a>
            </div>
          </div>
        </div>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
</div>

<!--Footer-->
<section id="footer">
  <div class="container">
    <div class="row text-center text-xs-center text-sm-left text-md-left">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <h5>BajaTorus</h5>
        <ul class="list-unstyled quick-links">
          <li><a href="#"><i class="fa fa-angle-double-right"></i>Inicio</a></li>
          <li><a href="#"><i class="fa fa-angle-double-right"></i>Productos</a></li>
          <li><a href="#"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
          <li><a href="#"><i class="fa fa-angle-double-right"></i>Reservaciones</a></li>
          <li><a href="#"><i class="fa fa-angle-double-right"></i>Facturación</a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <h5>Contacto</h5>
        <ul class="list-unstyled quick-links">
          <li><a href="#"></i>La Paz, B.C.S.</a></li>
          <li><a href="#"></i>C.P. 25000</a></li>
          <li><a href="#"></i>Mx. </a></li>
          <li><a href="#"></i>Tel: 612 123 4567</a></li>
          <li><a href="#"></i>Email: contacto@bajatours.com</a></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
        <ul class="list-unstyled list-inline social text-center">
          <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a>
          </li>
          <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a>
          </li>
          <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a>
          </li>
        </ul>
      </div>
      <hr>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
        <p class="h6">© Todos los derechos reservados.<a class="text-green ml-2" href="#"
            target="_blank">BajaTours</a></p>
      </div>
      <hr>
    </div>
  </div>
</section>
  
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Reservar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="user" method="POST" onsubmit="return validar(this)">
          <div class="container">
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre completo</label>
              <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">Tu información esta segura con nosostros.</small>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Actividad</label>
              <select class="form-control" id="actividad" name="actividad">
                <option>Elige una...</option>
                <option value="Nado con Tiburón Ballena">Nado con Tiburón Ballena</option>
                <option value="Paddle Board">Paddle Board</option>
                <option value="Mountain Bike La Ventana MTB Park">Mountain Bike La Ventana MTB Park</option>
                <option value="Ecoturismo en Loreto">Ecoturismo en Loreto</option>
              </select>
            </div>
            <div class="form-row align-items-center">
              <div class="col-auto my-1">
                <h5>Personas</h5>
                <label class="mr-sm-2 sr-only" for="cantidad">Preference</label>
                <select class="custom-select mr-sm-2" id="cantidad" name="cantidad">
                  <option selected>Elige...</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="email2">Confirma tu email</label>
              <input type="email" class="form-control" id="email2">
            </div>

          </div>
        
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary" id="btn">Reservar</button>
            <input type="hidden" name="action" id="action" value="store">
            <input type="hidden" name="id" id="id" value="">
            <input type="hidden" name="token"  value="<?= $_SESSION['token']?>">

          </div>
        </div>
        </form>
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script>
    function add(){
      $("#exampleModalLabel").text('Registrar adopción')
    }

    function edit(target){
      $("#exampleModalLabel").text('Editar reservación')
      var info = $(target).data('info')
      $("#nombre").val(info.nombre)
      $("#actividad").val(info.actividad)
      $("#cantidad").val(info.cantidad)
      $("#email").val(info.email)
      $("#email2").val(info.email)
      $("#btn").text('Editar')
      $("#action").val('update')
      $("#id").val(info.id)

      console.log(info)
    }

    function validar(target) {
      console.log($('#email').val());
      console.log($('#email2').val());
      if ($('#email').val() === $('#email2').val()) {
        console.log(true);
        return true;
      }  else {
        swal("Tu email no coincide", "Revisa tus datos!", "error");
        $("#email").addClass('is-invalid');
        $("#email2").addClass('is-invalid');
        console.log(false);
        return false;
      }
    }

    function remove(id) {
      swal({
        title: "",
        text: "¿Seguro que quieres eliminar esta reservación?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete)=> {
        if (willDelete) {
          swal("Espere porfavor, estamos eliminando su reservación", {
            icon: "info",
          });

          $.ajax({
            url: 'user',
            type: 'POST',
            dataType: 'json',
            data: {id: id, action: 'remove', token: '<?= $_SESSION['token'] ?>'},
            success: function(json) {
              if (json.status == 'success') {
                swal("Reserva eliminada.", {
                  icon: "success",
                });
                setTimeout(() => {
                  location.reload();
                }, 1000);
              }
            },
            error: function(xhr, status) {
              console.log(json)
            }
          });
        }
      });
    }
  </script>
  <style>
    
        @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    section {
        padding: 60px 0;
    }

    section .section-title {
        text-align: center;
        color: #007b5e;
        margin-bottom: 50px;
        text-transform: uppercase;
    }
    #footer {
        background: #0693c6 !important;
    }
    #footer h5{
      padding-left: 10px;
        border-left: 3px solid #eeeeee;
        padding-bottom: 6px;
        margin-bottom: 20px;
        color:#ffffff;
    }
    #footer a {
        color: #ffffff;
        text-decoration: none !important;
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
    }
    #footer ul.social li{
      padding: 3px 0;
    }
    #footer ul.social li a i {
        margin-right: 5px;
      font-size:25px;
      -webkit-transition: .5s all ease;
      -moz-transition: .5s all ease;
      transition: .5s all ease;
    }
    #footer ul.social li:hover a i {
      font-size:30px;
      margin-top:-10px;
    }
    #footer ul.social li a,
    #footer ul.quick-links li a{
      color:#ffffff;
    }
    #footer ul.social li a:hover{
      color:#eeeeee;
    }
    #footer ul.quick-links li{
      padding: 3px 0;
      -webkit-transition: .5s all ease;
      -moz-transition: .5s all ease;
      transition: .5s all ease;
    }
    #footer ul.quick-links li:hover{
      padding: 3px 0;
      margin-left:5px;
      font-weight:700;
    }
    #footer ul.quick-links li a i{
      margin-right: 5px;
    }
    #footer ul.quick-links li:hover a i {
        font-weight: 700;
    }

    @media (max-width:767px){
      #footer h5 {
        padding-left: 0;
        border-left: transparent;
        padding-bottom: 0px;
        margin-bottom: 10px;
    }
    }

  </style>
</body>

</html>
