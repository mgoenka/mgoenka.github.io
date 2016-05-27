<?php
    session_start();
    $maxround = 12;

    $gate = $_REQUEST['gate'];

    do
    {

    if ($_SESSION['counter'] == 0)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);

        if ($pirate1 < 54)
            $pgate1 = "1";
        else if ($pirate1 < 94)
            $pgate1 = "2";
        else if ($pirate1 < 112)
            $pgate1 = "3";
        else if ($pirate1 < 172)
            $pgate1 = "4";
        else if ($pirate1 < 181)
            $pgate1 = "5";
        else if ($pirate1 < 208)
            $pgate1 = "6";
        else if ($pirate1 < 265)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 54)
            $pgate2 = "1";
        else if ($pirate2 < 94)
            $pgate2 = "2";
        else if ($pirate2 < 112)
            $pgate2 = "3";
        else if ($pirate2 < 172)
            $pgate2 = "4";
        else if ($pirate2 < 181)
            $pgate2 = "5";
        else if ($pirate2 < 208)
            $pgate2 = "6";
        else if ($pirate2 < 265)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 54)
            $pgate3 = "1";
        else if ($pirate3 < 94)
            $pgate3 = "2";
        else if ($pirate3 < 112)
            $pgate3 = "3";
        else if ($pirate3 < 172)
            $pgate3 = "4";
        else if ($pirate3 < 181)
            $pgate3 = "5";
        else if ($pirate3 < 208)
            $pgate3 = "6";
        else if ($pirate3 < 265)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if ($_SESSION['counter'] == 1)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);

        if ($pirate1 < 59)
            $pgate1 = "1";
        else if ($pirate1 < 107)
            $pgate1 = "2";
        else if ($pirate1 < 107)
            $pgate1 = "3";
        else if ($pirate1 < 167)
            $pgate1 = "4";
        else if ($pirate1 < 170)
            $pgate1 = "5";
        else if ($pirate1 < 202)
            $pgate1 = "6";
        else if ($pirate1 < 259)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 59)
            $pgate2 = "1";
        else if ($pirate2 < 107)
            $pgate2 = "2";
        else if ($pirate2 < 107)
            $pgate2 = "3";
        else if ($pirate2 < 167)
            $pgate2 = "4";
        else if ($pirate2 < 170)
            $pgate2 = "5";
        else if ($pirate2 < 202)
            $pgate2 = "6";
        else if ($pirate2 < 259)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 59)
            $pgate3 = "1";
        else if ($pirate3 < 107)
            $pgate3 = "2";
        else if ($pirate3 < 107)
            $pgate3 = "3";
        else if ($pirate3 < 167)
            $pgate3 = "4";
        else if ($pirate3 < 170)
            $pgate3 = "5";
        else if ($pirate3 < 202)
            $pgate3 = "6";
        else if ($pirate3 < 259)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if ($_SESSION['counter'] == 2)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);
        if ($pirate1 < 56)
            $pgate1 = "1";
        else if ($pirate1 < 99)
            $pgate1 = "2";
        else if ($pirate1 < 102)
            $pgate1 = "3";
        else if ($pirate1 < 162)
            $pgate1 = "4";
        else if ($pirate1 < 173)
            $pgate1 = "5";
        else if ($pirate1 < 204)
            $pgate1 = "6";
        else if ($pirate1 < 262)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 56)
            $pgate2 = "1";
        else if ($pirate2 < 99)
            $pgate2 = "2";
        else if ($pirate2 < 102)
            $pgate2 = "3";
        else if ($pirate2 < 162)
            $pgate2 = "4";
        else if ($pirate2 < 173)
            $pgate2 = "5";
        else if ($pirate2 < 204)
            $pgate2 = "6";
        else if ($pirate2 < 262)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 56)
            $pgate3 = "1";
        else if ($pirate3 < 99)
            $pgate3 = "2";
        else if ($pirate3 < 102)
            $pgate3 = "3";
        else if ($pirate3 < 162)
            $pgate3 = "4";
        else if ($pirate3 < 173)
            $pgate3 = "5";
        else if ($pirate3 < 204)
            $pgate3 = "6";
        else if ($pirate3 < 262)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if ($_SESSION['counter'] == 3)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);
        if ($pirate1 < 56)
            $pgate1 = "1";
        else if ($pirate1 < 103)
            $pgate1 = "2";
        else if ($pirate1 < 103)
            $pgate1 = "3";
        else if ($pirate1 < 161)
            $pgate1 = "4";
        else if ($pirate1 < 161)
            $pgate1 = "5";
        else if ($pirate1 < 195)
            $pgate1 = "6";
        else if ($pirate1 < 249)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 56)
            $pgate2 = "1";
        else if ($pirate2 < 103)
            $pgate2 = "2";
        else if ($pirate2 < 103)
            $pgate2 = "3";
        else if ($pirate2 < 161)
            $pgate2 = "4";
        else if ($pirate2 < 161)
            $pgate2 = "5";
        else if ($pirate2 < 195)
            $pgate2 = "6";
        else if ($pirate2 < 249)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 56)
            $pgate3 = "1";
        else if ($pirate3 < 103)
            $pgate3 = "2";
        else if ($pirate3 < 103)
            $pgate3 = "3";
        else if ($pirate3 < 161)
            $pgate3 = "4";
        else if ($pirate3 < 161)
            $pgate3 = "5";
        else if ($pirate3 < 195)
            $pgate3 = "6";
        else if ($pirate3 < 249)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if ($_SESSION['counter'] == 4)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);
        if ($pirate1 < 59)
            $pgate1 = "1";
        else if ($pirate1 < 102)
            $pgate1 = "2";
        else if ($pirate1 < 112)
            $pgate1 = "3";
        else if ($pirate1 < 177)
            $pgate1 = "4";
        else if ($pirate1 < 177)
            $pgate1 = "5";
        else if ($pirate1 < 202)
            $pgate1 = "6";
        else if ($pirate1 < 264)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 59)
            $pgate2 = "1";
        else if ($pirate2 < 102)
            $pgate2 = "2";
        else if ($pirate2 < 112)
            $pgate2 = "3";
        else if ($pirate2 < 177)
            $pgate2 = "4";
        else if ($pirate2 < 177)
            $pgate2 = "5";
        else if ($pirate2 < 202)
            $pgate2 = "6";
        else if ($pirate2 < 264)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 59)
            $pgate3 = "1";
        else if ($pirate3 < 102)
            $pgate3 = "2";
        else if ($pirate3 < 112)
            $pgate3 = "3";
        else if ($pirate3 < 177)
            $pgate3 = "4";
        else if ($pirate3 < 177)
            $pgate3 = "5";
        else if ($pirate3 < 202)
            $pgate3 = "6";
        else if ($pirate3 < 264)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if ($_SESSION['counter'] == 5)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);
        if ($pirate1 < 59)
            $pgate1 = "1";
        else if ($pirate1 < 103)
            $pgate1 = "2";
        else if ($pirate1 < 103)
            $pgate1 = "3";
        else if ($pirate1 < 166)
            $pgate1 = "4";
        else if ($pirate1 < 174)
            $pgate1 = "5";
        else if ($pirate1 < 196)
            $pgate1 = "6";
        else if ($pirate1 < 256)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 59)
            $pgate2 = "1";
        else if ($pirate2 < 103)
            $pgate2 = "2";
        else if ($pirate2 < 103)
            $pgate2 = "3";
        else if ($pirate2 < 166)
            $pgate2 = "4";
        else if ($pirate2 < 174)
            $pgate2 = "5";
        else if ($pirate2 < 196)
            $pgate2 = "6";
        else if ($pirate2 < 256)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 59)
            $pgate3 = "1";
        else if ($pirate3 < 103)
            $pgate3 = "2";
        else if ($pirate3 < 103)
            $pgate3 = "3";
        else if ($pirate3 < 166)
            $pgate3 = "4";
        else if ($pirate3 < 174)
            $pgate3 = "5";
        else if ($pirate3 < 196)
            $pgate3 = "6";
        else if ($pirate3 < 256)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if ($_SESSION['counter'] == 6)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);
        if ($pirate1 < 17)
            $pgate1 = "1";
        else if ($pirate1 < 66)
            $pgate1 = "2";
        else if ($pirate1 < 107)
            $pgate1 = "3";
        else if ($pirate1 < 153)
            $pgate1 = "4";
        else if ($pirate1 < 204)
            $pgate1 = "5";
        else if ($pirate1 < 220)
            $pgate1 = "6";
        else if ($pirate1 < 272)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 17)
            $pgate2 = "1";
        else if ($pirate2 < 66)
            $pgate2 = "2";
        else if ($pirate2 < 107)
            $pgate2 = "3";
        else if ($pirate2 < 153)
            $pgate2 = "4";
        else if ($pirate2 < 204)
            $pgate2 = "5";
        else if ($pirate2 < 220)
            $pgate2 = "6";
        else if ($pirate2 < 272)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 17)
            $pgate3 = "1";
        else if ($pirate3 < 66)
            $pgate3 = "2";
        else if ($pirate3 < 107)
            $pgate3 = "3";
        else if ($pirate3 < 153)
            $pgate3 = "4";
        else if ($pirate3 < 204)
            $pgate3 = "5";
        else if ($pirate3 < 220)
            $pgate3 = "6";
        else if ($pirate3 < 272)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if ($_SESSION['counter'] == 7)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);
        if ($pirate1 < 4)
            $pgate1 = "1";
        else if ($pirate1 < 64)
            $pgate1 = "2";
        else if ($pirate1 < 96)
            $pgate1 = "3";
        else if ($pirate1 < 150)
            $pgate1 = "4";
        else if ($pirate1 < 205)
            $pgate1 = "5";
        else if ($pirate1 < 209)
            $pgate1 = "6";
        else if ($pirate1 < 267)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 4)
            $pgate2 = "1";
        else if ($pirate2 < 64)
            $pgate2 = "2";
        else if ($pirate2 < 96)
            $pgate2 = "3";
        else if ($pirate2 < 150)
            $pgate2 = "4";
        else if ($pirate2 < 205)
            $pgate2 = "5";
        else if ($pirate2 < 209)
            $pgate2 = "6";
        else if ($pirate2 < 267)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 4)
            $pgate3 = "1";
        else if ($pirate3 < 64)
            $pgate3 = "2";
        else if ($pirate3 < 96)
            $pgate3 = "3";
        else if ($pirate3 < 150)
            $pgate3 = "4";
        else if ($pirate3 < 205)
            $pgate3 = "5";
        else if ($pirate3 < 209)
            $pgate3 = "6";
        else if ($pirate3 < 267)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if ($_SESSION['counter'] == 8)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);
        if ($pirate1 < 23)
            $pgate1 = "1";
        else if ($pirate1 < 74)
            $pgate1 = "2";
        else if ($pirate1 < 91)
            $pgate1 = "3";
        else if ($pirate1 < 141)
            $pgate1 = "4";
        else if ($pirate1 < 191)
            $pgate1 = "5";
        else if ($pirate1 < 214)
            $pgate1 = "6";
        else if ($pirate1 < 268)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 23)
            $pgate2 = "1";
        else if ($pirate2 < 74)
            $pgate2 = "2";
        else if ($pirate2 < 91)
            $pgate2 = "3";
        else if ($pirate2 < 141)
            $pgate2 = "4";
        else if ($pirate2 < 191)
            $pgate2 = "5";
        else if ($pirate2 < 214)
            $pgate2 = "6";
        else if ($pirate2 < 268)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 23)
            $pgate3 = "1";
        else if ($pirate3 < 74)
            $pgate3 = "2";
        else if ($pirate3 < 91)
            $pgate3 = "3";
        else if ($pirate3 < 141)
            $pgate3 = "4";
        else if ($pirate3 < 191)
            $pgate3 = "5";
        else if ($pirate3 < 214)
            $pgate3 = "6";
        else if ($pirate3 < 268)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if ($_SESSION['counter'] == 9)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);
        if ($pirate1 < 0)
            $pgate1 = "1";
        else if ($pirate1 < 65)
            $pgate1 = "2";
        else if ($pirate1 < 89)
            $pgate1 = "3";
        else if ($pirate1 < 153)
            $pgate1 = "4";
        else if ($pirate1 < 205)
            $pgate1 = "5";
        else if ($pirate1 < 205)
            $pgate1 = "6";
        else if ($pirate1 < 260)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 0)
            $pgate2 = "1";
        else if ($pirate2 < 65)
            $pgate2 = "2";
        else if ($pirate2 < 89)
            $pgate2 = "3";
        else if ($pirate2 < 153)
            $pgate2 = "4";
        else if ($pirate2 < 205)
            $pgate2 = "5";
        else if ($pirate2 < 205)
            $pgate2 = "6";
        else if ($pirate2 < 260)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 0)
            $pgate3 = "1";
        else if ($pirate3 < 65)
            $pgate3 = "2";
        else if ($pirate3 < 89)
            $pgate3 = "3";
        else if ($pirate3 < 153)
            $pgate3 = "4";
        else if ($pirate3 < 205)
            $pgate3 = "5";
        else if ($pirate3 < 205)
            $pgate3 = "6";
        else if ($pirate3 < 260)
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
        else if ($pirate1 < 59)
            $pgate1 = "2";
        else if ($pirate1 < 105)
            $pgate1 = "3";
        else if ($pirate1 < 156)
            $pgate1 = "4";
        else if ($pirate1 < 212)
            $pgate1 = "5";
        else if ($pirate1 < 212)
            $pgate1 = "6";
        else if ($pirate1 < 273)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 0)
            $pgate2 = "1";
        else if ($pirate2 < 59)
            $pgate2 = "2";
        else if ($pirate2 < 105)
            $pgate2 = "3";
        else if ($pirate2 < 156)
            $pgate2 = "4";
        else if ($pirate2 < 212)
            $pgate2 = "5";
        else if ($pirate2 < 212)
            $pgate2 = "6";
        else if ($pirate2 < 273)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 0)
            $pgate3 = "1";
        else if ($pirate3 < 59)
            $pgate3 = "2";
        else if ($pirate3 < 105)
            $pgate3 = "3";
        else if ($pirate3 < 156)
            $pgate3 = "4";
        else if ($pirate3 < 212)
            $pgate3 = "5";
        else if ($pirate3 < 212)
            $pgate3 = "6";
        else if ($pirate3 < 273)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if ($_SESSION['counter'] == 11)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);

        if ($pirate1 < 12)
            $pgate1 = "1";
        else if ($pirate1 < 74)
            $pgate1 = "2";
        else if ($pirate1 < 90)
            $pgate1 = "3";
        else if ($pirate1 < 145)
            $pgate1 = "4";
        else if ($pirate1 < 197)
            $pgate1 = "5";
        else if ($pirate1 < 197)
            $pgate1 = "6";
        else if ($pirate1 < 254)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 12)
            $pgate2 = "1";
        else if ($pirate2 < 74)
            $pgate2 = "2";
        else if ($pirate2 < 90)
            $pgate2 = "3";
        else if ($pirate2 < 145)
            $pgate2 = "4";
        else if ($pirate2 < 197)
            $pgate2 = "5";
        else if ($pirate2 < 197)
            $pgate2 = "6";
        else if ($pirate2 < 254)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 12)
            $pgate3 = "1";
        else if ($pirate3 < 74)
            $pgate3 = "2";
        else if ($pirate3 < 90)
            $pgate3 = "3";
        else if ($pirate3 < 145)
            $pgate3 = "4";
        else if ($pirate3 < 197)
            $pgate3 = "5";
        else if ($pirate3 < 197)
            $pgate3 = "6";
        else if ($pirate3 < 254)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if ($_SESSION['counter'] == 12)
    {
        $pirate1 = rand(0, 200);
        $pirate2 = rand(0, 200);
        if ($pirate1 < 22)
            $pgate1 = "1";
        else if ($pirate1 < 46)
            $pgate1 = "2";
        else if ($pirate1 < 126)
            $pgate1 = "3";
        else if ($pirate1 < 149)
            $pgate1 = "4";
        else
            $pgate1 = "5";
        if ($pirate2 < 22)
            $pgate2 = "1";
        else if ($pirate2 < 46)
            $pgate2 = "2";
        else if ($pirate2 < 126)
            $pgate2 = "3";
        else if ($pirate2 < 149)
            $pgate2 = "4";
        else
            $pgate2 = "5";
        $pgate3 = "-1";
    }
    else if ($_SESSION['counter'] == 13)
    {
        $pirate1 = rand(0, 200);
        $pirate2 = rand(0, 200);
        if ($pirate1 < 26)
            $pgate1 = "1";
        else if ($pirate1 < 59)
            $pgate1 = "2";
        else if ($pirate1 < 121)
            $pgate1 = "3";
        else if ($pirate1 < 152)
            $pgate1 = "4";
        else
            $pgate1 = "5";
        if ($pirate2 < 26)
            $pgate2 = "1";
        else if ($pirate2 < 59)
            $pgate2 = "2";
        else if ($pirate2 < 121)
            $pgate2 = "3";
        else if ($pirate2 < 152)
            $pgate2 = "4";
        else
            $pgate2 = "5";
        $pgate3 = "-1";
    }
    else if ($_SESSION['counter'] == 14)
    {
        $pirate1 = rand(0, 200);
        $pirate2 = rand(0, 200);
        if ($pirate1 < 25)
            $pgate1 = "1";
        else if ($pirate1 < 50)
            $pgate1 = "2";
        else if ($pirate1 < 121)
            $pgate1 = "3";
        else if ($pirate1 < 146)
            $pgate1 = "4";
        else
            $pgate1 = "5";
        if ($pirate2 < 25)
            $pgate2 = "1";
        else if ($pirate2 < 50)
            $pgate2 = "2";
        else if ($pirate2 < 121)
            $pgate2 = "3";
        else if ($pirate2 < 146)
            $pgate2 = "4";
        else
            $pgate2 = "5";
        $pgate3 = "-1";
    }
    else if ($_SESSION['counter'] == 15)
    {
        $pirate1 = rand(0, 200);
        $pirate2 = rand(0, 200);
        if ($pirate1 < 25)
            $pgate1 = "1";
        else if ($pirate1 < 59)
            $pgate1 = "2";
        else if ($pirate1 < 120)
            $pgate1 = "3";
        else if ($pirate1 < 150)
            $pgate1 = "4";
        else
            $pgate1 = "5";
        if ($pirate2 < 25)
            $pgate2 = "1";
        else if ($pirate2 < 59)
            $pgate2 = "2";
        else if ($pirate2 < 120)
            $pgate2 = "3";
        else if ($pirate2 < 150)
            $pgate2 = "4";
        else
            $pgate2 = "5";
        $pgate3 = "-1";
    }
    else if ($_SESSION['counter'] == 16)
    {
        $pirate1 = rand(0, 200);
        $pirate2 = rand(0, 200);
        if ($pirate1 < 24)
            $pgate1 = "1";
        else if ($pirate1 < 56)
            $pgate1 = "2";
        else if ($pirate1 < 127)
            $pgate1 = "3";
        else if ($pirate1 < 155)
            $pgate1 = "4";
        else
            $pgate1 = "5";
        if ($pirate2 < 24)
            $pgate2 = "1";
        else if ($pirate2 < 56)
            $pgate2 = "2";
        else if ($pirate2 < 127)
            $pgate2 = "3";
        else if ($pirate2 < 155)
            $pgate2 = "4";
        else
            $pgate2 = "5";
        $pgate3 = "-1";
    }
    else if ($_SESSION['counter'] == 17)
    {
        $pirate1 = rand(0, 200);
        $pirate2 = rand(0, 200);
        if ($pirate1 < 28)
            $pgate1 = "1";
        else if ($pirate1 < 60)
            $pgate1 = "2";
        else if ($pirate1 < 124)
            $pgate1 = "3";
        else if ($pirate1 < 153)
            $pgate1 = "4";
        else
            $pgate1 = "5";
        if ($pirate2 < 28)
            $pgate2 = "1";
        else if ($pirate2 < 60)
            $pgate2 = "2";
        else if ($pirate2 < 124)
            $pgate2 = "3";
        else if ($pirate2 < 153)
            $pgate2 = "4";
        else
            $pgate2 = "5";
        $pgate3 = "-1";
    }
    else if ($_SESSION['counter'] == 18)
    {
        $pirate1 = rand(0, 200);
        $pirate2 = rand(0, 200);
        if ($pirate1 < 37)
            $pgate1 = "1";
        else if ($pirate1 < 117)
            $pgate1 = "2";
        else if ($pirate1 < 137)
            $pgate1 = "3";
        else if ($pirate1 < 178)
            $pgate1 = "4";
        else
            $pgate1 = "5";
        if ($pirate2 < 37)
            $pgate2 = "1";
        else if ($pirate2 < 117)
            $pgate2 = "2";
        else if ($pirate2 < 137)
            $pgate2 = "3";
        else if ($pirate2 < 178)
            $pgate2 = "4";
        else
            $pgate2 = "5";
        $pgate3 = "-1";
    }
    else if ($_SESSION['counter'] == 19)
    {
        $pirate1 = rand(0, 200);
        $pirate2 = rand(0, 200);
        if ($pirate1 < 41)
            $pgate1 = "1";
        else if ($pirate1 < 108)
            $pgate1 = "2";
        else if ($pirate1 < 137)
            $pgate1 = "3";
        else if ($pirate1 < 184)
            $pgate1 = "4";
        else
            $pgate1 = "5";
        if ($pirate2 < 41)
            $pgate2 = "1";
        else if ($pirate2 < 108)
            $pgate2 = "2";
        else if ($pirate2 < 137)
            $pgate2 = "3";
        else if ($pirate2 < 184)
            $pgate2 = "4";
        else
            $pgate2 = "5";
        $pgate3 = "-1";
    }
    else if ($_SESSION['counter'] == 20)
    {
        $pirate1 = rand(0, 200);
        $pirate2 = rand(0, 200);
        if ($pirate1 < 41)
            $pgate1 = "1";
        else if ($pirate1 < 111)
            $pgate1 = "2";
        else if ($pirate1 < 134)
            $pgate1 = "3";
        else if ($pirate1 < 177)
            $pgate1 = "4";
        else
            $pgate1 = "5";
        if ($pirate2 < 41)
            $pgate2 = "1";
        else if ($pirate2 < 111)
            $pgate2 = "2";
        else if ($pirate2 < 134)
            $pgate2 = "3";
        else if ($pirate2 < 177)
            $pgate2 = "4";
        else
            $pgate2 = "5";
        $pgate3 = "-1";
    }
    else if ($_SESSION['counter'] == 21)
    {
        $pirate1 = rand(0, 200);
        $pirate2 = rand(0, 200);
        if ($pirate1 < 43)
            $pgate1 = "1";
        else if ($pirate1 < 110)
            $pgate1 = "2";
        else if ($pirate1 < 139)
            $pgate1 = "3";
        else if ($pirate1 < 186)
            $pgate1 = "4";
        else
            $pgate1 = "5";
        if ($pirate2 < 43)
            $pgate2 = "1";
        else if ($pirate2 < 110)
            $pgate2 = "2";
        else if ($pirate2 < 139)
            $pgate2 = "3";
        else if ($pirate2 < 186)
            $pgate2 = "4";
        else
            $pgate2 = "5";
        $pgate3 = "-1";
    }
    else if ($_SESSION['counter'] == 22)
    {
        $pirate1 = rand(0, 200);
        $pirate2 = rand(0, 200);
        if ($pirate1 < 37)
            $pgate1 = "1";
        else if ($pirate1 < 110)
            $pgate1 = "2";
        else if ($pirate1 < 136)
            $pgate1 = "3";
        else if ($pirate1 < 189)
            $pgate1 = "4";
        else
            $pgate1 = "5";
        if ($pirate2 < 37)
            $pgate2 = "1";
        else if ($pirate2 < 110)
            $pgate2 = "2";
        else if ($pirate2 < 136)
            $pgate2 = "3";
        else if ($pirate2 < 189)
            $pgate2 = "4";
        else
            $pgate2 = "5";
        $pgate3 = "-1";
    }
    else if ($_SESSION['counter'] == 23)
    {
        $pirate1 = rand(0, 200);
        $pirate2 = rand(0, 200);
        if ($pirate1 < 45)
            $pgate1 = "1";
        else if ($pirate1 < 115)
            $pgate1 = "2";
        else if ($pirate1 < 144)
            $pgate1 = "3";
        else if ($pirate1 < 195)
            $pgate1 = "4";
        else
            $pgate1 = "5";
        if ($pirate2 < 45)
            $pgate2 = "1";
        else if ($pirate2 < 115)
            $pgate2 = "2";
        else if ($pirate2 < 144)
            $pgate2 = "3";
        else if ($pirate2 < 195)
            $pgate2 = "4";
        else
            $pgate2 = "5";
        $pgate3 = "-1";
    }
    else if ($_SESSION['counter'] == 24)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);
        if ($pirate1 < 54)
            $pgate1 = "1";
        else if ($pirate1 < 95)
            $pgate1 = "2";
        else if ($pirate1 < 113)
            $pgate1 = "3";
        else if ($pirate1 < 173)
            $pgate1 = "4";
        else if ($pirate1 < 182)
            $pgate1 = "5";
        else if ($pirate1 < 209)
            $pgate1 = "6";
        else if ($pirate1 < 266)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 54)
            $pgate2 = "1";
        else if ($pirate2 < 95)
            $pgate2 = "2";
        else if ($pirate2 < 113)
            $pgate2 = "3";
        else if ($pirate2 < 173)
            $pgate2 = "4";
        else if ($pirate2 < 182)
            $pgate2 = "5";
        else if ($pirate2 < 209)
            $pgate2 = "6";
        else if ($pirate2 < 266)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 54)
            $pgate3 = "1";
        else if ($pirate3 < 95)
            $pgate3 = "2";
        else if ($pirate3 < 113)
            $pgate3 = "3";
        else if ($pirate3 < 173)
            $pgate3 = "4";
        else if ($pirate3 < 182)
            $pgate3 = "5";
        else if ($pirate3 < 209)
            $pgate3 = "6";
        else if ($pirate3 < 266)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if ($_SESSION['counter'] == 25)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);
        if ($pirate1 < 52)
            $pgate1 = "1";
        else if ($pirate1 < 92)
            $pgate1 = "2";
        else if ($pirate1 < 92)
            $pgate1 = "3";
        else if ($pirate1 < 147)
            $pgate1 = "4";
        else if ($pirate1 < 173)
            $pgate1 = "5";
        else if ($pirate1 < 197)
            $pgate1 = "6";
        else if ($pirate1 < 248)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 52)
            $pgate2 = "1";
        else if ($pirate2 < 92)
            $pgate2 = "2";
        else if ($pirate2 < 92)
            $pgate2 = "3";
        else if ($pirate2 < 147)
            $pgate2 = "4";
        else if ($pirate2 < 173)
            $pgate2 = "5";
        else if ($pirate2 < 197)
            $pgate2 = "6";
        else if ($pirate2 < 248)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 52)
            $pgate3 = "1";
        else if ($pirate3 < 92)
            $pgate3 = "2";
        else if ($pirate3 < 92)
            $pgate3 = "3";
        else if ($pirate3 < 147)
            $pgate3 = "4";
        else if ($pirate3 < 173)
            $pgate3 = "5";
        else if ($pirate3 < 197)
            $pgate3 = "6";
        else if ($pirate3 < 248)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if ($_SESSION['counter'] == 26)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);
        if ($pirate1 < 57)
            $pgate1 = "1";
        else if ($pirate1 < 101)
            $pgate1 = "2";
        else if ($pirate1 < 102)
            $pgate1 = "3";
        else if ($pirate1 < 162)
            $pgate1 = "4";
        else if ($pirate1 < 174)
            $pgate1 = "5";
        else if ($pirate1 < 205)
            $pgate1 = "6";
        else if ($pirate1 < 262)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 57)
            $pgate2 = "1";
        else if ($pirate2 < 101)
            $pgate2 = "2";
        else if ($pirate2 < 102)
            $pgate2 = "3";
        else if ($pirate2 < 162)
            $pgate2 = "4";
        else if ($pirate2 < 174)
            $pgate2 = "5";
        else if ($pirate2 < 205)
            $pgate2 = "6";
        else if ($pirate2 < 262)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 57)
            $pgate3 = "1";
        else if ($pirate3 < 101)
            $pgate3 = "2";
        else if ($pirate3 < 102)
            $pgate3 = "3";
        else if ($pirate3 < 162)
            $pgate3 = "4";
        else if ($pirate3 < 174)
            $pgate3 = "5";
        else if ($pirate3 < 205)
            $pgate3 = "6";
        else if ($pirate3 < 262)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if ($_SESSION['counter'] == 27)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);
        if ($pirate1 < 59)
            $pgate1 = "1";
        else if ($pirate1 < 108)
            $pgate1 = "2";
        else if ($pirate1 < 115)
            $pgate1 = "3";
        else if ($pirate1 < 176)
            $pgate1 = "4";
        else if ($pirate1 < 176)
            $pgate1 = "5";
        else if ($pirate1 < 203)
            $pgate1 = "6";
        else if ($pirate1 < 261)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 59)
            $pgate2 = "1";
        else if ($pirate2 < 108)
            $pgate2 = "2";
        else if ($pirate2 < 115)
            $pgate2 = "3";
        else if ($pirate2 < 176)
            $pgate2 = "4";
        else if ($pirate2 < 176)
            $pgate2 = "5";
        else if ($pirate2 < 203)
            $pgate2 = "6";
        else if ($pirate2 < 261)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 59)
            $pgate3 = "1";
        else if ($pirate3 < 108)
            $pgate3 = "2";
        else if ($pirate3 < 115)
            $pgate3 = "3";
        else if ($pirate3 < 176)
            $pgate3 = "4";
        else if ($pirate3 < 176)
            $pgate3 = "5";
        else if ($pirate3 < 203)
            $pgate3 = "6";
        else if ($pirate3 < 261)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if ($_SESSION['counter'] == 28)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);
        if ($pirate1 < 59)
            $pgate1 = "1";
        else if ($pirate1 < 103)
            $pgate1 = "2";
        else if ($pirate1 < 113)
            $pgate1 = "3";
        else if ($pirate1 < 178)
            $pgate1 = "4";
        else if ($pirate1 < 178)
            $pgate1 = "5";
        else if ($pirate1 < 203)
            $pgate1 = "6";
        else if ($pirate1 < 265)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 59)
            $pgate2 = "1";
        else if ($pirate2 < 103)
            $pgate2 = "2";
        else if ($pirate2 < 113)
            $pgate2 = "3";
        else if ($pirate2 < 178)
            $pgate2 = "4";
        else if ($pirate2 < 178)
            $pgate2 = "5";
        else if ($pirate2 < 203)
            $pgate2 = "6";
        else if ($pirate2 < 265)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 59)
            $pgate3 = "1";
        else if ($pirate3 < 103)
            $pgate3 = "2";
        else if ($pirate3 < 113)
            $pgate3 = "3";
        else if ($pirate3 < 178)
            $pgate3 = "4";
        else if ($pirate3 < 178)
            $pgate3 = "5";
        else if ($pirate3 < 203)
            $pgate3 = "6";
        else if ($pirate3 < 265)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if ($_SESSION['counter'] == 29)
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);
        if ($pirate1 < 59)
            $pgate1 = "1";
        else if ($pirate1 < 103)
            $pgate1 = "2";
        else if ($pirate1 < 103)
            $pgate1 = "3";
        else if ($pirate1 < 166)
            $pgate1 = "4";
        else if ($pirate1 < 174)
            $pgate1 = "5";
        else if ($pirate1 < 196)
            $pgate1 = "6";
        else if ($pirate1 < 256)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 59)
            $pgate2 = "1";
        else if ($pirate2 < 103)
            $pgate2 = "2";
        else if ($pirate2 < 103)
            $pgate2 = "3";
        else if ($pirate2 < 166)
            $pgate2 = "4";
        else if ($pirate2 < 174)
            $pgate2 = "5";
        else if ($pirate2 < 196)
            $pgate2 = "6";
        else if ($pirate2 < 256)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 59)
            $pgate3 = "1";
        else if ($pirate3 < 103)
            $pgate3 = "2";
        else if ($pirate3 < 103)
            $pgate3 = "3";
        else if ($pirate3 < 166)
            $pgate3 = "4";
        else if ($pirate3 < 174)
            $pgate3 = "5";
        else if ($pirate3 < 196)
            $pgate3 = "6";
        else if ($pirate3 < 256)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }
    else if (($_SESSION['counter'] < $maxround))
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);

        if ($pirate1 < 54)
            $pgate1 = "1";
        else if ($pirate1 < 94)
            $pgate1 = "2";
        else if ($pirate1 < 112)
            $pgate1 = "3";
        else if ($pirate1 < 172)
            $pgate1 = "4";
        else if ($pirate1 < 181)
            $pgate1 = "5";
        else if ($pirate1 < 208)
            $pgate1 = "6";
        else if ($pirate1 < 265)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 54)
            $pgate2 = "1";
        else if ($pirate2 < 94)
            $pgate2 = "2";
        else if ($pirate2 < 112)
            $pgate2 = "3";
        else if ($pirate2 < 172)
            $pgate2 = "4";
        else if ($pirate2 < 181)
            $pgate2 = "5";
        else if ($pirate2 < 208)
            $pgate2 = "6";
        else if ($pirate2 < 265)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 54)
            $pgate3 = "1";
        else if ($pirate3 < 94)
            $pgate3 = "2";
        else if ($pirate3 < 112)
            $pgate3 = "3";
        else if ($pirate3 < 172)
            $pgate3 = "4";
        else if ($pirate3 < 181)
            $pgate3 = "5";
        else if ($pirate3 < 208)
            $pgate3 = "6";
        else if ($pirate3 < 265)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    }

    } while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

    if(!isset($_SESSION['gameid']))
    {
        //Code for combination generator
        //Specify data for index 0 at the beginning
        //Randomly generated indices are from 1 to 10...assigned as 0 to 9
        //Specify data for index $maxround at the end

        $_SESSION['gameid'] = rand(1, 12);

        if ($_SESSION['gameid'] == 1)
            $_SESSION['combo'] = array(6,12,4,10,2,8,5,11,3,9,1,7,31);
        else if ($_SESSION['gameid'] == 2)
            $_SESSION['combo'] = array(12,6,10,4,8,2,11,5,9,3,7,1,31);
        else if ($_SESSION['gameid'] == 3)
            $_SESSION['combo'] = array(4,10,5,11,6,12,1,7,2,8,3,9,31);
        else if ($_SESSION['gameid'] == 4)
            $_SESSION['combo'] = array(10,4,11,5,12,6,7,1,8,2,9,3,31);
        else if ($_SESSION['gameid'] == 5)
            $_SESSION['combo'] = array(5,11,1,7,4,10,3,9,6,12,2,8,31);
        else if ($_SESSION['gameid'] == 6)
            $_SESSION['combo'] = array(11,5,7,1,10,4,9,3,12,6,8,2,31);
        else if ($_SESSION['gameid'] == 7)
            $_SESSION['combo'] = array(1,7,3,9,5,11,2,8,4,10,6,12,31);
        else if ($_SESSION['gameid'] == 8)
            $_SESSION['combo'] = array(7,1,9,3,11,5,8,2,10,4,12,6,31);
        else if ($_SESSION['gameid'] == 9)
            $_SESSION['combo'] = array(3,9,2,8,1,7,6,12,5,11,4,10,31);
        else if ($_SESSION['gameid'] == 10)
            $_SESSION['combo'] = array(9,3,8,2,7,1,12,6,11,5,10,4,31);
        else if ($_SESSION['gameid'] == 11)
            $_SESSION['combo'] = array(2,8,6,12,3,9,4,10,1,7,5,11,31);
        else if ($_SESSION['gameid'] == 12)
            $_SESSION['combo'] = array(8,2,12,6,9,3,10,4,7,1,11,5,31);
        else if ($_SESSION['gameid'] == 13)
            $_SESSION['combo'] = array(26,2,8,14,20,29,5,11,17,23,31);
        else if ($_SESSION['gameid'] == 14)
            $_SESSION['combo'] = array(2,14,26,20,8,5,17,29,23,11,31);
        else if ($_SESSION['gameid'] == 15)
            $_SESSION['combo'] = array(14,20,2,8,26,17,23,5,11,29,31);
        else if ($_SESSION['gameid'] == 16)
            $_SESSION['combo'] = array(23,11,17,29,5,20,8,14,26,2,31);
        else if ($_SESSION['gameid'] == 17)
            $_SESSION['combo'] = array(11,29,23,5,17,8,26,20,2,14,31);
        else if ($_SESSION['gameid'] == 18)
            $_SESSION['combo'] = array(29,5,11,17,23,26,2,8,14,20,31);
        else if ($_SESSION['gameid'] == 19)
            $_SESSION['combo'] = array(5,17,29,23,11,2,14,26,20,8,31);
        else if ($_SESSION['gameid'] == 20)
            $_SESSION['combo'] = array(17,23,5,11,29,14,20,2,8,26,31);
        else if ($_SESSION['gameid'] == 21)
            $_SESSION['combo'] = array(21,9,15,27,3,24,12,18,30,6,31);
        else if ($_SESSION['gameid'] == 22)
            $_SESSION['combo'] = array(9,27,21,3,15,12,30,24,6,18,31);
        else if ($_SESSION['gameid'] == 23)
            $_SESSION['combo'] = array(27,3,9,15,21,30,6,12,18,24,31);
        else if ($_SESSION['gameid'] == 24)
            $_SESSION['combo'] = array(3,15,27,21,9,6,18,30,24,12,31);
        else if ($_SESSION['gameid'] == 25)
            $_SESSION['combo'] = array(15,21,3,9,27,18,24,6,12,30,31);
        else if ($_SESSION['gameid'] == 26)
            $_SESSION['combo'] = array(24,12,18,30,6,21,9,15,27,3,31);
        else if ($_SESSION['gameid'] == 27)
            $_SESSION['combo'] = array(12,30,24,6,18,9,27,21,3,15,31);
        else if ($_SESSION['gameid'] == 28)
            $_SESSION['combo'] = array(30,6,12,18,24,27,3,9,15,21,31);
        else if ($_SESSION['gameid'] == 29)
            $_SESSION['combo'] = array(6,18,30,24,12,3,15,27,21,9,31);
        else if ($_SESSION['gameid'] == 30)
            $_SESSION['combo'] = array(18,24,6,12,30,15,21,3,9,27,31);
        else
            $_SESSION['combo'] = array(19,7,13,25,1,22,10,16,28,4,31);

        $_SESSION['position'] = 1;
        $_SESSION['counter'] = $_SESSION['combo'][$_SESSION['position']] - 1;
        $_SESSION['won'] = 0;
        $_SESSION['lost'] = 0;
        $_SESSION['points'] = 0;
        $_SESSION['username'] = $_COOKIE['name'];
        $_SESSION['useremail'] = $_COOKIE['email'];
        $_SESSION['usergender'] = $_COOKIE['gender'];
        $_SESSION['usercountry'] = $_COOKIE['country'];
    }
    else
    {
        $_SESSION['position']++;
        $_SESSION['counter'] = $_SESSION['combo'][$_SESSION['position']] - 1;
        $i = 1;
        if(!isset($_SESSION['username']))
        {
            echo "<meta http-equiv='refresh' content='0;url=index.php'>";
        }
    }

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

    /*if (($_SESSION['gameid'] <=10) && ($_SESSION['counter'] == 20))
    {
        $_SESSION['selection'][10] = $gate;
        $_SESSION['timemillis'][10] = time()-$_SESSION['pretime'];
        $_SESSION['guard'][10][1] = $pgate1;
        $_SESSION['guard'][10][2] = $pgate2;
        $_SESSION['guard'][10][3] = $pgate3;
    }
    else
    {*/
        $_SESSION['selection'][$_SESSION['combo'][$_SESSION['position'] - 1]] = $gate;
        $_SESSION['timemillis'][$_SESSION['combo'][$_SESSION['position'] - 1]] = time()-$_SESSION['pretime'];
        $_SESSION['guard'][$_SESSION['combo'][$_SESSION['position'] - 1]][1] = $pgate1;
        $_SESSION['guard'][$_SESSION['combo'][$_SESSION['position'] - 1]][2] = $pgate2;
        $_SESSION['guard'][$_SESSION['combo'][$_SESSION['position'] - 1]][3] = $pgate3;
