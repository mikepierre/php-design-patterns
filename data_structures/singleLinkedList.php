<?php
class Node 
{
    var $data;
    var $next;

    __construct($data, $next)
    {
    	$this->data = $data;
    	$this->next = $next;
    }

}


class SingleList 
{
    var $head = null;
    var $tail = null;

    public function show() 
    {
    	$currentNode = $this->head;
    	while ($currentNode != null) {
    		echo $currentNode->data;
    		$currentNode = $currentNode->next;
    	}
    }

    public function append($data) 
    {
    	$node = new Node($data, null);
    	if($this->head == null) {
    		$this->head = $this->tail;
    		$this->tail = $node;
    	} else {
    		$this->tail->next = $node;
    	}
        $this->tail = $node;
    }

    public function remove($nodeValue) 
    {
    	$currentNode = $this->head;
    	$previousNode = null;
    	while ($currentNode->data != null) {
    		if($currentNode->data == $nodeValue) {
    			if($previousNode != null) {
    				$previousNode->next = $currentNode->next;
    			} else {
    				$this->head = $currentNode->next;
    			}
    			$previousNode = $currentNode;
    			$currentNode = $currentNode->next;
    		}
    	}
    }

}

$s = new SingleList();

$s->append(1);
$s->append(2);
$s->show();
$s->remove(1);
$s->show();
?>
