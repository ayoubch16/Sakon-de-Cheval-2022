<?php include 'head.php' ;?>
<body>
    <?php include 'top.php' ;?>


    <script>document.title = "الصور";</script>
    <div class="chiffres my-5 py-5 ">
        <h1 class="text-center  ">الصور</h1>
    </div>

    <div class="container">
        <div class="row" style="justify-content: center;">
            <button type="button" class="coveralbume col-md-4 p-3" data-bs-toggle="modal" data-bs-target="#exampleModal2019">
              <img src="../images/phototheque1.jpeg" alt="" class="img-fluid">
              <div class="titrealbume">
                <p class="">2019</p>
              </div>
            </button>
            <button type="button" class="coveralbume col-md-4 p-3" data-bs-toggle="modal" data-bs-target="#exampleModal2018">
              <img src="../images/phototheque2.jpeg" alt="" class="img-fluid">
              <div class="titrealbume">
                <p class="">2018</p>
              </div>
            </button>
            <button type="button" class="coveralbume col-md-4 p-3" data-bs-toggle="modal" data-bs-target="#exampleModal2017">
              <img src="../images/phototheque3.jpeg" alt="" class="img-fluid">
              <div class="titrealbume">
                <p class="">2017</p>
              </div>
            </button>
            <button type="button" class="coveralbume col-md-4 p-3" data-bs-toggle="modal" data-bs-target="#exampleModal2016">
              <img src="../images/phototheque4.jpeg" alt="" class="img-fluid">
              <div class="titrealbume">
                <p class="">2016</p>
              </div>
            </button>
            <button type="button" class="coveralbume col-md-4 p-3" data-bs-toggle="modal" data-bs-target="#exampleModal2015">
              <img src="../images/phototheque5.jpeg" alt="" class="img-fluid">
              <div class="titrealbume">
                <p class="">2015</p>
              </div>
            </button>
            <button type="button" class="coveralbume col-md-4 p-3" data-bs-toggle="modal" data-bs-target="#exampleModal2014">
              <img src="../images/phototheque6.jpeg" alt="" class="img-fluid">
              <div class="titrealbume">
                <p class="">2014</p>
              </div>
            </button>
            <button type="button" class="coveralbume col-md-4 p-3" data-bs-toggle="modal" data-bs-target="#exampleModal2013">
              <img src="../images/phototheque7.jpeg" alt="" class="img-fluid">
              <div class="titrealbume">
                <p class="">2013</p>
              </div>
            </button>
        </div>
    </div>
<style>
  .modal-dialog {
      max-width: 80% !important;
      height: 60% !important;
      margin: 1.75rem auto;
    }
@media only screen and (max-width: 600px) {
  .modal-dialog {
        max-width: 100% !important;
        margin: 0.5rem auto;
  }

}
</style>

