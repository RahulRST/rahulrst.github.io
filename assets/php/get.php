<?php
if($_POST["message"]) {
mail("technohints123@gmail.com", "New Response Received",
$_POST["These are the contents in the new response from the form"]. "From: Email");
}
?>
