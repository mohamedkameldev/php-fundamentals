<?php

/**
 * resource is a special variable that holds a reference to an external resource.
 * you don't create a variable of type resource, instead of that,
 * they are created by functions provided by various PHP extensions (e.g., fopen, mysqli_connect, imagecreate).
 *
 * file is a resource of type (stream)
 * mysqli connection is a resource of type (mysqli link)
 *      pdo is an object, not a resource
 * image is a resource of type (gd)
 * socket is a resource of type (stream)
 *
 * is_resource(): true or false.
 * get_resource_type(): return the type of the resource.
 */
