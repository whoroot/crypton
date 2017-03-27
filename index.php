<?php
/*
* Page d'index à la racine (www.monappli.com/)
* Permet de rediriger vers l'index du dossier /public (www.monappli.com/public)
* En effet les pages ne se situent pas à la racine du site
* Le site en MVC est composé d'un repertoire /application (qui comporte les traitements) et d'un répertoire /public (qui comporte les pages accessibles en front)
*/


#-> REDIRECTION <-#
    # on redirige vers l'index du dossier public
      header('Location: public/');
      exit();
#-> END <-#
?>