
<?php
  $toEmail = 'collegetote@example.com';
  $mailHeaders = "Rating: " . $_POST['rating'] ."<". $_POST['messege'] .">\r\n";
$details="Rating : ".$_POST["rating"]."\n"."Messege : ".$_POST["messege"]."\n";
if(mail($toEmail, $mailHeaders, $details)) {
echo"<p class='success'>Contact Mail Sent.</p>";
} else {
echo"<p class='Error'>Problem in Sending Mail.</p>";
}
?>