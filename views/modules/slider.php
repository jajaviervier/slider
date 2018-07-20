<div class="container-fluid slider" id="slider">
    <div class="row">
      <ul id="contenidoSlider">

       <?php 

$prueba = ControllerProductos::ctrMostrarBanner();

//var_dump($categoria);
foreach ($prueba as $key => $value) {
  echo '
  <li>
  <img src="img/slider/back_default.jpg" alt="">
  <div class="infoSlide">
    <div class="textoSlide">
      <h1>'.$value["titulo"].'</h1>
      <p>'.$value["descripcion"].'</p>
      <a href="#" class="btn btn-default backColor">
        ver detalle <i class="fas fa-chevron-right"></i>
      </a>
    </div>
    <img src="'.$value["url"].'" alt="">
  </div>
</li>';
}
?>

 

      </ul>

      <div class="flechas" id="left"><i class="fas fa-chevron-left"></i></div>
      <div class="flechas" id="right"><i class="fas fa-chevron-right"></i></div>

      <ol id="paginacion">
      <?php 

$acumulador=0;
//var_dump($categoria);
foreach ($prueba as $key => $value) {
  $acumulador++;
  echo '
  <li item="'.$acumulador.'"><i class="fas fa-circle"></i></li>';
}
?>
       
    
      </ol>

    </div>
    
  </div>
