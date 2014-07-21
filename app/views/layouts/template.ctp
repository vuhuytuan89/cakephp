<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
<?php echo $this->Html->css("style");// load file css
$layout=$this->Test->general();
?>

</head>
<body>
<div id="top">
    <center><h2><?php echo $layout['header']; ?></h2></center>
</div>
<div id="main">
    <div id="menu">
        <?php //echo $this->Common->create_menu(); // goi ham tao menu tu common helper?>
    </div>
    <div id="content">
        <h1><?php echo $content; // Thành phần động ?></h1>
    </div>
</div>
<div id="footer">
    <center><?php echo $layout['footer'];?></center>
</div>

</body>
</html>