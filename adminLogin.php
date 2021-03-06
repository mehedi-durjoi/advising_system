<?php
include 'core/init.php';

if(isset($_SESSION['admin'])) {
  header("location: adminDashboard.php");
}

if(isset($_POST['submit'])) {
  $admin = new Admin;
  $admin->login($_POST['username'], $_POST['password']);
  header("location: adminDashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    body {
      margin: 0;
      padding: 0;
    }
      header {
        height: 50px;
        color: #fff;
        background-color: #6146D9;
        padding-left: 50px;
        padding-right: 50px;
      }
      header a {
        color: #fff;
        text-decoration: none;
      }
      .logo {
        width: 20%;
        float: left;
      }
      .logo {
        font-size: 20px;
        line-height: 50px;
      }
      nav {
        width: 80%;
        float: right;
      }
      nav ul {
        float: right;
        list-style: none;
        margin: 0px;
        padding: 0px;
      }
      nav ul li {
        display: inline-block;
        float: left;
        margin-left: 10px;
        line-height: 50px;
      }
      .card {
        height: 300px;
        width: 400px;
        margin: auto;

        padding: 10px;
        margin-top: 20px;
      }
      .card-header {
        height: 30px;
        text-align: center;
        background-color: #9edfe5;
        line-height: 30px;
      }
      .card-body {
        padding-top: 10px;
        width: 100%;
      }
      .form-row {
        width: 100%;
        display: flex;
        margin-top: 10px;
        margin-bottom: 10px;
      }

      input {
        flex: 1;
        margin-left: 10px;
      }
      .submit {
        height: 20px;
        width: 100px;
        margin-left: auto;
        margin-right: auto;
      }
    </style>
  </head>
  <body>
    <header>
      <div class="logo">
        AdminDashboard
      </div>
      <nav>
        <ul>
          <li> <a href="#">Dashboard</a> </li>
          <li> <a href="#">Students</a> </li>
          <li> <a href="#">Courses</a> </li>
          <li> <a href="<?php echo $_SERVER['PHP_SELF'] . "?logout='1'" ?>">Logout</a> </li>
        </ul>
      </nav>
    </header>

    <main>
      <div class="card">
        <div class="card-header">
          <h3>Admin Login</h3>
        </div>
        <div class="card-body">
          <form class="" action="" method="post">
            <div class="form-row">
              <label for="">User name: </label>
              <input type="text" name="username" placeholder="username">
            </div>
            <div class="form-row">
              <label for="">Password: </label>
              <input type="text" name="password" placeholder="password">
            </div>
            <div class="form-row">
              <button class="submit" type="submit" name="submit">Login</button>
            </div>

          </form>
        </div>
      </div>
    </main>
  </body>
</html>
