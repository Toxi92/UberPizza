    document.addEventListener("DOMContentLoaded", () => {
        // Sélectionner tous les boutons "Modifier"
        const buttons = document.querySelectorAll(".DivProfil button");

        buttons.forEach(button => {
            button.addEventListener("click", () => {
                const input = button.previousElementSibling; // Champ d'entrée associé au bouton

                if (button.textContent === "Modifier") {
                    // Rendre le champ modifiable
                    input.removeAttribute("readonly");
                    input.focus();
                    button.textContent = "Sauvegarder";
                    button.style.backgroundColor = "#28a745"; // Vert
                } else {
                    // Sauvegarder les modifications
                    input.setAttribute("readonly", "readonly");
                    button.textContent = "Modifier";
                    button.style.backgroundColor = "#007BFF"; // Bleu par défaut

                    // Vous pouvez envoyer les données modifiées au serveur ici via AJAX ou un formulaire
                    console.log(`Champ ${input.id} modifié : ${input.value}`);
                }
            });
        });
    });