<?php
// Article Link of Theory: https://www.programiz.com/dsa/queue
class Queue {
    public $queue = [];
    private $size;
    private $rear  = -1;
    private $front = -1;

    public function __construct( int $size = 5 ) {
        $this->size = $size;
    }

    public function isEmpty(): bool {
        return $this->front === -1;
    }

    public function isFull(): bool {
        return $this->rear === $this->size - 1;
    }

    public function peak() {
        if ( $this->isEmpty() ) {
            throw new Exception( "Queue is Empty" );
        }
        return $this->queue[$this->front];
    }

    public function output() {
        if ( $this->isEmpty() ) {
            echo "Queue is Empty";
            return;
        }
        if ( $this->isFull() ) {
            echo "Queue is Full\n";
        }
        print_r( $this->queue );
        echo "Front: {$this->queue[$this->front]}\n";
        echo "Rear: {$this->queue[$this->rear]}\n";
    }

    public function enqueue( $value ) {
        if ( $this->isFull() ) {
            throw new Exception( "Queue is full" );
        }
        if ( $this->front === -1 ) {
            $this->front = 0;
        }
        ++$this->rear;
        $this->queue[$this->rear] = $value;
        return $this;
    }

    public function dequeue() {
        if ( $this->isEmpty() ) {
            throw new Exception( "Queue is Empty" );
        }
        unset( $this->queue[$this->front] );
        if ( ( ( $this->rear === $this->front ) && ( $this->front === $this->size - 1 ) ) || ( $this->rear === $this->front ) && ( $this->front === 0 ) ) {
            $this->rear  = -1;
            $this->front = -1;
        } else {
            ++$this->front;
        }
        return $this;
    }

    public function getQueue() {
        return $this->queue;
    }
}