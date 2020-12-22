<?php
session_start();
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>結果発表</title>
    <html lang = "ja">
    <link rel="stylesheet" href="b.css">
</head>

<?php
$_SESSION["q5"] = $_POST["q5_answer"];

$myAnswer = array($_SESSION["q1"],$_SESSION["q2"],$_SESSION["q3"],$_SESSION["q4"],$_SESSION["q5"]);
$currect_answer = array("小樽","あ、この人絶対歌手のAnlyの親族の人だ","AZUL","屋宜将人","1分17秒");
$currect_numbers = 0;


for ($i=1; $i<6; $i++) {
    if ( $myAnswer[$i - 1] == $currect_answer[$i - 1] ) {
        $currect_numbers += 1;
    }
}
?>

<body>
    <main>
        <div class="q1_start">
            <h3>結果</h3>
        </div>
        <div class="q">
            <div class="result">
                <p>正答数： <?php print ($currect_numbers); ?> / 5</p?>
                <p><?php 
                if($currect_numbers == 5) {
                    print("おめでとうございます！！"); ?>
                    <br><br><button class="final_button" id="final_button"><p id="text">鍵の番号は？？？</p></button> 
                    <script>
                        document.getElementById("final_button").onclick = function() {
                        document.getElementById("text").innerHTML = "0 9 2 3";
                        };
                    </script>
                    <?php
                }else {
                    print("残念でした！！下のボタンからやり直してください！！");?>
                    <br><br><button class="final_button" onclick="location.href='b.html'">やり直し</button> <?php
                }?>
                </p>
            </div>            
        </div>
    </main>
</body>
