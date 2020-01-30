<?php

/**
 * @param string $routeName
 * @return string
 */
function is_active(string $Products)
{
    return null !== request()->segment(1) && request()->segment(1) == $Products ? 'active' : '';
}

function is_activec(string $Categories)
{
    return null !== request()->segment(1) && request()->segment(1) == $Categories ? 'active' : '';
}

