<?php
header('Content-type: text/css; charset=utf-8');

function sanitize($string)
{
    return preg_replace('/[^-a-zA-Z0-9_ ]/', '', strip_tags((string) $string));
}

$is_mobile          = sanitize($_GET['is_mobile']);
$is_touch           = sanitize($_GET['is_touch']);
$language           = sanitize($_GET['language']);
$price              = sanitize($_GET['price_design']);
$border             = sanitize($_GET['border']);
$font_body          = sanitize($_GET['font_body']);
$font_nav           = sanitize($_GET['font_navigation']);
$font_nav_weight    = sanitize($_GET['font_navigation_weight']);
$font_nav_style     = sanitize($_GET['font_navigation_style']);
$font_nav_size      = (int) $_GET['font_navigation_size'];
$font_intro         = sanitize($_GET['font_intro']);
$font_intro_weight  = sanitize($_GET['font_intro_weight']);
$font_intro_style   = sanitize($_GET['font_intro_style']);
$font_intro_size    = (int) $_GET['font_intro_size'];
$font_title         = sanitize($_GET['font_title']);
$font_title_weight  = sanitize($_GET['font_title_weight']);
$font_title_style   = sanitize($_GET['font_title_style']);
$font_price         = sanitize($_GET['font_price']);
$font_price_weight  = sanitize($_GET['font_price_weight']);
$font_price_style   = sanitize($_GET['font_price_style']);
$font_button        = sanitize($_GET['font_button']);
$font_button_weight = sanitize($_GET['font_button_weight']);
$font_button_style  = sanitize($_GET['font_button_style']);
$font_button_size   = (int) $_GET['font_button_size'];
?>

