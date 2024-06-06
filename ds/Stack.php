<?php
// Article link of theory: https://www.simplilearn.com/tutorials/data-structure-tutorial/stacks-in-data-structures
class Stack {
    private $stack = [];
    private $size;
    private $top = -1;

    public function __construct( int $size = 5 ) {
        $this->size = $size;
    }

    public function isFull() {
        return $this->top === $this->size - 1;
    }

    public function isEmpty() {
        return $this->top === -1;
    }

    public function push( $value ) {
        if ( $this->isFull() ) {
            print_r( $this->stack);
            throw new Exception("Stack is Full\n");
        }
        ++$this->top;
        $this->stack[$this->top] = $value;
        return $this;
    }

    public function pop() {
        if ( $this->isEmpty() ) {
            throw new Exception("Stack is Empty\n");
        }
        array_pop( $this->stack );
        --$this->top;
        return $this;
    }

    public function getStack() {
        return $this->stack;
    }

    public function peak() {
        if ( $this->isEmpty() ) {
            throw new Exception("Stack is Empty\n");
        }
        return $this->stack[$this->top];
    }
}