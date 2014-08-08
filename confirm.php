<?php
require_once 'bootstrap.php';
$posted = Session::read('posted');
if (is_null($posted)) return header('Location: index.php#section-entry');
foreach ($posted as $key => $val) {
¦       if ($key === 'x' or $key === 'y') continue; // input img value. Don't need for entry
¦       if (empty($val)) return header('Location: index.php#section-entry');
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

<!-- CONTENT -->	
<div class="main section-padding">
	<div class="container">
		<h1>以下の内容でよろしければ、<br/>
		「送信する」ボタンを押してください</h1>

		
		<div class="row">
			<div class="col-xs-6">
				
				
				<label>氏名(Name)</label>	
				<div class="info">Jack Daniels</div>	
				
				<label>大学名(University)</label>	
				<div class="info">Waseda University</div>	
			
				<label>学部、学科(Majoring)</label>	
				<div class="info">Computer Science</div>	
			
				<label>卒業予定年度(Graduate in)</label>	
				<div class="info">2013</div>	

			
			</div>
			
			
			<div class="col-xs-6">
				
				<label>性別(Sex)</label>	
				<div class="info">男性(Male)</div>	
			
				<label>役割(Role)</label>	
				<div class="info">Hacker</div>	

				<label>電話番号(Phone number)</label>	
				<div class="info">123 - 4566 - 8888</div>	

				<label>メールアドレス(email)</label>	
				<div class="info">jack@sparrow.com</div>	
				
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				
				<div class="space20"></div>
				
				<label>実績や意気込み/Experiences, enthusiasm</label>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer justo lacus, rhoncus eu euismod a, ultricies sed ipsum. 
					Suspendisse luctus at risus et lobortis. Fusce quis sapien ac elit rhoncus varius. Suspendisse iaculis vel ipsum at volutpat. 
					Nunc consectetur cursus leo, et porta orci congue non. Maecenas libero dui, ullamcorper sed justo tempus, sagittis eleifend nunc. 
					Fusce tincidunt sagittis magna, in feugiat orci porttitor non. Integer urna quam, sollicitudin ut dignissim eget, laoreet ut ipsum. Nullam malesuada gravida tellus,
					in porta lacus gravida id. Integer iaculis erat vel erat luctus, in commodo nisl rhoncus. Vivamus lacinia augue urna, non vehicula felis sollicitudin ut.
					Nulla at eros gravida neque imperdiet elementum. Suspendisse vestibulum eu arcu a placerat. Morbi lectus metus, volutpat vulputate volutpat sodales, lobortis nec lectus.
				</p>
		
			</div>
		</div>
		
		
		
		<div class="row center">
			<div class="col-md-12">
				<div class="space100"></div>
		
				<a href="#" class="button-normal">修正する</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="button-primary">送信する</a>
		
				<div class="space100"></div>
				<div class="space100"></div>
			</div>
		</div>
		
		
	</div>
</div>




<footer id="footer" class="reset">
	<small>&copy; Givery Technology, 2014</small>
</footer>
</body>
</html>
