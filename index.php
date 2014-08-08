<?php
require_once 'bootstrap.php';
$posted = Session::read('posted');
$failed = Session::read('failed');
if (! is_array($posted)) $posted = array($posted);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>鉄火-TECH&alpha;- | givery Technolody</title>
  <meta name="description" content="最高峰のハッカソンに挑むサマーインターンシップ。話題の'iBeacon'を使用して、日本の就活文化に革新を起こすWebサービス・アプリを開発せよ">
  <meta name="keywords" content="internship,ハッカソン,hackathon,givery,ギブリー,iBeacon,インターンシップ">
  <meta name="viewport" content="width=1060">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta property="fb:admins" content="500020666728664">
  <meta property="og:site_name" content="givery Technology Summer Internship">
  <meta property="og:type" content="article">
  <meta property="og:image" content="">
  <meta property="og:title" content="鉄火-TECH&alpha;- | givery Technology">
  <meta property="og:description" content="最高峰のハッカソンに挑むサマーインターンシップ。日本の就活文化に革新を起こせ！">
  <meta property="og:url" content="">

  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/js_custom.js"></script>

  <link rel="stylesheet" href="bootstrap-3.2.0-dist/css/bootstrap.css">
  <link rel="stylesheet" href="css/custom.css">
</head>

<body>

<!-- TOPBAR -->	
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
		<div class="header">
			<div class="logo">
				<a href="#section-header"><img src="images/git_logo.png" alt="git logo" class="pull-left"></a>	
			</div>
			
			<ul class="nav nav-pills pull-right nav-links">
				 <li><a href="#section-about">About</a></li>
				 <li><a href="#section-program">Program</a></li>
				 <li><a href="#section-info">Info</a></li>
				 <li><a href="#section-entry">Entry</a></li>
			</ul>
		</div>

	</div>
</div>

<!-- HEADER -->
<div id="section-header" class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-2">		
			</div>
			<div class="col-xs-8 center">		
				<h4>最高峰の</h4>
				<h2>ハッカソン</h2>
				<h4>に挑む</h4>
				<h2>サマーインターンシップ</h2>
				<br />
				<img src="images/techa_logo_01.png" alt="techa logo" />
				<br />
				<br />
				<p>
					話題の "iBeacon" を使用して、<br />
					日本の就活文化に革新を起こすWebサービス・アプリを開発せよ
				</p>
				<br />
				<a href="#section-entry" class="button-primary">Entry</a>
			</div>
			<div class="col-xs-2" >		
				<table>
					<tbody>
						<tr class="time">
							<td>42</td>
							<td>:</td>
							<td>14</td>
							<td>:</td>
							<td>59</td>
							<td>:</td>
							<td>23</td>
						</tr>
						<tr class="time-labels">
							<td>Days </td>
							<td></td>
							<td>Hrs </td>
								<td></td>
							<td>Mins </td>
							<td></td>
							<td>Secs</td>
						</tr>
					</tbody>
				</table>
				<br />
				<div class="social-buttons">
					
					facebook<br />
					twitter
				</div>
			
			</div>
		</div>
	</div>
</div>

<!-- ABOUT -->	
<div id="section-about" class="section-padding">
    <div class="container">
     
		<div class="row">
				
			<div class="col-md-6">
				<img src="images/techa_logo_02.png" alt="">
			
				<p>
					<br />
					「ハッカソン型プロダクト創造インターンシップ」、鉄火(TECHA)。これまでギブリーではエンジニアの成長エコシステムを創るべく、国内最大級のハッカソンであるDMTCやエンジニア学生の就職支援を行なってきました。 
				しかし、これらはあくまでもエンジニア学生にとっては「開発」の入り口でしかありませんでした。
				</p>
			</div>

			<div class="col-md-6">
			        <p style="margin-top: 30px"></p>
				<p>今回のTECHAでは、入り口を突破し更なる高みを求める "Hacker" に「日本の就活文化に革命を起こすアプリケーション」を開発していただきます。並の技術(TECH)では満足できない "Hacker" がハッカソンによって +&alpha; を創造する。
				   それが Givery Technology の求める "TECHA's Hacker" です。</p>
				<p>「もう普通のハッカソンは飽きた」、「DMTCはもうお腹いっぱい」、「自分の技術でもっと社会に価値を提供したい」、そんな "ハッカソンジャンキー" たちへ贈る最高の夏をぜひ体感してみてください。</p>
			</div>
			
		</div>
	</div>
