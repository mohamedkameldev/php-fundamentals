<?php

$color = 'Red';
$color2 = 'Blue';
$color3 = 'Black';

$fav_color = $color ?? $color2 ?? $color3 ?? 'No fav Color';
echo $fav_color;
