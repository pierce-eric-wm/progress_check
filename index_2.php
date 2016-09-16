<?php
class clapton{
    var $eric;
    var $song;
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
class song extends clapton{

    protected function set_song($new_song){
        if ($new_song == "Layla"){
            $this->song=$new_song;
        }
        else if($new_name=="Layla"){
            $this->song=$new_song;
            clapton::set_name($song);
        }
    }
    function __construct($song){
        $this->set_name($song);
    }
}