/******************************************/
/*****   R E S E T   **********************/
/******************************************/
*, body, button, input, textarea, select, table, td, th {
  margin: 0;
  padding: 0;
  line-height: inherit;
  font-family: "Open Sans","Lucida Grande",Arial,Helvetica,sans-serif;
  font-size: 100%;
}
html {
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
}
img {
  max-width: 100%;
  line-height: 0;
  font-size: 0;
  -ms-interpolation-mode: bicubic;
}
img,
a img {
  border: 0;
}
a {
  text-decoration: none;
}
ul {
  list-style: none;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
a, button, input[type=submit], input[type=reset] {
  cursor: pointer;
}


  .search-tbl {
    background-color: #FFFFFF;
    border-bottom: 2px solid #C9C4C1;
    border-top: 2px solid #C9C4C1;
    border-bottom-left-radius: 5px;
    border-top-left-radius: 5px;
    border-bottom-right-radius: 5px;
    border-left: 2px solid #C9C4C1;
    border-right: 2px solid #C9C4C1;
    padding: 10px;
    width: 420px;
	}



/*** Clearfix ***/
.clearfix:before,
.clearfix:after,
.s_wrap:after,
.s_wrap:before,
.s_item:before,
.s_item:after
{
    content: "";
    display: table;
}
.clearfix:after,
.s_wrap:after,
.s_item:after
{
    clear: both;
}
.clearfix,
.s_wrap,
.s_item
{
    zoom: 1; /* For IE 6/7 (trigger hasLayout) */
}

/*****************************************************/
/******   B A S I C    S T Y L E S   *****************/
/*****************************************************/
body {
  font: 13px/20px "Open Sans", "Lucida Grande", Arial, sans-serif;
  <?php if ($language == 'rtl') echo 'direction: rtl;'; ?>
}
h1,
h2
{
  margin: 0 0 20px 0;
  font-weight: normal;
  font-style: "Ubuntu Regular",sans-serif;
  letter-spacing: -1px;
}
h1 {
  line-height: 40px;
  font-size: 32px;
}
h2 {
  padding-top: 5px;
  padding-bottom: 5px;
  line-height: 30px;
  font-size: 22px;
}
h3 {
  font-size: 16px;
  font-weight: normal;
  font-style: "Open Sans","Lucida Grande",Arial,Helvetica,sans-serif;
}

h3 a{
  font-size: 15px;
  word-spacing: 1px;
  font-weight: normal;
  font-style: "Open Sans","Lucida Grande",Arial,Helvetica,sans-serif;
}
h4 {
  font-size: 14px;
  font-weight: bold;
  font-style: normal;
}
h5 {
  font-size: 12px;
  font-weight: bold;
  font-style: normal;
}
a {
  color: #333;
  text-decoration: none;
}
a:hover {
  color: #f12b63;
}
dt {
  font-weight: bold;
}
dd {
  margin-bottom: 10px;
}
blockquote,
p,
ul,
ol,
dl,
address,
blockquote,
table,
hr
{
  margin-bottom: 20px;
}
table img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
p img {
  display: inline;
}
*::-moz-selection,
*::-webkit-selection,
::selection
{
  color: #fff;
}

/*****************************************************/
/******   L A Y O U T   ******************************/
/*****************************************************/

/* relative */

.s_2col_wrap {
  <?php if ($language == 'ltr'): ?>
  padding-left: 20px;
  <?php else: ?>
  padding-right: 20px;
  <?php endif; ?>
 }
.s_3col_wrap {
  <?php if ($language == 'ltr'): ?>
  padding-left: 40px;
  <?php else: ?>
  padding-right: 40px;
  <?php endif; ?>
}
.s_4col_wrap {
  <?php if ($language == 'ltr'): ?>
  padding-left: 60px;
  <?php else: ?>
  padding-right: 60px;
  <?php endif; ?>
}
.s_5col_wrap {
  <?php if ($language == 'ltr'): ?>
  padding-left: 80px;
  <?php else: ?>
  padding-right: 80px;
  <?php endif; ?>
}
.s_2col_wrap > .s_col:nth-of-type(2n+1) {
  position: relative;
  <?php if ($language == 'ltr'): ?>
  margin-left: -20px;
  <?php else: ?>
  margin-right: -20px;
  <?php endif; ?>
}
.s_2col_wrap > .s_col:first-child {
  position: relative;
  <?php if ($language == 'ltr'): ?>
  margin-left: -20px;
  <?php else: ?>
  margin-right: -20px;
  <?php endif; ?>
}
.s_3col_wrap > .s_col:nth-of-type(3n+1) {
  position: relative;
  <?php if ($language == 'ltr'): ?>
  margin-left: -40px;
  <?php else: ?>
  margin-right: -40px;
  <?php endif; ?>
}
.s_3col_wrap > .s_col:first-child {
  position: relative;
  <?php if ($language == 'ltr'): ?>
  margin-left: -40px;
  <?php else: ?>
  margin-right: -40px;
  <?php endif; ?>
}
.s_4col_wrap > .s_col:nth-of-type(4n+1) {
  position: relative;
  <?php if ($language == 'ltr'): ?>
  margin-left: -60px;
  <?php else: ?>
  margin-right: -60px;
  <?php endif; ?>
}
.s_4col_wrap > .s_col:first-child {
  position: relative;
  <?php if ($language == 'ltr'): ?>
  margin-left: -60px;
  <?php else: ?>
  margin-right: -60px;
  <?php endif; ?>
}
.s_5col_wrap > .s_col:nth-of-type(5n+1) {
  position: relative;
  <?php if ($language == 'ltr'): ?>
  margin-left: -80px;
  <?php else: ?>
  margin-right: -80px;
  <?php endif; ?>
}
.s_5col_wrap > .s_col:nth-of-type(5n+1) {
  position: relative;
  <?php if ($language == 'ltr'): ?>
  margin-left: -80px;
  <?php else: ?>
  margin-right: -80px;
  <?php endif; ?>
}

.s_col {
  <?php if ($language == 'ltr'): ?>
  float: left;
  margin-left: 20px;
  <?php else: ?>
  float: right;
  margin-right: 20px;
  <?php endif; ?>
}

.s_1_1 { width:100%; }
.s_1_2 { width:50%; }
.s_1_3 { width:33.33333%; }
.s_2_3 { width:66.66666%; }
.s_1_4 { width:25%; }
.s_3_4 { width:75%; }
.s_1_5 { width:20%; }
.s_2_5 { width:40%; }
.s_3_5 { width:60%; }
.s_4_5 { width:80%; }
.s_1_6 { width:16.656%; }
.s_5_6 { width:83.33%; }
.s_1_8 { width:12.5%; }
.s_3_8 { width:37.5%; }
.s_5_8 { width:62.5%; }
.s_7_8 { width:87.5%; }
.s_1_12 { width:8.3333%; }
.s_5_12 { width:41.6666%; }
.s_7_12 { width:58.3333%; }
.s_11_12 { width:91.6666%; }
.s_1_24 { width:4.1666%; }
.s_5_24 { width:20.8333%; }
.s_7_24 { width:29.1666%; }
.s_11_24 { width:45.8333%; }
.s_13_24 { width:54.1666%; }
.s_17_24 { width:70.8333%; }
.s_19_24 { width:79.1666%; }
.s_23_24 { width:95.8333%; }

/* absolute */

.s_wrap {
  clear: both;
  margin-left: auto;
  margin-right: auto;
  width: 960px;
}

.s_col_1,
.s_col_2,
.s_col_3,
.s_col_4,
.s_col_5,
.s_col_6,
.s_col_7,
.s_col_8,
.s_col_9,
.s_col_10,
.s_col_11,
.s_col_12,
.s_main_col,
.s_side_col
{
  display: inline;
  <?php if ($language == 'ltr'): ?>
  float: left;
  <?php else: ?>
  float: right;
  <?php endif; ?>
  margin-left: 10px;
  margin-right: 10px;
}
<?php if ($language == 'rtl'): ?>
.s_main_col,
.s_side_col
{
  float: left;
}
.left.s_1_2,
.left.s_1_3,
.left.s_1_3
{
  float: right !important;
}
<?php endif; ?>

.s_col_1 { width: 60px; }
.s_col_2 { width: 140px; }
.s_col_3 { width: 220px; }
.s_col_4 { width: 300px; }
.s_col_5 { width: 380px; }
.s_col_6 { width: 460px; }
.s_col_7 { width: 540px; }
.s_col_8 { width: 620px; }
.s_col_9 { width: 700px; }
.s_col_10 { width: 780px; }
.s_col_11 { width: 860px; }
.s_col_12 { width: 940px; }
.alpha { margin-left: 0; }
.omega { margin-right: 0; }

.s_h_10 { height: 10px !important; }
.s_h_20 { height: 20px !important; }
.s_h_30 { height: 30px !important; }
.s_h_40 { height: 40px !important; }
.s_h_50 { height: 50px !important; }
.s_h_100 { height: 100px !important; }
.s_h_150 { height: 150px !important; }
.s_h_170 { height: 170px !important; }
.s_h_200 { height: 200px !important; }
.s_h_270 { height: 270px !important; }


/*****************************************************/
/******   C O M M O N    S T Y L E S   ***************/
/*****************************************************/

.s_small {font-size: 10px;}
.inline {display: inline !important;}
a img.inline {vertical-align: middle;}
.align_left {text-align: left !important;}
.align_right {text-align: right !important;}
.align_center {text-align: center !important;}
.valign_top {vertical-align: top !important;}
.valign_middle {vertical-align: middle !important;}
.uppercase {text-transform: uppercase !important;}
.left {float: left !important;}
.clear {clear: both !important;}
.right {float: right !important;}
.nofloat {float: none !important;}
.block {display: block !important;}
.none, .ui-tabs-hide, .s_hidden {display: none !important;}
.border_eee {border-bottom: 1px solid #eee;}
.border_ddd {border-bottom: 1px solid #ddd;}
.border_ccc {border-bottom: 1px solid #ccc;}
.s_f_9 {font-size: 9px;}
.s_f_10 {font-size: 10px;}
.s_f_11 {font-size: 11px;}
.s_f_12 {font-size: 12px;}
.s_f_13 {font-size: 13px;}
.s_f_14 {font-size: 14px;}
.s_f_16 {font-size: 16px;}
.s_f_18 {font-size: 18px;}
.s_f_20 {font-size: 20px;}
.s_f_22 {font-size: 22px;}
.s_f_24 {font-size: 24px;}
.s_f_26 {font-size: 26px;}
.s_f_28 {font-size: 28px;}
.s_f_30 {font-size: 30px;}
.s_f_32 {font-size: 32px;}

.s_mb_0 {margin-bottom: 0 !important;}
.s_mb_5 {margin-bottom: 5px !important;}
.s_mb_10 {margin-bottom: 10px !important;}
.s_mb_15 {margin-bottom: 15px !important;}
.s_mb_20 {margin-bottom: 20px !important;}
.s_mb_25 {margin-bottom: 25px !important;}
.s_mb_30 {margin-bottom: 30px !important;}
.s_ml_0 {margin-left: 0 !important;}
.s_ml_10 {margin-left: 10px !important;}
.s_ml_15 {margin-left: 15px !important;}
.s_ml_20 {margin-left: 20px !important;}
.s_ml_25 {margin-left: 25px !important;}
.s_ml_30 {margin-left: 30px !important;}

.s_sep {margin-bottom: 20px !important;}

.border_eee.s_sep, .border_ddd.s_sep, .border_ccc.s_sep {margin-bottom: 19px !important}
.border_eee.s_mb_20, .border_ddd.s_mb_20, .border_ccc.s_mb_20 {margin-bottom: 19px !important}
.border_eee.s_mb_30, .border_ddd.s_mb_30, .border_ccc.s_mb_30 {margin-bottom: 29px !important}

.s_pt_5 {padding-top: 5px !important;}
.s_pt_10 {padding-top: 10px !important;}
.s_p_5_0 {padding: 5px 0 !important;}
.s_p_5_10 {padding: 5px 10px !important;}
.s_p_5_15 {padding: 5px 15px;}
.s_p_5_20 {padding: 5px 20px;}
.s_p_10_15 {padding: 10px 15px;}
.s_p_10_20 {padding: 10px 20px;}
.s_p_10_5 {padding: 10px 5px;}
.s_p_10_0 {padding: 10px 0 !important;}
.s_p_15_0 {padding: 15px 0;}
.s_p_15_5 {padding: 15px 5px;}
.s_p_15_10 {padding: 15px 10px;}
.s_p_15_20 {padding: 15px 20px;}
.s_p_20_0 {padding: 20px 0;}
.s_p_20_10 {padding: 20px 10;}
.s_p_20_15 {padding: 20px 15px;}

span.clear {
  visibility: visible;
  display: block;
  height: 0;
  line-height: 0;
  font-size: 0;
}

.s_title_1 span {
  display: inline-block;
  border-bottom: 1px solid #ddd;
}
h2.s_title_1 {
  padding-bottom: 3px;
  text-indent: -1px;
  font-size: 26px;
  line-heght: 40px;
  word-spacing: 2px;
  color: #333333;
}
h2.s_title_1 span {
  padding-bottom: 4px;
  text-indent: -1px;
}

.s_999 { color: #999; }
.s_666 { color: #666; }
.s_333 { color: #333; }
.s_red { color: red; }

.s_eee_bgr { background-color: #eee; }
.s_ddd_bgr { background-color: #ddd; }
.s_ccc_bgr { background-color: #ccc; }
.s_bbb_bgr { background-color: #bbb; }

.s_h_80 {height: 80px;}
.s_h_90 {height: 90px;}
.s_h_100 {height: 100px;}
.s_h_150 {height: 150px;}

.s_nav > ul > li,
.s_nav > ul > li > a
{
  z-index: 15;
  display: block;
  <?php if ($language == 'ltr'): ?>
  float: left;
  <?php else: ?>
  float: right;
  <?php endif; ?>
}
.s_nav .s_submenu {
  z-index: 10;
  position: absolute;
  display: none;
  top: 100%;
  <?php if ($language == 'ltr'): ?>
  left: 0;
  <?php else: ?>
  right: 0;
  <?php endif; ?>
}
.s_nav li .s_submenu ul ul {
  z-index: 20;
  position: absolute;
  top: 0;
  <?php if ($language == 'ltr'): ?>
  left: 96%;
  <?php else: ?>
  right: 96%;
  <?php endif; ?>
}
.s_nav li:hover,
.s_nav li:hover > a
{
  position: relative;
}
.s_nav li:hover .s_submenu,
#cart_menu:hover .s_submenu
{
  display: block;
}
.s_nav.s_size_1 > ul > li,
.s_nav.s_size_1 > ul > li > a
{
  height: 20px;
  line-height: 20px;
}
.s_nav.s_size_2 > ul > li,
.s_nav.s_size_2 > ul > li > a
{
  height: 30px;
  line-height: 30px;
}

.s_list_1 li {
  position: relative;
  <?php if ($language == 'ltr'): ?>
  padding-left: 15px;
  <?php else: ?>
  padding-right: 15px;
  <?php endif; ?>
}
.s_list_1 li:before {
  content: '';
  position: absolute;
  top: 0;
  display: block;
  width: 15px;
  height: 20px;
  <?php if ($language == 'ltr'): ?>
  left: 0;
  background-image: url(../images/bullet_1.png);
  background-position: 0 -2px;
  <?php else: ?>
  right: 0;
  background-image: url(../images/rtl/bullet_1.png);
  background-position: 100% -2px;
  <?php endif; ?>
  background-repeat: no-repeat;
}

.s_icon_10,
.s_icon_16,
.s_icon_24,
.s_icon_32
{

  position: relative;
  background-repeat: no-repeat;
  background-position: center left;
}
<?php if ($language == 'ltr'): ?>
.s_icon_10 {padding-left: 15px !important;}
.s_icon_16 {padding-left: 25px !important;}
.s_icon_24 {padding-left: 32px !important;}
.s_icon_32 {padding-left: 42px !important;}
<?php else: ?>
.s_icon_10 {padding-right: 15px !important;}
.s_icon_16 {padding-right: 25px !important;}
.s_icon_24 {padding-right: 32px !important;}
.s_icon_32 {padding-right: 42px !important;}
<?php endif; ?>

.s_icon_10 .s_icon,
.s_icon_16 .s_icon,
.s_icon_24 .s_icon,
.s_icon_32 .s_icon
{
  position: absolute;
  <?php if ($language == 'ltr'): ?>
  left: 0;
  <?php else: ?>
  right: 0;
  <?php endif; ?>
  top: 50%;
  display: block;
  background-repeat: no-repeat;
  background-position: center;
}
.s_icon_10 .s_icon {
  width: 10px;
  height: 10px;
  margin-top: -5px;
}
.s_icon_16 .s_icon {
  width: 16px;
  height: 16px;
  margin-top: -8px;
}
.s_icon_24 .s_icon {
  width: 24px;
  height: 24px;
  margin-top: -12px;
}
.s_icon_32 .s_icon {
  width: 32px;
  height: 32px;
  margin-top: -16px;
}

.s_add_10 {
  background-image: url(../images/sprite.png);
  background-position: -11px -498px !important;
}
.s_success_24 {
  background-image: url(../images/sprite.png);
  background-position: 0 -288px !important;
}
.s_failure_24 {
  background-image: url(../images/sprite.png);
  background-position: 0 -264px !important;
}
.s_remove_16 {
  background-image: url(../images/sprite.png);
  background-position: -64px -42px !important;
}
.s_phone_32,
.s_fax_32,
.s_mobile_32,
.s_mail_32,
.s_skype_32
{
  background-image: url(../images/sprite.png);
  background-color: #4cb1ca;
}
.s_phone_32 {background-position: 0 -312px !important;}
.s_mobile_32 {background-position: 0 -344px !important;}
.s_mail_32 {background-position: 0 -376px !important;}
.s_skype_32 {background-position: 0 -408px !important;}
.s_fax_32 {background-position: 0 -440px !important;}
.s_save_10 {background-image: url(../images/i_save_10.png);}

.s_rating_holder .s_average {
  display: inline-block;
  height: 16px;
  margin-bottom: 20px;
  line-height: 18px;
  font-size: 13px;
  font-weight: bold;
}
.s_rating_holder .s_total {
  color: #999;
  font-weight: normal;
  font-size: 12px;
}

.s_rating,
.s_rating .s_percent
{
  display: inline-block;
  height: 16px;
  line-height: 16px;
  vertical-align: bottom;
}
.s_rating.s_rating_6 {
  width: 96px;
}
.s_rating.s_rating_5 {
  width: 80px;
}
.s_rating {
  margin-right: 3px;
  background: url(../images/i_star_16.png) repeat-x 0 100%;
}
.s_rating .s_percent {
  float: left;
  background: url(../images/i_star_16.png) repeat-x 0 0;
}

.s_rating_big,
.s_rating_big .s_percent
{
  height: 24px;
  line-height: 24px;
}
.s_rating_big.s_rating_6 {
  width: 150px;
}
.s_rating_big.s_rating_5 {
  width: 125px;
}
.s_rating_big {
  background: url(../images/i_star_gray_24.png) repeat-x top left;
}
.s_rating_big .s_percent {
  background: url(../images/i_star_24.png) repeat-x top left;
}
.s_rating_small,
.s_rating_small .s_percent
{
  height: 10px;
  line-height: 10px;
}
.s_rating_small.s_rating_6 {
  width: 60px;
}
.s_rating_small.s_rating_5 {
  width: 50px;
}
.s_rating_small {
  background: url(../images/i_star_10.png) repeat-x 0 100%;
}
.s_rating_small .s_percent {
  background: url(../images/i_star_10.png) repeat-x 0 0;
}


.s_thumb {
  position: relative;
  <?php if ($language == 'ltr'): ?>
  float: left;
  <?php else: ?>
  float: right;
  <?php endif; ?>
}
.s_thumb,
.s_thumb img
{
  display: block;
  max-width: 100%;
}
.s_thumb img {
  margin-left: auto;
  margin-right: auto;
}

.s_table {
  background: #eee;
}
.s_table th,
.s_table td
{
  text-align: center;
  padding-top: 4px;
  padding-bottom: 5px;
  border-right: 1px solid #fff;
  border-bottom: 1px solid #fff;
}
.s_table th {
  background: #ddd;
  color: #999;
}

.s_table_1 td {
  padding: 10px 10px 9px 10px;
  text-align: center;
  border-bottom: 1px solid #eee;
}
.s_table_1 th {
  padding: 10px 10px 9px 10px;
  font-size: 13px;
  background: #eee;
  border-bottom: 1px solid #ddd;
}




/******************************************/
/*****   F O R M S   **********************/
/******************************************/
button::-moz-focus-inner {
  border: 0;
}
button {
  padding-top: 1px;
  padding-bottom: 2px;
}
label {
  <?php if ($language == 'ltr'): ?>
  float: left;
  margin-right: 10px;
  <?php else: ?>
  float: right;
  margin-left: 10px;
  <?php endif; ?>
  width: 150px;
}
input[type=text],
input[type=password],
textarea
{
  max-width: 100%;
  padding: 4px;
  border: none;
  background: #fff;
  border: 1px solid #ddd;
}
input[type=text],
input[type=password]
{
  height: 20px;
}
input[type=radio],
input[type=checkbox]
{
  vertical-align: middle;
}
textarea {
  padding-bottom: 8px !important;
  resize: vertical;
  vertical-align: baseline;
}
select {
  height: 28px;
  margin-top: 1px;
  margin-bottom: 1px;
  border: none;
  background: #fff;
  border: 1px solid #ddd;
  vertical-align: middle;
}
select[size] {
  height: auto;
}
button {
  height: 40px;
  border: none;
  background: #ddd;
}

input[type=hidden] {
  display: none;
}
input[type=file] {
  font-size: 20px !important;
}
input[type=text],
input[type=password],
textarea,
select
{
  <?php if ($language == 'ltr'): ?>
  margin-right: 5px;
  <?php else: ?>
  margin-left: 5px;
  <?php endif; ?>
  padding: 4px;
  background: #eee;
  border: 1px solid;
  border-color: #ddd #eee #eee #ddd;
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  resize: none;
}
input[type=text]:hover,
input[type=password]:hover,
textarea:hover,
select:hover
{
  border-color: #999 #ddd #ddd #aaa;
}
input[type=text]:focus,
input[type=password]:focus,
textarea:focus,
select:focus
{
  border-color: #999 #ddd #ddd #aaa;
  outline: none;
}
select:focus {
  outline: 0 none !important;
}

label.s_disabled, label.s_disabled * {
  color: #9ea7ad !important;
}
label .s_legend {
  margin: 0 !important;
  padding-top: 0;
  line-height: 11px;
}

.s_checkbox,
.s_radio
{
  position: relative;
  display: block;
  width: auto;
  <?php if ($language == 'ltr'): ?>
  float: left;
  margin-right: 15px;
  padding: 5px 0 5px 20px !important;
  text-align: left;
  <?php else: ?>
  float: right;
  margin-left: 15px;
  padding: 5px 20px 5px 0 !important;
  text-align: right;
  <?php endif; ?>
  color: #333;
  font-size: 13px;
  font-weight: normal;
}
.s_checkbox input,
.s_radio input
{
  <?php if ($language == 'ltr'): ?>
  left: 0;
  <?php else: ?>
  right: 0;
  <?php endif; ?>
  position: absolute;
  margin: 0 !important;
}
.s_checkbox input,
.s_radio input
{
  top: 9px;
}
label.s_checkbox.left,
label.s_radio.left
{
  <?php if ($language == 'rtl'): ?>
  float: right !important;
  <?php endif; ?>
}
label.s_image {
  overflow: hidden;
  display: table;
  width: 100% !important;
  padding-top: 0 !important;
  padding-bottom: 0 !important;
}
label.s_image img {
  <?php if ($language == 'ltr'): ?>
  float: left;
  margin-right: 10px;
  <?php else: ?>
  float: right;
  margin-left: 10px;
  <?php endif; ?>
  max-width: none;
}
label.s_image .s_label {
  display: table-cell;
  width: 100%;
  vertical-align: middle;
}
label.s_image .s_checkbox input,
label.s_image .s_radio input
{
  top: 50%;
  margin-top: -6px !important;
}

.s_full {
  padding: 0 5px;
}
.s_full input[type=text],
.s_full input[type=password],
.s_full textarea,
.s_full select
{
  width: 100%;
  margin-left: -5px;
  margin-right: -5px;
}
.s_full .s_checkbox,
.s_full .s_radio
{
  width: auto;
  <?php if ($language == 'ltr'): ?>
  margin-left: -4px;
  <?php else: ?>
  margin-right: -4px;
  <?php endif; ?>
}

.s_legend {
  clear: both;
  display: block;
  margin-bottom: 0;
  padding-top: 10px;
  font-size: 11px;
  color: #9ea7ad;
  text-shadow: 1px 1px 0 #fff;
}

.s_row_1 {
  padding: 20px 0;
  border-top: 1px solid #fff;
  border-bottom: 1px solid #eee;
}
.s_row_1 label,
.s_row_1 input[type=text],
.s_row_1 input[type=password],
.s_row_1 textarea,
.s_row_1 select
{
  <?php if ($language == 'ltr'): ?>
  float: left;
  <?php else: ?>
  float: right;
  <?php endif; ?>
}
.s_row_1 label {
  width: 150px;
  <?php if ($language == 'ltr'): ?>
  margin-right: 15px;
  <?php else: ?>
  margin-left: 15px;
  <?php endif; ?>
  padding: 7px 0 0 0;
}
.s_row_1 .s_full,
.s_row_1 .s_legend,
.s_row_1 .s_scroll
{
  <?php if ($language == 'ltr'): ?>
  margin-left: 165px;
  <?php else: ?>
  margin-right: 165px;
  <?php endif; ?>
}
.s_row_1 .s_full {
  <?php if ($language == 'ltr'): ?>
  padding-right: 20px;
  <?php else: ?>
  padding-left: 20px;
  <?php endif; ?>
}
.s_row_1 .s_full .s_legend {
  <?php if ($language == 'ltr'): ?>
  margin-left: 0;
  <?php else: ?>
  margin-right: 0;
  <?php endif; ?>
}

.s_row_2 {
  padding: 10px 0;
}
.s_row_2 label,
.s_row_2 input[type=text],
.s_row_2 input[type=password],
.s_row_2 textarea,
.s_row_2 select
{
}
.s_row_2 label {
  <?php if ($language == 'ltr'): ?>
  margin-right: 15px;
  <?php else: ?>
  margin-left: 15px;
  <?php endif; ?>
  padding-top: 5px;
  padding-bottom: 5px;
  vertical-align: baseline;
}
.s_row_2 .s_full {
  <?php if ($language == 'ltr'): ?>
  margin-left: 166px;
  <?php else: ?>
  margin-right: 166px;
  <?php endif; ?>
}
.s_row_2 .s_full input[type=text],
.s_row_2 .s_full input[type=password],
.s_row_2 .s_full textarea,
.s_row_2 .s_full select
{
  <?php if ($language == 'ltr'): ?>
  margin-right: 0;
  <?php else: ?>
  margin-left: 0;
  <?php endif; ?>
}

.s_row_3 {
  margin-bottom: 20px;
}
.s_row_3 label {
  clear: both;
  display: block;
  width: auto;
  margin-bottom: 5px;
  padding-top: 0;
}
.s_row_3 label.s_checkbox,
.s_row_3 label.s_radio
{
  margin-bottom: 0;
}
.s_row_3 input[type=text],
.s_row_3 input[type=password],
.s_row_3 textarea,
.s_row_3 select,
.s_row_3 .uploader
{
  <?php if ($language == 'ltr'): ?>
  float: left;
  clear: left;
  <?php else: ?>
  float: right;
  clear: right;
  <?php endif; ?>
}
.s_row_3 .s_error_msg {
  <?php if ($language == 'ltr'): ?>
  float: left;
  <?php else: ?>
  float: right;
  <?php endif; ?>
}


.s_error_row input[type=text],
.s_error_row input[type=password],
.s_error_row textarea,
.s_error_row select
{
  color: #84290a;
  background-color: #ffe7df !important;
  border-color: #ffcdbc #ffe7df #ffe7df #ffcdbc !important;
}
.s_row_4.s_error_row:hover {
  background: none;
}
.s_error_msg {
  margin-bottom: 0;
  <?php if ($language == 'ltr'): ?>
  padding: 5px 5px 5px 12px;
  background: url(../images/bullet_2.gif) no-repeat 1px 13px;
  <?php else: ?>
  padding: 5px 12px 5px 5px;
  background: url(../images/bullet_2.gif) no-repeat 100% 13px;
  <?php endif; ?>
  font-size: 11px;
  color: red;
}
.s_box_1 .s_error_msg {
  margin-bottom: 0 !important;
}

.s_button_1 {
  cursor: pointer;
  display: block;
  padding: 3px;
}
.s_button_1 .s_text {
  position: relative;
  display: block;
  height: 28px;
  padding: 0 10px;
  line-height: 28px;
  text-transform: uppercase;
  font-size: 16px;
  color: #fff;
  border: 1px solid rgba(255, 255, 255, 0.3);
}
.s_button_1 .s_text .icon {display:inline-block;text-transform:none;vertical-align: middle;font-size: 18px;}
.s_button_1_small .s_text {
  height: 20px;
  line-height: 20px;
  text-transform: none;
  font-size: 14px;
}
.s_button_1:hover .s_text {
  border: 1px solid rgba(255, 255, 255, 0.5);
}
.s_button_1.s_ddd_bgr .s_text {
  color: #666;
}
.s_button_1.s_ddd_bgr:hover .s_text {
  color: #333;
  border: 1px solid rgba(255, 255, 255, 0.7);
}
.s_button_1.left {
  margin-left: 0;
  margin-right: 10px;
}
.s_button_1.s_ddd_bgr .s_text {
  color: #666;
}
.s_button_1.s_ddd_bgr:hover .s_text {
  color: #333;
  border: 1px solid rgba(255, 255, 255, 0.7);
}

.s_button_1,
.buttons .button,
.buttons input[type=submit].button,
.buttons input[type=button].button
{
  <?php if ($language == 'ltr'): ?>
  float: right;
  margin-left: 10px;
  <?php else: ?>
  float: left;
  margin-right: 10px;
  <?php endif; ?>
}
.s_button_1.left,
.buttons table td[align=left] .button
{
  <?php if ($language == 'ltr'): ?>
  margin-left: 0;
  margin-right: 10px;
  <?php else: ?>
  float: right !important;
  margin-right: 0;
  margin-left: 10px;
  <?php endif; ?>
}
.buttons .right,
.buttons .right .button
{
  <?php if ($language == 'rtl'): ?>
  float: left !important;
  margin-left: 0 !important;
  <?php endif; ?>
}

.s_submit {
  overflow: hidden;
  clear: both;
  margin-bottom: 30px;
  padding-top: 2px;
  padding-bottom: 2px;
}
.s_submit .s_nav.left {
  <?php if ($language == 'rtl'): ?>
  float: right !important;
  <?php endif; ?>
}
.s_submit .s_checkbox,
.s_submit .s_radio
{
  margin-top: 3px;
}

.s_server_msg {
  cursor: pointer;
  min-height: 48px;
  margin-bottom: 30px;
}
.s_server_msg p {
  min-height: 20px;
  margin: 0;
  padding: 19px 20px;
  text-align: center;
  font-size: 14px;
  font-weight: bold;
}
.s_msg_green {
  color: green;
  background: #f4fbe4;
  border: 1px solid #e3f5bd;
}
.s_msg_red {
  color: red;
  background: #ffede5;
  border: 1px solid #ffd8c3;
}


.s_tabs_nav {
  height: 40px;
  margin-bottom: 0;
}
.s_tabs_nav li,
.s_tabs_nav li a
{
  display: block;
  <?php if ($language == 'ltr'): ?>
  float: left;
  <?php else: ?>
  float: right;
  <?php endif; ?>
  height: 40px;
  line-height: 40px;
  text-transform: uppercase;
}
.s_tabs_nav li {
  overflow: hidden;
  <?php if ($language == 'ltr'): ?>
  margin-left: 10px;
  <?php else: ?>
  margin-right: 10px;
  <?php endif; ?>
}
.s_tabs_nav.s_2col_wrap {
  <?php if ($language == 'ltr'): ?>
  padding-left: 10px;
  <?php else: ?>
  padding-right: 10px;
  <?php endif; ?>
}
.s_tabs_nav.s_3col_wrap {
  <?php if ($language == 'ltr'): ?>
  padding-left: 20px;
  <?php else: ?>
  padding-right: 20px;
  <?php endif; ?>
}
.s_tabs_nav.s_4col_wrap {
  <?php if ($language == 'ltr'): ?>
  padding-left: 30px;
  <?php else: ?>
  padding-right: 30px;
  <?php endif; ?>
}
.s_tabs_nav.s_5col_wrap {
  <?php if ($language == 'ltr'): ?>
  padding-left: 40px;
  <?php else: ?>
  padding-right: 40px;
  <?php endif; ?>
}
.s_tabs_nav.s_2col_wrap > li:first-child {
  <?php if ($language == 'ltr'): ?>
  margin-left: -10px;
  <?php else: ?>
  margin-right: -10px;
  <?php endif; ?>
}
.s_tabs_nav.s_3col_wrap > li:first-child {
  <?php if ($language == 'ltr'): ?>
  margin-left: -20px;
  <?php else: ?>
  margin-right: -20px;
  <?php endif; ?>
}
.s_tabs_nav.s_4col_wrap > li:first-child {
  <?php if ($language == 'ltr'): ?>
  margin-left: -30px;
  <?php else: ?>
  margin-right: -30px;
  <?php endif; ?>
}
.s_tabs_nav.s_5col_wrap > li:first-child {
  <?php if ($language == 'ltr'): ?>
  margin-left: -40px;
  <?php else: ?>
  margin-right: -40px;
  <?php endif; ?>
}

.s_tabs_nav li a {
  width: 100%;
  background: #ddd;
  box-shadow: inset 0 -3px 4px rgba(0, 0, 0, 0.03);
  -o-box-shadow: inset 0 -3px 4px rgba(0, 0, 0, 0.03);
  -moz-box-shadow: inset 0 -3px 4px rgba(0, 0, 0, 0.03);
  -webkit-box-shadow: inset 0 -3px 4px rgba(0, 0, 0, 0.03);
}
.s_tabs_nav li.ui-tabs-selected a {
  color: #999;
  background: #f3f3f3;
  box-shadow: none;
  -o-box-shadow: none;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
}
.s_tabs_nav li.ui-tabs-selected a:hover {
  color: #999 !important;
}
.s_tab_box {
  padding: 15px;
  border: 10px solid #f3f3f3;
}
.s_tab_box > h2 {
  display: none;
}

/*.pagination {
  overflow: hidden;
  clear: both;
  padding: 27px 0 0 0;
  line-height: 24px;
  border-top: 1px solid #ddd;
}
.pagination:empty {
  display: none;
}
.s_listing.s_grid_view + .pagination {
  margin-top: 10px;
}
.pagination .links {
  <?php if ($language == 'ltr'): ?>
  float: left;
  <?php else: ?>
  float: right;
  <?php endif; ?>
  height: 24px;
  margin-bottom: 28px;
}
.pagination .results {
  <?php if ($language == 'ltr'): ?>
  float: right;
  <?php else: ?>
  float: left;
  <?php endif; ?>
  height: 24px;
  margin-bottom: 28px;
  font-size: 12px;
  color: #999;
}
.pagination a,
.pagination b
{
  display: inline-block;
  width: 24px;
  height: 24px;
  text-align: center;
}
.pagination a {
  font-size: 12px;
  color: #666;
  background: #eee;
}*/
/*.pagination .links a:hover,
#content .pagination .links a:hover
{
  color: #fff !important;
}*/
/*!
 * Bootstrap v2.2.2
 *
 * Copyright 2012 Twitter, Inc
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Designed and built with all the love in the world @twitter by @mdo and @fat.
 */
.clearfix {
  *zoom: 1;
}
.clearfix:before,
.clearfix:after {
  display: table;
  content: "";
  line-height: 0;
}
.clearfix:after {
  clear: both;
}
.hide-text {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}
.input-block-level {
  display: block;
  width: 100%;
  min-height: 30px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.pagination {
  margin: 20px 0;
}
.pagination ul {
  display: inline-block;
  *display: inline;
  /* IE7 inline-block hack */
  -webkit-padding-start: 0px !important;
  *zoom: 1;
  margin-left: 0;
  margin-bottom: 0;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
}
.pagination ul > li {
  display: inline;
}
.pagination ul > li > a,
.pagination ul > li > span {
  float: left;
  padding: 4px 12px;
  line-height: 20px;
  text-decoration: none;
  background-color: #ffffff;
  border: 1px solid #777;
  border-left-width: 0;
}
#content .pagination ul  li  a:hover,
.pagination ul > .active > a,
.pagination ul > .active > span {
  color: #fff !important ;
  background-color: #FF0505;
}
.pagination a:hover{
  color: blue !important;
}
.pagination ul > .active > a,
.pagination ul > .active > span {
  color: #FFFFFF;
  cursor: default;
}
.pagination ul > .disabled > span,
.pagination ul > .disabled > a,
.pagination ul > .disabled > a:hover {
  color: #999999;
  background-color: transparent;
  cursor: default;
}
.pagination ul > li:first-child > a,
.pagination ul > li:first-child > span {
  border-left-width: 1px;
  -webkit-border-top-left-radius: 4px;
  -moz-border-radius-topleft: 4px;
  border-top-left-radius: 4px;
  -webkit-border-bottom-left-radius: 4px;
  -moz-border-radius-bottomleft: 4px;
  border-bottom-left-radius: 4px;
}
.pagination ul > li:last-child > a,
.pagination ul > li:last-child > span {
  -webkit-border-top-right-radius: 4px;
  -moz-border-radius-topright: 4px;
  border-top-right-radius: 4px;
  -webkit-border-bottom-right-radius: 4px;
  -moz-border-radius-bottomright: 4px;
  border-bottom-right-radius: 4px;
}
.pagination-centered {
  text-align: center;
}
.pagination-right {
  text-align: right;
}
.pagination-large ul > li > a,
.pagination-large ul > li > span {
  padding: 11px 19px;
  font-size: 17.5px;
}
.pagination-large ul > li:first-child > a,
.pagination-large ul > li:first-child > span {
  -webkit-border-top-left-radius: 6px;
  -moz-border-radius-topleft: 6px;
  border-top-left-radius: 6px;
  -webkit-border-bottom-left-radius: 6px;
  -moz-border-radius-bottomleft: 6px;
  border-bottom-left-radius: 6px;
}
.pagination-large ul > li:last-child > a,
.pagination-large ul > li:last-child > span {
  -webkit-border-top-right-radius: 6px;
  -moz-border-radius-topright: 6px;
  border-top-right-radius: 6px;
  -webkit-border-bottom-right-radius: 6px;
  -moz-border-radius-bottomright: 6px;
  border-bottom-right-radius: 6px;
}
.pagination-mini ul > li:first-child > a,
.pagination-small ul > li:first-child > a,
.pagination-mini ul > li:first-child > span,
.pagination-small ul > li:first-child > span {
  -webkit-border-top-left-radius: 3px;
  -moz-border-radius-topleft: 3px;
  border-top-left-radius: 3px;
  -webkit-border-bottom-left-radius: 3px;
  -moz-border-radius-bottomleft: 3px;
  border-bottom-left-radius: 3px;
}
.pagination-mini ul > li:last-child > a,
.pagination-small ul > li:last-child > a,
.pagination-mini ul > li:last-child > span,
.pagination-small ul > li:last-child > span {
  -webkit-border-top-right-radius: 3px;
  -moz-border-radius-topright: 3px;
  border-top-right-radius: 3px;
  -webkit-border-bottom-right-radius: 3px;
  -moz-border-radius-bottomright: 3px;
  border-bottom-right-radius: 3px;
}
.pagination-small ul > li > a,
.pagination-small ul > li > span {
  padding: 2px 10px;
  font-size: 11.9px;
}
.pagination-mini ul > li > a,
.pagination-mini ul > li > span {
  padding: 0 6px;
  font-size: 10.5px;
}




.s_switcher {
  <?php if ($language == 'ltr'): ?>
  padding-right: 22px;
  text-align: left;
  background: #f6f6f6 url(../images/dropdown.gif) no-repeat 100% 6px;
  <?php else: ?>
  padding-left: 22px;
  text-align: right;
  background: #f6f6f6 url(../images/dropdown.gif) no-repeat 5px 6px;
  <?php endif; ?>
  z-index: 10;
  position: absolute;
  font-size: 11px;
  border-top: 1px solid #e9e9e9;
  border-left: 1px solid #e9e9e9;
  border-right: 1px solid #f6f6f6;
  border-bottom: 1px solid #f6f6f6;
  border-radius: 3px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
}
.s_switcher ul {
  margin-bottom: 0;
}
.s_switcher span.s_selected,
.s_switcher li,
.s_switcher li a
{
  display: block;
  line-height: 18px;
}
.s_switcher span.s_selected,
.s_switcher li a
{
  <?php if ($language == 'ltr'): ?>
  padding: 2px 0 2px 7px;
  <?php else: ?>
  padding: 2px 7px 2px 0;
  <?php endif; ?>
}
.s_switcher span.s_selected {
  cursor: default;
  color: #999;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}
.s_switcher .s_options {
  position: absolute;
  cursor: pointer;
  display: none;
  width: 100%;
  left: -1px;
  background: #f6f6f6;
  border-left: 1px solid #e9e9e9;
  border-right: 1px solid #f6f6f6;
  border-bottom: 1px solid #f6f6f6;
  border-radius: 0 0 3px 3px;
  -moz-border-radius: 0 0 3px 3px;
  -webkit-border-radius: 0 0 3px 3px;
}
.s_switcher:hover {
  padding-bottom: 1px;
  border-bottom: none;
  border-radius: 3px 3px 0 0;
  -moz-border-radius: 3px 3px 0 0;
  -webkit-border-radius: 3px 3px 0 0;
}
.s_switcher img {
  <?php if ($language == 'ltr'): ?>
  margin: -2px 3px 0 0;
  <?php else: ?>
  margin: -2px 0 0 3px;
  <?php endif; ?>
  display: inline;
  vertical-align: middle;
}

.s_button_remove,
.noty_close
{
  position: absolute;
  display: block;
  width: 11px;
  height: 11px;
  background-image: url(../images/sprite.png);
  background-position: 0 -498px;
  background-repeat: no-repeat;
  background-color: #ccc;
}

.s_main_col .s_grid_view,
.s_col_12 .s_grid_view,
.s_col_9 .s_grid_view
{
  position: relative;
  margin: 0 -10px;
}

.s_category_thumb {
  <?php if ($language == 'ltr'): ?>
  float: left;
  margin: 0 20px 30px 0;
  <?php else: ?>
  float: right;
  margin: 0 0 30px 20px;
  <?php endif; ?>
}

.s_subcategories {
  margin-bottom: 30px !important;
}
.s_subcategories ul {
  overflow: hidden;
  padding: 0 10px;
}
.s_subcategories ul li {
  <?php if ($language == 'ltr'): ?>
  float: left;
  <?php else: ?>
  float: right;
  <?php endif; ?>
  width: 31%;
}
.s_subcategory {
  <?php if ($language == 'ltr'): ?>
  float: left;
  <?php else: ?>
  float: right;
  <?php endif; ?>
  width: 100px;
  margin: 0 10px 20px 10px;
  text-align: center;
}
.s_single_col .s_subcategory:nth-child(8n+1),
.s_2_cols .s_subcategory:nth-child(6n+1)
{
  <?php if ($language == 'ltr'): ?>
  clear: left;
  <?php else: ?>
  clear: right;
  <?php endif; ?>
}
.s_subcategories img {
  display: block;
  margin-bottom: 10px;
}

.s_module_content:hover,
.s_listing.s_grid_view:hover
{
  position: relative !important;
  z-index: 10 !important;
}

.s_actions {
  direction: ltr;
}

/*** PRICE TEXT ***/

.s_plain .s_price, .s_plain .s_price * {
  background: none !important;
}
.s_plain .s_old_price {
  margin-right: 5px;
  line-height: 16px;
  text-decoration: line-through;
  opacity: 0.8;
}
.s_item .s_plain .s_price {
  margin-bottom: 0;
}
.s_price_holder.s_size_1.s_plain .s_price {
  font-size: 12px;
}
.s_price_holder.s_size_2.s_plain .s_price {
  font-size: 14px;
}
.s_price_holder.s_size_3.s_plain .s_price {
  font-size: 18px;
}
.s_price_holder.s_size_4.s_plain .s_price {
  font-size: 26px;
}

/*** PRICE TAG ***/

.s_label .s_price {
  display: block;
  margin: 0;
  letter-spacing: -1px;
  text-align: center;
  font-weight: normal;
  -moz-border-radius: 60px;
  -webkit-border-radius: 60px;
  border-radius: 60px;
}

.s_label1 .s_price1 {
  display: block;
  margin-top: 10px;
  letter-spacing: -1px;
  font-weight: normal;
  -moz-border-radius: 60px;
  -webkit-border-radius: 60px;
  border-radius: 60px;
}

.s_label .s_old_price {
  display: block;
  line-height: 16px;
  text-decoration: line-through;
  font-size: 11px;
  opacity: 0.8;
}
.s_label .s_old_price .s_currency {
  display: none !important;
}
.s_label .s_price .s_currency.s_before {
  position: relative;
  top: -1px;
  display: inline;
  margin-right: 1px;
}
.s_label .s_price .s_currency.s_after {
  display: block;
}
.s_label .s_price .s_currency {
  opacity: 0.7;
}
.s_item .s_price_holder.s_label  {
  z-index: 1;
  position: absolute;
}
.s_list_view .s_item .s_price_holder.s_label  {
  top: 10px;
  <?php if ($language == 'ltr'): ?>
  right: 10px;
  <?php else: ?>
  left: 10px;
  <?php endif; ?>
}

/*** PRICE TAG size 1 ***/

.s_price_holder.s_size_1.s_label .s_price  {
  width: 46px;
  height: 33px;
  padding-top: 13px;
  font-size: 15px;
  background-image: url(../images/price_0.png);
  background-repeat: no-repeat;
  background-position: center;
}
.s_price_holder.s_size_1.s_label .s_promo_price  {
  padding-top: 1px;
  height: 45px;
}
.s_price_holder.s_size_1.s_label .s_old_price {
  margin-bottom: -4px;
}
.s_price_holder.s_size_1.s_label .s_currency.s_before {
  margin-left: -2px;
  font-size: 80%;
}
.s_price_holder.s_size_1.s_label .s_currency.s_after {
  margin-top: -7px;
  font-size: 70%;
}
.s_grid_view .s_item .s_price_holder.s_size_1.s_label {
  top: -57px;
}
.s_grid_view.size_2 .s_item .s_price_holder.s_size_1.s_label {
  right: -10px;
}
.s_grid_view .s_item .s_price_holder.s_size_1.s_label,
.s_2_cols .s_grid_view .s_item .s_price_holder.s_size_1.s_label
{
  right: 0;
}

/*** PRICE TAG size 2 ***/

.s_price_holder.s_size_2.s_label .s_price {
  width: 66px;
  height: 43px;
  padding-top: 23px;
  font-size: 20px;
  background-image: url(../images/price_1.png);
  background-repeat: no-repeat;
  background-position: center;
}

.s_price_holder.s_size_2.s_label1 .s_price1 {
  width: 66px;
  height: 43px;
  padding-top: 23px;
  font-size: 20px;
  background-image: url(../images/price_1.png);
  background-repeat: no-repeat;
  background-position: center;
}

.s_price_holder.s_size_2.s_label .s_promo_price {
  padding-top: 10px;
  height: 56px;
}
.s_price_holder.s_size_2.s_label .s_currency.s_before {
  margin-left: -2px;
  font-size: 80%;
}
.s_price_holder.s_size_2.s_label .s_currency.s_after {
  font-size: 70%;
}
.s_price_holder.s_size_2.s_label .s_promo_price .s_currency.s_after {
  margin-top: -3px;
}
.s_grid_view .s_item .s_price_holder.s_size_2.s_label {
  top: -77px;
}
.s_grid_view.size_2 .s_item .s_price_holder.s_size_2.s_label {
  right: -10px;
}
.s_grid_view .s_item .s_price_holder.s_size_2.s_label,
.s_2_cols .s_grid_view .s_item .s_price_holder.s_size_2.s_label
{
  right: 0;
}

/*** PRICE TAG size 3 ***/

.s_price_holder.s_size_3.s_label .s_price {
  width: 84px !important;
  height: 52px !important;
  padding-top: 32px !important;
  text-indent: -3px !important;
  font-size: 24px !important;
  background-image: url(../images/price_4.png) !important;
  background-repeat: no-repeat;
  background-position: center;
}

.s_price11 {
  width: 84px !important;
  height: 84px !important;
  text-indent: -3px !important;
  font-size: 24px !important;
  left: 15px;
  margin-top:-30px;
  background-image: url(../images/re.png) !important;
  color: #fff;
  font-size: 16px;
  position: relative;
  top: 132px;
  text-align: center;
}

.s_price13 {
  width: 84px !important;
  height: 84px !important;
  text-indent: -3px !important;
  font-size: 24px !important;
  left: 15px;
  background-image: url(../images/re1.png) !important;
  color: #fff;
  font-size: 16px;
  position: relative;
  top: 100px;
  text-align: center;
}

.s_price12 {
  width: 84px !important;
  height: 84px !important;
  text-indent: -3px !important;
  font-size: 24px !important;
  margin-left: -20px;
  margin-top:-132px;
  background-image: url(../images/re.png) !important;
  color: #fff;
  font-size: 16px;
  position: relative;
  top: 132px;
  text-align: center;
}

.s_price14 {
  width: 84px !important;
  height: 84px !important;
  text-indent: -3px !important;
  font-size: 24px !important;
  margin-left: -20px;
  margin-top:-132px;
  background-image: url(../images/re1.png) !important;
  color: #fff;
  font-size: 16px;
  position: relative;
  top: 132px;
  text-align: center;
  z-index: 1;
}

.s_price_holder.s_size_3.s_label .s_promo_price {
  height: 78px !important;
  padding-top: 6px !important;
}
.s_price_holder.s_size_3.s_label .s_old_price {
  padding: 5px 0 !important;
  font-size: 12px !important;
}
.s_price_holder.s_size_3.s_label .s_currency.s_before {
  text-indent: -1px !important;
  font-size: 80%;
}
.s_price_holder.s_size_3.s_label .s_currency.s_after {
  padding-top: 2px;
  font-size: 70%;
}
.s_price_holder.s_size_3.s_label .s_promo_price .s_currency.s_after {
}
.s_grid_view .s_price_holder.s_size_3.s_label {
  top: -200px;
  right: 0;
}

/*** PRICE TAG size 4 ***/

.s_price_holder.s_size_4.s_label .s_price {
  width: 100px;
  height: 60px;
  padding-top: 40px;
  font-size: 28px;
  background-image: url(../images/price_3.png);
  background-repeat: no-repeat;
  background-position: center;
}
.s_price_holder.s_size_4.s_label .s_promo_price {
  height: 85px;
  padding-top: 15px;
}
.s_price_holder.s_size_4.s_label .s_old_price {
  padding-bottom: 10px;
  font-size: 14px;
}
.s_price_holder.s_size_4.s_label .s_currency.s_before {
  text-indent: -1px;
  font-size: 26px;
}
.s_price_holder.s_size_4.s_label .s_currency.s_after {
  padding-top: 8px;
  font-size: 18px;
}


/***** PROCUCT LISTING *************/

.s_item {
  position: relative;
  z-index: 1;
}
<?php if ($is_touch == '0'): ?>
.s_item:hover {
  z-index: 10;
  background: #fff;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.3);
  -o-box-shadow: 0 0 30px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0 0 30px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0 0 30px rgba(0, 0, 0, 0.3);
}
<?php endif; ?>
.s_item .s_item_info {
  position: relative;
}
.s_item h3 {
  font-size: 12px;
  font-weight: bold;
}
.s_item p.s_model {
  margin-top: -10px;
  margin-bottom: 10px;
  color: #999;
  font-size: 11px;
}
.s_item .s_description {
  margin-bottom: 10px;
  <?php if ($language == 'ltr'): ?>
  text-align: left;
  <?php else: ?>
  text-align: right;
  <?php endif; ?>
}
.s_item .s_rating {
  display: block;
  border-top: 1px solid #fff;
  border-bottom: 3px solid #fff;
}
.s_button_add_to_cart {
  overflow: hidden;
  display: block;
}
.s_button_add_to_cart .s_icon_16 {
  <?php if ($language == 'ltr'): ?>
  padding-left: 22px !important;
  <?php else: ?>
  padding-right: 22px !important;
  <?php endif; ?>
}
.s_button_add_to_cart .s_icon {
  margin-top: -9px;
  background: url(../images/sprite.png) no-repeat 0 -472px;
}
.s_item .s_button_add_to_cart {
  margin-bottom: 10px;
}
.s_item .s_button_wishlist,
.s_item .s_button_compare
{
  margin-left: 10px;
  color: #999;
}

.s_list_view {
  margin-top: -20px;
}
.s_list_view .s_item {
  clear: both;
  padding: 14px 0 15px 0;
  border-top: 1px solid #eee;
}
.s_list_view .s_item:hover {
  margin: 0 -15px -1px -15px;
  padding: 14px 15px 16px 15px;
  border-top: 1px solid #fff;
}
.s_list_view .s_item:first-child,
.s_list_view .s_item:first-child:hover
{
  padding-top: 15px;
  border-top: none;
}
.s_list_view .s_item .s_thumb {
  padding-left: 10px;
  padding-right: 10px;
}
.s_list_view .s_item .s_item_info {
  padding-top: 15px;
  padding-bottom: 15px;
}
.s_list_view .s_item h3 {
  margin-bottom: 10px;
  font-size: 14px;
}
.s_list_view .s_item .s_actions {
  <?php if ($language == 'ltr'): ?>
  text-align: right;
  <?php else: ?>
  text-align: left;
  <?php endif; ?>
}
.s_list_view .s_item .s_button_add_to_cart {
  <?php if ($language == 'ltr'): ?>
  float: left;
  <?php else: ?>
  float: right;
  <?php endif; ?>
}
.s_list_view .s_item.last {
  border-bottom: none;
}

.s_grid_view .s_item {
  <?php if ($language == 'ltr'): ?>
  float: left;
  <?php else: ?>
  float: right;
  <?php endif; ?>
  margin-left: 10px;
  margin-right: 10px;
  margin-bottom: 20px;
  text-align: center;
}
<?php if ($is_touch == '0'): ?>
.s_grid_view .s_item:hover {
  margin-top: -20px;
  margin-bottom: 0;
  margin-right: -10px;
  margin-left: -10px;
  padding: 20px;
}
<?php endif; ?>
.s_grid_view .s_item .s_thumb {
  float: none;
}
.s_grid_view .s_item .s_description {
  display: none !important;
}
.s_grid_view .s_item .s_rating {
  margin: 10px auto 0 auto;
}
.s_grid_view .s_item_short .s_button_add_to_cart {
  margin-bottom: 0;
}
.s_grid_view .s_item_short:hover {
  margin: -20px -10px -21px -10px;
}
.s_grid_view .s_item h3 {
  margin-bottom: 0;
}
.s_grid_view .s_item h3 a {
  display: block;
  border-top: 1px solid #eee;
}
.s_grid_view .s_item:hover h3 a {
  border-top: 1px solid #ccc;
}
.s_grid_view .s_item .s_actions {
  overflow: hidden;
  clear: both;
  <?php if ($is_touch == '0'): ?>
  display: none;
  <?php endif; ?>
  width: auto;
  text-align: center;
  margin: 0 -10px !important;
  padding: 10px 10px 0 0;
  font-size: 11px;
  color: #999;
}
.s_grid_view .s_item .s_actions a {
  margin-left: 10px;
}
.s_grid_view .s_item .s_actions .s_button_add_to_cart:last-child {
  margin-bottom: 0;
}
.s_grid_view .s_item .s_actions .s_button_wishlist,
.s_grid_view .s_item .s_actions .s_button_compare
{
  position: relative;
  left: -2px;
  display: inline-block;
  white-space: nowrap;
}

/***** PROCUCT size 1 ******/

.size_1 .s_item .s_thumb {
  padding: 20px;
}
.s_list_view.size_1 .s_item .s_thumb {
  max-width: 180px;
  padding: 10px 20px;
}
.s_list_view.size_1 .s_item_info {
  <?php if ($language == 'ltr'): ?>
  padding-right: 110px;
  margin-left: 230px;
  <?php else: ?>
  padding-left: 110px;
  margin-right: 230px;
  <?php endif; ?>
}
.s_grid_view.size_1 .s_item {
  width: 220px;
}
.s_grid_view.size_1 .s_item h3 {
  font-size: 14px;
}
.s_grid_view.size_1 .s_item h3 a {
  padding-top: 19px;
}
.s_single_col .s_grid_view.size_1 .s_item:nth-of-type(4n+1),
.s_2_cols .s_grid_view.size_1 .s_item:nth-of-type(3n+1)
{
  <?php if ($language == 'ltr'): ?>
  clear: left;
  <?php else: ?>
  clear: right;
  <?php endif; ?>
}

/***** PROCUCT size 2 ******/

.s_grid_view.size_2 .s_item {
  width: 140px;
}
.s_2_cols .s_grid_view.size_2 .s_item {
  width: 160px;
}
.s_grid_view.size_2 .s_item .s_thumb {
  padding: 0 0 10px 0;
}
.s_2_cols .s_grid_view.size_2 .s_item .s_thumb {
  padding: 10px;
}
.s_grid_view.size_2 .s_item h3 a {
  padding-top: 9px;
}
.s_list_view.size_2 .s_item .s_thumb {
  max-width: 140px;
  padding: 10px;
}
.s_list_view.size_2 .s_item_info {
  <?php if ($language == 'ltr'): ?>
  padding-right: 95px;
  margin-left: 180px;
  <?php else: ?>
  padding-left: 95px;
  margin-right: 180px;
  <?php endif; ?>
}
.s_single_col .s_grid_view.size_2 .s_item:nth-of-type(6n+1),
.s_2_cols .s_grid_view.size_2 .s_item:nth-of-type(4n+1)
{
  <?php if ($language == 'ltr'): ?>
  clear: left;
  <?php else: ?>
  clear: right;
  <?php endif; ?>
}

/***** PROCUCT Side Column ******/

.s_item.s_size_1 {
  clear: both;
  margin-bottom: 20px;
}
.s_item.s_size_1 .s_thumb {
  <?php if ($language == 'ltr'): ?>
  float: left;
  margin: 0 10px 0 0;
  <?php else: ?>
  float: right;
  margin: 0 0 0 10px;
  <?php endif; ?>
}
.s_item.s_size_1 h3,
.s_item.s_size_1 p,
.s_item.s_size_1 .s_rating_holder
{
  clear: none;
  margin: 0;
  <?php if ($language == 'ltr'): ?>
  padding-left: 48px;
  <?php else: ?>
  padding-right: 48px;
  <?php endif; ?>
  font-size: 11px;
}
.s_item .s_old {
  color: #666;
  text-decoration: line-through;
}
.s_item.s_size_1 .s_rating_holder {
  height: 18px;
  margin-bottom: 2px;
  line-height: 18px;
  font-size: 11px;
}
.s_item.s_size_1 p.s_rating {
  margin-top: 4px;
  padding: 0;
}
.s_side_col .s_item.s_size_1:hover {
  margin: -10px -10px 10px -10px !important;
  padding: 10px;
}


.s_cart_items {
  width: 100%;
  margin-bottom: 0;
}
.s_cart_items a.left {
  <?php if ($language == 'rtl'): ?>
  float: right !important;
  <?php endif; ?>
}
.s_cart_items td {
  padding: 10px 0;
  <?php if ($language == 'ltr'): ?>
  text-align: left;
  <?php else: ?>
  text-align: right;
  <?php endif; ?>
  vertical-align: top;
  font-size: 12px;
  border-top: 1px solid #eee;
}
.s_cart_items tr:first-child td {
  padding-top: 0;
  border-top: none;
}
.s_cart_items .s_cart_number,
.s_cart_items .s_cart_price
{
  padding-left: 10px;
  text-align: right;
}
.s_cart_items .s_button_remove {
  position: static;
  <?php if ($language == 'ltr'): ?>
  float: right;
  <?php else: ?>
  float: left;
  <?php endif; ?>
}


.s_review {
  margin-bottom: 15px;
  padding-bottom: 15px;
  border-bottom: 1px solid #eee;
}
.s_review .s_author {
  float: left;
}
.s_review .s_author small {
  margin-left: 4px;
  font-size: 10px;
  color: #999;
}
.s_review .s_rating,
.s_review .s_average
{
  float: left;
  margin-left: 5px;
}
.s_listing .s_review.last {
  margin-bottom: 0 !important;
  border-bottom: none !important;
}


.s_address {
  padding: 20px;
  font-size: 14px;
  <?php if ($language == 'ltr'): ?>
  margin: 0 30px 30px 0;
  border-left: 10px solid #eee;
  <?php else: ?>
  margin: 0 0 30px 30px;
  border-right: 10px solid #eee;
  <?php endif; ?>
}
form.s_address {
  padding: 11px 20px;
}
.s_address label,
.s_address input,
.s_address select
{
  font-size: 13px;
}

.s_single_col .s_orders_listing {
  <?php if ($language == 'ltr'): ?>
  padding-left: 40px;
  <?php else: ?>
  padding-right: 40px;
  <?php endif; ?>
}
.s_2_cols .s_orders_listing {
  <?php if ($language == 'ltr'): ?>
  padding-left: 20px;
  <?php else: ?>
  padding-right: 20px;
  <?php endif; ?>
}
.s_single_col .s_orders_listing .s_col {
  width: 33.33%;
}
.s_2_cols .s_orders_listing .s_col {
  width: 50%;
}
.s_single_col .s_orders_listing  > :nth-of-type(3n+1),
.s_2_cols .s_orders_listing > :nth-of-type(2n+1)
{
  position: relative;
  <?php if ($language == 'ltr'): ?>
  clear: left;
  <?php else: ?>
  clear: right;
  <?php endif; ?>
}
.s_single_col .s_orders_listing  > :nth-of-type(3n+1) {
  <?php if ($language == 'ltr'): ?>
  margin-left: -40px;
  <?php else: ?>
  margin-right: -40px;
  <?php endif; ?>
}
.s_2_cols .s_orders_listing > :nth-of-type(2n+1) {
  <?php if ($language == 'ltr'): ?>
  margin-left: -20px;
  <?php else: ?>
  margin-right: -20px;
  <?php endif; ?>
}

.s_order {
  margin-bottom: 20px;
  padding: 15px;
  border: 5px solid #eee !important;
}

.s_order .s_id,
.s_order .s_id *,
.s_order .s_status,
.s_order .s_status *,
.s_order .s_total,
.s_order .s_total *
{
  letter-spacing: -1px;
  font-size: 20px;
}

.s_order .s_id {
  <?php if ($language == 'ltr'): ?>
  float: left;
  <?php else: ?>
  float: right;
  <?php endif; ?>
}
.s_order .s_status {
  <?php if ($language == 'ltr'): ?>
  float: right !important;
  <?php else: ?>
  float: left !important;
  <?php endif; ?>
}
.s_order dt,
.s_order dd
{
  <?php if ($language == 'ltr'): ?>
  float: left;
  <?php else: ?>
  float: right;
  <?php endif; ?>
  margin-bottom: 0;
  font-size: 11px;
}
.s_order dt {
  <?php if ($language == 'ltr'): ?>
  clear: left;
  padding-right: 2%;
  <?php else: ?>
  clear: right;
  padding-left: 2%;
  <?php endif; ?>
  width: 45%;
}
.s_order dd {
  width: 52%;
}
.container_16 .s_order dt {
  width: 45%;
}
.container_16 .s_order dd {
  width: 52%;
}
.s_order .s_total {
  position: relative;
  margin-top: 4px;
  margin-bottom: 0;
}
.s_order .s_total,
.s_order .s_total *
{
  font-size: 24px;
}
<?php if ($language == 'rtl'): ?>
.s_orders_listing .s_order .s_main_color.right {
  float: left !important;
}
.s_orders_listing .s_order .s_total {
  float: right !important;
}
<?php endif; ?>

.s_cart_holder .s_total {
  <?php if ($language == 'ltr'): ?>
  text-align: right;
  <?php else: ?>
  text-align: left;
  <?php endif; ?>
  font-size: 11px;
}
.s_cart_holder .s_total .left {
  <?php if ($language == 'rtl'): ?>
  float: right !important;
  <?php endif; ?>
}
.s_cart_holder .s_button_1 {
  float: none !important;
  display: inline-block !important;
}
.s_cart_holder .s_button_1 .s_text {
  height: 18px;
  line-height: 17px;
  text-transform: none;
  font-size: 11px;
  font-style: "Open Sans","Lucida Grande",Arial,Helvetica,sans-serif;
}


.s_box {
  margin-bottom: 19px;
  border-bottom: 1px solid #ddd;
}
.s_box h2,
.s_box_1 h2
{
  padding: 0;
  font-size: 18px;
}
.s_box_1 {
  margin-bottom: 25px;
  padding: 10px 15px 15px 15px;
  border: 5px solid #ddd;
}
.s_box_1 > :last-child {
  margin-bottom: 0;
}
.s_box_1 h2 {
  font-size: 18px;
}


.s_info_page ol {
  padding-left: 15px;
  list-style: decimal;
}

/*****************************************************/
/******   O L D    M A R K U P   *********************/
/*****************************************************/
.box {
  margin-bottom: 19px;
  border-bottom: 1px solid #ddd;
}
.box .box-heading {
  margin: 0 0 17px 0;
  word-spacing: 2px;
  font-size: 18px;
}
.box .box-heading img {
  display: inline;
  margin: -3px 10px 0 0;
  vertical-align: middle;
}
#right_col .box {
  <?php if ($language == 'ltr'): ?>
  margin-left: 10px;
  <?php else: ?>
  margin-right: 10px;
  <?php endif; ?>
}
#left_col .box {
  <?php if ($language == 'ltr'): ?>
  margin-right: 10px;
  <?php else: ?>
  margin-left: 10px;
  <?php endif; ?>
}


.buttons table {
  width: 100%;
}
.buttons .button {
  cursor: pointer;
  float: right;
  margin-left: 10px;
  padding: 3px;
  border: none;
}
.buttons .button,
.buttons .button span
{
  position: relative;
  display: block;
  text-transform: uppercase;
  letter-spacing: -1px;
  color: #fff;
}
.buttons input[type=submit].button,
.buttons input[type=button].button
{
  height: 36px;
  padding: 0 10px 2px 10px;
  line-height: 36px;
  box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.3) inset,
    -1px -1px 0 rgba(255, 255, 255, 0.3) inset;
  -moz-box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.3) inset,
    -1px -1px 0 rgba(255, 255, 255, 0.3) inset;
  -webkit-box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.3) inset,
    -1px -1px 0 rgba(255, 255, 255, 0.3) inset;
  -o-box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.3) inset,
    -1px -1px 0 rgba(255, 255, 255, 0.3) inset;
}
.buttons .button span {
  height: 28px;
  padding: 0 10px;
  line-height: 28px;
  border: 1px solid rgba(255, 255, 255, 0.3);
}
.buttons .button:hover span {
  border: 1px solid #fff;
  border: 1px solid rgba(255, 255, 255, 0.5);
}
.buttons input[type=submit].button:hover,
.buttons input[type=button].button:hover
{
  box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.5) inset,
    -1px -1px 0 rgba(255, 255, 255, 0.5) inset;
  -moz-box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.5) inset,
    -1px -1px 0 rgba(255, 255, 255, 0.5) inset;
  -webkit-box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.5) inset,
    -1px -1px 0 rgba(255, 255, 255, 0.5) inset;
  -o-box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.5) inset,
    -1px -1px 0 rgba(255, 255, 255, 0.5) inset;
}
.buttons table td[align=left] .button {
  background-color: #ddd;
}
.buttons table td[align=left] .button span,
.buttons table td[align=left] input[type=submit].button,
.buttons table td[align=left] input[type=button].button
{
  color: #666;
}
.buttons table td[align=left] input[type=submit].button,
.buttons table td[align=left] input[type=button].button
{
  border: 3px solid #ddd;
  box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.7) inset,
    -1px -1px 0 rgba(255, 255, 255, 0.7) inset;
  -moz-box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.7) inset,
    -1px -1px 0 rgba(255, 255, 255, 0.7) inset;
  -webkit-box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.7) inset,
    -1px -1px 0 rgba(255, 255, 255, 0.7) inset;
  -o-box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.7) inset,
    -1px -1px 0 rgba(255, 255, 255, 0.7) inset;
}
.buttons table td[align=left] .button:hover span {
  color: #333;
  border: 1px solid #fff;
  border: 1px solid rgba(255, 255, 255, 0.7);
}
.buttons table td[align=left] input[type=submit].button:hover,
.buttons table td[align=left] input[type=button].button:hover
{
  box-shadow: 1px 1px 0 #fff inset,
    -1px -1px 0 #fff inset;
  -moz-box-shadow: 1px 1px 0 #fff inset,
    -1px -1px 0 #fff inset;
  -webkit-box-shadow: 1px 1px 0 #fff inset,
    -1px -1px 0 #fff inset;
  -o-box-shadow: 1px 1px 0 #fff inset,
    -1px -1px 0 #fff inset;
}

