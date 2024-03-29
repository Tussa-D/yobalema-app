// Sélectionnez l'élément <header> par son ID
var header = document.querySelector('#main-header');

// Fonction pour gérer le défilement de la page
function handleScroll() {
    // Vérifiez la position de défilement de la page
    if (window.scrollY > 0) {
        // Ajoutez la classe à l'entête lorsqu'elle est défilée
        header.classList.add('header-scrolled');
    } else {
        // Supprimez la classe lorsque l'entête est au sommet de la page
        header.classList.remove('header-scrolled');
    }
}

// Ajoutez un écouteur d'événements pour le défilement de la page
window.addEventListener('scroll', handleScroll);
