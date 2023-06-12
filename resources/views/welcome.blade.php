<!DOCTYPE html>
<html>
<head>
    <title>Ma barre de navigation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            padding: 0;
            margin: 0;
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 9999;
            background-color: #333;
            padding: 10px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .navbar-logo {
            margin-right: auto;
        }

        .navbar a {
            margin-left: 10px;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            display: flex;
            align-items: center;
            padding-right: 30px;
        }

        .navbar a:hover {
            color: #f8f8f8;
        }

        .navbar .active {
            color: #f8f8f8;
        }

        .navbar i {
            margin-right: 5px;
        }

        .carousel {
            margin-top: 0; /* Ajustez la valeur en fonction de la hauteur de votre barre de navigation */
        }

        .carousel-slide {
            text-align: center;
            position: relative;
        }

        .carousel-slide img {
            max-width: 100%;
            height: auto;
        }

        .slick-dots {
            display: none; /* Masquer les indicateurs de diapositives */
        }
        /* Styles pour la section main-search-container */
.main-search-container {
  background-color: #f5f5f5;
  padding: 20px 0 20px;
}

.lgx-inner {
  margin: 0 auto;
  max-width: 1200px;
  padding: 0 15px;
}

.container {
  width: 100%;
}

.main-search {
  text-align: center;
  margin-top: 20px;
}

.event-search {
  display: inline-block;
  margin-right: 10px;
}

.form-control {
  width: 500px;
  height: 30px;
  margin-bottom: 20px;
}

.lgx-btn {
  background-color: #000;
  color: #fff;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
}

.lgx-btn-black {
  background-color: #000;
  color: #fff;
}

.search-input {
  border: 2px solid #000;
}

.card-section {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card-image {
            max-width: 100%;
            height: auto;
            max-height: 150px;
        }

        .card {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-gap: 10px;
            border: 1px solid black;
            padding: 10px;
            background-color: #F5F5F5;
            margin: 70px;
        }

        .card img {
            width: 100%;
            height: auto;
        }

        .card-text {
            text-align: center;
        }

        .transparent-section {
      background-image: url('https://sunuevents.sn/frontend-assets?path=img%2Fbg-pattern.png'); /* Remplacez 'chemin/vers/mon-image.jpg' par le chemin d'accès à votre image */
      background-repeat: no-repeat;
      background-size: cover;
      background-color: transparent;
      width: 100%;
      height: 500px;
     
    }

    .box {
      position: relative;
      display: inline-block;
    }

    .box img {
      width: 400px;
      height: 400px;
    }

    .box:before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      box-shadow: 0 0 10px 5px rgba(255, 255, 255, 0.5);
      opacity: 0;
      transition: opacity 0.3s ease-in-out;
    }

    .box:hover:before {
      opacity: 1;
    }

    .inline-step {
    display: inline-block;
    margin-right: 90px; /* Ajouter l'espace souhaité */
}


#lgx-footer {
  padding: 70px 0;
  background: #000;
  color: #fff;
}

.lgx-footer-single {
  margin-bottom: 40px;
}

.footer-brand-logo {
  width: 100px;
  height: auto;
}

.footer-title {
  color: #fff;
  font-size: 18px;
  font-weight: 700;
  margin-bottom: 20px;
}

.col-grey {
  color: #999;
}

.date {
  font-size: 16px;
  font-weight: 700;
  margin-bottom: 10px;
}

.text {
  margin-bottom: 10px;
}

.lgx-social-footer li {
  display: inline-block;
  margin-right: 15px;
}

.lgx-social-footer a {
  color: #fff;
  font-size: 18px;
}

.map-link {
  color: #fff;
  display: inline-block;
  margin-top: 10px;
}

