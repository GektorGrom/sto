<?php
  header('Content-type: text/javascript; charset=utf-8');
  $is_mobile = (int) $_GET['is_mobile'];
  $is_touch = (int) $_GET['is_touch'];
  $ldir = strip_tags((string) $_GET['language_direction']);
  if (!in_array($ldir, array('ltr', 'rtl'))) {
      $ldir = 'ltr';
  }
?>
var buttonfalse=false;
(function(a){a.fn.extend({actual:function(b,k){var c,d,h,g,f,j,e,i;if(!this[b]){throw'$.actual => The jQuery method "'+b+'" you called does not exist';}h=a.extend({absolute:false,clone:false,includeMargin:undefined},k);d=this;if(h.clone===true){e=function(){d=d.filter(":first").clone().css({position:"absolute",top:-1000}).appendTo("body");};i=function(){d.remove();};}else{e=function(){c=d.parents().andSelf().filter(":hidden");g=h.absolute===true?{position:"absolute",visibility:"hidden",display:"block"}:{visibility:"hidden",display:"block"};f=[];c.each(function(){var m={},l;for(l in g){m[l]=this.style[l];this.style[l]=g[l];}f.push(m);});};i=function(){c.each(function(m){var n=f[m],l;for(l in g){this.style[l]=n[l];}});};}e();j=d[b](h.includeMargin);i();return j;}});})(jQuery);
jQuery.fn.inputHints=function(){$(this).each(function(a){$(this).val($(this).attr("title")).addClass("tagged")});return $(this).focus(function(){if($(this).val()==$(this).attr("title"))$(this).val("").removeClass("tagged")}).blur(function(){if($(this).val()=="")$(this).val($(this).attr("title")).addClass("tagged")})}
jQuery.cookie=function(d,e,b){if(arguments.length>1&&String(e)!=="[object Object]"){b=jQuery.extend({},b);if(e===null||e===undefined){b.expires=-1}if(typeof b.expires==="number"){var g=b.expires,c=b.expires=new Date();c.setDate(c.getDate()+g)}e=String(e);return(document.cookie=[encodeURIComponent(d),"=",b.raw?e:encodeURIComponent(e),b.expires?"; expires="+b.expires.toUTCString():"",b.path?"; path="+b.path:"",b.domain?"; domain="+b.domain:"",b.secure?"; secure":""].join(""))}b=e||{};var a,f=b.raw?function(h){return h}:decodeURIComponent;return(a=new RegExp("(?:^|; )"+encodeURIComponent(d)+"=([^;]*)").exec(document.cookie))?f(a[1]):null};
// jQuery Noty Plugin v1.1.1 Licensed under the MIT licenses: http://www.opensource.org/licenses/mit-license.php
(function(b){b.noty=function(d,e){var a=this,c=null,g=!1;a.init=function(c){a.options=b.extend({},b.noty.defaultOptions,c);a.options.type=a.options.cssPrefix+a.options.type;a.options.id=a.options.type+"_"+(new Date).getTime();a.options.layout=a.options.cssPrefix+"layout_"+a.options.layout;a.options.custom.container&&(e=a.options.custom.container);g="object"===b.type(e)?!0:!1;return a.addQueue()};a.addQueue=function(){var c=-1==b.inArray(a.options.layout,b.noty.growls)?!1:!0;c||(a.options.force?b.noty.queue.unshift({options:a.options}): b.noty.queue.push({options:a.options}));return a.render(c)};a.render=function(d){var f=g?e.addClass(a.options.theme+" "+a.options.layout+" noty_custom_container"):b("body");if(d)0==b("ul.noty_cont."+a.options.layout).length&&f.prepend(b("<ul/>").addClass("noty_cont "+a.options.layout)),f=b("ul.noty_cont."+a.options.layout);else if(b.noty.available){var h=b.noty.queue.shift();if("object"===b.type(h))b.noty.available=!1,a.options=h.options;else return b.noty.available=!0,a.options.id}else return a.options.id; a.container=f;a.bar=b('<div class="noty_bar"/>').attr("id",a.options.id).addClass(a.options.theme+" "+a.options.layout+" "+a.options.type);c=a.bar;c.append(a.options.template).find(".noty_text").html(a.options.text);c.data("noty_options",a.options);a.options.closeButton?c.addClass("noty_closable").find(".noty_close").show():c.find(".noty_close").remove();c.find(".noty_close").bind("click",function(){c.trigger("noty.close")});a.options.buttons&&(a.options.closeOnSelfClick=a.options.closeOnSelfOver= !1);a.options.closeOnSelfClick&&c.bind("click",function(){c.trigger("noty.close")}).css("cursor","pointer");a.options.closeOnSelfOver&&c.bind("mouseover",function(){c.trigger("noty.close")}).css("cursor","pointer");a.options.buttons&&($buttons=b("<div/>").addClass("noty_buttons"),c.find(".noty_message").append($buttons),b.each(a.options.buttons,function(a,d){bclass=d.type?d.type:"gray";$button=b("<button/>").addClass(bclass).html(d.text).appendTo(c.find(".noty_buttons")).bind("click",function(){b.isFunction(d.click)&& d.click.call($button,c)})}));return a.show(d)};a.show=function(d){a.options.modal&&b("<div/>").addClass("noty_modal").addClass(a.options.theme).prependTo(b("body")).fadeIn("fast");c.close=function(){return this.trigger("noty.close")};d?a.container.prepend(b("<li/>").append(c)):a.container.prepend(c);("noty_layout_topCenter"==a.options.layout||"noty_layout_center"==a.options.layout)&&b.noty.reCenter(c);c.bind("noty.setText",function(a,d){c.find(".noty_text").html(d);b.noty.reCenter(c)});c.bind("noty.getId", function(){return c.data("noty_options").id});c.one("noty.close",function(){c.data("noty_options").modal&&b(".noty_modal").fadeOut("fast",function(){b(this).remove()});c.clearQueue().stop().animate(c.data("noty_options").animateClose,c.data("noty_options").speed,c.data("noty_options").easing,c.data("noty_options").onClose).promise().done(function(){-1<b.inArray(c.data("noty_options").layout,b.noty.growls)?c.parent().remove():(c.remove(),b.noty.available=!0,a.render(!1))})});c.animate(a.options.animateOpen, a.options.speed,a.options.easing,a.options.onShow);a.options.timeout&&c.delay(a.options.timeout).promise().done(function(){c.trigger("noty.close")});return a.options.id};return a.init(d)};b.noty.get=function(d){return b("#"+d)};b.noty.close=function(d){b.noty.get(d).trigger("noty.close")};b.noty.setText=function(d,e){b.noty.get(d).trigger("noty.setText",e)};b.noty.closeAll=function(){b.noty.clearQueue();b(".noty_bar").trigger("noty.close")};b.noty.reCenter=function(d){d.css({left:(b(window).width()- d.outerWidth())/2+"px"})};b.noty.clearQueue=function(){b.noty.queue=[]};b.noty.queue=[];b.noty.growls=["noty_layout_topLeft","noty_layout_topRight","noty_layout_bottomLeft","noty_layout_bottomRight"];b.noty.available=!0;b.noty.defaultOptions={layout:"top",theme:"noty_theme_default",animateOpen:{height:"toggle"},animateClose:{height:"toggle"},easing:"swing",text:"",type:"alert",speed:500,timeout:5E3,closeButton:!1,closeOnSelfClick:!0,closeOnSelfOver:!1,force:!1,onShow:!1,onClose:!1,buttons:!1,modal:!1, template:'<div class="noty_message"><span class="noty_text"></span><div class="noty_close"></div></div>',cssPrefix:"noty_",custom:{container:null}};b.fn.noty=function(d){return this.each(function(){new b.noty(d,b(this))})}})(jQuery);function noty(b){return jQuery.noty(b)};

