<?php include("header.php");?>


<div class="container"> 
  <div class="row">
    <div class="main__header-container main">
      <p class="main__header-comments">“ Full stack no es saber de todo, si no saber como aplicar ese todo. “</p>
      <span class="main__header-comments-name">Eduardo Urzúa</span>
      <h1 class="main__header-title">eurzua</h1>
      <h2 class="main__header-subtitle">Diseñador, productor y desarrollador</h2>
    </div>
  </div>
</div>

<div class="container">
   <h2 class="main__title">Services</h2>
   <h3 class="main__subtitle">Servicios</h3>

<?php include("assets/_data/_services-mobile.php");?>

   <div class="row services__desktop">
      <div class="col-md-4 col-sm-12">
        <div class="card web">
          <div class="card-body">
            <span class="card__detail"></span>
            <h4 class="card__title">Diseño Web</h4>
            <h5 class="card__title-primary">Web Designer</h5>
            <div class="card-img">Diseño web / Web Designer.</div>
            <a href="contact.php" alt="to contact" class="card-link">Contact us</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12">
        <div class="card development">
          <div class="card-body">
            <span class="card__detail"></span>
            <h4 class="card__title">Desarrollo</h4>
            <h5 class="card__title-primary">Development</h5>
            <div class="card-img">Desarrollo / Development.</div>
            <a href="contact.php" alt="to contact" class="card-link">Contact us</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12">
        <div class="card graphic">
          <div class="card-body">
            <span class="card__detail"></span>
            <h4 class="card__title">Diseño Gráfico</h4>
            <h5 class="card__title-primary">Graphic design</h5>
            <div class="card-img">Diseño gráfico / Graphic design.</div>
            <a href="contact.php" alt="to contact" class="card-link">Contact us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container-fluid">
<div class="container">
   <h2 class="main__title">Projects</h2>
   <h3 class="main__subtitle">Projectos</h3>
    <div class="row">
      <div class="col-md-6 col-sm-12 bg-warning d-flex align-self-center"  style="height: 526px; width: 100%; margin: 0 -15px">
        cualqueir cosa
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="col-12  bg-success" style="height: 526px; width: auto;">
        
        blabla
        
        </div>
        <div class="col-12  bg-info" style="height: 526px; width: auto;">
        
        blabla
        
        </div>
      </div>
    </div>
  </div>
</div>


<?php include("footer.php"); ?>