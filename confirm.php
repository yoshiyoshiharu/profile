<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>確認画面</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="contact">
    <div>
      <?php
      mb_language("Japanese");
  			mb_internal_encoding("UTF-8");

  			$to = "haruki1226yh@ezweb.ne.jp";
  			$title = $_POST['name'] . "様" . "(" . $_POST['mail'] . ")";
  			$content = $_POST['content'];

        mb_send_mail($to, $title, $content);
      ?>
    </div>
    <h2>この度は、お問い合わせいただきありがとうございます。</h2>
    <p>3日以内に返信いたしますので、3日経っても返信がない場合は、</p>
    <p>お手数ですが、こちらのメールアドレスまでお問い合わせください。</p>
    <p><a href="mailto:haruki1226yh@ezweb.ne.jp">haruki1226yh@ezweb.ne.jp</a></p>

    <div class="confirm_btn"><a href="https://haruki-site.sakura.ne.jp/profile">ポートフォリオへ戻る</a></div>
  </div>
  </body>
</html>
