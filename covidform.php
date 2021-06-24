<?php
session_start();

  $conn = mysqli_connect('remotemysql.com', 'J5BJ2ZlQGm', 'FYAvWP4mmz', 'J5BJ2ZlQGm');

  if($_SERVER['REQUEST_METHOD']=="POST"){

    //something was posted
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $date = $_POST['date'];
    $temperature = $_POST['temperature'];
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];


    if (!empty($firstname) && !empty($lastname) && !empty($contact) && !empty($gender) && !empty($email) && !empty($address) && !empty($date) && !empty($temperature) && !empty($q1) && !empty($q2) && !empty($q3) && !empty($q4)) {

        //save to database
        $query = "INSERT Into covid (firstname, lastname, contact, gender, email, address, date, temperature, q1, q2, q3, q4) values('$firstname', '$lastname', '$contact', '$gender', '$email', '$address', '$date', '$temperature', '$q1', '$q2', '$q3', '$q4')";


        mysqli_query($conn, $query);

        header("Location: covidform.php");
        die;
    }
    else {
        echo "Please enter some valid information";

    }
  }
?>

<!DOCTYPE html>
<html>
<head>
    <title>covid19 tracker form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/style_home.css" rel="stylesheet" type="text/css">
    <style>
      
    </style> 


<body>
  <header id="header_wrapper">
    <div class="container">
       <div class="header_box">
           <div class="logo">San Antonio Valley 2</div>
        <nav class="navbar navbar-inverse" role="navigation">
          <div class="navbar-header">
             <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
            </button>
          </div>
          <div id="main-nav" class="collapse navbar-collapse navStyle">
            <ul class="nav navbar-nav" id="mainNav">
               <li><a href="index.php" class="scroll-link">Home</a></li>
               <li><a href="about us.php" class="scroll-link">About</a></li>
               <li><a href="announcement.php" class="scroll-link">Announcement </a></li>
               <li><a href="FAQs.php" class="scroll-link">FAQs</a></li>
               <li><a href="officers.php" class="scroll-link">Officers</a></li>
               <li><a href="login.php" class="scroll-link">Login</a></li>
           </ul>
          </div>
        </nav>
      </div>
    </div>
</header>

<div class="wrapper_d" style="background-color: #E5E5E5; height: 100%;">
      		<div class="td_2a">
      			<form method="post">
              <table>
                <tr>
                  <label style="color: black; font-size: 25px; margin-left: 30%; margin-top: 3%">Covid-19 Tracking Form</label>
                </tr><br><br>
                <tr >
                 <td>
                   <label style="color: black;">First name: </label> &nbsp;
                 </td>
                  <td>
                   <span><input style="" type="text" name="firstname"></span>
                 </td>
                 <td>
                   <label style="color: black;">Last name: </label> &nbsp;
                 </td>
                  <td>
                   <span><input type="text" name="lastname"></span>
                 </td>
                </tr><br>
                <tr >
                 <td>
                   <label style="color: black;">Contact: </label> &nbsp;
                 </td>
                  <td>
                   <span><input type="text" name="contact"></span>
                 </td>
                 <td>
                   <label style="color: black;">Gender: </label> &nbsp;
                 </td>
                  <td>
                   <span><input type="text" name="gender"></span>
                 </td>
                </tr>
                <tr >
                 <td>
                   <label style="color: black;">Email: </label> &nbsp;
                 </td>
                  <td>
                   <span><input type="text" name="email"></span>
                 </td>
                 <td>
                   <label style="color: black; padding: 0;">Address: </label> &nbsp;
                 </td>
                  <td>
                   <span><input type="text" name="address"></span>
                 </td>
                </tr>
                <tr >
                 <td>
                   <label style="color: black;">Date: </label> &nbsp;
                 </td>
                  <td>
                   <span><input type="text" name="date"></span>
                 </td>
                 <td>
                   <label style="color: black;">Temperature: </label> &nbsp;
                 </td>
                  <td>
                   <span><input type="text" name="temperature"></span><br>
                 </td>
                </tr>
              <tr><td><br><label style="color: black;">Questions:</label></td></tr>
                <tr>
                  <td colspan="4">
                   <label style="color: black;">Are you experiencing symptoms og a respiratory of a respiratory infection, such as cough, fever, shortness of breath, or sore throat?</label><br>
                   <span><input style="width: 20%;" type="text" name="q1" placeholder="yes or no"></span>
                  </td>
                </tr>
                <tr>
                  <td colspan="4">
                   <br><label style="color: black;">In the past 14 days, did you interacted with someone who has COVID-19, or us exhibiting COVID-19 symptoms?</label><br>
                   <span><input style="width: 20%;" type="text" name="q2" placeholder="yes or no"></span>
                  </td>
                 </tr>
                  <tr>
                  <td colspan="4">
                   <br><label style="color: black;">Did you travel internationally within the 14 days to countries with sustained COVID-19 transmission?</label> <br>
                   <span><input style="width: 20%;" type="text" name="q3" placeholder="yes or no"></span>
                  </td>
                 </tr>
                 <tr>
                  <td colspan="4">
                   <br><label style="color: black;">Do you live in a community where the risk of COVID-19 is high?</label><br>
                   <span><input style="width: 20%;" type="text" name="q4" placeholder="yes or no"></span>
                  </td>
                 </tr>

                 <tr>
                  <div style="text-align: center;"><td><br><br><input style="background-color: #4CC417; width: 100px; border-radius: 15px; border: none;" type="submit" name="submit" value="SUBMIT"></td></div>
                </tr>
              </table>
            </form>
      		</div>
</div>
</body>
</html>