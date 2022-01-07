<?php

function getColorDropdown($selected = ''){
    $colors = ['blue','red','yellow','black'];
    $html = '';
    foreach ($colors as $color){
        $html .="<select ";
        if ($selected == $color){
            $html .= 'selected';
        }
        $html .=" value='$color'>";
        $html .=$color;
        $html .="</select>";
    }
    return $html;
}