//    }

    $_SESSION['pretime'] = time();




    if (($gate == "") || ($gate == null))
    {
        $_SESSION['position']--;
        $_SESSION['counter'] = $_SESSION['combo'][$_SESSION['position']] - 1;
        $_SESSION['pretime'] = time();
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
<h2 id="GT">The Guards and The Treasure</h2>
Welcome&nbsp;<?php echo $_SESSION['username']; ?>!
<br/>
</div>

<?php if ($_SESSION['counter'] < $maxround) { ?>
    <a href="javascript: void(0)" onclick="popup('instructions.php', 'Instructions: The Guards and the Treasure')"><h3>Detailed instructions</h3></a>
    <h3>Round <?php echo $_SESSION['position']+1; ?> of 12</h3>
<?php } ?>

<?php
    if ($_SESSION['counter'] >= $maxround)
    { ?>
        <a href="javascript: void(0)" onclick="popup('feedback.php', 'Feedback: The Guards and the Treasure')"><h3>Leave your Feedback</h3></a>
        <br/>
        <br/>
        <table align="center" cellspacing="10" cellpadding="50" bgcolor="black">
                <tr bgcolor = #555555>
                    <th>Game ID</th><th>Your Selection</th><th>Guards' Door</th><th>Won</th><th>Lost</th><th>Points</th>
                </tr>
    <?php
        $twon = 0;
        $tlost = 0;
        $tpoints = 0;
        $today = date("F j, Y, g:i a");
        $data = "\n".$_SESSION['username'].",".$_SESSION['useremail'].",".$_SESSION['usergender'].",".$_SESSION['usercountry'].",".$_SESSION['gameid'].",$today,";
        $time = "\n".$_SESSION['username'].",".$_SESSION['useremail'].",".$_SESSION['usergender'].",".$_SESSION['usercountry'].",".$_SESSION['gameid'].",$today";
        for ($i = 1, $j = 1; (($i <= $maxround) && ($j <= 12)); $i++)
        {
            /*if (($i == 11) && ($_SESSION['gameid'] <= 10))
            {
                $i = 1;
                $maxround = 10;
            }*/

            ?>
            <?php if ($_SESSION['selection'][$i] > 0) {
                $data = $data.$_SESSION['selection'][$i].",";
                $time = $time.",".$_SESSION['timemillis'][$i];
            ?>
                <tr align = "center" >
                    <td><?php echo $j++; ?></td>
                    <td><?php echo $_SESSION['selection'][$_SESSION['combo'][$j - 2]]; ?></td>
                    <td><?php if ($_SESSION['guard'][$_SESSION['combo'][$j - 2]][1] > 0) echo $_SESSION['guard'][$_SESSION['combo'][$j - 2]][1]; ?><?php if ($_SESSION['guard'][$_SESSION['combo'][$j - 2]][1] > 0) echo ", "; ?><?php echo $_SESSION['guard'][$_SESSION['combo'][$j - 2]][2]; ?> and <?php echo $_SESSION['guard'][$_SESSION['combo'][$j - 2]][3]; ?></td>
                <?php if(($_SESSION['selection'][$_SESSION['combo'][$j - 2]] != $_SESSION['guard'][$_SESSION['combo'][$j - 2]][1]) && ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] != $_SESSION['guard'][$_SESSION['combo'][$j - 2]][2]) && ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] != $_SESSION['guard'][$_SESSION['combo'][$j - 2]][3]))
                    {
                        $twon++;
                        $won = "Yes";
                        $lost = "No";

                        if (($_SESSION['combo'][$j - 2] == 1) || ($_SESSION['combo'][$j - 2] == 2) || ($_SESSION['combo'][$j - 2] == 3) || ($_SESSION['combo'][$j - 2] == 4) || ($_SESSION['combo'][$j - 2] == 5) || ($_SESSION['combo'][$j - 2] == 6))
                        {
                            if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = 8;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = 5;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = 2;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = 10;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = 1;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = 3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = 9;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = 4;
                        }
                        else if (($_SESSION['combo'][$j - 2] == 7) || ($_SESSION['combo'][$j - 2] == 8) || ($_SESSION['combo'][$j - 2] == 9) || ($_SESSION['combo'][$j - 2] == 10) || ($_SESSION['combo'][$j - 2] == 11) || ($_SESSION['combo'][$j - 2] == 12))
                        {
                            if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = 1;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = 9;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = 5;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = 6;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = 7;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = 1;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = 10;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = 3;
                        }
                        else if (($_SESSION['combo'][$j - 2] == 13) || ($_SESSION['combo'][$j - 2] == 14) || ($_SESSION['combo'][$j - 2] == 15) || ($_SESSION['combo'][$j - 2] == 16) || ($_SESSION['combo'][$j - 2] == 17) || ($_SESSION['combo'][$j - 2] == 18))
                        {
                            if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = 3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = 5;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = 8;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = 4;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = 4;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = 0;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = 0;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = 0;
                        }
                        else if (($_SESSION['combo'][$j - 2] == 19) || ($_SESSION['combo'][$j - 2] == 20) || ($_SESSION['combo'][$j - 2] == 21) || ($_SESSION['combo'][$j - 2] == 22) || ($_SESSION['combo'][$j - 2] == 23) || ($_SESSION['combo'][$j - 2] == 24))
                        {
                            if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = 3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = 7;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = 3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = 9;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = 1;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = 0;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = 0;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = 0;
                        }
                        else if (($_SESSION['combo'][$j - 2] == 25) || ($_SESSION['combo'][$j - 2] == 26) || ($_SESSION['combo'][$j - 2] == 27) || ($_SESSION['combo'][$j - 2] == 28) || ($_SESSION['combo'][$j - 2] == 29) || ($_SESSION['combo'][$j - 2] == 30))
                        {
                            if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = 8;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = 5;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = 2;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = 10;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = 1;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = 3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = 9;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = 4;
                        }
                        $tpoints += $points;
                    } else {
                        $tlost++;
                        $won = "No";
                        $lost = "Yes";

                        if (($_SESSION['combo'][$j - 2] == 1) || ($_SESSION['combo'][$j - 2] == 2) || ($_SESSION['combo'][$j - 2] == 3) || ($_SESSION['combo'][$j - 2] == 4) || ($_SESSION['combo'][$j - 2] == 5) || ($_SESSION['combo'][$j - 2] == 6))
                        {
                            if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = -3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = -3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = -3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = -3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = -3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = -3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = -3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = -3;
                        }
                        else if (($_SESSION['combo'][$j - 2] == 7) || ($_SESSION['combo'][$j - 2] == 8) || ($_SESSION['combo'][$j - 2] == 9) || ($_SESSION['combo'][$j - 2] == 10) || ($_SESSION['combo'][$j - 2] == 11) || ($_SESSION['combo'][$j - 2] == 12))
                        {
                            if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = -2;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = -4;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = -3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = -3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = -3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = -2;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = -4;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = -3;
                        }
                        else if (($_SESSION['combo'][$j - 2] == 13) || ($_SESSION['combo'][$j - 2] == 14) || ($_SESSION['combo'][$j - 2] == 15) || ($_SESSION['combo'][$j - 2] == 16) || ($_SESSION['combo'][$j - 2] == 17) || ($_SESSION['combo'][$j - 2] == 18))
                        {
                            if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = -6;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = -8;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = -2;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = -7;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = -3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = 0;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = 0;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = 0;
                        }
                        else if (($_SESSION['combo'][$j - 2] == 19) || ($_SESSION['combo'][$j - 2] == 20) || ($_SESSION['combo'][$j - 2] == 21) || ($_SESSION['combo'][$j - 2] == 22) || ($_SESSION['combo'][$j - 2] == 23) || ($_SESSION['combo'][$j - 2] == 24))
                        {
                            if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = -4;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = -2;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = -7;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = -7;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = -4;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = 0;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = 0;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = 0;
                        }
                        else if (($_SESSION['combo'][$j - 2] == 25) || ($_SESSION['combo'][$j - 2] == 26) || ($_SESSION['combo'][$j - 2] == 27) || ($_SESSION['combo'][$j - 2] == 28) || ($_SESSION['combo'][$j - 2] == 29) || ($_SESSION['combo'][$j - 2] == 30))
                        {
                            if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = -3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = -3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = -3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = -3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = -3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = -3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = -3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = -3;
                        }
                        $tpoints += $points;
                    } ?>

                    <td><?php echo $won; ?></td>
                    <td><?php echo $lost; ?></td>
                    <td><?php echo $points; ?></td>
                </tr>
                <?php    } ?>
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
    $handle = fopen('time.csv', 'a+');
    fwrite($handle, $time);
    fclose($handle);
} ?>

