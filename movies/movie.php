<?php

class movie {

    public $title;
    public $year;
    public $category;
    public $duration;
    protected $cash;

    public function __construct($title, $year, $category, $duration= null, $cash= null )
    {
        $this->title = $title;
        $this->year = $year;
        $this->category = $category;
        $this->duration = $duration;
        $this->cash = $cash;

    }

    


}
?>