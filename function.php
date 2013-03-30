<?php
function facebook_likes($page) {
   $recup     = @file_get_contents('http://graph.facebook.com/' . $page);
   $resultat = json_decode($recup, true);

   return $resultat;
}
?>
