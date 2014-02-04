<?php

///recipe constans
define(BLOKK_KEZD, "\x1b@"); //this is for the recipe printer says we will be printing
define(BLOKK_POS_LEFT,"\x1ba\x00"); /// text align left
define(BLOKK_POS_CENTER, "\x1ba\x01"); // text align center
define(BLOKK_POS_RIGHT, "\x1ba\x02"); //text align right
define(BLOKK_BIG_SIZE_START, "\x1b!\x17"); // bigger font start
define(BLOKK_BIG_SIZE_STOP, "\x1b!\x0"); // bigger font stop
define(BLOKK_UJ_SOR, "\xA"); // new line
define(BLOKK_HAROM_SOR, "\x1bd\x3"); //3 new line
define(BLOKK_HOSSZ, 47); // 1 line lenght 
define(BLOKK_INTERNAT_CHARS, "\x1bt\x13"); // internal charset
define(BLOKK_ALAHUZ, "\x1b-1"); // underline start
define(BLOKK_ALAHUZ_VEGE, "\x1b-0"); // underline stop
define(BLOKK_BOLD, "\x1b!1"); // bold
define(BLOKK_CUT, "\x1BJ\x96\x1Bi"); /// recipe full cut
define(BLOKK_VONALKOD_START, "\x1B3\x05\x1Dh\x50\x1Dw\x03\x1DH2\x1Dk\x04"); ///barcode 80 height and 3 weight
define(BLOKK_VONALKOD_VEGE, "\x00"); // end of barcode

/*example of barcode

BLOKK_VONALKOD_START."0002153256".BLOKK_VONALKOD_VEGE
*/




//chance any hungarian chas in sting to hex for recipe printer

function str2hexutf8($string){
       global $configDir;
    include $configDir . "/config.php";
    
    //lecskeréljük a karaktereket hexákra
    $chars = stringToArray( $string );
    if(!empty($chars)){
        foreach($chars as $key => $char){
    if($chars[$key]=="á"){
        $csere.="\xa0";
        continue;
    }
    if($chars[$key]=="Á"){
        $csere.="\xb5";
        continue;
    }
    if($chars[$key]=="í"){
        $csere.="\xa1";
        continue;
    }
    if($chars[$key]=='Í'){
        $csere.="\x92";
        continue;
    }
    if($chars[$key]=="õ"){
        $csere.="\xa2";
        continue;
    }
    if($chars[$key]=="ú"){
        $csere.="\xa3";
        continue;
    }
     if($chars[$key]=="Ú"){
        $csere.="\xe9";
    }
    if($chars[$key]=='ó'){
        $csere.="\xa2";
        continue;
    }
    if($chars[$key]=='Ó'){
        $csere.="\xe0";
        continue;
    }
    if($chars[$key]=='ö'){
        $csere.="\x94";
        continue;
    }
    if($chars[$key]=="Ö"){
        $csere.="\x99";
        continue;
    }
    if($chars[$key]=="õ"){
        $csere.="\x94";
        continue;
    }
    if($chars[$key]=="Õ"){
        $csere.="\x99";
        continue;
    }
    if($chars[$key]=="é"){
        $csere.="\x82";
        continue;
    }
    if($chars[$key]=="É"){
        $csere.="\x90";
        continue;
    }
    if($chars[$key]=="ü"){
        $csere.="\x81";
        continue;
    }
    if($chars[$key]=="Ü"){
        $csere.="\x9a";
        continue;
    }
    if($chars[$key]=="Û"){
      //  $csere.="\xeb";
        $csere.="\x9a";
        continue;
    }
    if($chars[$key]=="û"){
        //$csere.="\xfb";
        $csere.="\x81";
        continue;
    }
   
    $csere.=$chars[$key];
    
    
}
    }

return $csere;
}

?>