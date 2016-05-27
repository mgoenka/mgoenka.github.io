<?php
    session_start();
    $maxround = 15;

    $gate = $_REQUEST['gate'];

    do
    {

    if ($_SESSION['counter'] == 0)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);

        if ($pirate1 < 28)
            $pgate1 = "1";
        else if ($pirate1 < 82)
            $pgate1 = "2";
        else if ($pirate1 < 143)
            $pgate1 = "3";
        else if ($pirate1 < 176)
            $pgate1 = "4";
        else if ($pirate1 < 203)
            $pgate1 = "5";
        else if ($pirate1 < 207)
            $pgate1 = "6";
        else if ($pirate1 < 255)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 28)
            $pgate2 = "1";
        else if ($pirate2 < 82)
            $pgate2 = "2";
        else if ($pirate2 < 143)
            $pgate2 = "3";
        else if ($pirate2 < 176)
            $pgate2 = "4";
        else if ($pirate2 < 203)
            $pgate2 = "5";
        else if ($pirate2 < 207)
            $pgate2 = "6";
        else if ($pirate2 < 255)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 28)
            $pgate3 = "1";
        else if ($pirate3 < 82)
            $pgate3 = "2";
        else if ($pirate3 < 143)
            $pgate3 = "3";
        else if ($pirate3 < 176)
            $pgate3 = "4";
        else if ($pirate3 < 203)
            $pgate3 = "5";
        else if ($pirate3 < 207)
            $pgate3 = "6";
        else if ($pirate3 < 255)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if ($_SESSION['counter'] == 1)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);
        if ($pirate1 < 38)
            $pgate1 = "1";
        else if ($pirate1 < 73)
            $pgate1 = "2";
        else if ($pirate1 < 89)
            $pgate1 = "3";
        else if ($pirate1 < 129)
            $pgate1 = "4";
        else if ($pirate1 < 178)
            $pgate1 = "5";
        else if ($pirate1 < 237)
            $pgate1 = "6";
        else if ($pirate1 < 255)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 38)
            $pgate2 = "1";
        else if ($pirate2 < 73)
            $pgate2 = "2";
        else if ($pirate2 < 89)
            $pgate2 = "3";
        else if ($pirate2 < 129)
            $pgate2 = "4";
        else if ($pirate2 < 178)
            $pgate2 = "5";
        else if ($pirate2 < 237)
            $pgate2 = "6";
        else if ($pirate2 < 255)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 38)
            $pgate3 = "1";
        else if ($pirate3 < 73)
            $pgate3 = "2";
        else if ($pirate3 < 89)
            $pgate3 = "3";
        else if ($pirate3 < 129)
            $pgate3 = "4";
        else if ($pirate3 < 178)
            $pgate3 = "5";
        else if ($pirate3 < 237)
            $pgate3 = "6";
        else if ($pirate3 < 255)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if ($_SESSION['counter'] == 2)
    {
        $pirate1 = rand(0, 200);
        $pirate2 = rand(0, 200);
        $pirate3 = rand(0, 200);
        if ($pirate1 < 5)
            $pgate1 = "1";
        else if ($pirate1 < 43)
            $pgate1 = "2";
        else if ($pirate1 < 102)
            $pgate1 = "4";
        else if ($pirate1 < 132)
            $pgate1 = "5";
        else if ($pirate1 < 144)
            $pgate1 = "6";
        else if ($pirate1 < 176)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 5)
            $pgate2 = "1";
        else if ($pirate2 < 43)
            $pgate2 = "2";
        else if ($pirate2 < 102)
            $pgate2 = "4";
        else if ($pirate2 < 132)
            $pgate2 = "5";
        else if ($pirate2 < 144)
            $pgate2 = "6";
        else if ($pirate2 < 176)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        $pgate3 = "3";
    }
    else if ($_SESSION['counter'] == 3)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);
        if ($pirate1 < 33)
            $pgate1 = "1";
        else if ($pirate1 < 84)
            $pgate1 = "2";
        else if ($pirate1 < 106)
            $pgate1 = "3";
        else if ($pirate1 < 152)
            $pgate1 = "4";
        else if ($pirate1 < 188)
            $pgate1 = "5";
        else if ($pirate1 < 200)
            $pgate1 = "6";
        else if ($pirate1 < 251)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 33)
            $pgate2 = "1";
        else if ($pirate2 < 84)
            $pgate2 = "2";
        else if ($pirate2 < 106)
            $pgate2 = "3";
        else if ($pirate2 < 152)
            $pgate2 = "4";
        else if ($pirate2 < 188)
            $pgate2 = "5";
        else if ($pirate2 < 200)
            $pgate2 = "6";
        else if ($pirate2 < 251)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 33)
            $pgate3 = "1";
        else if ($pirate3 < 84)
            $pgate3 = "2";
        else if ($pirate3 < 106)
            $pgate3 = "3";
        else if ($pirate3 < 152)
            $pgate3 = "4";
        else if ($pirate3 < 188)
            $pgate3 = "5";
        else if ($pirate3 < 200)
            $pgate3 = "6";
        else if ($pirate3 < 251)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if ($_SESSION['counter'] == 4)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);
        if ($pirate1 < 12)
            $pgate1 = "1";
        else if ($pirate1 < 47)
            $pgate1 = "2";
        else if ($pirate1 < 74)
            $pgate1 = "3";
        else if ($pirate1 < 106)
            $pgate1 = "4";
        else if ($pirate1 < 161)
            $pgate1 = "5";
        else if ($pirate1 < 213)
            $pgate1 = "6";
        else if ($pirate1 < 249)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 12)
            $pgate2 = "1";
        else if ($pirate2 < 47)
            $pgate2 = "2";
        else if ($pirate2 < 74)
            $pgate2 = "3";
        else if ($pirate2 < 106)
            $pgate2 = "4";
        else if ($pirate2 < 161)
            $pgate2 = "5";
        else if ($pirate2 < 213)
            $pgate2 = "6";
        else if ($pirate2 < 249)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 12)
            $pgate3 = "1";
        else if ($pirate3 < 47)
            $pgate3 = "2";
        else if ($pirate3 < 74)
            $pgate3 = "3";
        else if ($pirate3 < 106)
            $pgate3 = "4";
        else if ($pirate3 < 161)
            $pgate3 = "5";
        else if ($pirate3 < 213)
            $pgate3 = "6";
        else if ($pirate3 < 249)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if ($_SESSION['counter'] == 5)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);
        if ($pirate1 < 15)
            $pgate1 = "1";
        else if ($pirate1 < 69)
            $pgate1 = "2";
        else if ($pirate1 < 160)
            $pgate1 = "3";
        else if ($pirate1 < 179)
            $pgate1 = "4";
        else if ($pirate1 < 217)
            $pgate1 = "5";
        else if ($pirate1 < 241)
            $pgate1 = "6";
        else if ($pirate1 < 269)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 15)
            $pgate2 = "1";
        else if ($pirate2 < 69)
            $pgate2 = "2";
        else if ($pirate2 < 160)
            $pgate2 = "3";
        else if ($pirate2 < 179)
            $pgate2 = "4";
        else if ($pirate2 < 217)
            $pgate2 = "5";
        else if ($pirate2 < 241)
            $pgate2 = "6";
        else if ($pirate2 < 269)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 15)
            $pgate3 = "1";
        else if ($pirate3 < 69)
            $pgate3 = "2";
        else if ($pirate3 < 160)
            $pgate3 = "3";
        else if ($pirate3 < 179)
            $pgate3 = "4";
        else if ($pirate3 < 217)
            $pgate3 = "5";
        else if ($pirate3 < 241)
            $pgate3 = "6";
        else if ($pirate3 < 269)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if ($_SESSION['counter'] == 6)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);
        if ($pirate1 < 45)
            $pgate1 = "1";
        else if ($pirate1 < 45)
            $pgate1 = "2";
        else if ($pirate1 < 108)
            $pgate1 = "3";
        else if ($pirate1 < 159)
            $pgate1 = "4";
        else if ($pirate1 < 188)
            $pgate1 = "5";
        else if ($pirate1 < 204)
            $pgate1 = "6";
        else if ($pirate1 < 246)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 45)
            $pgate2 = "1";
        else if ($pirate2 < 45)
            $pgate2 = "2";
        else if ($pirate2 < 108)
            $pgate2 = "3";
        else if ($pirate2 < 159)
            $pgate2 = "4";
        else if ($pirate2 < 188)
            $pgate2 = "5";
        else if ($pirate2 < 204)
            $pgate2 = "6";
        else if ($pirate2 < 246)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 45)
            $pgate3 = "1";
        else if ($pirate3 < 45)
            $pgate3 = "2";
        else if ($pirate3 < 108)
            $pgate3 = "3";
        else if ($pirate3 < 159)
            $pgate3 = "4";
        else if ($pirate3 < 188)
            $pgate3 = "5";
        else if ($pirate3 < 204)
            $pgate3 = "6";
        else if ($pirate3 < 246)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if ($_SESSION['counter'] == 7)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);
        if ($pirate1 < 0)
            $pgate1 = "1";
        else if ($pirate1 < 0)
            $pgate1 = "2";
        else if ($pirate1 < 41)
            $pgate1 = "3";
        else if ($pirate1 < 104)
            $pgate1 = "4";
        else if ($pirate1 < 134)
            $pgate1 = "5";
        else if ($pirate1 < 187)
            $pgate1 = "6";
        else if ($pirate1 < 237)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 0)
            $pgate2 = "1";
        else if ($pirate2 < 0)
            $pgate2 = "2";
        else if ($pirate2 < 41)
            $pgate2 = "3";
        else if ($pirate2 < 104)
            $pgate2 = "4";
        else if ($pirate2 < 134)
            $pgate2 = "5";
        else if ($pirate2 < 187)
            $pgate2 = "6";
        else if ($pirate2 < 237)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 0)
            $pgate3 = "1";
        else if ($pirate3 < 0)
            $pgate3 = "2";
        else if ($pirate3 < 41)
            $pgate3 = "3";
        else if ($pirate3 < 104)
            $pgate3 = "4";
        else if ($pirate3 < 134)
            $pgate3 = "5";
        else if ($pirate3 < 187)
            $pgate3 = "6";
        else if ($pirate3 < 237)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if ($_SESSION['counter'] == 8)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);
        if ($pirate1 < 4)
            $pgate1 = "1";
        else if ($pirate1 < 63)
            $pgate1 = "2";
        else if ($pirate1 < 121)
            $pgate1 = "3";
        else if ($pirate1 < 173)
            $pgate1 = "4";
        else if ($pirate1 < 177)
            $pgate1 = "5";
        else if ($pirate1 < 233)
            $pgate1 = "6";
        else if ($pirate1 < 298)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 4)
            $pgate2 = "1";
        else if ($pirate2 < 63)
            $pgate2 = "2";
        else if ($pirate2 < 121)
            $pgate2 = "3";
        else if ($pirate2 < 173)
            $pgate2 = "4";
        else if ($pirate2 < 177)
            $pgate2 = "5";
        else if ($pirate2 < 233)
            $pgate2 = "6";
        else if ($pirate2 < 298)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 4)
            $pgate3 = "1";
        else if ($pirate3 < 63)
            $pgate3 = "2";
        else if ($pirate3 < 121)
            $pgate3 = "3";
        else if ($pirate3 < 173)
            $pgate3 = "4";
        else if ($pirate3 < 177)
            $pgate3 = "5";
        else if ($pirate3 < 233)
            $pgate3 = "6";
        else if ($pirate3 < 298)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if ($_SESSION['counter'] == 9)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);
        if ($pirate1 < 34)
            $pgate1 = "1";
        else if ($pirate1 < 91)
            $pgate1 = "2";
        else if ($pirate1 < 91)
            $pgate1 = "3";
        else if ($pirate1 < 141)
            $pgate1 = "4";
        else if ($pirate1 < 179)
            $pgate1 = "5";
        else if ($pirate1 < 186)
            $pgate1 = "6";
        else if ($pirate1 < 243)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 34)
            $pgate2 = "1";
        else if ($pirate2 < 91)
            $pgate2 = "2";
        else if ($pirate2 < 91)
            $pgate2 = "3";
        else if ($pirate2 < 141)
            $pgate2 = "4";
        else if ($pirate2 < 179)
            $pgate2 = "5";
        else if ($pirate2 < 186)
            $pgate2 = "6";
        else if ($pirate2 < 243)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 34)
            $pgate3 = "1";
        else if ($pirate3 < 91)
            $pgate3 = "2";
        else if ($pirate3 < 91)
            $pgate3 = "3";
        else if ($pirate3 < 141)
            $pgate3 = "4";
        else if ($pirate3 < 179)
            $pgate3 = "5";
        else if ($pirate3 < 186)
            $pgate3 = "6";
        else if ($pirate3 < 243)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if ($_SESSION['counter'] == 10)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);
        if ($pirate1 < 0)
            $pgate1 = "1";
        else if ($pirate1 < 35)
            $pgate1 = "2";
        else if ($pirate1 < 60)
            $pgate1 = "3";
        else if ($pirate1 < 88)
            $pgate1 = "4";
        else if ($pirate1 < 149)
            $pgate1 = "5";
        else if ($pirate1 < 206)
            $pgate1 = "6";
        else if ($pirate1 < 242)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 0)
            $pgate2 = "1";
        else if ($pirate2 < 35)
            $pgate2 = "2";
        else if ($pirate2 < 60)
            $pgate2 = "3";
        else if ($pirate2 < 88)
            $pgate2 = "4";
        else if ($pirate2 < 149)
            $pgate2 = "5";
        else if ($pirate2 < 206)
            $pgate2 = "6";
        else if ($pirate2 < 242)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 0)
            $pgate3 = "1";
        else if ($pirate3 < 35)
            $pgate3 = "2";
        else if ($pirate3 < 60)
            $pgate3 = "3";
        else if ($pirate3 < 88)
            $pgate3 = "4";
        else if ($pirate3 < 149)
            $pgate3 = "5";
        else if ($pirate3 < 206)
            $pgate3 = "6";
        else if ($pirate3 < 242)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if ($_SESSION['counter'] == 11)
    {
        $pirate1 = rand(0, 200);
        $pirate2 = rand(0, 200);
        $pirate3 = rand(0, 200);
        if ($pirate1 < 4)
            $pgate1 = "1";
        else if ($pirate1 < 57)
            $pgate1 = "2";
        else if ($pirate1 < 63)
            $pgate1 = "4";
        else if ($pirate1 < 94)
            $pgate1 = "5";
        else if ($pirate1 < 108)
            $pgate1 = "6";
        else if ($pirate1 < 119)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 4)
            $pgate2 = "1";
        else if ($pirate2 < 57)
            $pgate2 = "2";
        else if ($pirate2 < 63)
            $pgate2 = "4";
        else if ($pirate2 < 94)
            $pgate2 = "5";
        else if ($pirate2 < 108)
            $pgate2 = "6";
        else if ($pirate2 < 119)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        $pgate3 = "3";
    }
    else if ($_SESSION['counter'] == 12)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);
        if ($pirate1 < 34)
            $pgate1 = "1";
        else if ($pirate1 < 88)
            $pgate1 = "2";
        else if ($pirate1 < 101)
            $pgate1 = "3";
        else if ($pirate1 < 147)
            $pgate1 = "4";
        else if ($pirate1 < 184)
            $pgate1 = "5";
        else if ($pirate1 < 195)
            $pgate1 = "6";
        else if ($pirate1 < 248)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 34)
            $pgate2 = "1";
        else if ($pirate2 < 88)
            $pgate2 = "2";
        else if ($pirate2 < 101)
            $pgate2 = "3";
        else if ($pirate2 < 147)
            $pgate2 = "4";
        else if ($pirate2 < 184)
            $pgate2 = "5";
        else if ($pirate2 < 195)
            $pgate2 = "6";
        else if ($pirate2 < 248)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 34)
            $pgate3 = "1";
        else if ($pirate3 < 88)
            $pgate3 = "2";
        else if ($pirate3 < 101)
            $pgate3 = "3";
        else if ($pirate3 < 147)
            $pgate3 = "4";
        else if ($pirate3 < 184)
            $pgate3 = "5";
        else if ($pirate3 < 195)
            $pgate3 = "6";
        else if ($pirate3 < 248)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if ($_SESSION['counter'] == 13)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);
        if ($pirate1 < 0)
            $pgate1 = "1";
        else if ($pirate1 < 38)
            $pgate1 = "2";
        else if ($pirate1 < 65)
            $pgate1 = "3";
        else if ($pirate1 < 98)
            $pgate1 = "4";
        else if ($pirate1 < 155)
            $pgate1 = "5";
        else if ($pirate1 < 211)
            $pgate1 = "6";
        else if ($pirate1 < 246)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 0)
            $pgate2 = "1";
        else if ($pirate2 < 38)
            $pgate2 = "2";
        else if ($pirate2 < 65)
            $pgate2 = "3";
        else if ($pirate2 < 98)
            $pgate2 = "4";
        else if ($pirate2 < 155)
            $pgate2 = "5";
        else if ($pirate2 < 211)
            $pgate2 = "6";
        else if ($pirate2 < 246)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 0)
            $pgate3 = "1";
        else if ($pirate3 < 38)
            $pgate3 = "2";
        else if ($pirate3 < 65)
            $pgate3 = "3";
        else if ($pirate3 < 98)
            $pgate3 = "4";
        else if ($pirate3 < 155)
            $pgate3 = "5";
        else if ($pirate3 < 211)
            $pgate3 = "6";
        else if ($pirate3 < 246)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if ($_SESSION['counter'] == 14)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);
        if ($pirate1 < 13)
            $pgate1 = "1";
        else if ($pirate1 < 66)
            $pgate1 = "2";
        else if ($pirate1 < 161)
            $pgate1 = "3";
        else if ($pirate1 < 179)
            $pgate1 = "4";
        else if ($pirate1 < 217)
            $pgate1 = "5";
        else if ($pirate1 < 239)
            $pgate1 = "6";
        else if ($pirate1 < 268)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 13)
            $pgate2 = "1";
        else if ($pirate2 < 66)
            $pgate2 = "2";
        else if ($pirate2 < 161)
            $pgate2 = "3";
        else if ($pirate2 < 179)
            $pgate2 = "4";
        else if ($pirate2 < 217)
            $pgate2 = "5";
        else if ($pirate2 < 239)
            $pgate2 = "6";
        else if ($pirate2 < 268)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 13)
            $pgate3 = "1";
        else if ($pirate3 < 66)
            $pgate3 = "2";
        else if ($pirate3 < 161)
            $pgate3 = "3";
        else if ($pirate3 < 179)
            $pgate3 = "4";
        else if ($pirate3 < 217)
            $pgate3 = "5";
        else if ($pirate3 < 239)
            $pgate3 = "6";
        else if ($pirate3 < 268)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if (($_SESSION['counter'] < $maxround))
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);

        if ($pirate1 < 28)
            $pgate1 = "1";
        else if ($pirate1 < 82)
            $pgate1 = "2";
        else if ($pirate1 < 143)
            $pgate1 = "3";
        else if ($pirate1 < 176)
            $pgate1 = "4";
        else if ($pirate1 < 203)
            $pgate1 = "5";
        else if ($pirate1 < 207)
            $pgate1 = "6";
        else if ($pirate1 < 255)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 28)
            $pgate2 = "1";
        else if ($pirate2 < 82)
            $pgate2 = "2";
        else if ($pirate2 < 143)
            $pgate2 = "3";
        else if ($pirate2 < 176)
            $pgate2 = "4";
        else if ($pirate2 < 203)
            $pgate2 = "5";
        else if ($pirate2 < 207)
            $pgate2 = "6";
        else if ($pirate2 < 255)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 28)
            $pgate3 = "1";
        else if ($pirate3 < 82)
            $pgate3 = "2";
        else if ($pirate3 < 143)
            $pgate3 = "3";
        else if ($pirate3 < 176)
            $pgate3 = "4";
        else if ($pirate3 < 203)
            $pgate3 = "5";
        else if ($pirate3 < 207)
            $pgate3 = "6";
        else if ($pirate3 < 255)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }

    } while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

    if(!isset($_SESSION['counter']))
    {
        $_SESSION['counter'] = 1;
        $_SESSION['won'] = 0;
        $_SESSION['lost'] = 0;
        $_SESSION['points'] = 0;
    }
    else
    {
        $_SESSION['counter']++;
        $i = 1;
    }

    $_SESSION['selection'][$_SESSION['counter']] = $gate;

    if ($pgate2 < $pgate1)
    {
        $temp = $pgate1;
        $pgate1 = $pgate2;
        $pgate2 = $temp;
    }
    if ($pgate3 < $pgate1)
    {
        $temp = $pgate1;
        $pgate1 = $pgate3;
        $pgate3 = $temp;
    }
    if ($pgate3 < $pgate2)
    {
        $temp = $pgate2;
        $pgate2 = $pgate3;
        $pgate3 = $temp;
    }
    $_SESSION['guard'][$_SESSION['counter']][1] = $pgate1;
    $_SESSION['guard'][$_SESSION['counter']][2] = $pgate2;
    $_SESSION['guard'][$_SESSION['counter']][3] = $pgate3;

    if (($gate == "") || ($gate == null))
    {
        $_SESSION['counter']--;
    }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/"
      xmlns:fb="http://www.facebook.com/2008/fbml">


