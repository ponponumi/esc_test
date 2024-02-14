<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>テスト</title>
</head>
<body>
  <h1>エスケープのテスト</h1>
  <p>改行するには<?php echo htmlspecialchars('<br>') ?>を使おう！</p>

  <p>
    あいうえお<br>
    かきくけこ<br>
    <?php echo htmlspecialchars('<開始タグ>文章</終了タグ>') ?>
  </p>
</body>
</html>
