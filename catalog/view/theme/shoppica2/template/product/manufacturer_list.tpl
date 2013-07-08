<?php echo $header; ?>

  <!-- ---------------------- -->
  <!--     I N T R O          -->
  <!-- ---------------------- -->
  <div id="intro">
    <div id="intro_wrap">
      <div class="s_wrap">
        <div id="breadcrumbs" class="s_col_12">
          <?php foreach ($breadcrumbs as $breadcrumb): ?>
          <?php echo $breadcrumb['separator']; ?><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
          <?php endforeach; ?>
        </div>
        <h1><?php echo $heading_title; ?></h1>
      </div>
    </div>
  </div>
  <!-- end of intro -->

  <!-- ---------------------- -->
  <!--      C O N T E N T     -->
  <!-- ---------------------- -->
  <div id="content" class="s_wrap">
  
    <?php if ($tbData->common['column_position'] == "left" && $column_right): ?>
    <div id="left_col" class="s_side_col">
    <?php echo $column_right; ?>
    </div>
    <?php endif; ?>

    <div id="brands" class="s_main_col">

      <?php echo $content_top; ?>

      <?php if ($categories): ?>
      <table class="s_table_1" width="100%" cellpadding="0" cellspacing="0" border="0">
        <thead>
          <th colspan="2" align="left">
            <div class="s_alphabet_index">
              <small><?php echo $text_index; ?></small>
              <?php foreach ($categories as $category): ?>
              <a class="s_main_color" href="index.php?route=product/manufacturer#<?php echo $category['name']; ?>"><?php echo $category['name']; ?></a>
              <?php endforeach; ?>
            </div>
          </th>
        </thead>
        <tbody>
          <?php foreach ($categories as $category): ?>
          <tr>
            <td width="30">
              <h2 id="<?php echo $category['name']; ?>"><?php echo $category['name']; ?></h2>
            </td>
            <td>
              <?php if ($category['manufacturer']): ?>
              <ul class="s_list_1">
                <?php foreach ($category['manufacturer'] as $manufacturer): ?>
                <li><a href="<?php echo $manufacturer['href']; ?>"><?php echo $manufacturer['name']; ?></a></li>
                <?php endforeach; ?>
              </ul>
              <?php endif; ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?php else: ?>
      <p class="align_center s_f_16 s_p_20_0"><?php echo $text_empty; ?></p>
      <div class="s_submit clearfix">
        <a class="s_button_1 s_main_color_bgr" href="<?php echo $continue; ?>"><span class="s_text"><?php echo $button_continue; ?></span></a>
      </div>
      <?php endif; ?>

      <?php echo $content_bottom; ?>

    </div>

    <?php if ($tbData->common['column_position'] == "right" && $column_right): ?>
    <div id="right_col" class="s_side_col">
    <?php echo $column_right; ?>
    </div>
    <?php endif; ?>

  </div>
  <!-- end of content -->


<?php echo $footer; ?>