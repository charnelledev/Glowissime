<?php
session_start();
require_once "database.php";
$message = $_SESSION['message'] ?? '';
$success = $_SESSION['success'] ?? false;
// Nettoyage
unset($_SESSION['message'], $_SESSION['success']);

?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Glowissime</title>
  <!-- Fusion de "glow" (éclat) + suffixe "issime" = éclat extrême. -->
  <link rel="stylesheet" href="style.css"/>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
  <header class="navbar-fixed">


          <div class="logo">
            <img src="images/logo.png" alt="Logo Divine Beauty" />
            <span>Glowissime</span>
          </div> 
        <!-- Icône menu burger -->
    <div class="menu-toggle" id="menu-toggle">&#9776;</div>

    <nav id="navbar">
      <ul>
        <li><a href="#accueil">Accueil</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#galerie">Galerie</a></li>
         <li><a href="#temoignages">Témoignages</a></li>
        <li><a href="#reservation">Réservation</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  
  <div class="conten">
    <section id="accueil" class="hero">

       <section class="slogan-animation" style="text-align: center; padding: 30px 10px;">
        <h1 style="font-size: 3.8rem; font-weight: bold;">
          <span id="target" style="display: inline-block;"></span>
        </h1>
      </section> 

    <p>Soins du visage, maquillage, manucure et bien plus encore...</p>
  </section>

  <section id="services" class="nos-services">

    <video autoplay muted loop playsinline class="bg-video">
      <source src="video/b2cba8dc967f960561759efeeff6d11b.mp4" type="video/mp4">
      <!-- Votre navigateur ne supporte pas les vidéos HTML5. -->
    </video>
   
    <div class="content">
    <h2 style="--i: 1">Nos Services</h2>
    <ul>
      <li style="--i: 2">💆 Soins du visage</li>
      <li style="--i: 3">💅 Manucure & Pédicure</li>
      <li style="--i: 4">💄 Maquillage professionnel</li>     
      <li style="--i: 4">💇 Coiffure de qualite</li>
    </ul>
  </div>
  </section>
</div>
  <section id="galerie">
    <h2>Galerie</h2>
    <div class="gallery">
      
              
              <img src="images/téléchargement (9).jpg" alt="Soins visage"   class="image-hover-zoom image-hover-blur" />
              <img src="images/image/Masque de boue purifiante.jpg" alt="Soins visage"   class="image-hover-zoom image-hover-blur" />

              <img src="images/coiffure/téléchargement (46).jpg" class="image-hover-zoom image-hover-blur" />
              <img src="images/coiffure/téléchargement (32).jpg" class="image-hover-zoom image-hover-blur">
              
              <img src="images/téléchargement (5).jpg" alt="Maquillage" class="image-hover-zoom image-hover-blur" />
             
              <img src="images/téléchargement (60).jpg" alt="Maquillage" class="image-hover-zoom image-hover-rotate" />
             
              <img src="images/coiffure/𝐏𝐫𝐞𝐭𝐭𝐲𝐋𝐢𝐭𝐭𝐥𝐞𝐁𝐱𝐫𝐛𝐢𝐞.jpg"class="image-hover-zoom image-hover-rotate">

              <img src="images/téléchargement (6).jpg" alt="Manucure" 
              class="image-hover-zoom image-hover-rotate "/>
            
              <img src="images/image/téléchargement (30).jpg" alt="Manucure" 
              class="image-hover-zoom image-hover-rotate "/>

              <img src="images/coiffurel/téléchargement (53).jpg" class="image-hover-zoom image-hover-rotate"/>
              

              <img src="images/téléchargement (41).jpg" class="image-hover-zoom image-hover-shadow "/>
              <img src="images/téléchargement (42).jpg" class="image-hover-zoom image-hover-blur"/>

              
      </div>

    <button class="btn"><a href="galerie.html">voir plus</a></button>
  </section>
  <section class="form-section fade-in">
    <!-- Patronne + Réservation -->
    <div class="row">
      <div class="image-box">
        <img src="profil/Girl Squad Media & Photo is ready to help take your brand to the next level_.jpg" class="image-hover-rotate" alt="Reine Sira" />
        <div class="caption fade-in">
          <h3>Reine Sira</h3>
          <p>"La beauté, un héritage qu'on sublime.</p>
        </div>
      </div>
      <div class="form-container fade-in">
        
     <?php if ($message): ?>
  <div id="alert-message" class="transition-opacity duration-500 fixed top-5 left-1/2 transform -translate-x-1/2 z-50 p-4 rounded-lg shadow-lg text-white <?php echo $success ? 'bg-green-500' : 'bg-red-500'; ?>">
    <?php echo $message; ?>
  </div>
