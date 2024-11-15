// Mots-clés pour reconnaître les messages de l'utilisateur
const prompts = [
    ["salut", "bonjour", "bonsoir", "hey", "hello", "bonne matinée", "bonne après-midi"],
    ["comment ça va ?", "comment vas-tu ?", "ça va ?"],
    ["quelles matières utiliser pour l'été ?", "quelles matières pour quand il fait chaud ?"],
    ["quelles matières utiliser pour l'hiver ?", "quelles matières pour quand il fait froid ?"],
    ["quels sont les premiers vêtements à acheter ?"],
    ["quelles sont les matières à éviter ?", "quelles sont les pires matières ?"],
    ["quelles sont les erreurs à éviter ?"]
];

// Réponses correspondantes aux mots-clés dans le tableau 'prompts'
const replies = [
    ["Bonjour, sur quoi puis-je vous aider ?"],
    ["Je ne ressens rien, mais à priori si je peux répondre c'est que tout va bien"],
    ["Pour l'été, privilégiez le coton et le lin. Ces matières sont légères et respirantes."],
    ["Pour l'hiver, optez pour la laine, le cachemire et le coton. Elles sont chaudes et isolantes."],
    [`Deux solutions s'offrent à vous : si vous avez un peu peur du regard des autres, allez-y petit à petit. 
        Achetez un beau pantalon, puis une chemise, rien qu'avec ça votre style devient tout de suite meilleur. Si cela ne vous 
        fait pas peur, comme tout à l'heure prenez, pantalon, chemise, costume et une paire de souliers. Je recommande tout de même 
        de rester sur des choses simples (évitez des costumes croisés ou 3 pièces si vous ne vous y connaissez pas trop).`],
    ["Évitez les matières synthétiques comme le polyester, elles sont souvent moins respirantes et peuvent être inconfortables."],
    [`Les grandes marques sont à éviter (mauvais rapport qualité/prix), ne mettez pas trop d'accessoires. Et si vous débutez, 
        je vous dirais d'éviter les costumes noirs. Cependant, avec l'expérience, vous pourrez.`]
];

// Réponse par défaut si la question ne correspond à aucun mot-clé
const alternative = [
    "Je ne comprends pas :/"
];

// Événement déclenché lorsque la page est entièrement chargée
document.addEventListener("DOMContentLoaded", () => {
    const inputField = document.getElementById("input");

    // Ajoute un écouteur d'événement pour détecter quand l'utilisateur appuie sur la touche "Enter"
    inputField.addEventListener("keydown", (e) => {
        if (e.code === "Enter") {
            let input = inputField.value;
            inputField.value = "";
            output(input); // Appelle la fonction pour traiter le message de l'utilisateur
        }
    });
});

// Fonction principale pour traiter l'entrée de l'utilisateur
function output(input) {
    let product;

    // Nettoie le texte d'entrée en le mettant en minuscule
    let text = input.toLowerCase().trim();

    // Vérifie si l'entrée correspond à un mot-clé dans le tableau 'prompts'
    product = getReply(text);

    // Réponse spéciale pour "merci"
    if (text.includes("merci")) {
        product = "De rien!";
    }

    // Réponse par défaut si aucune correspondance n'est trouvée
    if (!product) {
        product = alternative[Math.floor(Math.random() * alternative.length)];
    }

    // Ajoute la conversation au chat
    addChat(input, product);
}

// Fonction pour obtenir la réponse correspondant à l'entrée
function getReply(text) {
    for (let i = 0; i < prompts.length; i++) {
        if (prompts[i].includes(text)) {
            return replies[i][0]; // Retourne la première réponse de la liste des réponses
        }
    }
    return null;
}

// Fonction pour ajouter la conversation au conteneur de messages
function addChat(input, product) {
    const messagesContainer = document.getElementById("messages");

    // Ajoute le message de l'utilisateur
    let userDiv = document.createElement("div");
    userDiv.className = "user response";
    userDiv.innerHTML = `<span>${input}</span>`;
    messagesContainer.appendChild(userDiv);

    // Ajoute la réponse du bot
    let botDiv = document.createElement("div");
    let botText = document.createElement("span");
    botDiv.className = "bot response";
    botText.innerText = "En train de penser...";
    botDiv.appendChild(botText);
    messagesContainer.appendChild(botDiv);

    // Fait défiler vers le bas pour afficher le dernier message
    messagesContainer.scrollTop = messagesContainer.scrollHeight - messagesContainer.clientHeight;

    // Délai pour simuler que le bot "pense" avant de répondre
    setTimeout(() => {
        botText.innerText = product;
    }, 1000);
}
