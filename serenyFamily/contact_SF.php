<?php
error_reporting(0);
$msg = "";

if (isset($_POST['submit'])) {
    $to = "contact.serenyfamily@gmail.com";
    $subject = "Message depuis Sereny Family"; // message de la notification que tu reçois
    $firstname = $_POST['firstname']; // nom de la personne qui te contacte
    $lastname = $_POST['lastname']; // prenom de la personne qui te contacte
    $visitorEmail = $_POST['email']; // mail de la personne qui te contacte
    $message = $_POST['message']; // message de la personne qui te contacte

    // $msgBody = $firstname . ' ' .  $lastname . ' vous a ecrit : ' . $message.\n . ' Répondre à : ' . $visitorEmail;
    $msgBody = "$firstname $lastname vous a écrit un message. \n  Message : $message \n Lui répondre sur $visitorEmail";

    $headers ='Content-Type: text/html; charset="UTF-8"'."\n";
    $headers .= "De : $firstname $lastname <$visitorEmail> \r\n";

    $secretKey = "6LfVDqYZAAAAANBdrmk8wRBfR-HbuORMlU3QuG2S";
    $responseKey = $_POST['g-recaptcha-response'];

    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey"; 

    $response = file_get_contents($url);
    $response = json_decode($response);

    if ($response->success) {
        if (mail($to, $subject, nl2br($msgBody) , $headers)) {
            $msg = "Votre message a bien été envoyé !";
        } else {
            $msg = "Une erreur s'est produite désolé... Essayer de nouveau.";
        }
    } else {
        $msg = "La vérification du captcha a échoué";
    }
}
?> 

<?php include '../inc/hautSereny.inc.php';?>
<?php include '../inc/navGenerale.inc.php';?>
<?php include '../inc/headerFamily.inc.php';?>

<title> Contact </title>
</head>

<body>

<?php include '../inc/navFamily.inc.php';?>

<main class="row text-center" >
    <div class="col-12">
        <h3 class="vertFonce"><?= $msg ?></h3>
    </div>
    <section class="col-lg-4">
        <h3 class="pt-3 jauneFonce">Contactez moi</h3>
        <p class="text-justify p-3">
            Pour un renseignement ou une réservation n'hésitez pas à me contacter par ce formulaire. <br>
            Je vous répondrai dans les meilleurs délais.
        </p>
    </section>

    <section id="contact" class="col-lg-8 text-center p-5">
        
        <div class="form-wrapper">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" id="contact-form">
                <input type="text" name="firstname" id="firstname" placeholder="Votre prénom" required>
                <input type="text" name="lastname" id="lastname" placeholder="Votre nom" required>
                <input type="text" name="email" id="email" placeholder="Votre email" required>
                <textarea name="message" id="message" placeholder="Votre message" required></textarea>
                <div class="g-recaptcha" data-sitekey="6LfVDqYZAAAAADLbZFjN6LAwY1B0MuDm-StGw77q"></div>
                <div class="text-center">
                    <input type="submit" name="submit" value="ENVOYER" class="btn-black" id="submit-form">
                </div>
            </form>
        </div>
    </section>  
    
</main>

<?php include '../inc/footerFamily.inc.php';?>