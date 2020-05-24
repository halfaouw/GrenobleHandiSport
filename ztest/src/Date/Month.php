<?php

namespace App\Date;
/**
 *
 */
class Month {

  public $days = [ 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];


  private $months = ['Janvier', 'Février', 'Mars' , 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre' ,'Décembre'];
  public $month;
  public $year;


  public function __construct(?int $month = null, ?int $year = null)
  {
    if ($month == null || $month < 1 || $month > 12 ){
      $month = intval(date('m'));
    }
    if ($year == null){
      $this->month = $month;
      $this->year = $year;

      $year = intval(date('Y'));
    }

    $this->month = $month;
    $this->year = $year;
  }

  public function getStartingDay() :  \DateTime {
    return new \DateTime( "{$this->year}-{$this->month}-01" );
  }

  public function toString() : string{
    return $this->months[$this->month - 1] . ' ' . $this->year;
  }

  public function getWeeks(): int{
    $start = $this->getStartingDay();
    $end = (clone $start)->modify('+1 month -1 day');

    echo"end".intval($end->format('W'))."////// start".intval($start->format('W'))."\n";

    $weeks = intval($end->format('W')) - intval($start->format('W')) +1;
    echo " Nombre de semaine1 = $weeks";

/*
    if ($weeks < 0){
      $end = (clone $start)->modify('+4 week');
      $weeks = intval($end->format('W')) - intval($start->format('W')) +2;
      echo " Nombre de semaine = $weeks";
      $weeks = 12;

    }
*/

    if ($weeks < 0){
      echo "Blabla 1--";
      $weeks = intval($end->format('W'))+1;
    }
    /*
    if ($this->month == 12) {
      echo "Blabla 2--";
      $end = (clone $start)->modify('+4 week');
      $weeks = intval($end->format('W')) - intval($start->format('W')) +2;
    }
    */

    if ($start->format('w') == 1) {
      echo " Nombre de semaine = $weeks";

      $weeks +=1;
    }

    echo " Nombre de semaine = $weeks";
    return $weeks;
  }

  public function withinMonth (\DateTime $date):bool{
      return $this->getStartingDay()->format('Y-m') === $date->format('Y-m');
  }

  public function nextMonth(): Month {
    $month = $this->month + 1;
    $year = $this->year;
    if ($month > 12) {
      $month = 1;
      $year += 1;
    }
    return new Month($month, $year);
  }

  public function previousMonth(): Month {
    $month = $this->month - 1;
    $year = $this->year;
    if ($month < 1) {
      $month = 12;
      $year -= 1;
    }
    return new Month($month, $year);
  }

}





 ?>