<!-- Modal 2019-->
<div class="modal fade" id="exampleModal2019" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ألبوم 2019</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="carouselExampleIndicators2019" class="carousel slide" data-bs-ride="true">
          <div class="carousel-indicators">
            <script>
                for(var i = 0; i < 31; i++){
                    document.write('<button type="button" data-bs-target="#carouselExampleIndicators2019" data-bs-slide-to="'+i+'" ' + (i == 0 ? 'class="active" aria-current="true"' : '') + ' aria-label="Slide '+(i+1)+'"></button>');   
                }
            </script>

          </div>
          <div class="carousel-inner">
            <script>
              for(var i = 1; i < 31; i++){
                  document.write('<div class="carousel-item ' + (i == 1 ? 'active' : '') + '">');
                  document.write('<img src="../images/show2019/show2019 ('+(i)+').png" class="d-block w-100" alt="...">');
                  document.write('</div>');
              }
            </script>
        
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2019" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2019" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Modal 2018-->
<div class="modal fade" id="exampleModal2018" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ألبوم 2018</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="carouselExampleIndicators2018" class="carousel slide" data-bs-ride="true">
          <div class="carousel-indicators">
            <script>
                for(var i = 0; i < 31; i++){
                    document.write('<button type="button" data-bs-target="#carouselExampleIndicators2018" data-bs-slide-to="'+i+'" ' + (i == 0 ? 'class="active" aria-current="true"' : '') + ' aria-label="Slide '+(i+1)+'"></button>');   
                }
            </script>

          </div>
          <div class="carousel-inner">
            <script>
              for(var i = 1; i < 31; i++){
                  document.write('<div class="carousel-item ' + (i == 1 ? 'active' : '') + '">');
                  document.write('<img src="../images/show18/show2018 ('+(i)+').png" class="d-block w-100" alt="...">');
                  document.write('</div>');
              }
            </script>
        
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2018" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2018" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Modal 2017-->
<div class="modal fade" id="exampleModal2017" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ألبوم 2017</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="carouselExampleIndicators2017" class="carousel slide" data-bs-ride="true">
          <div class="carousel-indicators">
            <script>
                for(var i = 0; i < 31; i++){
                    document.write('<button type="button" data-bs-target="#carouselExampleIndicators2017" data-bs-slide-to="'+i+'" ' + (i == 0 ? 'class="active" aria-current="true"' : '') + ' aria-label="Slide '+(i+1)+'"></button>');   
                }
            </script>

          </div>
          <div class="carousel-inner">
            <script>
              for(var i = 1; i < 31; i++){
                  document.write('<div class="carousel-item ' + (i == 1 ? 'active' : '') + '">');
                  document.write('<img src="../images/show2017/show2017 ('+(i)+').png" class="d-block w-100" alt="...">');
                  document.write('</div>');
              }
            </script>
        
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2017" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2017" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Modal 2016-->
<div class="modal fade" id="exampleModal2016" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ألبوم 2016</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="carouselExampleIndicators2016" class="carousel slide" data-bs-ride="true">
          <div class="carousel-indicators">
            <script>
                for(var i = 0; i < 41; i++){
                    document.write('<button type="button" data-bs-target="#carouselExampleIndicators2016" data-bs-slide-to="'+i+'" ' + (i == 0 ? 'class="active" aria-current="true"' : '') + ' aria-label="Slide '+(i+1)+'"></button>');   
                }
            </script>

          </div>
          <div class="carousel-inner">
            <script>
              for(var i = 1; i < 41; i++){
                  document.write('<div class="carousel-item ' + (i == 1 ? 'active' : '') + '">');
                  document.write('<img src="../images/show2016/show2016 ('+(i)+').png" class="d-block w-100" alt="...">');
                  document.write('</div>');
              }
            </script>
        
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2016" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2016" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Modal 2015-->
<div class="modal fade" id="exampleModal2015" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ألبوم 2015</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="carouselExampleIndicators2015" class="carousel slide" data-bs-ride="true">
          <div class="carousel-indicators">
            <script>
                for(var i = 0; i < 39; i++){
                    document.write('<button type="button" data-bs-target="#carouselExampleIndicators2015" data-bs-slide-to="'+i+'" ' + (i == 0 ? 'class="active" aria-current="true"' : '') + ' aria-label="Slide '+(i+1)+'"></button>');   
                }
            </script>

          </div>
          <div class="carousel-inner">
            <script>
              for(var i = 1; i < 39; i++){
                  document.write('<div class="carousel-item ' + (i == 1 ? 'active' : '') + '">');
                  document.write('<img src="../images/2015show/show2015 ('+(i)+').png" class="d-block w-100" alt="...">');
                  document.write('</div>');
              }
            </script>
        
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2015" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2015" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Modal 2014-->
<div class="modal fade" id="exampleModal2014" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ألبوم 2014</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="carouselExampleIndicators2014" class="carousel slide" data-bs-ride="true">
          <div class="carousel-indicators">
            <script>
                for(var i = 0; i < 83; i++){
                    document.write('<button type="button" data-bs-target="#carouselExampleIndicators2014" data-bs-slide-to="'+i+'" ' + (i == 0 ? 'class="active" aria-current="true"' : '') + ' aria-label="Slide '+(i+1)+'"></button>');   
                }
            </script>
          </div>
          <div class="carousel-inner">
            <script>
              for(var i = 1; i < 83; i++){
                  document.write('<div class="carousel-item ' + (i == 1 ? 'active' : '') + '">');
                  document.write('<img src="../images/show2014/show2014 ('+(i)+').jpg" class="d-block w-100" alt="...">');
                  document.write('</div>');
              }
            </script>
        
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2014" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2014" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Modal 2013-->
<div class="modal fade" id="exampleModal2013" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ألبوم 2013</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="carouselExampleIndicators2013" class="carousel slide" data-bs-ride="true">
          <div class="carousel-indicators">
            <script>
                for(var i = 0; i < 9; i++){
                    document.write('<button type="button" data-bs-target="#carouselExampleIndicators2013" data-bs-slide-to="'+i+'" ' + (i == 0 ? 'class="active" aria-current="true"' : '') + ' aria-label="Slide '+(i+1)+'"></button>');   
                }
            </script>
          </div>
          <div class="carousel-inner">
            <script>
              for(var i = 1; i < 9; i++){
                  document.write('<div class="carousel-item ' + (i == 1 ? 'active' : '') + '">');
                  document.write('<img src="../images/2013show/show2013 ('+(i)+').jpg" class="d-block w-100" alt="...">');
                  document.write('</div>');
              }
            </script>
        
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2013" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2013" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

    </div>
  </div>
</div>




    
    <?php include 'footer.php' ;?>
</body>