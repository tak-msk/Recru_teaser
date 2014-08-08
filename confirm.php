<?php
require_once 'bootstrap.php';
$posted = Session::read('posted');
if (is_null($posted)) return header('Location: index.php#section-entry');
foreach ($posted as $key => $val) {
	if ($key === 'x' or $key === 'y') continue; // input img value. Don't need for entry
	if (empty($val)) return header('Location: index.php#section-entry');
}
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
  <link rel="stylesheet" href="css/main.css">
</head>

<body>

<!-- TOPBAR -->	
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
		<div class="header">
			<div class="logo">
				<a href="index.php#section-header"><img src="images/git_logo.png" alt="git logo" class="pull-left"></a>	
			</div>
			
			<ul class="nav nav-pills pull-right nav-links">
				 <li><a href="index.php#section-about">About</a></li>
				 <li><a href="index.php#section-program">Program</a></li>
				 <li><a href="index.php#section-info">Info</a></li>
				 <li><a href="index.php#section-entry">Entry</a></li>
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
			<div class="col-md-6">
				
				<label>氏名(Name)</label>	
				<div class="info"><?php echo __(Arr::get($posted, 'name')); ?></div>	
				
				<label>大学名(University)</label>	
				<div class="info"><?php echo __(Arr::get($posted, 'university'))?></div>	
			
				<label>学部、学科(Majoring)</label>	
				<div class="info"><?php echo __(Arr::get($posted, 'faculty'))?></div>	
			
				<label>卒業予定年度(Graduate in)</label>	
				<div class="info"><?php echo $graduating[Arr::get($posted, 'graduating')]; ?></div>	

			</div>
						
			<div class="col-md-6">	
				<label>性別(Sex)</label>	
				<div class="info"><?php echo $sex[Arr::get($posted, 'sex')]; ?></div>	
			
				<label>役割(Role)</label>	
				<div class="info"><?php echo $role[Arr::get($posted, 'role')]; ?></div>	

				<label>電話番号(Phone number)</label>	
				<div class="info"><?php echo __(Arr::get($posted, 'phone')); ?></div>	

				<label>メールアドレス(email)</label>	
				<div class="info"><?php echo __(Arr::get($posted, 'mail')); ?></div>	
				
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				
				<div class="space20"></div>
				
				<label>実績や意気込み/Experiences, enthusiasm</label>
				<p><?php echo __(Arr::get($posted, 'enthusiasm')); ?></p>
		
			</div>
		</div>
		
		<div class="row center">
			<div class="col-md-12">
				<div class="space50"></div>
				<form action="index.php#section-entry" method="post">
				   <input type="submit" value="修正する" class="button-normal submit_button"></input>
				</form>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<form action="complete-entry.php" method="post">
				   <input type="submit" value="送信する" class="button-primary submit_button"></input>
				</form>
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
