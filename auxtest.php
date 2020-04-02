<?php
    echo system("whoami");
    $handle=fopen("myfile.txt","w");
    fwrite($handle,"anything");
    fclose($handle);

?>