<div class="entry">

<?php if ($_SESSION['counter'] < $maxround) { ?>
<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
<br/>

<table align="center" cellspacing="10" cellpadding="50" bgcolor="black">
    <tr bgcolor = #3b9c9c align="center">
        <th>Gates</th>
        <th>Gate 1<br/><Input type="radio" name="gate" value="1"/></th>
        <th>Gate 2<br/><Input type="radio" name="gate" value="2"/></th>
        <th>Gate 3<br/><Input type="radio" name="gate" value="3"/></th>
        <th>Gate 4<br/><Input type="radio" name="gate" value="4"/></th>
        <th>Gate 5<br/><Input type="radio" name="gate" value="5"/></th>
    <?php if (($_SESSION['counter'] < 12) || ($_SESSION['counter'] > 23)) { ?>
        <th>Gate 6<br/><Input type="radio" name="gate" value="6"/></th>
        <th>Gate 7<br/><Input type="radio" name="gate" value="7"/></th>
        <th>Gate 8<br/><Input type="radio" name="gate" value="8"/></th>
    <?php } ?>
    </tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 0) || ($_SESSION['counter'] == 1) || ($_SESSION['counter'] == 2) || ($_SESSION['counter'] == 3) || ($_SESSION['counter'] == 4) || ($_SESSION['counter'] == 5)) { ?>
    <tr align="center">
        <td bgcolor = #555555 align="left">Your Rewards</td>
        <td valign="bottom">8<br/><img src="Images/w8.jpg"></td>
        <td valign="bottom">5<br/><img src="Images/w5.jpg"></td>
        <td valign="bottom">2<br/><img src="Images/w2.jpg"></td>
        <td valign="bottom">10<br/><img src="Images/w10.jpg"></td>
        <td valign="bottom">1<br/><img src="Images/w1.jpg"></td>
        <td valign="bottom">3<br/><img src="Images/w3.jpg"></td>
        <td valign="bottom">9<br/><img src="Images/w9.jpg"></td>
        <td valign="bottom">4<br/><img src="Images/w4.jpg"></td>
    </tr>
    <tr align="center">
        <td bgcolor = #555555 align="left">Your Penalties</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
    </tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 6) || ($_SESSION['counter'] == 7) || ($_SESSION['counter'] == 8) || ($_SESSION['counter'] == 9) || ($_SESSION['counter'] == 10) || ($_SESSION['counter'] == 11)) { ?>
    <tr align="center">
        <td bgcolor = #555555 align="left">Your Rewards</td>
        <td valign="bottom">1<br/><img src="Images/w1.jpg"></td>
        <td valign="bottom">9<br/><img src="Images/w9.jpg"></td>
        <td valign="bottom">5<br/><img src="Images/w5.jpg"></td>
        <td valign="bottom">6<br/><img src="Images/w6.jpg"></td>
        <td valign="bottom">7<br/><img src="Images/w7.jpg"></td>
        <td valign="bottom">1<br/><img src="Images/w1.jpg"></td>
        <td valign="bottom">10<br/><img src="Images/w10.jpg"></td>
        <td valign="bottom">3<br/><img src="Images/w3.jpg"></td>
    </tr>
    <tr align="center">
        <td bgcolor = #555555 align="left">Your Penalties</td>
        <td valign="top"><img src="Images/l2.jpg"><br/>-2</td>
        <td valign="top"><img src="Images/l4.jpg"><br/>-4</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
        <td valign="top"><img src="Images/l2.jpg"><br/>-2</td>
        <td valign="top"><img src="Images/l4.jpg"><br/>-4</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
    </tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 12) || ($_SESSION['counter'] == 13) || ($_SESSION['counter'] == 14) || ($_SESSION['counter'] == 15) || ($_SESSION['counter'] == 16) || ($_SESSION['counter'] == 17)) { ?>
    <tr align="center">
        <td bgcolor = #555555 align="left">Your Rewards</td>
        <td valign="bottom">3<br/><img src="Images/w3.jpg"></td>
        <td valign="bottom">5<br/><img src="Images/w5.jpg"></td>
        <td valign="bottom">8<br/><img src="Images/w8.jpg"></td>
        <td valign="bottom">4<br/><img src="Images/w4.jpg"></td>
        <td valign="bottom">4<br/><img src="Images/w4.jpg"></td>
        <!--td valign="bottom">4<br/><img src="Images/w4.jpg"></td>
        <td valign="bottom">8<br/><img src="Images/w8.jpg"></td>
        <td valign="bottom">1<br/><img src="Images/w1.jpg"></td-->
    </tr>
    <tr align="center">
        <td bgcolor = #555555 align="left">Your Penalties</td>
        <td valign="top"><img src="Images/l6.jpg"><br/>-6</td>
        <td valign="top"><img src="Images/l8.jpg"><br/>-8</td>
        <td valign="top"><img src="Images/l2.jpg"><br/>-2</td>
        <td valign="top"><img src="Images/l7.jpg"><br/>-7</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
        <!--td valign="top"><img src="Images/l2.jpg"><br/>-2</td>
        <td valign="top"><img src="Images/l9.jpg"><br/>-9</td>
        <td valign="top"><img src="Images/l4.jpg"><br/>-4</td-->
    </tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 18) || ($_SESSION['counter'] == 19) || ($_SESSION['counter'] == 20) || ($_SESSION['counter'] == 21) || ($_SESSION['counter'] == 22) || ($_SESSION['counter'] == 23)) { ?>
    <tr align="center">
        <td bgcolor = #555555 align="left">Your Rewards</td>
        <td valign="bottom">3<br/><img src="Images/w3.jpg"></td>
        <td valign="bottom">7<br/><img src="Images/w7.jpg"></td>
        <td valign="bottom">3<br/><img src="Images/w3.jpg"></td>
        <td valign="bottom">9<br/><img src="Images/w9.jpg"></td>
        <td valign="bottom">1<br/><img src="Images/w1.jpg"></td>
        <!--td valign="bottom">6<br/><img src="Images/w6.jpg"></td>
        <td valign="bottom">4<br/><img src="Images/w4.jpg"></td>
        <td valign="bottom">1<br/><img src="Images/w1.jpg"></td-->
    </tr>
    <tr align="center">
        <td bgcolor = #555555 align="left">Your Penalties</td>
        <td valign="top"><img src="Images/l4.jpg"><br/>-4</td>
        <td valign="top"><img src="Images/l2.jpg"><br/>-2</td>
        <td valign="top"><img src="Images/l7.jpg"><br/>-7</td>
        <td valign="top"><img src="Images/l7.jpg"><br/>-7</td>
        <td valign="top"><img src="Images/l4.jpg"><br/>-4</td>
        <!--td valign="top"><img src="Images/l2.jpg"><br/>-2</td>
        <td valign="top"><img src="Images/l9.jpg"><br/>-9</td>
        <td valign="top"><img src="Images/l10.jpg"><br/>-10</td-->
    </tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 24) || ($_SESSION['counter'] == 25) || ($_SESSION['counter'] == 26) || ($_SESSION['counter'] == 27) || ($_SESSION['counter'] == 28) || ($_SESSION['counter'] == 29)) { ?>
    <tr align="center">
        <td bgcolor = #555555 align="left">Your Rewards</td>
        <td valign="bottom">8<br/><img src="Images/w8.jpg"></td>
        <td valign="bottom">5<br/><img src="Images/w5.jpg"></td>
        <td valign="bottom">2<br/><img src="Images/w2.jpg"></td>
        <td valign="bottom">10<br/><img src="Images/w10.jpg"></td>
        <td valign="bottom">1<br/><img src="Images/w1.jpg"></td>
        <td valign="bottom">3<br/><img src="Images/w3.jpg"></td>
        <td valign="bottom">9<br/><img src="Images/w9.jpg"></td>
        <td valign="bottom">4<br/><img src="Images/w4.jpg"></td>
    </tr>
    <tr align="center">
        <td bgcolor = #555555 align="left">Your Penalties</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
    </tr>
<?php } ?>

