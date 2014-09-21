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
  <title>就活生クローズドSNS | RECRU</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=1060">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta property="fb:admins" content="">
  <meta property="og:site_name" content="">
  <meta property="og:type" content="">
  <meta property="og:image" content="">
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:url" content="">
  
  <link rel="stylesheet" href="css/style.css">
  <script src=""></script>

</head>

<bady>
	<header>
		<div id="header_video_block">
			<video src="video/teaser_moq_1.mp4" preload  loop autoplay></video>
			<img src="img/teaser_middleBar.png" alt="リクルーへの事前登録受付中">
		</div>
	</header>
	<div id="content">
		<img src="img/teaser_footerbox2.png" alt="アドレス登録">
		<div id="suggest">
			アドレスを登録して<br>
			優先的に招待を受け取る
		</div>
		<form id="register" action="validate.php" method="post">
			<p class="alert">
				<?php foreach ($failed as $errmsg): ?>
				<?php echo $errmsg; ?><br>
				<?php endforeach; ?>
			<!-- /.alert --></p>
			<div><input type="email" id="email" name="mail" value="<?php echo __(Arr::get($posted, 'mail')); ?>" size="60" maxlength="60" placeholder="Email address"></div>
			<div id="submit"><input type="submit" class="btn" value="登録する"></div>
		</form>
		</div>
	</div>
</body>
</html>
<?php
Session::delete('posted');
Session::delete('failed');
?>