/*****************************************************/
/******   L A Y O U T   ******************************/
/*****************************************************/
body.s_layout_fixed {
  padding: 0 0;
  background-repeat: repeat;
  background-position: top left;
}
body.s_layout_fixed #wrapper {
  width: 998px;
  margin: 0 auto;
  background: #fff;
  border: 1px solid #fff;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
  -o-box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
  -moz-box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
  -webkit-box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
 
}

#header,
#header .s_col_12
{
  z-index: 20;
  position: relative;
}


#site_logo {
  display: block;
  <?php if ($language == 'ltr'): ?>
  float: left;
  margin: 30px 10px 30px 0;
  <?php else: ?>
  float: right;
  margin: 30px 0 30px 10px;
  <?php endif; ?>
  text-align: center;
}


#top_navigation {
  z-index: 12;
  position: relative;
  top: 29px;
}


#language_form,
#currency_form
{
  <?php if ($language == 'ltr'): ?>
  float: right;
  margin-right: 10px;
  <?php else: ?>
  float: left;
  margin-left: 10px;
  <?php endif; ?>
}
#language_switcher,
#currency_switcher
{
  position: relative;
  width: 100px;
}

#site_search {
  <?php if ($language == 'ltr'): ?>
  float: right;
  <?php else: ?>
  float: left;
  <?php endif; ?>
}
.s_dynamic #site_search {
  margin-top: -5px;
}
#search_bar {
  z-index: 100;
  position: absolute;
  <?php if ($language == 'ltr'): ?>
  right: 43px;
  <?php else: ?>
  left: 43px;
  <?php endif; ?>
  top: -13px;
  display: none;
  padding: 10px;
  white-space: nowrap;
  background: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  -o-box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}
