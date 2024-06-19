<?php

/**
 * Constructs:
 * -subset of keywords.
 * -look like functions, (but are not functions in the strict sense).
 * -typically do not require parentheses around their arguments,
 *      (although parentheses can be used).
 * -integral to the PHP syntax and are parsed directly by the PHP interpreter.
 * -more efficient in terms of execution compared to functions or methods,
 *      because they are part of the language core and are optimized for direct parsing and execution.
 *
 * examples of constructs:
 *      echo, print
 *      include, require, include_once, require_once
 *      isset, unset, empty
 *      exit, die
 *      return
 */
