<?php
function multiplication_func( $atts ) {
    $res = $atts['var']*2;
    return 'Результат умножения переменной из шорткода на 2  = '.$res;
}
add_shortcode( 'multiplication', 'multiplication_func' );
?>