#search_bar input {
  <?php if ($language == 'ltr'): ?>
  float: left;
  margin: 0 10px 0 0;
  <?php else: ?>
  float: right;
  margin: 0 0 0 10px;
  <?php endif; ?>
  width: 200px;
  padding-top: 3px;
  padding-bottom: 3px;
}
#search_bar .s_button_1 {
  float: none !important;
  <?php if ($language == 'ltr'): ?>
  margin-left: 221px;
  <?php else: ?>
  margin-right: 221px;
  margin-left: 0 !important;
  <?php endif; ?>
}

#site_search .s_search_button {
  display: block;
  width: 32px;
  height: 32px;
  background-image: url(../images/sprite.png);
  background-repeat: no-repeat;
  background-position: 0 -146px;
}

.s_static #site_search input {
  <?php if ($language == 'ltr'): ?>
  float: left;
  <?php else: ?>
  float: right;
  <?php endif; ?>
  width: 150px;
  height: 18px;
  margin-top: -1px;
  padding: 3px 4px;
  font-size: 11px;
}
.s_static #site_search .s_search_button {
  <?php if ($language == 'ltr'): ?>
  float: left;
  margin: -4px 0 0 10px;
  <?php else: ?>
  float: right;
  margin: -4px 10px 0 0;
  <?php endif; ?>
}


#welcome_message {
  margin-bottom: 10px;
  <?php if ($language == 'ltr'): ?>
  text-align: right;
  <?php else: ?>
  text-align: left;
  <?php endif; ?>
  font-size: 11px;
  color: #999;
}
#system_navigation {
  margin: 74px 0 0px 0;
  <?php if ($language == 'ltr'): ?>
  clear: right;
  text-align: right;
  <?php else: ?>
  clear: left;
  text-align: left;
  <?php endif; ?>
}
#system_navigation ul.s_list_1 {
  margin-bottom: 0;
  
}
#system_navigation ul.s_list_1 li {
  display: inline-block;
  <?php if ($language == 'ltr'): ?>
  margin-left: 10px;
  background-position: 0 -2px;
  <?php else: ?>
  margin-right: 10px;
  background-position: 100% -2px;
  <?php endif; ?>
  font-family: "Open Sans","Lucida Grande",Arial,Helvetica,sans-serif;
  font-size: 13px;
  
}

#vladcat {
	font-family: "Open Sans","Lucida Grande",Arial,Helvetica,sans-serif;
	font-size: 13px;
}

#main_navigation {
  z-index: 10;
  position: relative;
}
#main_navigation > .s_wrap > .s_col_12 {
  position: relative;
  border-top: 1px solid #eee;
}
#categories {
  clear: both;
  <?php if ($language == 'ltr'): ?>
  float: left;
  <?php else: ?>
  float: right;
  <?php endif; ?>
  padding: 13px 0 0 0;
  font-family: "Open Sans","Lucida Grande",Arial,Helvetica,sans-serif;
}
#categories > ul {
  margin-bottom: 14px;
  font-family: "Open Sans","Lucida Grande",Arial,Helvetica,sans-serif;
}
#categories > ul > li,
#categories > ul > li > a
{
  height: 32px;
  line-height: 32px;
  font-family: "Open Sans","Lucida Grande",Arial,Helvetica,sans-serif;
}
#categories > ul > li > a {
  padding: 0 10px;
  font-family: "Open Sans","Lucida Grande",Arial,Helvetica,sans-serif;
  font-weight: 300;
}
#categories .s_submenu,
#cart_menu .s_submenu
{
  width: 400px;
  <?php if ($language == 'ltr'): ?>
  padding: 0 0 0 20px;
  <?php else: ?>
  padding: 0 20px 0 0;
  <?php endif; ?>
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  -o-box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  -ms-box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}
#categories .s_submenu h3 {
  <?php if ($language == 'ltr'): ?>
  margin: 0 20px 0 0;
  <?php else: ?>
  margin: 0 0 0 20px;
  <?php endif; ?>
  padding: 15px 0 5px 0;
  line-height: 30px;
  text-transform: uppercase;
  font-size: 11px !important;
  font-weight: normal;
  color: #bbb;
  border-top: 1px solid #eee;
}
#categories .s_submenu .s_menu_group:first-child h3 {
  border-top: none;
}
#categories li .s_submenu .s_menu_group > ul > li {
  <?php if ($language == 'ltr'): ?>
  float: left;
  margin-right: 20px;
  <?php else: ?>
  float: right;
  margin-left: 20px;
  <?php endif; ?>
  width: 165px;
  line-height: 20px;
}
#categories li .s_submenu .s_menu_group li:hover {
  position: relative;
  z-index: 10;
}
#categories li .s_submenu a {
  display: block;
}
#categories .s_submenu small {
  font-size: 11px;
  color: #999;
}
#categories li .s_submenu .s_menu_group > ul > li:hover {
  position: relative;
}
#categories .s_submenu li:hover > ul {
  display: block;
}
#categories .s_submenu ul ul {
  position: absolute;
  top: -5px;
  left: 96%;
  display: none;
  width: 150px;
  padding: 5px 10px;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  -ms-box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  -o-box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}
#categories .s_submenu .s_menu_group ul ul li {
  width: 140px;
  margin: 0;
}
#categories .s_submenu li.s_selected > a {
	font-weight: bold;
}


#menu_home,
#menu_home a
{
  width: 36px;
  padding: 0 !important;
}
#menu_home {
  overflow: hidden;
}
#menu_home a {
  text-indent: -1000em;
  background-image: url(../images/sprite.png);
  background-repeat: no-repeat;
  background-position: 0 -209px;
  background-color: #ddd;
}

