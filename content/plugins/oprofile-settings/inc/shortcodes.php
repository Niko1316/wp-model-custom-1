<?php

function oprofile_sc_twitter($atts, $content = 'Me suivre'){

    // if(isset($attributs['pseudonyme'])) {
    //     $pseudonyme = $attributs['pseudonyme'];
    //
    // }else {
    //     $pseudonyme = 'mariefrance78michu58';
    // }

    $attributs = shortcode_atts(
        [
            'pseudonyme' => 'mariefrance78michu54'
        ],
        $atts
    );

    $content = empty($content) ? 'Me suivre' : $content;


    $return = '<a href="https://twitter.com/mariefrance78michu54' .$attributs['pseudonyme'].'"   class="action-button">';
    $return .= '<i class="fa fa-twitter"></i>';
    $return .= '<span>' .$content. '</span>';
    $return .= '</a>';

    return $return;
}

add_shortcode('twitter', 'oprofile_sc_twitter');
