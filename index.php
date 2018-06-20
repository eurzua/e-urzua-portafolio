<?php include("header.php");?>

<div class="container">
   <h2 class="main__title">Services</h2>
   <h3 class="main__subtitle">Servicios</h3>
   <div class="row">
     <div class="col-4">
      <div class="card web">
        <div class="card-body">
          <span class="card__detail"></span>
          <h4 class="card__title">Diseño Web</h4>
          <h5 class="card__title-primary">Web Designer</h5>
          <div class="card-img">Diseño web / Web Designer.</div>
          <button data-toggle="collapse" data-target="#_contact" class="card-link">Contact us</button>
        </div>
      </div>
    </div>

    <div class="col-4">
      <div class="card development">
        <div class="card-body">
          <span class="card__detail"></span>
          <h4 class="card__title">Desarrollo</h4>
          <h5 class="card__title-primary">Development</h5>
          <div class="card-img">Desarrollo / Development.</div>
          <button data-toggle="collapse" data-target="#_contact" class="card-link">Contact us</button>
        </div>
      </div>
    </div>

    <div class="col-4">
      <div class="card graphic">
        <div class="card-body">
          <span class="card__detail"></span>
          <h4 class="card__title">Diseño Gráfico</h4>
          <h5 class="card__title-primary">Graphic design</h5>
          <div class="card-img">Diseño gráfico / Graphic design.</div>
          <button data-toggle="collapse" data-target="#_contact" class="card-link">Contact us</button>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div id="_contact" class="collapse">
      <div class="row">
          <div class=" col-8 ">
              <form method="post" action="_contact.php">
                  <div class="col-sm-12 form-group">
                    <label for="nombre">Nombre</label>
                      <input class="form-control" name="nombre" placeholder="nombre" type="text">
                  </div>
                  <div class="col-sm-12 form-group">
                    <label for="telefono">Teléfono:</label>
                      <input name="telefono" class="form-control" type="tel" placeholder="Teléfono">
                  </div>
                  <div class="col-sm-12 form-group">
                    <label for="email">Email:</label>
                      <input class="form-control"  name="email" placeholder="Email" type="email">
                  </div>
                  <div class="col-sm-12 form-group">
                    <label for="asunto">Asunto:</label>
                      <input class="form-control"  name="asunto" placeholder="asunto" type="text">
                  </div>
                  <div class="col-sm-12 form-group">
                    <label for="telefono">Mensaje:</label>
                      <textarea class="form-control" rows="5" name="cuerpo"></textarea>
                  </div>
                <div class="form-group text-center">
                      <input type="submit" class="form-btn"  name="registrarse" onsubmit="">
                  <div>
              </form>
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
      <div class="col-6 bg-warning d-flex align-self-center"  style="height: 526px; width: auto;">
        cualqueir cosa
      </div>
      <div class="col-6">
        <div class="col-12  bg-success" style="height: 526px; width: auto;">blabla</div>
        <div class="col-12  bg-info" style="height: 526px; width: auto;">blabla</div>
      </div>
    </div>
  </div>
</div>


<?php include("footer.php"); ?>