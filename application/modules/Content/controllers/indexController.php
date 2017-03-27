<?php

#-> DEFINITION DES VARIABLES GLOBALES <-#
    global $viewContent;
#-> END <-#

#-> DEFINITION DE LA VIEW <-#
    if(TYPE_PAGE == 3){ # si page d'info (Philosphie Na)
        $viewContent = 'simpleContentView';
    }
    else{
        $viewContent = 'indexView';
    }
#-> END <-#