.lgx-footer-bottom {
  padding-top: 20px;
  border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.lgx-copyright {
  font-size: 14px;
  color: #999;
  text-align: center;
}

.lgx-copyright a {
  color: #fff;
  font-weight: 700;
}


.lgx-footer-area {
  display: flex;
  justify-content: space-between;
}

.lgx-footer-single {
  flex: 1;
}



    </style>
</head>
<body>
    <div class="navbar">
        <div class="navbar-logo">
            <img src="https://img.icons8.com/?size=512&id=fKEiNQ1jV0gq&format=png" alt="" width="50" height="50">
        </div>
        <a href="/dashboard" class="active"></a>
        <a href="/register"><i class="fas fa-user-plus"></i>Acheter Un Billet</a>
        <a href="/categorie"><i class="fas fa-tags"></i> Catégories</a>
        <a href="/evenements"><i class="fas fa-calendar-alt"></i>Parcourir Événements</a>
    </div>

    <section class="carousel">
        <div class="carousel-slide">
            <img src="https://transafrica.biz/wp-content/uploads/2020/03/festival-del-senegal-transafrica-gruppo-danza.jpg" alt="Image 1">
        </div>
        <div class="carousel-slide">
            <img src="https://www.etoiledereve-events.fr/content/uploads/2020/05/animation-evenement.jpg" alt="Image 1">
        </div>
        <div class="carousel-slide">
            <img src="https://th.bing.com/th/id/R.1a0995c0bbd0ecdac2584295e16dec27?rik=f6Ji3aMPuWEcCA&pid=ImgRaw&r=0" alt="Image 2">
        </div>
        <div class="carousel-slide">
            <img src="https://th.bing.com/th/id/R.4aa867637d22f5f2d55489e91bfda934?rik=9sRUMhRcm3dfnA&pid=ImgRaw&r=0" alt="Image 3">
        </div>
        <div class="carousel-slide">
            <img src="https://www.annecy.fr/uploads/Diaporama/ef/138_519_Fan-park-6.jpg" alt="Image 3">
        </div>
        <div class="carousel-slide">
            <img src="https://th.bing.com/th/id/R.e6e337157412a2d7656e3100b0e39c2b?rik=FX473cak%2b8M1Uw&pid=ImgRaw&r=0" alt="Image 3">
        </div>
        <div class="carousel-slide">
            <img src="https://1.bp.blogspot.com/-PGVPiMB9jtE/Va_LNJ74YJI/AAAAAAAANjg/4OhtK09X3Qc/s1600/SENE%2B1.jpg" alt="Image 1">
        </div>
    </section>

     <!-- Section main-search-container -->
   <!-- Section main-search-container -->
<section class="main-search-container"  >
    <div class="lgx-inner" >
        <div class="container" >
            <div class="row" style="border-top: 3px solid rgb(243, 138, 138); border-right: 3px solid  rgb(243, 138, 138); border-bottom: 3px solid  rgb(243, 138, 138); border-left: 3px solid  rgb(243, 138, 138);>
                <div class="col-12" >
                    <div class="main-search" >
                        <form class="form-inline" method="GET" action="https://sunuevents.sn/events">
                            <div class="form-group input-group event-search">
                                <span class="input-group-addon"><i class="fas fa-calendar-day"></i></span>
                                <input type="text" class="form-control search-input" name="search" placeholder="Tapez le nom de l'événement / le lieu / la ville">
                            </div>
                            <button type="submit" class="lgx-btn lgx-btn-black"><i class="fas fa-search"></i> Rechercher</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<br>

<div class="row">
    <div class="col-12">
        <div class="lgx-heading" style="margin-left: 500px">
            <h2 class="heading"><i class="fas fa-star"></i> Événements en vedette</h2>
        </div>
    </div>
</div>

<div class="card">
    <div>
        <img src="https://th.bing.com/th/id/R.807fb62f773cd56b7fd4b09b6023d5f8?rik=vDCLGZnII8PWMw&pid=ImgRaw&r=0" alt="Ma première photo">
        <p class="card-text">Texte pour la première photo</p>
    </div>
    <div>
        <img src="https://t3.ldh.be/z5WzkhQr9uOPJHvb4rzDJmhlv50=/0x446:3072x1982/1920x960/5c093ac7cd70fdc91bd3a8c5.jpg" alt="Ma deuxième photo">
        <p class="card-text">Texte pour la deuxième photo</p>
    </div>
    <div>
        <img src="https://i.ytimg.com/vi/tnicX8cd3_4/maxresdefault.jpg" alt="Ma troisième photo">
        <p class="card-text">Texte pour la troisième photo</p>
    </div>

    <div>
        <img src="https://th.bing.com/th/id/R.66ecb7bdfae1fe603ab518221e51129b?rik=HKC9Dxde4Q8%2fxg&pid=ImgRaw&r=0" alt="Ma première photo">
        <p class="card-text">Texte pour la première photo</p>
    </div>
    <div>
        <img src="https://th.bing.com/th/id/R.ab0bbc583cd62b489e01548c69db462a?rik=a77T4evT1HpG1w&riu=http%3a%2f%2fe-sushi.fr%2fimagearticle%2f2015%2f12%2f8079284-12591773-1024x768.jpg&ehk=MTqqpmYcYEdFUytBHvGksmrwm9ssqy%2fTJhBpTWMUV%2bE%3d&risl=&pid=ImgRaw&r=0" alt="Ma deuxième photo">
        <p class="card-text">Texte pour la deuxième photo</p>
    </div>
    <div>
        <img src="https://th.bing.com/th/id/R.ed78213c2f3286863224148bfbd83044?rik=BGawZEHrO%2f6CSA&riu=http%3a%2f%2fwww.evenementsacielouvert.com%2fmedia%2fimages%2ftypes-evenements-evenements-speciaux_2.jpg&ehk=lty%2fhyOkyiXSGkrpCwi97I8scttl2GYdoPuuIBxqySo%3d&risl=&pid=ImgRaw&r=0" alt="Ma troisième photo">
        <p class="card-text">Texte pour la troisième photo</p>
    </div>
</div>


<div class="section-btn-area">
    <a class="lgx-btn lgx-btn-red" style="margin-left: 550px;" href="https://sunuevents.sn/events"><i class="fas fa-calendar-day"></i> Voir tous les événements</a>
</div>


<br>


<section style="padding: 30px">
    <div class="transparent-section" style="display: flex; justify-content: center;">
      <div class="box" style="position: relative; display: inline-block; margin-right: 20px;">
        <img src="https://grandtheatregeneve.files.wordpress.com/2018/10/evenement-geneve.jpg" alt="Ma première photo">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 10px; text-align: center;">
          Votre texte ici
        </div>
      </div>
      <div class="box" style="position: relative; display: inline-block; margin-right: 20px;">
        <img src="https://www.francetvinfo.fr/image/759r5j7lu-22cf/1500/843/9254513.jpg" alt="Ma première photo">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 10px; text-align: center;">
          Votre texte ici
        </div>
      </div>
      <div class="box" style="position: relative; display: inline-block;">
        <img src="https://extremefest.eu/wp-content/uploads/2020/01/%C3%A9v%C3%A9nements.jpg" alt="Ma première photo">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 10px; text-align: center;">
          Votre texte ici
        </div>
      </div>
    </div>

    <div class="transparent-section" style="display: flex; justify-content: center;">
        <div class="box" style="position: relative; display: inline-block; margin-right: 20px;">
          <img src="https://3.bp.blogspot.com/-3blbSFmUlYU/WSVWon1nbFI/AAAAAAAAQ3g/me48LFYj1FYCNyBIXbitgg3xdqntoER3gCLcB/w1200-h630-p-k-no-nu/17635100_1296079347140855_8178366064161550908_o.jpg" alt="Ma première photo">
          <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 10px; text-align: center;">
            Votre texte ici
          </div>
        </div>
        <div class="box" style="position: relative; display: inline-block; margin-right: 20px;">
          <img src="https://la-colloc.co/espace-membre/events/area_444_f7a.jpg" alt="Ma première photo">
          <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 10px; text-align: center;">
            Votre texte ici
          </div>
        </div>
        <div class="box" style="position: relative; display: inline-block;">
          <img src="https://i.ytimg.com/vi/JLCMRH65vdY/maxresdefault.jpg" alt="Ma première photo">
          <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 10px; text-align: center;">
            Votre texte ici
          </div>
        </div>
      </div>
  </section>



  <div class="row">
    <div class="col-12">
        <div class="lgx-heading" style="margin-left: 500px">
            <h2 class="heading"><i class="fas fa-star"></i> Événements en Venir</h2>
        </div>
    </div>
</div>




<div class="card">
    <div>
        <img src="https://www.au-senegal.com/local/cache-vignettes/L1200xH630/faff1fc370a17fa090a3ed61bc7aed-e308c.png" alt="Ma première photo">
        <p class="card-text">Texte pour la première photo</p>
    </div>
    <div>
        <img src="https://www.au-senegal.com/local/cache-vignettes/L640xH336/0f6d0fb7a2f93174ed66d8a073a9c3-111cb.jpg" alt="Ma deuxième photo">
        <p class="card-text">Texte pour la deuxième photo</p>
    </div>
    <div>
        <img src="https://www.seneplus.com/sites/default/files/raw_photos/phototoSeneplus.jpeg" alt="Ma troisième photo">
        <p class="card-text">Texte pour la troisième photo</p>
    </div>

    <div>
        <img src="https://th.bing.com/th/id/OIP.HdTl7DGzL_uAEh9NPTPxVQHaEL?pid=ImgDet&rs=1" alt="Ma première photo">
        <p class="card-text">Texte pour la première photo</p>
    </div>
    <div>
        <img src="https://images.midilibre.fr/api/v1/images/view/5b29094b8fe56f17bf499605/large/image.jpg" alt="Ma deuxième photo">
        <p class="card-text">Texte pour la deuxième photo</p>
    </div>
    <div>
        <img src="https://th.bing.com/th/id/R.2d9ec57b906eb88a8a7755a09dc44d28?rik=5NMs%2fTB49M12qg&pid=ImgRaw&r=0" alt="Ma troisième photo">
        <p class="card-text">Texte pour la troisième photo</p>
    </div>
</div>

<div class="section-btn-area">
    <a class="lgx-btn lgx-btn-red" style="margin-left: 550px; background-color:brown" href="https://sunuevents.sn/events"><i class="fas fa-calendar-day"></i> Voir les événements</a>
</div>
  


  
<section>
    <div id="lgx-travelinfo" class="lgx-travelinfo">
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-heading">
                            <br>
                            <br>
                       <center> <h3 class="subheading">Comment ça marche</h3></center>    
                       <center> <h2 class="heading">Pour les clients</h2></center>     
                        </div>
                    </div>
                    <!--//main COL-->
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-travelinfo-content">
                            <div class="lgx-travelinfo-single inline-step">
                                &emsp13; &emsp13; &emsp13; &emsp13;  
                                &emsp13; &emsp13; &emsp13; &emsp13;  
                                &emsp13; &emsp13; &emsp13; &emsp13;  
                                <i class="fas fa-calendar-alt fa-4x"></i>
                                
                                <h3 class="title">&emsp13; &emsp13; &emsp13; &emsp13;  
                                &emsp13; &emsp13; 1. Choisir un événement</h3>
                                <p class="info">Inscrivez-vous, choisissez votre événement préféré.</p>
                            </div>
                            <div class="lgx-travelinfo-single inline-step">
                                 &emsp13; &emsp13; &emsp13; &emsp13;  
                                &emsp13; &emsp13; &emsp13; &emsp13;  
                                &emsp13; &emsp13; &emsp13; &emsp13;  
                                <i class="fas fa-ticket-alt fa-4x"></i>
                                
                                <h3 class="title">&emsp13; &emsp13; &emsp13; &emsp13;  
                                &emsp13; &emsp13; 2. Obtenir des billets</h3>
                                <p class="info">Achetez vos billets sur la page de l'événement.</p>
                            </div>
                            <div class="lgx-travelinfo-single inline-step">
                                 &emsp13; &emsp13; &emsp13; &emsp13;  
                                &emsp13; &emsp13; &emsp13; &emsp13;  
                                &emsp13; &emsp13; &emsp13; &emsp13;  
                                <i class="fas fa-walking fa-4x"></i>
                                
                                <h3 class="title">&emsp13; &emsp13; &emsp13; &emsp13;  
                                &emsp13; &emsp13; 3. Assister à l'événement</h3>
                                <p class="info">Allez assister à l'événement et amusez-vous.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//.ROW-->
            </div>
            <!-- //.CONTAINER -->
        </div>
    </div>
</section>

<br>










<footer>
    <div id="lgx-footer" class="lgx-footer-black">
        <div class="lgx-inner-footer">
            <div class="container-fluid">
                <div class="lgx-footer-area">
                    <div class="lgx-footer-single footer-brand">
                        <img class="footer-brand-logo" src="/storage/settings/May2022/7ftYOvW6NqgakEQmHb4a.jpeg" alt="" />
                        <p class="footer-brand-name"></p>
                        <p class="footer-brand-slogan"></p>
                    </div>
                    <div class="lgx-footer-single">
                        <h3 class="footer-title">Liens utiles</h3>
                        <ul class="list-unstyled">
                            <li><a class="col-grey" href="https://sunuevents.sn/about">À propos</a></li>
                            <li><a class="col-grey" href="https://sunuevents.sn/events">Événements</a></li>
                            <li><a class="col-grey" href="https://sunuevents.sn/blogs">Blogs</a></li>
                            <li><a class="col-grey" href="https://sunuevents.sn/terms">Termes et conditions</a></li>
                            <li><a class="col-grey" href="https://sunuevents.sn/privacy">Politique de confidentialité</a></li>
                        </ul>
                    </div>
                    <div class="lgx-footer-single">
                        <h3 class="footer-title">Contact</h3>
                        <a href="https://sunuevents.sn/contact">
                            <h4 class="date">Envoyez-nous un message</h4>
                        </a>
                        <address>9178 sacré cœur 3 Dakar Sénégal</address>
                        <p class="text"><i class="fas fa-phone-alt"></i> +221 77 792 50 46 / 221 77 722 56 56</p>
                        <p class="text"><i class="fas fa-envelope"></i> events.sn@gmail.com</p>
                        <a href="https://sunuevents.sn/contact" class="map-link">
                            <i class="fas fa-map-marked-alt" aria-hidden="true"></i> 
                            Retrouvez nous sur la carte
                        </a>
                    </div>
                    <div class="lgx-footer-single">
                        <h3 class="footer-title">Liens sociaux</h3>
                        <p class="text">Retrouvez-nous sur les plateformes sociales</p>
                        <ul class="list-inline lgx-social-footer">
                            <li><a href="https://www.instagram.com/sunuevents_sn/" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                   
                    <div class="lgx-footer-single">
                        <h3 class="footer-title"><i class=""></i> Top Categories</h3>
                        <ul class="list-unstyled">
                            <li>
                                <a class="col-grey" target="_blank" href="https://sunuevents.sn/events?category=Soir%C3%A9es&amp;page=1">
                                    <i class=""></i> Soirées
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="lgx-footer-bottom">
                    <div class="lgx-copyright">
                        <p> 
                            <span>©</span> 2023 
                            <a href="https://sunuevents.sn">Events</a><br>
                            Events<strong>. Produit par <a href='https://www.alsysmedia.xyz' target='_blank'>Groupe 12</a></strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>



  


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.carousel').slick({
                dots: false, // Mettre à false pour masquer les indicateurs de diapositives
                arrows: false, // Retirer les flèches de navigation
                infinite: true,
                speed: 500,
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 2000
            });
        });
    </script>
</body>
</html>
