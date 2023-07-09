<?php
global $servizio;
$image_url = get_the_post_thumbnail_url($servizio); /*carica immagine servizio*/
if($servizio->post_status == "publish") {
    ?>
    <div class="card card-bg card-noicon rounded" style="max-height: 100%;"> /*vecchio <div class="card card-bg card-noicon rounded"> */
        <a href="<?php echo get_permalink($servizio); ?>">
            <div class="card-body">
                <div class="card-icon-content" id="card-desc-<?php echo $servizio->ID; ?>">
                    <p><strong><?php echo $servizio->post_title; ?></strong></p>
                    <small><?php echo dsi_get_meta("sottotitolo", '_dsi_servizio_', $servizio->ID); ?></small>
                </div><!-- /card-icon-content -->
                /* aggiunta per immagine*/
                <div class="card-thumb">
                <img style="width: 100%; padding-top: 5px;" src="<?php echo $image_url; ?>" alt="">
			    </div>
            </div><!-- /card-body -->
        </a>
    </div><!-- /card card-bg rounded -->
    <?php
}
