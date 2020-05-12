<?php
  $num_correct = $_POST['num_correct'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Quiz Result</title>
  <link rel="stylesheet" href="css/result.css">
</head>
<body>
  <!-- 外枠 -->
  <div class="main">
    <div class="site-logo">
      <img src="img/quiz.png" alt="logo">
    </div>
    <div class="question-title">
      バイククイズ: 結果発表
    </div>
    <div class="border-hedder"></div>

    <div class="question-instruction">
        あなたは、3問中<?php echo "$num_correct"; ?>問正解しました。<br>
        もう一度どうぞ！
    </div>

    <div class="start-button">
      <a href="index.php" class="end-button">トップ画面へ</a>
    </div>
  </div>

</body>
</html>