#cart_menu {
  z-index: 10;
  position: absolute;
  top: 20px;
  <?php if ($language == 'ltr'): ?>
  right: 7px;
  <?php else: ?>
  left: 7px;
  <?php endif; ?>
  height: 20px;
}
#cart_menu > a, #key_menu > a {
  position: relative;
  display: block;
  float: left;
  height: 20px;
  <?php if ($language == 'ltr'): ?>
  padding: 0 0 0 32px;
  <?php else: ?>
  padding: 0 32px 0 0;
  <?php endif; ?>
}
#cart_menu:hover > a {
  margin-top: -7px;
  margin-bottom: -7px;
  padding-top: 7px;
  padding-bottom: 7px;
}
#cart_menu .s_icon {
  position: absolute;
  <?php if ($language == 'ltr'): ?>
  left: 0;
  <?php else: ?>
  right: 0;
  <?php endif; ?>
  top: 50%;
  margin-top: -13px;
  display: block;
  width: 23px;
  height: 23px;
  background-image: url(../images/sprite.png);
  background-repeat: no-repeat;
  background-position: 0 -241px;
}
#cart_menu small.s_text {
  <?php if ($language == 'ltr'): ?>
  float: left;
  margin-right: 7px;
  padding-right: 7px;
  border-right: 1px solid #eee;
  <?php else: ?>
  float: right;
  margin-left: 7px;
  padding-left: 7px;
  border-left: 1px solid #eee;
  <?php endif; ?>
  height: 20px;
  line-height: 20px;
  font-weight: bold;
  color: #333;
}
#cart_menu .s_grand_total,
#cart_menu .s_grand_total *
{
  height: 18px;
  line-height: 18px;
  font-size: 24px;
  font-weight: normal;
}
#cart_menu .s_grand_total {
  float: left;
  margin: -6px -7px;
  padding: 7px;
}
#cart_menu .s_submenu {
  <?php if ($language == 'ltr'): ?>
  left: auto;
  right: -7px;
  <?php else: ?>
  right: auto;
  left: -7px;
  <?php endif; ?>
  width: 350px;
  margin-top: 6px;
  padding: 20px;
}
#cart_menu:hover .s_grand_total {
  z-index: 20;
  position: relative;
}

#system_navigation #cart_menu {
  position: relative;
  left: auto;
  right: auto;
  top: auto;
  bottom: 20px;
  <?php if ($language == 'ltr'): ?>
  float: right;
  margin: 27px 0 0 15px;
  padding: 10px 0 10px 10px;
  border-left: 1px solid #eee;
  <?php else: ?>
  float: left;
  margin: 27px 10px 0 0;
  padding: 10px 15px 10px 0;
  border-right: 1px solid #eee;
  <?php endif; ?>
}
#system_navigation #key_menu {
  position: relative;
  float: right;
  right: auto;
  top: auto;
  left: auto;
  margin: 27px 0 0 30px;
  padding: 10px 0 10px 15px;
  bottom: 20px;
}
#system_navigation #cart_menu .s_submenu {
  margin-top: -4px;
}
#intro {
  clear: both;
  margin-bottom: 30px;
  padding-top: 30px;
  <?php if ($border == '0'): ?>
  background: url(../images/intro_texture.png) center no-repeat;
  <?php else: ?>
  background: url(../images/border/box_border_<?php echo $border; ?>.png) top left repeat-x;
  background:
    url(../images/border/box_border_<?php echo $border; ?>.png) top left repeat-x,
    url(../images/intro_texture.png) center no-repeat;
  <?php endif; ?>
}
#intro_wrap {
  <?php if ($border != '0'): ?>
  background: url(../images/border/box_border_<?php echo $border; ?>.png) bottom left repeat-x;
  <?php endif; ?>
}
#intro_wrap .s_wrap {
  z-index: 5;
  position: relative;
}
#intro h1 {
  clear: both;
  <?php if ($language == 'ltr'): ?>
  margin-left: 10px;
  <?php else: ?>
  margin-right: 10px;
  <?php endif; ?>
  padding-bottom: 10px;
  font-size: 32px;
}
#intro h2 {
  padding-top: 0;
  padding-bottom: 0;
  line-height: 40px;
  font-size: 32px;
}
#intro img {
  display: block;
}
#product_intro {
  position: relative;
  height: 370px;
}
#product_intro_info {
  z-index: 2;
  position: absolute;
  top: 0;
  <?php if ($language == 'ltr'): ?>
  left: 0;
  <?php else: ?>
  right: 0;
  <?php endif; ?>
}
#product_intro_info h2 {
  margin-left: 0;
  margin-right: 0;
}
#product_intro_info p.s_desc {
  font-size: 14px;
}
#product_intro_info .s_rating_holder .s_average {
  height: 24px;
  line-height: 24px;
  font-size: 20px !important;
}

#product_intro_preview {
  direction: ltr;
  z-index: 1;
  position: absolute;
  bottom: 0;
  <?php if ($language == 'ltr'): ?>
  right: 10px;
  <?php else: ?>
  left: 10px;
  <?php endif; ?>
  width: 445px;
  height: 370px;
  background: url(../images/intro_product_3.png) no-repeat 0 0;
}

#product_intro_preview > img,
#product_intro_preview .slides_container
{
  overflow: hidden;
  width: 300px;
  height: 300px;
  margin: 60px 0 0 78px;
}

#intro .s_button_prev,
#intro .s_button_next
{
  display: block;
  width: 42px;
  height: 42px;
  background-image: url(../images/sprite.png);
  background-repeat: no-repeat;
}
#intro .s_button_prev {background-position: 0 0;}
#intro .s_button_next {background-position: -42px 0;}

#product_intro .s_button_prev,
#product_intro .s_button_next
{
  position: absolute;
  top: 190px;
}
#product_intro .s_button_prev {
  right: 380px;
}
#product_intro .s_button_next {
  right: 13px;
}
#product_intro .s_price_holder {
  overflow: hidden;
  z-index: 2;
  position: absolute;
  top: 0;
}

/*** product intro small size ***/

#product_intro.s_size_1 {
  height: 255px;
}
#product_intro.s_size_1 .s_price_holder {
  <?php if ($language == 'ltr'): ?>
  left: 856px;
  <?php else: ?>
  right: 856px;
  <?php endif; ?>
}
#product_intro.s_size_1 #product_intro_preview {
  width: 320px;
  height: 255px;
  background: url(../images/intro_product_1.png) no-repeat 0 0;
}
#product_intro.s_size_1 #product_intro_preview > img,
#product_intro.s_size_1 #product_intro_preview .slides_container
{
  width: 200px;
  height: 200px;
  margin: 42px 0 0 70px;
}
#product_intro.s_size_1 .s_button_prev,
#product_intro.s_size_1 .s_button_next
{
  top: 130px;
  width: 32px;
  height: 32px;
}
#product_intro.s_size_1 .s_button_prev {
  right: 258px;
  background-position: 0 -42px;
}
#product_intro.s_size_1 .s_button_next {
  right: 10px;
  background-position: -32px -42px;
}

/*** product intro medium size ***/

#product_intro.s_size_2 {
  height: 315px;
}
#product_intro.s_size_2 .s_price_holder {
  <?php if ($language == 'ltr'): ?>
  left: 856px;
  <?php else: ?>
  right: 856px;
  <?php endif; ?>
}
#product_intro.s_size_2 #product_intro_preview {
  width: 390px;
  height: 315px;
  background: url(../images/intro_product_2.png) no-repeat 0 0;
}
#product_intro.s_size_2 #product_intro_preview > img,
#product_intro.s_size_2 #product_intro_preview .slides_container
{
  width: 250px;
  height: 250px;
  margin: 54px 0 0 79px;
}
#product_intro.s_size_2 .s_button_prev,
#product_intro.s_size_2 .s_button_next
{
  top: 160px;
}
#product_intro.s_size_2 .s_button_prev {
  right: 319px;
}
#product_intro.s_size_2 .s_button_next {
  right: 10px;
}

/*** product intro large size ***/

#product_intro.s_size_3 .s_price_holder {
  <?php if ($language == 'ltr'): ?>
  left: 840px;
  <?php else: ?>
  right: 840px;
  <?php endif; ?>
}



#image_intro {
  padding-bottom: 30px;
  direction: ltr !important;
}
#image_intro_preview {
  position: relative;
  margin: 0 20px;
}
#image_intro_preview.s_boxed {
  border: 10px solid #fff;
  margin: 0 10px;
}
#image_intro_preview .slides_container,
#image_intro_preview .slideItem
{
  width: 100%;
  height: 100%;
}
#image_intro_preview .slides_control {
  height: 100%;
}
#image_intro_preview .s_button_next_holder,
#image_intro_preview .s_button_prev_holder
{
  z-index: 100;
  position: absolute;
  top: 50%;
  <?php if ($is_touch == '0'): ?>
  display: none;
  <?php endif; ?>
  margin-top: -22px;
  padding: 10px;
  background: #fff;
  border-radius: 50px;
  -moz-border-radius: 50px;
  -webkit-border-radius: 50px;
}
#intro:hover .s_button_next_holder,
#intro:hover .s_button_prev_holder
{
  display: block;
}
#image_intro_preview .s_button_next_holder a,
#image_intro_preview .s_button_prev_holder a
{
  width: 24px;
  height: 24px;
  background-image: url(../images/sprite.png) !important;
}
#image_intro_preview .s_button_next_holder a {
  background-position: -24px -74px !important;
}
#image_intro_preview .s_button_prev_holder a {
  background-position: 0 -74px !important;
}
#image_intro_preview .s_button_next_holder {
  right: -25px;
}
#image_intro_preview .s_button_prev_holder {
  left: -25px;
}
#image_intro_preview.s_boxed .s_button_next_holder {
  right: -10px;
  border-radius: 50px 0 0 50px;
  -moz-border-radius: 50px 0 0 50px;
  -webkit-border-radius: 50px 0 0 50px;
}
#image_intro_preview.s_boxed .s_button_prev_holder {
  left: -10px;
  border-radius: 0 50px 50px 0;
  -moz-border-radius: 0 50px 50px 0;
  -webkit-border-radius: 0 50px 50px 0;
}


#breadcrumbs {
  font-size: 11px;
}

.s_brand_logo {
  position: absolute;
  <?php if ($language == 'ltr'): ?>
  right: 10px;
  <?php else: ?>
  left: 10px;
  <?php endif; ?>
  top: -10px;
}

#content {
  z-index: 5;
  position: relative;
}
.s_main_col {
  width: 940px;
}
.s_2_cols .s_main_col {
  width: 700px;
}
.s_side_col {
  width: 220px;
}
.s_main_col,
.s_side_col
{
  <?php if ($language == 'ltr'): ?>
  float: left;
  <?php else: ?>
  float: right;
  <?php endif; ?>
}

#listing_options {
  z-index: 5;
  position: relative;
  clear: both;
  height: 24px;
  margin-bottom: 20px;
  padding-top: 9px;
  padding-bottom: 26px;
  border-bottom: 1px solid #ddd;
}
#listing_arrange {
  position: absolute;
  top: 8px;
  <?php if ($language == 'ltr'): ?>
  right: 0;
  <?php else: ?>
  left: 0;
  <?php endif; ?>
}
#listing_arrange span.s_label {
  <?php if ($language == 'ltr'): ?>
  float: left;
  margin-left: 15px;
  <?php else: ?>
  float: right;
  margin-right: 15px;
  <?php endif; ?>
  line-height: 22px;
  font-size: 11px;
}
#listing_sort,
#items_per_page
{
  position: relative;
  <?php if ($language == 'ltr'): ?>
  float: left;
  margin-left: 5px;
  <?php else: ?>
  float: right;
  margin-right: 5px;
  <?php endif; ?>
}
#listing_sort {
  width: 105px;
}
#items_per_page {
  width: 30px;
}
#view_mode {
  <?php if ($language == 'ltr'): ?>
  float: left;
  <?php else: ?>
  float: right;
  <?php endif; ?>
  font-size: 11px;
}
#view_mode li {
  <?php if ($language == 'ltr'): ?>
  margin-right: 15px;
  <?php else: ?>
  margin-left: 15px;
  <?php endif; ?>
}
#view_mode li a {
  position: relative;
  <?php if ($language == 'ltr'): ?>
  padding-left: 16px;
  <?php else: ?>
  padding-right: 16px;
  <?php endif; ?>
}
#view_mode .s_icon {
  position: absolute;
  top: 50%;
  <?php if ($language == 'ltr'): ?>
  left: 0;
  <?php else: ?>
  right: 0;
  <?php endif; ?>
  margin-top: -5px;
  display: block;
  width: 11px;
  height: 11px;
  background: transparent url(../images/view_mode.gif) no-repeat;
  background-color: #ddd;
}
#view_mode a:hover .s_icon {background-color: #f12b63;}
#view_grid .s_icon {background-position: 0 0;}
#view_list .s_icon {background-position: -11px 0;}

#compare_total {
  <?php if ($language == 'ltr'): ?>
  float: left;
  padding-left: 15px;
  border-left: 1px solid #eee;
  <?php else: ?>
  float: right;
  padding-right: 15px;
  border-right: 1px solid #eee;
  <?php endif; ?>
  font-size: 11px;
}

/******   P R O D U C T    P A G E   *****************/

#product {
  position: relative;
}
#product_info {
  position: relative;
}
#product_info h3,
#product_buy_col h3
{
  margin-bottom: 10px;
  line-height: 30px;
}
#product_price {
  z-index: 20;
  position: absolute;
  top: 0;
  <?php if ($language == 'ltr'): ?>
  right: 0;
  padding: 0 0 10px 20px;
  <?php else: ?>
  left: 0;
  padding: 0 20px 10px 0;
  <?php endif; ?>
  width: 100px;
  background: #fff;
}

#product_price1 {
  z-index: 20;
  position: absolute;
  top: 50;
  <?php if ($language == 'ltr'): ?>
  right: 0;
  margin: 100px 0 10px 20px;
  <?php else: ?>
  left: 0;
  
  <?php endif; ?>
  width: 50px;
  background: #fff;
}

#product_price .s_price {
  position: relative !important;
}
#product_price.s_plain .s_price .s_old_price {
  display: block;
  margin-bottom: 5px;
  text-align: center;
  font-size: 14px;
}
#product_price.s_plain .s_price .s_old_price *,
#product_price.s_plain .s_price .s_old_price
{
  color: #666;
}
#product_price p.s_price_tax,
#product_price p.s_reward_points
{
  margin-bottom: 0;
  text-align: center;
}
#product_price p.s_reward_points small {
  font-size: 10px;
}
#product_price p.s_price_tax,
#product_price p.s_price_tax *
{
  font-size: 11px !important;
}
#product_price p.s_price_tax {
  margin-bottom: -10px;
  padding: 5px 0;
  color: #666;
}
#product_price p.s_reward_points {
  margin-top: 10px;
  line-height: 12px;
  color: #999;
}
#product_info dl {
  <?php if ($language == 'ltr'): ?>
  float: left;
  <?php else: ?>
  float: right;
  <?php endif; ?>
  width: 220px;
  min-height: 100px;
  margin-bottom: 20px;
}
#product_info dt,
#product_info dd
{
  <?php if ($language == 'ltr'): ?>
  float: left;
  <?php else: ?>
  float: right;
  <?php endif; ?>
  margin-bottom: 5px;
}
#product_info dt {
  <?php if ($language == 'ltr'): ?>
  clear: left;
  <?php else: ?>
  clear: right;
  <?php endif; ?>
  width: 49%;
}
#product_info dd {
  width: 50%;
}
#product_info dl .s_rating {
  margin-bottom: 0;
}

#product_share {
  z-index: 1;
  position: relative;
  clear: both;
  margin-bottom: 20px;
  padding-top: 15px;
  border-top: 1px solid #eee;
}
#product_share .s_rating_holder {
  <?php if ($language == 'ltr'): ?>
  margin-right: 120px;
  <?php else: ?>
  margin-left: 120px;
  <?php endif; ?>
  padding: 5px 10px 20px 10px;
  text-align: center;
}
#product_share .s_rating_holder .s_rating,
#product_share .s_rating_holder .s_average
{
  margin-bottom: 10px;
}
#product_share .s_review_write {
  height: 20px;
  line-height: 20px;
}
#product_share .s_review_write .s_icon {
  background-image: url(../images/sprite.png);
  background-position: 0 -488px;
}
#product_share .s_plusone,
#product_share .s_plusone div {
  position: relative;
  <?php if ($language == 'ltr'): ?>
  float: left;
  <?php else: ?>
  float: right;
  <?php endif; ?>
  width: 62px !important;
}
#product_share .s_plusone iframe {
  width: 62px !important;
}
#product_share .addthis_counter {
  <?php if ($language == 'ltr'): ?>
  margin-right: 10px;
  <?php else: ?>
  margin-left: 10px;
  <?php endif; ?>
}
<?php if ($language == 'rtl'): ?>
#product_share .addthis_toolbox a {
  float: right;
}
<?php endif; ?>
#product_share .addthis_button_tweet iframe {
  width: 102px !important;
}
#product_share .addthis_button_facebook_like {
  opacity: 1 !important;
  width: 130px !important;
}
#product_share .addthis_button_vk_like {
  opacity: 1 !important;
  width: 50px !important;
  margin-top: 1px;
}


#product_options {
  clear: both;
  padding: 14px 0 15px 0;
  font-size: 12px;
  border-top: 1px solid #eee;
}
#product_options label {
  width: 40%;
  margin-right: 0;
  margin-left: 0;
  font-size: 12px;
}
#product_options label.s_radio,
#product_options label.s_checkbox
{
  width: auto;
  <?php if ($language == 'ltr'): ?>
  margin-left: -4px;
  <?php else: ?>
  margin-right: -4px;
  <?php endif; ?>
}
#product_options input,
#product_options textarea,
#product_options select
{
  <?php if ($language == 'ltr'): ?>
  margin-right: 0;
  <?php else: ?>
  margin-left: 0;
  <?php endif; ?>
}

#product_options input[type="checkbox"],
#product_options input[type="radio"]
{
  margin-top: -1px;
}
#product_options select {
  font-size: 12px;
}
#product_options .s_full,
#product_options .s_error_msg
{
  clear: none !important;
  <?php if ($language == 'ltr'): ?>
  margin-left: 40% !important;
  <?php else: ?>
  margin-right: 40% !important;
  <?php endif; ?>
}

#product_discounts {
  padding: 14px 0 0 0;
  border-top: 1px solid #eee;
}
#product_discounts h3 {
  margin-bottom: 20px;
}
#product_discounts table {
  margin-top: -5px;
  margin-bottom: 25px;
}
#product_discounts table th,
#product_discounts table td,
#product_discounts table .s_currency
{
  font-size: 11px !important;
}

#product_buy {
  clear: both;
  position: relative;
  padding: 30px 0;
  font-size: 16px;
  border-top: 1px solid #eee;
}
#product_buy label {
  display: block;
  <?php if ($language == 'ltr'): ?>
  float: left;
  <?php else: ?>
  float: right;
  <?php endif; ?>
  width: auto;
  height: 42px;
  margin-right: 5px;
  line-height: 42px;
  font-size: 16px;
}
#product_buy input {
  <?php if ($language == 'ltr'): ?>
  float: left;
  <?php else: ?>
  float: right;
  <?php endif; ?>
  width: 30px;
  margin-top: 4px;
  font-size: 18px;
}
#add_to_cart {
  <?php if ($language == 'ltr'): ?>
  float: right;
  <?php else: ?>
  float: left;
  <?php endif; ?>
}
#add_to_cart .s_text {
  text-indent: 5px;
}
#add_to_cart .s_icon {
  <?php if ($language == 'ltr'): ?>
  left: 5px;
  <?php else: ?>
  right: 5px;
  <?php endif; ?>
  margin-top: -13px;
  width: 23px;
  height: 23px;
  background-image: url(../images/sprite.png);
  background-repeat: no-repeat;
  background-position: -48px -74px;
}
#product_buy .s_purchase_info {
  clear: both;
  margin-bottom: 5px;
  padding-top: 15px;
  text-align: center;
  font-size: 11px;
  color: #999;
}
#product_buy .s_actions {
  overflow: hidden;
  padding-top: 14px;
  text-align: center;
  font-size: 11px;
  font-weight: bold;
}
#product_buy .s_actions .s_button_compare {
  margin-left: 15px;
}

#product_images {
  position: relative;
  z-index: 10;
  <?php if ($language == 'ltr'): ?>
  float: left;
  margin-right: 20px;
  <?php else: ?>
  float: right;
  margin-left: 20px;
  <?php endif; ?>
  width: 340px;
}
#product_images:hover {
  z-index: 30;
}
#product_images img {
  display: block;
  <?php if ($language == 'ltr'): ?>
  float: left;
  <?php else: ?>
  float: right;
  <?php endif; ?>
}
#product_info {
  <?php if ($language == 'ltr'): ?>
  float: left;
  <?php else: ?>
  float: right;
  <?php endif; ?>
  width: 340px;
}


