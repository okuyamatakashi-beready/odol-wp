<!DOCTYPE html>
	<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		
		
		<title>ODOL オドルキカク</title>


		<!-- CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri(); ?>/scss/main.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri(); ?>/scss/slick-theme.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri(); ?>/scss/slick.css" rel="stylesheet" type="text/css">
		<link rel="icon" href="/images/common/favicon.ico" id="favicon">

		<!-- Google Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">



		<script>
			(function(d) {
			var config = {
				kitId: 'tfp0xci',
				scriptTimeout: 3000,
				async: true
			},
			h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
			})(document);
		</script>

		
			<?php wp_head();?>
	</head>
<body>
	

<div id="splash">
		<div id="splash-logo">
			<img src="<?php echo get_template_directory_uri(); ?>/images/common/header_logo.svg" alt="ODOL オドルキカク">
		</div>
	</div>
	<div class="splashbg1"></div>
	<div class="splashbg2"></div>

    <div class="header_include">
        <header id="header">
            <div class="flex">
                <a href="/" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/header_logo.svg" alt="ODOL オドルキカク">
                </a>

                <div class="header__toggle">
                    <div class="flex">
                        <a href="" class="header__toggle--contact">
                            <p>
                                CONTACT
                                <span>お問い合わせ</span>
                            </p>
                        </a>

                        <div id="toggle">
                            <div>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </header>
    </div>
	<nav id="gnav">
		<div class="nav__container">
			<ul class="navigation">
				<li>
					<a href="">
						<p>PROJECT</p>
						<span>オドルキカクがやってきたこと</span>
					</a>
				</li>
				<li>
					<a href="">
						<p>SERVICE</p>
						<span>オドルキカクができること</span>
					</a>
				</li>
				<li>
					<a href="/company.html">
						<p>COMPANY</p>
						<span>オドルキカクについて</span>
					</a>
				</li>
				<li>
					<a href="https://note.com/odolkikaku/" target="_blank">
						<p class="flex">note<img src="<?php echo get_template_directory_uri(); ?>/images/common/blank.svg" alt=""></p>
						<span>オドルキカクのnote</span>
					</a>
				</li>
				<li>
					<a href="https://prtimes.jp/main/action.php?run=html&page=searchkey&search_word=%E3%80%80オドルキカク" target="_blank">
						<p class="flex">TOPICS<img src="<?php echo get_template_directory_uri(); ?>/images/common/blank.svg" alt=""></p>
						<span>プレスリリース</span>
					</a>
				</li>
			</ul>

			<ul class="gnav__sns flex">
				<li>
					<a href="https://www.instagram.com/odol_inc/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/common/instagram.svg" alt="">
					</a>
				</li>
				<li>
					<a href="https://twitter.com/odol_maeda/status/1774696072981762374" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/common/X_twitter.svg" alt="">
					</a>
				</li>
				<li>
					<a href="https://www.youtube.com/channel/UCXym1wusPhFkmp0TghhfcvQ" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/common/youtube_logo.svg" alt="">
					</a>
				</li>
				<li>
					<a href="https://note.com/odolkikaku/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/common/note_icon.svg" alt="">
					</a>
				</li>
			</ul>

			<a href="" class="gnav__contact--btn">
				<p>CONTACT</p>
				<span>お問い合わせ</span>
			</a>
		</div>

		<div id="gnav__toggle">
			<div>
				<span></span>
				<span></span>
			</div>
		</div>
	</nav>

