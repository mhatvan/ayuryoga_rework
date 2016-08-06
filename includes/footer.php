<div class="container footer">
    <p> © 2016 Ayuryoga </p>
    <a href="impressum.php" id="impressum"> Impressum </a>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
<script src=""></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.min.js"></script>

<?php

include_once("analyticstracking.php");

?>

<script>
    window.addEventListener("beforeunload", function () {
        document.body.classList.add("animate-out");
    });
</script>
