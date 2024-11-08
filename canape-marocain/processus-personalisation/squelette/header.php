<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exemple de Header</title>
  <style>
    /* Style de base pour le header */
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
      background-color: #333;
      color: #fff;
    }

    /* Style pour le logo */
    .logo {
      font-size: 24px;
      font-weight: bold;
    }

    /* Style pour le menu */
    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
    }

    nav ul li {
      margin-left: 20px;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      font-size: 18px;
    }

    nav ul li a:hover {
      color: #ddd;
    }
  </style>
</head>
<body>

<header>
  <!-- Logo à gauche -->
  <div class="logo">MonLogo</div>
  
  <!-- Menu à droite -->
  <nav>
    <ul>
      <li><a href="#">Accugtfrdeil</a></li>
      <li><a href="#">À propos</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>
</header>

</body>
</html>
