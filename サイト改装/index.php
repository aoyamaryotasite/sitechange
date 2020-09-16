<?php get_header(); ?>
<body>
	<?php wp_body_open(); ?>
<div class="boxB">
  <div class ="box1">
	 <a href="<?php echo esc_url( home_url('/')) ?>" rel ="home"> <h1><?php bloginfo('name'); ?></h1></a>
	<p><?php bloginfo('description'); ?></p>
	</div>
  <div class="container">
    <div class="row">
    <div class="col-md-4 mt-5 recomend-photo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/job.png" class="recomend" alt="おすすめ画像" >
        <p>30代未経験WEBエンジニアへのロードマップ</p>
        <button type="button" name="aaa" value="aaa"><a href="https://aoyamaryota.work/blog/30web/">READ MORE</a></button>
        </div>
      <div class="col-md-4 mt-5 recomend-photo">
      <img src="<?php echo get_template_directory_uri(); ?>/img/crowd.jpg" class="recomend" alt="おすすめ画像" >
        <p>クラウドソーシングでの案件獲得方法</p>
        <button type="button" name="aaa" value="aaa"><a href="https://aoyamaryota.work/blog/%e3%82%af%e3%83%a9%e3%82%a6%e3%83%89%e3%82%bd%e3%83%bc%e3%82%b7%e3%83%b3%e3%82%b0%e3%81%a7%e3%81%ae%e6%a1%88%e4%bb%b6%e7%8d%b2%e5%be%97%e6%96%b9%e6%b3%95/">READ MORE</a></button>

      </div>
      <div class="col-md-4 mt-5 recomend-photo">
      <img src="<?php echo get_template_directory_uri(); ?>/img/frustration.jpg" class="recomend" alt="おすすめ画像" >        <p>プログラミング学習で挫折しない方法</p>
        <button type="button" name="aaa" value="aaa"><a href="https://aoyamaryota.work/%e3%83%97%e3%83%ad%e3%82%b0%e3%83%a9%e3%83%9f%e3%83%b3%e3%82%b0%e5%ad%a6%e7%bf%92%e3%81%a7%e6%8c%ab%e6%8a%98%e3%81%97%e3%81%aa%e3%81%84%e6%96%b9%e6%b3%95/">READ MORE</a></button>
      </div>
    </div>
  </div>

  <div class="boxA">
  <div class ="box3">
  <?php while (have_posts()): the_post(); ?>
    <article class ="kiji">
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <?php the_post_thumbnail('medium'); ?><br>
      <div class="kijiinfo">
        <p class="post-meta">Posted by  <?php the_author(); ?> on <?php the_time("Y年m月d日"); ?>@ <?php the_time('g:i a'); ?></p>
      </div>
      <p>
      <?php the_excerpt(); ?>
      </p>
    <br><hr>

    </article>
<?php endwhile; ?>
<?php echo paginate_links(); ?>

  </div>
  <!-- サイドメニュー -->
 <?php get_sidebar() ?>
<header class="header">

<div class="toppage">
      <nav class="global-nav">
      <ul class="global-nav__list">
          <li class="global-nav__item"><a href="https://aoyamaryota.work/">TOP</a></li>
          <li class="global-nav__item"><a href="https://aoyamaryota.work/tag/code/">CODE</a></li>
          <li class="global-nav__item"><a href="https://aoyamaryota.work/tag/life/">LIFE</a></li>
          <li class="global-nav__item"><a href="https://aoyamaryota.work/tag/work/">WORK</a></li>
          <li class="global-nav__item"><a href="https://aoyamaryota.work/tag/wordpress/">WORDPRESS</a></li>
          <li class="global-nav__item"><a href="https://aoyamaryota.work/privacypolicy/">PRIVACY POLICY</a></li>
          <li class="global-nav__item"><a href="https://aoyamaryota.work/contact">CONTACT</a></li>
        </ul>
      </nav>
      <div class="hamburger" id="js-hamburger">
        <span class="hamburger__line hamburger__line--1"></span>
        <span class="hamburger__line hamburger__line--2"></span>
        <span class="hamburger__line hamburger__line--3"></span>
      </div>
      <div class="black-bg" id="js-black-bg"></div>
    </header>
    <?php get_footer(); ?>