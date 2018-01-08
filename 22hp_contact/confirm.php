<!DOCTYPE html>
<html>
  <head>
    
  </head>
  <body>
     <?php
      mb_language("Japanese");
      mb_internal_encoding("UTF-8");

      $to  =  '22thailandcompany.com';
      $subject  =  ' お問い合わせ ';
      $header  =  "From:" .$_POST['email'].;
      $body  =  "お名前:" .$_POST['user']."\n";
      $body  =  "内容" .$_POST['comment']."\n";
      
      
      if(mb_send_mail( $to, $subject, $body,$header)) {
      	 echo "送信しました";
      }  else {
      	 echo "送信に失敗しました";
      } ;
    ?>

//フォームの表示
      <?php
        //お名前
        echo '<p> お名前：' . htmlspecialchars($_POST['user']) . '</p>;
        //メールアドレス
        echo '<p> メールアドレス： ' . htmlspecialchars($_POST['email']) . '</p>;
        //お問い合わせ内容
        echo '<p> お問い合わせ内容： ' . htmlspecialchars($_POST['comment']) . '</p>;
      ?>
  </body>
</html>
  