<head>

<meta name="google-site-verification" content="k7FHwFm9BvIqcIOqVtg-bAMkTaXC-CLs2RAtaqeypEc" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Keywords" content="mohit, goenka, mohitgoenka, mgoenka, moheet, goinka, gonka, castle, feedbacks, usc" />
<meta name="Description" content="This website is a place for curriculum as well as fun activities" />
<meta property="og:title" content="Mohit's Castle"/>
<meta property="og:type" content="activity"/>
<meta property="og:url" content="http://www.mohitgoenka.com"/>
<meta property="og:image" content="http://mgoenka.github.io/img/Castle.png"/>
<meta property="fb:admins" content="683925722"/>
<meta property="og:site_name" content="Mohit Goenka's Website"/>
<meta property="og:description" content="This website is a place for curriculum as well as fun activities"/>
<meta property="og:email" content="admin@mohitgoenka.com"/>

<!-- Your Site Title -->
<title  onload='right();'>Mohit's Castle</title>
<!-- END TITLE -->

<link rel="shortcut icon" href="http://mgoenka.github.io/Home/favicon.png" type="image/x-icon" />

<!-- CSS Style Sheets -->
<link rel="stylesheet" href="http://mgoenka.github.io/css/style.css" type="text/css" media="screen" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="green-theme" href="http://mgoenka.github.io/css/style2.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="blue-theme" href="http://mgoenka.github.io/css/style3.css" />
<!-- END CSS Style Sheet -->

