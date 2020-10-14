<?php
/*
# ------------------------------------------------------------------------
# Templates for Joomla 2.5
# ------------------------------------------------------------------------
# Copyright (C) 2011-2012 Jtemplate.ru. All Rights Reserved.
# @license - PHP files are GNU/GPL V2.
# Author: Makeev Vladimir
# Websites:  http://www.jtemplate.ru
# ---------  http://code.google.com/p/jtemplate/
#
*/
// No direct access.
defined('_JEXEC') or die;
if ($jt_mode == 'vertical') {$jt_vertical='_v';}
	else {$jt_vertical='';}

if ($jt_load_jquery == 2) { ?>
	<?php if ($jquery == 1) { ?>
	<script type = "text/javascript">
			var jQ = false;
			function initJQ() {
			  if (typeof(jQuery) == 'undefined') {
				if (!jQ) {
				  jQ = true;
				  document.write('<scr' + 'ipt type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></scr' + 'ipt>');
				}
				setTimeout('initJQ()', 50);
			  }
			}
			initJQ();
	</script>
	<?php } if ($jt_script_bx == 1 ) { ?>
	<script type = "text/javascript" src = "<?php echo JURI::root() ?>/modules/mod_jt_jshopping_label_products/js/jquery.bxSlider.min.js"></script>
	<?php } ?>
	<script type = "text/javascript">if (jQuery) jQuery.noConflict();</script>
<?php } ?>

<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('#label_slider<?php echo $id_sfx; ?>').bxSlider({
	prevSelector:'.jt_prev_l_<?php echo $id_sfx;?>',
	nextSelector:'.jt_next_l_<?php echo $id_sfx;?>',
	mode: '<?php echo $jt_mode;?>',
	speed: <?php echo $jt_speed;?>,
	controls: <?php echo $jt_controls; ?>,
	auto: <?php echo $jt_auto;?>,
	pause: <?php echo $jt_pause?>,
	autoDelay: <?php echo $jt_auto_delay; ?>,
	autoHover: <?php echo $jt_autohover; ?>,
	pager: <?php echo $jt_pager;?>,
	pagerType: '<?php echo $jt_pager_type;?>',
	pagerLocation: '<?php echo $jt_pager_location;?>',
	pagerShortSeparator: '<?php echo $jt_pager_saparator;?>',
	displaySlideQty: <?php echo $jt_display_slide_qty;?>,
	moveSlideQty: <?php echo $jt_move_slide_qty;?>
	});
});
</script>
<style type="text/css">
#jt_jshopping_label_slider ul li { background: none;  width:<?php echo $jt_width; ?>px; height: <?php echo $jt_height; ?>px;}
#jt_jshopping_label_slider #jt_prev_l a, #jt_jshopping_label_slider #jt_next_l a {height:<?php echo $jt_height; ?>px;}
</style>


<div class="mod_jt_jshopping_label_products <?php echo $moduleclass_sfx;?>">
	<div id="jt_jshopping_label_slider">
		<div id="jt_prev_l" class="jt_prev_l_<?php echo $id_sfx;?>"></div>
		<ul id="label_slider<?php echo $id_sfx; ?>">
		<?php foreach($last_prod as $curr){ ?>


	<li><div class="block_item">
        <?php if ($show_image) { ?>
        <div class="item_image">

            <a href="<?php print $curr->product_link?>">
                <img src = "<?php print $jshopConfig->image_product_live_path?>/<?php if ($curr->product_thumb_image) print $curr->product_thumb_image; else print $noimage?>" alt="" />
            </a>
        </div>
        <?php } ?>
        <div class="item_name">
            <a href="<?php print $curr->product_link?>"><?php
			$str=($curr->name);
            //разбиваем на массив
             $arr_str = explode(" ", $str);
            //берем первые 6 элементов
            $arr = array_slice($arr_str, 0, 5);
            //превращаем в строку
            $new_str = implode(" ", $arr);
           // Если необходимо добавить многоточие
            if (count($arr_str) > 5) {
            $new_str .= '...';
            }
            echo $new_str;//Выведет 'Этот текст имеет большое количество пробелов и...'
			?></a>
        </div>

		<?php if ($product->product_old_price > 0){?>
            <div class="old_price"><?php if ($this->config->product_list_show_price_description) echo _JSHOP_OLD_PRICE.": ";?><span><?php echo formatprice($product->product_old_price)?></span></div>
        <?php }?>
        <?php if ($curr->_display_price){?>
        <div class="item_price dfdf">
            <?php print mb_substr(formatprice($curr->product_price), 0, -1);?>

        </div>
		<?php if ($product->buy_link){?>
            <a class="button_buy" href="<?php echo $product->buy_link?>"><?php echo _JSHOP_BUY?></a> &nbsp;
            <?php }?>
						<?php if ($curr->product_price !=0) {?>
						<div style="padding:0px; text-align: center; width: 40%; float: left;"><a class="button_buy" href="index.php?option=com_jshopping&controller=cart&task=add&category_id=<?php print $curr->category_id?>&product_id=<?php print $curr->product_id?>"><?php print _JSHOP_BUY?></a></div>
						<?php }?>
		<div class="cls"></div>
        <?php }?>
		<div class="cls"></div>
    </div> </li>


		<?php } ?>
		</ul>
		<div id="jt_next_l" class="jt_next_l_<?php echo $id_sfx;?>"></div>
	</div>
	<div style="clear:both"></div>
</div>
