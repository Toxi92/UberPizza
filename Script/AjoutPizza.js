document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector(".AjoutPizzeriaForm");

    form.addEventListener("submit", (event) => {
        event.preventDefault(); // Empêche le rechargement de la page

        // Récupérer les données du formulaire
        const formData = new FormData(form);

        // Convertir les données en format URL-encoded
        const params = new URLSearchParams();
        formData.forEach((value, key) => {
            params.append(key, value);
        });

        // Envoyer les données au serveur
        fetch("../Controlleur/controlleur_ajout_pizza.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: params.toString()
        })
        .then(response => {
            if (response.ok) {
                return response.text(); // Lire la réponse comme texte
            } else {
                throw new Error("Erreur lors de l'ajout de la pizza.");
            }
        })
        .then(result => {
            alert("Réponse du serveur : " + result);
            form.reset(); // Réinitialise le formulaire
        })
        .catch(error => {
            console.error("Erreur :", error);
            alert("Une erreur est survenue. Veuillez réessayer.");
        });
    });
});