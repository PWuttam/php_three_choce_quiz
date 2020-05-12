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

<?php

  $response = $_POST['response'];
  // 答えが正解の時の順番
  $answer = ["left" , "center" , "right"];

  if($response == $answer[$times]) {
    $t_or_f = 1;
    $num_correct = $num_correct + 1;
  } else {
    $t_or_f = 0;
  }

?>

<?php

  if($t_or_f == 1) {
    echo '<div class="true">正解</div>';
  } else {
    echo '<div class="false">不正解</div>';
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Quiz Result</title>
  <link rel="stylesheet" href="css/quiz_result.css">
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
        echo "第", "$a", "問";
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

      <?php if($answer[$times] == "left") { ?>

        <div class="question-box-left">
          <div class="c-mark">
            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24" fill="none" stroke="#f31414" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"></circle>
            </svg>
          </div>
          <div class="question-number1">①</div>
          <div class="question-text"><?php echo $response_left; ?>
            <input type="radio" id="check-a" name="response" value="left" checked><label for="check-a"></label>
          </div>
          <div class="question-image"><img src="<?php echo $response_pic_left; ?>" alt="logo"></div>
        </div>

      <?php } else { ?>

        <div class="question-box-left-white">
          <div class="question-number1">①</div>
          <div class="question-text"><?php echo $response_left; ?>
            <input type="radio" id="check-a" name="response" value="left" checked><label for="check-a"></label>
          </div>
          <div class="question-image"><img src="<?php echo $response_pic_left; ?>" alt="logo"></div>
        </div>

      <?php } ?>

      <?php if($answer[$times] == "center") { ?>

        <div class="question-box-center">
          <div class="c-mark">
            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24" fill="none" stroke="#f31414" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"></circle>
            </svg>
          </div>
          <div class="question-number2">②</div>
          <div class="question-text"><?php echo $response_center; ?>
            <input type="radio" id="check-b" name="response" value="center"><label for="check-b"></label>
          </div>
          <div class="question-image"><img src="<?php echo $response_pic_center; ?>" alt="logo"></div>
        </div>

      <?php } else { ?>

        <div class="question-box-center-white">
          <div class="question-number2">②</div>
          <div class="question-text"><?php echo $response_center; ?>
            <input type="radio" id="check-b" name="response" value="center"><label for="check-b"></label>
          </div>
          <div class="question-image"><img src="<?php echo $response_pic_center; ?>" alt="logo"></div>
        </div>

      <?php } ?>

      <?php if($answer[$times] == "right") { ?>

        <div class="question-box-right">
          <div class="c-mark">
            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24" fill="none" stroke="#f31414" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"></circle>
            </svg>
          </div>
          <div class="question-number3">③</div>
          <div class="question-text"><?php echo $response_right; ?>
            <input type="radio" id="check-c" name="response" value="right"><label for="check-c"></label>
          </div>
          <div class="question-image"><img src="<?php echo $response_pic_right; ?>" alt="logo"></div>
        </div>

      <?php } else { ?>

        <div class="question-box-right-white">
          <div class="question-number3">③</div>
          <div class="question-text"><?php echo $response_right; ?>
            <input type="radio" id="check-c" name="response" value="right"><label for="check-c"></label>
          </div>
          <div class="question-image"><img src="<?php echo $response_pic_right; ?>" alt="logo"></div>
        </div>

      <?php } ?>

      <?php $times = $times + 1; ?>
      <?php if($times != 3) { ?>
        <form method="POST" class="form" action="quiz.php">
          <input type="hidden" name="times" value=<?php echo $times; ?>>
          <input id="send_button" type="submit" value="次の問題へ" style="background-color:#5459f1; color: #FFFFFF; display: block; margin: 0 0 0 auto;">
          <input type="hidden" name="num_correct" value=<?php echo $num_correct; ?>>
        </form>
      <?php } else { ?>
        <form method="POST" class="form" action="result.php" style="text-align: center;">
          <input id="send_button" type="submit" value="結果発表！" style="background-color: #ef67ac; color: #FFFFFF; ">
          <input type="hidden" name="num_correct" value=<?php echo $num_correct; ?>>
        </form>
      <?php } ?>
    </div>
  </div>

</body>
</html>