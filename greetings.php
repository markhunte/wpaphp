<?php
    // define variables and set to empty values
    $name = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
     
        $name = test_input($_POST["name"]);
       
        
    }
    
    
    $people = '{
        "cc"   : "To Joe, bob & boby,
        
        "standard"   : ""
    }';
    
    
   $mainText = '{
        "mt" : "Have a good one and hope you enjoy the new Year and freedom",
        "ac" : "& a Happy New Year",
        "ic" : "Have a great time and Happy new year",
        "cc"   : "and a Happy new year, I hope you all have a fantastic time..  Will see you in the new year..promise",
        "eb"   : "and I hope you all enjoy a Happy new year, ",
        "rw"   : "Have a great time and Happy new year",
        "lg"   : "<br>and A very Happy New year",
        "as"   : "& a Happy New Year",
        "rm"   : "<br>and a Happy new year, I hope you all have a great time..",
        "ar"   : "<br>and a Happy new year, I hope you both have a Bril time..",
        "cr"   : "<br>and a have a wonderful New year..",
        "vw"   : "<br>& a Happy New Year",
        "lm"   : "<br>& a Happy New Year",
        "afs"   :"<br>and a have a great New year..",
        "mct"   : "<br>and a Happy new year, I hope you all have a fantastic time..",
        
        
        "jh"    : "<br>and a Happy New year, I hope you all have a great time..",
        "jill"    : "<br>and a Happy New year, I hope you all have a great time..",
        "mel1"    : "and a Happy new year, I hope you have a fantastic time..  Will see new years for more fun. Thanks for being a great friend,",
        "jo90"    : "and a Happy new year, have a great time with Ma & Pa & Will see new years for more fun. Thanks for being a great friend,",
        "lhawk"    : "<br>and a Happy new year, I hope you all have a fantastic time..",
        
        "tumult"   : "<br>and a Happy new year, I hope you all have a super time..",
        
        "tnick"   : "<br>and a Happy new year, I hope you have a fantastic time..",
        
        "standard"   : "and Happy new year"
    }';
    
    
   $wishes = '{
        "mt" : "Best Wishes, ",
        "ac" : "Best wishes",
        "ic" : " Best wishes",
        "cc"   : "Lots of love & Best wishes, ",
        "eb"   : "Lots of love & Best wishes, ",
        "rw"   : " Best wishes",
        "lg"   : "Lots of teabag love",
        "as"   : "Best wishes",
        "rm"   : "Best wishes",
        "ar"   : "Lots of love & Best wishes, ",
        "cr"   : "Lots of love & Best wishes, ",
        "vw"   : "Lots of love & Best wishes, ",
        "lm"   : "Best wishes",
        "afs"   : "Best scissors... I mean wishes ",
        "mct"   : "Best wishes",
        
        "jh"   : "Best wishes  & Lots of love , ",
        "jill"    : "Best wishes  & Lots of love , ",
        "mel1"    : "Best wishes  & love  you lots, ",
        "jo90" : "Best wishes  & love  you lots, ",
        "lhawk"    : "Best wishes  & Lots of love , ",
        
        "tumult"   : "Best wishes",
        
        "tnick"   : " Best wishes",
        
        
        "standard"   : "Best Wishes, "
    }';
    
    $signOff = '{
        "mt" : "Mark. xx",
        "ac" : "Mark. xx",
        "ic" : "Mark, xxx",
        "cc"   : "Mark, xxx ",
        "eb"   : "Mark, xxx",
        "rw" : "Mark. x",
        "lg"   : "Mark, xxx",
        "as"   : "Mark",
        "rm"   : "Mark, x",
        "ar"   : "Mark, xxx",
        "tnick"   : " Mark",
        "cr"   : "Mark, xxx",
        "vw" : "Mark. xx",
        "lm" : "Mark. ",
        "afs" : "Mark. ",
        "mct": "Mark",
        
        "jh": "Mark, xx",
        "jill": "Mark, xx",
        "mel1"    : "Mark, xxx",
        "jo90"    : "Mark, xxx",
        "lhawk"    : "Mark, xxx",
        "tumult"   : "Mark",
        
        "tnick"   : "Mark",
        
        
        "standard"   : "Mark."
    }';
    
    
    
   $peopleObject = json_decode($people);
    
    $peopleValue = $peopleObject->{$name};
    //
    
    $mainTextObject = json_decode($mainText);
    
    $mainTextValue = $mainTextObject->{$name};
    
    //
    
    $wishesObject = json_decode($wishes);
    
    $wishesValue = $wishesObject->{$name};
    
    //
    $signOffObject = json_decode($signOff);
    
   $signOffValue = $signOffObject->{$name};
   
    
    $stack = array();
    array_push($stack, $peopleValue  , $mainTextValue,$wishesValue,$signOffValue);
    print_r(json_encode($stack));
    // print_r($stack);
    
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    ?>