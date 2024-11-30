<?php
require_once __DIR__ . '/vendor/autoload.php'; 
// Mengimpor class PhpVersion
use App\Abstractions\PhpVersion;

// Mengecek apakah versi PHP saat ini >= 8.0.0
if (PhpVersion::versionCheck('8.0.0')) {
    echo "PHP version is 8.0 or higher!";
} else {
    echo "PHP version is lower than 8.0!";
}

// Menangani fitur baru yang hanya tersedia di PHP 8.0 atau lebih baru
echo PhpVersion::handleNewFunctions();

// Menangani deprecated feature untuk PHP versi 7.4 dan lebih tinggi
echo PhpVersion::handleDeprecation();