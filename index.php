<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require ('vendor/autoload.php');

/******************************** ARRAYS ***********************************/

// $firstNamePass = false;
// $lastNamePass = false;
// $subjectPass = false;
// $messagePass =false;



$countriesArray = array('Afganistan', "Albania","Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antigua & Barbuda", "Argentina", "Armenia", "Aruba", 
"Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bonaire", 
"Bosnia & Herzegovina", "Botswana", "Brazil", "British Indian Ocean Ter", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Canary Islands", 
"Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Channel Islands", "Chile", "China", "Christmas Island", "Cocos Island", "Colombia", "Comoros", "Congo", 
"Cook Islands", "Costa Rica", "Cote DIvoire", "Croatia", "Cuba", "Curaco", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", 
"Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands", "Faroe Islands", "Fiji", "Finland", "France", "French Guiana", 
"French Polynesia", "French Southern Ter", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Great Britain", "Greece", "Greenland", "Grenada", "Guadeloupe", 
"Guam", "Guatemala", "Guinea", "Guyana", "Haiti", "Hawaii", "Honduras" ,"Hong Kong", "Hungary", "Iceland" ,"Indonesia" ,"India" ,"Iran", "Iraq", "Ireland" ,"Isle of Man",
"Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea North", "Korea Sout", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", 
"Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia", "Madagascar", "Malaysia", "Malawi", "Maldives", "Mali", "Malta", "Marshall Islands", 
"Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Midway Islands", "Moldova", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Nambia", 
"Nauru", "Nepal", "Netherland Antilles", "Netherlands", "Nevis", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Norway", "Oman",
"Pakistan", "Palau Island", "Palestine", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Phillipines", "Pitcairn Island", "Poland", "Portugal", "Puerto Rico", "Qatar", 
"Republic of Montenegro", "Republic of Serbia", "Reunion", "Romania", "Russia", "Rwanda", "St Barthelemy", "St Eustatius", "St Helena", "St Kitts-Nevis", "St Lucia", 
"St Maarten", "St Pierre & Miquelon", "St Vincent & Grenadines", "Saipan", "Samoa", "Samoa American", "San Marino", "Sao Tome & Principe", "Saudi Arabia", "Senegal", 
"Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain", "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", 
"Switzerland", "Syria", "Tahiti", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad & Tobago", "Tunisia", "Turkey", "Turkmenistan", 
"Turks & Caicos Is", "Tuvalu", "Uganda", "United Kingdom", "Ukraine", "United Arab Erimates", "United States of America", "Uraguay", "Uzbekistan", "Vanuatu", "Vatican City State",
"Venezuela", "Vietnam", "Virgin Islands (Brit)", "Virgin Islands (USA)", "Wake Island", "Wallis & Futana Is", "Yemen", "Zaire", "Zambia", "Zimbabwe");

$subjectArray = array("hardwareSupport", "softwareSupport", "other");

?>

  
  
  
  
</div>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hackers Poulette ™</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bellota:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/reset.css">
</head>
<body>
<header>
<div class="row"> <!-- here i'm addind the classes "float-1" or "flex-1" for each of the two examples -->
      <div class="center">
        <img src="assets/img/hackers-poulette-logo.png" alt="Hacker poulette logo">
        <h1>Technical Support</h1>
      </div>

</div>



