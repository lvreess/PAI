<?php
    $chessboard = array(
        array('w','s','g','h','k','g','s','w'),
        array('p','p','p','p','p','p','p','p'),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array('P','P','P','P','P','P','P','P'),
        array('W','S','G','H','K','G','S','W'),
    );
    echo "<pre>";
    
	$chessboard[4][5] = "P";
	$chessboard[6][5] = " ";
	 foreach($chessboard as $row)
    {
        foreach($row as $piece)
            echo "$piece";
        echo "<br>";
    }
    echo "</pre>";
?>