<?php
/**
 * template_header.php
 * 
 * (c)2013 mrdragonraaar.com
 */
global $mod_mobipocket;
$mobipocket = $mod_mobipocket->mobipocket;

header("Content-Type: text/html;charset=UTF-8");
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $mobipocket->title(); ?></title>
</head>

<body>
<!-- Book -->
<div id="mobipocket" itemscope itemtype="http://schema.org/Book">