</header>
<div class="container">
  <form method="post" action="index.php" id="contact-form">
  <ul class="flex-outer">
    <li>
      <label  for="firstName">First name:</label>
        <input type="text" name="firstName" placeholder="Your name..." required>
        <?php
          sanitizeNames("firstName", "first name", "UTF-8");
          verificationNames("firstName", "first name", "UTF-8");
          $firstName = $_POST["firstName"];
          $firstNamePass = !empty($firstName) ? true : false;
        ?>
    </li>
    <li>
      <label for="lastName">Last name:</label>
        <input type="text" name="lastName" placeholder="Your last name..." required>
        <?php
          sanitizeNames("lastName", "last name", "UTF-8");
          verificationNames("lastName", "last name", "UTF-8");
          $lastName = $_POST["lastName"];
          $lastNamePass = !empty($lastName) ? true : false;
        ?>
    </li>
    <li>
      <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Your email..." required>
        <?php
        sanitizeEmail("UTF-8");
        verificationEmail();
        $email = $_POST["email"];
        $emailPass = !empty($email) ? true : false;
        ?>
    </li>
    <li>
      <label for="country">Country:</label>
      <select id="country" name="country" required>
        <option value="" disabled selected>Select your country...</option>
        <option value="Afganistan">Afghanistan</option>
        <option value="Albania">Albania</option>
        <option value="Algeria">Algeria</option>
        <option value="American Samoa">American Samoa</option>
        <option value="Andorra">Andorra</option>
        <option value="Angola">Angola</option>
        <option value="Anguilla">Anguilla</option>
        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
        <option value="Argentina">Argentina</option>
        <option value="Armenia">Armenia</option>
        <option value="Aruba">Aruba</option>
        <option value="Australia">Australia</option>
        <option value="Austria">Austria</option>
        <option value="Azerbaijan">Azerbaijan</option>
        <option value="Bahamas">Bahamas</option>
        <option value="Bahrain">Bahrain</option>
        <option value="Bangladesh">Bangladesh</option>
        <option value="Barbados">Barbados</option>
        <option value="Belarus">Belarus</option>
        <option value="Belgium" >Belgium</option>
        <option value="Belize">Belize</option>
        <option value="Benin">Benin</option>
        <option value="Bermuda">Bermuda</option>
        <option value="Bhutan">Bhutan</option>
        <option value="Bolivia">Bolivia</option>
        <option value="Bonaire">Bonaire</option>
        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
        <option value="Botswana">Botswana</option>
        <option value="Brazil">Brazil</option>
        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
        <option value="Brunei">Brunei</option>
        <option value="Bulgaria">Bulgaria</option>
        <option value="Burkina Faso">Burkina Faso</option>
        <option value="Burundi">Burundi</option>
        <option value="Cambodia">Cambodia</option>
        <option value="Cameroon">Cameroon</option>
        <option value="Canada">Canada</option>
        <option value="Canary Islands">Canary Islands</option>
        <option value="Cape Verde">Cape Verde</option>
        <option value="Cayman Islands">Cayman Islands</option>
        <option value="Central African Republic">Central African Republic</option>
        <option value="Chad">Chad</option>
        <option value="Channel Islands">Channel Islands</option>
        <option value="Chile">Chile</option>
        <option value="China">China</option>
        <option value="Christmas Island">Christmas Island</option>
        <option value="Cocos Island">Cocos Island</option>
        <option value="Colombia">Colombia</option>
        <option value="Comoros">Comoros</option>
        <option value="Congo">Congo</option>
        <option value="Cook Islands">Cook Islands</option>
        <option value="Costa Rica">Costa Rica</option>
        <option value="Cote DIvoire">Cote DIvoire</option>
        <option value="Croatia">Croatia</option>
        <option value="Cuba">Cuba</option>
        <option value="Curaco">Curacao</option>
        <option value="Cyprus">Cyprus</option>
        <option value="Czech Republic">Czech Republic</option>
        <option value="Denmark">Denmark</option>
        <option value="Djibouti">Djibouti</option>
        <option value="Dominica">Dominica</option>
        <option value="Dominican Republic">Dominican Republic</option>
        <option value="East Timor">East Timor</option>
        <option value="Ecuador">Ecuador</option>
        <option value="Egypt">Egypt</option>
        <option value="El Salvador">El Salvador</option>
        <option value="Equatorial Guinea">Equatorial Guinea</option>
        <option value="Eritrea">Eritrea</option>
        <option value="Estonia">Estonia</option>
        <option value="Ethiopia">Ethiopia</option>
        <option value="Falkland Islands">Falkland Islands</option>
        <option value="Faroe Islands">Faroe Islands</option>
        <option value="Fiji">Fiji</option>
        <option value="Finland">Finland</option>
        <option value="France">France</option>
        <option value="French Guiana">French Guiana</option>
        <option value="French Polynesia">French Polynesia</option>
        <option value="French Southern Ter">French Southern Ter</option>
        <option value="Gabon">Gabon</option>
        <option value="Gambia">Gambia</option>
        <option value="Georgia">Georgia</option>
        <option value="Germany">Germany</option>
        <option value="Ghana">Ghana</option>
        <option value="Gibraltar">Gibraltar</option>
        <option value="Great Britain">Great Britain</option>
        <option value="Greece">Greece</option>
        <option value="Greenland">Greenland</option>
        <option value="Grenada">Grenada</option>
        <option value="Guadeloupe">Guadeloupe</option>
        <option value="Guam">Guam</option>
        <option value="Guatemala">Guatemala</option>
        <option value="Guinea">Guinea</option>
        <option value="Guyana">Guyana</option>
        <option value="Haiti">Haiti</option>
        <option value="Hawaii">Hawaii</option>
        <option value="Honduras">Honduras</option>
        <option value="Hong Kong">Hong Kong</option>
        <option value="Hungary">Hungary</option>
        <option value="Iceland">Iceland</option>
        <option value="Indonesia">Indonesia</option>
        <option value="India">India</option>
        <option value="Iran">Iran</option>
        <option value="Iraq">Iraq</option>
        <option value="Ireland">Ireland</option>
        <option value="Isle of Man">Isle of Man</option>
        <option value="Israel">Israel</option>
        <option value="Italy">Italy</option>
        <option value="Jamaica">Jamaica</option>
        <option value="Japan">Japan</option>
        <option value="Jordan">Jordan</option>
        <option value="Kazakhstan">Kazakhstan</option>
        <option value="Kenya">Kenya</option>
        <option value="Kiribati">Kiribati</option>
        <option value="Korea North">Korea North</option>
        <option value="Korea Sout">Korea South</option>
        <option value="Kuwait">Kuwait</option>
        <option value="Kyrgyzstan">Kyrgyzstan</option>
        <option value="Laos">Laos</option>
        <option value="Latvia">Latvia</option>
        <option value="Lebanon">Lebanon</option>
        <option value="Lesotho">Lesotho</option>
        <option value="Liberia">Liberia</option>
        <option value="Libya">Libya</option>
        <option value="Liechtenstein">Liechtenstein</option>
        <option value="Lithuania">Lithuania</option>
        <option value="Luxembourg">Luxembourg</option>
        <option value="Macau">Macau</option>
        <option value="Macedonia">Macedonia</option>
        <option value="Madagascar">Madagascar</option>
        <option value="Malaysia">Malaysia</option>
        <option value="Malawi">Malawi</option>
        <option value="Maldives">Maldives</option>
        <option value="Mali">Mali</option>
        <option value="Malta">Malta</option>
        <option value="Marshall Islands">Marshall Islands</option>
        <option value="Martinique">Martinique</option>
        <option value="Mauritania">Mauritania</option>
        <option value="Mauritius">Mauritius</option>
        <option value="Mayotte">Mayotte</option>
        <option value="Mexico">Mexico</option>
        <option value="Midway Islands">Midway Islands</option>
        <option value="Moldova">Moldova</option>
        <option value="Monaco">Monaco</option>
        <option value="Mongolia">Mongolia</option>
        <option value="Montserrat">Montserrat</option>
        <option value="Morocco">Morocco</option>
        <option value="Mozambique">Mozambique</option>
        <option value="Myanmar">Myanmar</option>
        <option value="Nambia">Nambia</option>
        <option value="Nauru">Nauru</option>
        <option value="Nepal">Nepal</option>
        <option value="Netherland Antilles">Netherland Antilles</option>
        <option value="Netherlands">Netherlands (Holland, Europe)</option>
        <option value="Nevis">Nevis</option>
        <option value="New Caledonia">New Caledonia</option>
        <option value="New Zealand">New Zealand</option>
        <option value="Nicaragua">Nicaragua</option>
        <option value="Niger">Niger</option>
        <option value="Nigeria">Nigeria</option>
        <option value="Niue">Niue</option>
        <option value="Norfolk Island">Norfolk Island</option>
        <option value="Norway">Norway</option>
        <option value="Oman">Oman</option>
        <option value="Pakistan">Pakistan</option>
        <option value="Palau Island">Palau Island</option>
        <option value="Palestine">Palestine</option>
        <option value="Panama">Panama</option>
        <option value="Papua New Guinea">Papua New Guinea</option>
        <option value="Paraguay">Paraguay</option>
        <option value="Peru">Peru</option>
        <option value="Phillipines">Philippines</option>
        <option value="Pitcairn Island">Pitcairn Island</option>
        <option value="Poland">Poland</option>
        <option value="Portugal">Portugal</option>
        <option value="Puerto Rico">Puerto Rico</option>
        <option value="Qatar">Qatar</option>
        <option value="Republic of Montenegro">Republic of Montenegro</option>
        <option value="Republic of Serbia">Republic of Serbia</option>
        <option value="Reunion">Reunion</option>
        <option value="Romania">Romania</option>
        <option value="Russia">Russia</option>
        <option value="Rwanda">Rwanda</option>
        <option value="St Barthelemy">St Barthelemy</option>
        <option value="St Eustatius">St Eustatius</option>
        <option value="St Helena">St Helena</option>
        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
        <option value="St Lucia">St Lucia</option>
        <option value="St Maarten">St Maarten</option>
        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
        <option value="Saipan">Saipan</option>
        <option value="Samoa">Samoa</option>
        <option value="Samoa American">Samoa American</option>
        <option value="San Marino">San Marino</option>
        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
        <option value="Saudi Arabia">Saudi Arabia</option>
        <option value="Senegal">Senegal</option>
        <option value="Seychelles">Seychelles</option>
        <option value="Sierra Leone">Sierra Leone</option>
        <option value="Singapore">Singapore</option>
        <option value="Slovakia">Slovakia</option>
        <option value="Slovenia">Slovenia</option>
        <option value="Solomon Islands">Solomon Islands</option>
        <option value="Somalia">Somalia</option>
        <option value="South Africa">South Africa</option>
        <option value="Spain">Spain</option>
        <option value="Sri Lanka">Sri Lanka</option>
        <option value="Sudan">Sudan</option>
        <option value="Suriname">Suriname</option>
        <option value="Swaziland">Swaziland</option>
        <option value="Sweden">Sweden</option>
        <option value="Switzerland">Switzerland</option>
        <option value="Syria">Syria</option>
        <option value="Tahiti">Tahiti</option>
        <option value="Taiwan">Taiwan</option>
        <option value="Tajikistan">Tajikistan</option>
        <option value="Tanzania">Tanzania</option>
        <option value="Thailand">Thailand</option>
        <option value="Togo">Togo</option>
        <option value="Tokelau">Tokelau</option>
        <option value="Tonga">Tonga</option>
        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
        <option value="Tunisia">Tunisia</option>
        <option value="Turkey">Turkey</option>
        <option value="Turkmenistan">Turkmenistan</option>
        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
        <option value="Tuvalu">Tuvalu</option>
        <option value="Uganda">Uganda</option>
        <option value="United Kingdom">United Kingdom</option>
        <option value="Ukraine">Ukraine</option>
        <option value="United Arab Erimates">United Arab Emirates</option>
        <option value="United States of America">United States of America</option>
        <option value="Uraguay">Uruguay</option>
        <option value="Uzbekistan">Uzbekistan</option>
        <option value="Vanuatu">Vanuatu</option>
        <option value="Vatican City State">Vatican City State</option>
        <option value="Venezuela">Venezuela</option>
        <option value="Vietnam">Vietnam</option>
        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
        <option value="Wake Island">Wake Island</option>
        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
        <option value="Yemen">Yemen</option>
        <option value="Zaire">Zaire</option>
        <option value="Zambia">Zambia</option>
        <option value="Zimbabwe">Zimbabwe</option>
      </select>
      <?php
        verificationArray($countriesArray, "country", "UTF-8");
        $country = $_POST["country"];
        $countryPass = !empty($country) ? true : false;
        ?>
    </li>
    <li>
      <label for="subject">Subject:</label>
      <ul class="flex-inner">
        <li>
          <label for="subject">Hardware Support</label>
              <input type="radio" name="subject" value="hardwareSupport">
        </li>
        <li>
          <label for="subject">Software Support</label>
              <input type="radio" name="subject" value="softwareSupport">
        </li>
        <li>
          <label for="subject">Other</label>
              <input type="radio" name="subject" value="other" checked="checked">
          <?php
            verificationArray($subjectArray, "subject", "UTF-8");
            $subject = $_POST["country"];
            $subjectPass = !empty($subject) ? true : false;
          ?>
        </li>
      </ul>
    </li>
    <li>
      <label for="message">Message:</label>
        <textarea  name="message" placeholder="Write your message here..." style="height:200px;width:500px;max-width:80%" required></textarea><br>
        <?php
          sanitizeTextBox("message", "UTF-8");
          verificationTextBox("message");
          $message = $_POST["message"];
          $messagePass = !empty($message) ? true : false;
        ?>
    </li>
    <li>
        <input type="submit" name="submit" value="Submit">
    </li>
  </form>
