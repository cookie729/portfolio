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
          $name=$_POST['name'];
          $email=$_POST['email'];
          $number=$_POST['number'];
          $message=$_POST['message'];
          
          $name= htmlspecialchars($name);
          $email= htmlspecialchars($email);
          $number= htmlspecialchars($number);
          $message= htmlspecialchars($message);
          
          if($name=='')
          {
            print '名前が入力されておりません。<br>';
          } else {
            print $name;
            print '様';
            print'ご連絡ありがとうございます。<br>';
          }
          
          if($email=='')
          {
            print 'メールアドレスが入力されておりません。<br>';
          } else {
            print 'email : ';
            print $email;
            print '<br>';
          }
          
          if($number=='')
          {
            print '電話番号が入力されておりません。<br>';
          } else {
            print 'number : ';
            print $number;
            print '<br>';
          }
          
          if($message=='')
          {
            print 'メッセージが入力されておりません。<br>';
          } else {
            print 'message : ';
            print $message;
            print '<br>でお間違いないでしょうか?<br>';
          }

          if($name==''|| $email==''|| $number==''|| $message=='')
          {
            print'<form>';
              print'<input type="button" onclick="history.back()" value="戻る">';
            print'</form>';
          } else {
            print '<form  method="post" action="reply.php">';
            print '<input name="name" type="hidden" value="'.$name.'">';
            print '<input name="email" type="hidden" value="'.$email.'">';
            print '<input name="number" type="hidden" value="'.$number.'">';
            print '<input name="message" type="hidden" value="'.$message.'">';

            print '<input type="button" onclick="history.back()" value="戻る">';
            // print '<br>';
            print '<input type="submit" value="送信">';
            print '</form>';
          }

        ?>
        </p>
      </div>
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