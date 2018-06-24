			<footer class="mb-5 container">
        <div class="row">
          <div class="col-6">
            <h5>eurzua</h5>
          </div>
          <div class="col-6 text-right">
            <p><small>  2018 eduardo urzúa, all right reserved.</small></p>
            <a href="#">subir</a>
          </div>
        </div>
    </footer>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/anime.min.js"></script>
		<script src="js/main.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
     <Script>
              //navbar responsive

              $(document).ready(function(){
                $('.mob-menu').click(function(){
                  $('.hamburger1').toggleClass('active');
                  $('.navbar').animate({
                    height: "toggle",
                  }, 500);
                });
                
                $(window).resize(function(){
                  if($(window).width()>768){
                    $('.navbar').css({display: 'flex'});
                  };
                });
              });
    </Script>

  </body>
</html>