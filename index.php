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
            <a href="contact.php" alt="to contact" class="card-link orange">Contact us</a>
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
            <a href="contact.php" alt="to contact" class="card-link orange">Contact us</a>
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
            <a href="contact.php" alt="to contact" class="card-link orange">Contact us</a>
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
    <div class="row container__projects-home">
      <div class="col-md-6 col-sm-12 main__project-content project-a first d-flex align-self-center d-flex align-items-end">
        <div class="main__project-detail">
          <h3>WaveMusic</h3>
          <p>Design ux, ui and develpment</p>
          <a href="gallery.php" alt="to projects" class="card-link orange ">Ver Poyectos</a>
        </div>
        <div class="shape"></div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="col-12 main__project-content project-b d-flex align-items-end">
          <div class="main__project-detail">
            <h3>Szot Beer</h3>
            <p>Identity and Branding</p>
            <a href="gallery.php" alt="to projects" class="card-link orange ">Ver Poyectos</a>
          </div>
          <div class="shape"></div>
        </div>
        <div class="col-12 main__project-content project-c d-flex align-items-end">
          <div class="main__project-detail">
            <h3>Armin Tour</h3>
            <p>Graphic design, Art direction</p>
            <a href="gallery.php" alt="to projects" class="card-link orange ">Ver Poyectos</a>
          </div>
          <div class="shape"></div>
        </div>
      </div>
      <a href="gallery.php" alt="ver más" class="more">Ver más proyectos</a>
    </div>
  </div>
</div>


<?php include("footer.php"); ?>