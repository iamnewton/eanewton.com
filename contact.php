<?php
	include('globals/globals.php');

	$metaDescription = "Contact us for a quote, feedback or just in general.";
	$metaKeywords = "finance, finances, orange county, california, la habra, taxes, tax, business, services, bookkeeping, professional, enrolled agent, preparer, accounting, financial, irs representation";
	$pageId = "Contact";
	
	include(INCLUDE_PATH."/globals/head.php");
	include(INCLUDE_PATH."/globals/masthead.php");
	include(INCLUDE_PATH."/globals/breadcrumb.php");
	
// process the email
if (array_key_exists('send', $_POST)) {
  $to = 'info@eanewton.com'; // use your own email address
  $subject = 'Feedback/Questions';
  
  // list expected fields
  $expected = array('name', 'email', 'message');
  // set required fields
  $required = array('name', 'email', 'message');
  // create empty array for any missing fields
  $missing = array();
  
  // assume that there is nothing suspect
  $suspect = false;
  // create a pattern to locate suspect phrases
  $pattern = '/Content-Type:|Bcc:|Cc:/i';
  
  // function to check for suspect phrases
  function isSuspect($val, $pattern, &$suspect) {
    // if the variable is an array, loop through each element
	// and pass it recursively back to the same function
	if (is_array($val)) {
      foreach ($val as $item) {
	    isSuspect($item, $pattern, $suspect);
	    }
	  }
    else {
      // if one of the suspect phrases is found, set Boolean to true
	  if (preg_match($pattern, $val)) {
        $suspect = true;
	    }
	  }
    }
  
  // check the $_POST array and any sub-arrays for suspect content
  isSuspect($_POST, $pattern, $suspect);
  
  if ($suspect) {
    $mailSent = false;
	unset($missing);
	}
  else {
    // process the $_POST variables
    foreach ($_POST as $key => $value) {
      // assign to temporary variable and strip whitespace if not an array
      $temp = is_array($value) ? $value : trim($value);
	  // if empty and required, add to $missing array
	  if (empty($temp) && in_array($key, $required)) {
	    array_push($missing, $key);
	    }
	  // otherwise, assign to a variable of the same name as $key
	  elseif (in_array($key, $expected)) {
	    ${$key} = $temp;
	    }
	  }
	}
  
  // validate the email address
  if (!empty($email)) {
    // regex to ensure no illegal characters in email address 
	$checkEmail = '/^[^@]+@[^\s\r\n\'";,@%]+$/';
	// reject the email address if it doesn't match
	if (!preg_match($checkEmail, $email)) {
	  array_push($missing, 'email');
	  }
	}
  
  // go ahead only if not suspect and all required fields OK
  if (!$suspect && empty($missing)) {
    // set default values for variables that might not exist
	
    // build the message
    $message .= $message;

    // limit line length to 70 characters
    $message = wordwrap($message, 70);
    
	// create additional headers
	$additionalHeaders = "From: $name <$email>";
	if (!empty($email)) {
	  $additionalHeaders .= "\r\nReply-To: $email";
	  }
	
    // send it  
    $mailSent = mail($to, $subject, $message, $additionalHeaders);
	if ($mailSent) {
	  // $missing is no longer needed if the email is sent, so unset it
	  unset($missing);
	  }
    }
  }
?>


<!-- column1 : start -->
<div class="main">

    <h1><?=$pageTitle ?></h1>

	<?php if ($_POST && isset($missing)) { ?>
		<p class="warning">Please complete the missing item(s) indicated.</p>
	<?php } elseif ($_POST && !$mailSent) { ?>
		<p class="warning">Sorry, there was a problem sending your message! Please try later.</p>
	<?php } elseif ($_POST && $mailSent) { ?>
		<p class="success">Your message has been sent.  Thank you.</p>
	<?php } ?>
	
    <form action="" method="post">
    	<fieldset>  	
            <label for="name">Name</label>
            <input name="name" id="name" type="text" 
                <?php if (isset($missing)) {
                    echo 'value="'.htmlentities($_POST['name']).'"';
                } ?>
            />
            <?php if (isset($missing) && in_array('name', $missing)) { ?>
                <span class="warning">Please enter your name</span>
            <?php } ?>
        </fieldset>
        
        <fieldset>
            <label for="email">Email</label>
            <input name="email" id="email" type="text" class="" 
                <?php if (isset($missing)) {
                    echo 'value="'.htmlentities($_POST['email']).'"';}
                ?>
            />
            <?php if (isset($missing) && in_array('email', $missing)) { ?>
                <span class="warning">Please enter a valid email address</span>
            <?php } ?>

        <fieldset>
            <label for="message">Message</label>
            <textarea name="message" id="message" value="">
                <?php if (isset($missing)) {
                    echo htmlentities($_POST['message']);
                } ?>
            </textarea>
            <?php if (isset($missing) && in_array('message', $missing)) { ?>
                <span class="warning message">Please enter your message</span>
            <?php } ?>
        </fieldset>
        <input name="send" id="send" type="submit" value="send" />
    </form>



</div>
<!-- column1 : end -->

<?php
	include(INCLUDE_PATH."/globals/navigation.php");
	include(INCLUDE_PATH."/globals/footer.php");
?>
