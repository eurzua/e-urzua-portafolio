			<footer class="mb-5 container">
        <div class="row">
          <div class="col-sm-6 col-xs-12">
            <h5>eurzua</h5>
          </div>
          <div class="col-sm-6 col-xs-12 text-right">
            <p><small>  2018 eduardo urzúa, all right reserved.</small></p>
            <a href="#">subir</a>
          </div>
        </div>
    </footer>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/anime.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <Script>
              //navbar responsive

              $(document).ready(function(){
                $('.mob-menu').click(function(){
                  $('.navbar').animate({
                    height: "toggle",
                  }, 500);
                  $('.hamburger1').toggleClass('active');
                });
                
                $(window).resize(function(){
                  if($(window).width()<768){
                    $('.navbar').css({display: 'flex'});
                  };
                });
              });

                 // Preload all the images in the page.. 
                  imagesLoaded(document.querySelectorAll('img'), () => { 
                    document.body.classList.remove('loading'); 
                  }); 
    </Script>

    <script type="text/javascript">

          $(document).ready(function(){
            $('#contact-form').on('submit',function(e) {  //Don't foget to change the id form
            $.ajax({
                url:'contact.php', //===PHP file name====
                data:$(this).serialize(),
                type:'POST',
                success:function(data){
                  console.log(data);
                  //Success Message == 'Title', 'Message body', Last one leave as it is
                swal("¡Excelente!", "Pronto nos comunicaremos contigo!", "success");
                },
                error:function(data){
                  //Error Message == 'Title', 'Message body', Last one leave as it is
                swal("Oops...", "Algo paso, por favor intenta otra vez :(", "error");
                }
              });
              e.preventDefault(); //This is to Avoid Page Refresh and Fire the Event "Click"
            });
          });
    </script>
  </body>
</html>