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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<meta name="msapplication-TileColor" content="#008ec7">
	<meta name="theme-color" content="#008ec7">
	<style amp-custom>
html { font-family: sans-serif; line-height: 1.15; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; }
body { margin: 0; }
h1 { font-size: 2em; margin: 0.67em 0; }
img { border-style: none; }
body { font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; font-size: 1rem; font-weight: normal; line-height: 1.3; color: #84919f; background-color: #fff; }
a { color: #333; text-decoration: none; }
a:focus, a:hover { color: #333; text-decoration: none; }
img { vertical-align: middle; }
h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 { margin-bottom: 0; font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit; }
h1, .h1 { font-size: 3.4rem; }
h2, .h2 { font-size: 2.2rem; }
.img-fluid { max-width: 100%; height: auto; }
.container { position: relative; margin-left: auto; margin-right: auto; padding-right: 0px; padding-left: 0px; }
@media (min-width: 576px) { .container { padding-right: 0px; padding-left: 0px; } }
@media (min-width: 576px) { .container { width: 540px; max-width: 100%; } }
@media (min-width: 768px) { .container { width: 720px; max-width: 100%; } }
@media (min-width: 992px) { .container { width: 960px; max-width: 100%; } }
@media (min-width: 1200px) { .container { width: 1140px; max-width: 100%; } }
.container-fluid { position: relative; margin-left: auto; margin-right: auto; padding-right: 0px; padding-left: 0px; }
@media (min-width: 576px) { .container-fluid { padding-right: 0px; padding-left: 0px; } }
.row { display: flex; flex-wrap: wrap; margin-right: 0px; margin-left: 0px; }
@media (min-width: 576px) { .row { margin-right: 0px; margin-left: 0px; } }
.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl { position: relative; width: 100%; min-height: 1px; padding-right: 0px; padding-left: 0px; }
.col { flex-basis: 0; flex-grow: 1; max-width: 100%; }
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
.d-none { display: none ; }
.d-inline { display: inline ; }
.d-inline-block { display: inline-block ; }
.d-block { display: block ; }
.d-flex { display: flex ; }
.d-inline-flex { display: inline-flex ; }
.fixed-top { position: fixed; top: 0; right: 0; left: 0; z-index: 1030; }
.sticky-top { position: sticky; top: 0; z-index: 1030; }
.m-0 { margin: 0 0 ; }
.mt-0 { margin-top: 0 ; }
.mr-0 { margin-right: 0 ; }
.mb-0 { margin-bottom: 0 ; }
.ml-0 { margin-left: 0 ; }
.mx-0 { margin-right: 0 ; margin-left: 0 ; }
.my-0 { margin-top: 0 ; margin-bottom: 0 ; }
.m-1 { margin: 10px 10px ; }
.mt-1 { margin-top: 10px ; }
.mr-1 { margin-right: 10px ; }
.mb-1 { margin-bottom: 10px ; }
.ml-1 { margin-left: 10px ; }
.mx-1 { margin-right: 10px ; margin-left: 10px ; }
.my-1 { margin-top: 10px ; margin-bottom: 10px ; }
.m-2 { margin: 20px 20px ; }
.mt-2 { margin-top: 20px ; }
.mr-2 { margin-right: 20px ; }
.mb-2 { margin-bottom: 20px ; }
.ml-2 { margin-left: 20px ; }
.mx-2 { margin-right: 20px ; margin-left: 20px ; }
.my-2 { margin-top: 20px ; margin-bottom: 20px ; }
.m-3 { margin: 30px 30px ; }
.mt-3 { margin-top: 30px ; }
.mr-3 { margin-right: 30px ; }
.mb-3 { margin-bottom: 30px ; }
.ml-3 { margin-left: 30px ; }
.mx-3 { margin-right: 30px ; margin-left: 30px ; }
.my-3 { margin-top: 30px ; margin-bottom: 30px ; }
.m-4 { margin: 40px 40px ; }
.mt-4 { margin-top: 40px ; }
.mr-4 { margin-right: 40px ; }
.mb-4 { margin-bottom: 40px ; }
.ml-4 { margin-left: 40px ; }
.mx-4 { margin-right: 40px ; margin-left: 40px ; }
.my-4 { margin-top: 40px ; margin-bottom: 40px ; }
.m-5 { margin: 50px 50px ; }
.mt-5 { margin-top: 50px ; }
.mr-5 { margin-right: 50px ; }
.mb-5 { margin-bottom: 50px ; }
.ml-5 { margin-left: 50px ; }
.mx-5 { margin-right: 50px ; margin-left: 50px ; }
.my-5 { margin-top: 50px ; margin-bottom: 50px ; }
.p-0 { padding: 0 0 ; }
.pt-0 { padding-top: 0 ; }
.pr-0 { padding-right: 0 ; }
.pb-0 { padding-bottom: 0 ; }
.pl-0 { padding-left: 0 ; }
.px-0 { padding-right: 0 ; padding-left: 0 ; }
.py-0 { padding-top: 0 ; padding-bottom: 0 ; }
.p-1 { padding: 10px 10px ; }
.pt-1 { padding-top: 10px ; }
.pr-1 { padding-right: 10px ; }
.pb-1 { padding-bottom: 10px ; }
.pl-1 { padding-left: 10px ; }
.px-1 { padding-right: 10px ; padding-left: 10px ; }
.py-1 { padding-top: 10px ; padding-bottom: 10px ; }
.p-2 { padding: 20px 20px ; }
.pt-2 { padding-top: 20px ; }
.pr-2 { padding-right: 20px ; }
.pb-2 { padding-bottom: 20px ; }
.pl-2 { padding-left: 20px ; }
.px-2 { padding-right: 20px ; padding-left: 20px ; }
.py-2 { padding-top: 20px ; padding-bottom: 20px ; }
.p-3 { padding: 30px 30px ; }
.pt-3 { padding-top: 30px ; }
.pr-3 { padding-right: 30px ; }
.pb-3 { padding-bottom: 30px ; }
.pl-3 { padding-left: 30px ; }
.px-3 { padding-right: 30px ; padding-left: 30px ; }
.py-3 { padding-top: 30px ; padding-bottom: 30px ; }
.p-4 { padding: 40px 40px ; }
.pt-4 { padding-top: 40px ; }
.pr-4 { padding-right: 40px ; }
.pb-4 { padding-bottom: 40px ; }
.pl-4 { padding-left: 40px ; }
.px-4 { padding-right: 40px ; padding-left: 40px ; }
.py-4 { padding-top: 40px ; padding-bottom: 40px ; }
.p-5 { padding: 50px 50px ; }
.pt-5 { padding-top: 50px ; }
.pr-5 { padding-right: 50px ; }
.pb-5 { padding-bottom: 50px ; }
.pl-5 { padding-left: 50px ; }
.px-5 { padding-right: 50px ; padding-left: 50px ; }
.py-5 { padding-top: 50px ; padding-bottom: 50px ; }
.m-auto { margin: auto ; }
.mt-auto { margin-top: auto ; }
.mr-auto { margin-right: auto ; }
.mb-auto { margin-bottom: auto ; }
.ml-auto { margin-left: auto ; }
.mx-auto { margin-right: auto ; margin-left: auto ; }
.my-auto { margin-top: auto ; margin-bottom: auto ; }
@media (min-width: 576px) { .m-sm-0 { margin: 0 0 ; }
  .mt-sm-0 { margin-top: 0 ; }
  .mr-sm-0 { margin-right: 0 ; }
  .mb-sm-0 { margin-bottom: 0 ; }
  .ml-sm-0 { margin-left: 0 ; }
  .mx-sm-0 { margin-right: 0 ; margin-left: 0 ; }
  .my-sm-0 { margin-top: 0 ; margin-bottom: 0 ; }
  .m-sm-1 { margin: 10px 10px ; }
  .mt-sm-1 { margin-top: 10px ; }
  .mr-sm-1 { margin-right: 10px ; }
  .mb-sm-1 { margin-bottom: 10px ; }
  .ml-sm-1 { margin-left: 10px ; }
  .mx-sm-1 { margin-right: 10px ; margin-left: 10px ; }
  .my-sm-1 { margin-top: 10px ; margin-bottom: 10px ; }
  .m-sm-2 { margin: 20px 20px ; }
  .mt-sm-2 { margin-top: 20px ; }
  .mr-sm-2 { margin-right: 20px ; }
  .mb-sm-2 { margin-bottom: 20px ; }
  .ml-sm-2 { margin-left: 20px ; }
  .mx-sm-2 { margin-right: 20px ; margin-left: 20px ; }
  .my-sm-2 { margin-top: 20px ; margin-bottom: 20px ; }
  .m-sm-3 { margin: 30px 30px ; }
  .mt-sm-3 { margin-top: 30px ; }
  .mr-sm-3 { margin-right: 30px ; }
  .mb-sm-3 { margin-bottom: 30px ; }
  .ml-sm-3 { margin-left: 30px ; }
  .mx-sm-3 { margin-right: 30px ; margin-left: 30px ; }
  .my-sm-3 { margin-top: 30px ; margin-bottom: 30px ; }
  .m-sm-4 { margin: 40px 40px ; }
  .mt-sm-4 { margin-top: 40px ; }
  .mr-sm-4 { margin-right: 40px ; }
  .mb-sm-4 { margin-bottom: 40px ; }
  .ml-sm-4 { margin-left: 40px ; }
  .mx-sm-4 { margin-right: 40px ; margin-left: 40px ; }
  .my-sm-4 { margin-top: 40px ; margin-bottom: 40px ; }
  .m-sm-5 { margin: 50px 50px ; }
  .mt-sm-5 { margin-top: 50px ; }
  .mr-sm-5 { margin-right: 50px ; }
  .mb-sm-5 { margin-bottom: 50px ; }
  .ml-sm-5 { margin-left: 50px ; }
  .mx-sm-5 { margin-right: 50px ; margin-left: 50px ; }
  .my-sm-5 { margin-top: 50px ; margin-bottom: 50px ; }
  .p-sm-0 { padding: 0 0 ; }
  .pt-sm-0 { padding-top: 0 ; }
  .pr-sm-0 { padding-right: 0 ; }
  .pb-sm-0 { padding-bottom: 0 ; }
  .pl-sm-0 { padding-left: 0 ; }
  .px-sm-0 { padding-right: 0 ; padding-left: 0 ; }
  .py-sm-0 { padding-top: 0 ; padding-bottom: 0 ; }
  .p-sm-1 { padding: 10px 10px ; }
  .pt-sm-1 { padding-top: 10px ; }
  .pr-sm-1 { padding-right: 10px ; }
  .pb-sm-1 { padding-bottom: 10px ; }
  .pl-sm-1 { padding-left: 10px ; }
  .px-sm-1 { padding-right: 10px ; padding-left: 10px ; }
  .py-sm-1 { padding-top: 10px ; padding-bottom: 10px ; }
  .p-sm-2 { padding: 20px 20px ; }
  .pt-sm-2 { padding-top: 20px ; }
  .pr-sm-2 { padding-right: 20px ; }
  .pb-sm-2 { padding-bottom: 20px ; }
  .pl-sm-2 { padding-left: 20px ; }
  .px-sm-2 { padding-right: 20px ; padding-left: 20px ; }
  .py-sm-2 { padding-top: 20px ; padding-bottom: 20px ; }
  .p-sm-3 { padding: 30px 30px ; }
  .pt-sm-3 { padding-top: 30px ; }
  .pr-sm-3 { padding-right: 30px ; }
  .pb-sm-3 { padding-bottom: 30px ; }
  .pl-sm-3 { padding-left: 30px ; }
  .px-sm-3 { padding-right: 30px ; padding-left: 30px ; }
  .py-sm-3 { padding-top: 30px ; padding-bottom: 30px ; }
  .p-sm-4 { padding: 40px 40px ; }
  .pt-sm-4 { padding-top: 40px ; }
  .pr-sm-4 { padding-right: 40px ; }
  .pb-sm-4 { padding-bottom: 40px ; }
  .pl-sm-4 { padding-left: 40px ; }
  .px-sm-4 { padding-right: 40px ; padding-left: 40px ; }
  .py-sm-4 { padding-top: 40px ; padding-bottom: 40px ; }
  .p-sm-5 { padding: 50px 50px ; }
  .pt-sm-5 { padding-top: 50px ; }
  .pr-sm-5 { padding-right: 50px ; }
  .pb-sm-5 { padding-bottom: 50px ; }
  .pl-sm-5 { padding-left: 50px ; }
  .px-sm-5 { padding-right: 50px ; padding-left: 50px ; }
  .py-sm-5 { padding-top: 50px ; padding-bottom: 50px ; }
  .m-sm-auto { margin: auto ; }
  .mt-sm-auto { margin-top: auto ; }
  .mr-sm-auto { margin-right: auto ; }
  .mb-sm-auto { margin-bottom: auto ; }
  .ml-sm-auto { margin-left: auto ; }
  .mx-sm-auto { margin-right: auto ; margin-left: auto ; }
  .my-sm-auto { margin-top: auto ; margin-bottom: auto ; } }
@media (min-width: 768px) { .m-md-0 { margin: 0 0 ; }
  .mt-md-0 { margin-top: 0 ; }
  .mr-md-0 { margin-right: 0 ; }
  .mb-md-0 { margin-bottom: 0 ; }
  .ml-md-0 { margin-left: 0 ; }
  .mx-md-0 { margin-right: 0 ; margin-left: 0 ; }
  .my-md-0 { margin-top: 0 ; margin-bottom: 0 ; }
  .m-md-1 { margin: 10px 10px ; }
  .mt-md-1 { margin-top: 10px ; }
  .mr-md-1 { margin-right: 10px ; }
  .mb-md-1 { margin-bottom: 10px ; }
  .ml-md-1 { margin-left: 10px ; }
  .mx-md-1 { margin-right: 10px ; margin-left: 10px ; }
  .my-md-1 { margin-top: 10px ; margin-bottom: 10px ; }
  .m-md-2 { margin: 20px 20px ; }
  .mt-md-2 { margin-top: 20px ; }
  .mr-md-2 { margin-right: 20px ; }
  .mb-md-2 { margin-bottom: 20px ; }
  .ml-md-2 { margin-left: 20px ; }
  .mx-md-2 { margin-right: 20px ; margin-left: 20px ; }
  .my-md-2 { margin-top: 20px ; margin-bottom: 20px ; }
  .m-md-3 { margin: 30px 30px ; }
  .mt-md-3 { margin-top: 30px ; }
  .mr-md-3 { margin-right: 30px ; }
  .mb-md-3 { margin-bottom: 30px ; }
  .ml-md-3 { margin-left: 30px ; }
  .mx-md-3 { margin-right: 30px ; margin-left: 30px ; }
  .my-md-3 { margin-top: 30px ; margin-bottom: 30px ; }
  .m-md-4 { margin: 40px 40px ; }
  .mt-md-4 { margin-top: 40px ; }
  .mr-md-4 { margin-right: 40px ; }
  .mb-md-4 { margin-bottom: 40px ; }
  .ml-md-4 { margin-left: 40px ; }
  .mx-md-4 { margin-right: 40px ; margin-left: 40px ; }
  .my-md-4 { margin-top: 40px ; margin-bottom: 40px ; }
  .m-md-5 { margin: 50px 50px ; }
  .mt-md-5 { margin-top: 50px ; }
  .mr-md-5 { margin-right: 50px ; }
  .mb-md-5 { margin-bottom: 50px ; }
  .ml-md-5 { margin-left: 50px ; }
  .mx-md-5 { margin-right: 50px ; margin-left: 50px ; }
  .my-md-5 { margin-top: 50px ; margin-bottom: 50px ; }
  .p-md-0 { padding: 0 0 ; }
  .pt-md-0 { padding-top: 0 ; }
  .pr-md-0 { padding-right: 0 ; }
  .pb-md-0 { padding-bottom: 0 ; }
  .pl-md-0 { padding-left: 0 ; }
  .px-md-0 { padding-right: 0 ; padding-left: 0 ; }
  .py-md-0 { padding-top: 0 ; padding-bottom: 0 ; }
  .p-md-1 { padding: 10px 10px ; }
  .pt-md-1 { padding-top: 10px ; }
  .pr-md-1 { padding-right: 10px ; }
  .pb-md-1 { padding-bottom: 10px ; }
  .pl-md-1 { padding-left: 10px ; }
  .px-md-1 { padding-right: 10px ; padding-left: 10px ; }
  .py-md-1 { padding-top: 10px ; padding-bottom: 10px ; }
  .p-md-2 { padding: 20px 20px ; }
  .pt-md-2 { padding-top: 20px ; }
  .pr-md-2 { padding-right: 20px ; }
  .pb-md-2 { padding-bottom: 20px ; }
  .pl-md-2 { padding-left: 20px ; }
  .px-md-2 { padding-right: 20px ; padding-left: 20px ; }
  .py-md-2 { padding-top: 20px ; padding-bottom: 20px ; }
  .p-md-3 { padding: 30px 30px ; }
  .pt-md-3 { padding-top: 30px ; }
  .pr-md-3 { padding-right: 30px ; }
  .pb-md-3 { padding-bottom: 30px ; }
  .pl-md-3 { padding-left: 30px ; }
  .px-md-3 { padding-right: 30px ; padding-left: 30px ; }
  .py-md-3 { padding-top: 30px ; padding-bottom: 30px ; }
  .p-md-4 { padding: 40px 40px ; }
  .pt-md-4 { padding-top: 40px ; }
  .pr-md-4 { padding-right: 40px ; }
  .pb-md-4 { padding-bottom: 40px ; }
  .pl-md-4 { padding-left: 40px ; }
  .px-md-4 { padding-right: 40px ; padding-left: 40px ; }
  .py-md-4 { padding-top: 40px ; padding-bottom: 40px ; }
  .p-md-5 { padding: 50px 50px ; }
  .pt-md-5 { padding-top: 50px ; }
  .pr-md-5 { padding-right: 50px ; }
  .pb-md-5 { padding-bottom: 50px ; }
  .pl-md-5 { padding-left: 50px ; }
  .px-md-5 { padding-right: 50px ; padding-left: 50px ; }
  .py-md-5 { padding-top: 50px ; padding-bottom: 50px ; }
  .m-md-auto { margin: auto ; }
  .mt-md-auto { margin-top: auto ; }
  .mr-md-auto { margin-right: auto ; }
  .mb-md-auto { margin-bottom: auto ; }
  .ml-md-auto { margin-left: auto ; }
  .mx-md-auto { margin-right: auto ; margin-left: auto ; }
  .my-md-auto { margin-top: auto ; margin-bottom: auto ; } }
@media (min-width: 992px) { .m-lg-0 { margin: 0 0 ; }
  .mt-lg-0 { margin-top: 0 ; }
  .mr-lg-0 { margin-right: 0 ; }
  .mb-lg-0 { margin-bottom: 0 ; }
  .ml-lg-0 { margin-left: 0 ; }
  .mx-lg-0 { margin-right: 0 ; margin-left: 0 ; }
  .my-lg-0 { margin-top: 0 ; margin-bottom: 0 ; }
  .m-lg-1 { margin: 10px 10px ; }
  .mt-lg-1 { margin-top: 10px ; }
  .mr-lg-1 { margin-right: 10px ; }
  .mb-lg-1 { margin-bottom: 10px ; }
  .ml-lg-1 { margin-left: 10px ; }
  .mx-lg-1 { margin-right: 10px ; margin-left: 10px ; }
  .my-lg-1 { margin-top: 10px ; margin-bottom: 10px ; }
  .m-lg-2 { margin: 20px 20px ; }
  .mt-lg-2 { margin-top: 20px ; }
  .mr-lg-2 { margin-right: 20px ; }
  .mb-lg-2 { margin-bottom: 20px ; }
  .ml-lg-2 { margin-left: 20px ; }
  .mx-lg-2 { margin-right: 20px ; margin-left: 20px ; }
  .my-lg-2 { margin-top: 20px ; margin-bottom: 20px ; }
  .m-lg-3 { margin: 30px 30px ; }
  .mt-lg-3 { margin-top: 30px ; }
  .mr-lg-3 { margin-right: 30px ; }
  .mb-lg-3 { margin-bottom: 30px ; }
  .ml-lg-3 { margin-left: 30px ; }
  .mx-lg-3 { margin-right: 30px ; margin-left: 30px ; }
  .my-lg-3 { margin-top: 30px ; margin-bottom: 30px ; }
  .m-lg-4 { margin: 40px 40px ; }
  .mt-lg-4 { margin-top: 40px ; }
  .mr-lg-4 { margin-right: 40px ; }
  .mb-lg-4 { margin-bottom: 40px ; }
  .ml-lg-4 { margin-left: 40px ; }
  .mx-lg-4 { margin-right: 40px ; margin-left: 40px ; }
  .my-lg-4 { margin-top: 40px ; margin-bottom: 40px ; }
  .m-lg-5 { margin: 50px 50px ; }
  .mt-lg-5 { margin-top: 50px ; }
  .mr-lg-5 { margin-right: 50px ; }
  .mb-lg-5 { margin-bottom: 50px ; }
  .ml-lg-5 { margin-left: 50px ; }
  .mx-lg-5 { margin-right: 50px ; margin-left: 50px ; }
  .my-lg-5 { margin-top: 50px ; margin-bottom: 50px ; }
  .p-lg-0 { padding: 0 0 ; }
  .pt-lg-0 { padding-top: 0 ; }
  .pr-lg-0 { padding-right: 0 ; }
  .pb-lg-0 { padding-bottom: 0 ; }
  .pl-lg-0 { padding-left: 0 ; }
  .px-lg-0 { padding-right: 0 ; padding-left: 0 ; }
  .py-lg-0 { padding-top: 0 ; padding-bottom: 0 ; }
  .p-lg-1 { padding: 10px 10px ; }
  .pt-lg-1 { padding-top: 10px ; }
  .pr-lg-1 { padding-right: 10px ; }
  .pb-lg-1 { padding-bottom: 10px ; }
  .pl-lg-1 { padding-left: 10px ; }
  .px-lg-1 { padding-right: 10px ; padding-left: 10px ; }
  .py-lg-1 { padding-top: 10px ; padding-bottom: 10px ; }
  .p-lg-2 { padding: 20px 20px ; }
  .pt-lg-2 { padding-top: 20px ; }
  .pr-lg-2 { padding-right: 20px ; }
  .pb-lg-2 { padding-bottom: 20px ; }
  .pl-lg-2 { padding-left: 20px ; }
  .px-lg-2 { padding-right: 20px ; padding-left: 20px ; }
  .py-lg-2 { padding-top: 20px ; padding-bottom: 20px ; }
  .p-lg-3 { padding: 30px 30px ; }
  .pt-lg-3 { padding-top: 30px ; }
  .pr-lg-3 { padding-right: 30px ; }
  .pb-lg-3 { padding-bottom: 30px ; }
  .pl-lg-3 { padding-left: 30px ; }
  .px-lg-3 { padding-right: 30px ; padding-left: 30px ; }
  .py-lg-3 { padding-top: 30px ; padding-bottom: 30px ; }
  .p-lg-4 { padding: 40px 40px ; }
  .pt-lg-4 { padding-top: 40px ; }
  .pr-lg-4 { padding-right: 40px ; }
  .pb-lg-4 { padding-bottom: 40px ; }
  .pl-lg-4 { padding-left: 40px ; }
  .px-lg-4 { padding-right: 40px ; padding-left: 40px ; }
  .py-lg-4 { padding-top: 40px ; padding-bottom: 40px ; }
  .p-lg-5 { padding: 50px 50px ; }
  .pt-lg-5 { padding-top: 50px ; }
  .pr-lg-5 { padding-right: 50px ; }
  .pb-lg-5 { padding-bottom: 50px ; }
  .pl-lg-5 { padding-left: 50px ; }
  .px-lg-5 { padding-right: 50px ; padding-left: 50px ; }
  .py-lg-5 { padding-top: 50px ; padding-bottom: 50px ; }
  .m-lg-auto { margin: auto ; }
  .mt-lg-auto { margin-top: auto ; }
  .mr-lg-auto { margin-right: auto ; }
  .mb-lg-auto { margin-bottom: auto ; }
  .ml-lg-auto { margin-left: auto ; }
  .mx-lg-auto { margin-right: auto ; margin-left: auto ; }
  .my-lg-auto { margin-top: auto ; margin-bottom: auto ; } }
@media (min-width: 1200px) { .m-xl-0 { margin: 0 0 ; }
  .mt-xl-0 { margin-top: 0 ; }
  .mr-xl-0 { margin-right: 0 ; }
  .mb-xl-0 { margin-bottom: 0 ; }
  .ml-xl-0 { margin-left: 0 ; }
  .mx-xl-0 { margin-right: 0 ; margin-left: 0 ; }
  .my-xl-0 { margin-top: 0 ; margin-bottom: 0 ; }
  .m-xl-1 { margin: 10px 10px ; }
  .mt-xl-1 { margin-top: 10px ; }
  .mr-xl-1 { margin-right: 10px ; }
  .mb-xl-1 { margin-bottom: 10px ; }
  .ml-xl-1 { margin-left: 10px ; }
  .mx-xl-1 { margin-right: 10px ; margin-left: 10px ; }
  .my-xl-1 { margin-top: 10px ; margin-bottom: 10px ; }
  .m-xl-2 { margin: 20px 20px ; }
  .mt-xl-2 { margin-top: 20px ; }
  .mr-xl-2 { margin-right: 20px ; }
  .mb-xl-2 { margin-bottom: 20px ; }
  .ml-xl-2 { margin-left: 20px ; }
  .mx-xl-2 { margin-right: 20px ; margin-left: 20px ; }
  .my-xl-2 { margin-top: 20px ; margin-bottom: 20px ; }
  .m-xl-3 { margin: 30px 30px ; }
  .mt-xl-3 { margin-top: 30px ; }
  .mr-xl-3 { margin-right: 30px ; }
  .mb-xl-3 { margin-bottom: 30px ; }
  .ml-xl-3 { margin-left: 30px ; }
  .mx-xl-3 { margin-right: 30px ; margin-left: 30px ; }
  .my-xl-3 { margin-top: 30px ; margin-bottom: 30px ; }
  .m-xl-4 { margin: 40px 40px ; }
  .mt-xl-4 { margin-top: 40px ; }
  .mr-xl-4 { margin-right: 40px ; }
  .mb-xl-4 { margin-bottom: 40px ; }
  .ml-xl-4 { margin-left: 40px ; }
  .mx-xl-4 { margin-right: 40px ; margin-left: 40px ; }
  .my-xl-4 { margin-top: 40px ; margin-bottom: 40px ; }
  .m-xl-5 { margin: 50px 50px ; }
  .mt-xl-5 { margin-top: 50px ; }
  .mr-xl-5 { margin-right: 50px ; }
  .mb-xl-5 { margin-bottom: 50px ; }
  .ml-xl-5 { margin-left: 50px ; }
  .mx-xl-5 { margin-right: 50px ; margin-left: 50px ; }
  .my-xl-5 { margin-top: 50px ; margin-bottom: 50px ; }
  .p-xl-0 { padding: 0 0 ; }
  .pt-xl-0 { padding-top: 0 ; }
  .pr-xl-0 { padding-right: 0 ; }
  .pb-xl-0 { padding-bottom: 0 ; }
  .pl-xl-0 { padding-left: 0 ; }
  .px-xl-0 { padding-right: 0 ; padding-left: 0 ; }
  .py-xl-0 { padding-top: 0 ; padding-bottom: 0 ; }
  .p-xl-1 { padding: 10px 10px ; }
  .pt-xl-1 { padding-top: 10px ; }
  .pr-xl-1 { padding-right: 10px ; }
  .pb-xl-1 { padding-bottom: 10px ; }
  .pl-xl-1 { padding-left: 10px ; }
  .px-xl-1 { padding-right: 10px ; padding-left: 10px ; }
  .py-xl-1 { padding-top: 10px ; padding-bottom: 10px ; }
  .p-xl-2 { padding: 20px 20px ; }
  .pt-xl-2 { padding-top: 20px ; }
  .pr-xl-2 { padding-right: 20px ; }
  .pb-xl-2 { padding-bottom: 20px ; }
  .pl-xl-2 { padding-left: 20px ; }
  .px-xl-2 { padding-right: 20px ; padding-left: 20px ; }
  .py-xl-2 { padding-top: 20px ; padding-bottom: 20px ; }
  .p-xl-3 { padding: 30px 30px ; }
  .pt-xl-3 { padding-top: 30px ; }
  .pr-xl-3 { padding-right: 30px ; }
  .pb-xl-3 { padding-bottom: 30px ; }
  .pl-xl-3 { padding-left: 30px ; }
  .px-xl-3 { padding-right: 30px ; padding-left: 30px ; }
  .py-xl-3 { padding-top: 30px ; padding-bottom: 30px ; }
  .p-xl-4 { padding: 40px 40px ; }
  .pt-xl-4 { padding-top: 40px ; }
  .pr-xl-4 { padding-right: 40px ; }
  .pb-xl-4 { padding-bottom: 40px ; }
  .pl-xl-4 { padding-left: 40px ; }
  .px-xl-4 { padding-right: 40px ; padding-left: 40px ; }
  .py-xl-4 { padding-top: 40px ; padding-bottom: 40px ; }
  .p-xl-5 { padding: 50px 50px ; }
  .pt-xl-5 { padding-top: 50px ; }
  .pr-xl-5 { padding-right: 50px ; }
  .pb-xl-5 { padding-bottom: 50px ; }
  .pl-xl-5 { padding-left: 50px ; }
  .px-xl-5 { padding-right: 50px ; padding-left: 50px ; }
  .py-xl-5 { padding-top: 50px ; padding-bottom: 50px ; }
  .m-xl-auto { margin: auto ; }
  .mt-xl-auto { margin-top: auto ; }
  .mr-xl-auto { margin-right: auto ; }
  .mb-xl-auto { margin-bottom: auto ; }
  .ml-xl-auto { margin-left: auto ; }
  .mx-xl-auto { margin-right: auto ; margin-left: auto ; }
  .my-xl-auto { margin-top: auto ; margin-bottom: auto ; } }
.text-left { text-align: left ; }
.text-right { text-align: right ; }
@media (min-width: 576px) { .text-sm-left { text-align: left ; }
  .text-sm-right { text-align: right ; }}
@media (min-width: 768px) { .text-md-left { text-align: left ; }
  .text-md-right { text-align: right ; } }
@media (min-width: 992px) { .text-lg-left { text-align: left ; }
  .text-lg-right { text-align: right ; }}
@media (min-width: 1200px) { .text-xl-left { text-align: left ; }
  .text-xl-right { text-align: right ; } }
.text-uppercase { text-transform: uppercase ; }
.font-weight-bold { font-weight: bold; }
body { padding-top: 56px; position: relative; font-family: 'Montserrat', sans-serif; background: #fff; color: #333; font-size: 18px; }
.container-fluid { max-width: 1500px; margin-right: auto; margin-left: auto; padding-right: 10px; padding-left: 10px; }
.error-login { background: #ffcccc; color: #af0202; font-weight: bold; padding: 5px; font-size: 15px; }
a:hover, a:active, a:focus, a:visited { text-decoration: none; }
.noselect { -webkit-touch-callout: none; /* iOS Safari */ -webkit-user-select: none; /* Safari */ -khtml-user-select: none; /* Konqueror HTML */ -moz-user-select: none; /* Firefox */ -ms-user-select: none; /* Internet Explorer/Edge */ user-select: none; /* Non-prefixed version, currently supported by Chrome and Opera */ }
.suggestion-link { background-color: #fff; color: #333; transition: .2s; }
.suggestion-link:hover { background-color: #333; color: #fff; }
.oneall_social_login_providers { min-height: auto ; }
.oneall_social_login_providers iframe { height: 75px ; width: 165px ; min-height: auto ; }
em{font-style: normal; font-weight: bold;}
p { margin-bottom: 0.625rem; }
b { font-weight: 700; }
h1, .h1 { font-weight: 900; text-transform: uppercase; }
h2, .h2 { font-weight: 900; }
h3, .h3 { font-weight: 700; }
@media (max-width: 767px) { h1, .h1, .display-1 { font-size: 2rem; }
  h2, .h2, .display-2 { font-size: 1.875rem; }
  h3, .h3, .display-3 { font-size: 1.25rem; } }
.font-weight-normal { font-weight: 500; }
.font-weight-bolder { font-weight: 900; }
.text-decoration-none:hover, a:hover .text-decoration-none { text-decoration: transparent; display: inline-block; width: 100%; }
.gray-btn-arrow, .green-btn-arrow, .white-btn-arrow, .facebook-btn-arrow, .twitter-btn-arrow, .google-btn-arrow, .linkedin-btn-arrow, .postulat-btn-arrow, .alert-btn-arrow, .btn-login-green { display: inline-block; position: relative; }
.single.single-annonce .offre-update { font-size: 15px; }
.single.single-annonce .offre-card .offre-update { font-size: 12px; }
.single.single-annonce #map-localisation { width: 100%; height: 400px; }
.single.single-annonce .offre-title { position: relative; min-height: 150px; display: flex; flex-direction: column; position: relative; }
.single.single-annonce .offre-title .date-box { position: absolute; top: -12px; height: 37px; left: calc( ( 100% - 154px ) / 2 ); }
.single.single-annonce .offre-title .date-box.bg-red { border: solid 1px #d7373a; }
.single.single-annonce .offre-title .date-box.bg-black { border: solid 1px #333; }
.single.single-annonce .offre-title .date-box .clock { line-height: 35px; width: 35px; }
.single.single-annonce .offre-title .date-box .date { height: 100%; width: auto; line-height: 35px; font-size: 15px; }
.single.single-annonce .offre-title p.name-offre { margin-top: 30px; }
.single.single-annonce .offre-title p.ref-offre { margin-top: 0; padding-bottom:10px;}
.single.single-annonce .single-offre-title { position: relative; }
.single.single-annonce .offre-content { border: solid #333 10px; }
.single.single-annonce .offre-card { transition: .3s; filter: grayscale(0) contrast(1);}
.single.single-annonce .offre-card > a > .row { height: 100%; }
.single.single-annonce .offre-card > a > .row > .offre-infos { height: auto; display: flex; flex-direction: column;}
.single.single-annonce .offre-card > a > .row > .offre-infos .info-offre { margin-top:5px; margin-bottom: 0; font-size:15px;}
.single.single-annonce .offre-card > a > .row p.time { margin-top: auto; font-size: 11px; font-weight: 700; letter-spacing: 1px; padding-left: 17px; position: relative; }
.single.single-annonce .offre-card > a > .row p.time:before { content: url(<?php echo get_template_directory_uri();?>/img/time.png); position: absolute; left: 0; }
.single.single-annonce .postulat-btn-arrow { font-size: 12px; cursor: pointer; }
.single.single-annonce .offre-next-prev { background-image: url(<?php echo get_template_directory_uri();?>/img/offre-back-bg.png); background-position: center center; background-size: cover; background-repeat: no-repeat; }
.single.single-annonce .breadcrumb-offre { line-height: 30px; }
.single.single-annonce h1 { font-size: 25px; }
.single.single-annonce h2 { font-size: 15px; }
.single.single-annonce h2:before { content: ''; display: inline-block; height: 1px; width: 50px; background: #333; margin-bottom: 5px; margin-right: 10px; }
.single.single-annonce .profil-offre { font-size: 15px; }
.single.single-annonce .offre-share img { filter: brightness(0); }
.single.single-annonce .prev-offre-btn { position: relative; font-size: 15px; font-weight: 700; }
.single.single-annonce .next-offre-btn { position: relative; font-size: 15px; font-weight: 700; }
.single.single-annonce .offre-back-btn { position: relative; font-size: 15px; font-weight: 700; }
@media (max-width: 1300px) {
 .bg-linkedin-picto .white-btn-arrow { font-size: 10px; } }
.account span, .account .account-img { cursor: pointer; }
header { transition: .3s; position: relative; height: 56px; color: #fff; background-color: #3665a4; }
@media (max-width: 1365px) { header .desktop-header .header-social { display: none ; } }
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
@media (max-width: 400px) { #cta-footer .cta-footer-title { font-size: 20px; } }
#back-to-top { height: 60px; cursor: pointer; }
footer { width: 100%; }
footer .copyright, footer #menu-menu-footer-2, footer #menu-menu-footer-1 { font-size: 12px; font-weight: 700; }
footer ul.menu { margin-bottom: 0; padding-left: 0; list-style: none; }
footer ul.menu li { display: block; margin-bottom: 5px }
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
    width: 43px;
    margin-right: 5px;
    height: 40px;
    background: transparent;
    border: solid 1px #fff;
    border-radius: 3px;
    line-height: 0;
}
.text-center{text-align: center;}
.btn-bar {
    height: 3px;
    margin-top: 4px;
    width: 30px;
    margin-bottom: 1px;
    border-radius: 5px;
    background-color: #fff;
    transition: .3s;
}
.btn-bar:first-child{margin-top: 2px;}
amp-sidebar{position:relative; background-color: #3665a4; color:#FFF;}
amp-sidebar ul{list-style: none; padding-left: 10px; padding-right: 10px; margin-bottom:10px;}
amp-sidebar ul li{ margin-top: 15px; text-transform: uppercase; font-weight: bold; letter-spacing: 2px; font-size: 15px;}
amp-sidebar .account-link{ margin-right: 10px; text-transform: uppercase; font-weight: bold; letter-spacing: 2px; font-size: 15px;}
amp-sidebar .header-menu{position:relative;}
amp-sidebar a{color:#FFF;}
.amp-close-image{position: absolute;top: 10px;left: 10px;}
</style>
	<script async src="https://cdn.ampproject.org/v0.js"></script>
	<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
	<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
	<script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
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
	<amp-sidebar id="sidebar" layout="nodisplay" side="right">
		<div class="header-menu d-flex my-auto text-right py-1">
			<amp-img src="<?php echo get_template_directory_uri();?>/img/cancel.png" layout="fixed" width="32" height="32" alt="close sidebar" on="tap:sidebar.close" role="button" tabindex="0"></amp-img>
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
	</amp-sidebar>
	<header class="fixed-top">
		<nav class="navbar navbar-toggleable-lg bg-blue text-white py-1">
			<div class="header-title">
				<a class="text-uppercase h1 d-inline-block" href="<?php echo get_home_url(); ?>">
					<?php echo '<div class="text-uppercase h1">'.get_field('titre', 'option').'</div>'; ?>
				</a>
				<button class="text-center btn-menu" on="tap:sidebar.toggle">
					<div class="d-inline-block btn-bar"></div>
					<div class="d-inline-block btn-bar"></div>
					<div class="d-inline-block btn-bar"></div>
				</button>
			</div>
		</nav>
	</header>
	<div class="main single-offre">
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
					<div class="col-12 col-md-9 breadcrumb-offre text-left">
						<div class="d-inline text-black"><a href="<?php echo get_permalink(4735); ?>">offres d'emploi</a> / </div><div class="d-inline text-green font-weight-bold"><?php echo get_the_title(); ?></div>
					</div>
					<div class="col-12 col-md-3 text-left text-md-right">
						<a href="<?php echo get_the_permalink() ?>?modal=open" class="d-block px-5 my-1 d-inline-block text-center py-1 bg-green text-uppercase text-white postulat-btn-arrow">
							postulez !
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-light-gray single-offre-title">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center">
						<h1 class="my-3 text-uppercase"><?php echo get_the_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-white offre-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center offre-share my-2">
						<a href="https://plus.google.com/share?url=<?php echo get_permalink();?>" target="_blank" class="mx-2 d-inline-block"><amp-img layout="fixed" height="20" width="20" src="<?php echo get_template_directory_uri(); ?>/img/share-google.png"></amp-img></a>
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_template_directory_uri(); ?>" target="_blank" class="mx-2 d-inline-block"><amp-img layout="fixed" height="20" width="20" src="<?php echo get_template_directory_uri(); ?>/img/share-facebook.png"></amp-img></a>
						<a href="https://twitter.com/intent/tweet?text=%20&url=<?php echo get_permalink();?>" target="_blank" class="mx-2 d-inline-block"><amp-img layout="fixed" height="20" width="20" src="<?php echo get_template_directory_uri(); ?>/img/share-twitter.png"></amp-img></a>
						<a href="https://www.linkedin.com/shareArticle?url=<?php echo get_template_directory_uri(); ?>" target="_blank" class="mx-2 d-inline-block"><amp-img layout="fixed" height="20" width="20" src="<?php echo get_template_directory_uri(); ?>/img/share-linkedin.png"></amp-img></a>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 offre-update">
						<?php $splitDescr = preg_split("/[M, m]ission[s]?[ ]?:[ ]?/", get_field('descrassignement'));
						if(count($splitDescr) == 2){ ?>
							<div class="info-offre-update">
								<?php echo $splitDescr[0]; ?>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 offre-details">
						<h2 class="my-2 text-uppercase">détails de l'annonce</h2>
						<?php if(get_field('ref')){ ?>
							<p class="info-offre">Référence <em><?php echo get_field('ref'); ?></em></p>
						<?php }
						if(get_field('contrat')){ ?>
							<p class="info-offre">Contrat <em><?php echo get_field('contrat'); ?></em></p>
						<?php }
						if(get_field('fonction')){ ?>
							<p class="info-offre">Fonction <em><?php echo get_field('fonction'); ?></em></p>
						<?php }
						if(get_field('secteur')){ ?>
							<p class="info-offre">Secteur <em><?php echo get_field('secteur'); ?></em></p>
						<?php }
						if(get_field('salary-min') && get_field('salary-max')){ ?>
							<p class="info-offre">Salaire (€/an) <em><?php echo get_field('salary-min'); ?> à <?php echo get_field('salary-max'); ?></em></p>
						<?php }
						if(get_field('city') && get_field('pays')){ ?>
							<p class="info-offre">Localisation <em><?php echo get_field('city'); ?> (<?php echo get_field('pays'); ?>)</em></p>
						<?php } ?>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 offre-mission">
						<h2 class="my-2 text-uppercase">votre mission</h2>
						<?php if(get_field('descrassignement') ){ ?>
							<div class="profil-offre">
								<?php if(count($splitDescr) == 2){ ?>
									<div class="info-offre-update">
										<?php echo $splitDescr[1]; ?>
									</div>
								<?php }
								else{
									echo get_field('descrassignement');
								} ?>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 offre-profil">
						<h2 class="my-2 text-uppercase">votre profil</h2>
						<?php if(get_field('profil') ){ ?>
							<div class="profil-offre">
								<?php echo get_field('profil'); ?>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 py-4 offre-apply text-center">
						<a href="<?php echo get_the_permalink() ?>?modal=open" class="d-block px-5 my-1 d-inline-block text-center py-1 bg-green text-uppercase text-white postulat-btn-arrow">
							postulez !
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="offre-next-prev py-4">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="row">
							<div class="col-12 col-lg-4 text-center text-lg-left">
								<a href="<?php echo get_permalink(get_previous_post()); ?>" class="my-1 d-inline-block mr-auto py-1 px-3 bg-black text-uppercase text-white prev-offre-btn">
									voir l'offre précédente
								</a>
							</div>
							<div class="col-12 col-lg-4 text-center">
								<a href="<?php echo get_permalink(4735); ?>" class="d-inline-block my-1 py-1 px-3 bg-white text-uppercase text-black offre-back-btn">
									Retour aux offres d'emploi
								</a>
							</div>
							<div class="col-12 col-lg-4 text-center text-lg-right">
								<a href="<?php echo get_permalink(get_next_post()); ?>" class="my-1 d-inline-block ml-auto py-1 px-3 bg-black text-uppercase text-white next-offre-btn">
									voir l'offre suivante
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="offre-similar bg-light-gray">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3 py-2">
						<b>4 offres d'emploi</b> qui peuvent vous intéresser
					</div>
				</div>
				<div class=row>
					<?php
					$nb_offres = 3;
					if( get_field('offres_urgentes', 'option')[0] && get_field('offres_urgentes', 'option')[0] != get_the_ID()){
						$urgent_post = get_field('offres_urgentes', 'option')[0];
					}
					elseif(get_field('offres_urgentes', 'option')[0] && get_field('offres_urgentes', 'option')[1] != get_the_ID()){
						$urgent_post = get_field('offres_urgentes', 'option')[1];
					}
					else{
						$urgent_post = false;
						$nb_offres = 4;
					}
					$args = array(
						'numberposts' => $nb_offres,
						'orderby' => 'post_date',
						'exclude' => [get_the_ID(), $urgent_post],
						'post_type' => 'annonce',
						'post_status' => 'publish',
					);

					$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
					?>
					<div class="col-12 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
						<div class="row">
							<?php if($urgent_post){ ?>
							<div class="offre-card col-12 my-2">
								<a class="d-block" href="<?php echo get_permalink($urgent_post); ?>">
									<div class="row p-1">
										<div class="col-12 offre-title urgente text-white py-auto text-center bg-red">
											<p class="name-offre text-uppercase"><?php echo get_the_title($urgent_post); ?></p>
											<?php if(get_field('ref', $urgent_post)){?>
												<p class="ref-offre">Référence : <em><?php echo get_field('ref', $urgent_post); ?></em></p>
											<?php } ?>
											<div class="date-box bg-red">
												<div class="d-inline-block clock bg-white">
													<amp-img layout="fixed" height="13" width="13" src="<?php echo get_template_directory_uri(); ?>/img/clock-red.png"></amp-img>
												</div>
												<div class="d-inline-block date px-1 text-white bg-red text-uppercase font-weight-bold">
													<?php echo get_the_date('d M Y', $urgent_post); ?>
												</div>
											</div>
										</div>
										<div class="col-12 bg-white text-black py-2 offre-infos">
											<?php if(get_field('contrat', $urgent_post)){ ?>
												<p class="info-offre px-1">Contrat : <em><?php echo get_field('contrat', $urgent_post); ?></em></p>
											<?php }
											if(get_field('fonction', $urgent_post)){ ?>
												<p class="info-offre px-1">Fonction : <em><?php echo get_field('fonction', $urgent_post); ?></em></p>
											<?php }
											if(get_field('secteur', $urgent_post)){ ?>
												<p class="info-offre px-1">Secteur : <em><?php echo get_field('secteur', $urgent_post); ?></em></p>
											<?php }
											if(get_field('salary-min', $urgent_post) && get_field('salary-max', $urgent_post)){ ?>
												<p class="info-offre px-1">Salaire (€/an) : <em><?php echo get_field('salary-min', $urgent_post); ?> à <?php echo get_field('salary-max', $urgent_post); ?></em></p>
											<?php }
											if(get_field('city', $urgent_post) && get_field('pays', $urgent_post)){ ?>
												<p class="info-offre px-1">Localisation : <em><?php echo get_field('city', $urgent_post); ?> (<?php echo get_field('pays', $urgent_post); ?>)</em></p>
											<?php }
											if(get_field('descrassignement', $urgent_post)){
												$descrSplit = preg_split("/[M, m]ission[s]?[ ]?:[ ]?/", get_field('descrassignement', $urgent_post));
												if(count($descrSplit)==2){ ?>
													<div class="offre-update px-1 my-1"><?php echo $descrSplit[0]; ?></div>
												<?php }
												else{ ?>
													<div class="offre-update px-1 my-1"><?php echo substr(get_field('descrassignement', $urgent_post), 0, 140)."[...]"; ?></div>
												<?php }
											} ?>
										</div>
									</div>
								</a>
							</div>
							<?php }
							if($recent_posts){
								foreach ($recent_posts as $annonce) { ?>
								<div class="offre-card col-12 my-2">
									<a class="d-block" href="<?php echo get_permalink($annonce['ID']); ?>/amp">
										<div class="row p-1">
											<div class="col-12 offre-title text-white py-auto text-center bg-black">
												<p class="name-offre text-uppercase"><?php echo get_the_title($annonce['ID']); ?></p>
												<?php if(get_field('ref', $annonce['ID'])){?>
													<p class="ref-offre">Référence : <em><?php echo get_field('ref', $annonce['ID']); ?></em></p>
												<?php } ?>
												<div class="date-box bg-black">
													<div class="d-inline-block clock bg-white">
														<amp-img layout="fixed" height="13" width="13" src="<?php echo get_template_directory_uri(); ?>/img/clock-black.png"></amp-img>
													</div>
													<div class="d-inline-block date px-1 text-white bg-black text-uppercase font-weight-bold">
														<?php echo get_the_date('d M Y', $annonce['ID']); ?>
													</div>
												</div>
											</div>
											<div class="col-12 bg-white text-black py-2 offre-infos">
												<?php if(get_field('contrat', $annonce['ID'])){ ?>
													<p class="info-offre px-1">Contrat : <em><?php echo get_field('contrat', $annonce['ID']); ?></em></p>
												<?php }
												if(get_field('fonction', $annonce['ID'])){ ?>
													<p class="info-offre px-1">Fonction : <em><?php echo get_field('fonction', $annonce['ID']); ?></em></p>
												<?php }
												if(get_field('secteur', $annonce['ID'])){ ?>
													<p class="info-offre px-1">Secteur : <em><?php echo get_field('secteur', $annonce['ID']); ?></em></p>
												<?php }
												if(get_field('salary-min', $annonce['ID']) && get_field('salary-max', $annonce['ID'])){ ?>
													<p class="info-offre px-1">Salaire (€/an) : <em><?php echo get_field('salary-min', $annonce['ID']); ?> à <?php echo get_field('salary-max', $annonce['ID']); ?></em></p>
												<?php }
												if(get_field('city', $annonce['ID']) && get_field('pays', $annonce['ID'])){ ?>
													<p class="info-offre px-1">Localisation : <em><?php echo get_field('city', $annonce['ID']); ?> (<?php echo get_field('pays', $annonce['ID']); ?>)</em></p>
												<?php }
												if(get_field('descrassignement', $annonce['ID'])){
													$descrSplit = preg_split("/[M, m]ission[s]?[ ]?:[ ]?/", get_field('descrassignement', $annonce['ID']));
													if(count($descrSplit)==2){ ?>
														<div class="offre-update px-1 my-1"><?php echo $descrSplit[0]; ?></div>
													<?php }
													else{ ?>
														<div class="offre-update px-1 my-1"><?php echo substr(get_field('descrassignement', $annonce['ID']), 0, 140)."[...]"; ?></div>
													<?php }
												}?>
											</div>
										</div>
									</a>
								</div>
								<?php }
							} ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="py-2 footer-cta-thumb">	
		<div class="container-fluid py-2">
			<div id="cta-footer" class="px-1">
				<div class="row">
					<div class="col-12">
						<div class="cta-footer-subtitle text-black text-uppercase">
							<?php echo get_field('sous-titre-cta-footer', 'option'); ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="cta-footer-title text-black text-uppercase my-2">
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
	<footer class="bg-black">
		<div class="container-fluid">
			<div class="row pt-1">
				<div class="d-flex mr-auto my-auto">
					<amp-img layout="fixed" width="250" height="50" src="<?php echo get_template_directory_uri(); ?>/img/logo-big.png" class="img-fluid"></amp-img>
				</div>
				<div class="d-flex mr-auto my-auto py-1">
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
							<a href="<?php echo $twitter_url; ?>" target="_blank">
								<amp-img layout="fixed" height="13" width="15" src="<?php echo $twitter_picto; ?>" class="img-fluid"></amp-img>
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
								<amp-img layout="fixed" width="66" height="19" src="<?php echo $scoopit_picto; ?>" class="img-fluid"></amp-img>
							</a>
						<?php }
						?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col my-1 text-white text-uppercase">
					<?php
						$menu = wp_nav_menu( array(
			                'menu'            => 'Menu footer 1',
			                'echo'            => false,
			            )); 
		            	echo $menu;
	            	?>
				</div>
			</div>
			<div class="row">
				<div class="d-flex my-1 mr-auto text-white text-uppercase">
					<?php
						$menu = wp_nav_menu( array(
			                'menu'            => 'Menu footer 2',
			                'echo'            => false,
			            )); 
		            	echo $menu;
					?>
				</div>
				<div class="d-flex my-2 mr-auto text-uppercase text-white copyright">
					<?php echo get_field('txt-copyright-footer', 'option'); ?>
				</div>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>

</body>
</html>
