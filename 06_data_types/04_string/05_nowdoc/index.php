<?php

/*
 * nowdoc string is similar to a heredoc string except that [it doesn’t expand the variables].
 * nowdoc’s syntax is similar to the heredoc’s syntax except that,
 * the identifier which follows the <<< operator needs to be enclosed in single quotes.
 *
 * Nowdoc strings are like single-quoted strings without escaping.
 */

echo '<pre>';
$name = 'Mohamed';

$text = <<<'Identifier'
this is my name: $name
place a string here
it can span multiple lines
and include single quote ' and double quotes "
Identifier;


echo $text;

echo '</pre>';