</div><!-- /#intro -->

		
<!-- PROGRAM -->	
<div id="section-program" class=" section-padding">
			
	<div class="container">		
		<h1>PROGRAM</h1>
				
		<div class="container">
			<div class="row">
				<div class="col-md-12">
						<div class="sub-section-button" >3~4人でのチーム開発</div>
						<div class="desc" style="display:none;">
							<p>
							TECHAには3~4人のチームを組んで参加していただきます。<br/>
							まずはそれぞれの立場を明確にしましょう。  
							</p>
							<div id="role-table">
							    <table>
								<tr>
								    <td>・Hacker</td>
								    <td>…</td>
								    <td>プロダクトに命を吹き込む技術者</td>
								</tr>
								<tr>
								    <td>・Director</td>
								    <td>…</td>
								    <td>企画を具体化し、チームを引っ張るブレーン</td>
								</tr>
								<tr>
								    <td>・Designer</td>
								    <td>…</td>
								    <td>魅せ方のスペシャリスト</td>
								</tr>
							    </table>
							</div>
							<p>
							我々はDMTCで得られたナレッジと社内で行っている「BrainStorming」と「RapidPrototyping」を融合させることにより、<br/>
							従来のハッカソンを超えたハッカソンの創出を目指します。
							</p>
						</div>
						<hr/>
				</div>								
			    </div>

			<div class="row">
				<div class="col-md-12">
					<div class="sub-section-button" >iBeaconを活用せよ</div>
					<div class="desc" style="display:none;">
						<p>
						iBeaconとは、iOS7以降の端末やAndroid4.3以降の端末で使用可能な低消費電力の近距離無線技術(BLE)のことです。<br/>
						iBeaconに対応している発信モジュールと通信することにより、数cm～数m程度までの端末とモジュール間の距離を正確に把握することが可能です。  
						</p>
						<p>　						
						TECHA's HackerにはこのiBeaconを使用することにより「日本の就活文化に革新を起こす」プロダクトを創り出していただきます。
						</p>
					</div>
					<hr />
				</div>								
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<div class="sub-section-button">事業化のチャンス</div>
					<div class="desc" style="display:none;">
						<p>
						プロダクトを完成させたらゴールではありません。<br/>
						鉄火-TECHAではプロダクトを作って、事業化してから初めてスタートラインに立つことが出来ます。<br/>
						</p>
						<p>
						"作ってはぶっ壊し"の従来型ハッカソンはもう終わりです。
						</p>
					</div>
					<hr />
					
				</div>								
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<div class="sub-section-button">オバマも食べたお寿司</div>
					
					<div class="desc"  style="display:none;">
						<p>
						ギブリーの社長は、先日アメリカのオバマ大統領も来日時にも訪れた「すきやばし次郎」で長年板前をしていました。<br/>
						今回のインターンシップでは「金銭」というありきたりな報酬ではなく、<br/>
						「鉄火」の名にふさわしい「高級寿司」を参加者に振る舞う予定です。
						</p>
					</div>
					<hr />
					
				</div>								
			</div>
			
		</div>
		
			
			
	</div>
</div>


		
<!-- INFORMATION -->	
<div id="section-info" class=" section-padding">
    <div class="container">

		<h1>INFORMATION</h1>
		
		
		<!-- SCHEDULE -->
		<div class="sub-section">
			<h3>Schedule</h3>
	
			<div class="row arrow-bg">
            
				<br/>
				<div class="col-xs-3">
					<img src="images/schedule_1.png" alt="entry">
					
					<h4>Entry</h4>
				</div>
				
				<div class="col-xs-3">
					<img src="images/schedule_2.png" alt="screening">
					
					<h4>Screening</h4>
				</div>
				
				<div class="col-xs-3">
					<img src="images/schedule_3.png" alt="techa">
					
					<h4>TECHA</h4>
				</div>
				
				<div class="col-xs-3">
					<img src="images/schedule_4.png" alt="complete">
					<h4>Complete</h4>
				</div>
				</div>
		</div>

		<!-- JUDGES -->
		<div class="sub-section">
			<h3>Judges</h3>
				COMING SOON...
		</div>
       
		<!-- OUTLINES & GOALS -->
		<div class="row">
			<div class="col-md-6">
				<div class="sub-section">
					<h3>Outline</h3>
					<table class="table">
						<tbody>
							<tr>
								<td>開催期間</td>
								<td>2014年9月19日(金)~21日(日)</td>
							</tr>
							<tr>
								<td>開催場所</td>
								<td>株式会社ギブリー　渋谷本社</td>
							</tr>
							
							<tr>
								<td>募集対象</td>
								<td>2015年、2016年卒業見込みの方 <br />
							(チーム応募大歓迎)</td>
							</tr>
							
							<tr>
								<td>選考情報</td>
								<td>本サイトよりES提出後、<br />
							通過者のみ選考を行います。</td>
							</tr>
									
							<tr>
								<td>待遇</td>
								<td>
								    高級寿司の振る舞い<br/>
								    事業化による投資</td>
							</tr>
									
						</tbody>
					</table>	
						
				</div>	
			</div>
			
			<div class="col-md-6">
				<div class="sub-section">
					<h3>Goal</h3>
					
					<p>
						鉄火-TECHAでのゴールは、開発するプロダクトがいかに「日本の就活文化に革新を起こす」か徹底的に追求してプロダクトを開発し、それを事業化することです。  
 					</p>
					<p>
						2泊3日という短い期間の中で企画・開発を行い、最終日の事業化を賭けたプレゼンテーションに臨んでいただきます。事業化の場合には、ギブリーからのあらゆる投資を受けることが可能です。
					</p>
				</div>
			</div>
			
		 </div>
    </div>
