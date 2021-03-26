<?php 

$receiver = "info@most-app.com";
//hi@creatum.agency

$name = htmlspecialchars(trim($_POST["fullname"]));
$text = htmlspecialchars(trim($_POST["msg"]));
$email = htmlspecialchars(trim($_POST["email"]));
$message = "<b>Name</b>: $name <br><b>Message</b>: $text <br><b>E-mail</b>: $email";

if(isset($_POST['dropdown-select'])){
	$select = htmlspecialchars(trim($_POST["dropdown-select"]));
	$message .= "<br><b>Funding type</b>: $select ";
}

if(isset($_POST['fundname'])){
	$fund = htmlspecialchars(trim($_POST["fundname"]));
	$message .= "<br><b>Fund name</b>: $fund";
	$pagetitle = "Potential investor";
} else {

	$pagetitle = "General enquiry";
}





mail($receiver, $pagetitle, $message, "Content-type: text/html; charset=\"utf-8\"\n From: $email");