</div>
<footer class="footer">
</footer>
</body>
</html>

<?php

/******************************** Sanitization Functions ***********************************/

/* function cleanInput($input) {           //Function for stripping out malicious bits
 
  $search = array(
    '@<script[^>]*?>.*?</script>@si',   // Strip out javascript
    '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
    '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
    '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
  );
 
    $output = preg_replace($search, '', $input);
    return $output;
} */


function sanitizeNames ($name, $nameAnswer, $encoding) {
if (isset($_POST[$name])) {
    if (mb_check_encoding($_POST[$name], $encoding)) {                                                                                    //checks if the encoding in the message is what i want it to be
      if (($_POST[$name]!= strip_tags($_POST[$name])) OR ($_POST[$name]!= htmlspecialchars($_POST[$name],ENT_QUOTES))) {                  //will give an error if that is html or script tags inside the message
        echo "No html or script tags allowed inside the $nameAnswer";
        unset($_POST[$name]);
      } else if ((preg_match('/[\£$%&*()}{@#?><>,|=_+]/', $_POST[$name]))) {                                                              //it will look if there is special characters in the string
        echo "No special characters alowed in the $nameAnswer!";
        unset($_POST[$name]);
      } else {                                                                                                                              //does the sanitizing of the message
        htmlspecialchars($_POST[$name],ENT_QUOTES);
        strip_tags($_POST[$name]);
        $_POST[$name] =  filter_var($_POST[$name], FILTER_SANITIZE_STRING);
      }
    } else {
      echo "Wrong encoding in $nameAnswer";
      unset($_POST[$name]);
    }
  }
};


