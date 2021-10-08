<!--header-->
<?php get_header(); ?>
<!--/header--> 
<!--single_single_contents-->
<section class="single_about" id="about">
            <div class="single_about_inner">
                <h2 class="single_about_title"><span>About</span></h2>
                <div class="single_about_content">
                    <div class="about_img animate_mask"><img src="<?php echo get_template_directory_uri() ?>/img/about_img.jpeg" alt=""></div>
                    <div class="about_message animate_mask">
                        <div class="about_message_top">
                            <h3 class="about_message_top_name">HANAMI KAITO</h3>
                            <dl class="about_message_dl">
                                <div class="about_message_dl_row">
                                    <dt>生年月日</dt>
                                    <dd>1999/09/30</dd>
                                </div>
                                <div class="about_message_dl_row">
                                    <dt>学歴</dt>
                                    <dd>仙台コミュニケーションアート専門学校卒業</dd>
                                </div>
                                <div class="about_message_dl_row">
                                    <dt>職務歴</dt>
                                    <dd>都内ホテル調理スタッフ</dd>
                                </div>
                                <div class="about_message_dl_row">
                                    <dt>資格</dt>
                                    <dd>第二種電気工事士/2級電子機器組立て技能士/普通自動車免許/調理師免許</dd>
                                </div>
                            </dl>
                        </div>
                        <p class="about_message_text"><?php $about_me = scf::get('about_me'); echo nl2br( $about_me ); ?></p>
                    </div>
                </div>
                <div class="single_about_content2">
                    <h2 class="single_about_content_title"><span>Personality</span></h2>
                    <div class="about_single_cards">
                        <div class="about_single_card_row">
                            <div class="about_single_card_text animate_mask"><?php $about_personality = scf::get('about_personality'); echo nl2br( $about_personality ); ?></div>
                            <div class="about_single_card animate_mask"><img src="<?php echo get_template_directory_uri() ?>/img/about3.jpeg" alt=""></div>
                        </div>
                        <div class="about_single_card_row">
                            <div class="about_single_card animate_mask"><img src="<?php echo get_template_directory_uri() ?>/img/about2.JPG"></div>
                            <div class="about_single_card animate_mask"><img src="<?php echo get_template_directory_uri() ?>/img/about.img7.JPG"></div>
                        </div>
                    </div>
                </div>
                <div class="single_about_content3">
                    <h2 class="single_about_content_title"><span>CareerPlan</span></h2>
                    <div class="about_single_content3_cards">
                        <div class="about_single_content3_card_row">
                            <div class="about_single_content3_card animate_mask"><img src="<?php echo get_template_directory_uri() ?>/img/IMG_0655.jpg"></div>
                            <div class="about_single_content3_card_text animate_mask"><?php $about_career_plan = scf::get('about_career_plan'); echo nl2br( $about_career_plan ); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--footer-->
        <footer class="footer">
            <div class="footer_inner">
                <div class="footer_contents">
                    <div class="footer_sns_icons">
                        <div class="footer_sns_icon"><a href="<?php echo SCF::get('instagram',5);?>"><i class="fab fa-instagram fa-2x"></i></a></div>
                        <div class="footer_sns_icon"><a href="<?php echo SCF::get('twitter',5);?>"><i class="fab fa-twitter fa-2x"></i></a></div>
                    </div>
                </div>
            </div>
        </footer>
        <!--/footer-->
        <!--to_top-->
        <section class="about_to_top">
            <h4 class="about_to_top_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span>TOP</span></a></h4>
        </section>
<!--footer-->
<?php get_footer(); ?>
<!--/footer-->