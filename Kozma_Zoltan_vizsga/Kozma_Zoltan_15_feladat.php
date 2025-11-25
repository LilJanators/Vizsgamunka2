<?php
function camelCase($string) {
    
    $string = strtolower($string);
    
    $betuk = explode('_', $string);
    
    $camelCase = array_shift($betuk);
    
    foreach ($betuk as $betu) {
        $camelCase .= ucfirst($betu);
    }
    return $camelCase;
}

print camelCase("valtozo_uj_szo_ujabb_szo"); 
