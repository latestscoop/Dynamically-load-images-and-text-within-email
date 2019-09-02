<?php
$content = 'dynamic_content_a.css';
if(isset($_GET['content']) && !empty($_GET['content']) ){
	$content = 'dynamic_content_' . $_GET['content'] . '.css';
}
?>
<html>
<head>
	<style>
	/*default content in case external css is not supported*/
	#content::before{
		content: 'Content Default';
	}
	</style>
	<?php # check support for external css ?>
	<?php echo '<link rel="stylesheet" href="' . $content . '">'; ?>
</head>
<body>
	<h1 id="content"></h1>
</body>
</html>