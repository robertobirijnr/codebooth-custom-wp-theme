<?php

function co_theme_opts_page(){
    ?>

<div class="wrap">
    <div class="my-3">
        <h4><?php _e('Theme settings','codebooth')?></h4>
    </div>
    <div class="row">
        <div class="col-md-8">
            <form>
                <div class="form-group">
                    <label><?php _e('Twitter','codebooth') ?></label>
                    <input name="co_inputTwitter" class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label><?php _e('Facebook','codebooth') ?></label>
                    <input name="co_inputFacebook" class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label><?php _e('Youtube','codebooth') ?></label>
                    <input name="co_inputYoutube" class="form-control" type="text" />
                </div>

                <div class="form-group">
                    <label><?php _e('Logo Type','codebooth') ?></label>
                    <select class="form-control" name="co_inputLogoType">
                        <option value="1"><?php _e('Use Site Name','codebooth') ?></option>
                        <option value="2"><?php _e('UImage','codebooth') ?></option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="file" id="file" name="file">
                </div>

                <div class="form-group">
                    <label><?php _e('Footer Text','codebooth') ?></label>
                    <textarea name="co_inputFooterText" class="form-control" rows="10" cols="50" type="text"></textarea>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
}
?>