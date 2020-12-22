const totalTime = 60000;
const oldTime = Date.now();  //読み込まれたときの時間

const timeId = setInterval(() => {
    const currentTime = Date.now();


    //差を求める
    const diff = currentTime - oldTime;  //(今の時間)ー(読み込み時の時間) →１秒毎に１ずつ増える
    const diffSec = totalTime - diff;  //残り時間

    
    //ミリビョウを整数に変換
    const remainSec = Math.ceil(diffSec / 1000);  //Math.ceilメソッドは引数以上の最小の整数を表示
    let text = `残り${remainSec}秒`;


    //０秒以下になったら
    if (diffSec <= 0) {
        clearInterval(timeId);  //"timeID"というインターバルを止める
        text = "終了";   //タイマーの文言を表示する
    }

    //画面に表示する
    document.querySelector('#log').innerHTML = text;
}

)