<?php if ($_SESSION['counter'] == 0) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.46<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.60<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.82<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.40<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.91<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.73<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.43<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.65<br/><img src="Images/pn6.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.54</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.40</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.18</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.60</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.09</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.27</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.57</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.35</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 1) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.41<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.52<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.40<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.97<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.68<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.43<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.59<br/><img src="Images/pn6.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.59</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.48</td>
        <td valign="top"><!--img src="Images/p0.jpg"--><br/>0.00</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.60</td>
        <td valign="top"><img src="Images/p0.jpg"><br/>0.03</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.32</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.57</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.41</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 2) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.44<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.57<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.97<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.40<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.89<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.69<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.42<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.62<br/><img src="Images/pn6.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.56</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.43</td>
        <td valign="top"><img src="Images/p0.jpg"><br/>0.03</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.60</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.11</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.31</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.58</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.38</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 3) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.44<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.53<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.42<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.66<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.46<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.49<br/><img src="Images/pn5.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.56</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.47</td>
        <td valign="top"><!--img src="Images/p0.jpg"--><br/>0.00</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.58</td>
        <td valign="top"><!--img src="Images/p0.jpg"--><br/>0.00</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.34</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.54</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.51</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 4) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.41<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.57<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.90<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.35<br/><img src="Images/pn3.jpg"></td>
        <td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.75<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.38<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.64<br/><img src="Images/pn6.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.59</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.43</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.10</td>
        <td valign="top"><img src="Images/p7.jpg"><br/>0.65</td>
        <td valign="top"><!--img src="Images/p0.jpg"--><br/>0.00</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.25</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.62</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.36</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 5) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.41<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.56<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.37<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.92<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.78<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.40<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.56<br/><img src="Images/pn6.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.59</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.44</td>
        <td valign="top"><!--img src="Images/p0.jpg"--><br/>0.00</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.63</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.08</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.22</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.60</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.44</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 6) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.83<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.51<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.59<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.54<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.49<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.84<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.48<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.17</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.49</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.41</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.46</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.51</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.16</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.52</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 7) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.96<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.40<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.68<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.46<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.45<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.96<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.42<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.67<br/><img src="Images/pn7.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p0.jpg"><br/>0.04</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.60</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.32</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.54</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.55</td>
        <td valign="top"><img src="Images/p0.jpg"><br/>0.04</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.58</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.33</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 8) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.77<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.49<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.83<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.50<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.50<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.77<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.46<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.68<br/><img src="Images/pn7.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.23</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.51</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.17</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.50</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.50</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.23</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.54</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.32</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 9) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.35<br/><img src="Images/pn3.jpg"></td>
        <td valign="bottom">0.76<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.36<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.48<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.45<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.60<br/><img src="Images/pn6.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><!--img src="Images/p0.jpg"--><br/>0.00</td>
        <td valign="top"><img src="Images/p7.jpg"><br/>0.65</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.24</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.64</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.52</td>
        <td valign="top"><!--img src="Images/p0.jpg"--><br/>0.00</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.55</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.40</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 10) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.41<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.54<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.49<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.44<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.39<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.73<br/><img src="Images/pn7.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><!--img src="Images/p0.jpg"--><br/>0.00</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.59</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.46</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.51</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.56</td>
        <td valign="top"><!--img src="Images/p0.jpg"--><br/>0.00</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.61</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.27</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 11) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.88<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.38<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.84<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.45<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.48<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.43<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.54<br/><img src="Images/pn5.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.12</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.62</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.16</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.55</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.52</td>
        <td valign="top"><!--img src="Images/p0.jpg"--><br/>0.00</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.57</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.46</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 12) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.78<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.76<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.20<br/><img src="Images/pn2.jpg"></td>
        <td valign="bottom">0.77<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.49<br/><img src="Images/pn5.jpg"></td>
        <!--td valign="bottom">0.60<br/><img src="Images/p6.jpg"></td>
        <td valign="bottom">0.47<br/><img src="Images/p5.jpg"></td>
        <td valign="bottom">0.01<br/><img src="Images/p0.jpg"></td-->
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.22</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.24</td>
        <td valign="top"><img src="Images/p8.jpg"><br/>0.80</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.23</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.51</td>
        <!--td valign="top">0.60<br/><img src="Images/p6.jpg"></td>
        <td valign="top">0.47<br/><img src="Images/p5.jpg"></td>
        <td valign="top">0.01<br/><img src="Images/p0.jpg"></td-->
    </tr>
