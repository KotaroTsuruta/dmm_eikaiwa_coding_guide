<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
  <title>DMM英会話 Front End Coding Guide</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#000000">

  <!-- Style Guide Boilerplate Styles -->
  <link rel="stylesheet" href="css/sg-style.css">
  <!--[if lt IE 9]><link rel="stylesheet" href="css/sg-style-old-ie.css"><![endif]-->

  <!-- https://github.com/sindresorhus/github-markdown-css -->
  <link rel="stylesheet" href="css/github-markdown.css">

  <!-- Replace below stylesheet with your own stylesheet -->
  <link rel="stylesheet" href="css/style.css">

  <!-- prism Syntax Highlighting Styles -->
  <link rel="stylesheet" href="vendor/prism/prism.css">
</head>
<body>
    <a href="#main" class="sg-visually-hidden sg-visually-hidden-focusable">Skip to main content</a>
    <div id="top" class="sg-header" role="banner">
    <div class="sg-container">
      <h1 class="sg-logo">
        <span class="sg-logo-initials">Front End Coding Guide</span>
        <span class="sg-logo-full">DMM英会話 Front End Coding Guide</span>
      </h1>
      <button type="button" class="sg-nav-toggle">Menu</button>
    </div>
    </div><!--/.sg-header-->
    <div class="sg-wrapper sg-clearfix">
        <?php include 'sidebar.php'; ?>
        <div id="main" class="sg-main" role="main">
          <div class="sg-container">
            <div class="sg-info">
                <div class="sg-bem sg-section">
                    <h2 id="id-class01" class="sg-h2">概要</h2>
                    <p>id/class名の考え方には BEM の考え方を取り入れ、DMM英会話サイト用にアレンジしました。</p>
                    <h2 id="id-class02" class="sg-h2">BEMとは</h2>
                    <p>ロシアのYandaxというポータル、Webアプリケーションを提供している会社のフロントエンド開発チームが考えた命名規則です。</p>
                    <h2 id="id-class03" class="sg-h2">具体例</h2>
                    <p>
                        <ul class="threeline_blocks">
                            <li>
                               <p>
                                   <span class="block_color">Block :</span><br>
                                   Element,Modifierの親に当たる
                               </p>
                               <p>
                                   タグ例 :<br>
                                   <span class="block_color">Header,Footer,Nav,Link Button</span>
                               </p> 
                            </li>
                            <li>
                               <p>
                                   <span class="element_color">Element :</span><br>
                                  Blockを構成する要素
                               </p>
                                <p>
                                   タグ例 :<br>
                                    <span class="element_color">li,Slider Imgs/Button(部品)</span>
                                </p>       
                            </li>
                            <li>
                                <p>
                                    <span class="modifier_color">Modifier :</span><br>
                                   Elementのバリエーション違い
                                </p>
                                <p>
                                <p>
                                   タグ例 :<br>
                                    <span class="modifier_color">li.active</span>
                                    <img src="img/eikaiwa_bem_modifier.jpg">
                                </p>
                            </li>
                        </ul>
                    </p>
                    <p><img src="img/eikaiwa_bem.jpg"></p>
                    <h2 id="id-class04" class="sg-h2">BEMの書き方について</h2>
                    <ul>
                        <li>Block : .nav などのブロック名を使用し、短く分かりやすい名前にする。</li>
                        <li>Element : Blockに対しての子要素につける。親要素名と子要素名の間にアンダーバーを２つ使用し .nav__li などにする。</li>
                        <li>Modifier : Block or Element の状態変化時につける。親要素とModifierの間にハイフンを２つ使用し、.nav--on などにする。</li>
                    </ul>
<?php renderFileSource('
<div class=".nav">
    <ul>
        <li class="nav__li"></li>
        <li class="nav__li"></li>
        <li class="nav__li nav--on"></li>
        <li class="nav__li"></li>
        <li class="nav__li"></li>
    </ul>
</div>'); ?>
                </div>
            </div>
          </div>
        </div>
    </div>
<script src="vendor/prism/prism.js"></script><!--<![endif]-->
<script src="js/sg-scripts.js"></script>
</body>
</html>

