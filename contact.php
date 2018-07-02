
<?php
  $to = 'edu.urzua@gmail.com' . "\r\n";
  $subject = 'Subject';
  $name = $_POST['nombre'];
  $email = $_POST['email']; 
  $message = "\r\n" .
  	         "oye, Alguien esta tratando de contactarte!  \r\n" .
             "**************************************************  <br> <br>  \r\n" .	
    
  	        "Nombre: " . $name . "\r\n" .
  	        "E-mail: " . $email . "\r\n" .
  	        "Mensaje: " . $_POST["message"] . "\r\n"; 
  $headers = "From: " . $name . "<" . $email . "> \r\n" .
  	         "Reply-To: " . $email . "\r\n" .
             "MIME-Version: 1.0" . "\r\n" .
             "Content-type:text/html;charset=UTF-8" . "\r\n";
	mail($to, $subject, $message, $headers); 
 ?>

   <?php include("header.php");?>

    <section>
        <div class="container"> 
          <div class="row">
            <div class="main__header-container contact">
              <p class="main__header-comments">“ Full stack no es saber de todo, si no saber como aplicar ese todo. “</p>
              <span class="main__header-comments-name">Eduardo Urzúa</span>
              <h1 class="main__header-title">Contacts</h1>
              <h2 class="main__header-subtitle"><small>hablemos, cuentame acerca de ti y tus ideas para que así realicemos un buenisimo proyecto</small>  </h2>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-sm-6 col-xs-12">
                  <h3>E-MAIL </h3>
                  <p class="contact">edu.urzua@gmail.com</p>
            </div>
            <div class="col-sm-6 col-xs-12">
              <form role="form" id="contact-form" method="post">
                <div class="col-sm-12 form-group">
                  <label for="nombre">Nombre</label>
                    <input class="form-control" name="name" placeholder="Nombre" type="text" required>
                </div>
                <div class="col-sm-12 form-group">
                  <label for="email">Email:</label>
                    <input class="form-control"  name="email" placeholder="Email" type="email" required>
                </div>
                <div class="col-sm-12 form-group">
                  <label for="asunto">Asunto:</label>
                    <input class="form-control"  name="asunto" placeholder="Asunto" type="text" required>
                </div>
                <div class="col-sm-12 form-group">
                  <label for="telefono">Mensaje:</label>
                    <textarea class="form-control" rows="4" placeholder="Describe tu consulta aquí" name="message"></textarea>
                </div>
                <div class="form-group text-center">
                  <button type="submit" class="btn" name="enviar">Enviar</button>
                <div>
              </form>
            </div>
          </div>
        </div>
    </section>

    <?php include("footer.php"); ?>