#product_image_preview {
  display: block;
  margin-bottom: 30px;
}
#product_images .s_thumbs {
  <?php if ($language == 'ltr'): ?>
  margin-right: -20px;
  <?php else: ?>
  margin-left: -20px;
  <?php endif; ?>
}
#product_images .s_thumb {
  <?php if ($language == 'ltr'): ?>
  float: left;
  margin: 0 20px 20px 0;
  <?php else: ?>
  float: right;
  margin: 0 0 20px 20px;
  <?php endif; ?>
}
#product .s_tabs {
  margin-bottom: 30px;
}
#product .s_tabs_nav li {
  text-align: center;
  letter-spacing: 1px;
  font-size: 13px;
}
#product .s_tabs_nav li a {
  float: none;
}
#product .s_tabs_nav li.ui-tabs-selected a:hover {
  color: #999 !important;
}
#product_description ul {
  <?php if ($language == 'ltr'): ?>
  margin-left: 20px;
  <?php else: ?>
  margin-right: 20px;
  <?php endif; ?>
  list-style: disc;
}
#product_comments ul {
  <?php if ($language == 'ltr'): ?>
  margin-left: 20px;
  <?php else: ?>
  margin-right: 20px;
  <?php endif; ?>
  list-style: disc;
}
#product_description :last-child {
  margin-bottom: 0 !important;
}
#product_gallery .s_thumbs {
  margin-bottom: 0;
}
#product_gallery .s_thumbs li {
  display: block;
  <?php if ($language == 'ltr'): ?>
  float: left;
  margin: 0 20px 0 0;
  <?php else: ?>
  float: right;
  margin: 0 0 0 20px;
  <?php endif; ?>
  padding-bottom: 20px;
}
#product_images #product_gallery {
  margin-bottom: 10px;
  margin-top: -30px;
  padding-top: 20px;
}
#product_images #product_gallery .s_thumbs li {
  <?php if ($language == 'ltr'): ?>
  margin-right: 20px
  <?php else: ?>
  margin-left: 20px
  <?php endif; ?>
}
#product_gallery .s_thumb {
  margin: 0;
}
#product_attributes table th {
  padding: 3px 10px;
}
#product_attributes table td {
  border-right: 1px solid #eee;
}
#product_attributes table tr td:first-child {
  border-left: 1px solid #eee;
}


#related_products {
  margin-bottom: 10px;
}

#product_tags {
  margin-bottom: 0;
}
#product_tags ul {
  padding-top: 5px;
}
#product_tags li {
  <?php if ($language == 'ltr'): ?>
  float: left;
  margin: 0 13px 20px 0;
  <?php else: ?>
  float: right;
  margin: 0 0 20px 13px;
  <?php endif; ?>
}
#product_tags a {
  display: block;
  float: left;
  height: 20px;
  line-height: 19px;
  white-space: nowrap;
  font-size: 11px;
  <?php if ($language == 'ltr'): ?>
  padding: 0 10px 0 15px;
  background: url(../images/tag.png) no-repeat center left;
  <?php else: ?>
  padding: 0 15px 0 10px;
  background: url(../images/rtl/tag.png) no-repeat center right;
  <?php endif; ?>
}


.s_single_col #product_info {
  width: 280px;
  <?php if ($language == 'ltr'): ?>
  margin-right: 20px;
  <?php else: ?>
  margin-left: 20px;
  <?php endif; ?>
}
.s_single_col #product_info dl {
  width: 100%;
}
.s_single_col #product_share .s_rating_holder {
  <?php if ($language == 'ltr'): ?>
  margin-right: 0;
  <?php else: ?>
  margin-left: 0;
  <?php endif; ?>
}
.s_single_col #product_buy_col {
  <?php if ($language == 'ltr'): ?>
  float: left;
  <?php else: ?>
  float: right;
  <?php endif; ?>
  width: 280px;
  padding-top: 120px;
}
.s_single_col #product_price {
  width: 280px;
}
.s_single_col #product_price .s_price {
  position: absolute !important;
  top: 0;
  <?php if ($language == 'ltr'): ?>
  right: 0;
  <?php else: ?>
  left: 0;
  <?php endif; ?>
}
.s_single_col #product_price p.s_price_tax,
.s_single_col #product_price p.s_reward_points
{
  <?php if ($language == 'ltr'): ?>
  margin-right: 120px;
  text-align: left;
  <?php else: ?>
  margin-left: 120px;
  text-align: right;
  <?php endif; ?>
}
.s_single_col #product_price p.s_price_tax {
  margin-top: -5px;
}
.s_single_col #product_price p.s_reward_points {
  margin-top: 13px;
}




/******   A C C O U N T   ****************************/

.login_page .s_row_3 .s_error_msg {
  clear: none;
}

#my_account .s_3col_wrap {
  margin-bottom: 10px;
}

#downloads .pagination,
#reward_points .pagination,
#transactions .pagination,
#return_requests .pagination,
#order_history .pagination
{
  border-top: none;
  padding-top: 0;
}
#order_history .s_details,
#order_history .s_reorder
{
  margin-top: -5px;
}
#order_history .s_reorder {
  margin-bottom: -5px;
}

#order_history .pagination {
  padding-top: 8px;
  border-top: none;
}


#order_details .s_order {
  margin-bottom: 30px;
}
#order_details .s_order h2,
#return_request_info .s_order h2
{
  margin-bottom: 10px;
  font-size: 20px;
}
#downloads .s_table td,
#order_details .s_table td,
#return_request_info td
{
  padding: 5px 10px;
}
#order_details .s_table tr.last td {
  padding: 10px;
}
#order_details .s_table tr.last td,
#order_details .s_table tr.last td *
{
  letter-spacing: -1px;
  font-size: 26px;
  font-weight: normal;
}

#order_details .s_table tr.last td.align_right,
#order_details .s_table tr.last td.align_right *
{
  font-size: 20px;
}

#wishlist .s_table_1 {
  margin-bottom: 30px;
}

.s_product_row {
  position: relative;
  clear: both;
}
.s_product_row .s_row_number {
  position: absolute;
  <?php if ($language == 'ltr'): ?>
  right: 0;
  <?php else: ?>
  left: 0;
  <?php endif; ?>
  top: 15px;
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  font-size: 18px;
  color: #fff;
  background: black;
  -moz-border-radius: 40px;
  -webkit-border-radius: 40px;
  border-radius: 40px;
}
#return-product .s_product_row:first-child {
  margin-top: 0 !important;
  border-top: 1px solid #eee;
}
<?php if ($language == 'rtl'): ?>
#return-product .s_product_row .s_button_1_small.s_ddd_bgr {
  float: left;
  margin-left: 0;
}
<?php endif; ?>


/******   S H O P P I N G    C A R T   ***************/

#shopping_cart #cart_form {
  margin-bottom: 1px;
}
#shopping_cart #cart_totals {
  margin-top: -20px;
}
#shopping_cart .s_quantity .inline {
  vertical-align: middle;
}
#shopping_cart .s_total,
#shopping_cart_confirm .s_total
{
  clear: both;
  <?php if ($language == 'ltr'): ?>
  float: right;
  text-align: right;
  <?php else: ?>
  float: left;
  text-align: left;
  <?php endif; ?>
  width: 300px;
  margin-bottom: 0;
}
#shopping_cart .s_total strong,
#shopping_cart_confirm .s_total strong
{
  <?php if ($language == 'ltr'): ?>
  float: left;
  <?php else: ?>
  float: right;
  <?php endif; ?>
}
#shopping_cart .s_total.last,
#shopping_cart .s_total.last *,
#shopping_cart_confirm .s_total.last,
#shopping_cart_confirm .s_total.last *
{
  letter-spacing: -1px;
  font-size: 24px;
}
#shopping_cart .s_total.last,
#shopping_cart_confirm .s_total.last
{
  margin-bottom: 7px;
  padding-top: 18px;
}
#shopping_cart .s_total.last strong,
#shopping_cart_confirm .s_total.last strong
{
  font-weight: normal;
  font-size: 20px;
  color: #333;
}
.cart-content .s_box_1,
.cart-content .s_submit
{
  margin-bottom: 0;
}
#apply_coupon,
#apply_voucher,
#apply_reward
{
  margin: 0;
  padding-bottom: 5px;
}
#apply_coupon input,
#apply_coupon .s_button_1,
#apply_voucher input,
#apply_voucher .s_button_1,
#apply_reward input,
#apply_reward .s_button_1
{
  margin-bottom: 10px;
}

#quote {
  margin: 20px 0 0 0;
}
#quote table {
  margin-bottom: 0;
}
#quote table tr.highlight td:first-child {
  width: 20px;
  padding-right: 10px;
}
#quote table tr.highlight label {
  display: inline;
  width: auto;
  margin: 0;
}
#quote table tr.highlight td:last-child label {
  float: right;
  white-space: nowrap;
}
#quote .s_button_1 {
  margin-top: 20px;
}
#cart_totals input[type=text] {
  margin-right: 10px;
}
#cart_totals .s_button_1.left {
  margin-right: 0;
}
#cart_totals .s_button_1 .s_text {
  height: 20px;
  line-height: 19px;
  text-transform: none;
  font-size: 14px;
}

/******   C H E C K O U T   **************************/

.checkout {
  padding-top: 6px;
}
.checkout #confirm {
  margin-bottom: 30px;
}
.checkout #confirm + .s_error_msg {
  margin-top: -20px !important;
}
.checkout-heading {
  position: relative;
  outline: none !important;
  cursor: pointer;
  height: 32px;
  margin-bottom: 1px;
  line-height: 32px;
  text-transform: uppercase;
  text-indent: 10px;
  font-size: 14px;
  font-weight:  bold;
  background: #eee;
  border-bottom: 1px solid #ddd;
}
.checkout-heading a {
  position: absolute;
  <?php if ($language == 'ltr'): ?>
  right: 15px;
  <?php else: ?>
  left: 15px;
  <?php endif; ?>
  height: 32px;
  line-height: 32px;
  text-transform: uppercase;
  font-size: 13px;
}
.checkout-heading strong {
  padding-right: 5px;
}
.checkout-content {
  display: none;
  padding: 20px 0 0 0;
}

#country_id,
#zone_id,
select[name=customer_group_id]
{
  width: 250px;
}



/******   B R A N D S   ******************************/

.s_alphabet_index small {
  <?php if ($language == 'ltr'): ?>
  float: left;
  text-align: left;
  <?php else: ?>
  float: right;
  text-align: right;
  <?php endif; ?>
  text-transform: uppercase;
  letter-spacing: 2px;
  font-weight: normal;
  font-size: 11px;
  color: #999;
}
.s_alphabet_index a {
  <?php if ($language == 'ltr'): ?>
  float: left;
  margin-left: 5px;
  <?php else: ?>
  float: right;
  margin-right: 5px;
  <?php endif; ?>
}
#brands table {
  margin-bottom: 30px;
}
#brands td h2 {
  margin: 0;
  white-space: nowrap;
}
#brands td .s_list_1 li {
  width: 20%;
  <?php if ($language == 'ltr'): ?>
  float: left;
  text-align: left;
  <?php else: ?>
  float: right;
  text-align: right;
  <?php endif; ?>
}


/******   C O M P A R E   ****************************/

#compare table {
  margin-bottom: 20px;
}
#compare table tbody th {
  <?php if ($language == 'ltr'): ?>
  text-align: left;
  <?php else: ?>
  text-align: right;
  <?php endif; ?>
  background: #fff;
  border-bottom: 1px solid #eee;
  border-right: 1px solid #eee;
  border-left: 1px solid #eee;
}
#compare table tbody td {
  border-right: 1px solid #eee;
}
#compare table tbody tr th {
  border-right: 1px solid #eee;
}
#compare .s_product_thumb img {
  margin: 0 auto;
}
#compare .s_rating {
  vertical-align: text-top;
}
#compare .s_rating_holder .s_total {
  display: block;
}

/******   A D V A N C E D    S E A R C H   ***********/

#adv_search_box {
  margin-bottom: 30px;
}
#adv_search_box input[type=text],
#adv_search_box select,
#adv_search_box a.s_button_1
{
  <?php if ($language == 'ltr'): ?>
  float: left;
  margin-right: 10px;
  <?php else: ?>
  float: right;
  margin-left: 10px;
  <?php endif; ?>
}
#adv_search_box select {
  width: 150px;
  font-size: 11px;
}
#adv_search_box .s_button_1 {
  width: 80px;
  margin-left: 0;
}
#adv_search_box .s_button_1 .s_text {
  text-align: center;
}


/******   S I T E M A P   ****************************/

#sitemap .s_list_1 {
  column-count: 2;
  -moz-column-count: 2;
  -webkit-column-count: 2;
  -o-column-count: 2;
}


/******   M O D U L E S   ****************************/

.s_module_content {
  z-index: 1;
  position: relative;
  margin-bottom: 20px;
}
.s_module_content:hover {
  z-index: 2;
}
.s_categories_module ul ul {
  margin-bottom: 0;
}
.product_view #right_col,
.product_view #left_col
{
  width: 220px !important;
}

#right_col,
#left_col {
  padding-bottom: 10px;
}
#right_col .s_box,
#right_col .s_box_1,
#right_col .s_banners
{
  <?php if ($language == 'ltr'): ?>
  margin-left: 10px;
  <?php else: ?>
  margin-right: 10px;
  <?php endif; ?>
}
#left_col .s_box,
#left_col .s_box_1,
#left_col .s_banners
{
  <?php if ($language == 'ltr'): ?>
  margin-right: 10px;
  <?php else: ?>
  margin-left: 10px;
  <?php endif; ?>
}
#right_col .s_box:last-child,
#left_col .s_box:last-child
{
  border-bottom: none;
}


.s_banners {
  clear: both;
}
.s_banners a,
.s_banners img
{
  display: block;
}
.s_banners .s_banner {
  <?php if ($language == 'ltr'): ?>
  float: left;
  margin: 0 0 30px 20px;
  <?php else: ?>
  float: right;
  margin: 0 20px 30px 0;
  <?php endif; ?>
}
.s_banners .s_banner:first-child {
  <?php if ($language == 'ltr'): ?>
  margin-left: 0;
  <?php else: ?>
  margin-right: 0;
  <?php endif; ?>
}
.s_side_col .s_banners .s_banner {
  margin-bottom: 20px;
  margin-left: 0;
  margin-right: 0;
}
.s_side_col .s_box + .s_banners {
  margin-top: -20px;
  background: #fff;
}


/*****************************************************/
/******   F O O T E R    W I D G E T S   *************/
/*****************************************************/

#shop_info {
  position: relative;
  clear: both;
  margin-bottom: 30px;
  padding: 20px 0 0 0;
  font-size: 11px;
  color: #555;
  background: #f3f3f3;
  <?php if ($border != '0'): ?>
  ~background: #f3f3f3 url(../images/border/box_border_<?php echo $border; ?>.png) top left repeat-x;
  <?php endif; ?> 
}
<?php if ($border != '0'): ?>
#shop_info:before,
#shop_info:after
{
  content: '';
  z-index: 1;
  position: absolute;
  left: 0;
  display: block;
  width: 100%;
  height: 50px;
}
#shop_info:before {
  top: 0;
  background: #f3f3f3 url(../images/border/box_border_<?php echo $border; ?>.png) top left repeat-x;
}
#shop_info:after {
  bottom: 0;
  background: url(../images/border/box_border_<?php echo $border; ?>.png) bottom left repeat-x;
}
<?php endif; ?>
#shop_info_wrap {
  padding: 0 0 10px 0;
  <?php if ($border != '0'): ?>
  ~background: url(../images/border/box_border_<?php echo $border; ?>.png) bottom left repeat-x;
  <?php endif; ?>
}
#shop_info .s_wrap > div {
  position: relative;
  z-index: 2;
  display: block;
  margin-bottom: 20px;
}
#shop_info h2 {
  margin-bottom: 19px;
  text-indent: 30px;
  font-size: 18px;
  color: #888;
  border-bottom: 1px solid #e3e3e3;
}
#shop_description p,
#shop_contacts table,
#twitter ul
{
  margin-bottom: 0;
}
#shop_description {
  font-size: 11px;
}
#shop_description h2 {
  <?php if ($language == 'ltr'): ?>
  background: url(../images/shop_info_icons.png) no-repeat 0 8px;
  <?php else: ?>
  background: url(../images/shop_info_icons.png) no-repeat 100% 8px;
  <?php endif; ?>
}
#shop_description p {
  <?php if ($language == 'ltr'): ?>
  margin-right: 10px;
  <?php else: ?>
  margin-left: 10px;
  <?php endif; ?>
}
#twitter h2 {
  <?php if ($language == 'ltr'): ?>
  background: url(../images/shop_info_icons.png) no-repeat 0 -100px;
  <?php else: ?>
  background: url(../images/shop_info_icons.png) no-repeat 100% -100px;
  <?php endif; ?>
}
#twitter iframe {
  <?php if ($language == 'ltr'): ?>
  float: right;
  <?php else: ?>
  float: left;
  <?php endif; ?>
  margin-top: 10px;
}
#twitter li {
  margin-top: 20px;
  padding-left: 30px;
  background: url(../images/quotes.png) no-repeat 0 4px;
}
#twitter li:first-child {
  margin-top: 0;
}
#twitter li a {
  display: block;
  font-style: normal;
  font-size: 10px !important;
  color: #bbb;
}
#twitter li span,
#twitter li span *
{
  line-height: 16px;
  font-size: 11px !important;
  font-family: Georgia, Arial, Helvetica, sans-serif !important;
  font-style: italic !important;
  word-wrap: break-word;
}
#twitter li span * {
  display: inline !important;
  margin: 0;
  padding: 0;
}
#twitter li span a {
  color: #4cb1ca;
}
#twitter li span:after {
  visibility: hidden;
  content: "."
}

#facebook {
  margin-bottom: 0 !important;
}
#facebook h2 {
  <?php if ($language == 'ltr'): ?>
  background: url(../images/shop_info_icons.png) no-repeat 0 -154px;
  <?php else: ?>
  background: url(../images/shop_info_icons.png) no-repeat 100% -154px;
  <?php endif; ?>
}
#facebook .s_widget_holder {
  margin-top: -52px;
}
#facebook .fb_iframe_widget,
#facebook .fb_iframe_widget iframe
{
  width: 100% !important;
}

#shop_contacts {
  font-size: 12px;
}
#shop_contacts h2 {
  <?php if ($language == 'ltr'): ?>
  background: url(../images/shop_info_icons.png) no-repeat 0 -46px;
  <?php else: ?>
  background: url(../images/shop_info_icons.png) no-repeat 100% -46px;
  <?php endif; ?>
}
#shop_contacts td {
  height: 50px;
  padding-bottom: 10px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: content-box;
}
#shop_contacts tr.s_webkit td {
  height: 32px !important;
}
#shop_contacts tr:last-child td {
  height: 32px;
  padding-bottom: 0 !important;
}
#shop_contacts .s_icon_32 {
  display: inline-block;
}

#footer {
  padding-bottom: 10px;
}

#footer_categories {
  margin-bottom: 29px;
}
#footer_categories h2 {
  padding: 0;
  line-height: 20px;
}
#footer_categories h2,
#footer_categories h2 a
{
  font-size: 16px;
}
#footer_categories ul {
  padding-bottom: 10px;
  font-size: 11px;
}
#footer_categories a {
  color: #888;
}

#footer_nav {
  margin-bottom: 24px;
}
#footer_nav h2 {
  margin-bottom: 20px;
  padding: 0;
  line-height: 20px;
  font-size: 18px;
}
#footer_nav ul {
  margin-bottom: 30px;
}

#copy {
  margin-bottom: 15px;
  <?php if ($language == 'ltr'): ?>
  padding-left: 10px;
  <?php else: ?>
  padding-right: 10px;
  <?php endif; ?>
  font-size: 11px;
  color: #ccc;
}

