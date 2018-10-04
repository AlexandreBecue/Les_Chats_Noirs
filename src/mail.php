<?php
    /**
    * Created by PhpStorm.
    * User: Alex
    * Date: 01/10/2018
    * Time: 22:00
    */

    // Récupération des informations du formulaire
    if (get_magic_quotes_gpc()) {
        $nom = stripslashes(trim($_POST['nom']));
        $prenom = stripslashes(trim($_POST['prenom']));
        $code = stripslashes(trim($_POST['code']));
        $ville = stripslashes(trim($_POST['ville']));
        $mail = stripslashes(trim($_POST['mail']));
        $motif = stripslashes(trim($_POST['motif']));
        $message = stripslashes(trim($_POST['message']));
    }
    else {
        $nom = trim($_POST['nom']);
        $prenom = trim($_POST['prenom']);
        $code = trim($_POST['code']);
        $ville = trim($_POST['ville']);
        $mail = trim($_POST['mail']);
        $motif = trim($_POST['motif']);
        $message = trim($_POST['message']);
    }

    // Vérifie si l'adresse mail est au bon format
    $regex_mail = '/^[-+.w]{1,64}@[-.w]{1,64}.[-.w]{2,6}$/i';

    // Vérifie qu'il n'y est pas d'en-tête dans les données
    $regex_head = '/[nr]/';

    //Vérifie qu il n y est pas d'erreur dans adresse mail
    if (!preg_match($regex_mail, $mail)) {
        $alert = 'L\'adresse '.$mail.' n\'est pas valide';
    }
    else {
        $courriel = 1;
    }

    // On affiche l'erreur s'il y en a une
    if (!empty($alert)) {
        $courriel = 0;
    }

    // On vérifie qu'il n'y a aucun header dans les champs
    if (
       preg_match($regex_head, $nom)
    || preg_match($regex_head, $prenom)
    || preg_match($regex_head, $code)
    || preg_match($regex_head, $ville)
    || preg_match($regex_head, $mail)
    || preg_match($regex_head, $motif)
    || preg_match($regex_head, $message)) {
        $alert = 'En-têtes interdites dans les champs du formulaire';
    }
    else {
        $header = 1;
    }

    // On affiche l'erreur s'il y en a une
    if (!empty($alert)) {
        $header = 0;
    }
    if (
       empty($nom)
    || empty($prenom)
    || empty($ville)
    || empty($code)
    || empty($mail)) {
        $alert = 'Nous avons besoin de ces informations, veuillez nous les renseigner';
    }
    else {
        $renseigne = 1;
    }

    // On affiche l'erreur s'il y en a une
    if (!empty($alert)) {
        $renseigne = 0;
    }

    // Si les variables sont bonnes
    if ($renseigne == 1 AND $header == 1 AND $courriel == 1) {
        //Envoi du mail

        //Le destinataire
        $to="alex.becue@live.fr";

        //Le sujet du message qui apparaitra
        $sujet = $motif;
        $msg = '';

        //Le message en lui même
        $msg .= 'Mail envoyé depuis le site';
        $msg .= 'Nom : '.$nom."rnrn";
        $msg .= 'Prenom : '.$prenom."rnrn";
        $msg .= 'Code : '.$code."rnrn";
        $msg .= 'Ville : '.$ville."rnrn";
        $msg .= 'Mail : '.$mail."rnrn";
        $msg .= 'Motif : '.$motif."rnrn";
        $msg .= 'Message : '.$message."rnrn";

        //Les en-têtes du mail
        $headers = 'From : Les Chats Noirs'."rn";
        $headers .= "rn";

        //L'envoi du mail - Et page de redirection
        mail($to, $sujet, $msg, $headers);
        header('https://www.paypal.com/signin');
    }
    else {
        header('https://www.paypal.com/signin');
    }
    // Test à vide
    // mail ("alex.becue@live.fr", "Test", "Bonsoir", "From LCN");
    echo 'Message envoyé';
?>