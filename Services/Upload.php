<?php

namespace Services;


class Upload
{
    public function uploadImage($dir)
    {
        $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
        $extension_upload = strtolower(  substr(  strrchr($_FILES['image']['name'], '.')  ,1)  );
        if ( !in_array($extension_upload,$extensions_valides) ){
            $msg = new FlashMessages();
            $msg->warning('Extension incorrecte');
        }

        if ($_FILES['image']['error'] > 0){
            $msg = new FlashMessages();
            $msg->warning('Erreur lors du transfert');
        }



        $nom = $dir."/".$_FILES['image']['name'];
        $resultat = move_uploaded_file($_FILES['image']['tmp_name'],$nom);
        if ($resultat){
            $msg = new FlashMessages();
            $msg->info('Transfert de fichier réussi');
        }

    }

    public function uploadFile($dir)
    {
        $extensions_valides = array( 'mp3' , 'wmv');
        $extension_upload = strtolower(  substr(  strrchr($_FILES['file']['name'], '.')  ,1)  );
        if ( !in_array($extension_upload,$extensions_valides) ){
            $msg = new FlashMessages();
            $msg->warning('Extension incorrecte');
        }

        if ($_FILES['file']['error'] > 0){
            $msg = new FlashMessages();
            $msg->warning($_FILES['file']['error']);
        }



        $nom = $dir."/".$_FILES['file']['name'];
        $resultat = move_uploaded_file($_FILES['file']['tmp_name'],$nom);
        if ($resultat){
            $msg = new FlashMessages();
            $msg->info('Transfert de fichier réussi');
        }

    }
}