<?php if ($is_mobile == 0): ?>
// Hover effect for the header menu
// var buttonfalse=false
$("#categories > ul > li").not("#menu_home").hover(
    function() {
      if ($(this).find("div.s_submenu").length) {
        var offset = $(this).offset();
        <?php if ($ldir == 'ltr'): ?>
        var position = $(this).find("div.s_submenu").width() + offset.left;
        var window_width = $(window).width();
        if (position > window_width) {
          $(this).find("div.s_submenu").css({
            'left' : 'auto',
            'right' : 0
          })
        }
        <?php else: ?>
        var position = $(this).find("div.s_submenu").width() - offset.left;
        if (position > 40) {
          $(this).find("div.s_submenu").css({
            'right' : 'auto',
            'left' : 0
          })
        }
        <?php endif; ?>
      }
      $(this).find("a:first").stop().animate({
            color: '#ffffff',
            backgroundColor: '#' + $sReg.get('/tb/schemer_config/colors/secondary')
        },300
      );
    }
    ,
    function() {
      $(this).find("a:first").stop().animate({
            color: '#' + $sReg.get('/tb/schemer_config/colors/secondary'),
            backgroundColor: '#ffffff'
        },300
      );
    }
);

<?php if ($is_touch == 0): ?>
$('div.s_grid_view > div.s_item').each(function() {
  $(this).hover(
    function() {
      var hh = 0;
      $(this).find(".s_item_info > :hidden").addClass('to_hide');
      var h1 = $(this).find(".s_item_info").height();
      $(this).find(".s_item_info > .to_hide").show();
      var h2 = $(this).find(".s_item_info").height();
      var h3 = h2 - h1;
      var mb = '-' + h3 + 'px';
      $(this).css('margin-bottom', mb);
    },
    function() {
      $(this).find(".s_item_info > .to_hide").hide();
      $(this).find(".s_item_info > :hidden").removeClass('to_hide');
      $(this).css('margin-bottom', '');
    }
  )
});

