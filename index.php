<?php
require "autoload.php";

echo "\n========== Stack ==========\n===========================\n";
try {
    $stack = new Stack();
    print_r( $stack->push( 1 )->push( 2 )->push( 3 )->pop()->push( 4 )->getStack() );
    echo "Peak is: " . $stack->peak() . "\n";
    $stack->push( 5 )->push( 6 )->push( 10 );
} catch ( \Throwable $th ) {
    echo $th->getMessage();
}

echo "\n========== Queue ==========\n===========================\n";

try {
    $queue = new Queue();
    print_r( $queue->enqueue( 1 )->dequeue()->enqueue( 2 )->enqueue( 3 )->enqueue( 4 )->enqueue( 5 )->getQueue() );
    echo "Peak is: " . $queue->peak() . "\n";
    $queue->dequeue()->output();
} catch ( \Throwable $th ) {
    print_r( $th->getMessage() );
}

echo "\n========== Set ==========\n=========================\n";

try {
    $set = new Set();
    // print_r( $set->remove( 1 ) );
    print_r( $set->add( 5 )->add( 6 )->add( 5 )->remove( 6 )->add( 9 )->getSet() );
    echo "Max value: " . $set->max() . "\n";
    echo "Set size: " . $set->getSize() . "\n";
} catch ( \Throwable $th ) {
    echo $th->getMessage();
}
