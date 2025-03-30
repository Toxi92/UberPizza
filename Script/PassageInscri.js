
// Récupérer les données du formulaire

document.getElementById('formulaire_inscription').addEventListener('submit', function (e) {
    e.preventDefault(); // Empêche le rechargement de la page
    const password = document.getElementById('password').value;
    const passwordConfirm = document.getElementById('passwordconfirm').value;
    if (password !== passwordConfirm) {
        alert('Les mots de passe ne correspondent pas.');
        return;
    }else{
        const username = document.getElementById('username').value;
        const email = document.getElementById('email').value;
        // Stocker les données dans le localStorage
        sessionStorage.setItem('username', username);
        sessionStorage.setItem('email', email);
        sessionStorage.setItem('password', password);
        // Rediriger vers Inscription2.php
        window.location.href = 'Inscription2.php';
        console.log('Nom d\'utilisateur :', username);
        console.log('Email :', email);
        console.log('Mot de passe :', password);
    }

});