<?php defined('C5_EXECUTE') or die('Access denied');?>
  	<div class="clear accordion_wrapper content no_bg">
  <div class="faq-inner faq-attorney">
    <div id="faq_acc_<?php echo $bID; ?>" class="faq accordion-container style-preset-<?php echo intval($stylePresetId); ?>" data-collapse="<?php echo intval($collapse); ?>"  data-scroll-to-active-item="<?php echo intval($scrollToActiveItem); ?>" data-animation-duration="<?php echo intval($animationDuration); ?>">
      <div class="row accordion_row">
        <div class="col-lg-12 col-md-12 col-12">
     <?php $count=0;
      foreach ($items as $item) {
     ?>
            <div class="card accordion-item <?php echo $item->getIsOpen() ? "open" : ""; ?>">
                <div class="accordion-header <?php echo is_object($stylePreset) ? $stylePreset->getTitleIconOrientation() : ""; ?>">
                    <div class="accordion-title-overlay"></div>
                    <div class="card-header accordion-header-inner">
                        <div class="accordion-title"><?php echo sprintf("<%s>", $semanticTag); ?><?php echo $item->getTitle() ?><?php echo sprintf("</%s>", $semanticTag); ?></div>
                    </div>
                </div>
                <div class="accordion-outer-content card-body"><div class="accordion-content"><?php echo $item->getParagraph(); ?></div></div>
            </div>

          <?php $count++; } ?>
              </div>
            </div>
            </div>
    </div>
      </div>

<script>
 
 $(document).ready(function() {
     $(".faq-attorney #faq_acc_<?php echo $bID; ?> .accordion-header").click(function () {
       console.log($(this));
         if(!$(this).closest(".accordion-item").hasClass("open")){
           $(".faq-attorney #faq_acc_<?php echo $bID; ?> .accordion-item").removeClass("open");
           $(this).closest(".accordion-item").addClass("open");
		   var $header = $('.header');
		   $('html, body').animate({
				scrollTop: $(this).closest(".accordion-item").offset().top- $header.height()- 135 + 'px'
		   }, 1000);
          }else{$(this).closest(".accordion-item").removeClass("open"); }
     });
	 
	 
$( ".accordion-content img" ).each(function() {
 var alt = $(this).attr('alt');
 if(alt)
 {
 $(this).attr('title',alt);
 }
});
 });
 
 

</script>