<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Yashas Production</title>
    <style type="text/css">
      body
      {
        background-image: url(https://images.unsplash.com/photo-1556474560-501713f158a7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1051&q=80);
        background-size: cover;
        background-attachment: fixed;
      }
      .content
      {
        background: transparent;
        width: 50%;
        padding: 40px;
        margin: 100px auto;
        font-family: calibri;

      }

    </style>
  </head>
  <body style="background-color: LightGrey";>

  </body>
  <body>
    <div class="content">


<h1>
  <em>CONTACT US @</em>
</h1>



<?php
echo "<h2><em>Gmail: Healthcare@gmail.com</em></h2>";
echo "<h2><em>Phone: +919293949596</em></h2>";
 ?>
 <h2>For any Queries, please send your thoughts</h2>
<form class="" action="contact.php" method="post">
  <input type="text" name="gmail" placeholder="Enter Your Email-ID">
  <br />
  <label for="">Your Thoughts: </label><br>
        <textarea name="Your Thoughts: " rows="10" cols="80"></textarea>
        <br />
        <input class="btn btn-primary" type="submit" name="submit" value="Submit">
</form>
<?php
if(isset($_POST['submit']))
{
  $gmail=$_POST['gmail'];
  if($gmail)
  {
    echo "<h3><em>We've recieved your queries</em></h3>";
    echo "<br />";
    echo "<h3><em>We will get in touch with your soon</em></h3>";
  }
  else
  {
    echo "<h3><em>You have to enter your GMAIL-ID</em></h3>";
  }
}
 ?>
</div>

  </body>
</html>
