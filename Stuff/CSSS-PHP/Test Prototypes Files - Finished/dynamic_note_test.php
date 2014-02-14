<?php

    $file = array();
    $notes = array();
    $index = -1;
    
    $file[0] = "TextFiles/Notes.txt";
    $file[1] = "TextFiles/Notes2.txt";
    
    $contents = file($file[0]); 
    $string = implode("<br>", $contents);
    echo $string;
    
    echo "<br/>----------------<br/>";
    
    $contents = file($file[1]); 
    $string = implode("<br>", $contents);
    echo $string;
    
    $f = fopen("TextFiles/Minutes_File.txt", "r");
    
    while (!feof($f))
    {
        $index++;
        $arrM = explode("; ",fgets($f));
        $notes[$index] = $arrM[4];
        echo $notes[$index];
    }
    
    
    echo "<br/>----------------<br/>";
    
    $contents = file($notes[1]); 
    $string = implode("<br>", $contents);
    echo $string;
    
    echo "<br/>----------------<br/>";
    
    $contents = file($notes[1]); 
    $string = implode("<br>", $contents);
    echo $string;
    
    fclose($f);

?>