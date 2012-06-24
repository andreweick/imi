<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Institute of Modern Intelligence - Contact</title>
<link rel="stylesheet" type="text/css" href="mainstyle.css" />
	<script src="http://mint.imintel.org/?js" type="text/javascript"></script>

</head>

<body>
    
    <div id="contactInfo">
    <div id="contactHead">
  			<a href="index.php"><img class="imageright" src="images/return.png" width="122" height="36" alt="Return" /></a>
        </div>
<p>The Institute for Modern Intelligence – IMI – is embracing the evolution of the intelligence community from the expanding theoretical foundations, to the innovative techniques, to the implications for organization and management. In short, the IMI is dedicated to developing the science, practice, and governance of modern intelligence.<br /><br /></p>
<?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  //send email
  $email = $_REQUEST['email'] ;
  $subject = $_REQUEST['subject'] ;
  $message = $_REQUEST['message'] ;
  mail("andrew.eick@imintel.org", "[imintel.org] $subject",
  $message, "From:" . $email);
  echo "Thank you for using our mail form";
  }
else
//if "email" is not filled out, display the form
  {
  echo "<form method='post' action='contact-us.php'>
  <p>Email: <input name='email' type='text' /></p><br />
  <p>Subject: <input name='subject' type='text' /></p><br />
  Message:<br />
  <textarea name='message' rows='15' cols='40'>
  </textarea><br />
  <input type='submit' />
  </form>";
  }
?>
    </div>

<script type="text/javascript">
  var _gauges = _gauges || [];
  (function() {
    var t   = document.createElement('script');
    t.type  = 'text/javascript';
    t.async = true;
    t.id    = 'gauges-tracker';
    t.setAttribute('data-site-id', '4f035e7e613f5d504a000001');
    t.src = '//secure.gaug.es/track.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(t, s);
  })();
</script>


</body>
</html>
