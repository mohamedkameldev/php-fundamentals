<?php

/*
 * PHP is partially case-sensitive:
 *
 * Case-insensitive:
 *      - PHP constructs such as if, if-else, if-elseif, switch, while, do-while, etc.
 *      - Keywords such as true and false.
 *      - User-defined function & class names.
 *
 * Case-sensitive:
 *      - variables ($color != $Color != $COLOR)
 *      - Constants (WIDTH != width)
 */


/*
 * <?php echo $name ?> = <?php echo $name; ?>
 *
 * The closing tag of a PHP block (?>) automatically implies a semicolon (;).
 * Therefore, you don’t need to place a semicolon in the last statement in a PHP block.
 */

/*
 * If you mix PHP code with HTML, you must write the enclosing tag <?php   ?>
 *
 * If a file contains only PHP code, the enclosing tag is optional (but it's prefable to don't write it).
 *
 * Shorter way to show the value of a variable on a page: <?= $variable_name ?>
 */