var onMouseOutOpacity = 1;
$('div.s_listing > div.s_item').css('opacity', onMouseOutOpacity)
.hover (
    function () {
        $(this).prevAll().stop().fadeTo('slow', 0.60);
        $(this).nextAll().stop().fadeTo('slow', 0.60);
    },
    function () {
        $(this).prevAll().stop().fadeTo('slow', onMouseOutOpacity);
        $(this).nextAll().stop().fadeTo('slow', onMouseOutOpacity);
    }
);

<?php endif; ?>

// Hover effect for the cart
$("#cart_menu").hover(
    function() {
        $(this).find(".s_grand_total").stop().animate({
            color: '#ffffff',
            backgroundColor: '#' + $sReg.get('/tb/schemer_config/colors/main')
        },300);
    }
    ,
    function() {
        $(this).find(".s_grand_total").stop().animate({
            color: '#' + $sReg.get('/tb/schemer_config/colors/main'),
            backgroundColor: '#ffffff'
        },300);
    }
);

function addToCompare(product_id) {
  $.ajax({
    url: 'index.php?route=tb/compareCallback',
    type: 'post',
    data: 'product_id=' + product_id,
    dataType: 'json',
    success: function(json) {
      if (json['success']) {
        productNotice(json['title'], json['thumb'], json['success'], 'success');
        $('#compare_total').html(json['total']);
      }
    }
  });
}

if ($.browser.msie && parseInt($.browser.version, 10) < 9) {
    if ($("body").hasClass("s_single_col")) {
        $("#content .s_grid_view.size_1 .s_item:nth-child(4n)").after('<span class="clear"></span>');
        $("#content .s_grid_view.size_2 .s_item:nth-child(6n)").after('<span class="clear"></span>');
        $("#content .s_subcategory:nth-child(8n)").after('<span class="clear"></span>');
    } else {
        $("#content .s_grid_view.size_1 .s_item:nth-child(3n)").after('<span class="clear"></span>');
        $("#content .s_grid_view.size_2 .s_item:nth-child(4n)").after('<span class="clear"></span>');
        $("#content .s_subcategory:nth-child(6n)").after('<span class="clear"></span>');
    }
}
<?php endif; ?>

// Animation for the languages and currency dropdown
$('.s_switcher').hover(function() {
    $(this).find('.s_options').stop(true, true).slideDown('fast');
},function() {
    $(this).find('.s_options').stop(true, true).slideUp('fast');
});

