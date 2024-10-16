<?php get_header(); ?>

    <h2 class="c-contact__ttl">CONTACT</h2>
    <div class="g-contactform">
    <?php the_content(); ?>
    </div>


<script>
    document.getElementById('auto-fill-address').addEventListener('click', function() {
        var postcode1 = document.getElementById('postcode1').value;
        var postcode2 = document.getElementById('postcode2').value;
        var postcode = postcode1 + postcode2; // 郵便番号を結合

        console.log('郵便番号: ' + postcode);
        
        if (postcode.length === 7) { // 郵便番号が7桁であることを確認
        } else {
            alert('正しい郵便番号を入力してください');
        }
    });
</script>

<script>
    (function() {
    //該当フォーム
    var hadr = document.querySelector(".h-adr"), 
        cancelFlag = true;

    //イベントをキャンセルするリスナ
    var onKeyupCanceller = function(e) {
        if(cancelFlag){
            e.stopImmediatePropagation();
        }
        return false;
    };

    // 郵便番号の入力欄
    var postalcode = hadr.querySelectorAll(".p-postal-code"),
        postalField = postalcode[postalcode.length - 1];

    //通常の挙動をキャンセルできるようにイベントを追加
    postalField.addEventListener("keyup", onKeyupCanceller, false);

    //ボタンクリック時
    var btn = hadr.querySelector(".c-autofill__btn");
    btn.addEventListener("click", function(e) {
        //キャンセルを解除
        cancelFlag = false;

        //発火
        let event;
        if (typeof Event === "function") {
            event = new Event("keyup");
        } else {
            event = document.createEvent("Event");
            event.initEvent("keyup", true, true);
        }
        postalField.dispatchEvent(event);

        //キャンセルを戻す
        cancelFlag = true;
    });
})();
</script>

<div class="l-container">

<?php get_footer(); ?>