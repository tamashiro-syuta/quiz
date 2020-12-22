<?php
session_start();
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>第４問</title>
    <html lang = "ja">
    <link rel="stylesheet" href="b.css">
</head>


<body>
    <main>
        <div class="q1_start">
            <h3>第4問</h3>
        </div>
        <div class="q">
            <h2>よさこいでのあだ名が「ゴリ」だった人のフルネームは？？</h2>
            <div id="log"><script src="Countdown.js"></script></div>
            <div class="q4_select">
                <form name="q4" method="POST" action="f.php">
                   <input type="radio" name="q4_answer" id="1" value="屋宜俊則">
                   <label class="select" for="1">屋宜俊則</label>
                   <input type="radio" name="q4_answer" id="2" value="呉屋将人">
                   <label class="select" for="2">呉屋将人</label>
                   <input type="radio" name="q4_answer" id="3" value="屋宜将人">
                   <label class="select" for="3">屋宜将人</label>
                   <input type="radio" name="q4_answer" id="4" value="饒波圭吾">
                   <label class="select" for="4">饒波圭吾</label>
                   <br>
                   <input class="button" type="submit" value="次の問題へ">
                   <?php
                   $_SESSION["q3"] = $_POST["q3_answer"];

                    ?>
                   <input type="hidden" name="q1_answer" value="<?= print $q1_answer; ?>">
                   <input type="hidden" name="q2_answer" value="<?= print $q2_answer; ?>">
                   <input type="hidden" name="q3_answer" value="<?= print $q3_answer; ?>">
                </form> 
            </div>
        </div>
    </main>
</body>
