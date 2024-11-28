<!DOCTYPE <!DOCTYPE html>

<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"content="width =device-width, initial-scale=1.0">
        <title>RESEAU_SPAGHETTI</title>
        <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

        <!--les liens des polices-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

        <!--lien de css-->
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <!--les entetes de notre application -->
        <header>
            <div id="menu-bar" class="fas fa-bars"></div>
           <a href="#" class="Logo"><span>RESEAU</span>_SPAGHETTI</a>
           <nav class="navbar">
           <a href="#home">Accueil</a>
           <a href="#packages">En gros</a>
           <a href="#packages">Detail</a>
           <a href="#review">Revues</a>
           <a href="#contact">Contact</a>
</nav>

<div class="icons">
    <i class="fas fa-search" id="search-btn"></i>
    <i class="fas fa-user" id="login-btn"></i>
</div>

<form action=" " class="search-bar-container">
    <input type="search" id="search-bar" placeholder="recherche ici...">
    <label for="search-bar" class="fas fa-search"></label>
</form>
        </header>

<!--interface de connexion-->
<div class="login-form-container">
    <i class="fas fa-times" id="form-close"></i>
    <form action="">
        <h3>Connexion</h3>
        <input type ="email" class="box"placeholder="Entrez votre email">
        <input type ="password" class="box"placeholder="Entrez votre mot de passe">
        <input type ="submit" value="Se Connecter" class="btn">
        <input type="checkbox" id="remember">
        <label for="remember">me rappeler</label>
        <p>mot de passe oublié ? <a href="#">clique ici !!</a></p>
        <p>vous n'avez pas de compte ? <a href="#">Créer maintenant</a></p>
    </form>
</div>

<!-- debut de la sexion de la page d acceuil-->
<section class="home"id="home">
<div class ="content">
<h3> Bienvenue sur RESEAU_SPAGHETTI</h3><br>
<p>Nous vous proposons des pattes alimentaires de qualité</p><br>
<p>Spaghetti Maman, c'est la reference</p><br>
<a href="#" class="btn">Decouvrir plus</a>
</div>
<div class="control">
    <span class="vid-btn active" data-src="img/video-1.mp4"></span>
    <span class="vid-btn" data-src="img/vid-2.mp4"></span>
    <span class="vid-btn" data-src="img/vid-3.mp4"></span>
    <span class="vid-btn" data-src="img/vid-4.mp4"></span>
    <span class="vid-btn" data-src="img/vid-5.mp4"></span>
</div>

<div class="video-container">
   <video src="img/video-1.mp4" id="video-slider" loop autoplay muted></video>
</div>

</section>
<!-- fin de la sexion de la page d acceuil-->



<!-- debut de la sexion de la galerie d acceuil-->

<section class="packages" id="packages">
<h1 class="heading">
    <span>E</span>
    <span>N</span>
    <span>_</span>
    <span>G</span>
    <span>R</span>
    <span>O</span>
    <span>S</span>
</h1>

<div class="box-container">
<div class="box">
<img src="img/image-01.jpg" alt=" ">
<div class="content">
<h3><i class="fas fa-store-alt"></i>Maman Rouge</h3>
<p>Detail : 200 FCFA.</p>
<p>En gros : 20.000 FCFA.</p>
<div class="price">10 ou plus : 15.000 FCFA <span>20.00FCFA</span></div>
<a href="#" class="btn">Reserver</a>
</div>
</div>

<div class="box">
<img src="img/image-00.jpg" alt=" ">
<div class="content">
<h3><i class="fas fa-store-alt"></i>Maman Vert</h3>
<p>Detail : 250 FCFA.</p>
<p>En gros : 25.000 FCFA.</p>
<div class="price">10 ou plus : 20.000 FCFA <span>25.00FCFA</span></div>
<a href="#" class="btn">Reserver</a>
</div>
</div>


<div class="box">
<img src="img/image-1.jpg" alt=" ">
<div class="content">
<h3><i class="fas fa-store-alt"></i>Maman rouge</h3>
<p>Detail : 250 FCFA.</p>
<p>En gros : 25.000 FCFA.</p>
<div class="price">10 ou plus : 20.000 FCFA <span>25.00FCFA</span></div>
<a href="#" class="btn">Reserver</a>
</div>
</div>

<div class="box">
<img src="img/image-2.jpg" alt=" ">
<div class="content">
<h3><i class="fas fa-store-alt"></i>Maman Vert</h3>
<p>Detail : 250 FCFA.</p>
<p>En gros : 25.000 FCFA.</p>
<div class="price">10 ou plus : 20.000 FCFA <span>25.00FCFA</span></div>
<a href="#" class="btn">Reserver</a>
</div>
</div>

<div class="box">
<img src="img/image-3.jpg" alt=" ">
<div class="content">
<h3><i class="fas fa-store-alt"></i>Maman Bleue</h3>
<p>Detail : 225 FCFA.</p>
<p>En gros : 25.000 FCFA.</p>
<div class="price">10 ou plus : 25.500 FCFA <span>25.00FCFA</span></div>
<a href="#" class="btn">Reserver</a>
</div>
</div>

<div class="box">
<img src="img/image-4.jpg" alt=" ">
<div class="content">
<h3><i class="fas fa-store-alt"></i>Maman rouge court</h3>
<p>Detail : 350 FCFA.</p>
<p>En gros : 35.000 FCFA.</p>
<div class="price">10 ou plus : 30.000 FCFA <span>35.00FCFA</span></div>
<a href="#" class="btn">Reserver</a>
</div>
</div>

