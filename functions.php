<?php

function saveToXML($nimi, $viesti, $paivamaara){
    $xml = simplexml_load_file('viestit.xml');
    
    $uusi_viesti = $xml->addChild('viestit');
    $uusi_viesti->addAttribute('piilossa', 'true');
    $uusi_viesti->addChild('nimi', $nimi);
    $uusi_viesti->addChild('viesti', $viesti);
    $uusi_viesti->addChild('paivamaara', $paivamaara);

    $dom = new DOMDocument("1.0");
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->loadXML($xml->asXML());
    $dom->save('viestit.xml');
}

function toggleVisibility($id){

    $xml = simplexml_load_file('viestit.xml');
    $viesti = $xml->viestit[$id];

    if($viesti->attributes()['piilossa'] == 'false'){
        $xml->attributes()['piilossa'] == 'true';
    }else if($viesti->attributes()['piilossa'] == 'true'){
        $xml->attributes()['piilossa'] == 'false';
    }

}