<?php endif; ?>
  <h2>reservation</h2>
<form method="POST" action="reservation.php">
  <input type="text" name="nom" placeholder="Votre nom" required />
  <input type="email" name="email" placeholder="Votre email" required />
  <input type="date" name="date" required />
  <select name="service" required>
    <option value="">Choisir un service</option>
    <option>Soins du visage</option>
    <option>Manucure</option>
    <option>Maquillage</option>
    <option>Coiffure</option>
  </select>
  <button type="submit">Réserver</button>
</form>

      </div>
    </div>
  
    <!-- Équipe + Contact -->
    <div class="row">
      <div class="image-box fade-in">
        <img src="profil/téléchargement (58).jpg" class="image-hover-rotate image-hover-combo " alt="Équipe beauté" />
        <div class="caption">
          <h3>Les Mains Magiques</h3>
          <p>"Des mains expertes pour sublimer votre beauté."</p>
        </div>
      </div>
      <div class="form-container fade-in">
        <h2>Nous contacter</h2>
        <form id="contact-form" action="contact.php" method="POST">
          <input type="text" name="nom" placeholder="Votre nom" required />
          <input type="email" name="email" placeholder="Votre email" required />
          <textarea placeholder="Votre message" name="message"></textarea>
          <button type="submit">Envoyer</button>
        </form>
      </div>
    </div>
  </section>
    
   <!-- Témoignages -->
