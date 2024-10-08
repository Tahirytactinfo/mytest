<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="expires" content="-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Internet hotspot - Log in</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
<body>
    <div class="sary">
        <img src="img/logo.jpg" alt="">
        <div class="soratra">
            <h2><marquee behavior="" direction="">BIENVENUE DANS ZONE WIFI STARLINK TACTINFO</marquee></h2>
        </div>
        
    </div>
    
    
    <!-- two other colors

<body class="lite">
<body class="dark">

-->

    
    <form name="sendin" action="$(link-login-only)" method="post" style="display:none">
        <input type="hidden" name="username" />
        <input type="hidden" name="password" />
        <input type="hidden" name="dst" value="$(link-orig)" />
        <input type="hidden" name="popup" value="true" />
    </form>

    <script src="/md5.js"></script>
    <script>
        function doLogin() {
            document.sendin.username.value = document.login.username.value;
            document.sendin.password.value = hexMD5('$(chap-id)' + document.login.password.value + '$(chap-challenge)');
            document.sendin.submit();
            return false;
        }

    </script>
    
    <div class="ie-fixMinHeight">
        <div class="main">
            <div class="wrap animated fadeIn">
                <form name="login" action="$(link-login-only)" method="post" $(if chap-id) onSubmit="return doLogin()" $(endif)>
                    <input type="hidden" name="dst" value="$(link-orig)" />
                    <input type="hidden" name="popup" value="true" />
                    <!-- <svg class="logo" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 174 42"> -->
                        
                        <path fill="#fff" d="M7.32 13.66L0 41.74 3.12 41.74 9.49 15.94 9.58 15.94 15.01 41.74 18.22 41.74 36.86 16.34 36.95 16.34 30.02 41.74 33.18 41.74 40.4 13.66 35.73 13.66 17.23 38.87 11.99 13.66 7.32 13.66zM43.43 21.45L38.19 41.74 41.16 41.74 46.4 21.45 43.43 21.45zM50.68 21.45L45.5 41.74 48.47 41.74 50.36 34.39 55.55 30.77 62.02 41.74 65.27 41.74 57.91 29.28 69.43 21.45 65.46 21.45 51.21 31.36 51.12 31.28 53.66 21.45 50.68 21.45z" />
                        <path d="M71.18 21.45L65.94 41.74h3l2.74-10.62c1-3.81 3.82-7.39 9.16-7.47.56 0 1.13 0 1.7 0l.66-2.48c-.52 0-1.09 0-1.61 0-4.34 0-6.94 2-8.82 5h-.1l1.23-4.68zM103.8 28.8c0-5-4-7.94-9.63-7.94-8.69 0-13.59 6.37-13.59 13 0 5.07 3.44 8.45 9.72 8.45 9 0 13.5-6.68 13.5-13.53m-3 .52c0 4.72-3.44 10.93-9.95 10.93-5 0-7.32-2.68-7.32-6.61 0-4.76 3.59-10.7 10.1-10.7 4.77 0 7.17 2.6 7.17 6.38M132.33 21.43L134.26 13.66 105.19 13.66 103.27 21.45 112.59 21.45 112.59 21.45 122.99 21.45 122.99 21.45 132.33 21.43zM111.67 25.17L107.55 41.74 117.93 41.74 122.06 25.17 122.06 25.16 111.67 25.16 111.67 25.17zM134 25.17l-4.11 16.57h9.35l4.1-16.57zm10.28-3.73l1.94-7.78h-9.34l-2 7.79zM150.09 13.66L143.11 41.74 152.45 41.74 153.91 35.92 156.04 34.34 159.34 41.74 169.49 41.74 163.26 29.55 174.26 21.33 163.07 21.33 156.18 27.3 156.09 27.3 159.44 13.66 150.09 13.66zM47.45 0c1.14 7.93 5.39 12.74 14.07 13.14A10.69 10.69 0 0 1 47.45 0" fill="#fff" fill-rule="evenodd" />
                        <path d="M42.91,1.4c.1,0,.11,0,.12.11A16.55,16.55,0,0,0,48.26,13a16.6,16.6,0,0,0,12,4.66c-10,4-20.55-5.6-17.33-16.28" fill="#fff" fill-rule="evenodd" /></svg>


                    <p class="info $(if error)alert$(endif)">
                         <!--$(if error == "")Veuillez demander votre ticket au responsable  $(if trial == 'yes')<br />Free trial available, <a href="$(link-login-only)?dst=$(link-orig-esc)&amp;username=T-$(mac-esc)">click here</a>.$(endif)-->
                       <!-- $(endif)

                        $(if error)$(error)$(endif)-->
                    </p>
                    <label>
                        <img class="ico" src="img/user.svg" alt="#" />
                        <input name="username" type="text" placeholder="Username" />
                    </label>

                    <label>
                        <img class="ico" src="img/password.svg" alt="#" />
                        <input name="password" type="password" placeholder="Password" />
                    </label>

                    <input type="submit" value="Connect"/>

                </form>
                <p class="info bt" style="margin-top: 10px;color: white ; font-weight: bold; font-size:900px;">
                    <marquee behavior="alternate" direction="">NOS OFFRES</marquee>
                </p>

            </div>
        </div>
    </div>
