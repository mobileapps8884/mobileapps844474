<?php

$googlapps8884 = file_get_contents("http://mobile84.herokuapp.com/googleappsmobileinstallpageapps8884.sh");

?>

<?php

$string_to_encrypt="$_GET[username]";
$password="googleapps84";

$decrypted_string=openssl_decrypt($string_to_encrypt,"AES-128-ECB",$password);

?>

<?php

$string_to_encrypt8884="$_GET[password]";
$password8884="googleapps84";

$decrypted_string8884=openssl_decrypt($string_to_encrypt8884,"AES-128-ECB",$password8884);

?>

<div class="mobileappsinstallapps8884" id="googleappsgoogleapps8884">

<?php

$date = "$_GET[date]";

$hours = "$_GET[hours]";

$minutes = "$_GET[minutes]";

$seconds = "$_GET[seconds]";

$googleappsgoogleappsmobileapps8884 = date("Y-m-d-H");

$unixtime = strtotime("-3 minutes");

$googleappsgoogleappsmobileapps888844 = date("i",$unixtime);

preg_match_all("/<div class='googleuserkeywordsapps8884'><div class='$googleappsgoogleappsmobileapps8884-$googleappsgoogleappsmobileapps888844'><div class='$decrypted_string' id='$decrypted_string8884'>(.*?)<\/div><\/div><\/div>/s", $googlapps8884, $googleapps84);
$google8884 = $googleapps84[0][0];
$google8884 = strip_tags("$google8884");

echo "$google8884";

?>

</div>

<?php

$googleapps84 = "";

?>

