<?php
  include($_SERVER['DOCUMENT_ROOT'].'/global/config/config.php');
?>
<head>
    <title><?php echo($blogTitle.' - '.$instances[basename(__DIR__)][0]); ?></title>
    <link rel='stylesheet' href='/global/theme/minima.css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content=<?php echo('"'.$blogTitle.'"'); ?>  />
    <meta property="og:url" content=<?php echo("'https://'".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]); ?>/>
    <meta property="og:type" content="website" />
    <meta property="og:description" content=<?php echo('"Visit '.$blogTitle.'"'); ?> />
    <meta name="theme-color" content="#FF0000">
</head>
<body><header class="site-header">

  <div class="wrapper"><a class="site-title" rel="author" href="<?php echo($instances[basename(__DIR__)][3]); ?>"><?php echo($blogTitle.' - '.$instances[basename(__DIR__)][0]); ?></a><nav class="site-nav">
        <input type="checkbox" id="nav-trigger" class="nav-trigger">
        <label for="nav-trigger">
          <span class="menu-icon">
            <svg viewBox="0 0 18 15" width="18px" height="15px">
              <path d="M18,1.484c0,0.82-0.665,1.484-1.484,1.484H1.484C0.665,2.969,0,2.304,0,1.484l0,0C0,0.665,0.665,0,1.484,0 h15.032C17.335,0,18,0.665,18,1.484L18,1.484z M18,7.516C18,8.335,17.335,9,16.516,9H1.484C0.665,9,0,8.335,0,7.516l0,0 c0-0.82,0.665-1.484,1.484-1.484h15.032C17.335,6.031,18,6.696,18,7.516L18,7.516z M18,13.516C18,14.335,17.335,15,16.516,15H1.484 C0.665,15,0,14.335,0,13.516l0,0c0-0.82,0.665-1.483,1.484-1.483h15.032C17.335,12.031,18,12.695,18,13.516L18,13.516z"></path>
            </svg>
          </span>
        </label>
        <div class='trigger'>
        <?php
        foreach($instances as $instance)
        {
          if($instance[3] != '/'.basename(__DIR__))
          {
            echo("<a class='page-link' href=".$instance[3].">".$instance[0]."</a>");
          }
        }
        ?>
      </nav></div>
</header>
<main class="page-content" aria-label="Content">
      <div class="wrapper">
        <div class="home">
      


  <ul class="post-list"><li>
    <?php
    include($_SERVER['DOCUMENT_ROOT'].'/global/post-manager/posts.php');
    ?>

    </div>

      </div>
    </main><footer class="site-footer h-card">
  <data class="u-url" href="/"></data>

  <div class="wrapper">

    <div class="footer-col-wrapper">
      <div class="footer-col">
        <ul class="contact-list">
          <li class="p-name"><?php echo($authorName); ?></li>
          <li><a class="u-email" href="mailto:<?php echo($authorEmail); ?>"><?php echo($authorEmail); ?></a></li>
        </ul>
      </div>
      <div class="footer-col">
        <p><?php echo($instances[basename(__DIR__)][1]); ?></p>
      </div>
    </div>
  </div>
</footer>



</body>
