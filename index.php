<!doctype html>
<html class="no-js" lang="EN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Reclaim Community</title>
        <meta name="description" content="Reclaim Hosting community channels.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
      <?php require __DIR__ . "/functions.php";?>
    	<header class="navbar">
    		<nav class="container-fluid bd-gutter flex-wrap flex-lg-nowrap" aria-label="Main navigation">
    			<a href="https://community.reclaimhosting.com/"><img width="405" height="70" src="imgs/reclaim-logo.png" alt="Relcaim Hosting logo." class="header-logo img-fluid"></a>
            <ul id="nav-menu">
              <li>
                <a href="https://events.reclaimhosting.com/" class="">
                  Event Calendar
                </a>
              </li>
              <li>
                <a href="https://community.reclaimhosting.com" class="">
                  Reclaim Community
                </a>
              </li>
	      <li>
                <a href="https://reclaimhosting.com/about" class="">
                  About Reclaim Hosting
                </a>
              </li>
              <li>
                <a href="https://reclaimed.tech/discord" class="">
                  Say Hello on Discord
                </a>
              </li>
              <li>
                <a href="https://support.reclaimhosting.com/hc/en-us/requests/new" class="">
                  Get in Touch
                </a>
              </li>
            </ul>
  			</nav>
    	</header>
    	<div class="divider"></div>
      <div class="container-fluid">
      	<div class="row channels">
          <?php echo channel('edtech', 'TV-logo-Reclaim-Edtech', 'Reclaim Ed Tech TV', 'Reclaim EdTech');?>
      		<?php echo channel('com-chat', 'TV-logo-Community-Chat', 'Reclaim Community Chat', 'Community Chats');?>
          <?php echo channel('announce', 'TV-logo-Announcements', 'Reclaim Breaking announcements and blog posts', 'Announcements');?>
          <?php echo channel('forums', 'TV-logo-Community-Forums', 'Reclaim Community Forums', 'Community Forums');?>
          <?php echo channel('roundup', 'TV-logo-Reclaim-Roundup', 'Reclaim Roundup', 'Reclaim Roundup');?>
          <?php echo channel('support', 'TV-logo-Support', 'Reclaim Support', 'Reclaim Support');?>
          <?php echo channel('tv', 'TV-logo-Reclaim-TV', 'Reclaim TV', 'Reclaim TV');?>
          <?php echo channel('social', 'TV-logo-Social-Media', 'Reclaim social media', 'Social');?>

      	</div>

      </div>

      <!--MODALS-->
      <?php echo modal_maker_edtech();?>
      <?php modal_maker_chat('com-chat', 'Community Chats');?>
      <?php modal_maker_announcements('announce', 'Announcements');?>      
      <?php modal_maker_forums('forums', 'Community Forums');?>      
      <?php modal_maker_roundup('roundup', 'Reclaim Roundup');?>      
      <?php modal_maker_support('support', 'Reclaim Support');?>      
      <?php modal_maker_tv('tv', 'Reclaim TV');?>      
      <?php modal_maker_social('social', 'Social');?>
      <div class="divider bottom-divider"></div>
      <div class="footer container-fluid bd-gutter flex-wrap flex-lg-nowrap">
        <a href="https://reclaimhosting.com">reclaimhosting.com</a>
        <p>© All Rights Reserved <span id="current-year"></span></p>
      </div>
      <script>
        document.getElementById("current-year").innerHTML = new Date().getFullYear();
      </script>

      	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
    </body>
</html>

<?php 
  json_fetcher('https://reclaimhosting.zendesk.com/api/v2/help_center/en-us/articles?sort_by=updated_at&sort_order=desc','zen');
  json_fetcher('https://forums.reclaimhosting.com/posts.json','community');
  json_fetcher('https://www.reclaimhosting.com/wp-json/wp/v2/posts?per_page=5&_embed&_embed','blog');
?>
