<?php
goto a;
echo"helo world".PHP_EOL;

a:
echo"helo A".PHP_EOL;

while (true){
    echo $i . PHP_EOL ;
    $i++;
    
    if ($i > 10) {
        goto end;
    }
}
    
end:
echo"End Loop";