<?php } else if ($_SESSION['counter'] == 13) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.74<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.67<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.38<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.69<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.52<br/><img src="Images/pn5.jpg"></td>
        <!--td valign="bottom">0.54<br/><img src="Images/p5.jpg"></td>
        <td valign="bottom">0.42<br/><img src="Images/p4.jpg"></td>
        <td valign="bottom">0.04<br/><img src="Images/p0.jpg"></td-->
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.26</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.33</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.62</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.31</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.48</td>
        <!--td valign="top">0.54<br/><img src="Images/p5.jpg"></td>
        <td valign="top">0.42<br/><img src="Images/p4.jpg"></td>
        <td valign="top">0.04<br/><img src="Images/p0.jpg"></td-->
    </tr>
<?php } else if ($_SESSION['counter'] == 14) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.75<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.75<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.29<br/><img src="Images/pn3.jpg"></td>
        <td valign="bottom">0.75<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.46<br/><img src="Images/pn5.jpg"></td>
        <!--td valign="bottom">0.63<br/><img src="Images/p6.jpg"></td>
        <td valign="bottom">0.33<br/><img src="Images/p3.jpg"></td>
        <td valign="bottom">0.06<br/><img src="Images/p1.jpg"></td-->
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.25</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.25</td>
        <td valign="top"><img src="Images/p7.jpg"><br/>0.71</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.25</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.54</td>
        <!--td valign="top">0.63<br/><img src="Images/p6.jpg"></td>
        <td valign="top">0.33<br/><img src="Images/p3.jpg"></td>
        <td valign="top">0.06<br/><img src="Images/p1.jpg"></td-->
    </tr>