</div>
    <section class=" sect d-lg-flex flex-wrap justify-content-btween">
        <div style="position: relative; width: 350px;">
            <img src="img/30mn.jpg" class="ica" alt="Achat" style="">
            <a href="" data-bs-toggle="modal" data-bs-target="#zaho" style="position: absolute; bottom: 10px; left: 72%; transform: translateX(-50%); padding: 10px 20px; background-color: black; color: rgb(230, 197, 12); text-decoration: none; font-weight: bold; border-radius: 13%;">
                ACHETER
            </a>
        </div>
        <div style="position: relative; width: 350px;">
            <img src="img/1h.jpg" alt="Achat" class="ica" style="">
            <a href="" data-bs-toggle="modal" data-bs-target="#une" style="position: absolute; bottom: 10px; left: 72%; transform: translateX(-50%); padding: 10px 20px; background-color: black; color: rgb(230, 197, 12); text-decoration: none; font-weight: bold; border-radius: 13%;">
                ACHETER
            </a>
        </div> 
        <div style="position: relative; width: 350px ; border-radius: 10px; ">
            <img src="img/20G.jpg" alt="Achat" class="ica" style="">
            <a href="" data-bs-toggle="modal" data-bs-target="#vinght" style="position: absolute; bottom: 10px; left: 72%; transform: translateX(-50%); padding: 10px 20px; background-color: black; color: rgb(230, 197, 12); text-decoration: none; font-weight: bold;border-radius: 13%;">
                ACHETER
            </a>
        </div>
        <div style="position: relative; width: 350px;">
            <img src="img/100G.jpg" alt="Achat" class="ica" style="">
            <a href="" data-bs-toggle="modal" data-bs-target="#cent" style="position: absolute; bottom: 10px; left: 72%; transform: translateX(-50%); padding: 10px 20px; background-color: black; color:rgb(230, 197, 12); text-decoration: none; font-weight: bold;border-radius: 13%;">
                ACHETER
            </a>
        </div>
        
        <div style="position: relative; width: 350px;">
            <img src="img/150G.jpg" alt="Achat" class="ica" style="">
            <a href="" data-bs-toggle="modal" data-bs-target="#centiment" style="position: absolute; bottom: 10px; left: 72%; transform: translateX(-50%); padding: 10px 20px; background-color: black; color:rgb(230, 197, 12); text-decoration: none; font-weight: bold;border-radius: 13%;">
                ACHETER
            </a>
        </div> 
        <div style="position: relative; width: 350px;">
            <img src="img/200G.jpg" alt="Achat" class="ica" style="">
            <a href="" data-bs-toggle="modal" data-bs-target="#deuxcent" style="position: absolute; bottom: 10px; left: 72%; transform: translateX(-50%); padding: 10px 20px; background-color: black; color:rgb(230, 197, 12); text-decoration: none; font-weight: bold;border-radius: 13%;">
                ACHETER
            </a>
        </div>
        <div style="position: relative; width: 350px;">
            <img src="img/400G.jpg" alt="Achat" class="ica" style="">
            <a href="" data-bs-toggle="modal" data-bs-target="#quatrecent" style="position: absolute; bottom: 10px; left: 72%; transform: translateX(-50%); padding: 10px 20px; background-color: black; color:rgb(230, 197, 12); text-decoration: none; font-weight: bold;border-radius: 13%;">
                ACHETER
            </a>
        </div>
        <div style="position: relative; width: 350px;">
            <img src="img/600G.jpg" alt="Achat" class="ica" style="">
            <a href="" data-bs-toggle="modal" data-bs-target="#sixcent" style="position: absolute; bottom: 10px; left:72%; transform: translateX(-50%); padding: 10px 20px; background-color: black; color: rgb(230, 197, 12); text-decoration: none; font-weight: bold;border-radius: 13%;">
                ACHETER
            </a>
        </div>
        
    </section>

