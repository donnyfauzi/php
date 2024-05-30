<?php

for ($counter =1; $counter <=100; $counter++){
    if ($counter % 2 == 1){
        continue;
    }
    echo("counter:  $counter". PHP_EOL);
}