#payments_types {
  <?php if ($language == 'ltr'): ?>
  float: right;
  <?php else: ?>
  float: left;
  <?php endif; ?>
  margin-bottom: 8px;
}
#payments_types img {
  <?php if ($language == 'ltr'): ?>
  float: left;
  margin: 2px 10px 10px 0;
  <?php else: ?>
  float: right;
  margin: 2px 0 10px 10px;
  <?php endif; ?>
}

/*** fonts ***/
@font-face {
    font-family: 'Babel Sans';
    src: url('../fonts/Babel/BabelSans.eot');
    src: local('Babel Sans'),
         url('../fonts/Babel/BabelSans.eot?iefix') format('eot'),
         url('../fonts/Babel/BabelSans.woff') format('woff'),
         url('../fonts/Babel/BabelSans.ttf') format('truetype'),
         url('../fonts/Babel/BabelSans.svg#BabelSans') format('svg');
    font-weight: normal;
    font-style: normal;
}

/*@font-face {
    font-family: 'Open Sans Condensed', sans-serif;
    src: url('../fonts/sanscond/OpenSans-CondLight.ttf');
  }*/
/*@import url(http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic&subset=latin,cyrillic);*/
/*@font-face {
    font-family: 'Open Sans', sans-serif;
    src: url('../fonts/OpenSans/OpenSans-Regular.ttf')
}*/
/*@font-face {
  @import url(http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic&subset=latin,cyrillic);
}*/
/*glyphs*/
@font-face {
  font-family: "1na100";
  src:url("../fonts/glyphs/1na100.eot");
  src:url("../fonts/glyphs/1na100.eot?#iefix") format("embedded-opentype"),
    url("../fonts/glyphs/1na100.ttf") format("truetype"),
    url("../fonts/glyphs/1na100.svg#1na100") format("svg"),
    url("../fonts/glyphs/1na100.woff") format("woff");
  font-weight: normal;
  font-style: normal;
}


[data-icon]:before {
  font-family: "1na100";
  content: attr(data-icon);
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none !important;
  speak: none;
  display: inline-block;
  text-decoration: none;
  width: 1em;
  line-height: 1em;
  -webkit-font-smoothing: antialiased;
}

[class^="icon-"]:before,
[class*=" icon-"]:before {
  font-family: "1na100";
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none !important;
  speak: none;
  display: inline-block;
  text-decoration: none;
  width: 1em;
  line-height: 1em;
  -webkit-font-smoothing: antialiased;
}


.icon-buy-sign:before {
  content: "b";
}

.icon-camera-1:before {
  content: "d";
}

.icon-cart-shopping-1:before {
  content: "e";
}

.icon-check-1:before {
  content: "f";
}

.icon-check-5:before {
  content: "g";
}

.icon-check-clipboard-1:before {
  content: "h";
}

.icon-question:before {
  content: "j";
}

.icon-diamond:before {
  content: "k";
}

.icon-cross:before {
  content: "m";
}

.icon-x-alt:before {
  content: "n";
}

.icon-spin:before {
  content: "o";
}

.icon-check:before {
  content: "i";
}

.icon-fontawesome-webfont:before {
  content: "l";
}

.icon-close:before {
  content: "p";
}

.icon-fontawesome-webfont-1:before {
  content: "q";
}

.icon-fontawesome-webfont-2:before {
  content: "r";
}

.icon-cancel-circle:before {
  content: "s";
}

.icon-key:before {
  content: "t";
}

.icon-happy-smiley:before {
  content: "u";
}

.icon-fontawesome-webfont-3:before {
  content: "v";
}

.icon-key-1:before {
  content: "w";
}

.icon-vkontakte:before {
  content: "a";
}

.icon-facebook-squared:before {
  content: "c";
}

.icon-twitter:before {
  content: "x";
}

.icon-gplus:before {
  content: "y";
}

.icon-dot-3:before {
  content: "z";
}


body,
.s_item h3,
#order_details .s_table tr.last td:first-child,
#shopping_cart .s_total.last strong,
#shopping_cart_confirm .s_total.last strong
{
  <?php if ($font_body == 'default'): ?>
  font-family: "Open Sans", "Lucida Grande", Arial, sans-serif;
  <?php else: ?>
  font-family: <?php echo $font_body; ?>;
  <?php endif; ?>
}
h1,
h2,
#product_info h3,
#product_buy_col h3,
.box .box-heading,
.s_order .s_id,
.s_order .s_status,
.s_product_row .s_row_number
{
  <?php if ($font_title == 'default'): ?>
  font-family: Arial, sans-serif;
  <?php else: ?>
  font-family: <?php echo $font_title; ?>;
  <?php endif; ?>
  <?php if ($font_title_weight != 'default'): ?>
  font-weight: <?php echo $font_title_weight; ?>;
  <?php endif; ?>
  <?php if ($font_title_style != 'default'): ?>
  font-style: <?php echo $font_title_style; ?>;
  <?php endif; ?>
}
#categories > ul > li > a,
#cart_menu small.s_text,
#product .s_tabs_nav li a
{
  font-family: "Open Sans", "Lucida Grande", Arial, sans-serif;
  font-size: 16px;
}

#menu_409 > a {color:#a78955;}
#menu_35 > a {color:#888;}
#menu_18 > a {color:#ff7f01;}
#menu_36 > a {color:#0082a5;}
#menu_53 > a {color:#2ab472;}
#menu_39 > a {color:#9c1276;}
#menu_38 > a {color:#2a334f;}
#menu_103 > a {color:#bb1515;}
#menu_96 > a {color:#3e3a3a;}


#categories > ul > li > a,
#cart_menu small.s_text
{
  font-size: 130%;
}
#intro h1,
#intro h2
{
  <?php if ($font_intro == 'default'): ?>
  font-family: Arial, sans-serif;
  <?php else: ?>
  font-family: <?php echo $font_intro; ?>;
  <?php endif; ?>
  <?php if ($font_intro_weight != 'default'): ?>
  font-weight: <?php echo $font_intro_weight; ?>;
  <?php endif; ?>
  <?php if ($font_intro_style != 'default'): ?>
  font-style: <?php echo $font_intro_style; ?>;
  <?php else: ?>
  font-style: normal;
  <?php endif; ?>
  font-size: <?php echo $font_intro_size; ?>px;
}
.s_plain .s_price,
.s_old_price
{
  <?php if ($font_price == 'default'): ?>
  <?php if ($font_body == 'default'): ?>
  font-family: "Open Sans", "Lucida Grande", Arial, sans-serif;
  <?php else: ?>
  font-family: <?php echo $font_body; ?>;
  <?php endif; ?>
  <?php else: ?>
  font-family: <?php echo $font_price; ?>;
  <?php endif; ?>
  letter-spacing: -1px;
}
.s_label .s_price,
.s_order .s_total,#key_menu .coun_key,
#cart_menu .s_grand_total,
#order_details .s_table tr.last td,
#shopping_cart .s_total.last,
#shopping_cart_confirm .s_total.last
{
  <?php if ($font_price == 'default'): ?>
  font-family: 'Open Sans Condensed', sans-serif;
  <?php else: ?>
  font-family: <?php echo $font_price; ?>;
  <?php endif; ?>
  <?php if ($font_price_weight != 'default'): ?>
  font-weight: <?php echo $font_price_weight; ?>;
  <?php endif; ?>
  <?php if ($font_price_style != 'default'): ?>
  font-style: <?php echo $font_price_style; ?>;
  <?php endif; ?>
  letter-spacing: -1px;
}

.s_button_1 .s_text,
.buttons .button,
.buttons .button span,
#add_to_cart .s_text
{
  <?php if ($font_button == 'default'): ?>
  font-family: Arial, sans-serif;
  <?php else: ?>
  font-family: <?php echo $font_button; ?>;
  <?php endif; ?>
  <?php if ($font_button_weight != 'default'): ?>
  font-weight: <?php echo $font_button_weight; ?>;
  <?php endif; ?>
  <?php if ($font_button_style != 'default'): ?>
  font-style: <?php echo $font_button_style; ?>;
  <?php endif; ?>
  font-size: <?php echo $font_button_size; ?>px;
}

/*****************************************************/
/******   U I     N O T I F Y   **********************/
/*****************************************************/
.s_notify .noty_message {
  position: relative;
  margin-bottom: 15px;
  padding: 15px 10px 10px 10px;
  background: #fff;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px;
  -moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  -o-box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}
.s_notify .noty_message h2 {
  margin-left: 5px;
  margin-right: 5px;
  padding-top: 0;
  padding-bottom: 0;
  line-height: 20px;
  font-size: 18px;
  font-weight: normal;
}
.s_notify .noty_message .noty_close {
  z-index: 100;
  top: 10px;
  <?php if ($language == 'ltr'): ?>
  right: 10px;
  <?php else: ?>
  left: 10px;
  <?php endif; ?>
  text-indent: -1000em;
  font-size: 1px;
}
.s_notify .noty_message h3 {
  font-weight: normal;
  color: #999;
}
.s_notify .noty_message .s_item,
.s_notify .s_message
{
  margin: 0 5px 5px 5px;
}
.s_notify .noty_message .s_item h3,
.s_notify .noty_message .s_item p
{
  padding-left: 50px;
}
.s_notify .noty_message .s_item:hover {
  background: none;
  box-shadow: none;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  -o-box-shadow: none;
}

/*****************************************************/
/******   J Q U E R Y     U I   **********************/
/*****************************************************/
.s_jquery_ui {
  font-size: 11px;
}
.ui-autocomplete-input {
  position: relative;
}

/*** accordion ***/

.ui-accordion .ui-accordion-content {
  padding: 30px 0;
}
.ui-accordion h2.s_last {
  margin-bottom: 25px;
}
.ui-accordion h2.s_last.ui-state-active {
  margin-bottom: 1px;
}
.ui-accordion .ui-accordion-content-active {
  margin-bottom: 1px;
  border-bottom: 1px solid #eee;
}
.ui-accordion > h2 {
  outline: none !important;
  cursor: pointer;
  margin-bottom: 1px;
  padding: 0;
  line-height: 32px;
  text-transform: uppercase;
  font-size: 14px;
  font-weight:  bold;
  background: #eee;
  border-bottom: 1px solid #ddd;
}
.ui-accordion h2 .ui-icon {
  display: block;
  <?php if ($language == 'ltr'): ?>
  float: left;
  background: url(../images/bullet_accordion.png) no-repeat center top;
  <?php else: ?>
  float: right;
  background: url(../images/rtl/bullet_accordion.png) no-repeat center top;
  <?php endif; ?>
  width: 12px;
  height: 12px;
  margin: 10px 10px 0 10px;
}
.ui-accordion h2.ui-state-active .ui-icon {
  background-position: center bottom !important;
}


<?php // if ($is_mobile == '0'): ?>
/*  -------------------------------------------------------------------------------------  */
/*  ---  Desktop and tablet layout              -----------------------------------------  */
/*  -------------------------------------------------------------------------------------  */
/*  ---  Min width: 1000px                      -----------------------------------------  */

@media only screen and (min-width: 768px) {


}




/*  -------------------------------------------------------------------------------------  */
/*  ---  Min width: 768px / Max width: 991px    -----------------------------------------  */

@media only screen and (min-width: 768px) and (max-width: 991px) {

  .s_cell_model {
    display: none;
  }
  .s_cell_name .s_hidden.inline {
    display: inline !important;
  }
  .s_cell_quantity {
  	white-space: nowrap;
  }

  body {
    min-width: 0;
  }
  body.s_layout_fixed #wrapper {
    width: 740px !important;
  }
  .s_wrap {
    width: 720px;
  }
  .s_wrap .s_col_12,
  .s_main_col
  {
    width: 700px;
      font-family: "Open Sans","Lucida Grande",Arial,Helvetica,sans-serif;
  }
  .s_col_3 {
    width: 340px;
  }
  .s_col_3:nth-child(2n+1) {
    <?php if ($language == 'ltr'): ?>
    clear: left;
    <?php else: ?>
    clear: right;
    <?php endif; ?>
  }

  /*** header ***/

  #site_logo {
    margin: 20px 0;
  }
  #site_logo img {
    max-width: 260px;
  }
  #top_navigation {
    top: 25px;
    <?php if ($language == 'ltr'): ?>
    right: 0;
    <?php else: ?>
    left: 0;
    <?php endif; ?>
  }
  #language_switcher,
  #currency_switcher
  {
    width: 70px;
  }
  #system_navigation #cart_menu {
    <?php if ($language == 'ltr'): ?>
    margin: 10px 0 -20px 30px;
    <?php else: ?>
    margin: 10px 10px -20px 0;
    <?php endif; ?>
  }
  #system_navigation #key_menu{margin: 10px 0 -20px 30px;}

  /*** intro ***/

  #intro {
    overflow: hidden;
    padding-top: 20px;
  }
  #intro h1 {
    padding-bottom: 0;
  }
  #product_intro {
    height: 255px;
  }
  #product_intro .s_price_holder {
    <?php if ($language == 'ltr'): ?>
    left: 602px !important;
    <?php else: ?>
    right: 602px !important;
    <?php endif; ?>
  }
  #product_intro_info {
    width: 360px;
  }
  #product_intro_info p.s_desc {
    overflow: hidden;
    height: 120px;
  }
  #product_intro #product_intro_preview {
    <?php if ($language == 'ltr'): ?>
    right: 10px !important;
    <?php else: ?>
    left: -10px !important;
    <?php endif; ?>
    width: 320px;
    height: 255px;
    background: url(../images/intro_product_1.png) no-repeat 0 0;
  }
  #product_intro #product_intro_preview img,
  #product_intro #product_intro_preview .slides_container
  {
    width: 200px;
    height: 200px;
  }
  #product_intro #product_intro_preview .slides_container {
    margin: 42px 0 0 70px;
  }
  #product_intro .s_button_prev,
  #product_intro .s_button_next
  {
    top: 130px;
    width: 32px;
    height: 32px;
  }
  #product_intro .s_button_prev {
    right: 258px;
    background-position: 0 -42px;
  }
  #product_intro .s_button_next {
    right: 10px;
    background-position: -32px -42px;
  }
  
  #image_intro {
    width: 720px;
    padding-bottom: 20px;
  }
  #image_intro_preview {
    height: auto !important;
  }
  #image_intro_preview img {
    max-width: 700px !important;
    height: auto !important;
  }
  #image_intro_preview.s_boxed img {
    max-width: 680px !important;
  }

  /*** products ***/

  .s_grid_view.size_2 .s_item {
    width: 160px;
  }
  .s_grid_view.size_2 .s_item .s_thumb {
    padding: 10px;
  }
  .s_single_col .s_grid_view.size_1 .s_item:nth-of-type(4n+1),
  .s_2_cols .s_grid_view.size_1 .s_item:nth-of-type(3n+1),
  .s_single_col .s_grid_view.size_2 .s_item:nth-of-type(6n+1),
  .s_2_cols .s_grid_view.size_2 .s_item:nth-of-type(4n+1)
  {
    clear: none;
  }
  .s_grid_view.size_2 .s_item:nth-of-type(4n+1),
  .s_grid_view.size_1 .s_item:nth-of-type(3n+1)
  {
    <?php if ($language == 'ltr'): ?>
    clear: left;
    <?php else: ?>
    clear: right;
    <?php endif; ?>
  }

  /*** product info ***/

  .s_single_col #product_info dl {
    width: 220px;
  }
  .s_single_col #product_share .s_rating_holder {
    <?php if ($language == 'ltr'): ?>
    margin-right: 120px;
    <?php else: ?>
    margin-left: 120px;
    <?php endif; ?>
  }
  .s_single_col #product_price {
    <?php if ($language == 'ltr'): ?>
    right: 0;
    padding: 0 0 10px 20px;
    <?php else: ?>
    left: 0;
    padding: 0 20px 10px 0;
    <?php endif; ?>
    width: 100px;
  }
  .s_single_col #product_price .s_price {
    position: relative !important;
  }
  .s_single_col #product_price p.s_price_tax,
  .s_single_col #product_price p.s_reward_points {
    <?php if ($language == 'ltr'): ?>
    margin-right: 0;
    <?php else: ?>
    margin-left: 0;
    <?php endif; ?>
    text-align: center;
  }
  .s_single_col #product_buy_col,
  .s_single_col #product_info
  {
    width: 340px;
    <?php if ($language == 'ltr'): ?>
    margin-right: 0;
    <?php else: ?>
    margin-left: 0;
    <?php endif; ?>
    padding-top: 0;
  }

  /*** shop info ***/

  #shop_info {
    padding-top: 10px;
    margin-bottom: 20px;
  }
  #shop_info_wrap {
    padding: 0;
  }
  #footer {
    padding-bottom: 5px;
  }

}
<?php // endif; ?>

<?php // if ($is_mobile == '1'): ?>
/*  -------------------------------------------------------------------------------------  */
/*  ---  Mobile Layout (320px)                  -----------------------------------------  */
/*  -------------------------------------------------------------------------------------  */
/*  ---  Max width: 767px                       -----------------------------------------  */

