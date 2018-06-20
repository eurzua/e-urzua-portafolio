    <?php include("header.php");?>

    <section>
        <div class="container">
          <div class="jumbotron text-center">
            <h1>Contact us</h1>
            <p>Contactemonos!</p> 
          </div>
            <div class="row">
                <div class=" col-8 col-xs-offset-2">
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