<section id="temoignages" class="section">
    <h2>Avis de nos clientes</h2>
    <div class="testimonials">
      <!-- Témoignage 1 -->
      <div class="testimonial" style="--i:0">
        <img src="profil/02a11428-a359-4bd7-8dbf-95c2242c1101.jpg" alt="Sarah" class="client-photo" />
        <p>"Un service exceptionnel et un accueil chaleureux !"</p>
        <div class="stars">★★★★★</div>
        <span>- Sarah</span>
      </div>
      
      <!-- Témoignage 2 -->
      <div class="testimonial" style="--i:1">
        <img src="profil/05be3369-6a53-4424-8803-76eb6748c2c2.jpg"  alt="Amélie" class="client-photo" />
        <p>"Je me sens comme neuve après chaque visite."</p>
        <div class="stars">★★★★☆</div>
        <span>- Amélie</span>
      </div>
      
      <!-- Témoignage 3 -->
      <div class="testimonial" style="--i:2">
        <img src="profil/18d74c9a-86da-478a-a986-b5f1c3ebb973.jpg" alt="Lina" class="client-photo" />
        <p>"Un endroit paisible et apaisant pour prendre soin de soi."</p>
        <div class="stars">★★★★★</div>
        <span>- Lina</span>
      </div>
      
      <!-- Témoignage 4 -->
      <div class="testimonial" style="--i:3">
        <img src="profil/19b224c0-5917-494a-9776-91a8e6ca082e.jpg" alt="Clara" class="client-photo" />
        <p>"Coiffure impeccable, rapide et professionnelle. Je recommande sans hésiter."</p>
        <div class="stars">★★★★☆</div>
        <span>- Clara</span>
      </div>
      
      <!-- Témoignage 5 -->
      <div class="testimonial" style="--i:4">
        <img src="profil/1dcb7828-c3bd-4b22-b06d-e670c732812a.jpg" alt="Marie" class="client-photo" />
        <p>"Une ambiance parfaite et des soins de qualité."</p>
        <div class="stars">★★★★★</div>
        <span>- Marie</span>
      </div>
      
      <!-- Témoignage 6 -->
      <div class="testimonial" style="--i:5">
        <img src="profil/32299839-c8a8-4c9b-9765-45c942c09a4a.jpg" alt="Eva" class="client-photo" />
        <p>"Je recommande à 100%, tout est parfait !"</p>
        <div class="stars">★★★★☆</div>
        <span>- Eva</span>
      </div>
      
      <!-- Témoignage 7 -->
      <div class="testimonial" style="--i:6">
        <img src="profil/3c908e30-a63c-487b-8dae-811935f59270.jpg"  alt="Julie" class="client-photo" />
        <p>"Des résultats incroyables, je reviendrai bientôt !"</p>
        <div class="stars">★★★★★</div>
        <span>- Julie</span>
      </div>
      <!-- Témoignage 8-->
      <div class="testimonial"style="--i:7">
        <img src="profil/54b2e0e6-5bd9-47a7-b3e3-c0dfb0b1e741.jpg" alt="Julie" class="client-photo" />
        <p>"Résultat incroyable pour mes cheveux, merci !"</p>
        <div class="stars">★★★★★</div>
        <span>- Sophie</span>
      </div>
      <!-- Témoignage 9 -->
      <div class="testimonial" style="--i:8">
        <img src="profil/be4d4ff3-8467-4fa7-ad44-b7e152ef361e.jpg"  alt="Julie" class="client-photo" />
        <p>"Ma femme est ravie du résultat, merci Glowissime !"</p>
        <div class="stars">★★★★★</div>
        <span>Marc</span>
      </div>
      <!-- Témoignage 10 -->
      <div class="testimonial"style="--i:9" >
        <img src="profil/c338f343-f7b8-41f0-8dbc-6298c7e27908.jpg" alt="Julie" class="client-photo" />
        <p>"Très belle expérience. Les produits utilisés sentent bon et sont naturels."</p>
        <div class="stars">★★★★★</div>
        <span>- Kevin</span>
      </div>
      <!-- Témoignage 11 -->
      <div class="testimonial" style="--i:10">
        <img src="profil/eefc4610-5947-4a13-8149-649cb3c0558e.jpg" alt="Julie" class="client-photo" />
        <p>"Un espace propre, accueillant et chaleureux. Bravo à toute l'équipe."</p>
        <div class="stars">★★★★★</div>
        <span>- yann</span>
      </div>
      <!-- Témoignage 12 -->
      <div class="testimonial" style="--i:11">
        <img src="profil/f2e2e445-7137-4310-8ac9-796bd14c5acc.jpg" alt="Julie" class="client-photo" />
        <p>"Merci pour cette magnifique coiffure, j’ai reçu que des compliments !"</p>
        <div class="stars">★★★★★</div>
        <span>- Leïla</span>
      </div>
    </div>
  </section>
  
    <h3>Notre salon</h3>
    <div class="map">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.998822295749!2d2.292292615674044!3d48.858844079287485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fc700000001%3A0x2c2ee07a2cfb5f1a!2sTour%20Eiffel!5e0!3m2!1sfr!2sfr!4v1680000000000"
        width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy">
      </iframe>
    </div>
  </section>

  <footer>
    <p>© 2025 Glowissime- Tous droits réservés</p>
  </footer>

  <script src="script.js"></script>

  <a href="https://wa.me/655155859" class="whatsapp-float" target="_blank" title="Contactez-nous sur WhatsApp">
    <img src="profil//410201-PD391H-802.jpg" alt="WhatsApp" />
  </a>
  
</body>
</html>


