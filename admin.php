<?php
//ThinkPHP初始化
if (file_exists ( './Install/install.lock' )) {

	define ( 'APP_NAME', 'Admin' );
	
	define ( 'APP_PATH', './Admin/' );
	
	define ( 'APP_DEBUG', true );

	require './Core/index.php';
}else{
	header("location:./Install/index.php");
}

?>