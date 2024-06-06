# About

Implementation of Stack, Queue and Set data structure using php.

## Stack Class Available methods

- isFull() -- return true if stack is Full
- isEmpty() -- return true if stack is Empty
- push($value) - insert item to stack
- pop() - remove item to stack
- getStack() - get the stack
- peak() - return top item of the stack

### How to use?

```php
try {
    $stack = new Stack();
    print_r( $stack->push( 1 )->push( 2 )->push( 3 )->pop()->push( 4 )->getStack() );
} catch ( \Throwable $th ) {
    echo $th->getMessage();
}
```

Method chaining is available for `push` and `pop`

You can define Stack size. For example: `new Stack(10)`. Default size is `5`

## Queue Class Available methods

- isFull() -- return true if queue is Full
- isEmpty() -- return true if queue is Empty
- enqueue($value) - insert item to queue
- dequeue() - remove item to queue
- getQueue() - get the queue
- peak() - return top item of the queue
- output() - Get details of the queue

### How to use?

```php
try {
    $queue = new Queue();
    print_r( $queue->enqueue( 1 )->dequeue()->enqueue( 2 )->enqueue( 3 )->enqueue( 4 )->enqueue( 5 )->getQueue() );
    $queue->dequeue()->output();
} catch ( \Throwable $th ) {
    print_r( $th->getMessage() );
}
```

Method chaining is available for `enqueue` and `dequeue`

You can define Queue size. For example: `new Queue(10)`. Default size is `5`

## Set Class Available methods

- add($value) - insert item to Set
- remove($value) - remove item to Set
- isExists($value) - if value exists in the Set
- getSet() - get the Set array
- getSize() - get the Size of the Set
- max() - Get the maximum value of the Set
- min() - Get the minimum value of the Set

### How to use?

```php
try {
    $set = new Set();
    print_r( $set->add( 5 )->add( 6 )->add( 5 )->remove( 6 )->add( 9 )->getSet() );
    echo "Max value: " . $set->max() . "\n";
    echo "Set size: " . $set->getSize() . "\n";
} catch ( \Throwable $th ) {
    echo $th->getMessage();
}
```

Method chaining is available for `add` and `remove`

**Note:** Example Code is given in `index.php`