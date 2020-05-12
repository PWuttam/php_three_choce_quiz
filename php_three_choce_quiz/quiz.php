<?php

if(isset($_POST['times'])) {
  $times = $_POST['times'];
} else {
  $times = 0;
} if(isset($_POST['num_correct'])) {
  $num_correct = $_POST['num_correct'];
} else {
  $num_correct = 0;
}

?>

<?php

$question0 = ["2019年に400cc以上で一番売れたバイクは？" , "カワサキZ900RS" , "ホンダCB/CBR650R" , "スズキKATANA" , "img/photo1.jpg" , "img/photo2.jpg" , "img/photo3.jpg"];

$question1 = ["2019年に251~400ccで一番売れたバイクは？" , "ホンダCB400SF/SB" , "カワサキNinja400/Z400" , "ホンダ400X/CBR400R" , "img/photo4.jpg" , "img/photo5.jpg" , "img/photo6.jpg"];

$question2 = ["2019年に126~250ccで一番売れたバイクは？" , "ヤマハYZF-R25/MT-25" , "ホンダPCX150" , "ホンダ レベル250" , "img/photo7.jpg" , "img/photo8.jpg" , "img/photo9.jpg"];

?>

<?php

$arr = [$question0, $question1, $question2];

$response_left = $arr[$times][1];
$response_center = $arr[$times][2];
$response_right = $arr[$times][3];

$response_pic_left = $arr[$times][4];
$response_pic_center = $arr[$times][5];
$response_pic_right = $arr[$times][6];

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Quiz</title>
  <link rel="stylesheet" href="css/quiz.css">
</head>
<body>
  <!-- 外枠 -->
  <div class="main">
    <div class="site-logo">
      <img src="img/quiz.png" alt="logo">
    </div>
    <div class="question-title">
      <?php
        $a = $times + 1;
        echo "Bike Quiz: 第", "$a", "問";
      ?>
    </div>
    <div class="border-hedder"></div>

    <div class="question-instruction">
      <?php echo $arr[$times][0]; ?>
    </div>
    <div class="q-logo">
      <img src="img/q.png" alt="logo">
    </div>
    <div class="question-box">
      <form action="quiz_result.php" method="POST" class="form">

        <div class="question-box-left">
          <div class="question-number1">①</div>
          <div class="question-text"><?php echo $response_left; ?>
            <input type="radio" id="check-a" name="response" value="left" checked><label for="check-a"></label>
          </div>
          <div class="question-image"><img src="<?php echo $response_pic_left; ?>" alt="logo"></div>
        </div>

        <div class="question-box-center">
          <div class="question-number2">②</div>
          <div class="question-text"><?php echo $response_center; ?>
            <input type="radio" id="check-b" name="response" value="center"><label for="check-b"></label>
          </div>
          <div class="question-image"><img src="<?php echo $response_pic_center; ?>" alt="logo"></div>
        </div>

        <div class="question-box-right">
          <div class="question-number3">③</div>
          <div class="question-text"><?php echo $response_right; ?>
            <input type="radio" id="check-c" name="response" value="right"><label for="check-c"></label>
          </div>
          <div class="question-image"><img src="<?php echo $response_pic_right; ?>" alt="logo"></div>
        </div>

        <input type="hidden" name="times" value=<?php echo $times; ?>>
        <input type="hidden" name="num_correct" value=<?php echo $num_correct; ?>>

        <input type="submit" id="send_button" value="決定する" style="background-color: #ff7500; color: #FFFFFF; display: block; margin: 0 0 0 auto;">
      </form>
    </div>
  </div>

</body>
</html>