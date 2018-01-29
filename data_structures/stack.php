<?php
class stack 
{
    public $the_stack = [];
    public $top = -1;

    /**
     * @param array $data
     */
    public function push(array $data)
    {
        if(!$this->isFull()) {
            $top = $this->top + 1;
            $the_stack[$top] = $data;
        }
    }

    /**
     * @return mixed|string
     */
    public function pop() 
    {
        $data = '';
        if(!$this->isEmpty()) {
            $data = $this->the_stack[$top];
            $top = $this->top - 1;
            return $data;
        }
    }

    /**
     * @return mixed
     */
    public function peek() 
    {
        return $this->the_stack[$this->top];
    }

    /**
     * @return int
     */
    public function isFull() 
    {
        if($this->top == -1) {
            return -1;
        } else {
            return 0;
        }
    }

    /**
     * @return int
     */
    public function isEmpty() 
    {
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
