<?php

/**
 * iterable data type:
 * داتا تايب بتقبل إن نلف عليها - كل عنصر عارف مين بعده
 *  represents any value that can be looped through using foreach.
 * arrays are iterable
 * any object that: implement the Traversable interface is iterable.
 *
 * note that: Traversable interface includes the Iterator and IteratorAggregate interfaces.
 *
 * most of data structures need to implement Iterator or IteratorAggregate interfaces to be Iterables.
 */
