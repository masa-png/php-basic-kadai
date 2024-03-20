<?php
  session_start();

  // セッションに保存された「お名前」を取得
  $name = isset($_SESSION['name']) ? $_SESSION['name'] : '名無し';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編|課題</title>
</head>
<body>
  <h2><?php echo $name; ?>様、登録が完了しました。</h2>
  <p>社員情報がデーターベースに保存されました。</p>
  <button id="back-btn" onclick="location.href='form.php';">戻る</button>

  <?php
    // セッション変数を初期化
    $_SESSION = array();

    session_destroy();
  ?>
</body>
</html>