function verificationNames ($name, $nameAnswer) {
  if ('Submit' === ($_POST['submit'] ?? false)) {  
    if (isset($_POST[$name])) {
      if ((empty($_POST[$name])) OR (!is_string($_POST[$name]))) {                                                                            //gives an error if the string is empty or if it is not a string
        echo "The $nameAnswer is required!";
        unset($_POST[$name]);
      }
    }
  }
};


function sanitizeTextBox ($nameAnswer, $encoding) {
  if (isset($_POST["message"])) {
    if (mb_check_encoding($_POST["message"], $encoding)) {                                                                                    //checks if the encoding in the message is what i want it to be
      if (($_POST["message"]!= strip_tags($_POST["message"])) OR ($_POST["message"]!= htmlspecialchars($_POST["message"],ENT_QUOTES))) {      //will give an error if that is html or script tags inside the message
        echo "No html or script tags allowed inside the $nameAnswer";
        unset($_POST["message"]);
      } else {                                                                                                                                //does the sanitizing of the message
        htmlspecialchars($_POST["message"],ENT_QUOTES);
        strip_tags($_POST["message"]);
        $_POST["message"] =  filter_var($_POST["message"], FILTER_SANITIZE_STRING);
      }
    } else {
      echo "Wrong encoding in $nameAnswer";
      unset($_POST["message"]);
    }
  }
};


