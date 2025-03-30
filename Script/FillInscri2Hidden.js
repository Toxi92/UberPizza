    // Récupérer les données du Local Storage
const username = sessionStorage.getItem('username');
const email = sessionStorage.getItem('email');
const password = sessionStorage.getItem('password');

// Insérer les données dans les champs cachés
document.getElementById('username').value = username;
document.getElementById('email').value = email;
document.getElementById('password').value = password;
sessionStorage.clear();