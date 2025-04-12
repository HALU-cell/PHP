<?php
function getSquareArea($base, $height)
{
    return $base * $height;
}
function getTriangleArea($base, $height)
{
    return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
    return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(6, 7) . "\n";
echo getTrapezoidArea(3, 5, 4);