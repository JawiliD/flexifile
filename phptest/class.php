<?php

class person{

    var $name = "Pedro";

    function set_name($new_name){//method na tawag sa kanya hindi na function since nasa loob na siya ng class
        $this->name = $new_name; //this refers to the class
    }

    function get_name(){
        return $this->name;
    }

    
}

class boy extends person{// extends para mapagsama yung mga class

    var $height;
    function set_height($new_height){
        $this->height = $new_height;
    }

    function get_height(){
        return $this->height;
    }
}

?> 