<?php get_header(); ?>
<body>
<div class="boxB">
    <div class ="box1">
  <img src="<?php echo get_template_directory_uri(); ?>/img/tops.png" class="topimg" alt="トップページ画像" >  </div>
  <div class="boxA">
  <div class ="box3">
  <?php if (have_posts()): ?>
<?php
  if (isset($_GET['s']) && empty($_GET['s'])) {
    echo '検索キーワード未入力'; // 検索キーワードが未入力の場合のテキストを指定
  } else {
    echo '“'.$_GET['s'] .'”の検索結果：'.$wp_query->found_posts .'件'; // 検索キーワードと該当件数を表示
  }
?>
<ul>
<?php while(have_posts()): the_post(); ?>
<li>
<a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
</li>
<?php endwhile; ?>
</ul>
<?php else: ?>
検索されたキーワードにマッチする記事はありませんでした
<?php endif; ?>

  </div>
  <!-- サイドメニュー -->
  <div class ="box4">
    <div class ="box4-0">
      <aside class="sidemenu0">
       <img src="<?php echo get_template_directory_uri(); ?>/img/IMG_45290.JPG" class="profimg">
       <h3>RYOTA</h3>
       <div class="profs">

       <p>WEBエンジニア<br>
       <p>1987年 奈良県出身</p>
       <p>のどかな田舎で家族と猫と暮らしています。</p>
       <p>音楽業界からWEB業界へ</p>
       <p>33歳未経験から独学でWEBエンジニアになりました。</p>
        <p>このブログでは未経験からWEBエンジニアを目指す私の日々の気づきや考える事、発見などを書いていきます。</p>
      </div>   
</aside>
<div class ="box4-1">
     <aside class="sidemenu">
      <h1>SNS</h1>
      <ul>
      <li><a href ="https://github.com/aoyamaryotasite"><img src="<?php echo get_template_directory_uri(); ?>/img/github.jpeg" class="sns"></a></li>
        <li><a href ="https://twitter.com/ryty62072"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter logo.jpg" class="sns"></a></li>
        <li><a href ="https://www.instagram.com/rytym.co/"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" class="sns"></a></li>
      </ul>
      <?php if ( is_active_sidebar( 'header_widget' ) ){ //functions.phpで追記したidを引数に入れる?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'header_widget' ); //functions.phpで追記したidを引数に入れる?>
	</div>
<?php } ?>   
    </div>
    </aside>
  
    </div>
    </div>
  </div>
</div>
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