<?php
$file = isset($_GET['file']) ? $_GET['file'] : '';

if (empty($file) || !file_exists('/tool.dev-maxime-guinard.fr/brief/edito/' . $file)) {
    die('Brief not found.');
}

$brief = file_get_contents('/tool.dev-maxime-guinard.fr/brief/edito/' . $file);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brief Generated</title>
    <style>
      @import url('/font/Recoleta-SemiBold');
@font-face {
    font-family: 'Recoleta-SemiBold';
    src: url('/font/Recoleta-SemiBold.woff2') format('woff2'),
         url('/font/Recoleta-SemiBold.woff') format('woff');
    font-weight: 600;
    font-style: normal;
}

body {
    margin: 0;
    padding: 0;
    font-family: 'Recoleta-SemiBold', sans-serif;
    background-color: #f6f6f6; /* Couleur de fond douce */
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    justify-content: center; /* Centre verticalement le contenu */
    align-items: center; /* Centre horizontalement le contenu */
    text-align: center;
}

h1 {
    font-size: 32px;
    margin-bottom: 20px;
    color: #070616; /* Votre noir */
}
h2 {
    color: #ed3b49; /* Couleur secondaire */
    font-size: 24px; /* Taille de police, ajuste selon tes préférences */
    margin: 20px 0; /* Marges supérieure et inférieure */
    font-weight: bold; /* Gras pour les titres */
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 20px;
    width: 90%; /* Responsive */
    max-width: 500px;
    background-color: #ffffff; /* Conteneur du formulaire blanc */
    border-radius: 8px; /* Coins arrondis */
    padding: 20px; /* Padding interne */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Ombre */
}

label {
    font-size: 18px;
    margin-bottom: 10px;
    color: #070616; /* Votre noir */
}

input[type="text"] {
    width: 100%;
    padding: 12px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 20px;
    transition: border-color 0.3s ease;
}

input[type="text"]:focus {
    border-color: #8a77eb; /* Couleur primaire lors du focus */
    outline: none; /* Supprime le contour par défaut */
}

button {
    background-color: #8a77eb; /* Couleur primaire */
    border: none;
    color: #fff;
    padding: 15px 30px;
    font-size: 18px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #ed3b49; /* Couleur secondaire au survol */
}

.loading-spinner {
    display: none; /* Caché par défaut */
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border: 16px solid #f3f3f3;
    border-top: 16px solid #8a77eb; /* Utilisation de la couleur primaire */
    border-radius: 50%;
    width: 80px;
    height: 80px;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.footer {
    margin-top: auto;
    background-color: #f1f1f1;
    padding: 10px;
    text-align: center;
    font-size: 14px;
    color: #666;
}

.footer a {
    color: #8a77eb; /* Couleur primaire pour les liens */
    text-decoration: none;
}

.footer a:hover {
    text-decoration: underline;
}
.logo {
            max-width: 150px; /* Ajuster la largeur maximale du logo */
            margin-bottom: 20px; /* Espacement sous le logo */
        }
/* Ajout du logo dans l'en-tête */
.header {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
}

.header img {
    max-width: 150px; /* Limite la taille du logo */
}
    </style>
</head>
<body>
    <h1>Brief Généré</h1>
    <img src="logo-generating.png" alt="En génération" class="logo">
    <div class="content">
        <h2>Votre brief généré :</h2>
        <pre><?php echo htmlspecialchars($brief); ?></pre>
    </div>
</body>
</html>
