<?php
include_once("../config/config.php");
include("estado.php");

$p = new estado();


if (isset($_POST) && !empty($_POST)) {
  
  $save = $p->save($_POST);
  if ($save){
    $mensaje = '<div class="alert alert-success"> Información Registrada </div>';
  } else{
    $mensaje = '<div class="alert alert-danger" role="alert"> Error de Registro </div>';
  }
}

?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8" />
<title>Crear Solicitud</title>
<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="../Stylos/Stylo2.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: rgb(4, 79, 241, 0.816);">
      <!-- <nav class="navbar navbar-expand-lg" style="background-color: #0685e0;"> -->
      <!-- Ajuste Color Fondo Barra -->

      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="../imagenes/LogoAsef2020.jpg" class="img-logo" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../index.html">INICIO</a> <!-- Enlace Activo -->
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Servicios.html">SERVICIOS</a> <!-- Enlace a Pagina Servicios -->
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Normas.html">NORMAS</a> <!-- Enlace a Pagina Normas -->
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../contactos/index.php">CONTACTO</a> <!-- Enlace a Form Contaco -->
            </li>
            <li class="nav-item dropdown">
              <!-- Menú desplegable -->
              <a class="nav-link dropdown-toggle" href="../Solicit.html" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                ZONA CLIENTES
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../Tutoriales.html">Tutoriales</a></li>
                <li><a class="dropdown-item" href="../Solicit.html">Solicitudes</a></li>
                <li><a class="dropdown-item" href="../Calendarios.html">Calendarios</a></li>
                <li><a class="dropdown-item" href="../Recursos.html">Recursos</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<br><br>
<h3 class="text-center mb-2">Solicitud de Estados Financieros</h3>  
<h5 class="text-center bg-warning mb-2">Favor diligenciar toda la información y tener presente hacer su solicitud como mínimo con 5 días hábiles. Gracias</h5>  
<br><br>
<div class="container d-flex aligth-content-center bg-info" >
<?php
  if(isset($mensaje)){
    echo $mensaje;
  }
  ?>

<form method="POST" enctype="multipart/form-data">
<div class="row px-3 mt-3">
<div class="col">
    <input type="text" name="empresa" id="empresa" placeholder="Nombre Empresa" class="form-control"/>
  </div>
  <div class="col">
  <input type="number" name="nit" id="nit" placeholder="Numero de NIT" class="form-control"/>
  </div>
  <div class="col">
  <input type="email" name="correo" id="correo" placeholder="Correo para Enviar" class="form-control"/>
  </div>
  </div>

  <div class="row mt-4">
  <div class="col">
<label class="form-label">Fecha Corte<input type="date" name="corte" id="corte" placeholder="corte" class="form-control"/></label>
  </div>
    
  <div class="col-8">
    <input type="text" name="comentario" id="comentario" placeholder="Destino de los Estados" class="form-control"/>
  </div>
  </div>
<br>
<div class="d-grid gap-2 d-md-flex justify-content-md-center">
<button class="btn btn-primary btn-lg">Enviar Solcitud</button> 
  <a href="../index.html" class="btn btn-danger btn-lg" role="button">Cerrar</a>
</div>


<br> 
</form>

  </div>
  
<br><br><br><br><br><br>
</body>
<!-- FOOTER -->
<footer class="bg-gradient" style="background-color: rgb(48, 175, 173);">
  <!-- fondo oscuro y degradado -->

  <div class="d-flex align-conten center">
    <!-- d-flex organixar elmentos y align para alineacion-->

    <div class="container mt-4">
      <!-- Grilla   (mt-4 margen)-->
      <div class="row justify-content-center">
        <div class="col">
          <img src="../Imagenes/LogoAsef2020.jpg" width="100" height="60" alt="logo" /> <!-- medidas personalizadas -->
          <h6>Encuentrános</h6>
        </div>
        <div class="col text-center">
          <img src="../Imagenes/LogoEmail3.png" class="img-pie" alt="email" /> <!-- utiliza clase hoja stylo2 -->
          <p><small>asesorias@yahoo.com</small></p>
        </div>
        <div class="col text-center">
          <img src="../Imagenes/LogoWasap2.png" class="img-pie" alt="wasap" />
          <p><small>3507262626</small></p> <!-- Texto pequeño -->
        </div>
        <div class="col text-center">
          <img src="../Imagenes/LogoYoutube3.png" class="img-pie" alt="Youtube" />
          <p><small>@asesoriasasef7567</small></p>
        </div>
        <div class="col v-line text-center"> <!-- v-line define linea vertical en stylo2  -->
          <a title="Dian" href="https://muisca.dian.gov.co/WebArquitectura/DefLoginOld.faces" target="_blank"><img
              src="../Imagenes/LogoDian.png" class="img-pie" alt="Dian" /></a>
        </div>
        <div class="col text-center">
          <a title="Camara" href="https://www.ccb.org.co/" target="_blank"><img src="../Imagenes/LogoCamara.png"
              class="img-pie" alt="Camara" /></a> <!-- Imagen con enlace nueva pestaña -->
        </div>
        <div class="col text-center">
          <a title="Shd" href="https://oficinavirtual.shd.gov.co/OficinaVirtual/login.html" target="_blank"><img
              src="../Imagenes/LogoIca.jfif" width="80" height="60" alt="Shd" /></a>
        </div>
        <div class="col text-center">
          <a title="Siigo" href="https://siigonube.siigo.com/ISIIGO2/Login.aspx?ReturnUrl=%2fISIIGO2%2fDefault.aspx"
            target="_blank"><img src="../Imagenes/LogoSiigo.png" class="img-pie" alt="Siigo" /></a>
        </div>
        <div class="col text-center">
          <a title="Xubio" href="https://xubio.com/NXV/newLogin" target="_blank"><img src="../Imagenes/LogoXubio.png"
              class="img-pie" alt="Xubio" /></a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col">
        <p class="text-center"><strong>Derechos Reservados Asesorías Empresariales ASEF Sas</strong></p>
      </div>
      <div class="col">
        <p class="text-center"><strong>ACCESO A SITIOS FRECUENTES</strong></p><!-- Texto negrilla y centrado -->
      </div>
    </div>
  </div>
  </div>



  </div>





</footer>