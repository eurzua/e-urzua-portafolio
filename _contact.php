<?php
if($_POST[enviar] == "enviar"){
    $cabecera = "From: ".$_POST[nombre]."<".$_POST[email].">\n";
    $cabecera .= "Reply-To: ".$_POST[email]."\n";
    $cabecera .= "Cc: edu.urzua@gmail.com\n";
    $asunto ="Asunto: ".$_POST[asunto]."\n";
    $cuerpo="Mensaje: ".$_POST[cuerpo]."\n";
    $destinatario="eduardo <edu.urzua@gmail.com>";
    if(mail("$destinatario", "$asunto", "$cuerpo", "$cabecera")){
        echo "
        <script>
                alert('Excelebte!, pronto nos contactaremos');
                window.location.href=\"index.php\"
            </script>
            ";
      } else{
          echo"
              <script>
                  alert('a ocurrido un error, favor intenta nuevamente');
                  window.location.href=\"contact.php\"
              </script>";
          }
    
}?>