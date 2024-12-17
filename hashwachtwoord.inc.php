<?php
// Hash and pepper Salt algorrithm
$sensitiveData = "Dannielle";
$salt = bin2hex(random_bytes(18)); // Generate random string 18 bits long
$pepper = "StringOnlyAdmin";

echo "<br>" . $salt;

$dataToHash = $sensitiveData . $salt . $pepper;
$hash = hash ("sha256", $dataToHash); // sha256 is algorthim name

echo "<br>" . $hash;

//normally stored in database accesed via querry

$sensitiveData = "Dannielle";
$storedSalt = $salt; 
$storedHash = $hash;
$pepper = "StringOnlyAdmin";

$dataToHash = $sensitiveData . $storedSalt . $pepper;

$verificationHash = hash ("sha256", $dataToHash);

if ($storedHash === $verificationHash) {
 echo "De data is hetzelfde";
 echo "<br>";
 echo $storedHash;
 echo "<br>";
 echo $verificationHash;
} else {
    echo "De data is niet  hetzelfde";
}
?>
<?php
// how to hash passwoord
$Signup_wachtwoord = "Wilma";
$wachtwoordhashsterkte = [
    'cost' => 12 
]
$hashedWW = password_hash($Signup_wachtwoord, PASSWORD_BCRYPT, $wachtwoordhashsterkte ); // Build in fuction

$wachtwoordLogin = "Wilma";

//boolean result for verify
if (password_verify($wachtwoordLogin, $hashedWW)) {
 echo "Ze zijn hetzelfde";
} else {
    "Ze zijn niet hetzelfde";
}
?>