<script type="text/javascript" src="http://mgoenka.github.io/index.js" language="JAVASCRIPT"></script>
<script type="text/javascript" src="http://mgoenka.github.io/css/New_Style.js" language="JAVASCRIPT"></script>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15301637-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<!--div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({appId: '138151759539266', status: true, cookie: true,
            xfbml: true});
    };
    (function() {
        var e = document.createElement('script');
        e.type = 'text/javascript';
        e.src = document.location.protocol +
          '//connect.facebook.net/en_US/all.js';
        e.async = true;
        document.getElementById('fb-root').appendChild(e);
      }());
</script-->

<noscript>
    Your browser does not support JavaScript! OR The JavaScript has been turned off!<br/>
    Please upgrade your browser OR turn on the JavaScript on your browser.
</noscript>

</head>



<body id="section-index">

<div id="header">

<!-- Your Site Name -->
<h1>Games</h1>
<!-- END Site Name -->


<!-- Your Site Slogan -->
<h2>Life takes turns. Either be a Perfectionist or a Workaholic. Time is Precious, Save as much as Possible.</h2>
<!-- END Site Slogan -->

<table><tr><td width="700px">
<!--fb:login-button show-faces="true" width="300"></fb:login-button-->
</td>

<td align="right" width="300px">
<form method="get" action="http://www.google.com/search" target="_blank" align="right">
    <input type="radio"  name="sitesearch" value="http://www.mohitgoenka.com" style="display: none;" checked />
    <input type="text"   name="q" size="30"    maxlength="255" value="" />
    <input type="submit" value="Search" /><br />
