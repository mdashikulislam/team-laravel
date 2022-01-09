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
function getGenderDropdown($selected = ''){
    $data = ['Male','Female','Common'];
    $html = '<option value="">Select Gender</option>';
    foreach ($data as $d){
        $html .="<option value='";
        $html .=$d."'";
        if ($selected == $d){
           $html .=" selected ";
       }
        $html .=">".$d."</option>";
    }
    return $html;
}
