<?php
/**
 * Created by PhpStorm.
 * User: emmaedgar
 * Date: 1/22/16
 * Time: 1:59 PM
 */


// Only if shortcode does not already exist
if ( ! shortcode_exists( 'pin-embed' ) ) {


    function pe_shortcode_atts( $atts ) {
        $atts = shortcode_atts(
            array(
                'url' => '',
                'size' => 'small',
                'description' => 'true',
                'align' => 'center',
            ), $atts, 'pin_embed' );


        if( $atts['url'] == '' )
            return;

        wp_enqueue_script('pin-embed-js');
        wp_enqueue_style('pin-embed-styles');

        $classes = 'pe-align-' . $atts['align'];


        $html = '<div class="' . $classes . '"><a data-pin-do="embedPin" ';
        if ($atts['size'] == 'medium' || $atts['size'] == 'large') $html .= 'data-pin-width="' . $atts['size'] . '" ';
        if($atts['description'] == 'false') $html .= 'data-pin-terse="true" ';
        $html .= 'href="' . $atts['url'] . '"></a></div>';

        return $html;
    }
    add_shortcode( 'pin-embed', 'pe_shortcode_atts' );


}