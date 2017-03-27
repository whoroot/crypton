<?php

#-> DEFINITION DES VARIABLES GLOBALES <-#
    global $viewContent,$aResult,$uniqId;
#-> END <-#

$aAlpha = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
$aAlphaReverse = array_reverse($aAlpha);

if(PAGE_CODE==1){
    $aAlphabet = $aAlpha;  
}
if(PAGE_CODE==2){
    $aAlphabet = $aAlphaReverse;
    
}


#-> Si texte envoyé
/*if(isset($_POST['textocrypt'])){
    $uniqId = uniqid();
    # on split la chaine de caractère
    $aTextSend = strtolower($_POST['textocrypt']);
    $aTextBrut = str_split(wd_remove_accents($aTextSend));
    $keyCode = $_POST['keycode'];
    wLog(PATH_VAR,$uniqId,$keyCode);
    foreach($aTextBrut as $key => $item){
        foreach($aAlphabet as $keyletter => $letter){
            if($item == $letter ){
                $i = 0;
                $j = $keyletter;
                while ($i <= $keyCode) {
                    if($j>25){
                        $j=0;
                    }
                    $aTest = $aAlphabet[$j];
                    $i++;
                    $j++;
                }
                //echo 'KEY : '.$keyletter.' VALUE : '.$letter.' -> '.$GLOBALS['alphabet'][$keyletter+13].' PRINT_R ';
                //print_r($aTest);
                $aResult[]=$aTest;
            }
        }
    }  
}*/

if(isset($_POST['textocrypt'])){
    if(PAGE_CODE==1){
        $uniqId = uniqid();
        # on split la chaine de caractère
        $aTextSend = strtolower($_POST['textocrypt']);
        $aTextBrut = str_split(wd_remove_accents($aTextSend));
        $keyCode = $choix=rand(13,21); # Alors fait un random entre 1 et 12;
        wLog(PATH_VAR,$uniqId,$keyCode);
        foreach($aTextBrut as $key => $item){
            foreach($aAlphabet as $keyletter => $letter){
                if($item == $letter ){
                    $i = 0;
                    $j = $keyletter;
                    while ($i <= $keyCode) {
                        if($j>25){
                            $j=0;
                        }
                        $aTest = $aAlphabet[$j];
                        $i++;
                        $j++;
                    }
                    //echo 'KEY : '.$keyletter.' VALUE : '.$letter.' -> '.$GLOBALS['alphabet'][$keyletter+13].' PRINT_R ';
                    //print_r($aTest);
                    $aResult[]=$aTest;
                }
            }
        }
    }
    if(PAGE_CODE==2){
        # on split la chaine de caractère
        $aTextSend = strtolower($_POST['textocrypt']);
        $aTextBrut = str_split(wd_remove_accents($aTextSend));
        $keyUniqId = $_POST['keycode'];
        $keyCode= wLogRead(PATH_VAR,$keyUniqId);
        foreach($aTextBrut as $key => $item){
            foreach($aAlphabet as $keyletter => $letter){
                if($item == $letter ){
                    $i = 0;
                    $j = $keyletter;
                    while ($i <= $keyCode) {
                        if($j>25){
                            $j=0;
                        }
                        $aTest = $aAlphabet[$j];
                        $i++;
                        $j++;
                    }
                    //echo 'KEY : '.$keyletter.' VALUE : '.$letter.' -> '.$GLOBALS['alphabet'][$keyletter+13].' PRINT_R ';
                    //print_r($aTest);
                    $aResult[]=$aTest;
                }
            }
        }
        wLogErase(PATH_VAR,$keyUniqId);
    }
    
}










#-> DEFINITION DE LA VIEW <-#
    if(TYPE_PAGE == 1){ # si formulaire de cryptage
        $viewContent = 'formView';
    }
    elseif(TYPE_PAGE == 2){ # si résultat de cryptage
        $viewContent = 'resultView';
    }
    else{
        $viewContent = 'indexView';
    }
#-> END <-#
