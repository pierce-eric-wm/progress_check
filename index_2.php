<?php
class clapton{
    var $eric;
    private $name;
    public $clapton;
    function __construct($my_name)
    {
        $this->eric=$my_name;
    }
    private function get_private_name(){
    return $this->name;
}
    public function get_name(){
        return $this->eric;
    }
    function set_name($new_name){
        $this->eric= $new_name;
    }
}