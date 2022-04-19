<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <?php
    if(isset($_POST["submit"])){
      require("mysql.php");
      $stmt = $mysql->prepare("SELECT * FROM accounts WHERE USERNAME = :user"); //Username überprüfen
      $stmt->bindParam(":user", $_POST["username"]);
      $stmt->execute();
      $count = $stmt->rowCount();
      if($count == 1){
        //Username ist frei
        $row = $stmt->fetch();
        if(password_verify($_POST["pw"], $row["PASSWORD"])){
          session_start();
          $_SESSION["username"] = $row["USERNAME"];
          header("Location: geheim.php");
        } else {
          echo "Der Login ist fehlgeschlagen";
        }
      } else {
        echo "Der Login ist fehlgeschlagen";
      }
    }
     ?>


    <div class="fenster">

    <h1>Anmelden</h1>
    <form action="index.php" method="post">
      <input type="text" name="username" placeholder="Username" required ><br>
      <input type="password" name="pw" placeholder="Passwort" required ><br>
      <button type="submit" name="submit">Einloggen</button>
    </form>
    <br>
    <!-------- <a href="register.php">Noch keinen Account?</a><br> <!------->
    <a href="passwordreset.php">Hast du dein Passwort vergessen?</a>

    </div>
  <style>
      body {
          background-color: black;
      }


      h1, p, a {
          font-family: 'Raleway', sans-serif;
          font-color: white;
      }
      a {
          text-decoration: none;
      }
      div.fenster {
          text-align: center;
          background-color: rgb(106, 44, 44);
          border-radius: 20%;
          border: none;
          align-items: center;
          width: 33%;
          height: 33%;
          margin: 10%;
      }
  </style>



  </body>
</html>
