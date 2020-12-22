<?php
session_start();
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>第３問</title>
    <html lang = "ja">
    <link rel="stylesheet" href="b.css">
</head>


<body>
    <main>
        <div class="q1_start">
            <h3>第3問</h3>
        </div>
        <div class="q">
            <h2>初めてお揃いの服を買ったお店の名前は？？</h2>
            <div id="log"><script src="Countdown.js"></script></div>
            <div class="q3_select">
                <form name="q3" method="POST" action="e.php">
                   <input type="radio" name="q3_answer" id="1" value="sense of place">
                   <label class="select" for="1">sense of place</label>
                   <input type="radio" name="q3_answer" id="2" value="AZUL">
                   <label class="select" for="2">AZUL</label>
                   <input type="radio" name="q3_answer" id="3" value="RAGEBLUE">
                   <label class="select" for="3">RAGEBLUE</label>
                   <input type="radio" name="q3_answer" id="4" value="ジェラピケ">
                   <label class="select" for="4">ジェラピケ</label>
                   <br>
                   <input class="button" type="submit" value="次の問題へ">
                   <?php
                   $_SESSION["q2"] = $_POST["q2_answer"];
                    ?>
                   <input type="hidden" name="q1_answer" value="<?= print $_SESSION["q1"]; ?>">
                   <input type="hidden" name="q2_answer" value="<?= print $_SESSION["q2"]; ?>">
                </form> 
            </div>
        </div>
    </main>
</body>
