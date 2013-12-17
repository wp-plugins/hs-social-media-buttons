<?php
$options = get_option('hssocial_badges');
$hssocial_facebook = $options['hssocial_facebook'];
$hssocial_linkedin = $options['hssocial_linkedin'];
$hssocial_youtube = $options['hssocial_youtube'];
$hssocial_twitter = $options['hssocial_twitter'];
$hssocial_google = $options['hssocial_google'];
$hssocial_pintrest = $options['hssocial_pintrest'];
$pos_lr = $options['pos_lr'];
$top_px = $options['top_px'];
$effect_bt = $options['effect_bt'];
$plugin_url = WP_PLUGIN_URL . '/hs-social-media-buttons';
?>
<!--[if IE]>
<style>
   .social-icon {
    background-color: #33353B;
    background-image: url('<?php echo $plugin_url; ?>/images/social-icons.png'); 
}

</style>
<![endif]-->


<?php global $is_opera;
if ($is_opera == "yes") : ?>
    <style>
        .social-icon {
            background-color: #33353B;
            background-image: url('<?php echo $plugin_url; ?>/images/social-icons.png'); 
        }
    </style>
<?php endif; ?>
<div class="social-icons" style="top:<?php echo $top_px ?>px;">
    <?php if ($hssocial_facebook): ?>
        <a class="socialitems" target="_blank" href="<?php echo esc_url($hssocial_facebook); ?>" id="facebook-btn">
            <span  class="social-icon">
                <span class="social-text">Follow via Facebook</span>
            </span>
        </a>
    <?php endif; ?>
    <?php if ($hssocial_linkedin): ?>
        <a class="socialitems" target="_blank" href="<?php echo esc_url($hssocial_linkedin); ?>" id="linkedin-btn">
            <span  class="social-icon">
                <span class="social-text">Follow via Linkedin</span>
            </span>
        </a>
    <?php endif; ?>
    <?php if ($hssocial_twitter): ?>
        <a class="socialitems" target="_blank" href="<?php echo esc_url($hssocial_twitter); ?>" id="twitter-btn">
            <span  class="social-icon">
                <span class="social-text">Follow via Twitter</span>
            </span>
        </a>
    <?php endif; ?>
    <?php if ($hssocial_youtube): ?>
        <a class="socialitems" target="_blank" href="<?php echo $hssocial_youtube; ?>" id="youtube-btn">
            <span  class="social-icon">
                <span class="social-text">Follow via Youtube</span>
            </span>
        </a>
    <?php endif; ?>
    <?php if ($hssocial_google): ?>
        <a class="socialitems" target="_blank" href="<?php echo $hssocial_google; ?>" id="google-btn">
            <span  class="social-icon">
                <span class="social-text">Follow via Google</span>
            </span>
        </a>
    <?php endif; ?>
    <?php if ($hssocial_pintrest): ?>
        <a class="socialitems" target="_blank" href="<?php echo $hssocial_pintrest; ?>" id="pintrest-btn">
            <span  class="social-icon">
                <span class="social-text">Follow via Pintrest</span>
            </span>
        </a>
    <?php endif; ?>

</div>

<script>
    $mtkb(window).load(function(){
        $mtkb('.social-icons .social-icon').mouseenter(function(){
            $mtkb(this).stop();
            $mtkb(this).animate({width:'160'}, 500, '<?php echo $effect_bt; ?>',function(){});
        });
        $mtkb('.social-icons .social-icon').mouseleave(function(){
            $mtkb(this).stop();
            $mtkb(this).animate({width:'43'}, 500, '<?php echo $effect_bt; ?>',function(){});
        });
    });
</script>
