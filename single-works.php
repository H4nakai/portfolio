<!--header-->
<?php get_header(); ?>
<!--/header-->  
<body>
    <!--single_contents-->
    <section class="single_contents">
        <div class="single_inner">
            <h2 class="single_title"><span>Works</span></h2>
            <h3 class="single_content_name"><?php the_title(); ?></h3>
            <div class="single_content_img animate_mask2">
                <img src="<?php the_post_thumbnail('full'); ?>"></div>
            <h3 class="about_the_work animate_mask2">About the work</h3>
            <div class="single_content">
                <p class="single_content_message animate_mask2">
                    <?php $overview = scf::get('overview'); echo nl2br( $overview ); ?>
                </p>
                <table class="single_table animate_mask2">
                    <tr class="single_table_row">
                        <th class="single_table_left">担当範囲</th>
                        <td class="single_table_right"><?php echo SCF::get('responsible_person');?></td>
                    </tr>
                    <tr class="single_table_row">
                        <th class="single_table_left">ページ数</th>
                        <td class="single_table_right"><?php echo SCF::get('page');?></td>
                    </tr>
                    <tr class="single_table_row">
                        <th class="single_table_left">レスポンシブ</th>
                        <td class="single_table_right"><?php echo SCF::get('responsive');?></td>
                    </tr>
                    <tr class="single_table_row">
                        <th class="single_table_left">制作期間</th>
                        <td class="single_table_right"><?php echo SCF::get('production_period');?></td>
                    </tr>
                    <tr class="single_table_row">
                        <th class="single_table_left">使用ツール</th>
                        <td class="single_table_right"><?php echo SCF::get('tools');?></td>
                    </tr>
                    <tr class="single_table_row">
                        <th class="single_table_left">使用言語</th>
                        <td class="single_table_right"><?php echo SCF::get('language');?></td>
                    </tr>
                    <tr class="single_table_row">
                        <th class="single_table_left">ソースコード</th>
                        <td class="single_table_right"><a href="<?php echo SCF::get('code');?>">URL</a></td>
                    </tr>
                    <tr class="single_table_row">
                        <th class="single_table_left">サイト</th>
                        <td class="single_table_right"><a href="<?php echo SCF::get('site');?>">URL</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
    <!--/single_contents-->
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