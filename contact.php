    <?php include("header.php");?>

    <section>
        <div class="container"> 
          <div class="row">
            <div class="main__header-container contact">
              <p class="main__header-comments">“ Full stack no es saber de todo, si no saber como aplicar ese todo. “</p>
              <span class="main__header-comments-name">Eduardo Urzúa</span>
              <h1 class="main__header-title">Contact</h1>
              <h2 class="main__header-subtitle">Cualquier duda o consulta <br> <small>if u have any question, please, contact me</small>  </h2>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-4">
              <div class="row">
                <div class="col-12">
                  <img src="img/contact-figure.svg" alt="" class="img-fluid mb-5">
                </div>
                <div class="col-12">
                  <h3>Vestibulum hendrerit lacinia interdum. </h3>
                  <p>Cras pellentesque commodo lobortis. Nulla pulvinar 
                  mollis magna ut lobortis. Nunc viverra blandit nulla sit amet tempor. Sed bibendum neque sed
                  </p>
                </div>
              </div>
            </div>
            <div class="col-8">
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
    </section>

    <?php include("footer.php"); ?>