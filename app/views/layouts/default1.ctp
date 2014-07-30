<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="huytuan" />

	<title><?php echo $title_for_layout; ?></title>
  
    
</head>

<body>
<style>
.{margin: 0px; padding: 0px;}
.header{ width:100%; height: 100px; border: 1px solid #ccc;}
.main { width: 100%;  min-height: 300px;margin:5px; }
.left { float: left; width: 20%; height: 100%;  border: 1px solid #ccc;}
.right { float: left; width: 20%; height: 100%; border: 1px solid #ccc; }
.content { float:left; width: 58%; height: 100%;  border: 1px solid #ccc; margin:0px 5px 0px 5px}
.footer { clear:both;  width:100%; height:50px;border: 1px solid #ccc;}
</style>
<div class="header"></div>
<div class="main">
    <div class="left">
    <div id="leftnav">
    <?php 
        echo $this->element('menu');
    ?>
    </div>
    
    </div>
    <div class="content"><?php echo $content_for_layout; ?></div>
    <div class="right"><?php echo $this->element('basket'); ?></div>
</div>
<div class="footer"></div>

</body>
</html>