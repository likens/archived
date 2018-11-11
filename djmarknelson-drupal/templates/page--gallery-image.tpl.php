<?php

/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 * @see html.tpl.php
 */
?>

<header class="header" role="banner">
  <nav role="navigation" class="navigation">
    <a href="/" class="home">
      <span>DJ Mark Nelson</span>
      <svg class="page-logo" version="1.0" xmlns="http://www.w3.org/2000/svg" width="797.000000pt" height="199.000000pt" viewBox="0 0 797.000000 199.000000" preserveAspectRatio="xMidYMid meet">
        <g transform="translate(0.000000,199.000000) scale(0.100000,-0.100000)" stroke="none">
          <path d="M630 1635 l-354 -355 -138 0 c-101 0 -138 -3 -138 -12 0 -7 67 -80
          150 -163 l149 -151 213 213 213 213 5 -214 5 -215 223 215 222 216 1 -194 c1
          -106 4 -262 8 -346 l6 -153 458 458 457 458 0 -133 0 -132 -103 0 -102 0 -128
          -128 c-70 -70 -127 -131 -127 -135 0 -4 104 -7 230 -7 l230 0 0 -63 0 -62 143
          -143 144 -144 6 219 c4 120 7 361 7 536 l0 317 120 0 c68 0 130 -5 144 -11 14
          -7 33 -28 42 -47 20 -43 8 -95 -32 -133 -23 -21 -36 -24 -125 -27 -54 -2 -99
          -7 -99 -11 0 -3 119 -125 265 -271 l265 -265 0 -205 0 -205 140 -140 140 -140
          0 340 0 340 340 -340 340 -340 0 445 -1 445 -176 183 -176 184 229 229 229
          229 -190 0 -190 0 -197 -197 -198 -198 0 198 c0 152 -3 197 -13 197 -7 0 -64
          -51 -126 -114 l-115 -115 -22 56 c-28 69 -73 116 -141 148 l-52 25 -337 0
          -337 0 -338 -342 -338 -343 0 343 c-1 220 -5 342 -11 340 -5 -1 -106 -97 -225
          -211 l-215 -209 0 211 c0 164 -3 211 -13 211 -7 0 -172 -160 -367 -355z m3009
          -600 l0 -70 -144 150 -144 150 32 33 31 32 113 -112 113 -113 -1 -70z"/>
          <path d="M7813 1478 l-153 -152 0 -175 -1 -176 -177 183 c-97 100 -182 183
          -187 182 -6 0 -71 -61 -145 -135 -74 -74 -137 -135 -140 -135 -3 0 -17 19 -32
          43 -41 65 -149 164 -210 192 -82 38 -146 47 -276 40 -64 -3 -297 -9 -517 -13
          l-400 -7 -51 -27 c-67 -35 -138 -115 -160 -180 -22 -67 -15 -175 15 -243 27
          -62 91 -129 154 -161 29 -15 79 -28 130 -35 90 -11 123 -32 111 -73 -15 -52
          -9 -51 -399 -54 l-365 -3 0 386 c0 304 -3 385 -13 385 -7 0 -70 -57 -140 -128
          l-127 -127 0 -388 0 -387 558 2 c531 3 559 4 597 23 52 25 125 99 151 151 l20
          42 24 -35 c50 -72 171 -150 277 -178 73 -19 241 -19 312 0 122 32 249 124 312
          225 l29 45 0 -145 0 -145 140 -140 140 -140 0 485 0 485 340 -340 340 -340 0
          673 c0 369 -1 672 -2 672 -2 0 -72 -68 -155 -152z m-1182 -436 c122 -63 168
          -206 112 -342 -34 -84 -127 -140 -231 -140 -153 0 -255 103 -255 259 0 74 16
          120 59 170 69 82 213 107 315 53z m-616 1 c-16 -40 -35 -120 -35 -150 0 -18
          -2 -33 -5 -33 -3 0 -23 13 -45 29 -45 32 -96 47 -194 56 -73 7 -116 34 -116
          73 0 39 17 42 213 42 176 0 189 -1 182 -17z"/>
          <path d="M4152 1187 l-132 -132 0 -383 0 -382 330 0 330 0 0 130 0 130 -185 0
          -185 0 0 60 0 60 185 0 185 0 0 135 0 135 -185 0 -185 0 0 60 0 60 183 0 182
          0 135 130 135 129 -330 0 -330 1 -133 -133z"/>
        </g>
      </svg>
    </a>
    <div class="nav-toggle">
      <div class="bar"></div>
    </div>
    <ul role="menu">
      <li role="menuitem"><a href="/mixes" class="mixes">Mixes</a></li>
      <li role="menuitem"><a href="/blog" class="blog">Blog</a></li>
      <li role="menuitem"><a href="/contact" class="contact">Contact</a></li>
      <li role="menuitem"><a href="/gallery" class="gallery active">Gallery</a></li>
    </ul>
  </nav>
</header>


<main class="main page" role="main">
  <div class="wrapper">
    <?php print render($page['content']); ?>
    <?php if ($tabs): ?> 
      <div class="tabs"> <?php print render($tabs); ?></div> 
    <?php endif ?>
  </div>

</main>


<footer class="footer" role="contentinfo">
  <div class="wrapper">
    <div class="copyright">&copy; <a href="/about">Mark Nelson</a> <?php echo date("Y"); ?></div>
    <div class="built">built &amp; designed by <a href="http://likens.co" target="_blank">likensdotco</a></div>
  </div>
</footer>