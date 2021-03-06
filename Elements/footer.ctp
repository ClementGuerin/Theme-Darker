<!-- Footer -->
    <footer class="theme-color-background">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p><?= $Lang->get('GLOBAL__FOOTER') ?></p>
            <div class="socials pull-right">
            <ul class="list-inline list-unstyled">
                <?php if(!isset($theme_config['social_global']) || $theme_config['social_global'] == "true") { ?>
                    <?php if(!isset($theme_config['social_footer']) || $theme_config['social_footer'] == "true") { ?>
                        <?php if(isset($theme_config['social_discord']) && $theme_config['social_discord']) { ?>
                            <li><a href="<?php echo $theme_config['social_discord']; ?>" class="discord"></a></li>
                        <?php } ?>
                        <?php if(isset($theme_config['social_facebook']) && $theme_config['social_facebook']) { ?>
                            <li><a href="<?php echo $theme_config['social_facebook']; ?>" class="facebook"><i class="fa fa-facebook-square"></i></a></li>
                        <?php } ?>
                        <?php if(isset($theme_config['social_twitter']) && $theme_config['social_twitter']) { ?>
                            <li><a href="<?php echo $theme_config['social_twitter']; ?>" class="twitter"><i class="fa fa-twitter-square"></i></a></li>
                        <?php } ?>
                        <?php if(isset($theme_config['social_youtube']) && $theme_config['social_youtube']) { ?>
                            <li><a href="<?php echo $theme_config['social_youtube']; ?>" class="youtube"><i class="fa fa-youtube-square"></i></a></li>
                        <?php } ?>
                        <?php if(isset($theme_config['social_googleplus']) && $theme_config['social_googleplus']) { ?>
                            <li><a href="<?php echo $theme_config['social_googleplus']; ?>" class="google-plus"><i class="fa fa-google-plus-square"></i></a></li>
                        <?php } ?>
                        <?php if(isset($theme_config['social_pinterest']) && $theme_config['social_pinterest']) { ?>
                            <li><a href="<?php echo $theme_config['social_pinterest']; ?>" class="pinterest"><i class="fa fa-pinterest-square"></i></a></li>
                        <?php } ?>
                        <?php if(isset($theme_config['social_snapchat']) && $theme_config['social_snapchat']) { ?>
                            <li><a href="<?php echo $theme_config['social_snapchat']; ?>" class="snapchat"><i class="fa fa-snapchat-square"></i></a></li>
                        <?php } ?>
                        <?php if(isset($theme_config['social_instagram']) && $theme_config['social_instagram']) { ?>
                            <li><a href="<?php echo $theme_config['social_instagram']; ?>" class="instagram"><i class="fa fa-instagram"></i></a></li>
                        <?php } ?>
                        <?php if(isset($theme_config['social_twitch']) && $theme_config['social_twitch']) { ?>
                            <li><a href="<?php echo $theme_config['social_twitch']; ?>" class="twitch"><i class="fa fa-twitch"></i></a></li>
                        <?php } ?>
                        <?php if(isset($theme_config['social_steam']) && $theme_config['social_steam']) { ?>
                            <li><a href="<?php echo $theme_config['social_steam']; ?>" class="steam"><i class="fa fa-steam-square"></i></a></li>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>
          </div>
        </div>
      </div>
    </footer>

<!-- Clipboard.js -->
<script>
    new Clipboard('a');
</script>
<!-- wow.js -->
<script>
    new WOW().init();
</script>
<!-- Tooltip Bootstrap -->
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
    });
</script>
<!-- Popover Bootstrap -->
<script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover(); 
    });
</script>