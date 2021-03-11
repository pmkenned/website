<?php
$title = "Contact";
$bodyClass = "contact";
include "header.php";
?>

<main>

    <form>
        <label for="firstName">First name: </label>
        <input type="text" name="firstName"></br>
        <textarea name="emailBody" rows="5"></textarea></br>
        <input type="submit" value="Send">
    </form>

</main>

<?php
include "footer.php";
?>
