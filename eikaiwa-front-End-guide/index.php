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
                <div class="sg-about sg-section">
                    <h2 id="about01" class="sg-h2">概要</h2>
                    <p>DMM英会話サイト内のHTML・CSSコーディングルールを作り、メンテナンスがしやすくコードクオリティを一定に保つ為に作成しました。</p>
                </div>
                <div class="sg-about sg-section">
                    <h2 id="about02" class="sg-h2">対象サイト</h2>
                    <ul>
                        <li><a href="http://eikaiwa.dmm.com/" target="_blank">DMM英会話サイト</a></li>
                        <li><a href="http://eikaiwa.dmm.com/blog/" target="_blank">DMM英会話ブログ</a></li>
                    </ul>
                </div>
                <div class="sg-about sg-section">
                    <h2 id="about03" class="sg-h2">ガイド作成に使用したテンプレート</h2>
                    <p><a href="http://bjankord.github.io/Style-Guide-Boilerplate/" target="_blank">STYLE GUIDE BOILERPLATE</a></p>
                </div>
                <div class="sg-about sg-section">
                    <h2 id="about04" class="sg-h2">作成日・執筆者</h2>
                    <p>作成日 : 2016年1月 ~ 月</p>
                    <p>執筆者 : 鶴田 江太郎 (マークアップエンジニア 英会話事業部 所属)</p>
                </div>
            </div>
          </div>
        </div>
    </div>
<script src="vendor/prism/prism.js"></script><!--<![endif]-->
<script src="js/sg-scripts.js"></script>
</body>
</html>