</form>
</td></tr></table>
</div>


<!-- Top Links -->
<div id="navigation" style="margin-bottom:5px;">
</div>
<!-- END Top Links -->



<!-- Change the banner by replacing the image in: img/orange/orange-banner.jpg -->
<div id="main-image" style="margin-bottom:5px;"></div>
<!-- END Banner -->


<div id="container">
<div id="content">


<!-- Content -->
<div id="content-main">

<!-- Homepage Article -->

<div class="post">

<div class="posttitle">
<h2 id="GT">The Guard and The Treasure</h2>
</div>

<?php if ($_SESSION['counter'] < $maxround) { ?>
<h3>Round <?php echo $_SESSION['counter']+1; ?> of 15</h3>
<?php } ?>

<?php
    if ($_SESSION['counter'] >= $maxround)
    { ?>
        <table align="center" cellspacing="10" cellpadding="50" bgcolor="black">
                <tr bgcolor = #555555>
                    <th>Round</th><th>Player's Door</th><th>Guards' Door</th><th>Won</th><th>Lost</th><th>Points</th>
                </tr>
    <?php
        $twon = 0;
        $tlost = 0;
        $tpoints = 0;
        $today = date("F j, Y, g:i a");
        $data = "\n".$_SESSION['pid'].",$today,";
        for ($i = 1; $i <= $maxround; $i++)
        {
            $data = $data.$_SESSION['selection'][$i].",";
            ?>
                <tr align = "center" >
                    <td><?php echo $i; ?></td>
                    <td><?php echo $_SESSION['selection'][$i]; ?></td>
                    <td><?php echo $_SESSION['guard'][$i][1]; ?>, <?php echo $_SESSION['guard'][$i][2]; ?> and <?php echo $_SESSION['guard'][$i][3]; ?></td>
                <?php if(($_SESSION['selection'][$i] != $_SESSION['guard'][$i][1]) && ($_SESSION['selection'][$i] != $_SESSION['guard'][$i][2]) && ($_SESSION['selection'][$i] != $_SESSION['guard'][$i][3]))
                    {
                        $twon++;
                        $won = "Yes";
                        $lost = "No";

                        if (($i == 1) || ($i == 4) || ($i == 7) || ($i == 10) || ($i == 13))
                        {
                            if ($_SESSION['selection'][$i] == "1") $points = 5;
                            else if ($_SESSION['selection'][$i] == "2") $points = 7;
                            else if ($_SESSION['selection'][$i] == "3") $points = 2;
                            else if ($_SESSION['selection'][$i] == "4") $points = 9;
                            else if ($_SESSION['selection'][$i] == "5") $points = 6;
                            else if ($_SESSION['selection'][$i] == "6") $points = 3;
                            else if ($_SESSION['selection'][$i] == "7") $points = 8;
                            else if ($_SESSION['selection'][$i] == "8") $points = 9;
                        }
                        else if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11) || ($i == 14))
                        {
                            if ($_SESSION['selection'][$i] == "1") $points = 2;
                            else if ($_SESSION['selection'][$i] == "2") $points = 5;
                            else if ($_SESSION['selection'][$i] == "3") $points = 5;
                            else if ($_SESSION['selection'][$i] == "4") $points = 4;
                            else if ($_SESSION['selection'][$i] == "5") $points = 10;
                            else if ($_SESSION['selection'][$i] == "6") $points = 7;
                            else if ($_SESSION['selection'][$i] == "7") $points = 8;
                            else if ($_SESSION['selection'][$i] == "8") $points = 9;
                        }
                        else if (($i == 3) || ($i == 6) || ($i == 9) || ($i == 12) || ($i == 15))
                        {
                            if ($_SESSION['selection'][$i] == "1") $points = 1;
                            else if ($_SESSION['selection'][$i] == "2") $points = 8;
                            else if ($_SESSION['selection'][$i] == "3") $points = 10;
                            else if ($_SESSION['selection'][$i] == "4") $points = 1;
                            else if ($_SESSION['selection'][$i] == "5") $points = 3;
                            else if ($_SESSION['selection'][$i] == "6") $points = 2;
                            else if ($_SESSION['selection'][$i] == "7") $points = 1;
                            else if ($_SESSION['selection'][$i] == "8") $points = 2;
                        }

                        $tpoints += $points;
                    } else {
                        $tlost++;
                        $won = "No";
                        $lost = "Yes";

                        if (($i == 1) || ($i == 4) || ($i == 7) || ($i == 10) || ($i == 13))
                        {
                            if ($_SESSION['selection'][$i] == "1") $points = -5;
                            else if ($_SESSION['selection'][$i] == "2") $points = -3;
                            else if ($_SESSION['selection'][$i] == "3") $points = -1;
                            else if ($_SESSION['selection'][$i] == "4") $points = -7;
                            else if ($_SESSION['selection'][$i] == "5") $points = -6;
                            else if ($_SESSION['selection'][$i] == "6") $points = -10;
                            else if ($_SESSION['selection'][$i] == "7") $points = -4;
                            else if ($_SESSION['selection'][$i] == "8") $points = -5;
                        }
                        else if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11) || ($i == 14))
                        {
                            if ($_SESSION['selection'][$i] == "1") $points = -1;
                            else if ($_SESSION['selection'][$i] == "2") $points = -3;
                            else if ($_SESSION['selection'][$i] == "3") $points = -6;
                            else if ($_SESSION['selection'][$i] == "4") $points = -2;
                            else if ($_SESSION['selection'][$i] == "5") $points = -4;
                            else if ($_SESSION['selection'][$i] == "6") $points = -2;
                            else if ($_SESSION['selection'][$i] == "7") $points = -9;
                            else if ($_SESSION['selection'][$i] == "8") $points = -4;
                        }
                        else if (($i == 3) || ($i == 6) || ($i == 9) || ($i == 12) || ($i == 15))
                        {
                            if ($_SESSION['selection'][$i] == "1") $points = -10;
                            else if ($_SESSION['selection'][$i] == "2") $points = -8;
                            else if ($_SESSION['selection'][$i] == "3") $points = -1;
                            else if ($_SESSION['selection'][$i] == "4") $points = -7;
                            else if ($_SESSION['selection'][$i] == "5") $points = -6;
                            else if ($_SESSION['selection'][$i] == "6") $points = -9;
                            else if ($_SESSION['selection'][$i] == "7") $points = -4;
                            else if ($_SESSION['selection'][$i] == "8") $points = -6;
                        }

                        $tpoints += $points;
                    } ?>

                    <td><?php echo $won; ?></td>
                    <td><?php echo $lost; ?></td>
                    <td><?php echo $points; ?></td>
                </tr>
    <?php    } ?>
        <tr align = "center">
            <td>Total</td><td></td><td></td><td><?php echo $twon; ?></td><td><?php echo $tlost; ?></td><td><?php echo $tpoints; ?></td>
        </tr>
    </table>