<?php } else if ($_SESSION['counter'] == 15) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.75<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.66<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.39<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.70<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.50<br/><img src="Images/pn5.jpg"></td>
        <!--td valign="bottom">0.98<br/><img src="Images/p10.jpg"></td>
        <td valign="bottom">0.30<br/><img src="Images/p3.jpg"></td>
        <td valign="bottom">0.13<br/><img src="Images/p1.jpg"></td-->
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.25</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.34</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.61</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.30</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.50</td>
        <!--td valign="top">0.98<br/><img src="Images/p10.jpg"></td>
        <td valign="top">0.30<br/><img src="Images/p3.jpg"></td>
        <td valign="top">0.13<br/><img src="Images/p1.jpg"></td-->
    </tr>
<?php } else if ($_SESSION['counter'] == 16) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.76<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.68<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.29<br/><img src="Images/pn3.jpg"></td>
        <td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.55<br/><img src="Images/pn5.jpg"></td>
        <!--td valign="bottom">0.95<br/><img src="Images/p10.jpg"></td>
        <td valign="bottom">0.30<br/><img src="Images/p3.jpg"></td>
        <td valign="bottom">0.14<br/><img src="Images/p1.jpg"></td-->
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.24</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.32</td>
        <td valign="top"><img src="Images/p7.jpg"><br/>0.71</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.45</td>
        <!--td valign="top">0.95<br/><img src="Images/p10.jpg"></td>
        <td valign="top">0.30<br/><img src="Images/p3.jpg"></td>
        <td valign="top">0.14<br/><img src="Images/p1.jpg"></td-->
    </tr>
