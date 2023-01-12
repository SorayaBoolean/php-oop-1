<?php

class movie {

    public $title;
    public $year;
    public $category;
    public $duration=null;
    protected $cash=null;

    public function __construct($title, $year, $category, $duration, $cash )
    {
        $this->title = $title;
        $this->year = $year;
        $this->category = $category;
        $this->duration = $duration;
        $this->cash = $cash;

    }

    


}
?>