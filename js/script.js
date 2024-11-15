// Fonction pour afficher une image avec un bouton de fermeture
function showImage(src) {
    // Crée un conteneur pour l'image
    var imageContainer = document.createElement("div");
    imageContainer.className = "image-container";

    // Crée l'élément image et définit sa source
    var image = document.createElement("img");
    image.src = src;

    // Crée le bouton de fermeture
    var closeButton = document.createElement("button");
    closeButton.textContent = "Close";
    closeButton.className = "close-btn";
    // Définit l'action du bouton de fermeture pour supprimer le conteneur de l'image
    closeButton.onclick = function () {
        document.body.removeChild(imageContainer);
    };

    // Ajoute le bouton de fermeture et l'image au conteneur
    imageContainer.appendChild(closeButton);
    imageContainer.appendChild(image);

    // Ajoute le conteneur de l'image au corps du document
    document.body.appendChild(imageContainer);
}

// Options de texte pour les titres
const text1_options = [
    "Textile",
    "Coupe",
    "Couleur",
    "Code"
];

// Options de texte pour les descriptions
const text2_options = [
    `Les matières sont naturelles et adaptées aux situations, la laine et cachemire pour l'hiver, le lin pour l'été et en général 
        du coton.`,
    `Contrairement aux différentes modes la coupe ne change que très peu, les vêtements ne doivent pas être larges ni serrés.`,
    `Généralement les couleurs sont assez sobres, bleu marine, gris, blanc, bleu clair, peu de couleurs extravagantes.`,
    `Un code vestimentaire est présent, il divague selon chaque personne, car certaines règles étaient utiles à leur époque, mais 
        plus de nos jours.`
];

let i = 0; // Index courant pour les options de texte

// Sélection des éléments du DOM par leur identifiant
const currentOptionText1 = document.getElementById("current-option-text1");
const currentOptionText2 = document.getElementById("current-option-text2");
const carousel = document.getElementById("carousel");
const optionPrevious = document.getElementById("previous-option");
const optionNext = document.getElementById("next-option");

// Initialisation des textes affichés
currentOptionText1.innerText = text1_options[i];
currentOptionText2.innerText = text2_options[i];

// Gestionnaire de clic pour le bouton "Next"
optionNext.onclick = function () {
    i = (i + 1) % text1_options.length; 
    currentOptionText1.dataset.nextText = text1_options[i]; 
    currentOptionText2.dataset.nextText = text2_options[i]; 
    carousel.classList.add("anim-next");

    // Met à jour le texte immédiatement
    currentOptionText1.innerText = text1_options[i];
    currentOptionText2.innerText = text2_options[i];
    
    carousel.classList.remove("anim-next");
};

// Gestionnaire de clic pour le bouton "Previous"
optionPrevious.onclick = function () {
    i = (i === 0) ? text1_options.length - 1 : i - 1; 
    currentOptionText1.dataset.previousText = text1_options[i];
    currentOptionText2.dataset.previousText = text2_options[i]; 
    carousel.classList.add("anim-previous"); 

    // Met à jour le texte immédiatement
    currentOptionText1.innerText = text1_options[i];
    currentOptionText2.innerText = text2_options[i];
    
    carousel.classList.remove("anim-previous");
};
