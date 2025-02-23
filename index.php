<!DOCTYPE html>
<html lang="en">
<head>
  
  <style>

i {
      margin-right: 8px; /* Espace entre l'icône et le texte */
      color:rgb(255, 255, 255); /* Couleur de l'icône */
    }







  .yas{
	 background-image: url('arriere-plan8.jpeg');
	  
	  
  }
  .bass{
	  width:140px;
	  height:35px;
	  border-radius:5px;
	  background-color:#a69712;
  color:black;}
	  .bla{
		  
	  }
  
  </style>
  
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homies Cars</title>
	
     <link rel="stylesheet" href="css/logo.css">
    <link rel="stylesheet" href="css/homies_carss.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.4.0-web/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&display=swap" rel="stylesheet">
  </head>
<body>
      
        <nav  style="background-color:#0000008a;">
            <div class="container nav-container">
                <img class="logo"  src="homielogo.png" alt="" width="180px"  >
                <ul class="nav-link">
                    <li><a href="" style="--i:1;" class="active">Tableau de bord</a></li>
                    <li><a href="vehicules.php" style="--i:2;">Produit</a></li>
                    <li><a href="reservation.php" style="--i:3;">Achat</a></li>
					
                    <button class="bass">
                    <li class="black"><i class="fas fa-sign-in-alt" style="margin-left:-20px;"></i><a href="login.php" style="--i:5;"><div style="font-family: 'Dancing Script', cursive;margin-right:-8px;">Se connecter</div></a></li>
					
					</button>
          <button class="bass">
         <li> <i class="fas fa-phone" style="margin-left:-20px;"></i><a href="contact.php" style="--i:4;"> <div style="font-family: 'Dancing Script', cursive; cursive;margin-right:-8px;">Contact-Us</div></a></li>
  
  </button>
                    
                </ul>
               
               

                 
          
 
        </nav>

        <header class="yas">
            <div class="container header-container">
                <div class="header-left">
				
                    <h1 style="color:#3b3628;">Acheter Votre Voiture </h1>
					
                   <pre>  <h3 style="color:#947e3b;">Moins CHER Chez Nous!</h3></pre>
                    <p style="color:white;font-family: 'Pacifico', cursive;">
                        Découvrez un vaste choix de véhicules de qualité, adaptés à tous les besoins et budgets. Chez AutoHomies, nous sommes passionnés par l'excellence automobile et l'expérience client. Profitez de :
   <br> Prêt à prendre la route ?     <br>Cliquez sur 'Acheter maintenant' et lancez-vous dans votre prochaine aventure en toute élégance.   <br>
                    </p>
                    <a href="reservation.php" class="btn">Acheter Maintenant</a>
                </div>
                <div class="header-right">
                    <div class="sq-box">
                        <img src="images/im8.png" alt="">
                    </div>
                </div>
            </div>
            <div class="sq-box2">
              
              </div>
        </header>
       
        <footer>
            
			
     <!-- 
        - #FEATURED CAR
      -->

      <section class="section featured-car" id="featured-car">
        <div class="container">

          <div class="title-wrapper">
            <h2 style="color:#d6c799"class="h2 section-title">Featured cars</h2>
            
            <a href="login.php" class="featured-car-link">
              
              <span>View more</span>

              <ion-icon name="arrow-forward-outline"></ion-icon>
            </a>
          </div>

          <ul class="featured-car-list">

            <li>
              <div class="featured-car-card" style="box-shadow: 0px 1px 20px 7px rgb(55 106 132 / 74%);">

                <figure class="card-banner">
                  <img src="toyota.jpeg" alt="Toyota RAV4 2021" loading="lazy" width="440" height="300"
                    class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                      <a href="#">Toyota</a>
                    </h3>

                    <data class="year" value="2021">2021</data>
                  </div>

                  <ul class="card-list">

                    <li class="card-list-item">
                      <ion-icon name="people-outline"></ion-icon>

                      <span class="card-item-text">4 People</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="flash-outline"></ion-icon>

                      <span class="card-item-text">Hybrid</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="speedometer-outline"></ion-icon>

                      <span class="card-item-text">6.1km / 1-litre</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="hardware-chip-outline"></ion-icon>

                      <span class="card-item-text">Automatic</span>
                    </li>

                  </ul>

                  <div class="card-price-wrapper">

                    <p style="margin-left:40px" class="card-price">
                      
                    </p>

                    <button class="btn fav-btn" aria-label="Add to favourite list">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <a href="login.php"><button class="btn">Observer</button></a>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="featured-car-card" style="box-shadow: 0px 1px 20px 7px rgb(55 106 132 / 74%);">

                <figure class="card-banner">
                  <img src="bmw.jpeg" alt="BMW 3 Series 2019" loading="lazy" width="440" height="300"
                    class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                      <a href="#">BMW</a>
                    </h3>

                    <data class="year" value="2019">2019</data>
                  </div>

                  <ul class="card-list">

                    <li class="card-list-item">
                      <ion-icon name="people-outline"></ion-icon>

                      <span class="card-item-text">4 People</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="flash-outline"></ion-icon>

                      <span class="card-item-text">Gasoline</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="speedometer-outline"></ion-icon>

                      <span class="card-item-text">8.2km / 1-litre</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="hardware-chip-outline"></ion-icon>

                      <span class="card-item-text">Automatic</span>
                    </li>

                  </ul>

                  <div class="card-price-wrapper">

                    <p style="margin-left:40px" class="card-price">
                      
                    </p>

                    <button class="btn fav-btn" aria-label="Add to favourite list">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <a href="login.php"><button class="btn">Observer</button></a>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="featured-car-card" style="box-shadow: 0px 1px 20px 7px rgb(55 106 132 / 74%);">

                <figure class="card-banner">
                  <img src="Audi.jpeg" alt="RS7-2020" loading="lazy" width="440"
                    height="300" class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                      <a href="#">Audi RS7</a>
                    </h3>

                    <data class="year" value="2020">2020</data>
                  </div>

                  <ul class="card-list">

                    <li class="card-list-item">
                      <ion-icon name="people-outline"></ion-icon>

                      <span class="card-item-text">4 People</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="flash-outline"></ion-icon>

                      <span class="card-item-text">Gasoline</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="speedometer-outline"></ion-icon>

                      <span class="card-item-text">13.6km / 1-litre</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="hardware-chip-outline"></ion-icon>

                      <span class="card-item-text">Automatic</span>
                    </li>

                  </ul>

                  <div class="card-price-wrapper">

                    <p style="margin-left:40px" class="card-price">
                      
                    </p>

                    <button class="btn fav-btn" aria-label="Add to favourite list">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <a href="login.php"><button class="btn">Observer</button></a>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="featured-car-card" style="box-shadow: 0px 0px 20px 3px rgb(238 238 8 / 74%);">

                <figure class="card-banner">
                  <img src="mercedes.jpeg" alt="mercedes 2020" loading="lazy" width="440"
                    height="300" class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                      <a href="#">Mercedes Benz</a>
                    </h3>

                    <data class="year" value="2020">2020</data>
                  </div>

                  <ul class="card-list">

                    <li class="card-list-item">
                      <ion-icon name="people-outline"></ion-icon>

                      <span class="card-item-text">4 People</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="flash-outline"></ion-icon>

                      <span class="card-item-text">Gasoline</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="speedometer-outline"></ion-icon>

                      <span class="card-item-text">10.7km / 1-litre</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="hardware-chip-outline"></ion-icon>

                      <span class="card-item-text">Automatic</span>
                    </li>

                  </ul>

                  <div class="card-price-wrapper">

                    <p style="margin-left:40px;" class="card-price">
                      
                    </p>

                    <button class="btn fav-btn" aria-label="Add to favourite list">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <a href="login.php"><button class="btn">Observer</button></a>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="featured-car-card" style="box-shadow: 0px 0px 20px 3px rgb(238 238 8 / 74%);">

                <figure class="card-banner">
                  <img src="Porsch.jpeg" alt="Porshe" loading="lazy" width="440"
                    height="300" class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                      <a href="#">Porshe</a>
                    </h3>

                    <data class="year" value="2021">2021</data>
                  </div>

                  <ul class="card-list">

                    <li class="card-list-item">
                      <ion-icon name="people-outline"></ion-icon>

                      <span class="card-item-text">4 People</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="flash-outline"></ion-icon>

                      <span class="card-item-text">Gasoline</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="speedometer-outline"></ion-icon>

                      <span class="card-item-text">12.6km / 1-litre</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="hardware-chip-outline"></ion-icon>

                      <span class="card-item-text">Automatic</span>
                    </li>

                  </ul>

                  <div class="card-price-wrapper">

                    <p style="margin-left:40px" class="card-price">
                     
                    </p>

                    <button class="btn fav-btn" aria-label="Add to favourite list">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                  <a href="login.php"><button class="btn">Observer</button></a>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="featured-car-card" style="box-shadow: 0px 0px 20px 3px rgb(238 238 8 / 74%);">

                <figure class="card-banner">
                  <img src="golf.jpeg" alt="Golf" loading="lazy" width="440" height="300"
                    class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                      <a href="#">Volkswagen Golf</a>
                    </h3>

                    <data class="year" value="2019">2019</data>
                  </div>

                  <ul class="card-list">

                    <li class="card-list-item">
                      <ion-icon name="people-outline"></ion-icon>

                      <span class="card-item-text">4 People</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="flash-outline"></ion-icon>

                      <span class="card-item-text">Gasoline</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="speedometer-outline"></ion-icon>

                      <span class="card-item-text">10.2km / 1-litre</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="hardware-chip-outline"></ion-icon>

                      <span class="card-item-text">Manuel</span>
                    </li>

                  </ul>

                  <div class="card-price-wrapper">

                    <p style="margin-left:40px" class="card-price">
                      
                    </p>

                    <button class="btn fav-btn" aria-label="Add to favourite list">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <a href="login.php"><button class="btn">Observer</button></a>

                  </div>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

    
	 <!-- Section des logos -->
	
    <div class="logo-container">
        <img src="Alogo.png" alt="Logo Audi">
        <img src="Mlogo.png" alt="Logo Mercedes">
        <img src="Plogo.png" alt="Logo Porsche">
        <img src="Vlogo.png" alt="Logo BMW">
        <img src="Tlogo.png" alt="Log TOYOTA">
    </div>




    
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Entreprise</h4>
  	 			<ul>
  	 				<li><a href="#">À propos de nous</a></li>
  	 				<li><a href="#">nos services</a></li>
  	 				<li><a href="#">Politique de confidentialité</a></li>
  	 				<li><a href="#">Programme d'affiliation</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Obtenir de l'aide</h4>
  	 			<ul>
  	 				<li><a href="#">Maroc Oujda</a></li>
  	 				<li><a href="#">+212 642420376</a></li>
  	 				<li><a href="#">FIX 0576874356</a></li>
  	 				<li><a href="#">Homiescars@gmail.com</a></li>
  	 				<li><a href="#">options de paiment</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Options</h4>
  	 			<ul>
  	 				<li><a href="#">Homies Partenaires</a></li>
  	 				<li><a href="#">Homies Blog</a></li>
  	 				<li><a href="#">Groupe Homies</a></li>
  	 				<li><a href="#">Recrutement</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Suivez-nous</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
      <!-- <img
       class="card__img"
       src="C:\Users\User\Downloads\aoostrore.png"
       alt="Snowy Mountains"
     />-->
       <p class="footer-company-name">Homies cars © 2024 tous les droits sont réservés</p>
	   
	   
	   

  

        </footer>
       
</body>
</html>