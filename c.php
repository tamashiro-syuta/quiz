<?php
session_start();
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>第２問</title>
    <html lang = "ja">
    <link rel="stylesheet" href="b.css">
</head>


<body>
    <main>
        <div class="q1_start">
            <h3>第2問</h3>
        </div>
        <div class="q">
            <h2>私のさやに対する第一印象は何でしょう？？</h2>
            <div id="log"><script src="Countdown.js"></script></div>
            <div class="q2_select">
                <form name="q2" method="POST" action="d.php">
                   <input type="radio" name="q2_answer" id="1" value="あ、この人絶対歌手のAnlyの親族の人だ">
                   <label class="select" for="1">あ、この人絶対歌手のAnlyの親族の人だ</label>
                   <input type="radio" name="q2_answer" id="2" value="ホワイトチョコ苦手そう">
                   <label class="select" for="2">ホワイトチョコが苦手そう</label>
                   <input type="radio" name="q2_answer" id="3" value="怒ったら怖そう">
                   <label class="select" for="3">怒ったら怖そう</label>
                   <input type="radio" name="q2_answer" id="4" value="チェック柄が好きそう">
                   <label class="select" for="4">チェック柄が好きそう</label>
                   <br>
                   <input class="button" type="submit" value="次の問題へ">
                   <?php
                    $_SESSION["q1"] = $_POST["q1_answer"];
                    ?>
                   <input type="hidden" name="q1_answer" value="<?= print $_SESSION["q1"]; ?>">
                </form> 
            </div>
        </div>
    </main>
</body>
