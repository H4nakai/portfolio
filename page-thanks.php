<!--header-->
<?php get_header(); ?>
<!--/header--> 
<!--thanks-->
<section class="thanks">
    <div class="thanks_inner">
        <div class="thanks_content">
            <h2 class="thanks_title"><span>Thank you for your inquiry</span></h2>
            <div class="thanks_message_area">
                <p class="thanks_message">この度は、当サイトにお問い合わせいただき、誠にありがとうございました。<br>ご記入いただいた情報は無事送信されました。</p>
            </div>
        </div>
    </div>
</section>
<!--/thanks-->
    <!--footer-->
    <footer class="footer">
        <div class="footer_inner">
            <div class="footer_contents">
                <div class="footer_sns_icons">
                    <div class="footer_sns_icon"><a href="<?php echo SCF::get('instagram', 5);?>"><i class="fab fa-instagram fa-2x"></i></a></div>
                    <div class="footer_sns_icon"><a href="<?php echo SCF::get('twitter', 5);?>"><i class="fab fa-twitter fa-2x"></i></a></div>
                </div>
            </div>
        </div>
    </footer>
    <!--/footer-->
    <!--to_top-->
    <section class="to_top">
        <h4 class="to_top_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span>TOP</span></a></h4>
    </section>
    <!--/to_top-->
<!--footer-->
<?php get_footer(); ?>
<!--/footer-->