</div>

<!-- ENTRY -->	
<div id="section-entry" class="section-padding">
	<div class="container">
	<h1>ENTRY</h1>
	<form action="validate.php" method="post">
		<p class="alert-form">
			<?php foreach($failed as $errmsg): ?>
			・<?php echo $errmsg; ?><br>
			<?php endforeach; ?>
		</p>
		<div class="row">
			<div class="col-md-6 align-left">
				<p>
				  <input type="text" name="name" value="<?php echo __(Arr::get($posted, 'name')); ?>" placeholder="氏名(Name)" id="name">
				</p>
				<p>
				<input type="text" name="university" value="<?php echo __(Arr::get($posted, 'university')); ?>" placeholder="大学名(University)" id="university">
				</p>
				<p>
				<input type="text" name="faculty" value="<?php echo __(Arr::get($posted, 'faculty')); ?>" placeholder="学部、学科(Faculty)" id="faculty">
				</p>
				<p>
				<?php $selected = (int)Arr::get($posted, 'graduating'); ?>
				<select class="dropdown" name="graduating">
				    <option value="0" disabled <?php echo ($selected === 0)? "selected": null; ?>>卒業予定年度(Graduate in)</option>
				    <option value="2015" <?php echo ($selected === 2015)? "selected": null; ?>>2015</option>
				    <option value="2016" <?php echo ($selected === 2016)? "selected": null; ?>>2016</option>
				    <option value="2017" <?php echo ($selected === 2017)? "selected": null; ?>>2017</option>
				    <option value="2018" <?php echo ($selected === 2018)? "selected": null; ?>>2018</option>
				    <option value="1" <?php echo ($selected === 1)? "selected": null; ?>>既卒</option>
				</select>
				</p>
				<p>
				    <input type="text" name="phone" value="<?php echo __(Arr::get($posted, 'phone')); ?>" placeholder="電話番号(Phone #)" id="tel">
				</p>
				<p>
				    <input type="text" name="mail" value="<?php echo __(Arr::get($posted, 'mail')); ?>" placeholder="メールアドレス(Email address)" id="mail">
				</p>
				
				<?php $chose = Arr::get($posted, 'role');?>
				<p>
					<input type="radio" id="role1" name="role" value="HACKER" <?php echo ($chose === 'HACKER')? "chose": null; ?>><label for="role1">Hacker</label>
					<input type="radio" id="role2" name="role" value="DIRECTOR" <?php echo ($chose === 'DIRECTOR')? "chose": null; ?>><label for="role2">Director</label>
					<input type="radio" id="role3" name="role" value="DESIGNER" <?php echo ($chose === 'DESIGNER')? "chose": null; ?>><label for="role3">Designer</label>
				</p>

				<?php $checked = Arr::get($posted, 'sex');?>
				<p>
					<input type="radio" id="radio1" name="sex" value="MALE" <?php echo ($checked === 'MALE')? "checked": null; ?>><label for="radio1">男性(Male)</label>
					<input type="radio" id="radio2" name="sex" value="FEMALE" <?php echo ($checked === 'FEMALE')? "checked": null; ?>><label for="radio2">女性(Female)</label>
				</p>

				<!---
				<p class="row">
					<label class="col btn"><input type="radio" class="switch" name="" value="MALE" >男性</label>
					<label class="col btn"><input type="radio" class="switch" name="" value="FEMALE" >女性</label>
				</p>
				-->
			</div>
		
		
			<div class="col-md-6">
			   <textarea name="enthusiasm" cols="70" rows="17" value="<?php echo __(Arr::get($posted, 'enthusiasm')); ?>" placeholder="実績や意気込み(400字以内)/Experiences, enthusiasm(400char)"></textarea>
			</div>
		</div>
		
		<div class="row">
			<p>
			<br />
			<br />
			株式会社ギブリーの個人情報保護基本方針については<br />
			<a href="#">「株式会社ギブリーの個人情報に関する取扱いについて」</a>をご参照ください。
			<br />
			<br />
			<input type="checkbox" name="privacy" value="同意する">  個人情報に関する取扱いについて同意する
			<br />
			<br />
			</p>
		</div>
		
		<div class="row">
			<input type="submit" value="Submit" class="button-primary submit_button"></input>
		</div>
		<br/>
	</form>
    </div>
</div>	  


<footer id="footer" class="reset">
	<small>&copy; givery Technology, 2014</small>
</footer>

</body>
</html>
<?php
Session::delete('posted');
Session::delete('failed');
?>