function verificationTextBox ($nameAnswer) {
  if ('Submit' === ($_POST['submit'] ?? false)) {  
    if (isset($_POST["message"])) {
      if ((empty($_POST["message"])) OR (!is_string($_POST["message"]))) {                                                                            //gives an error if the string is empty or if it isn't a string
        echo "The $nameAnswer is required!";
        unset($_POST["message"]);
      }
    }
  }
};


function sanitizeEmail ($encoding) {
  if (isset($_POST["email"])) {
    if (mb_check_encoding($_POST["email"], $encoding)) {
      if (($_POST["email"]!= strip_tags($_POST["email"])) OR ($_POST["email"]!= htmlspecialchars($_POST["email"],ENT_QUOTES))) {                  //will give an error if that is html or script tags inside the email
        echo "No html or script tags allowed inside the email";
        unset($_POST["email"]);
      }
      $_POST["email"] = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    } else {
      echo "Wrong encoding in the email";
      unset($_POST["email"]);
    }
  }
};


function verificationEmail () {
  if ('Submit' === ($_POST['submit'] ?? false)) {  
    if (isset($_POST["email"])) {
        if (false === filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
          echo "Please provide a valid email!";
          unset($_POST["email"]);
        }
      }
    }
};


function verificationArray ($array, $name, $encoding) {
  if (isset($_POST[$name])) {
    if (mb_check_encoding($_POST[$name], $encoding)) {
      if (!in_array($_POST[$name],$array)){
        echo "$name isn't on the list!";
        unset($_POST[$name]);
      }
    } else {
      echo "Wrong encoding in $name";
      unset($_POST[$name]);
    }
  }
};


