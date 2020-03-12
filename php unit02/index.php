<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Quiz: Addition</title>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php 
      include 'inc/quiz.php';
    ?>
    <div class="container">
        <div id="quiz-box">
        <?php 
               if($showscore == false) {
                  if(!empty($toastmessage)) {
                 echo "<p>$toastmessage</p>";
              }
                  echo "<p class='breadcrumbs'>Question ";
                  echo count($_SESSION["used-indexes"]);
                  echo " of ";
                  echo $question_number;
                  echo "<p class='quiz'>What is ";
                  echo $question["leftAdder"];
                  echo "+";
                  echo $question["rightAdder"];
                  echo "<form action='index.php' method='post'>
                <input type='hidden' name='id' value=";
                 echo  $index;
                 echo  ">";
                 echo  "<input type='submit' class='btn' name='answer' value=";
                 echo  $answer[0];
                 echo ">";
                 echo "<input type='submit' class='btn' name='answer' value=";
                 echo $answer[1];
                 echo ">";
                 echo "<input type='submit' class='btn' name='answer' value=";
                 echo $answer[2];
                 echo ">";
                 echo "</form>";
               }
               
               if($showscore == true) {
                  echo "<p>You got ";
                  echo $_SESSION["totalCorrect"];
                  echo " of ";
                  echo $question_number;
                  echo " correct!</p>";
               }
            ?>
        </div>
    </div>
</body>
</html>