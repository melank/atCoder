<?php

function solution(): string {
    $bottle = fn($n) => match(true) {
        $n === 0 => "no more bottles",
        $n === 1 => "1 bottle",
        default  => "{$n} bottles"
    };
    
    $verse = fn($n) => $n > 0
        ? "{$bottle($n)} of beer on the wall, {$bottle($n)} of beer.\nTake one down and pass it around, {$bottle($n-1)} of beer on the wall."
        : "No more bottles of beer on the wall, no more bottles of beer.\nGo to the store and buy some more, 99 bottles of beer on the wall.";
    
    return implode("\n\n", array_map($verse, range(99, 0)));
}
