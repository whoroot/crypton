<?php

#-> DEFINITION DES VARIABLES GLOBALES <-#
    global $viewContent,$aResult,$aTextMoveCrypted,$uniqId;
#-> END <-#


#-> Si texte envoyé


if(isset($_POST['textocrypt'])){
    if(PAGE_CODE==1){
        //$uniqId = uniqid();
        //$aKeySend = str_split($uniqId);
        # on lisse la chaine de caractère en minisucle et sans accent
            $sKeySendStrlow = strtolower($_POST['keyPass']);
            $aKeySend = str_split(wd_remove_accents($sKeySendStrlow));
        #on récupère les codes ASCII des caractères
            foreach($aKeySend as $key => $item){
                $aKeyAscii[]=ord($item);
            }
       
        
        #on split la chaine de caractère et on retire les accents
            $aTextBrut = str_split(wd_remove_accents($_POST['textocrypt']));
            foreach($aTextBrut as $key => $item){
                $aTextAscii[]=ord($item);
            }
        
        # on compte le décallage de chaque caractère par rapport à "a"
            foreach($aKeyAscii as $key => $item){
                $aKeyMover[]=$item-32;
            }

        //var_dump($aTextAscii);
        
        # on applique le décallage en boucle à toute la chaine à crypter
            $i=0;
            foreach($aTextAscii as $key => $item){
                if($i>=count($aKeyMover)){
                   $i=0;
                } 
                $iDecallage = $item+$aKeyMover[$i];
                
                if($iDecallage > 122){
                    $aTextMoveAscii[] = 31+($iDecallage-122);
                }
                else{
                    $aTextMoveAscii[] = $iDecallage;
                }
                $i++;        
            }
        //var_dump($aTextMoveAscii);
        
        
        # on répucère les caractères à partir du ASCII calculé
            foreach($aTextMoveAscii as $key => $item){
                $aTextMoveCrypted[]=chr($item);
            }
        //print_r($aTextMoveCrypted);
        //echo 'modulo : '.(122 % 32);
        /*echo '<pre>Key Décallage : ';
        var_dump($aKeyMover);
        echo '<br> Texte ASCII';
        var_dump($aTextAscii);
        echo '<br> Text Move ASCII';
        var_dump($aTextMoveAscii);
        */
    }
    if(PAGE_CODE==2){
        # on lisse la chaine de caractère en minisucle et sans accent
            $sKeySendStrlow = strtolower($_POST['keyPass']);
            $aKeySend = str_split(wd_remove_accents($sKeySendStrlow));
        #on récupère les codes ASCII des caractères
            foreach($aKeySend as $key => $item){
                $aKeyAscii[]=ord($item);
            }
       
        
        #on split la chaine de caractère et on retire les accents
            $aTextBrut = str_split($_POST['textocrypt']);
            foreach($aTextBrut as $key => $item){
                $aTextAscii[]=ord($item);
            }
        
        # on compte le décallage de chaque caractère par rapport à "a"
            foreach($aKeyAscii as $key => $item){
                $aKeyMover[]=32-$item;
            }
        
        //var_dump($aKeyMover);
        
        # on applique le décallage en boucle à toute la chaine à crypter
            $i=0;
            foreach($aTextAscii as $key => $item){
                if($i>=count($aKeyMover)){
                   $i=0;
                } 
                $iDecallage = $item+$aKeyMover[$i];
                //var_dump($aKeyMover[$i]);
                if($iDecallage < 32 ){
                    $aTextMoveAscii[] = 123-(32-$iDecallage);
                }
                else{
                    $aTextMoveAscii[] = $iDecallage;
                }
                $i++;        
            }
        /*echo '<pre>Key Décallage : ';
        var_dump($aKeyMover);
        echo '<br> Texte ASCII -> ';
        var_dump($aTextAscii);
        echo '<br> Text Move ASCII -> ';
        var_dump($aTextMoveAscii);
        */
        
        
        # on répucère les caractères à partir du ASCII calculé
            foreach($aTextMoveAscii as $key => $item){
                $aTextMoveCrypted[]=chr($item);
            }
        //print_r($aTextMoveCrypted);
    }
    
}


// novxi1 u-is$







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
