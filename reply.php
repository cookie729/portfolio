<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kouki's Portfolio</title>
  <link rel="shortcut icon" href="images/favicon.svg">
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kalam&family=Klee+One:wght@600&family=Short+Stack&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
  rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <header id="header">
      <div class="header-nav content-width">
      
      <a  class="header-logo" href="index.html">
        <img class="main-logo" src="images/main-logo.svg" alt="logo">
        <h1 class="site-title">Let's move on</h1>
      </a>

      <div class="mobile-nav">
        <span class="material-icons" id="open">menu</span>
      </div>
      
      <nav class="pc-nav">
        <ul>
          <li><a class="pc-nav-text" href="index.html">Home
          </a></li>
          <li><a class="pc-nav-text" href="service.html">Service</a></li>
          <li><a class="pc-nav-text" href="about.html">About</a></li>
          <li><a class="pc-nav-text" href="works.html">Works</a></li>
          <li><a class="pc-nav-text" href="contact.html">Contact</a></li>
        </ul>
      </nav>
      
      <div class="overlay">
        <span class="material-icons" id="close">close</span>
          <ul class="close-nav">
            <li class="close-text"><a href="index.html">Home</a></li>
            <li class="close-text"><a href="service.html">Service</a></li>
            <li class="close-text"><a href="about.html">About</a></li>
            <li class="close-text"><a href="works.html">Works</a></li>
            <li class="close-text"><a href="contact.html">Contact</a></li>
          </ul>
      </div>
      </div>
    </header>
    
    <main>
      <div class="contact-check">
        <p>
          <?php
      $dsn= 'mysql:host=localhost;dbname=xs916906_koukilmo;charset=utf8';
      $user= 'xs916906_kouki';
      $pass= 'koukilmo';
      // var_dump($dbh);

      try {

        $pdo = new PDO($dsn,$user,$pass, array(PDO::ATTR_ERRMODE =>
        PDO::ERRMODE_EXCEPTION));

        // print('<br>');
        // if ($pdo == null) {
        //   print('接続に失敗しました。<br>');
        // } else {
        //   print ('接続に成功しました。<br>');
        // }
        // exit;

      } catch (PDOException $e) {
        print('Error:'.$e->getMessage());
        die();
      }

      $name=$_POST['name'];
      $email=$_POST['email'];
      $number=$_POST['number'];
      $message=$_POST['message'];
      
      $name= htmlspecialchars($name);
      $email= htmlspecialchars($email);
      $number= htmlspecialchars($number);
      $message= htmlspecialchars($message);
      
      echo $name;
      echo '様<br/>';
      echo 'メッセージありがとうございました。<br/>';
      echo $email;
      echo 'に確認メールを送りましたので、ご確認お願いします。<br/>';
      
      // ユーザーに連絡
      $mail_sub='ご連絡ありがとうございます。';
      $mail_body= $name."様。\nこの度はご連絡頂きましてありがとうございます。\nメッセージの確認をし、再度ご連絡させて頂きますので宜しくお願い致します。";
      $mail_body=html_entity_decode($mail_body, ENT_QUOTES, "UTF-8");
      $mail_head='From: cookie.lmo729@gmail.com';
      mb_language('Japanese');
      mb_internal_encoding("UTF-8");
      mb_send_mail($email, $mail_sub, $mail_body, $mail_head);


       // 管理者に連絡
       $email_admin = 'cookie.lmo729@gmail.com';
       $mail_sub_admin = 'kouki-lmoのメールがきたよ!';
       $mail_body_admin = $name."様。\nメール : $email\n 電話番号 : $number\n メッセージ : $message";
       $mail_body_admin = html_entity_decode($mail_body_admin, ENT_QUOTES, "UTF-8");
       $mail_head = 'From: cookie.lmo729@gmail.com';
       mb_send_mail($email_admin, $mail_sub_admin, $mail_body_admin, $mail_head);
      
       try {
        $sql = 'INSERT INTO contact_form (name, email, number, message) VALUES ("'.$name.'","'.$email.'","'.$number.'","'.$message.'")';
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
       } catch (PDOException $ex){
          print('PDOException:' . $ex->getMessage());
      }
      ?>
    </p>
  </div>
    <a class="contact-check check-button" href="index.html">Homeへ戻る</a>
</main>

    <footer id="footer">
        <ul class="footer-nav">
          <li><a class="nav-text" href="service.html">Service</a></li>
          <li><a class="nav-text" href="about.html">About</a></li>
          <li><a class="nav-text" href="works.html">Works</a></li>
          <li><a class="nav-text" href="contact.html">Contact</a></li>
        </ul>

      <div class="footer-icon">
        <a class="sunflower icon-main footer-icon-move" href="#">
          <img src="images/footer_top.svg" alt="">
          <p class="icon-text">Top</p>
        </a>
        <a class="sunflower icon-hover footer-icon-move" href="#">
          <img src="images/footer_hover.svg" alt="">
          <p class="icon-text">Top</p>
        </a>
      </div>

      <p class="copy">&copy;2022 Kouki's Portfolio</p>

    </footer>

    <ul class="display-animation">
      <li><img class="display-item" src="images/top_down1.svg" alt=""></li>
      <li><img class="display-item" src="images/top_down2.svg" alt=""></li>
      <li><img class="display-item" src="images/top_down3.svg" alt=""></li>
      <li><img class="display-item" src="images/top_down4.svg" alt=""></li>
      <li><img class="display-item" src="images/top_down5.svg" alt=""></li>
      <li><img class="display-item" src="images/top_down1.svg" alt=""></li>
      <li><img class="display-item" src="images/top_down2.svg" alt=""></li>
      <li><img class="display-item" src="images/top_down3.svg" alt=""></li>
      <li><img class="display-item" src="images/top_down4.svg" alt=""></li>
      <li><img class="display-item" src="images/top_down5.svg" alt=""></li>
    </ul>
  </div>

  <script src="js/main.js"></script>
  <script src="jquery-3.6.0.min.js"></script>
</body>
</html>