<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
<!--   <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php //print t('Skip to main content'); ?></a>
  </div> -->

  <ul class="navigation">
      <li class="nav-item"><a href="http://amyconey.com">Home</a></li>
<!--       <li class="nav-item"><a class ="dropdown-toggle" data-toggle="dropdown" href="#">Portfolio <span class="fa fa-caret-down" title="Toggle dropdown menu"></span></a></li>
      <ul class="dropdown-menu"> -->
        <li class="nav-item"><a href="http://amyconey.com/artwork">Artwork</a></li>
        <li class="nav-item"><a href="http://amyconey.com/photography">Photography</a></li>
 <!--      </ul> -->
<!--
      <li class="nav-item"><a href="http://shop.amyconey.co.uk/">Shop</a></li>
      <li class="nav-item"><a href="https://amyconeyart.wordpress.com/">Blog</a></li>
-->
      <li class="nav-item"><a href="http://amyconey.com/about">About</a></li>
      <li class="nav-item"><a href="http://amyconey.com/contact">Contact</a></li>
  </ul>
  <input type="checkbox" id="nav-trigger" class="nav-trigger" />
  <label class="fa fa-bars fa-5x" for="nav-trigger"></label>

  <div class="social-media">
    <ul class="social-media-bar">
      <li><a href="https://www.instagram.com/amydawnconey/"><i class="fa fa-instagram fa-5x" aria-hidden="true"></i></a></li>
      <li><a href="https://www.facebook.com/amyconeyart"><i class="fa fa-facebook fa-5x" aria-hidden="true"></i></a></li>
    </ul>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
