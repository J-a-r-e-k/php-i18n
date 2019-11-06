<?php
	require_once 'i18n.class.php';
	$_GET['lang'] = in_array($_GET['lang'], ['pl', 'en', 'de']) ? $_GET['lang'] : 'pl';
	$i18n = new i18n('lang/{LANGUAGE}.ini', 'cache/', 'pl');
	$i18n->init();
?>

<p>
	<a href="/">PL</a>
	<a href="/en">EN</a>
	<a href="/de">DE</a>
</p>

<p>A greeting: <?= L::greeting; ?></p>
<p>Something other: <?= L::somethingother; ?></p>