<?php } else if ($_SESSION['counter'] == 17) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.68<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.36<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.71<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.53<br/><img src="Images/pn5.jpg"></td>
        <!--td valign="bottom">0.60<br/><img src="Images/p6.jpg"></td>
        <td valign="bottom">0.40<br/><img src="Images/p4.jpg"></td>
        <td valign="bottom">0.16<br/><img src="Images/p2.jpg"></td-->
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.32</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.64</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.29</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.47</td>
        <!--td valign="top">0.60<br/><img src="Images/p6.jpg"></td>
        <td valign="top">0.40<br/><img src="Images/p4.jpg"></td>
        <td valign="top">0.16<br/><img src="Images/p2.jpg"></td-->
    </tr>
<?php } else if ($_SESSION['counter'] == 18) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.63<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.20<br/><img src="Images/pn2.jpg"></td>
        <td valign="bottom">0.80<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.59<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.78<br/><img src="Images/pn8.jpg"></td>
        <!--td valign="bottom">0.81<br/><img src="Images/p8.jpg"></td>
        <td valign="bottom">0.35<br/><img src="Images/p4.jpg"></td>
        <td valign="bottom">0.14<br/><img src="Images/p1.jpg"></td-->
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.37</td>
        <td valign="top"><img src="Images/p8.jpg"><br/>0.80</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.20</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.41</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.22</td>
        <!--td valign="top">0.81<br/><img src="Images/p8.jpg"></td>
        <td valign="top">0.35<br/><img src="Images/p4.jpg"></td>
        <td valign="top">0.14<br/><img src="Images/p1.jpg"></td-->
    </tr>
<?php } else if ($_SESSION['counter'] == 19) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.59<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.33<br/><img src="Images/pn3.jpg"></td>
        <td valign="bottom">0.71<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.53<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.84<br/><img src="Images/pn8.jpg"></td>
        <!--td valign="bottom">0.69<br/><img src="Images/p7.jpg"></td>
        <td valign="bottom">0.33<br/><img src="Images/p3.jpg"></td>
        <td valign="bottom">0.29<br/><img src="Images/p3.jpg"></td-->
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.41</td>
        <td valign="top"><img src="Images/p7.jpg"><br/>0.67</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.29</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.47</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.16</td>
        <!--td valign="top">0.69<br/><img src="Images/p7.jpg"></td>
        <td valign="top">0.33<br/><img src="Images/p3.jpg"></td>
        <td valign="top">0.29<br/><img src="Images/p3.jpg"></td-->
    </tr>
<?php } else if ($_SESSION['counter'] == 20) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.59<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.30<br/><img src="Images/pn3.jpg"></td>
        <td valign="bottom">0.77<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.57<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.77<br/><img src="Images/pn8.jpg"></td>
        <!--td valign="bottom">0.57<br/><img src="Images/p6.jpg"></td>
        <td valign="bottom">0.24<br/><img src="Images/p2.jpg"></td>
        <td valign="bottom">0.07<br/><img src="Images/p1.jpg"></td-->
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.41</td>
        <td valign="top"><img src="Images/p7.jpg"><br/>0.70</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.23</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.43</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.23</td>
        <!--td valign="top">0.57<br/><img src="Images/p6.jpg"></td>
        <td valign="top">0.24<br/><img src="Images/p2.jpg"></td>
        <td valign="top">0.07<br/><img src="Images/p1.jpg"></td-->
    </tr>
