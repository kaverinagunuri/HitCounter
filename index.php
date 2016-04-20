<?php 
$filename='counter.txt';
function inc_count()
{
    global $filename;
    if(file_exists($filename))
//    {
//        $current_value=  file_get_contents($filename);
//    }
//    else{
//        $current_value=0;
//    }
        $current_value=(file_exists ($filename))?file_get_contents ($filename):0;
    file_put_contents($filename, ++$current_value);
    
}
inc_count(); 

?>
<html>
    <head>
        <title>
            Hit Counter
        </title>
    </head>
    <body>
        
    </body>
</html>