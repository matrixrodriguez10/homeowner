<?php
session_start();
  include("config/connection.php");
  include("controllers/function.php");
  
  $user_data = check_login($conn);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/style.css" />
    <title>User Management Edit</title>
  </head>
  <body id="body">
    <div class="container">
      <nav class="navbar">
        <div class="nav_icon" onclick="toggleSidebar()">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <div class="navbar__left">
          <a href="Dashboard.php">Home</a>
          <a class="active_link" href="User.php">Management</a>
          <a href="Collection.php">Payment</a>
        </div>
      </nav>

      <main>
        <div class="container_user">	
          <div class="card-header" id="user">
            Create User
          </div>
          <form action="user_crud.php" method="post">
              <div class="container_create">
                <div class="row">
                    <label>Firstname:</label><span><input type="text" name="firstname" required> </span>
                      <label>Username:</label><span><input type="text" name="username" required></span>
                      <label>Birthdate:</label><span><input type="date" name="bday" required></span><br>
                      <label>Email:</label><span><input    type="text" name="email" required></span>
                      <label>Contact #:</label><span><input type="text" name="contact" required></span>
                    </div>

                    <div class="column">
                        <label>Lastname:</label><span><input  type="text" name="lastname" required> </span>
                        <label>Password:</label><span><input  type="Password" name="password" required></span>
                        <label>Gender:</label><span><input type="text" name="gender" required></span>
                        <label>Adress:</label><span><input    type="textarea" name="address" required> </span>  
                    </div>                   
                </div>
                <div class="btn_con"><button class="button_create" type="submit" name="save" value="Save">Create</button></div>
              </div>
          </form> 
        </div>
      </main>







            <!--SIDE BAR STARTS HER-->
      <div id="sidebar">
        <div class="sidebar__title">
            <h3>Admin</h3>
          <i
            onclick="closeSidebar()"
            class="fa fa-times"
            id="sidebarIcon"
            aria-hidden="true"
          ></i>
        </div>

        <div class="sidebar__menu">
          <div class="sidebar__link ">
            <i class="fa fa-home"></i>
            <a href="Dashboard.php">Dashboard</a>
          </div>
          <h2>MANAGEMENT</h2>
          <div class="sidebar__link active_menu_link">
            <i class="fa fa-user-secret" aria-hidden="true"></i>
            <a href="User.php">User Management</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-wrench"></i>
            <a href="Admin.php">Admin Profile</a>
          </div>
          <h2>PAYMENT</h2>
          <div class="sidebar__link">
            <i class="fa fa-money"></i>
            <a href="Collection.php">Collection</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-calculator"></i>
            <a href="Xpense.php">Expense</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-handshake-o"></i>
            <a href="other transaction.php">Other Transaction</a>
          </div>
          <div class="sidebar__logout">
            <i class="fa fa-power-off"></i>
            <a href="logout.php">Log out</a>
          </div>
        </div>
            <!--SIDEBAR ENDS HERE-->
      </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="script.js"></script>
  </body>
</html>