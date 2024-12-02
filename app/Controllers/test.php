<?php
//require_once __DIR__ . '/../../vendor/autoload.php'; 
require '../../vendor/autoload.php';
// Mengimpor class PhpVersion
use App\Abstractions\npl_PhpVersion;

// Mengecek apakah versi PHP saat ini >= 8.0.0
if (npl_PhpVersion::versionCheck('8.0.0')) {
    echo "PHP version is 8.0 or higher! <br/>";
} else {
    echo "PHP version is lower than 8.0! <br/>";
}
// Menangani deprecated feature untuk PHP versi 7.4 dan lebih tinggi
npl_echo(npl_PhpVersion::handleDeprecation());

npl_echo("<br/>-----------".npl_server());