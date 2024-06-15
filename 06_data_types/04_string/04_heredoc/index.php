<?php

/**
 * with heredoc:
 *   - you don't need to escape characters, it will print them as they are.
 *   - string can contain multiple lines
 *   - string can includes single quotes (‘) or double quotes (“).
 *   - you can use variables inside it, and heredoc will expand them.
 *   - generate HTML dynamically inside the string.
 *
 * Heredoc strings are like double-quoted strings without escaping.
 */
echo '<pre>';
$he = 'Bob';
$she = 'Alice';

// with "" you need to escape special characters
$text = "$he said \"PHP is awesome\".
\"Of course\" $she agreed.";
echo $text . '<br>';


// Heredoc will display special characters - newline - single and double quotes - variables.
$text = <<<TEXT
$he said "PHP is awesome".
"Of course" $she agreed.
TEXT;
echo $text . '<br>';


// Heredoc can display HTML code:
$page = <<<HTML
<ul>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ul>
HTML;
echo $page . '<br>';

echo '</pre>';
