
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Galerie Beauté</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body class="bg-pink-50 font-sans">
    <header class="navbar-fixed">


        <div class="logo">
          <img src="images/logo.png" alt="Logo Divine Beauty" />
          <span>Glowissime</span>
        </div> 
      <!-- Icône menu burger -->
  <div class="menu-toggle" id="menu-toggle">&#9776;</div>

  <nav id="navbar">
    <ul>
        <li><a href="index.html">Accueil</a></li>
        <!-- <li><a href="index.html">Services</a></li>
         <li><a href="index.html">Témoignages</a></li>
        <li><a href="index.html">Réservation</a></li>
        <li><a href="index.html">Contact</a></li> -->
    </ul>
  </nav>
</header>


  <section class="bg-rose-200 text-center py-6 shadow-md">
    <h1 class="text-3xl font-bold text-rose-800">Galerie des Soins Beauté</h1>
    <p class="text-rose-700 mt-2">Découvrez les soins adaptés à chaque type de peau et d'ongle</p>
  </section>

  <main class="p-6 space-y-10">
    <div class="box"> 

      
      <!-- SECTION VISAGE -->
      <section>
        <h2 class="text-2xl font-semibold text-rose-800 mb-4">Soins Visage</h2>
        <div class="grid md:grid-cols-2 gap-6">
          <!-- Peau sèche -->
          <div class="bg-pink-100 p-4 rounded-lg shadow">
            <h3 class="text-lg font-bold text-rose-700 mb-2">Peau sèche</h3>
          <div class="grid grid-cols-2 gap-4">
            <img src="images/téléchargement (7).jpg" style="--i: 1" class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
            <img src="images/5 astuces infaillibles pour illuminer un teint terne peau noire.jpg" style="--i: 2"class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
            <img src="images/image/model.jpg" style="--i: 3"class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
            <img src="images/image/Masque de boue purifiante.jpg"style="--i: 4" class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
          </div>
        </div>
        <!-- Peau grasse -->
        <div class="bg-pink-100 p-4 rounded-lg shadow">
          <h3 class="text-lg font-bold text-rose-700 mb-2">Peau grasse</h3>
          <div class="grid grid-cols-2 gap-4">
            <img src="images/angel 🐇.jpg" style="--i: 5"class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
            <img src="images/téléchargement (21).jpg" style="--i: 6"class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
            <img src="images/image/Spa Mud Clay Face Mask.jpg" style="--i: 7"class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
            <img src="images/image/Discover the Joy of DIY Skincare Recipes.jpg"style="--i: 8" class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
          </div>
        </div>
        <!-- Peau mixte -->
        <div class="bg-pink-100 p-4 rounded-lg shadow">
          <h3 class="text-lg font-bold text-rose-700 mb-2">Peau mixte</h3>
          <div class="grid grid-cols-2 gap-4">
            <img src="images/Skin care.jpg" style="--i: 9"class="image-hover-blur  rounded-lg shadow-lg object-cover h-40 w-full">
            <img src="images/téléchargement (22).jpg" style="--i: 10"class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
          </div>
        </div>
        <!-- Peau sensible -->
        <div class="bg-pink-100 p-4 rounded-lg shadow">
          <h3 class="text-lg font-bold text-rose-700 mb-2">Peau sensible</h3>
          <div class="grid grid-cols-2 gap-4">
            <img src="images/Gelée Nettoyante Illuminatrice Nüssa.jpg" style="--i: 11"class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
            <img src="images/Crème contour des yeux activée Bright Start Ilia Beauty - 15ml.jpg" style="--i: 12"class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
          </div>
        </div>
      </div>
    </section>
    
    <!-- SECTION MAKEUP -->
    <section>
      <h2 class="text-2xl font-semibold text-rose-800 mb-4">Make-Up</h2>
      <div class="grid md:grid-cols-2 gap-6">
        <!-- Make-up peau grasse -->
        <div class="bg-pink-100 p-4 rounded-lg shadow">
          <h3 class="text-lg font-bold text-rose-700 mb-2">Make-up peau grasse</h3>
          <div class="grid grid-cols-2 gap-4">
            <img src="images/téléchargement (14).jpg"style="--i: 13" class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
            <img src="images/téléchargement (13).jpg"style="--i: 14" class="image-hover-blur  rounded-lg shadow-lg object-cover h-40 w-full">
            <img src="images/téléchargement (42).jpg" style="--i: 15"class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
            <img src="images/téléchargement (34).jpg" style="--i: 16"class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
          </div>
        </div>
        <!-- Make-up peau sèche -->
        <div class="bg-pink-100 p-4 rounded-lg shadow">
          <h3 class="text-lg font-bold text-rose-700 mb-2">Make-up peau sèche</h3>
          <div class="grid grid-cols-2 gap-4">
            <img src="images/Makeup 💄.jpg" style="--i: 17"class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
            <img src="images/téléchargement (24).jpg" style="--i: 18"class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
            <img src="images/téléchargement (41).jpg" style="--i: 19"class="image-hover-blur  rounded-lg shadow-lg object-cover h-40 w-full">
            <img src="images/THIS LOOK IS MY FAVE FOR BOTH EYES AND NEUTRAL LIP.jpg" style="--i: 20"  class="image-hover-blur  rounded-lg shadow-lg object-cover h-40 w-full">
          </div>
        </div>
      </div>
    </section>
    
    <!-- SECTION MANUCURE -->
    <section>
      <h2 class="text-2xl font-semibold text-rose-800 mb-4">Manucure & pedicure</h2>
      <div class="grid md:grid-cols-2 gap-6">
        <!-- Ongles normaux -->
        <div class="bg-pink-100 p-4 rounded-lg shadow">
          <h3 class="text-lg font-bold text-rose-700 mb-2">Ongles normaux</h3>
          <div class="grid grid-cols-2 gap-4">
            <img src="images/20 Summer Nail Colors for Dark Skin 2024_ Cute Ideas & Trends.jpg" style="--i: 21"class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
            <img src="images/téléchargement (25).jpg" style="--i: 22"class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
            <img src="images/image/Sᴇʟɪɴɴᴀᴀᴀ ꨄ.jpg" style="--i: 23"class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
            <img src="images/image/téléchargement (28).jpg"style="--i: 24" class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
          </div>
        </div>
        <!-- Ongles cassants -->
        <div class="bg-pink-100 p-4 rounded-lg shadow">
          <h3 class="text-lg font-bold text-rose-700 mb-2">Ongles cassants</h3>
          <div class="grid grid-cols-2 gap-4">
            <img src="images/téléchargement (18).jpg" style="--i: 25"class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
            <img src="images/téléchargement (17).jpg"style="--i: 26" class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
            <img src="images/image/téléchargement (26).jpg" style="--i: 27"class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
            <img src="images/image/téléchargement (27).jpg" style="--i: 28"class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
          </div>
        </div>
      </div>
    </section>
    
    
    <!-- SECTION COIFFURE -->
    <section>
      <h2 class="text-2xl font-semibold text-rose-800 mb-4">Coiffures</h2>
  <div class="grid md:grid-cols-2 gap-6">
    
    <!-- Rasta américaine -->
    <div class="bg-pink-100 p-4 rounded-lg shadow">
      <h3 class="text-lg font-bold text-rose-700 mb-2">Rasta américaine</h3>
      <div class="grid grid-cols-3 gap-4">
        <img src="images/coiffure/🍂.jpg"style="--i: 29" class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
        <img src="images/coiffure/Check out @simonelovee💖.jpg" style="--i: 30"class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
        <img src="images/coiffure/téléchargement (48).jpg"style="--i: 31" class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
        <img src="images/coiffure/téléchargement (49).jpg" style="--i: 32"class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
        <img src="images/coiffure/𝐏𝐫𝐞𝐭𝐭𝐲𝐋𝐢𝐭𝐭𝐥𝐞𝐁𝐱𝐫𝐛𝐢𝐞.jpg"style="--i: 33" class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
        <img src="images/coiffure/téléchargement (50).jpg"style="--i: 34" class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
      </div>
    </div>
    
    <!-- Passe mèche -->
    <div class="bg-pink-100 p-4 rounded-lg shadow">
      <h3 class="text-lg font-bold text-rose-700 mb-2">Passe mèche</h3>
      <div class="grid grid-cols-3 gap-4">
        <img src="images/coiffure/téléchargement (46).jpg"style="--i: 35" class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
        <img src="images/coiffure/d94a0733-2082-4a43-a0f8-b7667cd110e9.jpg" style="--i: 36"class="image-hover-blur rounded-lg shadow-lg object-cover h-40 w-full">
        <img src="images/coiffure/Follow for more_ Nubian Princess.jpg" style="--i: 37"class="image-hover-blurrounded-lg shadow-lg object-cover h-40 w-full">
        <img src="images/coiffure/téléchargement (31).jpg" style="--i: 38"class="image-hover-blur  rounded-lg shadow-lg object-cover h-40 w-full">
        <img src="images/coiffure/Cornrows ❤️.jpg"style="--i: 39" class="image-hover-blur image-hover-zoom rounded-lg shadow-lg object-cover h-40 w-full">
        <img src="images/coiffure/téléchargement (45).jpg"style="--i: 40" class="image-hover-blur image-hover-zoom rounded-lg shadow-lg object-cover h-40 w-full">
      </div>
    </div>
    
    <!-- Chignon -->
    <div class="bg-pink-100 p-4 rounded-lg shadow">
      <h3 class="text-lg font-bold text-rose-700 mb-2">Chignon</h3>
      <div class="grid grid-cols-3 gap-4">
        <img src="images/coiffure/princesa 😊🥂.jpg"style="--i: 41"  class="image-hover-blur image-hover-zoom rounded-lg shadow-lg object-cover h-40 w-full">
        <img src="images/coiffure/@viih__siilvax.jpg"style="--i: 42"  class="image-hover-blur image-hover-zoom rounded-lg shadow-lg object-cover h-40 w-full">
        <img src="images/coiffure/téléchargement (43).jpg"style="--i: 43" class="image-hover-blur image-hover-zoom rounded-lg shadow-lg object-cover h-40 w-full">
        <img src="images/coiffure/96cf27f1e14ebc397c46e8c806e14770.jpg" style="--i: 44" class="image-hover-blur image-hover-zoom rounded-lg shadow-lg object-cover h-40 w-full">
        <img src="images/coiffure/téléchargement (39).jpg"style="--i: 45"  class="image-hover-blur image-hover-zoom rounded-lg shadow-lg object-cover h-40 w-full">
        <img src="images/coiffure/téléchargement (32).jpg"style="--i: 46"  class="image-hover-blur image-hover-zoom rounded-lg shadow-lg object-cover h-40 w-full">
      </div>
    </div>
    
    <!-- Laine -->
    <div class="coiffureCategory laine bg-pink-100 p-4 rounded-lg shadow">
      <h3 class="text-lg font-bold text-rose-700 mb-2">Laine</h3>
      <div class="grid grid-cols-3 gap-4">
        <img src="images/coiffurel/téléchargement (37).jpg"style="--i: 47"  class="image-hover-blur image-hover-zoom rounded-lg shadow-lg object-cover h-40 w-full">
        <img src="images/coiffurel/téléchargement (53).jpg" style="--i: 48"class="image-hover-blur image-hover-zoom rounded-lg shadow-lg object-cover h-40 w-full">
        <img src="images/coiffurel/téléchargement (52).jpg"style="--i: 49"  class="image-hover-blur image-hover-zoom rounded-lg shadow-lg object-cover h-40 w-full">
        <img src="images/coiffurel/téléchargement (54).jpg"style="--i: 50"  class="image-hover-blur image-hover-zoom rounded-lg shadow-lg object-cover h-40 w-full">
        <img src="images/coiffurel/téléchargement (36).jpg" style="--i: 51" class="image-hover-blur image-hover-zoom rounded-lg shadow-lg object-cover h-40 w-full">
        <img src="images/coiffurel/téléchargement (55) - Copie.jpg" style="--i: 52"class="image-hover-blur image-hover-zoom rounded-lg shadow-lg object-cover h-40 w-full">
      </div>
    </div>
    <!-- lasse  -->
    <div class="coiffureCategory laine bg-pink-100 p-4 rounded-lg shadow">
      <h3 class="text-lg font-bold text-rose-700 mb-2">Lasse Frontal</h3>
      <div class="grid grid-cols-3 gap-4">
        <img src="images/lasse/$$ pretty_bandzz🖤.jpg"style="--i: 47"  class="image-hover-blur image-hover-zoom rounded-lg shadow-lg object-cover h-40 w-full">
        <img src="images/lasse/$TUNNA.jpg" style="--i: 48"class="image-hover-blur image-hover-zoom rounded-lg shadow-lg object-cover h-40 w-full">
        <img src="images/lasse/5084e4ea-5f0f-455c-827b-6901c0bed094.jpg"style="--i: 49"  class="image-hover-blur image-hover-zoom rounded-lg shadow-lg object-cover h-40 w-full">
        <img src="images/lasse/_ @trindadoll__ 𝐨𝐧 𝐢𝐧𝐬𝐭𝐚𝐠𝐫𝐚𝐦 _  𝐅𝐎𝐋𝐋𝐎𝐖 𝐅𝐎𝐑 𝐌𝐎𝐑𝐄_ ♕.jpg"style="--i: 50"  class="image-hover-blur image-hover-zoom rounded-lg shadow-lg object-cover h-40 w-full">
        <img src="images/lasse/téléchargement (40).jpg" style="--i: 51" class="image-hover-blur image-hover-zoom rounded-lg shadow-lg object-cover h-40 w-full">
        <img src="images/lasse/Wig_Perruque✨.jpg" style="--i: 52"class="image-hover-blur image-hover-zoom rounded-lg shadow-lg object-cover h-40 w-full">
      </div>
    </div>
    
  </div>
</section>
</div>


  </main>
  
  <footer class="bg-rose-300 text-white text-center py-4 mt-10">
    <p>&copy; 2025 Institut Beauté & Bien-être</p>
  </footer>
  <script src="script.js"></script>

  
</body>
</html>
