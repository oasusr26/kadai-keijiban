/*global $*/

// ボタンの表示／非表示を切り替える関数
function updateButton() {
    if ($(this).scrollTop() >= 300) {  //300以上スクロールされたときの設定
        // ボタンを表示
        $(".back-to-top").fadeIn();
    } else {
        // ボタンを非表示
        $(".back-to-top").fadeOut();
    }
}

$(function() {
    updateButton();
    
    // スクロールされるタブにupdateButtonを実行する
    $(window).scroll(updateButton);
    
    // ボタンをクリックしたらトップページにスクロールする
    $(".back-to-top").click(function() {
        // 600ﾐﾘ秒かけてトップに戻る
        $("html, body").animate({
            scrollTop: 0,
        }, 600);
        
        return false;
    });
});