<?php get_header(); ?>

    <h2 class="c-contact__ttl">CONTACT</h2>
    <div class="g-contactform">
    <?php the_content(); ?>
    </div>

<!-- AjaxZip3のスクリプトを読み込む -->
<script src="https://cdn.jsdelivr.net/npm/yubinbango@3.0.1/dist/yubinbango.js"></script>

<script>
    document.getElementById('auto-fill-address').addEventListener('click', function() {
        var postcode1 = document.getElementById('postcode1').value;
        var postcode2 = document.getElementById('postcode2').value;
        var postcode = postcode1 + postcode2; // 郵便番号を結合
        
        if (postcode.length === 7) { // 郵便番号が7桁であることを確認
            // YubinBangoライブラリを使用して住所を自動入力
            new YubinBango.MicroformatDom().populate({
                "postalcode": postcode,
                "address": "your_address"
            });
        } else {
            alert('正しい郵便番号を入力してください');
        }
    });
</script>


<?php get_footer(); ?>