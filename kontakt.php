<?php 
if(isset($_POST['submit'])){
    $to = "office@ayuryoga.at"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $betreff = $_POST['betreff'];
    $nachricht = $name . " hat Folgendes geschrieben:" . "\n\n" . $_POST['nachricht'];

    $headers = "From:" . $from;
    mail($to,$betreff,$nachricht,$headers);
    echo "E-Mail erfolgreich abgeschickt! Danke " . $name . "!";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>



    <!DOCTYPE html>
    <html lang="de">

    <head>

        <?php include("includes/link_meta.php"); ?>

            <meta name="description" content="AyurYoga, 1210 Wien, Am Spitz 16/14, Eingang links neben Betten Reiter">
            <meta name="keywords" content="ayuryoga, studio ayuryoga, yoga wien, yogastudio wien, yoga 1210, yoga floridsdorf, yoga basiskurs, yogalehrerausbildung, ayurveda, meditation">

            <title> Kontakt | AyurYoga </title>

    </head>

    <body class="animate-in">

        <!-- HEADER -->

        <?php include("includes/header.php"); ?>

            <!--------------------------------- CONTENT ---------------------->


            <div class="container content">

                <div class="om">
                    <div class="col-xs-12">
                        <h2> Kontakt </h2>
                        <p> <strong> AyurYoga</strong></p>
                        <p>Ihr Studio für Yoga, Ayurveda, Shiatsu, Nuad und Meditation in Floridsdorf</p>
                        <p>1210 Wien, Am Spitz 16/14 </p>
                        <p>Eingang links neben Betten Reiter </p>
                        <br>
                        <p>Anfragen per <u><a href="mailto:office@ayuryoga.at">E-Mail </a></u></p>
                        <p>Telefonnummer: 0660/8362906</p>

                        <br>

                        <p>
                            Bankverbindung: IBAN: AT02 3200 0000 0258 0926</p>
                        <p>lautend auf Michaela Kloosterman, bei Raiffeisen LB W/NÖ</p>

                        <br>

                        <p> <strong>  <u>Kontaktformular</u></strong> </p>

                        <form class="cmxform" id="commentForm" action="" method="post" autocomplete="off">
                            <fieldset>
                                <div>
                                    <label class="form" for="cname">Name:</label>
                                    <input type="text" id="cname" name="name" minlength="2" required/>
                                </div>
                                <div>
                                    <label class="form" for="cemail">E-Mail:</label>
                                    <input type="email" id="cemail" name="email" required/>
                                </div>

                                <div>
                                    <label class="form" for="cbetreff">Betreff:</label>
                                    <input type="text" id="cbetreff" name="betreff" required/>
                                </div>

                                <div>
                                    <label class="form" for="cnachricht">Nachricht:</label>
                                    <textarea id="cnachricht" name="nachricht" required></textarea>
                                </div>

                                <div class="button">
                                    <input type="submit" class="submit" id="contact-button" name="submit" value="Senden" />
                                </div>
                            </fieldset>
                        </form>

                    </div>
                </div>

            </div>


            <!-- FOOTER -->


            <?php include("includes/footer.php");?>

                <script>
                    $("#commentForm").validate();



                    /*
                     * Translated default messages for the jQuery validation plugin.
                     * Locale: DE (German, Deutsch)
                     */
                    $.extend($.validator.messages, {
                        required: "Dieses Feld ist ein Pflichtfeld.",
                        maxlength: $.validator.format("Geben Sie bitte maximal {0} Zeichen ein."),
                        minlength: $.validator.format("Geben Sie bitte mindestens {0} Zeichen ein."),
                        rangelength: $.validator.format("Geben Sie bitte mindestens {0} und maximal {1} Zeichen ein."),
                        email: "Geben Sie bitte eine gültige E-Mail Adresse ein.",
                        url: "Geben Sie bitte eine gültige URL ein.",
                        date: "Bitte geben Sie ein gültiges Datum ein.",
                        number: "Geben Sie bitte eine Nummer ein.",
                        digits: "Geben Sie bitte nur Ziffern ein.",
                        equalTo: "Bitte denselben Wert wiederholen.",
                        range: $.validator.format("Geben Sie bitte einen Wert zwischen {0} und {1} ein."),
                        max: $.validator.format("Geben Sie bitte einen Wert kleiner oder gleich {0} ein."),
                        min: $.validator.format("Geben Sie bitte einen Wert größer oder gleich {0} ein."),
                        creditcard: "Geben Sie bitte eine gültige Kreditkarten-Nummer ein."
                    });
                </script>


    </body>

    </html>