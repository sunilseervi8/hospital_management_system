<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Yashas Production</title>
    <style type="text/css">
    body
    {
      background-image: url(https://images.unsplash.com/photo-1611690828749-66c846dbd1b4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);
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

  <body>
    <div class="content">



<h1><center>
  <em>Enter Your Details For Registration</em>
</center></h1>
<center>


<div class="container">
  <div class="col-xs-6">
    <form class="" action="patient.php" method="post">
      <div class="form-group">
        <label for="FirstName"><em><h4>Enter Your First Name</h4></em></label>
        <input type="text" name="FirstName" class="form-control">
</div>
        <div class="form-group">
          <label for="SecondName"><em><h4>Enter Your Second Name</h4></em></label>
<input type="text" name="SecondName" class="form-control">
</div>
          <div class="form-group">
            <label for="age"><em><h4>Enter Your Age</h4></em></label>
            <input type="number" name="age" class="form-control">
          </div>
        <div class="form-group">
        <label for="address"><em><h4>Enter Your Address</h4></em></label>
        <input type="text" name="address" class="form-control">
        </div>
        <div class="form-control">
          <h3><em>Do You Have Blood Pressure</em></h3>
          <input type="radio" name="BP"
<?php if (isset($BP) && $BP=="yes") echo "checked";?>
value="yes"><em>Yes</em>
<input type="radio" name="BP"
<?php if (isset($BP) && $BP=="no") echo "checked";?>
value="no"><em>No</em>


        </div>
        <div class="form-control">
          <h3><em>Do You Have Sugar</em></h3>
          <input type="radio" name="sugar"
<?php if (isset($sugar) && $sugar=="yes") echo "checked";?>
value="yes"><em>Yes</em>
<input type="radio" name="sugar"
<?php if (isset($sugar) && $sugar=="no") echo "checked";?>
value="no"><em>No</em>


        </div>
        <div class="form-control">
          <h3><em>Have You Taken The COVID-19 Vaccine</em></h3>
          <input type="radio" name="vaccine"
<?php if (isset($vaccine) && $vaccine=="yes") echo "checked";?>
value="yes"><em>Yes</em>
<input type="radio" name="vaccine"
<?php if (isset($vaccine) && $vaccine=="no") echo "checked";?>
value="no"><em>No</em>


        </div>
      </div>
      <input class="btn btn-primary" type="submit" name="submit" value="Submit">

    </form>

  </div>

</div>

</center>

</body>
</html>
<?php
if(isset($_POST['submit']))
{
  $FirstName=$_POST['FirstName'];
  $SecondName=$_POST['SecondName'];
  $age=$_POST['age'];
  $address=$_POST['address'];
  $BP=$_POST['BP'];
  $sugar=$_POST['sugar'];
  $vaccine=$_POST['vaccine'];


  $connection = mysqli_connect('localhost', 'root', '', 'Patient');
  if($connection)
  {
    echo "We are connected";
  }
  else
  {
    die("Database connection failed");
    }
    $query = "INSERT INTO Patient_Details(FirstName,SecondName,age,address,BP,sugar,vaccine)";
    $query .= "VALUES('$FirstName','$SecondName','$age','$address','$BP','$sugar','$vaccine')";
    $result = mysqli_query($connection,$query);
    if(!result)
    {
      die('Query Failed!' . mysqli_error());
    }
}

 ?>
