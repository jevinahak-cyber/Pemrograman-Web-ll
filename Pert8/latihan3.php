<?php

function repeat($text, $num = 10)
{
    echo "<ol>";

    for ($i = 0; $i < $num; $i++)
    {
        echo "<li>$text</li>";
    }

    echo "</ol>";
}

// Memanggil repeat dengan dua argument
repeat("I'm the best", 15);

// Memanggil repeat dengan satu argument
repeat("You're the man");

?>