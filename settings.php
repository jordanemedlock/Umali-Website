<?php

function arrToAttr($arr){
    $str = "";
    if (is_array($arr)){
        foreach ($arr as $key => $value) {
            $str .= " $key='$value'";
        }
    } else {
        echo " ".gettype($arr).": ".$arr;
    }
    return $str;
}

function tag($t, $attrs=array(), $content=""){
    return "<$t".arrToAttr($attrs).($content===""? "/>" : ">$content</$t>");
}

function linkTo($str, $loc, $attrs=array(), $button=false){
    $attrs["href"] = "index.php?p=$loc";
    $attrs["class"] .= ($button? " btn": "");
    return tag('a', $attrs, $str);
}

function h($n, $content, $attrs=array()){
    return tag("h$n", $attrs, $content);
}

function img($addr, $attrs=array(), $local=true){
    $attrs["src"] = ($local? "data/photos/$addr" : $addr);
    return tag('img', $attrs);
}

function row($content, $attrs=array()){
    $attrs["class"] .= " row-fluid";
    return tag('div', $attrs, $content);
}

function cls($class, $addTo=array()){
    $addTo["class"] .= " ".$class;
    return $addTo;
}

function id($id, $addTo=array()){
    $addTo["id"] = $id;
    return $addTo;
}

function spanDiv($n, $content, $attrs=array()){
    return tag('div', span($n, $attrs), $content);
}

function span($n, $addTo=array()){
    return cls("span$n", $addTo);
}

function textBar($attrs=array()){
    $attrs["type"] = "text";
    return tag("input", $attrs);
}

function icon($name, $attrs=array()){
    return tag('i', cls("icon-$name", $attrs), " ");
}

?>