$(".s_server_msg").live("click", function() {
    $(this).fadeOut(200, function(){
        $(this).remove();
    });
});

var search_visibility = 0;
// Animation for the search button
$("#show_search").bind("click", function(){
    if (search_visibility == 0) {
        $("#search_bar").fadeIn();
        search_visibility = 1;
    } else {
        $("#search_bar").fadeOut();
        search_visibility = 0;
    }
});

/* Search */
function moduleSearch() {
    var filter_name = $('#filter_keyword').val();

    if (filter_name) {
        url = 'index.php?route=product/search&filter_name=' + encodeURIComponent(filter_name);
        location = url;
    }
}

$('#search_button').bind('click', function() {
    moduleSearch();
});

$('#filter_keyword').keydown(function(e) {
    if (e.keyCode == 13) {
        moduleSearch();
    }
});

function addToCart(product_id) {
    $.ajax({
        url: 'index.php?route=tb/cartCallback',
        type: 'post',
        data: 'product_id=' + product_id,
        dataType: 'json',
        success: function(json) {

            if (json['redirect']) {
                location = json['redirect'];
            } else {
                if (json['error'] && json['error']['warning']) {
                    productNotice(json['title'], json['thumb'], json['error']['warning'], 'failure');
                }

                if (json['success']) {
                    productNotice(json['title'], json['thumb'], json['success'], 'success');
                    $('#cart_menu span.s_grand_total').html(json['total_sum']);
                    <?php if ($is_mobile == 0): ?>
                    $('#cart_menu div.s_cart_holder').html(json['html']);
                    <?php endif; ?>
                }
            }
        }
    });
}

function removeCart(key) {
  $.ajax({
    url: 'index.php?route=tb/cartCallback',
    type: 'post',
    data: 'removeKey=' + key,
    dataType: 'json',
    success: function(json) {
      if (json['html']) {
        productNotice(json['title'], json['thumb'], json['success'], 'success');
        $('#cart_menu span.s_grand_total').html(json['total_sum']);
        <?php if ($is_mobile == 0): ?>
        $('#cart_menu div.s_cart_holder').html(json['html']);
        <?php endif; ?>
      }
    }
  });
}

function removeVoucher(key) {
  $.ajax({
    url: 'index.php?route=tb/cartCallback',
    type: 'post',
    data: 'removeVoucher=' + key,
    dataType: 'json',
    success: function(json) {
      if (json['html']) {
        simpleNotice(json['title'], json['success'], 'success');
        $('#cart_menu span.s_grand_total').html(json['total_sum']);
        $('#cart_menu div.s_cart_holder').html(json['html']);
      }
    }
  });
}

function addToWishList(product_id) {
  $.ajax({
    url: 'index.php?route=tb/wishlistCallback',
    type: 'post',
    data: 'product_id=' + product_id,
    dataType: 'json',
    success: function(json) {
      if (json['success']) {
        wishListNotice(json['title'], json['thumb'], json['success'], 'success');
        $('#wishlist_total').html(json['total']);
      }
      if (json['failure']) {
        wishListNotice(json['title'], json['thumb'], json['failure'], 'failure');
        $('#wishlist_total').html(json['total']);
      }
    }
  });
}

function productNotice(title, thumb, text, type) {
    if (type == 'failure') {
        var buttons_config = [
        {
          type: 's_main_color_bgr', text: $sReg.get('/lang/text_continue'), click: function() {
            $.noty.closeAll();
          }
        }
        ];
    } else {
        var buttons_config = [{
          type: 's_main_color_bgr', text: $sReg.get('/lang/text_continue_shopping'), click: function() {
            $.noty.closeAll();
          }
        },{
            type: 's_secondary_color_bgr', text: $sReg.get('/lang/text_shopping_cart'), click: function() {
            window.location = $sReg.get('/tb/shopping_cart_url');
          }
        }
        ];
    }

    complexNotice(title, thumb, text, type, buttons_config)
}

