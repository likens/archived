<?php

// MUCH THANKS TO http://jemsmailform.com/ FOR THIS EXCELLENT PIECE OF CODE!

$yourEmail = "caleb@likens.co";
$yourWebsite = "LIKENSdotCO"; 
$thanksPage = '';
$maxPoints = 6; 
$requiredFields = "name,email,message";


// DO NOT EDIT BELOW HERE
$error_msg = array();
$result = null;

$requiredFields = explode(",", $requiredFields);

function clean($data) {
    $data = trim(stripslashes(strip_tags($data)));
    return $data;
}
function isBot() {
    $bots = array("Indy", "Blaiz", "Java", "libwww-perl", "Python", "OutfoxBot", "User-Agent", "PycURL", "AlphaServer", "T8Abot", "Syntryx", "WinHttp", "WebBandit", "nicebot", "Teoma", "alexa", "froogle", "inktomi", "looksmart", "URL_Spider_SQL", "Firefly", "NationalDirectory", "Ask Jeeves", "TECNOSEEK", "InfoSeek", "WebFindBot", "girafabot", "crawler", "www.galaxy.com", "Googlebot", "Scooter", "Slurp", "appie", "FAST", "WebBug", "Spade", "ZyBorg", "rabaz");

    foreach ($bots as $bot)
        if (stripos($_SERVER['HTTP_USER_AGENT'], $bot) !== false)
            return true;

    if (empty($_SERVER['HTTP_USER_AGENT']) || $_SERVER['HTTP_USER_AGENT'] == " ")
        return true;
    
    return false;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isBot() !== false)
        $error_msg[] = "No bots please! UA reported as: ".$_SERVER['HTTP_USER_AGENT'];


    $crapmail = "yourmail@gmail.com";
        
    $points = (int)0;
    
    $badwords = array("adult", "beastial", "bestial", "blowjob", "clit", "cum", "cunilingus", "cunillingus", "cunnilingus", "cunt", "ejaculate", "fag", "felatio", "fellatio", "fuck", "fuk", "fuks", "gangbang", "gangbanged", "gangbangs", "hotsex", "hardcode", "jism", "jiz", "orgasim", "orgasims", "orgasm", "orgasms", "phonesex", "phuk", "phuq", "pussies", "pussy", "spunk", "xxx", "viagra", "phentermine", "tramadol", "adipex", "advai", "alprazolam", "ambien", "ambian", "amoxicillin", "antivert", "blackjack", "backgammon", "texas", "holdem", "poker", "carisoprodol", "ciara", "ciprofloxacin", "debt", "dating", "porn", "link=", "voyeur", "content-type", "bcc:", "cc:", "document.cookie", "onclick", "onload", "javascript");

    foreach ($badwords as $word)
        if (
            strpos(strtolower($_POST['message']), $word) !== false || 
            strpos(strtolower($_POST['name']), $word) !== false
        )
            $points += 2;
    
    if (strpos($_POST['message'], "http://") !== false || strpos($_POST['message'], "www.") !== false)
        $points += 2;
    if (isset($_POST['nojs']))
        $points += 1;
    if (preg_match("/(<.*>)/i", $_POST['message']))
        $points += 2;
    if (strlen($_POST['name']) < 3)
        $points += 1;
    if (strlen($_POST['message']) < 15 || strlen($_POST['message'] > 1000))
        $points += 2;
    if (preg_match("/[bcdfghjklmnpqrstvwxyz]{7,}/i", $_POST['message']))
        $points += 1;

    foreach($requiredFields as $field) {
        trim($_POST[$field]);
        
        if (!isset($_POST[$field]) || empty($_POST[$field]) && array_pop($error_msg) != "Please fill in all the required fields and submit again.\r\n")
            $error_msg[] = "Please fill in all the required fields and submit again.";
    }

    if (!empty($_POST['name']) && !preg_match("/^[a-zA-Z-'\s]*$/", stripslashes($_POST['name'])))
        $error_msg[] = "The name field must not contain special characters.\r\n";
    if (!empty($_POST['email']) && !preg_match('/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])(([a-z0-9-])*([a-z0-9]))+' . '(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i', strtolower($_POST['email'])))
        $error_msg[] = "That is not a valid e-mail address.\r\n";
    if (($_POST['subject']) !== '' || ($_POST['email'] === $crapmail))
        $error_msg[] = "Bots are not allowed. Nice try!\r\n";

    
       

    if ($error_msg == NULL && $points <= $maxPoints) {
        $subject = "Contact Request @ LIKENSdotCO";
        
        $message = "Someone has contacted you at LIKENSdotCO: \n\n";
        foreach ($_POST as $key => $val) {
            if (is_array($val)) {
                foreach ($val as $subval) {
                    $message .= ucwords($key) . ": " . clean($subval) . "\r\n";
                }
            } else {
                $message .= ucwords($key) . ": " . clean($val) . "\r\n";
            }
        }
        $message .= "\r\n";
        $message .= 'IP: '.$_SERVER['REMOTE_ADDR']."\r\n";
        $message .= 'Browser: '.$_SERVER['HTTP_USER_AGENT']."\r\n";

        if (strstr($_SERVER['SERVER_SOFTWARE'], "Win")) {
            $headers   = "From: $yourEmail\n";
            $headers  .= "Reply-To: {$_POST['email']}\r\n";
        } else {
            $headers   = "From: $yourWebsite <$yourEmail>\n";
            $headers  .= "Reply-To: {$_POST['email']}\r\n";
        }

        if (mail($yourEmail,$subject,$message,$headers)) {
            if (!empty($thanksPage)) {
                header("Location: $thanksPage");
                exit;
            } else {
                $result = 'Your mail was successfully sent.';
                $disable = true;
            }
        } else {
            $error_msg[] = 'Your mail could not be sent this time. ['.$points.']';
        }
    } else {
        if (empty($error_msg))
            $error_msg[] = 'Your mail looks too much like spam, and could not be sent this time. ['.$points.']';
    }
}
function get_data($var) {
    if (isset($_POST[$var]))
        echo htmlspecialchars($_POST[$var]);
}
?>

<?php
    $title = 'Contact';
    $description = 'Got a question about the front end? A comment? Or would you like to just connect? Fill out this form here!';
    include('../inc/header.php');
?>

<h1 class="heading" role="heading"><?php echo $title; ?></h1>
<p>Got a question? Comment? Or just want to connect? Fill out the form below!</p>

<form action="/contact/" method="post">
    <input class="subject" type="text" name="subject" placeholder="Humans, ignore this.">
    <div class="block">
        <input type="text" name="name" maxlength="50" required="required" class="text" autocomplete="off" tabindex="1">
        <label for="name">Name</label>
    </div>
    <div class="block">
        <input type="email" name="email" maxlength="50" required="required" class="text" autocomplete="off" tabindex="2">
        <label for="email">Email</label>
    </div>
    <div class="block">
        <textarea name="message" maxlength="500" required="required" class="textarea" autocomplete="off" tabindex="3"></textarea>
        <label for="message">Message</label>
        <input type="submit" value="Submit" class="submit" tabindex="4">
    </div>
    
</form>

<?php
    if (!empty($error_msg)) {
        echo '<p class="error result">ERROR: '. implode("<br />", $error_msg) . "</p>";
    }
    if ($result != NULL) {
        echo '<p class="success result">Thanks for contacting me! I will respond as soon as possible.</p>';
    }
?>  

<?php 
include('../inc/footer.php');


 
