<?php
    $link = get_post_meta( get_the_ID(), be_themes_get_meta_prefix() . 'link', true );
    $link_color = get_post_meta( get_the_ID(), be_themes_get_meta_prefix() . 'link_color', true );
    $link_bg_color = get_post_meta( get_the_ID(), be_themes_get_meta_prefix() . 'link_bg_color', true );

    if( !empty( $link ) ) {
        $link_style = '';
        $box_shadow_class = '';
        $border_radius = exponent_get_post_loop_prop( 'border_radius' );
        if( !empty( $border_radius ) ) {
            $border_radius = "border-radius : {$border_radius}px;";
        }else {
            $border_radius = '';
        }
        if( !empty( $link_color ) ) {
            $link_color = "color : {$link_color};";
        }else {
            $link_color = '';
        }
        if( !empty( $link_bg_color ) ) {
            $link_bg_color = "background : {$link_bg_color};";
        }else {
            $link_bg_color = '';
        }
        if( !empty( $link_bg_color ) || !empty( $link_color ) ) {
            $link_style = sprintf( 'style = "%s%s"', esc_attr( $link_color ), esc_attr( $link_bg_color ) );
        }
        ?>
            <a target="__blank" href="<?php echo esc_url( $link ); ?>" class="<?php echo be_themes_get_class( 'post-link' ); ?>" <?php echo !empty( $link_style ) ? $link_style : ''; ?>>
                <div class="<?php echo be_themes_get_class( 'post-link-icon' ); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
                        <g>
                            <path d="M27.4090909,2.45454545 C24.2727273,-0.681818182 19.2272727,-0.681818182 16.0909091,2.45454545 L13.6363636,4.77272727 C13.0909091,5.31818182 13.0909091,6.13636364 13.6363636,6.68181818 C14.1818182,7.22727273 15,7.22727273 15.5454545,6.68181818 L17.8636364,4.36363636 C20.0454545,2.31818182 23.3181818,2.31818182 25.5,4.36363636 C27.6818182,6.40909091 27.6818182,9.95454545 25.6363636,12 L21.5454545,16.0909091 C21.4090909,16.2272727 21.1363636,16.5 21,16.6363636 C18.5454545,18.4090909 15.1363636,18 13.3636364,15.5454545 C12.9545455,15 12,14.8636364 11.4545455,15.2727273 C10.9090909,15.6818182 10.7727273,16.6363636 11.1818182,17.1818182 C12.8181818,19.3636364 15.2727273,20.4545455 17.7272727,20.4545455 C19.3636364,20.4545455 21.1363636,19.9090909 22.6363636,18.8181818 C22.9090909,18.5454545 23.1818182,18.2727273 23.5909091,18 L27.6818182,13.9090909 C30.8181818,10.7727273 30.6818182,5.45454545 27.4090909,2.45454545 Z"/>
                            <path d="M14.3181818,23.3181818 L12,25.6363636 C9.81818182,27.6818182 6.54545455,27.6818182 4.36363636,25.6363636 C2.18181818,23.5909091 2.18181818,20.0454545 4.22727273,18 L8.31818182,13.9090909 C8.45454545,13.7727273 8.72727273,13.5 8.86363636,13.3636364 C10.0909091,12.5454545 11.4545455,12.1363636 12.9545455,12.2727273 C14.4545455,12.5454545 15.6818182,13.2272727 16.5,14.4545455 C16.9090909,15 17.8636364,15.1363636 18.4090909,14.7272727 C18.9545455,14.3181818 19.0909091,13.3636364 18.6818182,12.8181818 C17.3181818,11.0454545 15.4090909,9.95454545 13.3636364,9.68181818 C11.3181818,9.27272727 9.13636364,9.81818182 7.36363636,11.1818182 C7.09090909,11.4545455 6.81818182,11.7272727 6.54545455,12 L2.45454545,16.0909091 C-0.681818182,19.3636364 -0.545454545,24.5454545 2.59090909,27.6818182 C4.22727273,29.1818182 6.27272727,30 8.31818182,30 C10.3636364,30 12.4090909,29.1818182 14.0454545,27.6818182 L16.3636364,25.3636364 C16.9090909,24.8181818 16.9090909,24 16.3636364,23.4545455 C15.8181818,22.9090909 14.8636364,22.7727273 14.3181818,23.3181818 Z"/>
                        </g>
                    </svg>
                </div>
                <div class="<?php echo be_themes_get_class( 'post-link-url' ); ?>">
                    <?php echo esc_url( $link ); ?>
                </div>
            </a>
        <?php
    }