function wishListNotice(title, thumb, text, type) {
    if (type == 'failure') {
        var buttons_config = [
        {
          type: 's_main_color_bgr', text: $sReg.get('/lang/text_continue'), click: function() {
            $.noty.closeAll();
          }
        }
        ];
    } else {
        var buttons_config = [
        {
          type: 's_main_color_bgr', text: $sReg.get('/lang/text_continue'), click: function() {
            $.noty.closeAll();
          }
        },
        {
          type: 's_secondary_color_bgr', text: $sReg.get('/lang/text_wishlist'), click: function() {
            window.location = $sReg.get('/tb/wishlist_url');
          }
        }
        ];
    }

    complexNotice(title, thumb, text, type, buttons_config)
}

function complexNotice(title, thumb, text, type, buttons_config) {
    <?php if ($is_mobile == 1): ?>
    $("html").addClass('s_locked');
    <?php endif; ?>
    var tpl = '<h2 class="s_icon_24"><span class="s_icon s_' + type + '_24"></span>' + title + '</h2>\
               <div class="s_item s_size_1 clearfix">\
                 <a class="s_thumb" href=""><img src="' + thumb + '" /></a>\
                  <h3>' + text + '</h3>\
               </div>';

    noty({
        text: tpl,
        layout: 'topRight',
        theme: 's_notify',
        closeOnSelfClick: false,
        <?php if ($is_mobile == 1): ?>
        modal: true,
        buttons: buttons_config,
        onClose: function() {
          $("html").removeClass('s_locked');
        },
        closeButton: false,
        timeout: false,
        <?php else: ?>
        closeButton: true,
        timeout: 8000,
        <?php endif; ?>
        animateOpen: {opacity: 'toggle'},
        animateClose: {opacity: 'toggle'}
    });
}

function simpleNotice(title, text, type) {
    <?php if ($is_mobile == 1): ?>
    $("html").addClass('s_locked');
    <?php endif; ?>
    var tpl = '<h2 class="s_icon_24"><span class="s_icon s_' + type + '_24"></span>' + title + '</h2>\
               <p class="s_message">' + text + '</p>';
    noty({
        text: tpl,
        layout: 'topRight',
        theme: 's_notify',
        closeOnSelfClick: false,
        <?php if ($is_mobile == 1): ?>
        modal: true,
        buttons: [{
          type: 's_main_color_bgr', text: $sReg.get('/lang/text_continue'), click: function() {
            $.noty.close();
          }
        }],
        onClose: function() {
          $("html").removeClass('s_locked');
        },
        closeButton: false,
        timeout: false,
        <?php else: ?>
        closeButton: true,
        timeout: 8000,
        <?php endif; ?>
        animateOpen: {opacity: 'toggle'},
        animateClose: {opacity: 'toggle'}
    });
}

function getUrlParam(name) {
  var name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
  var regexS = "[\\?&]"+name+"=([^&#]*)";
  var regex = new RegExp(regexS);
  var results = regex.exec(window.location.href);
  if (results == null) {
    return "";
  }
  else {
    return results[1];
  }
}

function empty (mixed_var) {

    var key;
    var undefined;

    if (mixed_var === "" ||
        mixed_var === 0 ||
        mixed_var === "0" ||
        mixed_var === null ||
        mixed_var === false ||
        mixed_var === undefined
    ){
        return true;
    }

    if (typeof mixed_var == 'object') {
        for (key in mixed_var) {
            return false;
        }
        return true;
    }

    return false;
}

$("#filter_keyword").inputHints();

$(document).ready(function() {

  if ($("#main_navigation #cart_menu").is("div")) {
    function categories_resize() {
      $("#categories").width('auto');
      var w_menu = $("#main_navigation .s_col_12").width()
      var w_cats = $("#categories").width();
      var w_cart = $("#main_navigation #cart_menu").width();
      var w_empty = w_menu - w_cats - 10;
      if (w_empty < w_cart) {
        $("#categories").width(w_menu - w_cart - 30)
      }
    }

    categories_resize();

    var previousOrientation = 0;
    var checkOrientation = function(){
        if(window.orientation !== previousOrientation){
            previousOrientation = window.orientation;
        }
    };

    if (!$.browser.msie || parseInt($.browser.version, 10) > 8) {
        $(window).resize(categories_resize);
        $(window).bind('orientationchange', categories_resize);
    }
  }

});

