    <!-- Top -->
    <div class="header text-center">
        <h3>SOUS LE HAUT PATRONAGE DE SA MAJESTÉ LE ROI MOHAMMED VI</h3>
    </div>
    <!-- navbar -->
    <nav style="background-color: #f5f1ee;box-shadow: 0px 35px 43px 0px rgba(0,0,0,0.14);" class="navbar sticky-top navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <img src="../images/logo.webp"  class="d-inline-block align-top animate__animated animate__backInLeft" alt="">
            
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown" style="flex-grow: 0;">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#acceuil">ACCUEIL</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#aprops">A PROPOS DU SALON</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#info">INFOS UTILES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#media">MÉDIATHÈQUE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">CANTACT</a>
              </li>
              <li class="nav-item">
                    <select class="nav-link" name="" id="">
                        <option value="" selected disabled>FR</option>
                        <option onclick="langueEN()" value="en">EN</option>
                        <option onclick="langueAR()" value="ar">AR</option>
                    </select>
                </li>

            </ul>
          </div>
        </div>
    </nav>
    <script>
      function langueEN(){
        window.location.href = "../en/";
      }
      function langueAR(){
        window.location.href = "../ar/";
      }
    </script>
    <!-- End navbar -->