<div class="modal fade" id="zaho" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"style="background-color: black;">
      <h5 class="modal-title color : yellow" id="exampleModalLabel" style="color: yellow; ">Paiement via Mvola</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <img src="img/mvola.png" alt="">
      </div>
      <div class="modal-body">
        <form action="traitement_paiement.php" method="POST">
            <input type="hidden" name="amount" value="1000">
            <label for="phone_number" class="labele">Montant : 1.000Ar (30mn) </label><br>
            <label for="phone_number" class="labele">Numéro télephone :</label><br>
            <input type="text" id="phone_number" name="phone_number" required><br><br>
            <dIv class="d-flex bd-highlight mb-3">
                <button type="button" class=" annule" data-bs-dismiss="modal" aria-label="Close">Annuler</button>
                <button class="mvola-button" type="submit">Envoyer</button>           
                
             </dIv>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="une" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: black;">
        <h5 class="modal-title color : yellow" id="exampleModalLabel" style= " color: yellow">Paiement via Mvola</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <img src="img/mvola.png" alt="">
        </div>
        <div class="modal-body">
          <form action="traitement_paiement.php" method="POST">
              <input type="hidden" name="amount" value="1500">
              <label for="phone_number" class="labele">Montant : 1.500Ar (1h) </label><br>
              <label for="phone_number" class="labele">Numéro télephone :</label><br>
              <input type="text" id="phone_number" name="phone_number" required><br><br>
              <dIv class="d-flex bd-highlight mb-3">
                  <button type="button" class=" annule" data-bs-dismiss="modal" aria-label="Close">Annuler</button>
                  <button class="mvola-button" type="submit">Envoyer</button>           
                  
               </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>

  <div class="modal fade" id="vinght" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: black">
          <h5 class="modal-title color : yellow" id="exampleModalLabel"style="color: yellow">Paiement via Mvola</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <img src="img/mvola.png" alt="">
        </div>
        <div class="modal-body">
          <form action="traitement_paiement.php" method="POST">
              <input type="hidden" name="amount" value="10000">
              <label for="phone_number" class="labele">Montant : 10.000Ar (20Go/30j) </label><br>
              <label for="phone_number" class="labele">Numéro télephone :</label><br>
              <input type="text" id="phone_number" name="phone_number" required><br><br>
              <dIv class="d-flex bd-highlight mb-3">
                  <button type="button" class=" annule" data-bs-dismiss="modal" aria-label="Close">Annuler</button>
                  <button class="mvola-button" type="submit">Envoyer</button>           
                  
               </dIv>
          </form>
        </div>
        
      </div>
    </div>
  </div>

  <div class="modal fade" id="cent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header"style="background-color: black;">
          <h5 class="modal-title color : yellow" id="exampleModalLabel"style="color: yellow">Paiement via Mvola</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <img src="img/mvola.png" alt="">
        </div>
        <div class="modal-body">
          <form action="traitement_paiement.php" method="POST">
              <input type="hidden" name="amount" value="50000">
              <label for="phone_number" class="labele">Montant : 50.000Ar (100Go/30j) </label><br>
              <label for="phone_number" class="labele">Numéro télephone :</label><br>
              <input type="text" id="phone_number" name="phone_number" required><br><br>
              <dIv class="d-flex bd-highlight mb-3">
                  <button type="button" class=" annule" data-bs-dismiss="modal" aria-label="Close">Annuler</button>
                  <button class="mvola-button" type="submit">Envoyer</button>           
                  
               </dIv>
          </form>
        </div>
        
      </div>
    </div>
  </div>

  <div class="modal fade" id="centiment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header"style="background-color: black;">
          <h5 class="modal-title color :  yellow" id="exampleModalLabel"style="color: yellow">Paiement via Mvola</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <img src="img/mvola.png" alt="">
        </div>
        <div class="modal-body">
          <form action="traitement_paiement.php" method="POST">
              <input type="hidden" name="amount" value="70000">
              <label for="phone_number" class="labele">Montant : 70.000Ar (150Go/30j) </label><br>
              <label for="phone_number" class="labele">Numéro télephone :</label><br>
              <input type="text" id="phone_number" name="phone_number" required><br><br>
              <dIv class="d-flex bd-highlight mb-3">
                  <button type="button" class=" annule" data-bs-dismiss="modal" aria-label="Close">Annuler</button>
                  <button class="mvola-button" type="submit">Envoyer</button>           
                  
               </dIv>
          </form>
        </div>
        
      </div>
    </div>
  </div>

  <div class="modal fade" id="deuxcent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header"style="background-color: black;">
          <h5 class="modal-title color :  yellow" id="exampleModalLabel"style="color: yellow">Paiement via Mvola</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <img src="img/mvola.png" alt="">
        </div>
        <div class="modal-body">
          <form action="traitement_paiement.php" method="POST">
              <input type="hidden" name="amount" value="100000">
              <label for="phone_number" class="labele">Montant : 100.000Ar (200Go/30j) </label><br>
              <label for="phone_number" class="labele">Numéro télephone :</label><br>
              <input type="text" id="phone_number" name="phone_number" required><br><br>
              <dIv class="d-flex bd-highlight mb-3">
                  <button type="button" class=" annule" data-bs-dismiss="modal" aria-label="Close">Annuler</button>
                  <button class="mvola-button" type="submit">Envoyer</button>           
                  
               </dIv>
          </form>
        </div>
        
      </div>
    </div>
  </div>

  <div class="modal fade" id="quatrecent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header"style="background-color: black;">
          <h5 class="modal-title color :  yellow" id="exampleModalLabel"style="color: yellow">Paiement via Mvola</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <img src="img/mvola.png" alt="">
        </div>
        <div class="modal-body">
          <form action="traitement_paiement.php" method="POST">
              <input type="hidden" name="amount" value="150000">
              <label for="phone_number" class="labele">Montant : 150.000Ar (400Go/30j) </label><br>
              <label for="phone_number" class="labele">Numéro télephone :</label><br>
              <input type="text" id="phone_number" name="phone_number" required><br><br>
              <dIv class="d-flex bd-highlight mb-3">
                  <button type="button" class=" annule" data-bs-dismiss="modal" aria-label="Close">Annuler</button>
                  <button class="mvola-button" type="submit">Envoyer</button>           
                  
               </dIv>
          </form>
        </div>
        
      </div>
    </div>
  </div>

  <div class="modal fade" id="sixcent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header"style="background-color: black;">
          <h5 class="modal-title color :  yellow" id="exampleModalLabel"style="color: yellow">Paiement via Mvola</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <img src="img/mvola.png" alt="">
        </div>
        <div class="modal-body">
          <form action="traitement_paiement.php" method="POST">
              <input type="hidden" name="amount" value="200000">
              <label for="phone_number" class="labele">Montant : 200.000Ar (600Go/30j) </label><br>
              <label for="phone_number" class="labele">Numéro télephone :</label><br>
              <input type="text" id="phone_number" name="phone_number" required><br><br>
              <dIv class="d-flex bd-highlight mb-3">
                  <button type="button" class=" annule" data-bs-dismiss="modal" aria-label="Close">Annuler</button>
                  <button class="mvola-button" type="submit">Envoyer</button>           
                  
               </dIv>
          </form>
        </div>
        
      </div>
    </div>
  </div>




<h1></h1>
<script src="bootstrap-5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
