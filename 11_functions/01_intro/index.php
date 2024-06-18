<?php

/**
 * Function allows you to assign a name to a code block,
 * then reuse that code block in multiple places without duplicating the code.
 *
 * Functions help you to achieve DRY concept.
 *
 *
 * when you call the function with parameters, you need to pass arguments into it.
 * Parameters: in the function signature.
 * Arguments: the data that be passed to the function when you call it.
 *
 *
 * The return statement immediately ends the execution of the current function and returns the value.
 */
function welcome_user($username)
{
    echo "<span>Welcome $username</span>";
}

welcome_user("mohamed");