// function feedbackSubmit ($varMail){
//   if ($varMail) {
//     echo 'Your message has been sent. Our support team will evaluate the problem and contact you as soon as possible.';
//   }
//     echo "There was an error. Message could not be sent.";
// }


$lastNameEmail = strtoupper($lastName);                           //put the last name with uppercase letter in the message of the email

$mailMessage =                                                    //message in html that will be send to the email
"<div>
<h3>Email from $lastNameEmail $firstName</h3>
<h4>From: $country</h4>
<h4>Subject: $subject </h4><br>
<p>Message:<br> $message</p>
</div>";



/******************************** MAIN CODE ***********************************/



if ('Submit' === ($_POST['submit'] ?? false)) {  
  // echo $firstName;
  // echo $lastName;
  // echo $email;
  // echo $country;
  // echo $subject;
  // echo $mailMessage;
  //  if (($arrayPass = true) AND ($stringPass = true)) {
  //    echo "pass works!!!";
  //  }
  // echo $message;
  // if (($messagePass) AND ($firstNamePass) AND ($lastNamePass) AND ($emailPass) AND ($countryPass) AND ($subjectPass)){
  //   echo "message pass is passing";
  // }

  if (($messagePass) AND ($firstNamePass) AND ($lastNamePass) AND ($emailPass) AND ($countryPass) AND ($subjectPass)) {
    //echo "stringPass working!!";
    //echo "pass works!!!";

    /******************************** PHPMailer ***********************************/
    
    try {
      
      $mail = new PHPMailer();

    
      $mail->isSMTP();
      $mail->Host = 'smtp.mailtrap.io';
      $mail->SMTPAuth = true;
      $mail->Username = "5be277d787b34d"; //paste one generated by Mailtrap
      $mail->Password = "2b0b5ac2c23e50";
      $mail->Port = 2525;

      //Recipients
      $mail->setFrom("$email", "$lastNameEmail $firstName");
      $mail->addAddress('supporthackerspoulette-df4f0a@inbox.mailtrap.io', 'Technical Support');     //Add a recipient
  

      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = "Support request with the subject: $subject";
      $mail->Body    = $mailMessage;
      $mail->AltBody = strip_tags($mailMessage);

      $mail->send();
      echo 'Your message has been sent. Our support team will look into the problem and contact you as soon as possible.';
    } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
  }
};



?>