<?php } else if ($_SESSION['counter'] == 21) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.57<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.33<br/><img src="Images/pn3.jpg"></td>
        <td valign="bottom">0.71<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.53<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.86<br/><img src="Images/pn9.jpg"></td>
        <!--td valign="bottom">0.58<br/><img src="Images/p6.jpg"></td>
        <td valign="bottom">0.25<br/><img src="Images/p3.jpg"></td>
        <td valign="bottom">0.08<br/><img src="Images/p1.jpg"></td-->
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.43</td>
        <td valign="top"><img src="Images/p7.jpg"><br/>0.67</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.29</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.47</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.14</td>
        <!--td valign="top">0.58<br/><img src="Images/p6.jpg"></td>
        <td valign="top">0.25<br/><img src="Images/p3.jpg"></td>
        <td valign="top">0.08<br/><img src="Images/p1.jpg"></td-->
    </tr>
<?php } else if ($_SESSION['counter'] == 22) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.63<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.27<br/><img src="Images/pn3.jpg"></td>
        <td valign="bottom">0.74<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.47<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.89<br/><img src="Images/pn9.jpg"></td>
        <!--td valign="bottom">0.60<br/><img src="Images/p6.jpg"></td>
        <td valign="bottom">0.47<br/><img src="Images/p5.jpg"></td>
        <td valign="bottom">0.01<br/><img src="Images/p0.jpg"></td-->
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.37</td>
        <td valign="top"><img src="Images/p7.jpg"><br/>0.73</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.26</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.53</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.11</td>
        <!--td valign="top">0.60<br/><img src="Images/p6.jpg"></td>
        <td valign="top">0.47<br/><img src="Images/p5.jpg"></td>
        <td valign="top">0.01<br/><img src="Images/p0.jpg"></td-->
    </tr>
<?php } else if ($_SESSION['counter'] == 23) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.55<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.30<br/><img src="Images/pn3.jpg"></td>
        <td valign="bottom">0.71<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.49<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.95<br/><img src="Images/pn9.jpg"></td>
        <!--td valign="bottom">0.54<br/><img src="Images/p5.jpg"></td>
        <td valign="bottom">0.42<br/><img src="Images/p4.jpg"></td>
        <td valign="bottom">0.04<br/><img src="Images/p0.jpg"></td-->
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.45</td>
        <td valign="top"><img src="Images/p7.jpg"><br/>0.70</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.29</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.51</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.05</td>
        <!--td valign="top">0.54<br/><img src="Images/p5.jpg"></td>
        <td valign="top">0.42<br/><img src="Images/p4.jpg"></td>
        <td valign="top">0.04<br/><img src="Images/p0.jpg"></td-->
    </tr>
<?php } else if ($_SESSION['counter'] == 24) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.46<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.59<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.82<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.40<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.91<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.73<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.43<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.66<br/><img src="Images/pn7.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.54</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.41</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.18</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.60</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.09</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.27</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.57</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.34</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 25) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.48<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.60<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.45<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.74<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.76<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.49<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.48<br/><img src="Images/pn5.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.52</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.40</td>
        <td valign="top"><!--img src="Images/p0.jpg"--><br/>0.00</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.55</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.26</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.24</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.51</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.52</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 26) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.43<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.56<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.99<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.40<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.88<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.69<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.43<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.62<br/><img src="Images/pn6.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.57</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.44</td>
        <td valign="top"><img src="Images/p0.jpg"><br/>0.01</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.60</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.12</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.31</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.57</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.38</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 27) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.41<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.51<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.93<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.39<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.73<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.42<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.61<br/><img src="Images/pn6.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.59</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.49</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.07</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.61</td>
        <td valign="top"><!--img src="Images/p0.jpg"--><br/>0.00</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.27</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.58</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.39</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 28) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.41<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.56<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.90<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.35<br/><img src="Images/pn3.jpg"></td>
        <td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.75<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.38<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.65<br/><img src="Images/pn6.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.59</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.44</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.10</td>
        <td valign="top"><img src="Images/p7.jpg"><br/>0.65</td>
        <td valign="top"><!--img src="Images/p0.jpg"--><br/>0.00</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.25</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.62</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.35</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 29) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.41<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.56<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.37<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.92<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.78<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.40<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.56<br/><img src="Images/pn6.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.59</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.44</td>
        <td valign="top"><!--img src="Images/p0.jpg"--><br/>0.00</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.63</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.08</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.22</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.60</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.44</td>
    </tr>
<?php } else if ($_SESSION['counter'] < $maxround) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.64<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.68<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.73<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.67<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.76<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.08<br/><img src="Images/pn1.jpg"></td>
        <td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.36</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.32</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.27</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.33</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.24</td>
        <td valign="top"><img src="Images/p9.jpg"><br/>0.92</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>
    </tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 0) || ($_SESSION['counter'] == 1) || ($_SESSION['counter'] == 2) || ($_SESSION['counter'] == 3) || ($_SESSION['counter'] == 4) || ($_SESSION['counter'] == 5)) { ?>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Guards' Rewards</td><td>4</td><td>3</td><td>1</td><td>5</td><td>1</td><td>2</td><td>5</td><td>2</td>
    </tr>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Guards' Penalties</td><td>-8</td><td>-5</td><td>-1</td><td>-10</td><td>-5</td><td>-3</td><td>-9</td><td>-6</td>
    </tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 6) || ($_SESSION['counter'] == 7) || ($_SESSION['counter'] == 8) || ($_SESSION['counter'] == 9) || ($_SESSION['counter'] == 10) || ($_SESSION['counter'] == 11)) { ?>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Guards' Rewards</td><td>1</td><td>4</td><td>2</td><td>3</td><td>4</td><td>1</td><td>5</td><td>2</td>
    </tr>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Guards' Penalties</td><td>-5</td><td>-8</td><td>-1</td><td>-6</td><td>-5</td><td>-1</td><td>-7</td><td>-7</td>
    </tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 12) || ($_SESSION['counter'] == 13) || ($_SESSION['counter'] == 14) || ($_SESSION['counter'] == 15) || ($_SESSION['counter'] == 16) || ($_SESSION['counter'] == 17)) { ?>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Guards' Rewards</td><td>6</td><td>7</td><td>4</td><td>8</td><td>5</td><!--td>9</td><td>6</td><td>9</td-->
    </tr>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Guards' Penalties</td><td>-4</td><td>-4</td><td>-7</td><td>-4</td><td>-6</td><!--td>-5</td><td>-2</td><td>-1</td-->
    </tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 18) || ($_SESSION['counter'] == 19) || ($_SESSION['counter'] == 20) || ($_SESSION['counter'] == 21) || ($_SESSION['counter'] == 22) || ($_SESSION['counter'] == 23)) { ?>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Guards' Rewards</td><td>5</td><td>4</td><td>10</td><td>9</td><td>5</td><!--td>9</td><td>1</td><td>8</td-->
    </tr>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Guards' Penalties</td><td>-6</td><td>-8</td><td>-4</td><td>-8</td><td>-1</td><!--td>-7</td><td>-6</td><td>-6</td-->
    </tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 24) || ($_SESSION['counter'] == 25) || ($_SESSION['counter'] == 26) || ($_SESSION['counter'] == 27) || ($_SESSION['counter'] == 28) || ($_SESSION['counter'] == 29)) { ?>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Guards' Rewards</td><td>4</td><td>3</td><td>1</td><td>5</td><td>1</td><td>2</td><td>5</td><td>2</td>
    </tr>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Guards' Penalties</td><td>-8</td><td>-5</td><td>-1</td><td>-10</td><td>-5</td><td>-3</td><td>-9</td><td>-6</td>
    </tr>
<?php } ?>

<?php if ($_SESSION['counter'] < $maxround) { ?>
</table>

<br/>Please choose a door to attack. Press the Submit Button to confirm your selection.<br/>
<br/>

<input type="submit" type="submit" name="submit_form" id="submit_form" value="Submit">
<br/>
<h4>Please refresh the page if your game is stuck.</h4>
<h4>Your scores will be displayed at the end of the game.</h4>
</form>
<?php } ?>

<?php if ($_SESSION['counter'] >= $maxround) { ?>
    <!--
    Click to upload your score to Facebook<br/>
    <input id="uploadfacebook" type="submit" value="Upload to Facebook" onclick="uploadToFacebook()" />
    <br/>
    <br/>

    <h2><a href="index.php">Play again</a></h2>
    <br/-->

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
                FB.Connect.streamPublish('is playing the game of "The Guards and The Treasure".',{"name": "<?php echo $_SESSION['username']; ?> won <?php echo $tpoints; ?> points by winning <?php echo $twon; ?> of 12 rounds. Play to win an iPod Touch!","caption": "Let's beat the guards and steal some treasure! Click to launch the Game!", "href": "http://games.mohitgoenka.com", "media": [{'type':'image','src':'http://games.mohitgoenka.com/Images/treasure.jpg','href':'http://games.mohitgoenka.com'}], "action_links": [{"text":"Play the game of \"The Guards and The Treasure\"!","href":"http://games.mohitgoenka.com"}],"app_has_no_session":false,"body_general":null})
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

<!--div id="nav-right" style="margin-bottom:5px;">

</div-->

<!-- END Right Side Menu -->


<!-- Footer -->
</div>
</div>

<div class="footer-area" style="margin-top:5px;"><b>Copyright &copy; 2010 - All Rights Reserved</b>

<div id="back-to-top"><a href="javascript:backToTop()">Back to Top</a>
</div>

</div>

<div class="Theme-Sponsors" style="margin-bottom:5px;" align="left">This Page was last updated on August 23, 2010</div>
<!-- END Footer -->

</body>

</html>