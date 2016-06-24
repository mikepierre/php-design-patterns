<?php
class stack {
	$the_stack = array();
	$top = -1;
	
	public function push($data = array()) {
		if(!$this->isFull()) {
			$top = $this->top + 1;
			$the_stack[$top] = $data;
		}
	}
	
	public function pop() {
		$data = '';
		if(!$this->isEmpty()) {
			$data = $this->the_stack[$top];
			$top = $this->top - 1;
			return $data;
		}
	}
	
	public function peek() {
		return $this->the_stack[$this->top];
	}
	
	public function isFull() {
		if($this->top == -1) {
			return -1;	
		} else {
			return 0;
		}
	}
	
	public function isEmpty() {
		if($this->top == -1) {
			return 1;
		} else {
			return 0;
		}
	}
}

$stack = new stack();

$stack->push(1);
$stack->push(2);

if($stack->isFull() == true) {
echo 'Stack is full';
}

if($stack->isEmpty() == true) {
echo 'Stack is empty';
}
?>
