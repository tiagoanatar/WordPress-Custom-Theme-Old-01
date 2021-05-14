<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
<title><?php wp_title(); ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; <?php bloginfo('charset'); ?>" />

<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

<?php wp_head(); ?>
</head>

<body>


<div class="top_a">
  <div class="grid-container">
    <div class="grid-x">
      <div class="large-12 cell new_font">

            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Header') ) : ?>
            <?php endif; ?>
 
      </div>
    </div>
  </div>
</div>