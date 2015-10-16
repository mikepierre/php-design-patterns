<?php

abstract class ObserverAbstract
{
    abstract function update(AbstractSubject $subject);
}

abstract class AbstractSubject
{
    abstract function attach(ObserverAbstract $observer);
	abstract function detach(ObserverAbstract $observer);
	abstract function notify();
}

class ObserverPattern extends ObserverAbstract
{
    public function __construct(){}
	
	public function update(AbstractSubject $subject)
	{
	    echo $subject->getBest();
	}
}

class SubjectPattern extends AbstractSubject
{
    private $bestPatterns = NULL;
	private $observers = array();
    
	public function __construct(){}
	
	function attach(ObserverAbstract $observer)
	{
	    $this->observers[] = $observer;
	}
	
	function detach(ObserverAbstract $observer)
	{
      foreach($this->observers as $okey => $oval) 
	  {
        if ($oval == $observer_in)
		 { 
          unset($this->observers[$okey]);
        }
      }
	}
    
	function notify()
	{
      foreach($this->observers as $obs)
	  {
        $obs->update($this);
      }
	}	
	
	function updateBest($newBests)
	{
	    $this->best = $newBests;
		$this->notify();
	}
	
	function getBest()
	{
	    return $this->best();
	}
	
}

$SubjectPattern = new SubjectPattern();
$ObserverPattern = new ObserverPattern();

$SubjectPattern->attach($ObserverPattern);
$SubjectPattern->updateBest("The best, the coolest, the greatest");
$SubjectPattern->detach($ObserverPattern);
$SubjectPattern->updateBest("The best, the coolest, the greatest");
