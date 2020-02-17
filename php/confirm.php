<?php
  mb_language("Japanese");
  mb_internal_encoding("UTF-8");

  $to = $_POST['hime@outlook.jp'];
  $title = $_POST['title'];
  $content = $_POST['body'];

  if(mb_send_mail($to, $title, $content)){
    echo "メールを送信しました";
  } else {
    echo "メールの送信に失敗しました";
  }
?>s);
