<?php

class movie {

    public $title;
    protected $year;
    public $category;
    public $duration;
    protected $cash;

    public function __construct($title, $category, $cash= 0 )
    {
        $this->title = $title;
        $this->category = $category;
        $this->cash = $cash;

    }

    public function setYear($year) {
        if (is_int($year) && $year >= 1895 && $year < 2050){
            $this->year = $year;
        } else{
            throw new Exception ('Is not a number');
        }
    }

    public function setDuration($duration) {
        if (is_int($duration) && $duration >= 60 && $duration < 320){
            $this->duration = $duration;
        }else{
          die();
        }
    }

    public function getYear() {
        return $this->year; 
      } 

    public function getMovieInfo(){
        return
        'Title:'.$this->title.'<br>'.
        'Category:'.$this->category. '<br>'.
        'Year:'.$this->year.'<br>';
      }

}
?>