<div class="box">
<img src="img/image-5.jpg" alt=" ">
<div class="content">
<h3><i class="fas fa-store-alt"></i>Maman rouge</h3>
<p>Detail : 250 FCFA.</p>
<p>En gros : 25.000 FCFA.</p>
<div class="price">10 ou plus : 20.000 FCFA <span>25.00FCFA</span></div>
<a href="#" class="btn">Reserver</a>
</div>
</div>

<div class="box">
<img src="img/image-6.jpg" alt=" ">
<div class="content">
<h3><i class="fas fa-store-alt"></i>Maman Bleue</h3>
<p>Detail : 250 FCFA.</p>
<p>En gros : 25.000 FCFA.</p>
<div class="price">10 ou plus : 20.000 FCFA <span>25.00FCFA</span></div>
<a href="#" class="btn">Reserver</a>
</div>
</div>

<div class="box">
<img src="img/image-7.jpg" alt=" ">
<div class="content">
<h3><i class="fas fa-store-alt"></i>Maman rouge</h3>
<p>Detail : 250 FCFA.</p>
<p>En gros : 25.000 FCFA.</p>
<div class="price">10 ou plus : 20.000 FCFA <span>25.00FCFA</span></div>
<a href="#" class="btn">Reserver</a>
</div>
</div>
</div>
</section>
<!-- fin de la sexion des galeries d acceuil-->



<!-- debut de la sexion des services d acceuil-->



<!-- fin de la sexion des services d acceuil-->

<!-- debut de la sexion galerie d acceuil-->


<!-- fin de la sexion des services d acceuil-->

<!-- debut de la sexion review d acceuil-->

<section class="review" id="review">
<h1 class="heading">
    <span>r</span>
    <span>e</span>
    <span>v</span>
    <span>u</span>
    <span>E</span>
    <span>S</span>
</h1>
<div class="swiper mySwiper review-slider">
    <div class="swiper-wrapper wrapper">
       <div class="swiper-slide">
        <div class="box">
            <img src="img/i-0.jpg"alt=" ">
            <h3>KABORE L. ISSOUF</h3>
            <p>Designer en figma</p>
            <P>Developpeur en FRONT END</p>
            <nm>Developpeur d'application mobile</p>
            <div class="stars">
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="far fa-star"></i>
            </div>
        </div>
       </div>
       <div class="swiper-slide">
        <div class="box">
            <img src="img/i-2.jpg"alt=" ">
            <h3>ZERBO T. HADI</h3>
            <p>Developpeur BACK END.</p>
            <div class="stars">
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="far fa-star"></i>
    <i class="far fa-star"></i>
            </div>
        </div>
       </div>
       <div class="swiper-slide">
        <div class="box">
            <img src="img/i-1.jpg"alt=" ">
            <h3>ZOUBGA R. SAMUEL</h3>
            <p>Ingénieur en réseaux et systèmes.</p>
            <div class="stars">
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="far fa-star"></i>
            </div>
        </div>
       </div>
    </div>
</div>
</section>

<!-- fin de la sexion des revues d acceuil-->

<!-- debut de la sexion contacts d acceuil-->

<section class="contact" id="contact">
<h1 class="heading">
    <span>n</span>
    <span>o</span>
    <span>u</span>
    <span>s</span>
    <span>_</span>
    <span>c</span>
    <span>o</span>
    <span>n</span>
    <span>t</span>
    <span>a</span>
    <span>c</span>
    <span>t</span>
    <span>e</span>
    <span>r</span>
</h1>
<div class="row">
    <div class="img">
        <img src="img/c-1.jpg" alt =" ">
    </div>
    <form action="">
     <div class="inputBox">
        <input type="text" placeholder="Votre Nom">
        <input type="email" placeholder="Votre Email">
     </div>
     <div class="inputBox">
     <input type="number" placeholder="Nombre de cartons">
     <input type="text" placeholder="Lieu">
     </div>
     <textarea placeholder="message" name="" cols="30" rows="10"></textarea>
    <input type="submit" class="btn" value="Envoyer message">
    </form>
</div>
</section>


<!-- fin de la sexion des contacts d acceuil-->

<!-- debut de la sexion sliders d acceuil-->

<!-- fin de la sexion des sliders d acceuil-->

<!-- debut de la sexion pied de page -->
<section class="footer">
<div class="box-container">
<div class="box">
<h3>a propos de nous</h3>
<p>Reseau_spaguetti est un reseau qui contient les produits pattes alimentaires Maman.</p>
</div>
<div class="box">
    <h3>locations</h3>
    <a href="#">ouaga</a>
    <a href="#">bobo</a>
    <a href="#">koudougou</a>
</div>
<div class="box">
    <h3>nos liens</h3>
    <a href="#">Accueil</a>
    <a href="#">Vente</a>
    <a href="#">Revues</a>
    <a href="#">Contacts</a>
</div>
<div class="box">
    <h3>suivez</h3>
    <a href="#">Tiktok</a>
    <a href="#">Youtub</a>
    <a href="#">Facebook</a>
</div>
</div>
<h1 class="credit">Cree par <span>@K.B.Z_group</span> pour Spaghetti Maman</h1>
</section>










































<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <!--lien de java script-->
        <script src="main.js">


        </script>
    </body>

</html>
