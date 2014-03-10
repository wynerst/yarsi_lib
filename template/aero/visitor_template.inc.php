<?php 
// be sure that this file not accessed directly
if (!defined('INDEX_AUTH')) {
    die("can not access this file directly");
} elseif (INDEX_AUTH != 1) { 
    die("can not access this file directly");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head><title><?php echo $page_title; ?></title><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="webicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="webicon.ico" type="image/x-icon" />
<link href="template/core.style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $sysconf['template']['css']; ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/updater.js"></script>
<script type="text/javascript" src="js/gui.js"></script>
</head>
<body id="login-page">
        <?php include ('menu.inc.php'); ?>
    <div id="login">
        <?php echo $main_content;?>
    </div>
  <script type="text/javascript" src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/js/supersized.3.1.3.min.js"></script>
	<script type="text/javascript">
	    jQuery(function($){
	     $.supersized(
	     {
		 transition  : 6,
		 keyboard_nav  : 0,
		 start_slide  : 0,
		 vertical_center : 1,
		 horizontal_center : 1,
		 min_width : 1000,
		 min_height : 700,
		 fit_portrait  : 1,
		 fit_landscape : 0,
		 image_protect : 1,
		 slides  : [
		{ image : '<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/1.jpg' },
		 { image : '<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/2.jpg' },
		 { image : '<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/3.jpg' },
		 { image : '<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/4.jpg' },
	       ]
	     });
	    });
	</script>
</body>
</html>
