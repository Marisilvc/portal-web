<?php
include_once('../conf/conf.php');
?>


<?php
require_once(ROOT_DIR . '/classes/NewsManager.php');
$contact_url = BASE_URL_DIR . "contato.php";
?>



<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Legislação ─ CGC da Prefeitura Municipal de São Paulo-SP</title>

	<base href=<?php echo BASE_URL_DIR; ?>>


	<link rel="shortcut icon" href="img/logo.ico">

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/html.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/content.css">
	<link rel="stylesheet" type="text/css" href="css/call-center.css">
	<link rel="stylesheet" type="text/css" href="css/news.css">

	<script src="javascript/lib/jquery-3.4.1.min.js"></script>
	<script src="https://kit.fontawesome.com/fa170b8b16.js" crossorigin="anonymous"></script>
</head>




<body>
	<?php include(HTDOCS_DIR . '/html/header.php'); ?>

	<script>
		$("#mn-news").addClass("current-menu-item");
	</script>


	<div class='content'>
		<div class='news-archive'>
			<?php
			echo NewsManager::getInstance()->generateNewsHeadline(HTDOCS_DIR . "/json/law/");
			?>
		</div>

		<?php include(HTDOCS_DIR . '/html/call-center.php'); ?>
	</div>

	<?php include(HTDOCS_DIR . '/html/footer.php'); ?>
</body>

</html>