@media only screen and (max-width: 767px) {

  /*** hide some elements ***/

  #fb-root,
  #view_mode,
  #menu_home,
  #product .s_tabs_nav,
  .s_cell_model,
  .s_cell_price,
  .s_cell_cart,
  .s_cell_size,
  .s_cell_date,
  .s_cell_download,
  .s_cell_opened,
  .s_cell_comment,
  .s_cell_action,
  .s_cell_quantity,
  #shopping_cart .s_cell_name,
  #wishlist .s_cell_name,
  .pagination .results
  {
    display: none !important;
  }

  /*** typo & spacing ***/

  body {
    min-width: 0 !important;
    font-size: 14px;
  }
  body.s_layout_fixed {
    padding: 10px 0 !important;
    background-image: none !important;
  }
  select {
    font-size: 12px;
  }
  #intro,
  #product_image_preview
  {
    margin-bottom: 20px;
  }
  .s_side_col .s_box,
  .s_side_col .s_box_1
  {
    margin-left: 0 !important;
    margin-right: 0 !important;
  }

  /*** layout ***/

  .s_wrap {
    width: 280px;
  }
  .s_col,
  .s_col_3,
  .s_col_4,
  .s_col_5,
  .s_col_6,
  .s_col_12,
  .s_main_col,
  .s_2_cols .s_main_col,
  .s_side_col,
  .s_total,
  #categories,
  #product_images,
  #product_info,
  #product_buy_col,
  #intro h1
  {
    clear: both !important;
    width: 100% !important;
    margin-left: 0 !important;
    margin-right: 0 !important;
  }
  .s_main_col .s_col {
    margin-left: 0 !important;
    margin-right: 0 !important;
  }
  .s_2col_wrap,
  .s_3col_wrap,
  .s_4col_wrap,
  .s_5col_wrap
  {
    padding: 0 !important;
  }
  .s_1_2,
  .s_1_3,
  .s_1_4
  {
    width: 100%;
  }
  #wrapper {
    overflow: hidden;
    width: 100% !important;
    border: none !important;
    box-shadow: none !important;
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    -o-box-shadow: none !important;
  }

  /*** header ***/

  #site_logo {
    clear: both;
    display: block;
    float: none;
    margin: 20px 0;
  }
  #site_logo img {
    max-width: 280px;
    margin: 0 auto;
  }
  #top_navigation {
    position: static !important;
    width: 280px;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
  }
  #currency_form,
  #language_form
  {
    display: inline-block;
    float: none !important;
    <?php if ($language == 'ltr'): ?>
    margin-right: 8px;
    <?php else: ?>
    margin-left: 8px;
    <?php endif; ?>
  }
  #language_switcher,
  #currency_switcher
  {
    width: 90px;
  }
  #site_search input {
    font-size: 15px !important;
  }
  .s_dynamic #search_bar {
    top: auto;
    <?php if ($language == 'ltr'): ?>
    right: auto;
    margin-left: -246px;
    <?php else: ?>
    left: auto;
    margin-right: -246px;
    <?php endif; ?>
    margin-top: -41px;
  }
  .s_dynamic #search_bar input {
    width: 130px;
  }
  #search_bar .s_button_1 {
    <?php if ($language == 'ltr'): ?>
    margin-left: 150px;
    <?php else: ?>
    margin-right: 150px;
    <?php endif; ?>
  }
  .s_static #site_search {
    position: relative;
    <?php if ($language == 'ltr'): ?>
    left: 50%;
    margin: 0 0 15px -140px !important;
    <?php else: ?>
    right: 50%;
    margin: 0 -140px 15px 0 !important;
    <?php endif; ?>
    clear: both;
    display: block;
    float: none;
    width: 280px;
    height: 30px;
  }
  .s_static #site_search input {
    width: 220px;
    margin-top: -2px;
    padding: 5px !important;
  }
  #system_navigation {
    position: relative;
    overflow: hidden;
    width: 100%;
    margin: 10px 0 20px 0;
  }
  #system_navigation ul.s_list_1 li {
    <?php if ($language == 'ltr'): ?>
    background-position: 0 -3px !important;
    <?php else: ?>
    background-position: 100% -3px !important;
    <?php endif; ?>
  }
  #welcome_message {
    float: left;
    clear: both;
    width: 100%;
    text-align: center;
    font-size: 13px;
  }
  #cart_menu {
    position: static !important;
    float: none !important;
    margin: 0 0 10px 0 !important;
    padding: 10px 0 !important;
    text-align: center !important;
    border: none !important;
  }
  #key_menu {
    position: static !important;
    float: none !important;
    margin: 0 0 10px 0 !important;
    padding: 10px 0 !important;
    text-align: center !important;
    border: none !important;
  }
  #key_menu .coun_key{padding: 7px !important}
  #cart_menu .s_submenu {
    display: none !important;
  }
  #key_menu > a,
  #key_menu > a .coun_key,
  #cart_menu > a,
  #cart_menu > a .s_text,
  #cart_menu > a .s_grand_total
  {
    display: inline-block !important;
    float: none !important;
  }
  #cart_menu .s_grand_total {
    position: relative;
  }
  #system_navigation .s_list_1 {
    clear: both;
    float: none !important;
    height: auto !important;
    <?php if ($language == 'ltr'): ?>
    padding-right: 17px;
    <?php else: ?>
    padding-left: 17px;
    <?php endif; ?>
    text-align: center;
  }
  #system_navigation .s_list_1 li {
      white-space: nowrap;
  }
  #categories {
  	float: none !important;
  }
  #categories > ul > li {
    width: 49.99%;
  }
  #categories > ul > li > a
  {
    width: 90%;
    <?php if ($language == 'ltr'): ?>
    padding: 0 10% 0 0;
    <?php else: ?>
    padding: 0 0 0 10%;
    <?php endif; ?>
    text-indent: 10px;
  }
  #categories > ul > li > a {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
  }
  #categories .s_submenu {
    display: none !important;
  }
  #menu_information {
    position: static !important;
  }
  #menu_information:hover .s_submenu {
    left: 0 !important;
    right: auto !important;
    display: block !important;
    width: 100% !important;
  }

  /*** intro ***/

  #intro {
    clear: both;
    margin-bottom: 30px;
    padding-top: 30px;
    <?php if ($border == '0'): ?>
    background: none;
    <?php else: ?>
    background: url(../images/border/box_border_<?php echo $border; ?>.png) top left repeat-x;
    <?php endif; ?>
    padding-top: 20px;
  }
  #intro h2,
  #intro h2 *
  {
    font-size: 22px !important;
    line-height: 30px !important;
  }
  #intro h1 {
    padding-bottom: 0;
  }

  /*** product intro ***/

  #product_intro {
    overflow: hidden;
    width: 300px !important;
    height: auto !important;
  }
  #product_intro #product_intro_preview {
    width: 320px;
    height: 255px;
    right: 0;
    background: url(../images/intro_product_1.png) no-repeat 0 0;
  }
  #product_intro #product_intro_preview img,
  #product_intro #product_intro_preview .slides_container
  {
    width: 200px;
    height: 200px;
  }
  #product_intro #product_intro_preview .slides_container {
    margin: 42px 0 0 70px;
  }
  #product_intro .s_price_holder {
    top: 50px;
    <?php if ($language == 'ltr'): ?>
    right: 0 !important;
    left: auto !important;
    <?php else: ?>
    left: 0 !important;
    right: auto !important;
    <?php endif; ?>
  }
  #product_intro .s_button_prev,
  #product_intro .s_button_next
  {
    top: 130px;
    width: 32px;
    height: 32px;
  }
  #product_intro .s_button_prev {
    right: 258px;
    background-position: 0 -42px;
  }
  #product_intro .s_button_next {
    right: 10px;
    background-position: -32px -42px;
  }
  #product_intro_info {
    position: relative;
    width: 100%;
    min-height: 50px;
    margin: 0;
    margin-bottom: 255px;
    text-align: center;
  }
  #product_intro_info .s_desc,
  #product_intro_info .s_rating_holder
  {
    display: none;
  }

  /*** image intro ***/

  #image_intro {
    width: 280px;
    padding-bottom: 20px;
  }
  #image_intro_preview {
    height: auto !important;
    padding: 0;
  }
  #image_intro_preview.s_boxed {
    border-width: 5px;
  }
  #image_intro_preview img {
    max-width: 280px !important;
    height: auto !important;
  }
  #image_intro_preview.s_boxed img {
    max-width: 270px !important;
  }
  #image_intro_preview.s_boxed .s_button_next_holder {
    right: -5px;
  }
  #image_intro_preview.s_boxed .s_button_prev_holder {
    left: -5px;
  }

  /*** footer ***/

  #shop_info {
    padding-top: 10px;
    margin-bottom: 20px;
  }
  #shop_info_wrap {
    padding: 0;
  }
  #shop_info, #shop_description, #shop_contacts {
    font-size: 13px;
  }
  #twitter li span,
  #twitter li span *
  {
    font-size: 13px !important;
    line-height: 20px !important;
  }
  .s_widget_holder span,
  .s_widget_holder span iframe
  {
    width: 100% !important;
  }
  #footer_categories .s_wrap {
    width: 300px;
  }
  #footer_categories .s_col_2 {
    width: 130px;
  }
  #footer_categories .s_col_2:nth-child(2n+1) {
    clear: left;
  }
  #footer_categories ul {
    font-size: 13px;
  }
  #footer_nav ul {
    margin-bottom: 20px;
  }
  #payments_types {
    float: none !important;
    padding-left: 5px;
    text-align: center;
  }
  #payments_types img {
    display: inline;
    float: none;
  }
  #copy {
    padding: 0 !important;
    text-align: center;
  }

  /*** product listing ***/

  #listing_options {
    padding-top: 34px;
    padding-bottom: 10px;
  }
  #listing_arrange {
    right: auto;
    left: 0;
  }
  #listing_arrange span.s_label {
    margin-left: 0;
    margin-right: 5px;
  }
  #listing_arrange .s_switcher
  {
    margin-left: 0;
    margin-right: 15px;
  }
  #listing_sort {
    width: 90px;
  }
  #compare_total {
    display: none;
  }

  /*** product info ***/

  #product_images,
  #product_info,
  #product .s_tabs
  {
    margin-left: 0;
    margin-right: 0;
  }
  #product_images:hover {
    z-index: 10;
  }
  #product_gallery .s_thumbs li {
    margin: 0 10px 0 0;
    padding-bottom: 10px;
  }
  #product_gallery .s_thumbs img {
    width: 55px;
  }
  #product_info dl {
    width: 100%;
  }
  #product_price {
    width: 100px !important;
    <?php if ($language == 'ltr'): ?>
    margin-right: -20px;
    <?php else: ?>
    right: auto;
    left: -20px;
    <?php endif; ?>
    padding-left: 0;
    padding-right: 0;
    background: none;
  }
  #product_price p.s_price_tax,
  #product_price p.s_reward_points
  {
    display: none;
  }
  #product .s_tab_box {
    padding: 0;
    border: none;
  }
  #product .s_tab_box > h2 {
    display: block;
  }
  #product_share {
    display: none;
  }
  .s_single_col #product_buy_col {
    padding-top: 0;
  }

  /*** brands ***/

  #brands td .s_list_1 li {
    width: 99%;
  }

  /*** cart ***/
  .cart-content {
    width: 100%;
  }
  .cart-content .s_box_1 input[type=text] {
    width: 98%;
  }
  .cart-content .s_box_1 .s_button_1 {
    float: left !important;
    margin: 20px 0 0 0 !important;
  }
  #quote table {
    margin-bottom: 0;
  }

  /*** checkout ***/
  .payment table {
    font-size: 12px;
  }
  .payment td {
    padding-bottom: 10px;
  }
  .payment input[type=text],
  .payment input[type=password],
  .payment select
  {
    display: inline-block;
  }

  /*** login ***/

  #login_page .s_h_170 {
    height: auto !important;
    margin-bottom: 0 !important;
  }
  #login_page .s_1_2:first-child {
    margin-bottom: 30px;
  }

  /*** orders ***/

  #order_details table {
    font-size: 11px;
  }
  #order_details .s_table tr.last td,
  #order_details .s_table tr.last td *
  {
    font-size: 20px !important;
  }

  /*** returns ***/

  #return_request_info table {
    font-size: 11px;
  }

  /*** sitemap ***/

  #sitemap .s_list_1 {
    column-count: 1;
    -moz-column-count: 1;
    -webkit-column-count: 1;
    -o-column-count: 1;
  }

  /*** modules ***/

  .s_banners .s_banner,
  .s_banners .s_banner img {
    float: none;
    margin: 0 auto 20px auto !important;
  }

  /*** common styles ***/

  select {
    max-width: 99% !important;
  }
  .s_row_2 label {
    width: 100%;
  }
  .s_full {
    clear: both;
    <?php if ($language == 'ltr'): ?>
    margin-left: 0 !important;
    <?php else: ?>
    margin-right: 0 !important;
    <?php endif; ?>
  }
  .s_list_1 li {
    <?php if ($language == 'ltr'): ?>
    background-image: url(../images/bullet_1_mobile.png);
    background-position: 0 -3px;
    <?php else: ?>
    background-image: url(../images/rtl/bullet_1_mobile.png);
    background-position: 100% -3px;
    <?php endif; ?>
  }
  .s_total.left,
  .s_total.right
  {
    width: auto !important;
    clear: none !important;
  }
  table .s_hidden {
    display: block !important;
  }
  table .s_hidden.inline {
    display: inline !important;
  }
  .s_cell_image {
    width: 200px;
  }
  .s_cell_select {
    width: 16px;
  }
  .s_cell_id {
    max-width: 20px;
  }
  .s_cell_price,
  .s_cell_total,
  .s_cell_quantity
  {
    width: 60px;
  }
  .s_cell_image strong {
    display: block;
    padding: 5px 0;
    text-align: center;
    font-size: 14px;
  }
  .s_cell_select .s_icon_16 {
    display: block;
    width: 16px;
    padding: 0 !important;
    text-indent: -1000em;
  }
  .s_cell_image .s_button_add_to_cart {
    font-size: 12px;
  }
  .s_cell_quantity input[type=text] {
    min-width: 90%;
    margin-bottom: 10px;
    margin-right: 0;
  }
  #shopping_cart .s_cell_quantity {
    display: table-cell !important;
  }
  .pagination {
    text-align: center;
  }
  .pagination .links {
    float: none;
  }
  .s_listing .s_item {
    width: 130px !important;
    margin-bottom: 20px !important;
  }
  .s_listing .s_item .s_thumb {
    padding: 0 0 10px 0 !important;
  }
  .s_listing .s_item h3 {
    font-size: 14px;
  }
  .s_listing .s_item h3 a {
    padding-top: 9px;
  }
  .s_grid_view .s_item:hover {
    margin-top: 0;
    margin-right: 10px;
    margin-left: 10px;
    margin-bottom: 20px !important;
    padding: 0;
    background: none;
    box-shadow: none;
    -o-box-shadow: none;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
  }
  .s_item .s_actions {
    display: block !important;
    font-size: 13px !important;
  }
  .s_single_col .s_subcategory:nth-child(8n+1),
  .s_2_cols .s_subcategory:nth-child(6n+1),
  .s_single_col .s_grid_view.size_1 .s_item:nth-of-type(4n+1),
  .s_2_cols .s_grid_view.size_1 .s_item:nth-of-type(3n+1),
  .s_single_col .s_grid_view.size_2 .s_item:nth-of-type(6n+1),
  .s_2_cols .s_grid_view.size_2 .s_item:nth-of-type(4n+1)
  .s_grid_view.size_2 .s_item:nth-of-type(4n+1),
  .s_grid_view.size_1 .s_item:nth-of-type(3n+1)
  {
    clear: none;
  }
  .s_single_col .s_subcategory:nth-child(2n+1),
  .s_2_cols .s_subcategory:nth-child(2n+1),
  .s_grid_view .s_item:nth-of-type(2n+1)
  {
    <?php if ($language == 'ltr'): ?>
    clear: left;
    <?php else: ?>
    clear: right;
    <?php endif; ?>
  }

  .s_submit .s_button_1,
  .buttons input[type=submit],
  .buttons input[type=button]
  {
    <?php if ($language == 'ltr'): ?>
    float: left;
    clear: left;
    margin-left: 0;
    <?php else: ?>
    float: right;
    clear: right;
    margin-right: 0;
    <?php endif; ?>
    margin-top: 15px;
  }
  .s_submit .s_button_1:first-child {
    margin-top: 0;
  }
  .buttons input[type=submit],
  .buttons input[type=button]
  {
    line-height: 30px !important;
    border-radius: 0 !important;
    -moz-border-radius: 0 !important;
    -webkit-border-radius: 0 !important;
    -webkit-appearance: none;
  }

  .s_orders_listing {
    <?php if ($language == 'ltr'): ?>
    padding-left: 0 !important;
    <?php else: ?>
    padding-right: 0 !important;
    <?php endif; ?>
  }
  .s_orders_listing .s_col {
    float: none;
    width: 100% !important;
    margin-left: 0 !important;
  }
  html.s_locked,
  html.s_locked body
  {
    overflow: hidden;
    height: 100%;
  }
  .noty_cont {
    position: absolute;
    top: 15px;
    bottom: 15px;
    right: 15px;
    left: 15px;
    display: none;
    width: auto;
    height: auto;
    margin: 0 !important;
  }
  html.s_locked .noty_cont {
    display: block;
  }
  .noty_bar,
  .noty_message
  {
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    right: 0 !important;
    width: auto !important;
    margin: 0 !important;
  }
  .noty_message h3 {
    font-size: 15px !important;
  }
  .noty_buttons {
    padding-top: 15px;
    text-align: center;
  }
  .noty_message button {
    display: inline-block;
    height: 30px;
    margin: 0 5px 10px 5px;
    padding: 0 10px;
    text-transform: uppercase;
    letter-spacing: -1px;
    line-height: 30px;
    font-size: 14px;
    color: #fff;
    box-sizing: content-box;
    -moz-box-sizing: content-box;
    -webkit-box-sizing: content-box;
    box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.3) inset,
      -1px -1px 0 rgba(255, 255, 255, 0.3) inset;
    -moz-box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.3) inset,
      -1px -1px 0 rgba(255, 255, 255, 0.3) inset;
    -webkit-box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.3) inset,
      -1px -1px 0 rgba(255, 255, 255, 0.3) inset;
    -o-box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.3) inset,
      -1px -1px 0 rgba(255, 255, 255, 0.3) inset;
  }
  .noty_message button:hover,
  .noty_message button:hover
  {
    box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.5) inset,
      -1px -1px 0 rgba(255, 255, 255, 0.5) inset;
    -moz-box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.5) inset,
      -1px -1px 0 rgba(255, 255, 255, 0.5) inset;
    -webkit-box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.5) inset,
      -1px -1px 0 rgba(255, 255, 255, 0.5) inset;
    -o-box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.5) inset,
      -1px -1px 0 rgba(255, 255, 255, 0.5) inset;
  }

}

/*  -------------------------------------------------------------------------------------  */
/*  ---  Wide Mobile Layout (480px)             -----------------------------------------  */
/*  -------------------------------------------------------------------------------------  */
/*  ---  Min width: 480px / Max width: 767px    -----------------------------------------  */

@media only screen and (min-width: 480px) and (max-width: 767px) {

  .s_wrap {
    width: 440px;
  }
  .s_col_3 {
    clear: none;
    float: left;
    width: 220px;
  }

  .s_row_2 label {
    width: 150px;
  }

  #categories > ul > li {
    width: 33.33%;
  }

  #image_intro {
    width: 440px;
  }
  #image_intro_preview img {
    max-width: 440px !important;
    height: auto !important;
  }
  #image_intro_preview.s_boxed img {
    max-width: 430px !important;
  }

  /*** footer ***/

  #shop_info .s_col_3 {
    width: 220px;
  }
  #twitter {
    margin-bottom: 0;
  }
  #footer_categories .s_wrap {
    width: 460px;
  }
  #footer_categories .s_col_2 {
    width: 133px;
  }
  #footer_categories .s_col_2:nth-child(2n+1) {
    clear: none;
  }
  #footer_categories .s_col_2:nth-child(3n+1),
  #footer_nav .s_wrap :nth-of-type(2n+1)
  {
    <?php if ($language == 'ltr'): ?>
    clear: left;
    <?php else: ?>
    clear: right;
    <?php endif; ?>
  }

  /*** product ***/

  #product_images {
    width: 280px !important;
    <?php if ($language == 'rtl'): ?>
    float: right;
    <?php endif; ?>
  }
  #product_info {
    clear: none !important;
    float: none !important;
    width: auto !important;
    margin: 0 !important;
  }
  #product_price {
    position: static !important;
    <?php if ($language == 'ltr'): ?>
    float: left;
    margin-left: 10px !important;
    <?php else: ?>
    float: right;
    margin-right: 10px !important;
    <?php endif; ?>
    padding-bottom: 20px;
  }
  #product_price .s_price,
  .s_single_col #product_price .s_price
  {
    position: static !important;
  }
  #product_info dl {
    <?php if ($language == 'ltr'): ?>
    clear: right;
    float: right;
    <?php else: ?>
    clear: left;
    float: left;
    <?php endif; ?>
    width: 140px !important;
  }
  #product_info dl dt,
  #product_info dl dd
  {
    width: 100%;
    margin-bottom: 0;
  }
  #product_info dl dd {
    clear: left;
    margin-bottom: 10px;
  }
  #product_buy {
    clear: both;
    width: 440px;
  }
  
  

  
  

  /*** brands ***/

  #brands td .s_list_1 li {
    width: 44%;
  }
  .s_subcategory {
    width: 90px;
  }
  .s_grid_view .s_item,
  .s_grid_view .s_item:hover
  {
    margin-right: 12px;
    margin-left: 11px;
  }
  .s_single_col .s_subcategory:nth-child(8n+1),
  .s_2_cols .s_subcategory:nth-child(6n+1),
  .s_single_col .s_subcategory:nth-child(2n+1),
  .s_2_cols .s_subcategory:nth-child(2n+1),
  .s_listing .s_item:nth-of-type(4n+1),
  .s_listing .s_item:nth-of-type(5n+1),
  .s_listing .s_item:nth-of-type(2n+1)
  {
    clear: none !important;
  }
  .s_single_col .s_subcategory:nth-child(4n+1),
  .s_2_cols .s_subcategory:nth-child(4n+1),
  .s_listing .s_item:nth-of-type(3n+1)
  {
    <?php if ($language == 'ltr'): ?>
    clear: left !important;
    <?php else: ?>
    clear: right !important;
    <?php endif; ?>
  }

}


/*  -------------------------------------------------------------------------------------  */
/*  ---  Retina displays                        -----------------------------------------  */
/*  ---  Overrides styles for devices with a    -----------------------------------------  */
/*  ---  device-pixel-ratio of 2+, such as iPhone 4     ---------------------------------  */

@media
  only screen and (-webkit-min-device-pixel-ratio: 2),
  only screen and (min-device-pixel-ratio: 2) {

  body {
  }

}
<?php // endif; ?>
