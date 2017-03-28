
<?php if($current_page=='about-us' || $current_page=='video-gallery' || $current_page=='school-visit') {?>
<section class="video-banner">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 no-margin hidden-xs">
            <div class="side-vdo">
                <div class="vdo vdo-top">
                    <?php 
                    $url1=explode("?v=",(trim($banner[0]['banner_image'])));
                    $videoname1=$url1[1];

                    $thumbURL1 = 'http://img.youtube.com/vi/'.$videoname1.'/0.jpg';

                ?>
                    <img src="<?php echo $thumbURL1 ; ?>" class="img-responsive" data-video-src="https://www.youtube.com/embed/<?php echo $videoname1;?>?autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1&amp;allowfullscreen=true">
                    <a href="#" class="vdo-start"><i class="fa fa-caret-right" aria-hidden="true"></i></a>
                </div>
                <div class="vdo vdo-bottom">
                    <?php 
                    $url2=explode("?v=",(trim($banner[1]['banner_image'])));
                    $videoname2=$url2[1];

                    $thumbURL2 = 'http://img.youtube.com/vi/'.$videoname2.'/0.jpg';

                ?>
                    <img src="<?php echo $thumbURL2 ; ?>" class="img-responsive" data-video-src="https://www.youtube.com/embed/<?php echo $videoname2; ?>?autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1&amp;allowfullscreen=true">
                    <a href="#" class="vdo-start"><i class="fa fa-caret-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div> 
        <div class="col-md-6 no-margin">
            <div class="middle-vdo">
                <?php 
                    $url=explode("?v=",(trim($focus_banner['banner_image'])));
                    $videoname=$url[1];

                /* $thumbURL = 'http://img.youtube.com/vi/'.$videoname.'/0.jpg';*/

                ?>
                <iframe class="playerBox" frameborder="0" arginwidth="0" marginheight="0" hspace="0" vspace="0" scrolling="no" allowfullscreen="1" title="YouTube video player" src="https://www.youtube.com/embed/<?php echo $videoname; ?>?autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1&amp;allowfullscreen=true"></iframe>
            </div>
        </div> 
        <div class="col-md-3 no-margin hidden-xs">
            <div class="side-vdo">
                <div class="vdo vdo-top">
                     <?php 
                    $url3=explode("?v=",(trim($banner[2]['banner_image'])));
                    $videoname3=$url3[1];

                    $thumbURL3 = 'http://img.youtube.com/vi/'.$videoname3.'/0.jpg';

                ?>
                    <img src="<?php echo $thumbURL3;?>" class="img-responsive" data-video-src="https://www.youtube.com/embed/<?php  echo  $thumbURL3; ?>?autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1&amp;allowfullscreen=true">
                    <a href="#" class="vdo-start"><i class="fa fa-caret-right" aria-hidden="true"></i></a>
                </div>
                <div class="vdo vdo-bottom">
                      <?php 
                    $url4=explode("?v=",(trim($banner[3]['banner_image'])));
                    $videoname4=$url4[1];

                    $thumbURL4 = 'http://img.youtube.com/vi/'.$videoname4.'/0.jpg';

                ?>
                    <img src="<?php echo $thumbURL4 ; ?>" class="img-responsive" data-video-src="https://www.youtube.com/embed/<?php echo $thumbURL4; ?>?autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1&amp;allowfullscreen=true">
                    <a href="#" class="vdo-start"><i class="fa fa-caret-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div> 
    </div>
</div>
</section>
<?php } else { ?>
<?php if((isset($banner['banner_type']) && ($banner['banner_type']=='1') && (isset($banner['banner_image'])))){  ?>
<section id="page-title" class="page-title-1" style="background: url('<?php echo BASE_URI;?>assets/images/banner/thumb/<?php echo $banner['banner_image'];?>') center center; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="grid_12">
                    <div class="breadcrumbs triggerAnimation animated" data-animate="fadeInUp">
                        
                    </div>
                </div><!-- .grid_8 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </section><!-- #page-title end -->
<?php } } ?>




<style type="text/css">
video { 
  
  object-fit: fill;
}

</style>

<script type="text/javascript">
    $(document).ready(function() {
        $('.vdo-start').click(function(){
            var vdoSrc = $(this).parent().find('img').attr("data-video-src");
            $(".middle-vdo iframe").attr("src",vdoSrc)
        });
    })
</script>
		 