<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>DixLan - DATA</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Vos données</h1>
    <p>Voici un exemple des données que nous avons pu récupérer :</p>

    <?php
    ini_set('display_errors', 0);
    // Fonction pour récupérer l'adresse IP du client
    include 'get_ip.php';

    // Fonction pour récupérer les informations de localisation basées sur l'adresse IP
    function get_location_info($ip) {
        $api_url = "https://ipinfo.io/$ip/json";
        $api_response = file_get_contents($api_url);
        return json_decode($api_response);
    }

    // Récupérer les informations du client
    function get_client_info() {
        $client_info = array();

        // Récupérer l'adresse IP du client
        $client_info['ip'] = get_client_ip();

        // Récupérer le pays et la ville
        $location_info = get_location_info($client_info['ip']);
        $client_info['country'] = isset($location_info->country) ? $location_info->country : "Pays inconnu";
        $client_info['city'] = isset($location_info->city) ? $location_info->city : "Ville inconnue";

        return $client_info;
    }

    // Récupérer les informations du client
    $client_info = get_client_info();
    ?>

    <p><?php echo "Pays : " . $client_info['country'] . "<br>"; ?></p>
    <p><?php echo "Ville : " . $client_info['city']; ?></p>

    <script>
      // JavaScript pour récupérer et afficher l'heure actuelle
      var current_time = new Date().toLocaleTimeString();
      document.write("<p>Heure actuelle : " + current_time + "</p>");

      // JavaScript pour récupérer et afficher la résolution de l'écran
      var screen_resolution = window.screen.width + "x" + window.screen.height;
      document.write("<p>Résolution d'écran : " + screen_resolution + "</p>");

      // JavaScript pour récupérer et afficher la langue du navigateur
      var user_language = navigator.language;
      document.write("<p>Langue du navigateur : " + user_language + "</p>");

      // JavaScript pour vérifier si les cookies sont activés
      var cookies_enabled = navigator.cookieEnabled ? "Activés" : "Désactivés";
      document.write("<p>Cookies : " + cookies_enabled + "</p>");

      // JavaScript pour récupérer et afficher le système d'exploitation
      var user_agent = navigator.userAgent;
      var os_info = "Système d'exploitation inconnu";

      if (user_agent.match(/Win64/) && user_agent.match(/x64/)) {
        os_info = "Windows 64-bit";
      } else if (user_agent.match(/Win32/) && user_agent.match(/WOW64/)) {
        os_info = "Windows 32-bit on Windows 64-bit";
      } else if (user_agent.match(/Win32/)) {
        os_info = "Windows 32-bit";
      } else if (user_agent.match(/Macintosh/)) {
        os_info = "Macintosh";
      } else if (user_agent.match(/Linux/)) {
        os_info = "Linux";
      } else if (user_agent.match(/iPhone/)) {
        os_info = "iPhone";
      } else if (user_agent.match(/iPad/)) {
        os_info = "iPad";
      } else if (user_agent.match(/Android/)) {
        os_info = "Android";
      }

      document.write("<p>Système d'exploitation : " + os_info + "</p>");

      // JavaScript pour extraire et afficher la version du système d'exploitation
      var os_version = "Version inconnue";

      // Extraire la version du système d'exploitation pour Windows
      var windows_version_match = user_agent.match(/Windows NT (\d+\.\d+)/);
      if (windows_version_match) {
        os_version = "Windows " + windows_version_match[1];
      }

      // Extraire la version du système d'exploitation pour Mac OS
      var mac_version_match = user_agent.match(/Mac OS X (\d+\_\d+)/);
      if (mac_version_match) {
        os_version = "Mac OS " + mac_version_match[1].replace('_', '.');
      }

      document.write("<p>Version du système d'exploitation : " + os_version + "</p>");

      // JavaScript pour obtenir et afficher le nombre d'entrées dans l'historique
      var history_length = history.length;
      document.write("<p>Nombre d'entrées dans l'historique : " + history_length + "</p>");

      // JavaScript pour obtenir et afficher le type de connexion
      var connection = navigator.connection || navigator.mozConnection || navigator.webkitConnection;

      if (connection) {
        var type = connection.effectiveType;

        if (type === '4g') {
          // Charger des ressources adaptées à une connexion 4G
          document.write('Type de connexion : 4G');
        } else if (type === '3g') {
          // Charger des ressources adaptées à une connexion 3G
          document.write('Type de connexion : 3G');
        } else if (type === '2g') {
          // Charger des ressources adaptées à une connexion 2G
          document.write('Type de connexion : 2G');
        } else {
          // Charger des ressources adaptées à d'autres types de connexion
          document.write('Type de connexion inconnu : ' + type);
        }
      } else {
        document.write('Les informations sur la connexion ne sont pas disponibles.');
      }

      // JavaScript pour obtenir et afficher le navigateur
      var user_browser = navigator.userAgent;
      document.write("<p>Navigateur : " + user_browser + "</p>");
    </script>

    <p>Vous voyez ces données à titre d'exemple pour illustrer les risques liés aux liens dont vous ne connaissez pas la source.</p>
    <p>/!\ Nous n'enregistrons aucune de ces informations. /!\</p>
    <a href="index.php" class="back-button">Retour</a>
  </div>
</body>
</html>
