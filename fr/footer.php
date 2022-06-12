
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script>
    $(document).ready(function(){
        $('.counter-value').each(function(){
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            },{
                duration: 3000,
                easing: 'swing',
                step: function (now){
                    $(this).text(Math.ceil(now));
                }
            });
        });
    });
</script>

      <!--  partenariat-->
    <div class="partenariat">
          <div class="chiffres my-5 py-5 ">
            <h1 class="text-center  ">Partenaires & Sponsors</h1>
          </div>
       <!-- <h1 class="titrepartenariat  text-center mb-3">Partenaires & Sponsors</h1> -->
       <div class="" style="overflow: hidden;">
        <div class="slide-left row my-2" style="flex-wrap: inherit;">
          <script>
            for (var i = 1; i < 69; i++) {
              document.write('<div class="col" style="width:120px;"><img  src="../images/partners/partner ('+i+').png" class="mx-2 " width="100px"  height="40px"></div>');
            }
          </script>     
        </div>
      </div>    
    </div>
    <!--  End partenariat-->
    
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> 
    <!-- footer -->
    <footer class="footer-1">
      <div class="container">
        <div class="row  mx-5">
          <div class="p-3 col-md-3 col-sm-6 col-xs-12 text-center section-1" style="display: flex;justify-content: center;align-items: center;border-right: 2px solid #fff;">
            <img src="../images/logo.webp" width="180px" height="80px" alt="" style="filter: invert(100%) sepia(98%) saturate(0%) hue-rotate(335deg) brightness(103%) contrast(103%);">
          </div>
          <div class="p-3 col-md-3 col-sm-6 col-xs-12 text-center section-2" style="display: flex;justify-content: center;align-items: center;border-right: 2px solid #fff;">
            <p>Commissariat du Salon 40 Avenue Aljacranda Hay Riad, Rabat</p>
          </div>
          <div class="p-3 col-md-3 col-sm-6 col-xs-12 text-left section-3" style="border-right: 2px solid #fff;display: grid;justify-items: center;">
            <p>T:+212 537 566 656</p>
            <p>F:+212 537 566 656</p>
            <p>contact@salonducheval.ma</p>
          </div>
          <div class="p-3 col-md-3 col-sm-6 col-xs-12 text-center section-4" style="display: flex;justify-content: center;align-items: center;border-right: 2px solid #fff;">  
              <span><a target="_blank" href="https://www.facebook.com/SalonDuChevalDElJadida"><img class="img-Reseaux mx-1" src="../images/facebook.png" width="20px" height="20px" alt=""></a></span>
              <span><a target="_blank" href="https://instagram.com/salonduchevaldeljadida?igshid=YmMyMTA2M2Y="><img class="img-Reseaux mx-1" src="../images/instagram.png" width="20px" height="20px" alt=""></a></span>
              <span><a target="_blank" href="https://youtube.com/channel/UCpYg4nkyjsiXxCNZBS55d7A"><img class="img-Reseaux mx-1" src="../images/youtube.png" width="20px" height="20px" alt=""></a></span>
          </div>
        </div>
      </div>
    </footer>
    <!-- End footer -->


  
  <script>
      //Get the button
      var mybutton = document.getElementById("myBtn");
      
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};
      
      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }
      
      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
  </script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> 
<script>
    
        ScrollReveal().reveal('.carousel',  { scale: 0.85 });
        ScrollReveal().reveal('.presentation',  { scale: 0.85 });
        ScrollReveal().reveal('.chiffres',  { scale: 0.85 });
        ScrollReveal().reveal('.motpresident',  { scale: 0.85 });
        ScrollReveal().reveal('.infoPratique',  { scale: 0.85 });
        ScrollReveal().reveal('.mediatheque',  { scale: 0.85 });
        ScrollReveal().reveal('.partenariat',  { scale: 0.85 });
        ScrollReveal().reveal('.footer-1',  { scale: 0.85 });
</script>