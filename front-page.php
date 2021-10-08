<!--header-->
<?php get_header(); ?>
<!--/header-->   
    <!--top-->
    <section class="top">
        <div class="top_inner">
            <div class="top_icon">
                <div class="sns_icons">
                    <div class="sns_icon"><a href="<?php echo SCF::get('instagram',5);?>"><i class="fab fa-instagram fa-2x"></i></a></div>
                    <div class="sns_icon"><a href="<?php echo SCF::get('twitter',5);?>"><i class="fab fa-twitter fa-2x"></i></a></div>
                </div>
                <ul class="top_menu">
                    <li class="menu_item"><a href="#about">About</a></li>
                    <li class="menu_item"><a href="#works">Works</a></li>
                    <li class="menu_item"><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
        <h1 class="top_title">I am kaito</h1>
    </section>
    <!--/top-->
    <!--drawer-->
    <div class="drawer_icon">
        <div class="drawer_bars">
            <div class="drawer_bar1"></div>
            <div class="drawer_bar2"></div>
            <div class="drawer_bar3"></div>
        </div>
    </div>
    <!--/drawer-->
    <!--drawer_content-->
    <div class="drawer_content">
        <div class="drawer_content_inner">
            <div class="drawer_items">
                <div class="drawer_item_sns_icon">
                    <div class="drawer_item_sns"><a href="<?php echo SCF::get('instagram',5);?>"><i class="fab fa-instagram fa-2x"></i></a></div>
                    <div class="drawer_item_sns"><a href="<?php echo SCF::get('twitter',5);?>"><i class="fab fa-twitter fa-2x"></i></a></div>
                </div>
                <div class="drawer_item"><a href="#about">About</a></div>
                <div class="drawer_item"><a href="#works">Works</a></div>
                <div class="drawer_item"><a href="#contact">Contact</a></div>
            </div>
        </div>
    </div>
    <!--/drawer_content-->
    <!--about-->
    <section class="about" id="about">
        <div class="about_inner">
            <h2 class="about_title"><span>About</span></h2>
            <div class="about_content">
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
                                <dd>仙台コミュニケーションアート専門学校</dd>
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
                    <div class="about_more_button"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/about">MORE</a></div>
                </div>
            </div>
        </div>
    </section>
    <!--/about-->
    <!--works-->
    <div class="works" id="works">
        <div class="works_inner inner">
            <h2 class="works_title"><span>Works</span></h2>
            <ul class="works_cards">
            <?php
                 $args = array(
                    'post_type' => 'works',
                    'posts_per_page' => '-1'
                    );
                $the_query = new WP_query($args);
                if ($the_query->have_posts()):
            ?>
            <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                <li class="works_card animate_mask2">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?>
                        <p class="works_card_more"><?php the_title(); ?></h2></p>
                    </a>
                <?php endwhile; ?>
                </li>
            <?php wp_reset_postdata(); endif; ?>
            </ul>
        </div>
    </div>
    <!--/works-->
    <!--contact-->
    <section class="contact" id="contact">
        <div class="contact_inner">
            <h2 class="contact_title"><span>Contact</span></h2>
            <div class="contact_form animate_mask"><!--formタグではなくdivタグにする-->
                <?php echo do_shortcode( '[contact-form-7 id="40" title="contact"]' ); ?>
            </div>
        </div>
    </section>
    <!--/contact-->
    <!--footer-->
    <footer class="footer">
        <div class="footer_inner">
            <div class="footer_contents">
                <ul class="footer_nav">
                    <li class="footer_nav_item"><a href="#about">About</a></li>
                    <li class="footer_nav_item"><a href="#works">Works</a></li>
                    <li class="footer_nav_item"><a href="#contact">Contact</a></li>
                </ul>
                <div class="footer_sns_icons">
                    <div class="footer_sns_icon"><a href="<?php echo SCF::get('instagram',5);?>"><i class="fab fa-instagram fa-2x"></i></a></div>
                    <div class="footer_sns_icon"><a href="<?php echo SCF::get('twitter',5);?>"><i class="fab fa-twitter fa-2x"></i></a></div>
                </div>
            </div>
        </div>
    </footer>
    <!--/footer-->
<!--footer-->
<?php get_footer(); ?>
<!--/footer-->