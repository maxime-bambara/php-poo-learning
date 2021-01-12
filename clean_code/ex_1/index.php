<?php

function isEven (int $number) : bool
{
    return $number %2 === 0;
}
var_dump(isEven(4));
//return true
var_dump(isEven(9));
//return false
