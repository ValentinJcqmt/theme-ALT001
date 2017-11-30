<!DOCTYPE html>
<html ⚡ <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<title><?php bloginfo('name'); if(!is_front_page()){echo ' | '; wp_title('');} ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width,minimum-scale=1">
	<!-- Favicon -->
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">
	<link rel="canonical" href="<?php echo get_the_permalink() ?>">
	<meta name="msapplication-TileColor" content="#008ec7">
	<meta name="theme-color" content="#008ec7">
	<style amp-custom>
	@charset "UTF-8";
@import url("https://fonts.googleapis.com/css?family=Montserrat");
html { font-family: sans-serif; line-height: 1.15; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; }
body { margin: 0; }
article, aside, footer, header, nav, section { display: block; }
h1 { font-size: 2em; margin: 0.67em 0; }
figcaption, figure, main { display: block; }
figure { margin: 1em 40px; }
hr { box-sizing: content-box; height: 0; overflow: visible; }
pre { font-family: monospace, monospace; font-size: 1em; }
a { background-color: transparent; -webkit-text-decoration-skip: objects; }
a:active, a:hover { outline-width: 0; }
abbr[title] { border-bottom: none; text-decoration: underline; text-decoration: underline dotted; }
b, strong { font-weight: inherit; }
b, strong { font-weight: bolder; }
img { border-style: none; }
svg:not(:root) { overflow: hidden; }
button, input, optgroup, select, textarea { font-family: sans-serif; font-size: 100%; line-height: 1.15; margin: 0; }
button, input { overflow: visible; }
button, select { text-transform: none; }
button, html [type="button"], [type="reset"], [type="submit"] { -webkit-appearance: button; }
button::-moz-focus-inner, [type="button"]::-moz-focus-inner, [type="reset"]::-moz-focus-inner, [type="submit"]::-moz-focus-inner { border-style: none; padding: 0; }
button:-moz-focusring, [type="button"]:-moz-focusring, [type="reset"]:-moz-focusring, [type="submit"]:-moz-focusring { outline: 1px dotted ButtonText; }
@media print { *, *::before, *::after, p::first-letter, div::first-letter, blockquote::first-letter, li::first-letter, p::first-line, div::first-line, blockquote::first-line, li::first-line { text-shadow: none !important; box-shadow: none !important; }
  a, a:visited { text-decoration: underline; }
  abbr[title]::after { content: " (" attr(title) ")"; }
  pre { white-space: pre-wrap !important; }
  pre, blockquote { border: 1px solid #999; page-break-inside: avoid; }
  thead { display: table-header-group; }
  tr, img { page-break-inside: avoid; }
  p, h2, h3 { orphans: 3; widows: 3; }
  h2, h3 { page-break-after: avoid; }
  .navbar { display: none; }
  .badge { border: 1px solid #000; }
  .table { border-collapse: collapse !important; }
  .table td, .table th { background-color: #fff !important; }
  .table-bordered th, .table-bordered td { border: 1px solid #ddd !important; } }
html { box-sizing: border-box; }
*, *::before, *::after { box-sizing: inherit; }
@-ms-viewport { width: device-width; }
html { -ms-overflow-style: scrollbar; -webkit-tap-highlight-color: transparent; }
body { font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; font-size: 1rem; font-weight: normal; line-height: 1.3; color: #84919f; background-color: #fff; }
[tabindex="-1"]:focus { outline: none !important; }
h1, h2, h3, h4, h5, h6 { margin-top: 0; margin-bottom: .5rem; }
p { margin-top: 0; margin-bottom: 1rem; }
ol, ul, dl { margin-top: 0; margin-bottom: 1rem; }
ol ol, ul ul, ol ul, ul ol { margin-bottom: 0; }
a { color: #333; text-decoration: none; }
a:focus, a:hover { color: #333; text-decoration: none; }
a:not([href]):not([tabindex]) { color: inherit; text-decoration: none; }
a:not([href]):not([tabindex]):focus, a:not([href]):not([tabindex]):hover { color: inherit; text-decoration: none; }
a:not([href]):not([tabindex]):focus { outline: 0; }
img { vertical-align: middle; }
[role="button"] { cursor: pointer; }
label { display: inline-block; margin-bottom: .5rem; }
button:focus { outline: 1px dotted; outline: 5px auto -webkit-focus-ring-color; }
input, button, select, textarea { line-height: inherit; }
textarea { resize: vertical; }
input[type="search"] { -webkit-appearance: none; }
h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 { margin-bottom: 0; font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit; }
h1, .h1 { font-size: 3.4rem; }
h2, .h2 { font-size: 2.2rem; }
h3, .h3 { font-size: 1.5rem; }
h4, .h4 { font-size: 1.25rem; }
h5, .h5 { font-size: 1.125rem; }
h6, .h6 { font-size: 1rem; }
.img-fluid { max-width: 100%; height: auto; }
.img-thumbnail { padding: 0.25rem; background-color: #fff; border: 1px solid #ddd; border-radius: 0.25rem; transition: all 0.2s ease-in-out; max-width: 100%; height: auto; }
.container { position: relative; margin-left: auto; margin-right: auto; padding-right: 0px; padding-left: 0px; }
@media (min-width: 576px) { .container { padding-right: 0px; padding-left: 0px; } }
@media (min-width: 768px) { .container { padding-right: 0px; padding-left: 0px; } }
@media (min-width: 992px) { .container { padding-right: 0px; padding-left: 0px; } }
@media (min-width: 1200px) { .container { padding-right: 0px; padding-left: 0px; } }
@media (min-width: 576px) { .container { width: 540px; max-width: 100%; } }
@media (min-width: 768px) { .container { width: 720px; max-width: 100%; } }
@media (min-width: 992px) { .container { width: 960px; max-width: 100%; } }
@media (min-width: 1200px) { .container { width: 1140px; max-width: 100%; } }
.container-fluid { position: relative; margin-left: auto; margin-right: auto; padding-right: 0px; padding-left: 0px; }
@media (min-width: 576px) { .container-fluid { padding-right: 0px; padding-left: 0px; } }
@media (min-width: 768px) { .container-fluid { padding-right: 0px; padding-left: 0px; } }
@media (min-width: 992px) { .container-fluid { padding-right: 0px; padding-left: 0px; } }
@media (min-width: 1200px) { .container-fluid { padding-right: 0px; padding-left: 0px; } }
.row { display: flex; flex-wrap: wrap; margin-right: 0px; margin-left: 0px; }
@media (min-width: 576px) { .row { margin-right: 0px; margin-left: 0px; } }
@media (min-width: 768px) { .row { margin-right: 0px; margin-left: 0px; } }
@media (min-width: 992px) { .row { margin-right: 0px; margin-left: 0px; } }
@media (min-width: 1200px) { .row { margin-right: 0px; margin-left: 0px; } }
.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl { position: relative; width: 100%; min-height: 1px; padding-right: 0px; padding-left: 0px; }
@media (min-width: 576px) { .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl { padding-right: 0px; padding-left: 0px; } }
@media (min-width: 768px) { .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl { padding-right: 0px; padding-left: 0px; } }
@media (min-width: 992px) { .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl { padding-right: 0px; padding-left: 0px; } }
@media (min-width: 1200px) { .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl { padding-right: 0px; padding-left: 0px; } }

.col { flex-basis: 0; flex-grow: 1; max-width: 100%; }
.col-auto { flex: 0 0 auto; width: auto; }
.col-1 { flex: 0 0 8.33333%; max-width: 8.33333%; }
.col-2 { flex: 0 0 16.66667%; max-width: 16.66667%; }
.col-3 { flex: 0 0 25%; max-width: 25%; }
.col-4 { flex: 0 0 33.33333%; max-width: 33.33333%; }
.col-5 { flex: 0 0 41.66667%; max-width: 41.66667%; }
.col-6 { flex: 0 0 50%; max-width: 50%; }
.col-7 { flex: 0 0 58.33333%; max-width: 58.33333%; }
.col-8 { flex: 0 0 66.66667%; max-width: 66.66667%; }
.col-9 { flex: 0 0 75%; max-width: 75%; }
.col-10 { flex: 0 0 83.33333%; max-width: 83.33333%; }
.col-11 { flex: 0 0 91.66667%; max-width: 91.66667%; }
.col-12 { flex: 0 0 100%; max-width: 100%; }
.pull-0 { right: auto; }
.pull-1 { right: 8.33333%; }
.pull-2 { right: 16.66667%; }
.pull-3 { right: 25%; }
.pull-4 { right: 33.33333%; }
.pull-5 { right: 41.66667%; }
.pull-6 { right: 50%; }
.pull-7 { right: 58.33333%; }
.pull-8 { right: 66.66667%; }
.pull-9 { right: 75%; }
.pull-10 { right: 83.33333%; }
.pull-11 { right: 91.66667%; }
.pull-12 { right: 100%; }
.push-0 { left: auto; }
.push-1 { left: 8.33333%; }
.push-2 { left: 16.66667%; }
.push-3 { left: 25%; }
.push-4 { left: 33.33333%; }
.push-5 { left: 41.66667%; }
.push-6 { left: 50%; }
.push-7 { left: 58.33333%; }
.push-8 { left: 66.66667%; }
.push-9 { left: 75%; }
.push-10 { left: 83.33333%; }
.push-11 { left: 91.66667%; }
.push-12 { left: 100%; }
.offset-1 { margin-left: 8.33333%; }
.offset-2 { margin-left: 16.66667%; }
.offset-3 { margin-left: 25%; }
.offset-4 { margin-left: 33.33333%; }
.offset-5 { margin-left: 41.66667%; }
.offset-6 { margin-left: 50%; }
.offset-7 { margin-left: 58.33333%; }
.offset-8 { margin-left: 66.66667%; }
.offset-9 { margin-left: 75%; }
.offset-10 { margin-left: 83.33333%; }
.offset-11 { margin-left: 91.66667%; }
@media (min-width: 576px) { .col-sm { flex-basis: 0; flex-grow: 1; max-width: 100%; }
  .col-sm-auto { flex: 0 0 auto; width: auto; }
  .col-sm-1 { flex: 0 0 8.33333%; max-width: 8.33333%; }
  .col-sm-2 { flex: 0 0 16.66667%; max-width: 16.66667%; }
  .col-sm-3 { flex: 0 0 25%; max-width: 25%; }
  .col-sm-4 { flex: 0 0 33.33333%; max-width: 33.33333%; }
  .col-sm-5 { flex: 0 0 41.66667%; max-width: 41.66667%; }
  .col-sm-6 { flex: 0 0 50%; max-width: 50%; }
  .col-sm-7 { flex: 0 0 58.33333%; max-width: 58.33333%; }
  .col-sm-8 { flex: 0 0 66.66667%; max-width: 66.66667%; }
  .col-sm-9 { flex: 0 0 75%; max-width: 75%; }
  .col-sm-10 { flex: 0 0 83.33333%; max-width: 83.33333%; }
  .col-sm-11 { flex: 0 0 91.66667%; max-width: 91.66667%; }
  .col-sm-12 { flex: 0 0 100%; max-width: 100%; }
  .pull-sm-0 { right: auto; }
  .pull-sm-1 { right: 8.33333%; }
  .pull-sm-2 { right: 16.66667%; }
  .pull-sm-3 { right: 25%; }
  .pull-sm-4 { right: 33.33333%; }
  .pull-sm-5 { right: 41.66667%; }
  .pull-sm-6 { right: 50%; }
  .pull-sm-7 { right: 58.33333%; }
  .pull-sm-8 { right: 66.66667%; }
  .pull-sm-9 { right: 75%; }
  .pull-sm-10 { right: 83.33333%; }
  .pull-sm-11 { right: 91.66667%; }
  .pull-sm-12 { right: 100%; }
  .push-sm-0 { left: auto; }
  .push-sm-1 { left: 8.33333%; }
  .push-sm-2 { left: 16.66667%; }
  .push-sm-3 { left: 25%; }
  .push-sm-4 { left: 33.33333%; }
  .push-sm-5 { left: 41.66667%; }
  .push-sm-6 { left: 50%; }
  .push-sm-7 { left: 58.33333%; }
  .push-sm-8 { left: 66.66667%; }
  .push-sm-9 { left: 75%; }
  .push-sm-10 { left: 83.33333%; }
  .push-sm-11 { left: 91.66667%; }
  .push-sm-12 { left: 100%; }
  .offset-sm-0 { margin-left: 0%; }
  .offset-sm-1 { margin-left: 8.33333%; }
  .offset-sm-2 { margin-left: 16.66667%; }
  .offset-sm-3 { margin-left: 25%; }
  .offset-sm-4 { margin-left: 33.33333%; }
  .offset-sm-5 { margin-left: 41.66667%; }
  .offset-sm-6 { margin-left: 50%; }
  .offset-sm-7 { margin-left: 58.33333%; }
  .offset-sm-8 { margin-left: 66.66667%; }
  .offset-sm-9 { margin-left: 75%; }
  .offset-sm-10 { margin-left: 83.33333%; }
  .offset-sm-11 { margin-left: 91.66667%; } }
@media (min-width: 768px) { .col-md { flex-basis: 0; flex-grow: 1; max-width: 100%; }
  .col-md-auto { flex: 0 0 auto; width: auto; }
  .col-md-1 { flex: 0 0 8.33333%; max-width: 8.33333%; }
  .col-md-2 { flex: 0 0 16.66667%; max-width: 16.66667%; }
  .col-md-3 { flex: 0 0 25%; max-width: 25%; }
  .col-md-4 { flex: 0 0 33.33333%; max-width: 33.33333%; }
  .col-md-5 { flex: 0 0 41.66667%; max-width: 41.66667%; }
  .col-md-6 { flex: 0 0 50%; max-width: 50%; }
  .col-md-7 { flex: 0 0 58.33333%; max-width: 58.33333%; }
  .col-md-8 { flex: 0 0 66.66667%; max-width: 66.66667%; }
  .col-md-9 { flex: 0 0 75%; max-width: 75%; }
  .col-md-10 { flex: 0 0 83.33333%; max-width: 83.33333%; }
  .col-md-11 { flex: 0 0 91.66667%; max-width: 91.66667%; }
  .col-md-12 { flex: 0 0 100%; max-width: 100%; }
  .pull-md-0 { right: auto; }
  .pull-md-1 { right: 8.33333%; }
  .pull-md-2 { right: 16.66667%; }
  .pull-md-3 { right: 25%; }
  .pull-md-4 { right: 33.33333%; }
  .pull-md-5 { right: 41.66667%; }
  .pull-md-6 { right: 50%; }
  .pull-md-7 { right: 58.33333%; }
  .pull-md-8 { right: 66.66667%; }
  .pull-md-9 { right: 75%; }
  .pull-md-10 { right: 83.33333%; }
  .pull-md-11 { right: 91.66667%; }
  .pull-md-12 { right: 100%; }
  .push-md-0 { left: auto; }
  .push-md-1 { left: 8.33333%; }
  .push-md-2 { left: 16.66667%; }
  .push-md-3 { left: 25%; }
  .push-md-4 { left: 33.33333%; }
  .push-md-5 { left: 41.66667%; }
  .push-md-6 { left: 50%; }
  .push-md-7 { left: 58.33333%; }
  .push-md-8 { left: 66.66667%; }
  .push-md-9 { left: 75%; }
  .push-md-10 { left: 83.33333%; }
  .push-md-11 { left: 91.66667%; }
  .push-md-12 { left: 100%; }
  .offset-md-0 { margin-left: 0%; }
  .offset-md-1 { margin-left: 8.33333%; }
  .offset-md-2 { margin-left: 16.66667%; }
  .offset-md-3 { margin-left: 25%; }
  .offset-md-4 { margin-left: 33.33333%; }
  .offset-md-5 { margin-left: 41.66667%; }
  .offset-md-6 { margin-left: 50%; }
  .offset-md-7 { margin-left: 58.33333%; }
  .offset-md-8 { margin-left: 66.66667%; }
  .offset-md-9 { margin-left: 75%; }
  .offset-md-10 { margin-left: 83.33333%; }
  .offset-md-11 { margin-left: 91.66667%; } }
@media (min-width: 992px) { .col-lg { flex-basis: 0; flex-grow: 1; max-width: 100%; }
  .col-lg-auto { flex: 0 0 auto; width: auto; }
  .col-lg-1 { flex: 0 0 8.33333%; max-width: 8.33333%; }
  .col-lg-2 { flex: 0 0 16.66667%; max-width: 16.66667%; }
  .col-lg-3 { flex: 0 0 25%; max-width: 25%; }
  .col-lg-4 { flex: 0 0 33.33333%; max-width: 33.33333%; }
  .col-lg-5 { flex: 0 0 41.66667%; max-width: 41.66667%; }
  .col-lg-6 { flex: 0 0 50%; max-width: 50%; }
  .col-lg-7 { flex: 0 0 58.33333%; max-width: 58.33333%; }
  .col-lg-8 { flex: 0 0 66.66667%; max-width: 66.66667%; }
  .col-lg-9 { flex: 0 0 75%; max-width: 75%; }
  .col-lg-10 { flex: 0 0 83.33333%; max-width: 83.33333%; }
  .col-lg-11 { flex: 0 0 91.66667%; max-width: 91.66667%; }
  .col-lg-12 { flex: 0 0 100%; max-width: 100%; }
  .pull-lg-0 { right: auto; }
  .pull-lg-1 { right: 8.33333%; }
  .pull-lg-2 { right: 16.66667%; }
  .pull-lg-3 { right: 25%; }
  .pull-lg-4 { right: 33.33333%; }
  .pull-lg-5 { right: 41.66667%; }
  .pull-lg-6 { right: 50%; }
  .pull-lg-7 { right: 58.33333%; }
  .pull-lg-8 { right: 66.66667%; }
  .pull-lg-9 { right: 75%; }
  .pull-lg-10 { right: 83.33333%; }
  .pull-lg-11 { right: 91.66667%; }
  .pull-lg-12 { right: 100%; }
  .push-lg-0 { left: auto; }
  .push-lg-1 { left: 8.33333%; }
  .push-lg-2 { left: 16.66667%; }
  .push-lg-3 { left: 25%; }
  .push-lg-4 { left: 33.33333%; }
  .push-lg-5 { left: 41.66667%; }
  .push-lg-6 { left: 50%; }
  .push-lg-7 { left: 58.33333%; }
  .push-lg-8 { left: 66.66667%; }
  .push-lg-9 { left: 75%; }
  .push-lg-10 { left: 83.33333%; }
  .push-lg-11 { left: 91.66667%; }
  .push-lg-12 { left: 100%; }
  .offset-lg-0 { margin-left: 0%; }
  .offset-lg-1 { margin-left: 8.33333%; }
  .offset-lg-2 { margin-left: 16.66667%; }
  .offset-lg-3 { margin-left: 25%; }
  .offset-lg-4 { margin-left: 33.33333%; }
  .offset-lg-5 { margin-left: 41.66667%; }
  .offset-lg-6 { margin-left: 50%; }
  .offset-lg-7 { margin-left: 58.33333%; }
  .offset-lg-8 { margin-left: 66.66667%; }
  .offset-lg-9 { margin-left: 75%; }
  .offset-lg-10 { margin-left: 83.33333%; }
  .offset-lg-11 { margin-left: 91.66667%; } }
@media (min-width: 1200px) { .col-xl { flex-basis: 0; flex-grow: 1; max-width: 100%; }
  .col-xl-auto { flex: 0 0 auto; width: auto; }
  .col-xl-1 { flex: 0 0 8.33333%; max-width: 8.33333%; }
  .col-xl-2 { flex: 0 0 16.66667%; max-width: 16.66667%; }
  .col-xl-3 { flex: 0 0 25%; max-width: 25%; }
  .col-xl-4 { flex: 0 0 33.33333%; max-width: 33.33333%; }
  .col-xl-5 { flex: 0 0 41.66667%; max-width: 41.66667%; }
  .col-xl-6 { flex: 0 0 50%; max-width: 50%; }
  .col-xl-7 { flex: 0 0 58.33333%; max-width: 58.33333%; }
  .col-xl-8 { flex: 0 0 66.66667%; max-width: 66.66667%; }
  .col-xl-9 { flex: 0 0 75%; max-width: 75%; }
  .col-xl-10 { flex: 0 0 83.33333%; max-width: 83.33333%; }
  .col-xl-11 { flex: 0 0 91.66667%; max-width: 91.66667%; }
  .col-xl-12 { flex: 0 0 100%; max-width: 100%; }
  .pull-xl-0 { right: auto; }
  .pull-xl-1 { right: 8.33333%; }
  .pull-xl-2 { right: 16.66667%; }
  .pull-xl-3 { right: 25%; }
  .pull-xl-4 { right: 33.33333%; }
  .pull-xl-5 { right: 41.66667%; }
  .pull-xl-6 { right: 50%; }
  .pull-xl-7 { right: 58.33333%; }
  .pull-xl-8 { right: 66.66667%; }
  .pull-xl-9 { right: 75%; }
  .pull-xl-10 { right: 83.33333%; }
  .pull-xl-11 { right: 91.66667%; }
  .pull-xl-12 { right: 100%; }
  .push-xl-0 { left: auto; }
  .push-xl-1 { left: 8.33333%; }
  .push-xl-2 { left: 16.66667%; }
  .push-xl-3 { left: 25%; }
  .push-xl-4 { left: 33.33333%; }
  .push-xl-5 { left: 41.66667%; }
  .push-xl-6 { left: 50%; }
  .push-xl-7 { left: 58.33333%; }
  .push-xl-8 { left: 66.66667%; }
  .push-xl-9 { left: 75%; }
  .push-xl-10 { left: 83.33333%; }
  .push-xl-11 { left: 91.66667%; }
  .push-xl-12 { left: 100%; }
  .offset-xl-0 { margin-left: 0%; }
  .offset-xl-1 { margin-left: 8.33333%; }
  .offset-xl-2 { margin-left: 16.66667%; }
  .offset-xl-3 { margin-left: 25%; }
  .offset-xl-4 { margin-left: 33.33333%; }
  .offset-xl-5 { margin-left: 41.66667%; }
  .offset-xl-6 { margin-left: 50%; }
  .offset-xl-7 { margin-left: 58.33333%; }
  .offset-xl-8 { margin-left: 66.66667%; }
  .offset-xl-9 { margin-left: 75%; }
  .offset-xl-10 { margin-left: 83.33333%; }
  .offset-xl-11 { margin-left: 91.66667%; } }
.align-baseline { vertical-align: baseline !important; }
.align-top { vertical-align: top !important; }
.align-middle { vertical-align: middle !important; }
.align-bottom { vertical-align: bottom !important; }
.align-text-bottom { vertical-align: text-bottom !important; }
.align-text-top { vertical-align: text-top !important; }
.d-none { display: none !important; }
.d-inline { display: inline !important; }
.d-inline-block { display: inline-block !important; }
.d-block { display: block !important; }
.d-table { display: table !important; }
.d-table-cell { display: table-cell !important; }
.d-flex { display: flex !important; }
.d-inline-flex { display: inline-flex !important; }
@media (min-width: 576px) { .d-sm-none { display: none !important; }
  .d-sm-inline { display: inline !important; }
  .d-sm-inline-block { display: inline-block !important; }
  .d-sm-block { display: block !important; }
  .d-sm-table { display: table !important; }
  .d-sm-table-cell { display: table-cell !important; }
  .d-sm-flex { display: flex !important; }
  .d-sm-inline-flex { display: inline-flex !important; } }
@media (min-width: 768px) { .d-md-none { display: none !important; }
  .d-md-inline { display: inline !important; }
  .d-md-inline-block { display: inline-block !important; }
  .d-md-block { display: block !important; }
  .d-md-table { display: table !important; }
  .d-md-table-cell { display: table-cell !important; }
  .d-md-flex { display: flex !important; }
  .d-md-inline-flex { display: inline-flex !important; } }
@media (min-width: 992px) { .d-lg-none { display: none !important; }
  .d-lg-inline { display: inline !important; }
  .d-lg-inline-block { display: inline-block !important; }
  .d-lg-block { display: block !important; }
  .d-lg-table { display: table !important; }
  .d-lg-table-cell { display: table-cell !important; }
  .d-lg-flex { display: flex !important; }
  .d-lg-inline-flex { display: inline-flex !important; } }
@media (min-width: 1200px) { .d-xl-none { display: none !important; }
  .d-xl-inline { display: inline !important; }
  .d-xl-inline-block { display: inline-block !important; }
  .d-xl-block { display: block !important; }
  .d-xl-table { display: table !important; }
  .d-xl-table-cell { display: table-cell !important; }
  .d-xl-flex { display: flex !important; }
  .d-xl-inline-flex { display: inline-flex !important; } }
.fixed-top { position: fixed; top: 0; right: 0; left: 0; z-index: 1030; }
.fixed-bottom { position: fixed; right: 0; bottom: 0; left: 0; z-index: 1030; }
.sticky-top { position: sticky; top: 0; z-index: 1030; }
.mw-100 { max-width: 100% !important; }
.mh-100 { max-height: 100% !important; }
.m-0 { margin: 0 0 !important; }
.mt-0 { margin-top: 0 !important; }
.mr-0 { margin-right: 0 !important; }
.mb-0 { margin-bottom: 0 !important; }
.ml-0 { margin-left: 0 !important; }
.mx-0 { margin-right: 0 !important; margin-left: 0 !important; }
.my-0 { margin-top: 0 !important; margin-bottom: 0 !important; }
.m-1 { margin: 10px 10px !important; }
.mt-1 { margin-top: 10px !important; }
.mr-1 { margin-right: 10px !important; }
.mb-1 { margin-bottom: 10px !important; }
.ml-1 { margin-left: 10px !important; }
.mx-1 { margin-right: 10px !important; margin-left: 10px !important; }
.my-1 { margin-top: 10px !important; margin-bottom: 10px !important; }
.m-2 { margin: 20px 20px !important; }
.mt-2 { margin-top: 20px !important; }
.mr-2 { margin-right: 20px !important; }
.mb-2 { margin-bottom: 20px !important; }
.ml-2 { margin-left: 20px !important; }
.mx-2 { margin-right: 20px !important; margin-left: 20px !important; }
.my-2 { margin-top: 20px !important; margin-bottom: 20px !important; }
.m-3 { margin: 30px 30px !important; }
.mt-3 { margin-top: 30px !important; }
.mr-3 { margin-right: 30px !important; }
.mb-3 { margin-bottom: 30px !important; }
.ml-3 { margin-left: 30px !important; }
.mx-3 { margin-right: 30px !important; margin-left: 30px !important; }
.my-3 { margin-top: 30px !important; margin-bottom: 30px !important; }
.m-4 { margin: 40px 40px !important; }
.mt-4 { margin-top: 40px !important; }
.mr-4 { margin-right: 40px !important; }
.mb-4 { margin-bottom: 40px !important; }
.ml-4 { margin-left: 40px !important; }
.mx-4 { margin-right: 40px !important; margin-left: 40px !important; }
.my-4 { margin-top: 40px !important; margin-bottom: 40px !important; }
.m-5 { margin: 50px 50px !important; }
.mt-5 { margin-top: 50px !important; }
.mr-5 { margin-right: 50px !important; }
.mb-5 { margin-bottom: 50px !important; }
.ml-5 { margin-left: 50px !important; }
.mx-5 { margin-right: 50px !important; margin-left: 50px !important; }
.my-5 { margin-top: 50px !important; margin-bottom: 50px !important; }
.p-0 { padding: 0 0 !important; }
.pt-0 { padding-top: 0 !important; }
.pr-0 { padding-right: 0 !important; }
.pb-0 { padding-bottom: 0 !important; }
.pl-0 { padding-left: 0 !important; }
.px-0 { padding-right: 0 !important; padding-left: 0 !important; }
.py-0 { padding-top: 0 !important; padding-bottom: 0 !important; }
.p-1 { padding: 10px 10px !important; }
.pt-1 { padding-top: 10px !important; }
.pr-1 { padding-right: 10px !important; }
.pb-1 { padding-bottom: 10px !important; }
.pl-1 { padding-left: 10px !important; }
.px-1 { padding-right: 10px !important; padding-left: 10px !important; }
.py-1 { padding-top: 10px !important; padding-bottom: 10px !important; }
.p-2 { padding: 20px 20px !important; }
.pt-2 { padding-top: 20px !important; }
.pr-2 { padding-right: 20px !important; }
.pb-2 { padding-bottom: 20px !important; }
.pl-2 { padding-left: 20px !important; }
.px-2 { padding-right: 20px !important; padding-left: 20px !important; }
.py-2 { padding-top: 20px !important; padding-bottom: 20px !important; }
.p-3 { padding: 30px 30px !important; }
.pt-3 { padding-top: 30px !important; }
.pr-3 { padding-right: 30px !important; }
.pb-3 { padding-bottom: 30px !important; }
.pl-3 { padding-left: 30px !important; }
.px-3 { padding-right: 30px !important; padding-left: 30px !important; }
.py-3 { padding-top: 30px !important; padding-bottom: 30px !important; }
.p-4 { padding: 40px 40px !important; }
.pt-4 { padding-top: 40px !important; }
.pr-4 { padding-right: 40px !important; }
.pb-4 { padding-bottom: 40px !important; }
.pl-4 { padding-left: 40px !important; }
.px-4 { padding-right: 40px !important; padding-left: 40px !important; }
.py-4 { padding-top: 40px !important; padding-bottom: 40px !important; }
.p-5 { padding: 50px 50px !important; }
.pt-5 { padding-top: 50px !important; }
.pr-5 { padding-right: 50px !important; }
.pb-5 { padding-bottom: 50px !important; }
.pl-5 { padding-left: 50px !important; }
.px-5 { padding-right: 50px !important; padding-left: 50px !important; }
.py-5 { padding-top: 50px !important; padding-bottom: 50px !important; }
.m-auto { margin: auto !important; }
.mt-auto { margin-top: auto !important; }
.mr-auto { margin-right: auto !important; }
.mb-auto { margin-bottom: auto !important; }
.ml-auto { margin-left: auto !important; }
.mx-auto { margin-right: auto !important; margin-left: auto !important; }
.my-auto { margin-top: auto !important; margin-bottom: auto !important; }
@media (min-width: 576px) { .m-sm-0 { margin: 0 0 !important; }
  .mt-sm-0 { margin-top: 0 !important; }
  .mr-sm-0 { margin-right: 0 !important; }
  .mb-sm-0 { margin-bottom: 0 !important; }
  .ml-sm-0 { margin-left: 0 !important; }
  .mx-sm-0 { margin-right: 0 !important; margin-left: 0 !important; }
  .my-sm-0 { margin-top: 0 !important; margin-bottom: 0 !important; }
  .m-sm-1 { margin: 10px 10px !important; }
  .mt-sm-1 { margin-top: 10px !important; }
  .mr-sm-1 { margin-right: 10px !important; }
  .mb-sm-1 { margin-bottom: 10px !important; }
  .ml-sm-1 { margin-left: 10px !important; }
  .mx-sm-1 { margin-right: 10px !important; margin-left: 10px !important; }
  .my-sm-1 { margin-top: 10px !important; margin-bottom: 10px !important; }
  .m-sm-2 { margin: 20px 20px !important; }
  .mt-sm-2 { margin-top: 20px !important; }
  .mr-sm-2 { margin-right: 20px !important; }
  .mb-sm-2 { margin-bottom: 20px !important; }
  .ml-sm-2 { margin-left: 20px !important; }
  .mx-sm-2 { margin-right: 20px !important; margin-left: 20px !important; }
  .my-sm-2 { margin-top: 20px !important; margin-bottom: 20px !important; }
  .m-sm-3 { margin: 30px 30px !important; }
  .mt-sm-3 { margin-top: 30px !important; }
  .mr-sm-3 { margin-right: 30px !important; }
  .mb-sm-3 { margin-bottom: 30px !important; }
  .ml-sm-3 { margin-left: 30px !important; }
  .mx-sm-3 { margin-right: 30px !important; margin-left: 30px !important; }
  .my-sm-3 { margin-top: 30px !important; margin-bottom: 30px !important; }
  .m-sm-4 { margin: 40px 40px !important; }
  .mt-sm-4 { margin-top: 40px !important; }
  .mr-sm-4 { margin-right: 40px !important; }
  .mb-sm-4 { margin-bottom: 40px !important; }
  .ml-sm-4 { margin-left: 40px !important; }
  .mx-sm-4 { margin-right: 40px !important; margin-left: 40px !important; }
  .my-sm-4 { margin-top: 40px !important; margin-bottom: 40px !important; }
  .m-sm-5 { margin: 50px 50px !important; }
  .mt-sm-5 { margin-top: 50px !important; }
  .mr-sm-5 { margin-right: 50px !important; }
  .mb-sm-5 { margin-bottom: 50px !important; }
  .ml-sm-5 { margin-left: 50px !important; }
  .mx-sm-5 { margin-right: 50px !important; margin-left: 50px !important; }
  .my-sm-5 { margin-top: 50px !important; margin-bottom: 50px !important; }
  .p-sm-0 { padding: 0 0 !important; }
  .pt-sm-0 { padding-top: 0 !important; }
  .pr-sm-0 { padding-right: 0 !important; }
  .pb-sm-0 { padding-bottom: 0 !important; }
  .pl-sm-0 { padding-left: 0 !important; }
  .px-sm-0 { padding-right: 0 !important; padding-left: 0 !important; }
  .py-sm-0 { padding-top: 0 !important; padding-bottom: 0 !important; }
  .p-sm-1 { padding: 10px 10px !important; }
  .pt-sm-1 { padding-top: 10px !important; }
  .pr-sm-1 { padding-right: 10px !important; }
  .pb-sm-1 { padding-bottom: 10px !important; }
  .pl-sm-1 { padding-left: 10px !important; }
  .px-sm-1 { padding-right: 10px !important; padding-left: 10px !important; }
  .py-sm-1 { padding-top: 10px !important; padding-bottom: 10px !important; }
  .p-sm-2 { padding: 20px 20px !important; }
  .pt-sm-2 { padding-top: 20px !important; }
  .pr-sm-2 { padding-right: 20px !important; }
  .pb-sm-2 { padding-bottom: 20px !important; }
  .pl-sm-2 { padding-left: 20px !important; }
  .px-sm-2 { padding-right: 20px !important; padding-left: 20px !important; }
  .py-sm-2 { padding-top: 20px !important; padding-bottom: 20px !important; }
  .p-sm-3 { padding: 30px 30px !important; }
  .pt-sm-3 { padding-top: 30px !important; }
  .pr-sm-3 { padding-right: 30px !important; }
  .pb-sm-3 { padding-bottom: 30px !important; }
  .pl-sm-3 { padding-left: 30px !important; }
  .px-sm-3 { padding-right: 30px !important; padding-left: 30px !important; }
  .py-sm-3 { padding-top: 30px !important; padding-bottom: 30px !important; }
  .p-sm-4 { padding: 40px 40px !important; }
  .pt-sm-4 { padding-top: 40px !important; }
  .pr-sm-4 { padding-right: 40px !important; }
  .pb-sm-4 { padding-bottom: 40px !important; }
  .pl-sm-4 { padding-left: 40px !important; }
  .px-sm-4 { padding-right: 40px !important; padding-left: 40px !important; }
  .py-sm-4 { padding-top: 40px !important; padding-bottom: 40px !important; }
  .p-sm-5 { padding: 50px 50px !important; }
  .pt-sm-5 { padding-top: 50px !important; }
  .pr-sm-5 { padding-right: 50px !important; }
  .pb-sm-5 { padding-bottom: 50px !important; }
  .pl-sm-5 { padding-left: 50px !important; }
  .px-sm-5 { padding-right: 50px !important; padding-left: 50px !important; }
  .py-sm-5 { padding-top: 50px !important; padding-bottom: 50px !important; }
  .m-sm-auto { margin: auto !important; }
  .mt-sm-auto { margin-top: auto !important; }
  .mr-sm-auto { margin-right: auto !important; }
  .mb-sm-auto { margin-bottom: auto !important; }
  .ml-sm-auto { margin-left: auto !important; }
  .mx-sm-auto { margin-right: auto !important; margin-left: auto !important; }
  .my-sm-auto { margin-top: auto !important; margin-bottom: auto !important; } }
@media (min-width: 768px) { .m-md-0 { margin: 0 0 !important; }
  .mt-md-0 { margin-top: 0 !important; }
  .mr-md-0 { margin-right: 0 !important; }
  .mb-md-0 { margin-bottom: 0 !important; }
  .ml-md-0 { margin-left: 0 !important; }
  .mx-md-0 { margin-right: 0 !important; margin-left: 0 !important; }
  .my-md-0 { margin-top: 0 !important; margin-bottom: 0 !important; }
  .m-md-1 { margin: 10px 10px !important; }
  .mt-md-1 { margin-top: 10px !important; }
  .mr-md-1 { margin-right: 10px !important; }
  .mb-md-1 { margin-bottom: 10px !important; }
  .ml-md-1 { margin-left: 10px !important; }
  .mx-md-1 { margin-right: 10px !important; margin-left: 10px !important; }
  .my-md-1 { margin-top: 10px !important; margin-bottom: 10px !important; }
  .m-md-2 { margin: 20px 20px !important; }
  .mt-md-2 { margin-top: 20px !important; }
  .mr-md-2 { margin-right: 20px !important; }
  .mb-md-2 { margin-bottom: 20px !important; }
  .ml-md-2 { margin-left: 20px !important; }
  .mx-md-2 { margin-right: 20px !important; margin-left: 20px !important; }
  .my-md-2 { margin-top: 20px !important; margin-bottom: 20px !important; }
  .m-md-3 { margin: 30px 30px !important; }
  .mt-md-3 { margin-top: 30px !important; }
  .mr-md-3 { margin-right: 30px !important; }
  .mb-md-3 { margin-bottom: 30px !important; }
  .ml-md-3 { margin-left: 30px !important; }
  .mx-md-3 { margin-right: 30px !important; margin-left: 30px !important; }
  .my-md-3 { margin-top: 30px !important; margin-bottom: 30px !important; }
  .m-md-4 { margin: 40px 40px !important; }
  .mt-md-4 { margin-top: 40px !important; }
  .mr-md-4 { margin-right: 40px !important; }
  .mb-md-4 { margin-bottom: 40px !important; }
  .ml-md-4 { margin-left: 40px !important; }
  .mx-md-4 { margin-right: 40px !important; margin-left: 40px !important; }
  .my-md-4 { margin-top: 40px !important; margin-bottom: 40px !important; }
  .m-md-5 { margin: 50px 50px !important; }
  .mt-md-5 { margin-top: 50px !important; }
  .mr-md-5 { margin-right: 50px !important; }
  .mb-md-5 { margin-bottom: 50px !important; }
  .ml-md-5 { margin-left: 50px !important; }
  .mx-md-5 { margin-right: 50px !important; margin-left: 50px !important; }
  .my-md-5 { margin-top: 50px !important; margin-bottom: 50px !important; }
  .p-md-0 { padding: 0 0 !important; }
  .pt-md-0 { padding-top: 0 !important; }
  .pr-md-0 { padding-right: 0 !important; }
  .pb-md-0 { padding-bottom: 0 !important; }
  .pl-md-0 { padding-left: 0 !important; }
  .px-md-0 { padding-right: 0 !important; padding-left: 0 !important; }
  .py-md-0 { padding-top: 0 !important; padding-bottom: 0 !important; }
  .p-md-1 { padding: 10px 10px !important; }
  .pt-md-1 { padding-top: 10px !important; }
  .pr-md-1 { padding-right: 10px !important; }
  .pb-md-1 { padding-bottom: 10px !important; }
  .pl-md-1 { padding-left: 10px !important; }
  .px-md-1 { padding-right: 10px !important; padding-left: 10px !important; }
  .py-md-1 { padding-top: 10px !important; padding-bottom: 10px !important; }
  .p-md-2 { padding: 20px 20px !important; }
  .pt-md-2 { padding-top: 20px !important; }
  .pr-md-2 { padding-right: 20px !important; }
  .pb-md-2 { padding-bottom: 20px !important; }
  .pl-md-2 { padding-left: 20px !important; }
  .px-md-2 { padding-right: 20px !important; padding-left: 20px !important; }
  .py-md-2 { padding-top: 20px !important; padding-bottom: 20px !important; }
  .p-md-3 { padding: 30px 30px !important; }
  .pt-md-3 { padding-top: 30px !important; }
  .pr-md-3 { padding-right: 30px !important; }
  .pb-md-3 { padding-bottom: 30px !important; }
  .pl-md-3 { padding-left: 30px !important; }
  .px-md-3 { padding-right: 30px !important; padding-left: 30px !important; }
  .py-md-3 { padding-top: 30px !important; padding-bottom: 30px !important; }
  .p-md-4 { padding: 40px 40px !important; }
  .pt-md-4 { padding-top: 40px !important; }
  .pr-md-4 { padding-right: 40px !important; }
  .pb-md-4 { padding-bottom: 40px !important; }
  .pl-md-4 { padding-left: 40px !important; }
  .px-md-4 { padding-right: 40px !important; padding-left: 40px !important; }
  .py-md-4 { padding-top: 40px !important; padding-bottom: 40px !important; }
  .p-md-5 { padding: 50px 50px !important; }
  .pt-md-5 { padding-top: 50px !important; }
  .pr-md-5 { padding-right: 50px !important; }
  .pb-md-5 { padding-bottom: 50px !important; }
  .pl-md-5 { padding-left: 50px !important; }
  .px-md-5 { padding-right: 50px !important; padding-left: 50px !important; }
  .py-md-5 { padding-top: 50px !important; padding-bottom: 50px !important; }
  .m-md-auto { margin: auto !important; }
  .mt-md-auto { margin-top: auto !important; }
  .mr-md-auto { margin-right: auto !important; }
  .mb-md-auto { margin-bottom: auto !important; }
  .ml-md-auto { margin-left: auto !important; }
  .mx-md-auto { margin-right: auto !important; margin-left: auto !important; }
  .my-md-auto { margin-top: auto !important; margin-bottom: auto !important; } }
@media (min-width: 992px) { .m-lg-0 { margin: 0 0 !important; }
  .mt-lg-0 { margin-top: 0 !important; }
  .mr-lg-0 { margin-right: 0 !important; }
  .mb-lg-0 { margin-bottom: 0 !important; }
  .ml-lg-0 { margin-left: 0 !important; }
  .mx-lg-0 { margin-right: 0 !important; margin-left: 0 !important; }
  .my-lg-0 { margin-top: 0 !important; margin-bottom: 0 !important; }
  .m-lg-1 { margin: 10px 10px !important; }
  .mt-lg-1 { margin-top: 10px !important; }
  .mr-lg-1 { margin-right: 10px !important; }
  .mb-lg-1 { margin-bottom: 10px !important; }
  .ml-lg-1 { margin-left: 10px !important; }
  .mx-lg-1 { margin-right: 10px !important; margin-left: 10px !important; }
  .my-lg-1 { margin-top: 10px !important; margin-bottom: 10px !important; }
  .m-lg-2 { margin: 20px 20px !important; }
  .mt-lg-2 { margin-top: 20px !important; }
  .mr-lg-2 { margin-right: 20px !important; }
  .mb-lg-2 { margin-bottom: 20px !important; }
  .ml-lg-2 { margin-left: 20px !important; }
  .mx-lg-2 { margin-right: 20px !important; margin-left: 20px !important; }
  .my-lg-2 { margin-top: 20px !important; margin-bottom: 20px !important; }
  .m-lg-3 { margin: 30px 30px !important; }
  .mt-lg-3 { margin-top: 30px !important; }
  .mr-lg-3 { margin-right: 30px !important; }
  .mb-lg-3 { margin-bottom: 30px !important; }
  .ml-lg-3 { margin-left: 30px !important; }
  .mx-lg-3 { margin-right: 30px !important; margin-left: 30px !important; }
  .my-lg-3 { margin-top: 30px !important; margin-bottom: 30px !important; }
  .m-lg-4 { margin: 40px 40px !important; }
  .mt-lg-4 { margin-top: 40px !important; }
  .mr-lg-4 { margin-right: 40px !important; }
  .mb-lg-4 { margin-bottom: 40px !important; }
  .ml-lg-4 { margin-left: 40px !important; }
  .mx-lg-4 { margin-right: 40px !important; margin-left: 40px !important; }
  .my-lg-4 { margin-top: 40px !important; margin-bottom: 40px !important; }
  .m-lg-5 { margin: 50px 50px !important; }
  .mt-lg-5 { margin-top: 50px !important; }
  .mr-lg-5 { margin-right: 50px !important; }
  .mb-lg-5 { margin-bottom: 50px !important; }
  .ml-lg-5 { margin-left: 50px !important; }
  .mx-lg-5 { margin-right: 50px !important; margin-left: 50px !important; }
  .my-lg-5 { margin-top: 50px !important; margin-bottom: 50px !important; }
  .p-lg-0 { padding: 0 0 !important; }
  .pt-lg-0 { padding-top: 0 !important; }
  .pr-lg-0 { padding-right: 0 !important; }
  .pb-lg-0 { padding-bottom: 0 !important; }
  .pl-lg-0 { padding-left: 0 !important; }
  .px-lg-0 { padding-right: 0 !important; padding-left: 0 !important; }
  .py-lg-0 { padding-top: 0 !important; padding-bottom: 0 !important; }
  .p-lg-1 { padding: 10px 10px !important; }
  .pt-lg-1 { padding-top: 10px !important; }
  .pr-lg-1 { padding-right: 10px !important; }
  .pb-lg-1 { padding-bottom: 10px !important; }
  .pl-lg-1 { padding-left: 10px !important; }
  .px-lg-1 { padding-right: 10px !important; padding-left: 10px !important; }
  .py-lg-1 { padding-top: 10px !important; padding-bottom: 10px !important; }
  .p-lg-2 { padding: 20px 20px !important; }
  .pt-lg-2 { padding-top: 20px !important; }
  .pr-lg-2 { padding-right: 20px !important; }
  .pb-lg-2 { padding-bottom: 20px !important; }
  .pl-lg-2 { padding-left: 20px !important; }
  .px-lg-2 { padding-right: 20px !important; padding-left: 20px !important; }
  .py-lg-2 { padding-top: 20px !important; padding-bottom: 20px !important; }
  .p-lg-3 { padding: 30px 30px !important; }
  .pt-lg-3 { padding-top: 30px !important; }
  .pr-lg-3 { padding-right: 30px !important; }
  .pb-lg-3 { padding-bottom: 30px !important; }
  .pl-lg-3 { padding-left: 30px !important; }
  .px-lg-3 { padding-right: 30px !important; padding-left: 30px !important; }
  .py-lg-3 { padding-top: 30px !important; padding-bottom: 30px !important; }
  .p-lg-4 { padding: 40px 40px !important; }
  .pt-lg-4 { padding-top: 40px !important; }
  .pr-lg-4 { padding-right: 40px !important; }
  .pb-lg-4 { padding-bottom: 40px !important; }
  .pl-lg-4 { padding-left: 40px !important; }
  .px-lg-4 { padding-right: 40px !important; padding-left: 40px !important; }
  .py-lg-4 { padding-top: 40px !important; padding-bottom: 40px !important; }
  .p-lg-5 { padding: 50px 50px !important; }
  .pt-lg-5 { padding-top: 50px !important; }
  .pr-lg-5 { padding-right: 50px !important; }
  .pb-lg-5 { padding-bottom: 50px !important; }
  .pl-lg-5 { padding-left: 50px !important; }
  .px-lg-5 { padding-right: 50px !important; padding-left: 50px !important; }
  .py-lg-5 { padding-top: 50px !important; padding-bottom: 50px !important; }
  .m-lg-auto { margin: auto !important; }
  .mt-lg-auto { margin-top: auto !important; }
  .mr-lg-auto { margin-right: auto !important; }
  .mb-lg-auto { margin-bottom: auto !important; }
  .ml-lg-auto { margin-left: auto !important; }
  .mx-lg-auto { margin-right: auto !important; margin-left: auto !important; }
  .my-lg-auto { margin-top: auto !important; margin-bottom: auto !important; } }
@media (min-width: 1200px) { .m-xl-0 { margin: 0 0 !important; }
  .mt-xl-0 { margin-top: 0 !important; }
  .mr-xl-0 { margin-right: 0 !important; }
  .mb-xl-0 { margin-bottom: 0 !important; }
  .ml-xl-0 { margin-left: 0 !important; }
  .mx-xl-0 { margin-right: 0 !important; margin-left: 0 !important; }
  .my-xl-0 { margin-top: 0 !important; margin-bottom: 0 !important; }
  .m-xl-1 { margin: 10px 10px !important; }
  .mt-xl-1 { margin-top: 10px !important; }
  .mr-xl-1 { margin-right: 10px !important; }
  .mb-xl-1 { margin-bottom: 10px !important; }
  .ml-xl-1 { margin-left: 10px !important; }
  .mx-xl-1 { margin-right: 10px !important; margin-left: 10px !important; }
  .my-xl-1 { margin-top: 10px !important; margin-bottom: 10px !important; }
  .m-xl-2 { margin: 20px 20px !important; }
  .mt-xl-2 { margin-top: 20px !important; }
  .mr-xl-2 { margin-right: 20px !important; }
  .mb-xl-2 { margin-bottom: 20px !important; }
  .ml-xl-2 { margin-left: 20px !important; }
  .mx-xl-2 { margin-right: 20px !important; margin-left: 20px !important; }
  .my-xl-2 { margin-top: 20px !important; margin-bottom: 20px !important; }
  .m-xl-3 { margin: 30px 30px !important; }
  .mt-xl-3 { margin-top: 30px !important; }
  .mr-xl-3 { margin-right: 30px !important; }
  .mb-xl-3 { margin-bottom: 30px !important; }
  .ml-xl-3 { margin-left: 30px !important; }
  .mx-xl-3 { margin-right: 30px !important; margin-left: 30px !important; }
  .my-xl-3 { margin-top: 30px !important; margin-bottom: 30px !important; }
  .m-xl-4 { margin: 40px 40px !important; }
  .mt-xl-4 { margin-top: 40px !important; }
  .mr-xl-4 { margin-right: 40px !important; }
  .mb-xl-4 { margin-bottom: 40px !important; }
  .ml-xl-4 { margin-left: 40px !important; }
  .mx-xl-4 { margin-right: 40px !important; margin-left: 40px !important; }
  .my-xl-4 { margin-top: 40px !important; margin-bottom: 40px !important; }
  .m-xl-5 { margin: 50px 50px !important; }
  .mt-xl-5 { margin-top: 50px !important; }
  .mr-xl-5 { margin-right: 50px !important; }
  .mb-xl-5 { margin-bottom: 50px !important; }
  .ml-xl-5 { margin-left: 50px !important; }
  .mx-xl-5 { margin-right: 50px !important; margin-left: 50px !important; }
  .my-xl-5 { margin-top: 50px !important; margin-bottom: 50px !important; }
  .p-xl-0 { padding: 0 0 !important; }
  .pt-xl-0 { padding-top: 0 !important; }
  .pr-xl-0 { padding-right: 0 !important; }
  .pb-xl-0 { padding-bottom: 0 !important; }
  .pl-xl-0 { padding-left: 0 !important; }
  .px-xl-0 { padding-right: 0 !important; padding-left: 0 !important; }
  .py-xl-0 { padding-top: 0 !important; padding-bottom: 0 !important; }
  .p-xl-1 { padding: 10px 10px !important; }
  .pt-xl-1 { padding-top: 10px !important; }
  .pr-xl-1 { padding-right: 10px !important; }
  .pb-xl-1 { padding-bottom: 10px !important; }
  .pl-xl-1 { padding-left: 10px !important; }
  .px-xl-1 { padding-right: 10px !important; padding-left: 10px !important; }
  .py-xl-1 { padding-top: 10px !important; padding-bottom: 10px !important; }
  .p-xl-2 { padding: 20px 20px !important; }
  .pt-xl-2 { padding-top: 20px !important; }
  .pr-xl-2 { padding-right: 20px !important; }
  .pb-xl-2 { padding-bottom: 20px !important; }
  .pl-xl-2 { padding-left: 20px !important; }
  .px-xl-2 { padding-right: 20px !important; padding-left: 20px !important; }
  .py-xl-2 { padding-top: 20px !important; padding-bottom: 20px !important; }
  .p-xl-3 { padding: 30px 30px !important; }
  .pt-xl-3 { padding-top: 30px !important; }
  .pr-xl-3 { padding-right: 30px !important; }
  .pb-xl-3 { padding-bottom: 30px !important; }
  .pl-xl-3 { padding-left: 30px !important; }
  .px-xl-3 { padding-right: 30px !important; padding-left: 30px !important; }
  .py-xl-3 { padding-top: 30px !important; padding-bottom: 30px !important; }
  .p-xl-4 { padding: 40px 40px !important; }
  .pt-xl-4 { padding-top: 40px !important; }
  .pr-xl-4 { padding-right: 40px !important; }
  .pb-xl-4 { padding-bottom: 40px !important; }
  .pl-xl-4 { padding-left: 40px !important; }
  .px-xl-4 { padding-right: 40px !important; padding-left: 40px !important; }
  .py-xl-4 { padding-top: 40px !important; padding-bottom: 40px !important; }
  .p-xl-5 { padding: 50px 50px !important; }
  .pt-xl-5 { padding-top: 50px !important; }
  .pr-xl-5 { padding-right: 50px !important; }
  .pb-xl-5 { padding-bottom: 50px !important; }
  .pl-xl-5 { padding-left: 50px !important; }
  .px-xl-5 { padding-right: 50px !important; padding-left: 50px !important; }
  .py-xl-5 { padding-top: 50px !important; padding-bottom: 50px !important; }
  .m-xl-auto { margin: auto !important; }
  .mt-xl-auto { margin-top: auto !important; }
  .mr-xl-auto { margin-right: auto !important; }
  .mb-xl-auto { margin-bottom: auto !important; }
  .ml-xl-auto { margin-left: auto !important; }
  .mx-xl-auto { margin-right: auto !important; margin-left: auto !important; }
  .my-xl-auto { margin-top: auto !important; margin-bottom: auto !important; } }
.text-justify { text-align: justify !important; }
.text-nowrap { white-space: nowrap !important; }
.text-truncate { overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
.text-left { text-align: left !important; }
.text-right { text-align: right !important; }
.text-center { text-align: center !important; }
@media (min-width: 576px) { .text-sm-left { text-align: left !important; }
  .text-sm-right { text-align: right !important; }
  .text-sm-center { text-align: center !important; } }
@media (min-width: 768px) { .text-md-left { text-align: left !important; }
  .text-md-right { text-align: right !important; }
  .text-md-center { text-align: center !important; } }
@media (min-width: 992px) { .text-lg-left { text-align: left !important; }
  .text-lg-right { text-align: right !important; }
  .text-lg-center { text-align: center !important; } }
@media (min-width: 1200px) { .text-xl-left { text-align: left !important; }
  .text-xl-right { text-align: right !important; }
  .text-xl-center { text-align: center !important; } }
.text-lowercase { text-transform: lowercase !important; }
.text-uppercase { text-transform: uppercase !important; }
.font-weight-normal { font-weight: normal; }
.font-weight-bold { font-weight: bold; }
.font-italic { font-style: italic; }
.invisible { visibility: hidden !important; }
.hidden-xs-up { display: none !important; }
@media (max-width: 575px) { .hidden-xs-down { display: none !important; } }
@media (min-width: 576px) { .hidden-sm-up { display: none !important; } }
@media (max-width: 767px) { .hidden-sm-down { display: none !important; } }
@media (min-width: 768px) { .hidden-md-up { display: none !important; } }
@media (max-width: 991px) { .hidden-md-down { display: none !important; } }
@media (min-width: 992px) { .hidden-lg-up { display: none !important; } }
@media (max-width: 1199px) { .hidden-lg-down { display: none !important; } }
@media (min-width: 1200px) { .hidden-xl-up { display: none !important; } }
.hidden-xl-down { display: none !important; }
.visible-print-block { display: none !important; }
@media print { .visible-print-block { display: block !important; } }
.visible-print-inline { display: none !important; }
@media print { .visible-print-inline { display: inline !important; } }
.visible-print-inline-block { display: none !important; }
@media print { .visible-print-inline-block { display: inline-block !important; } }
@media print { .hidden-print { display: none !important; } }
/*! 
 * owlcarousel
!*/
/* Owl Carousel - Core */
.owl-carousel { display: none; width: 100%; -webkit-tap-highlight-color: transparent; /* position relative and z-index fix webkit rendering fonts issue */ position: relative; z-index: 1; }
.owl-carousel .owl-stage { position: relative; -ms-touch-action: pan-Y; -moz-backface-visibility: hidden; /* fix firefox animation glitch */ }
.owl-carousel .owl-stage:after { content: "."; display: block; clear: both; visibility: hidden; line-height: 0; height: 0; }
.owl-carousel .owl-stage-outer { position: relative; overflow: hidden; /* fix for flashing background */ -webkit-transform: translate3d(0px, 0px, 0px); }
.owl-carousel .owl-wrapper, .owl-carousel .owl-item { -webkit-backface-visibility: hidden; -moz-backface-visibility: hidden; -ms-backface-visibility: hidden; -webkit-transform: translate3d(0, 0, 0); -moz-transform: translate3d(0, 0, 0); -ms-transform: translate3d(0, 0, 0); }
.owl-carousel .owl-item { position: relative; min-height: 1px; float: left; -webkit-backface-visibility: hidden; -webkit-tap-highlight-color: transparent; -webkit-touch-callout: none; }
.owl-carousel .owl-item img { display: block; width: 100%; }
.owl-carousel .owl-nav.disabled, .owl-carousel .owl-dots.disabled { display: none; }
.owl-carousel .owl-nav .owl-prev, .owl-carousel .owl-nav .owl-next, .owl-carousel .owl-dot { cursor: pointer; cursor: hand; -webkit-user-select: none; -khtml-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none; }
.owl-carousel.owl-loaded { display: block; }
.owl-carousel.owl-loading { opacity: 0; display: block; }
.owl-carousel.owl-hidden { opacity: 0; }
.owl-carousel.owl-refresh .owl-item { visibility: hidden; }
.owl-carousel.owl-drag .owl-item { -webkit-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none; }
.owl-carousel.owl-grab { cursor: move; cursor: grab; }
.owl-carousel.owl-rtl { direction: rtl; }
.owl-carousel.owl-rtl .owl-item { float: right; }
/* No Js */
.no-js .owl-carousel { display: block; }
/* Owl Carousel - Animate Plugin */
.owl-carousel .animated { animation-duration: 1000ms; animation-fill-mode: both; }
.owl-carousel .owl-animated-in { z-index: 0; }
.owl-carousel .owl-animated-out { z-index: 1; }
.owl-carousel .fadeOut { animation-name: fadeOut; }
@keyframes fadeOut { 0% { opacity: 1; }
  100% { opacity: 0; } }
/*  Owl Carousel - Auto Height Plugin */
.owl-height { transition: height 500ms ease-in-out; }
/*  Owl Carousel - Lazy Load Plugin */
.owl-carousel .owl-item .owl-lazy { opacity: 0; transition: opacity 400ms ease; }
.owl-carousel .owl-item img.owl-lazy { transform-style: preserve-3d; }
/*  Owl Carousel - Video Plugin */
.owl-carousel .owl-video-wrapper { position: relative; height: 100%; background: #000; }
.owl-carousel .owl-video-play-icon { position: absolute; height: 80px; width: 80px; left: 50%; top: 50%; margin-left: -40px; margin-top: -40px; background: url("owl.video.play.png") no-repeat; cursor: pointer; z-index: 1; -webkit-backface-visibility: hidden; transition: transform 100ms ease; }
.owl-carousel .owl-video-play-icon:hover { transform: scale(1.3, 1.3); }
.owl-carousel .owl-video-playing .owl-video-tn, .owl-carousel .owl-video-playing .owl-video-play-icon { display: none; }
.owl-carousel .owl-video-tn { opacity: 0; height: 100%; background-position: center center; background-repeat: no-repeat; background-size: contain; transition: opacity 400ms ease; }
.owl-carousel .owl-video-frame { position: relative; z-index: 1; height: 100%; width: 100%; }
/*  Default theme - Owl Carousel CSS File */
.owl-theme .owl-nav { margin-top: 10px; text-align: center; -webkit-tap-highlight-color: transparent; }
.owl-theme .owl-nav [class*='owl-'] { color: #FFF; font-size: 14px; margin: 5px; padding: 4px 7px; background: #D6D6D6; display: inline-block; cursor: pointer; border-radius: 3px; }
.owl-theme .owl-nav [class*='owl-']:hover { background: #869791; color: #FFF; text-decoration: none; }
.owl-theme .owl-nav .disabled { opacity: 0.5; cursor: default; }
.owl-theme .owl-nav.disabled + .owl-dots { margin-top: 10px; }
.owl-theme .owl-dots { text-align: center; -webkit-tap-highlight-color: transparent; }
.owl-theme .owl-dots .owl-dot { display: inline-block; zoom: 1; *display: inline; }
.owl-theme .owl-dots .owl-dot span { width: 10px; height: 10px; margin: 5px 7px; background: #D6D6D6; display: block; -webkit-backface-visibility: visible; transition: opacity 200ms ease; border-radius: 30px; }
.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span { background: #869791; }
/*! 
 * atlantisrh
!*/
html { background: none; }
body { padding-top: 56px; position: relative; font-family: 'Montserrat', sans-serif; background: #fff; color: #333; font-size: 18px; }
.container-fluid { width: 100%; max-width: 1500px; margin-right: auto; margin-left: auto; padding-right: 10px; padding-left: 10px; }
.error-login { background: #ffcccc; color: #af0202; font-weight: bold; padding: 5px; font-size: 15px; }
a:hover, a:active, a:focus, a:visited { text-decoration: none; }
p img.alignleft { float: left; margin-right: 15px; }
p img.alignright { float: right; margin-left: 15px; }
.noselect { -webkit-touch-callout: none; /* iOS Safari */ -webkit-user-select: none; /* Safari */ -khtml-user-select: none; /* Konqueror HTML */ -moz-user-select: none; /* Firefox */ -ms-user-select: none; /* Internet Explorer/Edge */ user-select: none; /* Non-prefixed version, currently supported by Chrome and Opera */ }
.suggestion-link { background-color: #fff; color: #333; transition: .2s; }
.suggestion-link:hover { background-color: #333; color: #fff; }
.oneall_social_login_providers { min-height: auto !important; }
.oneall_social_login_providers iframe { height: 75px !important; width: 165px !important; min-height: auto !important; }
#extensions_message_10_10, #extensions_message_10_10 { display: none; }
/**********************************************************************************************************/
p { margin-bottom: 0.625rem; }
b { font-weight: 700; }
h1, .h1 { font-weight: 900; text-transform: uppercase; }
h2, .h2 { font-weight: 900; }
h3, .h3 { font-weight: 700; }
h4, .h4 { font-weight: 700; }
h5, .h5 { font-weight: 700; }
@media (max-width: 767px) { h1, .h1, .display-1 { font-size: 2rem; }
  h2, .h2, .display-2 { font-size: 1.875rem; }
  h3, .h3, .display-3 { font-size: 1.25rem; }
  h4, .h4, .display-4 { font-size: 1rem; }
  h5, .h5, .display-5 { font-size: 0.75rem; } }
.font-weight-normal { font-weight: 500; }
.font-weight-medium { font-weight: 600; }
.font-weight-bolder { font-weight: 900; }
.font-weight-lighter { font-weight: 300; }
.text-decoration-none:hover, a:hover .text-decoration-none { text-decoration: transparent; display: inline-block; width: 100%; }

/***********************************************************************************************************/
/*Boutons*/
.gray-btn-arrow, .green-btn-arrow, .white-btn-arrow, .facebook-btn-arrow, .twitter-btn-arrow, .google-btn-arrow, .linkedin-btn-arrow, .postulat-btn-arrow, .alert-btn-arrow, .btn-login-green, #disconnect, #cv-label, .save-profil-btn, #modal-candidature .gform_footer.top_label { display: inline-block; position: relative; }
/*************************************************************************************************************/
/*SINGLE OFFRE*/
.single.single-annonce .offre-update { font-size: 15px; }
.single.single-annonce .offre-card .offre-update { font-size: 12px; }
.single.single-annonce #map-localisation { width: 100%; height: 400px; }
.single.single-annonce .offre-title { position: relative; height: 150px; display: flex; flex-direction: column; position: relative; }
.single.single-annonce .offre-title .date-box { position: absolute; top: -12px; height: 37px; left: calc( ( 100% - 154px ) / 2 ); }
.single.single-annonce .offre-title .date-box.bg-red { border: solid 1px #d7373a; }
.single.single-annonce .offre-title .date-box.bg-black { border: solid 1px #333; }
.single.single-annonce .offre-title .date-box .clock { line-height: 35px; width: 35px; }
.single.single-annonce .offre-title .date-box .date { height: 100%; width: auto; line-height: 35px; font-size: 15px; }
.single.single-annonce .offre-title p.name-offre { margin-top: auto; }
.single.single-annonce .offre-title p.ref-offre { margin-bottom: auto; }
.single.single-annonce .offre-title.urgente:after { content: url("../img/red-bell-small.png"); }
.single.single-annonce .offre-title:not(.urgente):after { content: url("../img/btn-arrow-black-small-down.png"); }
.single.single-annonce .offre-title.urgente:after, .single.single-annonce .offre-title:not(.urgente):after { background: #fff; border: solid 4px #e7e7e7; position: absolute; bottom: -15px; border-radius: 50%; height: 30px; width: 30px; z-index: 2; text-align: center; left: calc((100% - 30px)/2); }
.single.single-annonce .single-offre-title { position: relative; }
.single.single-annonce .single-offre-title:after { content: url("../img/btn-arrow-black-small-down.png"); background: #fff; border: solid 4px #e7e7e7; position: absolute; bottom: -15px; border-radius: 50%; height: 30px; width: 30px; z-index: 2; text-align: center; left: calc((100% - 30px)/2); }
.single.single-annonce .offre-content { border: solid #333 20px; }
.single.single-annonce .offre-card { transition: .3s; filter: grayscale(0) contrast(1); min-height: 400px; }
.single.single-annonce .offre-card > a { height: 100%; }
.single.single-annonce .offre-card > a > .row { height: 100%; }
.single.single-annonce .offre-card > a > .row > .offre-infos { height: calc(100% - 150px); display: flex; flex-direction: column; }
.single.single-annonce .offre-card > a > .row p.time { margin-top: auto; font-size: 11px; font-weight: 700; letter-spacing: 1px; padding-left: 17px; position: relative; }
.single.single-annonce .offre-card > a > .row p.time:before { content: url("../img/time.png"); position: absolute; left: 0; }
.single.single-annonce .postulat-btn-arrow { font-size: 12px; margin-right: 40px; cursor: pointer; }
.single.single-annonce .offre-next-prev { background-image: url("../img/offre-back-bg.png"); background-position: center center; background-size: cover; background-repeat: no-repeat; }
.single.single-annonce .breadcrumb-offre { line-height: 55px; }
.single.single-annonce h1 { font-size: 35px; }
.single.single-annonce h2 { font-size: 15px; }
.single.single-annonce h2:before { content: ''; display: inline-block; height: 1px; width: 50px; background: #333; margin-bottom: 5px; margin-right: 10px; }
.single.single-annonce .profil-offre { font-size: 15px; }
.single.single-annonce .offre-share img { margin-right: 3px; margin-left: 3px; filter: brightness(0); }
.single.single-annonce .prev-offre-btn { position: relative; font-size: 15px; margin-left: 40px; font-weight: 700; }
.single.single-annonce .next-offre-btn { position: relative; font-size: 15px; margin-right: 40px; font-weight: 700; }
.single.single-annonce .offre-back-btn { position: relative; font-size: 15px; margin-left: 40px; font-weight: 700; }
.single.single-annonce .offre-back-btn:before { content: url("../img/back-arrow-black.png"); background-color: #eff1f3; position: absolute; left: -40px; top: 0; height: 100%; width: 40px; text-align: center; vertical-align: middle; line-height: 37px; }
.single.single-annonce .prev-offre-btn:before { content: url("../img/btn-arrow-black-small-invert.png"); background-color: #fff; position: absolute; left: -40px; top: 0; height: 100%; width: 40px; text-align: center; vertical-align: middle; line-height: 37px; }
.single.single-annonce .next-offre-btn:after { content: url("../img/btn-arrow-black-small.png"); background-color: #fff; position: absolute; right: -40px; top: 0; height: 100%; width: 40px; text-align: center; vertical-align: middle; line-height: 37px; }

/***************************************************************************************************************/
/*ARTICLE*/
.single-article h1 { font-size: 30px; }
.single-article .page-thumbnail { height: 320px; background-position: center center; background-repeat: no-repeat; background-size: cover; }
.single-article .article-content-txt h2, .single-article .article-content-txt h3, .single-article .article-content-txt h4 { margin-top: 15px; margin-bottom: 5px; }
.single-article .article-content { border: solid 15px #e7e7e7; }
.single-article .offre-card { transition: .3s; filter: grayscale(0) contrast(1); min-height: 350px; }
.single-article .offre-card > a { height: 100%; }
.single-article .offre-card > a > .row { height: 100%; }
.single-article .offre-card > a > .row > .offre-infos { height: calc(100% - 150px); display: flex; flex-direction: column; }
.single-article .offre-card > a > .row p.time { margin-top: auto; font-size: 11px; font-weight: 700; letter-spacing: 1px; padding-left: 17px; position: relative; }
.single-article .offre-card > a > .row p.time:before { content: url("../img/time.png"); position: absolute; left: 0; }
.single-article .offre-card .offre-update { font-size: 12px; }
.single-article .article-next-prev { background-image: url("../img/offre-back-bg.png"); background-position: center center; background-size: cover; background-repeat: no-repeat; }
.single-article .prev-article-btn { position: relative; font-size: 15px; margin-left: 40px; font-weight: 700; }
.single-article .next-article-btn { position: relative; font-size: 15px; margin-right: 40px; font-weight: 700; }
.single-article .article-back-btn { position: relative; font-size: 15px; margin-left: 40px; font-weight: 700; }
.single-article .article-back-btn:before { content: url("../img/back-arrow-black.png"); background-color: #eff1f3; position: absolute; left: -40px; top: 0; height: 100%; width: 40px; text-align: center; vertical-align: middle; line-height: 37px; }
.single-article .prev-article-btn:before { content: url("../img/btn-arrow-black-small-invert.png"); background-color: #fff; position: absolute; left: -40px; top: 0; height: 100%; width: 40px; text-align: center; vertical-align: middle; line-height: 37px; }
.single-article .next-article-btn:after { content: url("../img/btn-arrow-black-small.png"); background-color: #fff; position: absolute; right: -40px; top: 0; height: 100%; width: 40px; text-align: center; vertical-align: middle; line-height: 37px; }
.single-article .page-title { position: relative; }
.single-article .page-title:after { content: url(../img/btn-arrow-black-small-down.png); background: #fff; border: solid 4px #e7e7e7; position: absolute; bottom: -350px; border-radius: 50%; height: 30px; width: 30px; z-index: 2; text-align: center; left: calc((100% - 30px)/2); }
.single-article .offre-title { position: relative; height: 150px; display: flex; flex-direction: column; position: relative; }
.single-article .offre-title .date-box { position: absolute; top: -12px; height: 37px; left: calc( ( 100% - 154px ) / 2 ); }
.single-article .offre-title .date-box.bg-red { border: solid 1px #d7373a; }
.single-article .offre-title .date-box.bg-black { border: solid 1px #333; }
.single-article .offre-title .date-box .clock { line-height: 35px; width: 35px; }
.single-article .offre-title .date-box .date { height: 100%; width: auto; line-height: 35px; font-size: 15px; }
.single-article .offre-title p.name-offre { margin-top: auto; }
.single-article .offre-title p.ref-offre { margin-bottom: auto; }
.single-article .offre-title.urgente:after { content: url("../img/red-bell-small.png"); }
.single-article .offre-title.urgente:after { background: #fff; border: solid 4px #e7e7e7; position: absolute; bottom: -15px; border-radius: 50%; height: 30px; width: 30px; z-index: 2; left: calc((100% - 30px)/2); }
.single-article .col2-bg-black-white { background: linear-gradient(to right, #FFF 50%, #333 50%); letter-spacing: 1px; }
.single-article .col2-bg-black-white .white-btn-arrow:after { background: #454545; }
@media (max-width: 992px) { .single-article div.col2-bg-black-white { background: none; }
  .single-article div.col2-bg-black-white .container-fluid { padding-left: 0; padding-right: 0; }
  .single-article div.col2-bg-black-white .savoir-plus { padding-right: 10px; padding-left: 10px; background: #fff; }
  .single-article div.col2-bg-black-white .candidature-spont { padding-right: 10px; padding-left: 10px; background: #333; } }
.single-article .article-card a { height: 100%; }
.single-article .article-card a > .row { height: 100%; }
.single-article .article-card .article-cat { font-size: 10px; }
.single-article .article-card .article-excerpt { font-size: 12px; font-style: italic; }
.single-article .article-card .time { margin-top: auto; font-size: 11px; font-weight: 700; letter-spacing: 1px; padding-left: 17px; position: relative; padding-top: 20px; margin-bottom: 0; }
.single-article .article-card p.time:before { content: url("../img/time.png"); position: absolute; left: 0; }
.single-article .article-card .post-thumbnail-container { height: 150px; }
.single-article .article-card .post-info-container { height: calc(100% - 150px); }
.single-article .article-card .post-infos { flex-direction: column; height: 100%; }
.single-article .article-card .post-thumbnail { height: 150px; background-position: center; background-size: cover; background-repeat: no-repeat; }

/*QUERIES*/
@media (max-width: 1730px) { .hp-twitter-list li { width: 48%; } }
@media (max-width: 1600px) { .hp-twitter-list li a:after { display: none; } }
@media (max-width: 1300px) { .hp-twitter-title { font-size: 20px; }
  .hp-twitter-text { font-size: 12px; }
  .hp-twitter-list li a { font-size: 10px; }
  .bg-linkedin-picto .hp-linkedin-title { font-size: 20px; }
  .bg-linkedin-picto .white-btn-arrow { font-size: 10px; } }
@media (max-width: 1070px) { .hp-offers-number-title { font-size: 20px; }
  .hp-odometer { font-size: 150px; }
  .hp-offers-number-txt { font-size: 10px; }
  .hp-who .hp-who-title { font-size: 20px; }
  .hp-who .hp-who-txt { font-size: 12px; } }
@media (max-width: 1040px) { .hp-twitter-title { font-size: 14px; }
  .hp-twitter-text { font-size: 10px; }
  .hp-twitter-list li a { font-size: 8px; }
  .bg-linkedin-picto .hp-linkedin-title { font-size: 14px; } }
@media (max-width: 992px) { .offre-right:after, .offre-left:after { display: none; }
  .hp-3bloc-align { width: 100%; }
  .hp-3bloc-container img { width: 100%; } }
/**********************************************************************************************************/
.account span, .account .account-img { cursor: pointer; }
header { transition: .3s; position: relative; height: 56px; color: #fff; background-color: #3665a4; }
@media (max-width: 1365px) { header .desktop-header .header-social { display: none !important; } }
header.sticky { color: #333; background-color: #fff; z-index: 1000000; }
header.sticky .header-title a .h1 { color: #333; }
header.sticky .header-nav ul#menu-menu-header li a { color: #333; }
header.sticky #header-logo { display: flex; }
header.sticky .header-social { margin-right: 0; }
header.sticky .account { color: #333; }
header.sticky .account .account-img { background-color: #fff; }
header.sticky img { filter: brightness(0%); }
header nav.navbar { transition: .3s; }
header nav.navbar h1, header nav.navbar .h1 { font-size: 10px; padding-left: 5px; letter-spacing: 1px; }
header nav.navbar .burger-icon { height: 3px; margin-top: 5px; width: 30px; margin-bottom: 5px; border-radius: 5px; background-color: #fff; transition: .3s; }
header nav.navbar button.navbar-toggler { border: solid 1px #fff; border-radius: 3px; margin-right: 10px; transition: .3s; }
header nav.navbar .account-link { transition: .3s; color: #fff; font-size: 12px; font-weight: 700; text-transform: uppercase; padding: 0 7px; letter-spacing: 1px; }
header nav.navbar ul { padding: 0; margin: 0; }
header nav.navbar ul li { display: block; }
header nav.navbar ul li a { transition: .3s; color: #fff; font-size: 12px; font-weight: 700; text-transform: uppercase; padding: 0 7px; letter-spacing: 1px; }
header nav.navbar.sticky { color: #333; background-color: #fff; }
header nav.navbar.sticky .burger-icon { background-color: #333; }
header nav.navbar.sticky button.navbar-toggler { border: solid 1px #333; }
header nav.navbar.sticky .account-link { color: #333; }
header nav.navbar.sticky .header-title a .h1 { color: #333; }
header nav.navbar.sticky ul li a { color: #333; }
header nav.navbar.sticky .account-link { color: #333; }
header nav.navbar.sticky .account-link .account-img { background-color: #fff; }
header nav.navbar.sticky img { filter: brightness(0%); }
header .header-title a .h1 { color: #fff; }
header img { transition: .3s; filter: brightness(100%); }
header .header-nav { color: #fff; height: 56px; }
header .header-nav h1, header .header-nav .h1 { font-size: 10px; padding-left: 5px; letter-spacing: 1px; }
header .header-nav ul#menu-menu-header { padding: 0; margin: 0; }
header .header-nav ul#menu-menu-header li { display: inline-block; }
header .header-nav ul#menu-menu-header li a { transition: .3s; color: #fff; font-size: 12px; font-weight: 700; text-transform: uppercase; padding: 0 7px; letter-spacing: 1px; }
header .header-social { margin-right: auto; }
header .account { color: #fff; transition: .3s; position: absolute; right: 0; top: 0; }
header .account span { width: 100%; font-size: 10px; font-weight: 700; letter-spacing: 1px; }
header .account .account-img { background-color: #3665a4; transition: .3s; padding: 0 15px 15px; border-bottom-left-radius: 50%; border-bottom-right-radius: 50%; }
header .account .account-img img { max-width: 31px; max-width: 31px; }
header #header-logo { display: none; }
header #header-logo img { filter: brightness(100%); margin-top: 3px; margin-bottom: 3px; }
@media (max-width: 1780px) and (min-width: 1450px) { header.sticky { padding-right: 140px; } }
.footer-cta-thumb { background-repeat: no-repeat; background-position: center; background-size: cover; }
#cta-footer { font-weight: 700; }
#cta-footer .cta-footer-subtitle { font-size: 12px; letter-spacing: 1px; }
#cta-footer .cta-footer-title { font-size: 40px; letter-spacing: 5px; }
#cta-footer .cta-footer-btn { font-size: 10px; letter-spacing: 1px; }
@media (max-width: 768px) { #cta-footer .cta-footer-title { font-size: 30px; } }
#back-to-top { height: 60px; cursor: pointer; }
footer { width: 100%; }
footer .copyright, footer #menu-menu-footer-2, footer #menu-menu-footer-1 { font-size: 12px; font-weight: 700; }
footer ul.menu { margin-bottom: 0; padding-left: 0; list-style: none; }
footer ul.menu li { display: inline-block; }
footer ul.menu li a { color: #fff; }
.text-white, .text-white:hover, .text-white:focus, .text-white:active { color: #fff; }
.text-black, .text-black:hover, .text-black:focus, .text-black:active { color: #333; }
.text-light-gray, .text-light-gray:hover, .text-light-gray:focus, .text-light-gray:active { color: #bdc1c0; }
.text-blue, .text-blue:hover, .text-blue:focus, .text-blue:active { color: #3665a4; }
.text-yellow, .text-yellow:hover, .text-yellow:focus, .text-yellow:active { color: #f1a015; }
.text-red, .text-red:hover, .text-red:focus, .text-red:active { color: #d7373a; }
.text-green, .text-green:hover, .text-green:focus, .text-green:active { color: #3FBF74; }
.text-light-blue, .text-light-blue:hover, .text-light-blue:focus, .text-light-blue:active { color: #4B8EC2; }
.text-linkedin, .text-linkedin:hover, .text-linkedin:focus, .text-linkedin:active { color: #0077B5; }
.bg-white { background-color: #fff; }
.bg-black { background-color: #333; }
.bg-light-gray { background-color: #e7e7e7; }
.bg-blue { background-color: #3665a4; }
.bg-yellow { background-color: #f1a015; }
.bg-red { background-color: #d7373a; }
.bg-green { background-color: #3FBF74; }
.bg-light-blue { background-color: #4B8EC2; }
.bg-blue-transparent { background-color: rgba(54, 104, 164, 0.75); }
.bg-facebook { background-color: #3b5999; }
.bg-twitter { background-color: #55acee; }
.bg-google { background-color: #dd4b39; }
.bg-linkedin { background-color: #0077B5; }
.btn-menu {
    float: right;
    width: 27.5px;
    height: 35px;
    background: transparent;
    border: solid 1px #fff;
    border-radius: 3px;
}
.btn-bar {
    display: block;
    height: 3px;
    margin-top: 5px;
    width: 30px;
    margin-bottom: 5px;
    border-radius: 5px;
    background-color: #fff;
    transition: .3s;
}
	</style>
	<script async src="https://cdn.ampproject.org/v0.js"></script>
	<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
	<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
</head>

<body <?php body_class(); ?>>
	<?php
	global $loginRes;
	if($loginRes != NULL && ( is_wp_error($loginRes) || !is_a($loginRes, 'WP_User') ) ){
		if(is_wp_error($loginRes)){
			if(array_shift($loginRes->errors)[0]){
				echo'<div class="error-login">';
				echo(array_shift($loginRes->errors)[0]);
				echo'</div>';
			}
		}elseif($loginRes != ""){
			echo'<div class="error-login">';
			echo($loginRes);
			echo'</div>';
		}
	}
	?>
	<header class="fixed-top">
		<nav class="navbar navbar-toggleable-lg bg-blue text-white hidden-xl-up py-1">
			<div class="row">
			  	<div class="header-title d-flex my-auto mr-auto">
					<a href="<?php echo get_home_url(); ?>" class="d-block">
						<?php if(is_front_page()){
							echo '<h1 class="text-uppercase h1">'.get_field('titre', 'option').'</h1>';
						}
						else{
							echo '<div class="text-uppercase h1">'.get_field('titre', 'option').'</div>';
						}?>
					</a>
				</div>
			  	<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			    	<div class="burger-icon"></div>
			    	<div class="burger-icon"></div>
			    	<div class="burger-icon"></div>
			  	</button>
			</div>
		    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<div class="header-menu d-flex my-auto text-right py-1">
					<div class="ml-auto">
						<?php wp_nav_menu(array('menu' => 'Menu header')); ?>
					</div>
				</div>
				<div class="header-social d-flex my-auto text-right">
					<div class="ml-auto px-1">
						<?php
						$twitter_url = get_field('lien_twitter', 'option');
						$linkedin_url = get_field('lien_linkedin', 'option');
						$rss_url = get_field('lien_rss', 'option');
						$scoopit_url = get_field('lien_scoopit', 'option');
						$twitter_picto = get_field('picto_twitter', 'option');
						$linkedin_picto = get_field('picto_linkedin', 'option');
						$rss_picto = get_field('picto_rss', 'option');
						$scoopit_picto = get_field('picto_scoopit', 'option');
						if($twitter_url){ ?>
							<a class="pl-1" href="<?php echo $twitter_url; ?>" target="_blank">
								<amp-img layout="fixed" height="15" width="13" src="<?php echo $twitter_picto; ?>" class="img-fluid"></amp-img>
							</a>
						<?php }
						if($linkedin_url){ ?>
							<a class="pl-1" href="<?php echo $linkedin_url; ?>" target="_blank">
								<amp-img layout="fixed" height="15" width="13" src="<?php echo $linkedin_picto; ?>" class="img-fluid"></amp-img>
							</a>
						<?php }
						if($rss_url){ ?>
							<a class="pl-1" href="<?php echo $rss_url; ?>" target="_blank">
								<amp-img layout="fixed" height="15" width="15" src="<?php echo $rss_picto; ?>" class="img-fluid"></amp-img>
							</a>
						<?php }
						if($scoopit_url){ ?>
							<a class="pl-1" href="<?php echo $scoopit_url; ?>" target="_blank">
								<amp-img layout="fixed" width="66" height="19"  src="<?php echo $scoopit_picto; ?>" class="img-fluid"></amp-img>
							</a>
						<?php } ?>
					</div>
				</div>
				<?php if(is_user_logged_in()){ ?>
					<a href="<?php echo get_permalink(5335); ?>">
						<div class="text-right account-link text-uppercase py-1">
							votre profil
						</div>
					</a>
				<?php }?>
		  	</div>
		</nav>
	</header>
<?php if(have_posts()){
	while(have_posts()){
		the_post(); ?>
			<div class="main single-article">
				<div>
					<div class="container-fluid">
						<div class="row">
							<div class="col-12 py-3">
								<a href="<?php echo get_home_url(); ?>" class="d-block">
									<amp-img layout="fixed" height="50" width="250" class="logo-atlantis-rh img-fluid" src="<?php echo get_field('logo-header', 'option')['url']; ?>"></amp-img>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="bg-white">
					<div class="container-fluid">
						<div class="row bc-offre">
							<div class="col-12 col-md-9 breadcrumb-offre text-left py-2">
								<div class="d-inline text-black"><a href="<?php echo '#'; ?>">Notre actualité</a> / </div>
								<?php if(has_category()){ ?>
									<div class="d-inline text-black font-weight-bold"><a href="#"><?php echo get_the_category()[0]->name; ?></a></div>
									<div class="d-inline"> / </div>
								<?php } ?>
								<div class="d-inline text-green font-weight-bold"><?php the_title(); ?></div>
							</div>
						</div>
					</div>
				</div>
				<div class="bg-light-gray page-title">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center">
								<h1 class="mt-3 mb-1 text-uppercase"><?php the_title(); ?></h1>
							</div>
						</div>
						<div class="row">
							<div class="col-12 text-center">
								<?php $daysago = round((date('U') - get_the_time('U')) / (60*60*24));
								if($daysago == 0){?>
									<amp-img layout="fixed" width="13" height="13" src="<?php echo get_template_directory_uri().'/img/time.png'; ?>" class="d-inline"></amp-img><p class="d-inline pl-1 time text-uppercase text-light-gray">Aujoud'hui</p>
								<?php } else{ ?>
									<amp-img layout="fixed" width="13" height="13" src="<?php echo get_template_directory_uri().'/img/time.png'; ?>" class="d-inline"></amp-img><p class="d-inline pl-1 time text-uppercase text-light-gray">Il y a <?php echo $daysago; ?> jour<?php if($daysago>1) echo's'; ?></p>
								<?php }?>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center page-share mt-1 mb-2">
								<a href="https://plus.google.com/share?url=<?php echo get_permalink();?>" target="_blank" class="d-inline-block"><amp-img layout="fixed" width="20" height="20" src="<?php echo get_template_directory_uri(); ?>/img/share-google.png"></amp-img></a>
								<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_template_directory_uri(); ?>" target="_blank" class="d-inline-block"><amp-img layout="fixed" width="20" height="20" src="<?php echo get_template_directory_uri(); ?>/img/share-facebook.png"></amp-img></a>
								<a href="https://twitter.com/intent/tweet?text=%20&url=<?php echo get_permalink();?>" target="_blank" class="d-inline-block"><amp-img layout="fixed" width="20" height="20" src="<?php echo get_template_directory_uri(); ?>/img/share-twitter.png"></amp-img></a>
								<a href="https://www.linkedin.com/shareArticle?url=<?php echo get_template_directory_uri(); ?>" target="_blank" class="d-inline-block"><amp-img layout="fixed" width="20" height="20" src="<?php echo get_template_directory_uri(); ?>/img/share-linkedin.png"></amp-img></a>
							</div>
						</div>
					</div>
				</div>
				<?php if(has_post_thumbnail( )) {?>
					<amp-img layout="fixed-height" height="320" src="<?php echo get_the_post_thumbnail_url(); ?>"></amp-img>	
				<?php }else{?>
					<amp-img layout="fixed-height" height="320" src="<?php echo get_template_directory_uri(); ?>/img/actu-thumb.png"></amp-img>
				<?php } ?>
				<div class="bg-white article-content">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 article-content-txt py-4">
								<?php echo the_content(); ?>
							</div>
							<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center article-share mb-2">
								<a href="https://plus.google.com/share?url=<?php echo get_permalink();?>" target="_blank" class="d-inline-block"><amp-img layout="fixed" width="20" height="20" src="<?php echo get_template_directory_uri(); ?>/img/share-google.png"></amp-img></a>
								<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_template_directory_uri(); ?>" target="_blank" class="d-inline-block"><amp-img layout="fixed" width="20" height="20" src="<?php echo get_template_directory_uri(); ?>/img/share-facebook.png"></amp-img></a>
								<a href="https://twitter.com/intent/tweet?text=%20&url=<?php echo get_permalink();?>" target="_blank" class="d-inline-block"><amp-img layout="fixed" width="20" height="20" src="<?php echo get_template_directory_uri(); ?>/img/share-twitter.png"></amp-img></a>
								<a href="https://www.linkedin.com/shareArticle?url=<?php echo get_template_directory_uri(); ?>" target="_blank" class="d-inline-block"><amp-img layout="fixed" width="20" height="20" src="<?php echo get_template_directory_uri(); ?>/img/share-linkedin.png"></amp-img></a>
							</div>
						</div>
					</div>
				</div>
				<div class="article-next-prev py-4">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12">
								<div class="row">
									<div class="col-12 col-lg-4 text-center text-lg-left">
										<a href="<?php echo get_permalink(get_previous_post()); ?>" class="my-1 d-inline-block mr-auto py-1 px-3 bg-black text-uppercase text-white prev-article-btn">
											Lire l'article précédent
										</a>
									</div>
									<div class="col-12 col-lg-4 text-center">
										<a href="<?php echo get_permalink('5101'); ?>" class="d-inline-block my-1 py-1 px-3 bg-white text-uppercase text-black article-back-btn">
											Retour au blog
										</a>
									</div>
									<div class="col-12 col-lg-4 text-center text-lg-right">
										<a href="<?php echo get_permalink(get_next_post()); ?>" class="my-1 d-inline-block ml-auto py-1 px-3 bg-black text-uppercase text-white next-article-btn">
											Lire l'article suivant
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="offre-similar bg-light-gray">
					<div class="container-fluid">
						<?php
						$args = array(
							'numberposts' => 6,
							'orderby' => 'post_date',
							'exclude' => [get_the_ID()],
							'post_type' => 'post',
							'post_status' => 'publish',
						);

						$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
						if($recent_posts){?>
						<div class="row">
							<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 py-2">
								Nos <b><?php echo count($recent_posts); ?> dernières actualités</b> publiées
							</div>
						</div>
						<div class=row>
							<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
								<div class="row">
								<?php foreach ($recent_posts as $article) { ?>
									<div class="article-card col-12 col-md-6 col-lg-4 p-1">
										<a href="<?php echo get_permalink($article['ID']); ?>">
											<div class="row bg-white">
												<?php if(has_post_thumbnail($article['ID'])) {?>
													<div class="col-12 post-thumbnail-container">
														<amp-img layout="fixed-height" height="150" src="<?php echo get_the_post_thumbnail_url($article['ID']); ?>"></amp-img>
														</div>
													</div>
												<?php } else{ ?>
													<div class="col-12 post-thumbnail-container">
														<amp-img layout="fixed-height" height="150" src="<?php echo get_template_directory_uri(); ?>/img/actu-thumb.png"></amp-img>
													</div>
												<?php } ?>
												<div class="col-12 post-info-container">
													<div class="p-1 p-lg-2 d-flex post-infos">
														<?php if(has_category('', $article['ID'])){ ?>
														<p class="text-blue article-cat text-uppercase color-blue font-weight-bold"><?php echo get_the_category($article['ID'])[0]->name; ?></p>
														<?php } ?>
														<p class="article-title text-uppercase color-black font-weight-bold"><?php echo get_the_title($article['ID']); ?></p>
														<div class="article-excerpt color-black"><?php echo substr(strip_tags(get_the_content($article['ID'])), 0, 140); ?> [...]</div>
														<?php $daysago = round((date('U') - get_the_time('U', $article['ID'])) / (60*60*24));
														if($daysago == 0){?>
														<p class="time text-uppercase text-light-gray">Aujoud'hui</p>
														<?php } else{ ?>
														<p class="time text-uppercase text-light-gray">Il y a <?php echo $daysago; ?> jour<?php if($daysago>1) echo's'; ?></p>
														<?php } ?>
													</div>
												</div>
											</div>
										</a>
									</div>
								<?php } ?>
								</div>
							</div>
						</div>
						<?php } ?>
						<div class="row">
							<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 py-2">
								Nos 3 dernières <b>offres d'emploi urgentes</b> disponible
							</div>
						</div>
						<div class=row>
							<?php
								$urgent_post = get_field('offres_urgentes', 'option');
								$last_urgent = array();
								if(count($urgent_post) > 3){
									array_push($last_urgent, $urgent_post[0], $urgent_post[1], $urgent_post[2]);
								}
								else{
									$last_urgent = $urgent_post;
								}
							?>
							<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
								<div class="row">
									<?php foreach($last_urgent as $offer){ ?>
									<div class="offre-card col-12 col-md-6 col-lg-4">
										<a href="<?php echo get_permalink($offer); ?>">
											<div class="row p-1">
												<div class="col-12 offre-title urgente text-white px-1 px-lg-2 py-auto text-center bg-red">
													<p class="name-offre text-uppercase"><?php echo get_the_title($offer); ?></p>
													<?php if(get_field('ref', $offer)){?>
														<p class="ref-offre">Référence : <em><?php echo get_field('ref', $offer); ?></em></p>
													<?php } ?>
													<div class="date-box bg-red">
														<div class="d-inline-block clock bg-white">
															<amp-img layout="fixed" width="13" height="13" src="<?php echo get_template_directory_uri(); ?>/img/clock-red.png"></amp-img>
														</div>
														<div class="d-inline-block date px-1 text-white bg-red text-uppercase font-weight-bold">
															<?php echo get_the_date('d M Y', $offer); ?>
														</div>
													</div>
												</div>
												<div class="col-12 bg-white text-black px-1 px-lg-2 py-2 offre-infos">
													<?php if(get_field('contrat', $offer)){ ?>
														<p class="info-offre">Contrat : <em><?php echo get_field('contrat', $offer); ?></em></p>
													<?php }
													if(get_field('fonction', $offer)){ ?>
														<p class="info-offre">Fonction : <em><?php echo get_field('fonction', $offer); ?></em></p>
													<?php }
													if(get_field('secteur', $offer)){ ?>
														<p class="info-offre">Secteur : <em><?php echo get_field('secteur', $offer); ?></em></p>
													<?php }
													if(get_field('salary-min', $offer) && get_field('salary-max', $offer)){ ?>
														<p class="info-offre">Salaire (€/an) : <em><?php echo get_field('salary-min', $offer); ?> à <?php echo get_field('salary-max', $offer); ?></em></p>
													<?php }
													if(get_field('city', $offer) && get_field('pays', $offer)){ ?>
														<p class="info-offre">Localisation : <em><?php echo get_field('city', $offer); ?> (<?php echo get_field('pays', $offer); ?>)</em></p>
													<?php }
													if(get_field('descrassignement', $offer)){
														$descrSplit = preg_split("/[M, m]ission[s]?[ ]?:[ ]?/", get_field('descrassignement', $offer));
														if(count($descrSplit)==2){ ?>
															<div class="offre-update my-1"><?php echo $descrSplit[0]; ?></div>
														<?php }
														else{ ?>
															<div class="offre-update my-1"><?php echo substr(get_field('descrassignement', $offer), 0, 140)."[...]"; ?></div>
														<?php }
													}?>
												</div>
											</div>
										</a>
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col2-bg-black-white font-weight-bold">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12 col-lg-6 savoir-plus text-black text-uppercase">
								<div class="row py-5 px-5 px-lg-0">
									<div class="col-12 know-more-title mb-2">
										<?php echo get_field('post-sous-titre-know-more', 'option'); ?>
									</div>
									<div class="col-12 know-more-subtitle">
										<?php echo get_field('post-sous-titre-entreprise', 'option'); ?>
									</div>
									<div class="col-12 know-more-txt">
										<?php echo get_field('pst-txt-entreprise', 'option'); ?>
									</div>
									<div class="col-12 know-more-btn py-1">
										<a href="<?php echo get_field('post-url-btn-entreprise', 'option'); ?>" class="my-1 py-1 px-5 bg-black text-uppercase text-white gray-btn-arrow">
											<?php echo get_field('post-txt-btn-entreprise', 'option'); ?>
										</a>
									</div>
									<div class="col-12 know-more-subtitle mt-3">
										<?php echo get_field('post-sous-titre-candidat','option'); ?>
									</div>
									<div class="col-12 know-more-txt">
										<?php echo get_field('post-txt-candidat','option'); ?>
									</div>
									<div class="col-12 know-more-btn py-1">
										<a href="<?php echo get_field('post-url-btn-candidat', 'option'); ?>" class="my-1 py-1 px-5 bg-black text-uppercase text-white gray-btn-arrow">
											<?php echo get_field('post-txt-btn-candidat', 'option'); ?>
										</a>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-6 candidature-spont text-white">
								<div class="row py-5 pl-5 pr-5 pr-lg-0">
									<div class="col-12 cand-spont-title text-uppercase">
										<?php echo get_field('post-contact-titre','option'); ?>
									</div>
									<div class="col-12 cand-spont-txt my-1">
										<?php echo get_field('post-contact-txt','option'); ?>
									</div>
										<? if(get_field('post-url-btn','option') && get_field('post-txt-btn','option')){ ?>
											<div class="col-12 cand-spont-btn btn-1 my-1 text-uppercase">
												<a href="<?php echo get_field('post-url-btn','option'); ?>" class="d-inline-block my-1 py-1 px-5 bg-white text-uppercase text-black white-btn-arrow">
													<?php echo get_field('post-txt-btn','option'); ?>
												</a>
											</div>
										<?php }
										if(get_field('post-url-btn-2','option') && get_field('post-txt-btn-2','option')){ ?>
											<div class="col-12 cand-spont-btn btn-2 my-1 text-uppercase">
												<a href="<?php echo get_field('post-url-btn-2','option'); ?>" class="d-inline-block my-1 py-1 px-5 bg-white text-uppercase text-black white-btn-arrow">
													<?php echo get_field('post-txt-btn-2','option'); ?>
												</a>
											</div>
										<?php } ?>
									<hr class="cand-spont-separator my-2">
									<div class="col-12 cand-spont-contact text-light-gray my-1">
										<?php echo get_field('post-contact-bottom-txt','option'); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	<?php }
} ?>
	<div class="py-5 footer-cta-thumb">	
		<div class="container-fluid py-5">
			<div id="cta-footer" class="px-1 py-5 my-5">
				<div class="row">
					<div class="col-12">
						<div class="cta-footer-subtitle text-white text-uppercase">
							<?php echo get_field('sous-titre-cta-footer', 'option'); ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="cta-footer-title text-white text-uppercase my-2">
							<?php echo get_field('titre-cta-footer', 'option'); ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<a href="<?php echo get_field('url-cta-footer', 'option');?>" class="my-1 py-1 px-5 bg-black text-uppercase text-white cta-footer-btn gray-btn-arrow">
							<?php echo get_field('txt-btn-cta-footer', 'option'); ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="back-to-top" class="bg-light-gray">
		<div class="container-fluid">
			<div>
				<div class="row">
					<div class="col text-center">
						<amp-img layout="fixed" width="30" height="20" class="my-2" id="back-to-top-arrow" src="<?php echo get_template_directory_uri(); ?>/img/back-to-top.png"></amp-img>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="px-1 bg-black">
		<div class="container-fluid">
			<div class="row pt-1 pb-3">
				<div class="d-flex mr-auto my-auto">
					<amp-img layout="fixed" width="250" height="50" src="<?php echo get_template_directory_uri(); ?>/img/logo-big.png" class="img-fluid"></amp-img>
				</div>
				<div class="d-flex ml-auto my-auto">
					<div class="footer-social">
						<?php
						$twitter_url = get_field('lien_twitter', 'option');
						$linkedin_url = get_field('lien_linkedin', 'option');
						$rss_url = get_home_url()."/feed";
						$scoopit_url = get_field('lien_scoopit', 'option');
						$twitter_picto = get_field('picto_twitter', 'option');
						$linkedin_picto = get_field('picto_linkedin', 'option');
						$rss_picto = get_field('picto_rss', 'option');
						$scoopit_picto = get_field('picto_scoopit', 'option');
						if($twitter_url){ ?>
							<a class="pl-1" href="<?php echo $twitter_url; ?>" target="_blank">
								<amp-img layout="fixed" height="15" width="13" src="<?php echo $twitter_picto; ?>" class="img-fluid"></amp-img>
							</a>
						<?php }
						if($linkedin_url){ ?>
							<a class="pl-1" href="<?php echo $linkedin_url; ?>" target="_blank">
								<amp-img layout="fixed" height="15" width="13" src="<?php echo $linkedin_picto; ?>" class="img-fluid"></amp-img>
							</a>
						<?php }
						if($rss_url){ ?>
							<a class="pl-1" href="<?php echo $rss_url; ?>" target="_blank">
								<amp-img layout="fixed" height="15" width="15" src="<?php echo $rss_picto; ?>" class="img-fluid"></amp-img>
							</a>
						<?php }
						if($scoopit_url){ ?>
							<a class="pl-1" href="<?php echo $scoopit_url; ?>" target="_blank">
								<amp-img layout="fixed" height="66" width="19" src="<?php echo $scoopit_picto; ?>" class="img-fluid"></amp-img>
							</a>
						<?php }
						?>
					</div>
				</div>
			</div>
			<?php
			$after = '<div class="d-inline-block mx-1 separator-bar">|</div>';
			?>
			<div class="row">
				<div class="col my-2 text-white text-uppercase">
					<?php
						$menu = wp_nav_menu( array(
			                'menu'            => 'Menu footer 1',
			                'echo'            => false,
			                'after'           => $after,
			            )); 
		            	echo substr($menu, 0, strripos($menu, $after)).'</li></ul></div>';
	            	?>
				</div>
			</div>
			<div class="row">
				<div class="d-flex my-2 mr-auto text-white text-uppercase">
					<?php
						$menu = wp_nav_menu( array(
			                'menu'            => 'Menu footer 2',
			                'echo'            => false,
			                'after'           => $after,
			            )); 
		            	echo substr($menu, 0, strripos($menu, $after)).'</li></ul></div>';
					?>
				</div>
				<div class="d-flex my-2 ml-auto text-uppercase text-white copyright">
					<?php echo get_field('txt-copyright-footer', 'option'); ?>
				</div>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>

</body>
</html>