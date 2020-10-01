<?php

function saveToXML($nimi, $viesti, $paivamaara){
    $xml = simplexml_load_file('viestit.xml');
    
    $uusi_projekti = $xml->addChild('viestit');
    $uusi_projekti->addChild('nimi', $nimi);
    $uusi_projekti->addChild('viesti', $viesti);
    $uusi_projekti->addChild('paivamaara', $paivamaara);

    $dom = new DOMDocument("1.0");
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->loadXML($xml->asXML());
    $dom->save('viestit.xml');
}