<?php
    $data = $data.$twon.",".$tlost.",".$tpoints;
    $handle = fopen('scores.csv', 'a+');
    fwrite($handle, $data);
    fclose($handle);
} ?>

<div class="entry">

<?php if ($_SESSION['counter'] < $maxround) { ?>
<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
<br/>

<table align="center" cellspacing="10" cellpadding="50" bgcolor="black">
    <tr bgcolor = #555555 align="center">
        <th>Gates</th>
        <th>Gate 1<br/><Input type="radio" name="gate" value="1"/></th>
        <th>Gate 2<br/><Input type="radio" name="gate" value="2"/></th>
        <th>Gate 3<br/><Input type="radio" name="gate" value="3"/></th>
        <th>Gate 4<br/><Input type="radio" name="gate" value="4"/></th>
        <th>Gate 5<br/><Input type="radio" name="gate" value="5"/></th>
        <th>Gate 6<br/><Input type="radio" name="gate" value="6"/></th>
        <th>Gate 7<br/><Input type="radio" name="gate" value="7"/></th>
        <th>Gate 8<br/><Input type="radio" name="gate" value="8"/></th>
    </tr>
<?php } ?>

<?php if ($_SESSION['counter'] == 0) { ?>
    <tr align="center">
        <td bgcolor = #555555 align="left">Probabilities</td>
        <td valign="bottom">0.28<br/><img src="Images/p3.jpg"></td>
        <td valign="bottom">0.54<br/><img src="Images/p5.jpg"></td>
        <td valign="bottom">0.61<br/><img src="Images/p6.jpg"></td>
        <td valign="bottom">0.33<br/><img src="Images/p3.jpg"></td>
        <td valign="bottom">0.27<br/><img src="Images/p3.jpg"></td>
        <td valign="bottom">0.04<br/><img src="Images/p0.jpg"></td>
        <td valign="bottom">0.48<br/><img src="Images/p5.jpg"></td>
        <td valign="bottom">0.45<br/><img src="Images/p5.jpg"></td>
    </tr>
<?php } else if ($_SESSION['counter'] == 1) { ?>
    <tr align="center" >
        <td bgcolor = #555555 align="left" rowspan="2">Probabilities</td><td>0.38</td><td>0.35</td><td>0.16</td><td>0.40</td><td>0.49</td><td>0.59</td><td>0.18</td><td>0.45</td>
    </tr>
    <tr align="center" valign="bottom">
        <td><img src="Images/p4.jpg"></td>
        <td><img src="Images/p4.jpg"></td>
        <td><img src="Images/p2.jpg"></td>
        <td><img src="Images/p4.jpg"></td>
        <td><img src="Images/p5.jpg"></td>
        <td><img src="Images/p6.jpg"></td>
        <td><img src="Images/p2.jpg"></td>
        <td><img src="Images/p5.jpg"></td>
    </tr>
<?php } else if ($_SESSION['counter'] == 2) { ?>
    <tr align="center" >
        <td bgcolor = #555555 align="left" rowspan="2">Probabilities</td><td>0.05</td><td>0.38</td><td>1.00</td><td>0.59</td><td>0.30</td><td>0.12</td><td>0.32</td><td>0.24</td>
    </tr>
    <tr align="center" valign="bottom">
        <td><img src="Images/p1.jpg"></td>
        <td><img src="Images/p4.jpg"></td>
        <td><img src="Images/p10.jpg"></td>
        <td><img src="Images/p6.jpg"></td>
        <td><img src="Images/p3.jpg"></td>
        <td><img src="Images/p1.jpg"></td>
        <td><img src="Images/p3.jpg"></td>
        <td><img src="Images/p2.jpg"></td>
    </tr>
<?php } else if ($_SESSION['counter'] == 3) { ?>
    <tr align="center" >
        <td bgcolor = #555555 align="left" rowspan="2">Probabilities</td><td>0.33</td><td>0.51</td><td>0.22</td><td>0.46</td><td>0.36</td><td>0.12</td><td>0.51</td><td>0.49</td>
    </tr>
    <tr align="center" valign="bottom">
        <td><img src="Images/p3.jpg"></td>
        <td><img src="Images/p5.jpg"></td>
        <td><img src="Images/p2.jpg"></td>
        <td><img src="Images/p5.jpg"></td>
        <td><img src="Images/p4.jpg"></td>
        <td><img src="Images/p1.jpg"></td>
        <td><img src="Images/p5.jpg"></td>
        <td><img src="Images/p5.jpg"></td>
    </tr>
<?php } else if ($_SESSION['counter'] == 4) { ?>
    <tr align="center" >
        <td bgcolor = #555555 align="left" rowspan="2">Probabilities</td><td>0.12</td><td>0.35</td><td>0.27</td><td>0.32</td><td>0.55</td><td>0.52</td><td>0.36</td><td>0.51</td>
    </tr>
    <tr align="center" valign="bottom">
        <td><img src="Images/p1.jpg"></td>
        <td><img src="Images/p4.jpg"></td>
        <td><img src="Images/p3.jpg"></td>
        <td><img src="Images/p3.jpg"></td>
        <td><img src="Images/p6.jpg"></td>
        <td><img src="Images/p5.jpg"></td>
        <td><img src="Images/p4.jpg"></td>
        <td><img src="Images/p5.jpg"></td>
    </tr>
<?php } else if ($_SESSION['counter'] == 5) { ?>
    <tr align="center" >
        <td bgcolor = #555555 align="left" rowspan="2">Probabilities</td><td>0.15</td><td>0.54</td><td>0.91</td><td>0.19</td><td>0.38</td><td>0.24</td><td>0.28</td><td>0.31</td>
    </tr>
    <tr align="center" valign="bottom">
        <td><img src="Images/p2.jpg"></td>
        <td><img src="Images/p5.jpg"></td>
        <td><img src="Images/p9.jpg"></td>
        <td><img src="Images/p2.jpg"></td>
        <td><img src="Images/p4.jpg"></td>
        <td><img src="Images/p2.jpg"></td>
        <td><img src="Images/p3.jpg"></td>
        <td><img src="Images/p3.jpg"></td>
    </tr>
<?php } else if ($_SESSION['counter'] == 6) { ?>
    <tr align="center" >
        <td bgcolor = #555555 align="left" rowspan="2">Probabilities</td><td>0.45</td><td>0.00</td><td>0.63</td><td>0.51</td><td>0.29</td><td>0.16</td><td>0.42</td><td>0.54</td>
    </tr>
    <tr align="center" valign="bottom">
        <td><img src="Images/p5.jpg"></td>
        <td><img src="Images/p0.jpg"></td>
        <td><img src="Images/p6.jpg"></td>
        <td><img src="Images/p5.jpg"></td>
        <td><img src="Images/p3.jpg"></td>
        <td><img src="Images/p2.jpg"></td>
        <td><img src="Images/p4.jpg"></td>
        <td><img src="Images/p5.jpg"></td>
    </tr>
<?php } else if ($_SESSION['counter'] == 7) { ?>
    <tr align="center" >
        <td bgcolor = #555555 align="left" rowspan="2">Probabilities</td><td>0.00</td><td>0.00</td><td>0.41</td><td>0.63</td><td>0.30</td><td>0.53</td><td>0.50</td><td>0.63</td>
    </tr>
    <tr align="center" valign="bottom">
        <td><img src="Images/p0.jpg"></td>
        <td><img src="Images/p0.jpg"></td>
        <td><img src="Images/p4.jpg"></td>
        <td><img src="Images/p6.jpg"></td>
        <td><img src="Images/p3.jpg"></td>
        <td><img src="Images/p5.jpg"></td>
        <td><img src="Images/p5.jpg"></td>
        <td><img src="Images/p6.jpg"></td>
    </tr>
<?php } else if ($_SESSION['counter'] == 8) { ?>
    <tr align="center" >
        <td bgcolor = #555555 align="left" rowspan="2">Probabilities</td><td>0.04</td><td>0.59</td><td>0.58</td><td>0.52</td><td>0.04</td><td>0.56</td><td>0.65</td><td>0.02</td>
    </tr>
    <tr align="center" valign="bottom">
        <td><img src="Images/p0.jpg"></td>
        <td><img src="Images/p6.jpg"></td>
        <td><img src="Images/p6.jpg"></td>
        <td><img src="Images/p5.jpg"></td>
        <td><img src="Images/p0.jpg"></td>
        <td><img src="Images/p6.jpg"></td>
        <td><img src="Images/p7.jpg"></td>
        <td><img src="Images/p0.jpg"></td>
    </tr>
<?php } else if ($_SESSION['counter'] == 9) { ?>
    <tr align="center" >
        <td bgcolor = #555555 align="left" rowspan="2">Probabilities</td><td>0.34</td><td>0.57</td><td>0.00</td><td>0.50</td><td>0.38</td><td>0.07</td><td>0.57</td><td>0.57</td>
    </tr>
    <tr align="center" valign="bottom">
        <td><img src="Images/p3.jpg"></td>
        <td><img src="Images/p6.jpg"></td>
        <td><img src="Images/p0.jpg"></td>
        <td><img src="Images/p5.jpg"></td>
        <td><img src="Images/p4.jpg"></td>
        <td><img src="Images/p1.jpg"></td>
        <td><img src="Images/p6.jpg"></td>
        <td><img src="Images/p6.jpg"></td>
    </tr>
<?php } else if ($_SESSION['counter'] == 10) { ?>
    <tr align="center" >
        <td bgcolor = #555555 align="left" rowspan="2">Probabilities</td><td>0.00</td><td>0.35</td><td>0.25</td><td>0.28</td><td>0.61</td><td>0.57</td><td>0.36</td><td>0.58</td>
    </tr>
    <tr align="center" valign="bottom">
        <td><img src="Images/p0.jpg"></td>
        <td><img src="Images/p4.jpg"></td>
        <td><img src="Images/p3.jpg"></td>
        <td><img src="Images/p3.jpg"></td>
        <td><img src="Images/p6.jpg"></td>
        <td><img src="Images/p6.jpg"></td>
        <td><img src="Images/p4.jpg"></td>
        <td><img src="Images/p6.jpg"></td>
    </tr>
<?php } else if ($_SESSION['counter'] == 11) { ?>
    <tr align="center" >
        <td bgcolor = #555555 align="left" rowspan="2">Probabilities</td><td>0.04</td><td>0.53</td><td>1.00</td><td>0.06</td><td>0.31</td><td>0.14</td><td>0.11</td><td>0.81</td>
    </tr>
    <tr align="center" valign="bottom">
        <td><img src="Images/p0.jpg"></td>
        <td><img src="Images/p5.jpg"></td>
        <td><img src="Images/p10.jpg"></td>
        <td><img src="Images/p1.jpg"></td>
        <td><img src="Images/p3.jpg"></td>
        <td><img src="Images/p1.jpg"></td>
        <td><img src="Images/p1.jpg"></td>
        <td><img src="Images/p8.jpg"></td>
    </tr>
<?php } else if ($_SESSION['counter'] == 12) { ?>
    <tr align="center" >
        <td bgcolor = #555555 align="left" rowspan="2">Probabilities</td><td>0.34</td><td>0.54</td><td>0.13</td><td>0.46</td><td>0.37</td><td>0.11</td><td>0.53</td><td>0.52</td>
    </tr>
    <tr align="center" valign="bottom">
        <td><img src="Images/p3.jpg"></td>
        <td><img src="Images/p5.jpg"></td>
        <td><img src="Images/p1.jpg"></td>
        <td><img src="Images/p5.jpg"></td>
        <td><img src="Images/p4.jpg"></td>
        <td><img src="Images/p1.jpg"></td>
        <td><img src="Images/p5.jpg"></td>
        <td><img src="Images/p5.jpg"></td>
    </tr>
<?php } else if ($_SESSION['counter'] == 13) { ?>
    <tr align="center" >
        <td bgcolor = #555555 align="left" rowspan="2">Probabilities</td><td>0.00</td><td>0.38</td><td>0.27</td><td>0.33</td><td>0.57</td><td>0.56</td><td>0.35</td><td>0.54</td>
    </tr>
    <tr align="center" valign="bottom">
        <td><img src="Images/p0.jpg"></td>
        <td><img src="Images/p4.jpg"></td>
        <td><img src="Images/p3.jpg"></td>
        <td><img src="Images/p3.jpg"></td>
        <td><img src="Images/p6.jpg"></td>
        <td><img src="Images/p6.jpg"></td>
        <td><img src="Images/p4.jpg"></td>
        <td><img src="Images/p5.jpg"></td>
    </tr>
<?php } else if ($_SESSION['counter'] == 14) { ?>
    <tr align="center" >
        <td bgcolor = #555555 align="left" rowspan="2">Probabilities</td><td>0.13</td><td>0.53</td><td>0.95</td><td>0.18</td><td>0.38</td><td>0.22</td><td>0.29</td><td>0.32</td>
    </tr>
    <tr align="center" valign="bottom">
        <td><img src="Images/p1.jpg"></td>
        <td><img src="Images/p5.jpg"></td>
        <td><img src="Images/p10.jpg"></td>
        <td><img src="Images/p2.jpg"></td>
        <td><img src="Images/p4.jpg"></td>
        <td><img src="Images/p2.jpg"></td>
        <td><img src="Images/p3.jpg"></td>
        <td><img src="Images/p3.jpg"></td>
    </tr>
<?php } else if ($_SESSION['counter'] < $maxround) { ?>
    <tr align="center" >
        <td bgcolor = #555555 align="left" rowspan="2">Probabilities</td><td>0.28</td><td>0.54</td><td>0.61</td><td>0.33</td><td>0.27</td><td>0.04</td><td>0.48</td><td>0.45</td>
    </tr>
    <tr align="center" valign="bottom">
        <td><img src="Images/p3.jpg"></td>
        <td><img src="Images/p5.jpg"></td>
        <td><img src="Images/p6.jpg"></td>
        <td><img src="Images/p3.jpg"></td>
        <td><img src="Images/p3.jpg"></td>
        <td><img src="Images/p0.jpg"></td>
        <td><img src="Images/p5.jpg"></td>
        <td><img src="Images/p5.jpg"></td>
    </tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 0) || ($_SESSION['counter'] == 3) || ($_SESSION['counter'] == 6) || ($_SESSION['counter'] == 9) || ($_SESSION['counter'] == 12)) { ?>
    <tr align="center">
        <td bgcolor = #555555 align="left">Player Rewards</td>
        <td valign="bottom">5<br/><img src="Images/w5.jpg"></td>
        <td valign="bottom">7<br/><img src="Images/w7.jpg"></td>
        <td valign="bottom">2<br/><img src="Images/w2.jpg"></td>
        <td valign="bottom">9<br/><img src="Images/w9.jpg"></td>
        <td valign="bottom">6<br/><img src="Images/w6.jpg"></td>
        <td valign="bottom">3<br/><img src="Images/w3.jpg"></td>
        <td valign="bottom">8<br/><img src="Images/w8.jpg"></td>
        <td valign="bottom">9<br/><img src="Images/w9.jpg"></td>
    </tr>
    <tr align="center">
        <td bgcolor = #555555 align="left">Player Penalties</td>
        <td valign="top"><img src="Images/l5.jpg"><br/>-5</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
        <td valign="top"><img src="Images/l1.jpg"><br/>-1</td>
        <td valign="top"><img src="Images/l7.jpg"><br/>-7</td>
        <td valign="top"><img src="Images/l6.jpg"><br/>-6</td>
        <td valign="top"><img src="Images/l10.jpg"><br/>-10</td>
        <td valign="top"><img src="Images/l4.jpg"><br/>-4</td>
        <td valign="top"><img src="Images/l5.jpg"><br/>-5</td>
    </tr>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Guard Rewards</td><td>8</td><td>5</td><td>8</td><td>7</td><td>4</td><td>1</td><td>2</td><td>7</td>
    </tr>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Guard Penalties</td><td>-8</td><td>-1</td><td>-9</td><td>-9</td><td>-6</td><td>-7</td><td>-7</td><td>-9</td>
    </tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 1) || ($_SESSION['counter'] == 4) || ($_SESSION['counter'] == 7) || ($_SESSION['counter'] == 10) || ($_SESSION['counter'] == 13)) { ?>
    <tr align="center">
        <td bgcolor = #555555 align="left">Player Rewards</td>
        <td valign="bottom">2<br/><img src="Images/w2.jpg"></td>
        <td valign="bottom">5<br/><img src="Images/w5.jpg"></td>
        <td valign="bottom">5<br/><img src="Images/w5.jpg"></td>
        <td valign="bottom">4<br/><img src="Images/w4.jpg"></td>
        <td valign="bottom">10<br/><img src="Images/w10.jpg"></td>
        <td valign="bottom">7<br/><img src="Images/w7.jpg"></td>
        <td valign="bottom">8<br/><img src="Images/w8.jpg"></td>
        <td valign="bottom">9<br/><img src="Images/w9.jpg"></td>
    </tr>
    <tr align="center">
        <td bgcolor = #555555 align="left">Player Penalties</td>
        <td valign="top"><img src="Images/l1.jpg"><br/>-1</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
        <td valign="top"><img src="Images/l6.jpg"><br/>-6</td>
        <td valign="top"><img src="Images/l2.jpg"><br/>-2</td>
        <td valign="top"><img src="Images/l4.jpg"><br/>-4</td>
        <td valign="top"><img src="Images/l2.jpg"><br/>-2</td>
        <td valign="top"><img src="Images/l9.jpg"><br/>-9</td>
        <td valign="top"><img src="Images/l4.jpg"><br/>-4</td>
    </tr>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Guard Rewards</td><td>1</td><td>7</td><td>7</td><td>8</td><td>5</td><td>5</td><td>5</td><td>5</td>
    </tr>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Guard Penalties</td><td>-1</td><td>-1</td><td>-7</td><td>-9</td><td>-3</td><td>-7</td><td>-9</td><td>-10</td>
    </tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 2) || ($_SESSION['counter'] == 5) || ($_SESSION['counter'] == 8) || ($_SESSION['counter'] == 11) || ($_SESSION['counter'] == 14)) { ?>
    <tr align="center">
        <td bgcolor = #555555 align="left">Player Rewards</td>
        <td valign="bottom">1<br/><img src="Images/w1.jpg"></td>
        <td valign="bottom">8<br/><img src="Images/w8.jpg"></td>
        <td valign="bottom">10<br/><img src="Images/w10.jpg"></td>
        <td valign="bottom">1<br/><img src="Images/w1.jpg"></td>
        <td valign="bottom">3<br/><img src="Images/w3.jpg"></td>
        <td valign="bottom">2<br/><img src="Images/w2.jpg"></td>
        <td valign="bottom">1<br/><img src="Images/w1.jpg"></td>
        <td valign="bottom">2<br/><img src="Images/w2.jpg"></td>
    </tr>
    <tr align="center">
        <td bgcolor = #555555 align="left">Player Penalties</td>
        <td valign="top"><img src="Images/l10.jpg"><br/>-10</td>
        <td valign="top"><img src="Images/l8.jpg"><br/>-8</td>
        <td valign="top"><img src="Images/l1.jpg"><br/>-1</td>
        <td valign="top"><img src="Images/l7.jpg"><br/>-7</td>
        <td valign="top"><img src="Images/l6.jpg"><br/>-6</td>
        <td valign="top"><img src="Images/l9.jpg"><br/>-9</td>
        <td valign="top"><img src="Images/l4.jpg"><br/>-4</td>
        <td valign="top"><img src="Images/l6.jpg"><br/>-6</td>
    </tr>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Guard Rewards</td><td>6</td><td>7</td><td>5</td><td>2</td><td>2</td><td>7</td><td>9</td><td>7</td>
    </tr>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Guard Penalties</td><td>-2</td><td>-8</td><td>-4</td><td>-10</td><td>-3</td><td>-10</td><td>-7</td><td>-1</td>
    </tr>
<?php } ?>

