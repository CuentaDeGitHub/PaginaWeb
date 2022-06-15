<?php
session_start();
IF($_SESSION['usuario'] == null){
  header("location:LoginRegistro.php");
}
$_tabla = $_POST['tabla'];
$_tablaM =  strtoupper($_tabla);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pagina Interna - Tabla</title>

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/styleTabla.css" rel="stylesheet">

  <style>
input{width: 400px}
</style>


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">SV<span>.</span></a></h1>
     
      <nav id="navbar" class="navbar order-last order-lg-0">
      </nav>
      <form action = Logout.php>
      <button class="button-31" role="button">Desconectar</button>
      </form>
    </div>
  </header>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    
    <section class="breadcrumbs">

    </section>

    <div class="section-title">
          <h2>Editor de Tablas</h2>
          <p>Tabla actual : <?php echo($_tabla); ?></p>
    </div>



<?php

if(isset($_POST['tabla']))
{
  include('DB.php');
  $result = $db->query("SELECT * FROM ".$_tabla);
  $all = $result->fetchAll();
  $col = $all[0];

  $columnas = array();
  echo "<table>";
  echo "<pre>";
  foreach($col AS $key=>$value)
  {
    if(is_string($key))
    {
      $columnas[] = $key;
    }
  }
  echo "<table border='1'>";
  foreach($columnas AS $value)
  {
    echo"<th>$value</th>";
  }

  for($x=0;$x<count($all);$x++)
  {
    echo"<tr>";
    for($y=0;$y<count($columnas);$y++)
    {
      echo "<td>".$all[$x][$y]."</td>";
    }
    echo"</tr>";
  }
  echo "</table>";
}else{
  header("location:LoginRegistro.php");
}
?>
</br>
<div id="outer">

<div class="inner">
        <form action="exportarExcel.php" method="post">	
				<button class="button-3" type="submit" id="export_data" name='export_data' value="Export to excel" class="btn btn-info">Exportar a Excel</button>
        <input type = "hidden" name = "tabla" value = <?php echo $_tabla; ?> />
</form>
</div>

<div class="inner">
<form action="exportarCSV.php" method="post">					
				<button class="button-5" type="submit" id="export_csv_data" name='export_csv_data' value="Export to excel" class="btn btn-info">Exportar a CSV </button>
        <input type = "hidden" name = "tabla" value = <?php echo $_tabla; ?> />
</form>
</div>

</div>
</br>

<div class="outer">

    <div class="section-title">
          <h2>Query para Insertar</h2>
          <hr>
    </div>
    <form action = Insert.php method="post">
    INSERT INTO <?php echo ($_tablaM); ?> ( <input type="text" class="linea" placeholder="Columna_1,Columna_2,Columna_3...." name ="columnas" required >)
    </br>
    VALUES ( <input type="text" class="linea" placeholder="'Valor_1','Valor_2','Valor_3'...." name ="valores" required >) <button class="button-5">Enviar</button>
    <input type = "hidden" name = "tabla" value = <?php echo($_tabla); ?> />
    </br>
    </form>

  <div class="section-title">
          <h2>Query para Editar</h2>
          <hr>
    </div>
    <form action = Update.php method="post">
    UPDATE <?php echo ($_tablaM); ?> SET <input type="text" class="linea" placeholder="Columna = 'Valor' WHERE Condicion" name ="query" required >
    </br>
    <button class="button-5">Enviar</button>
    <input type = "hidden" name = "tabla" value = <?php echo($_tabla); ?> />
    </br>
    </form>

  
  <div class="section-title">
          <h2>Query para Eliminar</h2>
          <hr>
    </div>
    <form action = Delete.php method="post" >
    DELETE FROM <?php echo ($_tablaM); ?> WHERE <input type="text" class="linea" placeholder="condicion" name ="condicion" required >
    </br>
    <button class="button-5">Enviar</button>
    <input type = "hidden" name = "tabla" value = <?php echo($_tabla); ?> />
    </br>
    </form>
</div>




  </main>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>


  <script src="assets/js/main.js"></script>

</body>

</html>