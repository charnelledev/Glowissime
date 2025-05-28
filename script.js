// script.js
document.getElementById("menu-toggle").addEventListener("click", function () {
    document.getElementById("navbar").classList.toggle("active");
  });
  const target = document.getElementById('target');
  let slogans = [
    "Glowissime – L’éclat au sommet du raffinement.",
    "Révélez votre éclat intérieur.",
    "L’art de briller naturellement.",
    "Chaque peau mérite son éclat.",
    "Sublimez votre beauté, illuminez votre monde.",
    "La beauté qui rayonne de vous.",
    "Votre éclat. Votre signature."
  ];

  let wordIndex = 0;
  let letterIndex = 0;
  let colors = ["black", "black", "black", "black", "black", "black", "black"];

  const createLetter = () => {
    const letter = document.createElement('span');
    target.appendChild(letter);
    letter.textContent = slogans[wordIndex][letterIndex];
    letter.style.color = colors[wordIndex % colors.length];
    letter.style.transition = 'all 0.3s ease';

    setTimeout(() => {
      letter.remove();
    }, 2500);
  };

  const loop = () => {
    setTimeout(() => {
      if (wordIndex >= slogans.length) {
        wordIndex = 0;
        letterIndex = 0;
        loop();
        return;
      }

      if (letterIndex < slogans[wordIndex].length) {
        createLetter();
        letterIndex++;
        loop();
      } else {
        setTimeout(() => {
          wordIndex++;
          letterIndex = 0;
          loop();
        }, 2000);
      }
    }, 60);
  };

  loop();

  setTimeout(() => {
      const alert = document.getElementById('alert-message');
      if (alert) {
        alert.style.opacity = '0';
        setTimeout(() => alert.remove(), 500);
      }
    }, 5000);
 
