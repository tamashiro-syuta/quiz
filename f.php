<?php
session_start();
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>第５問</title>
    <html lang = "ja">
    <link rel="stylesheet" href="b.css">
</head>


<body>
    <main>
        <div class="q1_start">
            <h3>第5問</h3>
        </div>
        <div class="q">
            <h2>【難問】さやのガリガリ君早食いのベストタイムは？？</h2>
            <div id="log"><script src="Countdown.js"></script></div>
            <div class="q5_select">
                <form name="q5" method="POST" action="g.php">
                   <input type="radio" name="q5_answer" id="1" value="1分17秒">
                   <label class="select" for="1">1分17秒</label>
                   <input type="radio" name="q5_answer" id="2" value="1分23秒">
                   <label class="select" for="2">1分23秒</label>
                   <input type="radio" name="q5_answer" id="3" value="1分05秒">
                   <label class="select" for="3">1分05秒</label>
                   <input type="radio" name="q5_answer" id="4" value="56秒">
                   <label class="select" for="4">56秒</label>
                   <br>
                   <input class="button" type="submit" value="次の問題へ">
                   <?php
                   $_SESSION["q4"] = $_POST["q4_answer"];
                    ?>
                   <input type="hidden" name="q1_answer" value="<?= print $q1_answer; ?>">
                   <input type="hidden" name="q2_answer" value="<?= print $q2_answer; ?>">
                   <input type="hidden" name="q3_answer" value="<?= print $q3_answer; ?>">
                   <input type="hidden" name="q4_answer" value="<?= print $q4_answer; ?>">
                </form> 
            </div>
        </div>
    </main>
</body>
