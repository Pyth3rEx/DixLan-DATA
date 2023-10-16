<?php
// Récupérer l'adresse IP du client
function get_client_ip() {
    // Si Cloudflare ajoute l'en-tête CF-Connecting-IP
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
        return $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    // Si non, on essaie d'autres en-têtes habituels
    elseif (isset($_SERVER['HTTP_CLIENT_IP']))
        return $_SERVER['HTTP_CLIENT_IP'];
    elseif(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    elseif(isset($_SERVER['HTTP_X_FORWARDED']))
        return $_SERVER['HTTP_X_FORWARDED'];
    elseif(isset($_SERVER['HTTP_FORWARDED_FOR']))
        return $_SERVER['HTTP_FORWARDED_FOR'];
    elseif(isset($_SERVER['HTTP_FORWARDED']))
        return $_SERVER['HTTP_FORWARDED'];
    elseif(isset($_SERVER['REMOTE_ADDR']))
        return $_SERVER['REMOTE_ADDR'];
    else
        return 'UNKNOWN';
}

// Appel de la fonction et affichage de l'adresse IP
$client_ip = get_client_ip();
echo "Adresse IP publique : " . $client_ip;
?>
