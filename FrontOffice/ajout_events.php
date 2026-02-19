<?php
require_once("../BDD/connexionBDD.php");

if(isset($_GET['Titre']))














?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Intranet Mairie - Événements</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>

    <!-- HEADER -->
    <header class="header">
        <a class="logo" href="index.html">
            <img src="../Images/Logo.png" alt="Logo Mairie">
            <span class="logo-white">Intranet </span><span class="logo-red">Mairie</span>
        </a>
        <nav class="nav">
            <a href="index.html">Accueil</a>
            <a href="city.html">Notre Ville</a>
            <a class="active" href="events.html">Événements</a>
            <a href="ressources.html">Ressources</a>
            <a href="cohesion.html">Cohésion</a>
        </nav>
    </header>

<main class="container">

    <h1>Ajouter un évènement</h1>

    <div class="card">

        <form action="ajout_events.php" method="GET">

            <label>Titre de l'évènement</label>
            <input type="text" placeholder="Ex : Forum de l'emploi" name="Titre">

            <label>Date</label>
            <input type="date" name="Date">

            <label>Heure</label>
            <input type="time" name="Heure">

            <label>Lieu</label>
            <input type="text" placeholder="Ex : Place de la République" name="Lieu">

            <label>Description</label>
            <textarea rows="4" placeholder="Description de l'évènement..." name="Description"></textarea>

            <label>Image de l'évènement</label>
            <input type="file" name="Image">

            <button type="submit" class="btn-outline">
                Enregistrer l'évènement
            </button>

        </form>

    </div>

</main>

    <!-- FOOTER -->
    <footer class="footer">
        © 2026 – Intranet de la Mairie – Accès réservé aux agents
    </footer>

</body>
</html>