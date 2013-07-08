<?php
  header('Content-type: text/css; charset=utf-8');
  $theme = (string) $_GET['theme'];
  
  if ($theme != htmlentities($theme, ENT_QUOTES, 'UTF-8')) {
  	return;	  
  }
?>

.s_1_3 { width: 33.30%; }
.s_1_4 { width: 24.90%; }
.s_static #site_search {
  width: 208px;
}
#system_navigation ul.s_list_1 li {
  ~display: inline;
}
.s_submenu,
.s_submenu ul ul {
  margin-top: -1px;
  border: 1px solid #ccc;
}
.ui-notify-message {
  border: 1px solid #ccc;
}
.s_price, .s_product_row .s_row_number {
  behavior: url(catalog/view/theme/<?php echo $theme; ?>/javascript/pie/PIE.php);
}
.s_listing,
.s_grid_view .s_item .s_item_info
{
  zoom: 1;
}
.s_grid_view .s_item:hover {
  padding: 19px !important;
  border: 1px solid #ccc;
}
.s_grid_view .s_item .s_rating {
  margin: 0 auto;
  border-top: 10px solid #fff;
}
#product_share .s_rating {
  ~display: inline;
  ~margin-right: 5px !important;
}
#product_share .s_review_write {
  display: inline-block;
  overflow: hidden;
}
#product_options input,
#product_options textarea,
#product_options select
{
  ~float: right;
}
#product_gallery img {
  margin-left: 0;
  margin-right: 0;
}
.s_module_content {
  zoom: 1;
}
#payments_types img {
  max-width: none;
}