<?php if ($_SESSION['counter'] < $maxround) { ?>
</table>

<br/>Please choose a door to attack. Press the Submit Button to confirm your selection.<br/>
<br/>

<input type="submit" type="submit" name="submit_form" id="submit_form" value="Submit">
</form>
<?php } ?>

<?php if ($_SESSION['counter'] >= $maxround) { ?>
    <br/>
    If you are among the top scorers, your score will soon be uploaded on the website.<br/>
    <br/>

    Click to upload your score to Facebook<br/>
    <input id="uploadfacebook" type="submit" value="Upload to Facebook" onclick="uploadToFacebook()" />
<?php } ?>

<script type="text/javascript">
    function uploadToFacebook()
    {
        FB_RequireFeatures(["Api"],function()
        {
            FB.init("3bdf35a7c722a4a6e636c1e96da4334f","xd_receiver.htm");
            FB.Connect.requireSession();
            FB.Facebook.get_sessionState().waitUntilReady(function()
            {
                FB.Connect.streamPublish('is playing the game of "The Guard and The Treasure".',{"name": "<?php echo $_SESSION['name']; ?> won <?php echo $tpoints; ?> points by winning <?php echo $twon; ?> of <?php echo $maxround; ?> rounds. Find out how much you can win!","caption": "Let's beat the guard and steal some treasure! Click to launch the Game!", "href": "http://games.mohitgoenka.com", "media": [{'type':'image','src':'http://games.mohitgoenka.com/Images/treasure.jpg','href':'http://games.mohitgoenka.com'}], "action_links": [{"text":"Play the game of \"The Guard and The Treasure\"!","href":"http://games.mohitgoenka.com"}],"app_has_no_session":false,"body_general":null})
            });
        });
    }
</script>

<script type="text/javascript" src="http://static.ak.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php"></script>

</div>
</div>
<br />

<!-- END Homepage Article -->

<!-- Homepage Article >

<div class="post">

<div class="posttitle">
<h2 id="comment">Comments</h2>
</div>

<div class="entry" style="background-color:#eceff5; padding: 0.45em;">
    <fb:comments width="541"></fb:comments>
</div>

</div>
<br />

<!-- END Homepage Article -->

</div>

<!-- END Content -->


<!-- Right Side Menu -->

<div id="nav-right" style="margin-bottom:5px;">

</div>

<!-- END Right Side Menu -->


<!-- Footer -->
</div>
</div>

<div class="footer-area" style="margin-top:5px;"><b>Copyright &copy; 2010 - All Rights Reserved</b>

<div id="back-to-top"><a href="javascript:backToTop()">Back to Top</a>
</div>

</div>

<div class="Theme-Sponsors" style="margin-bottom:5px;" align="left">This Page was last updated on August 10, 2010</div>
<!-- END Footer -->

</body>

</html>