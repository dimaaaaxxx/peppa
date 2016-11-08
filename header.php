<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Dear Diary</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" media="screen" />
<?php wp_head(); ?>
</head>
<body>
<div id="header">
  <div id="logo">
    <h1><a href="http://wordpress/">Peggy Pig</a></h1>
 
  </div>
  <div id="search">
    <h2>Search</h2>
    <form action="<?php bloginfo( 'url' ); ?>" method="get">
      
      <input  type="text" name="s" placeholder="" value="<?php if(!empty($_GET['s'])){echo $_GET['s'];}?>" size="14" />
        <input type="submit" id="submit1" name="submit1" value="Search" />
    
    </form>
 

  </div>
   <?php get_sidebar(); ?>
</div>
