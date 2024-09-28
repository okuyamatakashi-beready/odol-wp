<?php get_header(); ?>

	<main>


		<div class="page__common">
			<h1>
				<p>COMPANY</p>
				<span>オドルキカクについて</span>
			</h1>
		</div>

		<div class="vision__wrap">
			<p>
				<span>VISION</span>
				<strong>オドルキカクで、<br class="sp">こころおどる世界へ</strong>
			</p>
			<img src="<?php echo get_template_directory_uri(); ?>/images/company/company.svg" alt="vision">
		</div>

		<div class="company__content">
			<div class="flex">
				<div class="company__content--text">
					<div class="company__content--item">
						<span><img src="<?php echo get_template_directory_uri(); ?>/images/company/purpose.svg" alt="PURPOSE"></span>
						<strong>こころおどる場をつなぐ</strong>
					</div>
					<div class="company__content--item">
						<span><img src="<?php echo get_template_directory_uri(); ?>/images/company/statement.svg" alt="STATEMENT" class="statement"></span>
						<p>
							人と人が集うことで新たな可能性が<br class="sp">生まれる場となる。<br>
							クリエイティブの力で場にリズムを刻めば、<br>
							人々の心は楽しく躍り出す。<br>
							場が新たな「らしさ」を持つことで、<br>
							人と場のつながりは広く深くなり<br>
							よりよい社会が実現する。<br>
							そんな “ プレイスブランディング ” を企画する。<br>
							今日も、明日も、明後日も。
						</p>
					</div>
				</div>

				<div class="company__content--img">
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/images/company/company_content-img01.jpg" alt="">
					</figure>
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/images/company/company_content-img02.jpg" alt="">
					</figure>
				</div>
			</div>
		</div>

		<div class="company__profile">
			<div class="company__profile--wrap">
				<div class="flex">
					<div class="company__profile--thumb"></div>

					<div class="company__profile--content">
						<h2 class="flex">
							<span>COMPANY PROFILE</span>
							<small>会社情報</small>
						</h2>

						<dl class="flex">
							<dt>会社名</dt>
							<dd>オドルキカク株式会社</dd>
						</dl>
						<dl class="flex">
							<dt>設立</dt>
							<dd>2021 年 11 月 22 日</dd>
						</dl>
						<dl class="flex">
							<dt>資本金</dt>
							<dd>3,000,000</dd>
						</dl>
						<dl class="flex">
							<dt>事業内容</dt>
							<dd>クライアントや社会の課題を解決するためにブランディング、マーケティング、コミュニケーションの企画を立案し、課題解決に向けた場づくりなどを実行していきます。</dd>
						</dl>
						<dl class="flex">
							<dt>主な取引先</dt>
							<dd>
								カワボウ株式会社（マーサ21ショッピングセンター）<br>
								株式会社広和（Hisaya-odori Park）<br>
								株式会社電通<br>
								ライオン株式会社<br>
								※順不同（令和6年6月現在）
							</dd>
						</dl>
						<dl class="flex">
							<dt>代表者</dt>
							<dd>
								代表取締役　前田 泰伸
								<figure>
									<img src="<?php echo get_template_directory_uri(); ?>/images/company/ceo.jpg" alt="">
								</figure>
							</dd>
						</dl>
						<dl class="flex">
							<dt>所在地</dt>
							<dd>
								・本社<br>
								〒502-0904 岐阜県岐阜市島栄町 2-24<br>
								・岐阜オフィス<br>
								〒502-0932 岐阜県岐阜市則武中 2-25-10-201<br>
								・名古屋オフィス<br>
								〒451–0045 愛知県名古屋市西区名駅 2-29-3-805 
							</dd>
						</dl>
					</div>
				</div>


			</div>
			<a href="/" class="back">
				<div class="flex">
					<img src="<?php echo get_template_directory_uri(); ?>/images/company/back-icon.svg" alt="">
					<span>BACK</span>
				</div>
			</a>
		</div>

	</main>
    <?php get_footer();?>