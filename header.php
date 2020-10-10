<!DOCTYPE html>
<html lang="ru">
<head>
	<title><?php echo $title; ?></title>

	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="<?php echo $descr; ?>">
	<meta name="keywords" content="<?php echo $keywords; ?>">

</head>

<body>

	
<?php 
require 'config.php';
if ($dev_mode) {
	echo '<a target="_blank" href="/dev.php?func=save_to_file&page_id='.$id.'" class="btn btn--md btn--dark"><span>Сохранить в файл</span></a>';
	echo '<a target="_blank" href="/dev.php?func=save_to_db&page_id='.$id.'" class="btn btn--md btn--dark"><span>Сохранить в базу</span></a>';
	echo '<a target="_blank" href="/dev.php?func=view_from_cache&page_id='.$id.'" class="btn btn--md btn--dark"><span>Посмотреть из кеша</span></a>';
	echo '<a target="_blank" href="/dev.php?func=save_all_files_to_db" class="btn btn--md btn--dark"><span>Сохранить все страницы из файлов в бд</span></a>';
}
?>