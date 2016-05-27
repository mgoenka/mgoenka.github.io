<?php
    session_start();
    $maxround = 35;
    $curround = 35;

    $gate = $_REQUEST['gate'];

    do
    {

    if ($_SESSION['counter'] == 0)
    {
        $pirate[1] = rand(0, 100);

        if ($pirate[1] < 22)
            $pgate[1] = "1";
        else if ($pirate[1] < 73)
            $pgate[1] = "2";
        else
            $pgate[1] = "3";
        $pgate[2] = "-1";
        $pgate[3] = "-2";
        $pgate[4] = "-3";
        $pgate[5] = "-4";

    }
    else if ($_SESSION['counter'] == 1)
    {
        $pirate[1] = rand(0, 100);

        if ($pirate[1] < 23)
            $pgate[1] = "1";
        else if ($pirate[1] < 72)
            $pgate[1] = "2";
        else
            $pgate[1] = "3";
        $pgate[2] = "-1";
        $pgate[3] = "-2";
        $pgate[4] = "-3";
        $pgate[5] = "-4";
    }
    else if ($_SESSION['counter'] == 2)
    {
        $pirate[1] = rand(0, 100);

        if ($pirate[1] < 30)
            $pgate[1] = "1";
        else if ($pirate[1] < 64)
            $pgate[1] = "2";
        else
            $pgate[1] = "3";
        $pgate[2] = "-1";
        $pgate[3] = "-2";
        $pgate[4] = "-3";
        $pgate[5] = "-4";
    }
    else if ($_SESSION['counter'] == 3)
    {
        $pirate[1] = rand(0, 100);

        if ($pirate[1] < 28)
            $pgate[1] = "1";
        else if ($pirate[1] < 61)
            $pgate[1] = "2";
        else
            $pgate[1] = "3";
        $pgate[2] = "-1";
        $pgate[3] = "-2";
        $pgate[4] = "-3";
        $pgate[5] = "-4";
    }
    else if ($_SESSION['counter'] == 4)
    {
        $pirate[1] = rand(0, 100);

        if ($pirate[1] < 29)
            $pgate[1] = "1";
        else if ($pirate[1] < 65)
            $pgate[1] = "2";
        else
            $pgate[1] = "3";
        $pgate[2] = "-1";
        $pgate[3] = "-2";
        $pgate[4] = "-3";
        $pgate[5] = "-4";
    }
    else if ($_SESSION['counter'] == 5)
    {
        $pirate[1] = rand(0, 100);

        if ($pirate[1] < 25)
            $pgate[1] = "1";
        else if ($pirate[1] < 53)
            $pgate[1] = "2";
        else
            $pgate[1] = "3";
        $pgate[2] = "-1";
        $pgate[3] = "-2";
        $pgate[4] = "-3";
        $pgate[5] = "-4";
    }
    else if ($_SESSION['counter'] == 6)
    {
        $pirate[1] = rand(0, 100);

        if ($pirate[1] < 26)
            $pgate[1] = "1";
        else if ($pirate[1] < 65)
            $pgate[1] = "2";
        else
            $pgate[1] = "3";
        $pgate[2] = "-1";
        $pgate[3] = "-2";
        $pgate[4] = "-3";
        $pgate[5] = "-4";
    }
    else if ($_SESSION['counter'] == 7)
    {
        for ($pc = 1; $pc < 3 ; $pc++)
        {
            $pirate[$pc] = rand(0, 200);

            if ($pirate[$pc] < 60)
                $pgate[$pc] = "1";
            else if ($pirate[$pc] < 80)
                $pgate[$pc] = "2";
            else if ($pirate[$pc] < 120)
                $pgate[$pc] = "3";
            else if ($pirate[$pc] < 156)
                $pgate[$pc] = "4";
            else if ($pirate[$pc] < 171)
                $pgate[$pc] = "5";
            else
                $pgate[$pc] = "6";
        }
        $pgate[3] = "-1";
        $pgate[4] = "-2";
        $pgate[5] = "-3";
    }
    else if ($_SESSION['counter'] == 8)
    {
        for ($pc = 1; $pc < 3 ; $pc++)
        {
            $pirate[$pc] = rand(0, 200);

            if ($pirate[$pc] < 63)
                $pgate[$pc] = "1";
            else if ($pirate[$pc] < 85)
                $pgate[$pc] = "2";
            else if ($pirate[$pc] < 131)
                $pgate[$pc] = "3";
            else if ($pirate[$pc] < 152)
                $pgate[$pc] = "4";
            else if ($pirate[$pc] < 169)
                $pgate[$pc] = "5";
            else
                $pgate[$pc] = "6";
        }
        $pgate[3] = "-1";
        $pgate[4] = "-2";
        $pgate[5] = "-3";
    }
    else if ($_SESSION['counter'] == 9)
    {
        for ($pc = 1; $pc < 3 ; $pc++)
        {
            $pirate[$pc] = rand(0, 200);

            if ($pirate[$pc] < 76)
                $pgate[$pc] = "1";
            else if ($pirate[$pc] < 101)
                $pgate[$pc] = "2";
            else if ($pirate[$pc] < 112)
                $pgate[$pc] = "3";
            else if ($pirate[$pc] < 145)
                $pgate[$pc] = "4";
            else if ($pirate[$pc] < 150)
                $pgate[$pc] = "5";
            else
                $pgate[$pc] = "6";
        }
        $pgate[3] = "-1";
        $pgate[4] = "-2";
        $pgate[5] = "-3";
    }
    else if ($_SESSION['counter'] == 10)
    {
        for ($pc = 1; $pc < 3 ; $pc++)
        {
            $pirate[$pc] = rand(0, 200);

            if ($pirate[$pc] < 66)
                $pgate[$pc] = "1";
            else if ($pirate[$pc] < 94)
                $pgate[$pc] = "2";
            else if ($pirate[$pc] < 112)
                $pgate[$pc] = "3";
            else if ($pirate[$pc] < 141)
                $pgate[$pc] = "4";
            else if ($pirate[$pc] < 157)
                $pgate[$pc] = "5";
            else
                $pgate[$pc] = "6";
        }
        $pgate[3] = "-1";
        $pgate[4] = "-2";
        $pgate[5] = "-3";
    }
    else if ($_SESSION['counter'] == 11)
    {
        for ($pc = 1; $pc < 3 ; $pc++)
        {
            $pirate[$pc] = rand(0, 200);

            if ($pirate[$pc] < 59)
                $pgate[$pc] = "1";
            else if ($pirate[$pc] < 86)
                $pgate[$pc] = "2";
            else if ($pirate[$pc] < 100)
                $pgate[$pc] = "3";
            else if ($pirate[$pc] < 145)
                $pgate[$pc] = "4";
            else if ($pirate[$pc] < 161)
                $pgate[$pc] = "5";
            else
                $pgate[$pc] = "6";
        }
        $pgate[3] = "-1";
        $pgate[4] = "-2";
        $pgate[5] = "-3";
    }
    else if ($_SESSION['counter'] == 12)
    {
        for ($pc = 1; $pc < 3 ; $pc++)
        {
            $pirate[$pc] = rand(0, 200);

            if ($pirate[$pc] < 56)
                $pgate[$pc] = "1";
            else if ($pirate[$pc] < 68)
                $pgate[$pc] = "2";
            else if ($pirate[$pc] < 102)
                $pgate[$pc] = "3";
            else if ($pirate[$pc] < 127)
                $pgate[$pc] = "4";
            else if ($pirate[$pc] < 161)
                $pgate[$pc] = "5";
            else
                $pgate[$pc] = "6";
        }
        $pgate[3] = "-1";
        $pgate[4] = "-2";
        $pgate[5] = "-3";
    }
    else if ($_SESSION['counter'] == 13)
    {
        for ($pc = 1; $pc < 3 ; $pc++)
        {
            $pirate[$pc] = rand(0, 200);

            if ($pirate[$pc] < 58)
                $pgate[$pc] = "1";
            else if ($pirate[$pc] < 76)
                $pgate[$pc] = "2";
            else if ($pirate[$pc] < 104)
                $pgate[$pc] = "3";
            else if ($pirate[$pc] < 132)
                $pgate[$pc] = "4";
            else if ($pirate[$pc] < 161)
                $pgate[$pc] = "5";
            else
                $pgate[$pc] = "6";
        }
        $pgate[3] = "-1";
        $pgate[4] = "-2";
        $pgate[5] = "-3";
    }
    else if ($_SESSION['counter'] == 14)
    {
        for ($pc = 1; $pc < 4 ; $pc++)
        {
            $pirate[$pc] = rand(0, 300);

            if ($pirate[$pc] < 21)
                $pgate[$pc] = "1";
            else if ($pirate[$pc] < 45)
                $pgate[$pc] = "2";
            else if ($pirate[$pc] < 73)
                $pgate[$pc] = "3";
            else if ($pirate[$pc] < 94)
                $pgate[$pc] = "4";
            else if ($pirate[$pc] < 124)
                $pgate[$pc] = "5";
            else if ($pirate[$pc] < 168)
                $pgate[$pc] = "6";
            else if ($pirate[$pc] < 245)
                $pgate[$pc] = "7";
            else if ($pirate[$pc] < 262)
                $pgate[$pc] = "8";
            else
                $pgate[$pc] = "9";
        }
        $pgate[4] = "-1";
        $pgate[5] = "-2";
    }
    else if ($_SESSION['counter'] == 15)
    {
        for ($pc = 1; $pc < 4 ; $pc++)
        {
            $pirate[$pc] = rand(0, 300);

            if ($pirate[$pc] < 29)
                $pgate[$pc] = "1";
            else if ($pirate[$pc] < 43)
                $pgate[$pc] = "2";
            else if ($pirate[$pc] < 76)
                $pgate[$pc] = "3";
            else if ($pirate[$pc] < 100)
                $pgate[$pc] = "4";
            else if ($pirate[$pc] < 134)
                $pgate[$pc] = "5";
            else if ($pirate[$pc] < 176)
                $pgate[$pc] = "6";
            else if ($pirate[$pc] < 234)
                $pgate[$pc] = "7";
            else if ($pirate[$pc] < 254)
                $pgate[$pc] = "8";
            else
                $pgate[$pc] = "9";
        }
        $pgate[4] = "-1";
        $pgate[5] = "-2";
    }
    else if ($_SESSION['counter'] == 16)
    {
        for ($pc = 1; $pc < 4 ; $pc++)
        {
            $pirate[$pc] = rand(0, 300);

            if ($pirate[$pc] < 13)
                $pgate[$pc] = "1";
            else if ($pirate[$pc] < 30)
                $pgate[$pc] = "2";
            else if ($pirate[$pc] < 66)
                $pgate[$pc] = "3";
            else if ($pirate[$pc] < 96)
                $pgate[$pc] = "4";
            else if ($pirate[$pc] < 141)
                $pgate[$pc] = "5";
            else if ($pirate[$pc] < 185)
                $pgate[$pc] = "6";
            else if ($pirate[$pc] < 245)
                $pgate[$pc] = "7";
            else if ($pirate[$pc] < 268)
                $pgate[$pc] = "8";
            else
                $pgate[$pc] = "9";
        }
        $pgate[4] = "-1";
        $pgate[5] = "-2";
    }
    else if ($_SESSION['counter'] == 17)
    {
        for ($pc = 1; $pc < 4 ; $pc++)
        {
            $pirate[$pc] = rand(0, 300);

            if ($pirate[$pc] < 0)
                $pgate[$pc] = "1";
            else if ($pirate[$pc] < 23)
                $pgate[$pc] = "2";
            else if ($pirate[$pc] < 60)
                $pgate[$pc] = "3";
            else if ($pirate[$pc] < 95)
                $pgate[$pc] = "4";
            else if ($pirate[$pc] < 147)
                $pgate[$pc] = "5";
            else if ($pirate[$pc] < 195)
                $pgate[$pc] = "6";
            else if ($pirate[$pc] < 258)
                $pgate[$pc] = "7";
            else if ($pirate[$pc] < 272)
                $pgate[$pc] = "8";
            else
                $pgate[$pc] = "9";
        }
        $pgate[4] = "-1";
        $pgate[5] = "-2";
    }
    else if ($_SESSION['counter'] == 18)
    {
        for ($pc = 1; $pc < 4 ; $pc++)
        {
            $pirate[$pc] = rand(0, 300);

            if ($pirate[$pc] < 9)
                $pgate[$pc] = "1";
            else if ($pirate[$pc] < 41)
                $pgate[$pc] = "2";
            else if ($pirate[$pc] < 73)
                $pgate[$pc] = "3";
            else if ($pirate[$pc] < 106)
                $pgate[$pc] = "4";
            else if ($pirate[$pc] < 147)
                $pgate[$pc] = "5";
            else if ($pirate[$pc] < 184)
                $pgate[$pc] = "6";
            else if ($pirate[$pc] < 253)
                $pgate[$pc] = "7";
            else if ($pirate[$pc] < 274)
                $pgate[$pc] = "8";
            else
                $pgate[$pc] = "9";
        }
        $pgate[4] = "-1";
        $pgate[5] = "-2";
    }
    else if ($_SESSION['counter'] == 19)
    {
        for ($pc = 1; $pc < 4 ; $pc++)
        {
            $pirate[$pc] = rand(0, 300);

            if ($pirate[$pc] < 17)
                $pgate[$pc] = "1";
            else if ($pirate[$pc] < 32)
                $pgate[$pc] = "2";
            else if ($pirate[$pc] < 80)
                $pgate[$pc] = "3";
            else if ($pirate[$pc] < 95)
                $pgate[$pc] = "4";
            else if ($pirate[$pc] < 143)
                $pgate[$pc] = "5";
            else if ($pirate[$pc] < 185)
                $pgate[$pc] = "6";
            else if ($pirate[$pc] < 247)
                $pgate[$pc] = "7";
            else if ($pirate[$pc] < 271)
                $pgate[$pc] = "8";
            else
                $pgate[$pc] = "9";
        }
        $pgate[4] = "-1";
        $pgate[5] = "-2";
    }
    else if ($_SESSION['counter'] == 20)
    {
        for ($pc = 1; $pc < 4 ; $pc++)
        {
            $pirate[$pc] = rand(0, 300);

            if ($pirate[$pc] < 16)
                $pgate[$pc] = "1";
            else if ($pirate[$pc] < 32)
                $pgate[$pc] = "2";
            else if ($pirate[$pc] < 77)
                $pgate[$pc] = "3";
            else if ($pirate[$pc] < 97)
                $pgate[$pc] = "4";
            else if ($pirate[$pc] < 144)
                $pgate[$pc] = "5";
            else if ($pirate[$pc] < 183)
                $pgate[$pc] = "6";
            else if ($pirate[$pc] < 244)
                $pgate[$pc] = "7";
            else if ($pirate[$pc] < 268)
                $pgate[$pc] = "8";
            else
                $pgate[$pc] = "9";
        }
        $pgate[4] = "-1";
        $pgate[5] = "-2";
    }
    else if ($_SESSION['counter'] == 21)
    {
        for ($pc = 1; $pc < 5 ; $pc++)
        {
            $pirate[$pc] = rand(0, 400);

            if ($pirate[$pc] < 42)
                $pgate[$pc] = "1";
            else if ($pirate[$pc] < 49)
                $pgate[$pc] = "2";
            else if ($pirate[$pc] < 73)
                $pgate[$pc] = "3";
            else if ($pirate[$pc] < 95)
                $pgate[$pc] = "4";
            else if ($pirate[$pc] < 105)
                $pgate[$pc] = "5";
            else if ($pirate[$pc] < 192)
                $pgate[$pc] = "6";
            else if ($pirate[$pc] < 219)
                $pgate[$pc] = "7";
            else if ($pirate[$pc] < 242)
                $pgate[$pc] = "8";
            else if ($pirate[$pc] < 272)
                $pgate[$pc] = "9";
            else if ($pirate[$pc] < 283)
                $pgate[$pc] = "10";
            else if ($pirate[$pc] < 345)
                $pgate[$pc] = "11";
            else
                $pgate[$pc] = "12";
        }
        $pgate[5] = "-1";
    }
    else if ($_SESSION['counter'] == 22)
    {
        for ($pc = 1; $pc < 5 ; $pc++)
        {
            $pirate[$pc] = rand(0, 400);

            if ($pirate[$pc] < 55)
                $pgate[$pc] = "1";
            else if ($pirate[$pc] < 65)
                $pgate[$pc] = "2";
            else if ($pirate[$pc] < 94)
                $pgate[$pc] = "3";
            else if ($pirate[$pc] < 126)
                $pgate[$pc] = "4";
            else if ($pirate[$pc] < 140)
                $pgate[$pc] = "5";
            else if ($pirate[$pc] < 198)
                $pgate[$pc] = "6";
            else if ($pirate[$pc] < 231)
                $pgate[$pc] = "7";
            else if ($pirate[$pc] < 261)
                $pgate[$pc] = "8";
            else if ($pirate[$pc] < 296)
                $pgate[$pc] = "9";
            else if ($pirate[$pc] < 312)
                $pgate[$pc] = "10";
            else if ($pirate[$pc] < 378)
                $pgate[$pc] = "11";
            else
                $pgate[$pc] = "12";
        }
        $pgate[5] = "-1";
    }
    else if ($_SESSION['counter'] == 23)
    {
        for ($pc = 1; $pc < 5 ; $pc++)
        {
            $pirate[$pc] = rand(0, 400);

            if ($pirate[$pc] < 36)
                $pgate[$pc] = "1";
            else if ($pirate[$pc] < 36)
                $pgate[$pc] = "2";
            else if ($pirate[$pc] < 79)
                $pgate[$pc] = "3";
            else if ($pirate[$pc] < 95)
                $pgate[$pc] = "4";
            else if ($pirate[$pc] < 100)
                $pgate[$pc] = "5";
            else if ($pirate[$pc] < 161)
                $pgate[$pc] = "6";
            else if ($pirate[$pc] < 209)
                $pgate[$pc] = "7";
            else if ($pirate[$pc] < 243)
                $pgate[$pc] = "8";
            else if ($pirate[$pc] < 300)
                $pgate[$pc] = "9";
            else if ($pirate[$pc] < 308)
                $pgate[$pc] = "10";
            else if ($pirate[$pc] < 386)
                $pgate[$pc] = "11";
            else
                $pgate[$pc] = "12";
        }
        $pgate[5] = "-1";
    }
    else if ($_SESSION['counter'] == 24)
    {
        for ($pc = 1; $pc < 5 ; $pc++)
        {
            $pirate[$pc] = rand(0, 400);

            if ($pirate[$pc] < 34)
                $pgate[$pc] = "1";
            else if ($pirate[$pc] < 47)
                $pgate[$pc] = "2";
            else if ($pirate[$pc] < 89)
                $pgate[$pc] = "3";
            else if ($pirate[$pc] < 118)
                $pgate[$pc] = "4";
            else if ($pirate[$pc] < 138)
                $pgate[$pc] = "5";
            else if ($pirate[$pc] < 192)
                $pgate[$pc] = "6";
            else if ($pirate[$pc] < 237)
                $pgate[$pc] = "7";
            else if ($pirate[$pc] < 275)
                $pgate[$pc] = "8";
            else if ($pirate[$pc] < 325)
                $pgate[$pc] = "9";
            else if ($pirate[$pc] < 347)
                $pgate[$pc] = "10";
            else if ($pirate[$pc] < 398)
                $pgate[$pc] = "11";
            else
                $pgate[$pc] = "12";
        }
        $pgate[5] = "-1";
    }
    else if ($_SESSION['counter'] == 25)
    {
        for ($pc = 1; $pc < 5 ; $pc++)
        {
            $pirate[$pc] = rand(0, 400);

            if ($pirate[$pc] < 29)
                $pgate[$pc] = "1";
            else if ($pirate[$pc] < 40)
                $pgate[$pc] = "2";
            else if ($pirate[$pc] < 76)
                $pgate[$pc] = "3";
            else if ($pirate[$pc] < 97)
                $pgate[$pc] = "4";
            else if ($pirate[$pc] < 114)
                $pgate[$pc] = "5";
            else if ($pirate[$pc] < 188)
                $pgate[$pc] = "6";
            else if ($pirate[$pc] < 227)
                $pgate[$pc] = "7";
            else if ($pirate[$pc] < 258)
                $pgate[$pc] = "8";
            else if ($pirate[$pc] < 302)
                $pgate[$pc] = "9";
            else if ($pirate[$pc] < 321)
                $pgate[$pc] = "10";
            else if ($pirate[$pc] < 386)
                $pgate[$pc] = "11";
            else
                $pgate[$pc] = "12";
        }
        $pgate[5] = "-1";
    }
    else if ($_SESSION['counter'] == 26)
    {
        for ($pc = 1; $pc < 5 ; $pc++)
        {
            $pirate[$pc] = rand(0, 400);

            if ($pirate[$pc] < 0)
                $pgate[$pc] = "1";
            else if ($pirate[$pc] < 6)
                $pgate[$pc] = "2";
            else if ($pirate[$pc] < 57)
                $pgate[$pc] = "3";
            else if ($pirate[$pc] < 86)
                $pgate[$pc] = "4";
            else if ($pirate[$pc] < 122)
                $pgate[$pc] = "5";
            else if ($pirate[$pc] < 186)
                $pgate[$pc] = "6";
            else if ($pirate[$pc] < 239)
                $pgate[$pc] = "7";
            else if ($pirate[$pc] < 280)
                $pgate[$pc] = "8";
            else if ($pirate[$pc] < 333)
                $pgate[$pc] = "9";
            else if ($pirate[$pc] < 355)
                $pgate[$pc] = "10";
            else if ($pirate[$pc] < 401)
                $pgate[$pc] = "11";
            else
                $pgate[$pc] = "12";
        }
        $pgate[5] = "-1";
    }
    else if ($_SESSION['counter'] == 27)
    {
        for ($pc = 1; $pc < 5 ; $pc++)
        {
            $pirate[$pc] = rand(0, 400);

            if ($pirate[$pc] < 9)
                $pgate[$pc] = "1";
            else if ($pirate[$pc] < 18)
                $pgate[$pc] = "2";
            else if ($pirate[$pc] < 66)
                $pgate[$pc] = "3";
            else if ($pirate[$pc] < 93)
                $pgate[$pc] = "4";
            else if ($pirate[$pc] < 125)
                $pgate[$pc] = "5";
            else if ($pirate[$pc] < 187)
                $pgate[$pc] = "6";
            else if ($pirate[$pc] < 238)
                $pgate[$pc] = "7";
            else if ($pirate[$pc] < 277)
                $pgate[$pc] = "8";
            else if ($pirate[$pc] < 329)
                $pgate[$pc] = "9";
            else if ($pirate[$pc] < 350)
                $pgate[$pc] = "10";
            else if ($pirate[$pc] < 401)
                $pgate[$pc] = "11";
            else
                $pgate[$pc] = "12";
        }
        $pgate[5] = "-1";
    }
    else if ($_SESSION['counter'] == 28)
    {
        for ($pc = 1; $pc < 6 ; $pc++)
        {
            $pirate[$pc] = rand(0, 500);

            if ($pirate[$pc] < 16)
                $pgate[$pc] = "1";
            else if ($pirate[$pc] < 42)
                $pgate[$pc] = "2";
            else if ($pirate[$pc] < 78)
                $pgate[$pc] = "3";
            else if ($pirate[$pc] < 111)
                $pgate[$pc] = "4";
            else if ($pirate[$pc] < 193)
                $pgate[$pc] = "5";
            else if ($pirate[$pc] < 241)
                $pgate[$pc] = "6";
            else if ($pirate[$pc] < 251)
                $pgate[$pc] = "7";
            else if ($pirate[$pc] < 269)
                $pgate[$pc] = "8";
            else if ($pirate[$pc] < 278)
                $pgate[$pc] = "9";
            else if ($pirate[$pc] < 341)
                $pgate[$pc] = "10";
            else if ($pirate[$pc] < 352)
                $pgate[$pc] = "11";
            else if ($pirate[$pc] < 372)
                $pgate[$pc] = "12";
            else if ($pirate[$pc] < 418)
                $pgate[$pc] = "13";
            else if ($pirate[$pc] < 480)
                $pgate[$pc] = "14";
            else
                $pgate[$pc] = "15";
        }
    }
    else if ($_SESSION['counter'] == 29)
    {
        for ($pc = 1; $pc < 6 ; $pc++)
        {
            $pirate[$pc] = rand(0, 500);

            if ($pirate[$pc] < 28)
                $pgate[$pc] = "1";
            else if ($pirate[$pc] < 57)
                $pgate[$pc] = "2";
            else if ($pirate[$pc] < 99)
                $pgate[$pc] = "3";
            else if ($pirate[$pc] < 138)
                $pgate[$pc] = "4";
            else if ($pirate[$pc] < 182)
                $pgate[$pc] = "5";
            else if ($pirate[$pc] < 217)
                $pgate[$pc] = "6";
            else if ($pirate[$pc] < 234)
                $pgate[$pc] = "7";
            else if ($pirate[$pc] < 256)
                $pgate[$pc] = "8";
            else if ($pirate[$pc] < 268)
                $pgate[$pc] = "9";
            else if ($pirate[$pc] < 338)
                $pgate[$pc] = "10";
            else if ($pirate[$pc] < 352)
                $pgate[$pc] = "11";
            else if ($pirate[$pc] < 380)
                $pgate[$pc] = "12";
            else if ($pirate[$pc] < 421)
                $pgate[$pc] = "13";
            else if ($pirate[$pc] < 477)
                $pgate[$pc] = "14";
            else
                $pgate[$pc] = "15";
        }
    }
    else if ($_SESSION['counter'] == 30)
    {
        for ($pc = 1; $pc < 6 ; $pc++)
        {
            $pirate[$pc] = rand(0, 500);

            if ($pirate[$pc] < 0)
                $pgate[$pc] = "1";
            else if ($pirate[$pc] < 46)
                $pgate[$pc] = "2";
            else if ($pirate[$pc] < 91)
                $pgate[$pc] = "3";
            else if ($pirate[$pc] < 138)
                $pgate[$pc] = "4";
            else if ($pirate[$pc] < 180)
                $pgate[$pc] = "5";
            else if ($pirate[$pc] < 213)
                $pgate[$pc] = "6";
            else if ($pirate[$pc] < 213)
                $pgate[$pc] = "7";
            else if ($pirate[$pc] < 243)
                $pgate[$pc] = "8";
            else if ($pirate[$pc] < 259)
                $pgate[$pc] = "9";
            else if ($pirate[$pc] < 332)
                $pgate[$pc] = "10";
            else if ($pirate[$pc] < 352)
                $pgate[$pc] = "11";
            else if ($pirate[$pc] < 370)
                $pgate[$pc] = "12";
            else if ($pirate[$pc] < 408)
                $pgate[$pc] = "13";
            else if ($pirate[$pc] < 462)
                $pgate[$pc] = "14";
            else
                $pgate[$pc] = "15";
        }
    }
    else if ($_SESSION['counter'] == 31)
    {
        for ($pc = 1; $pc < 6 ; $pc++)
        {
            $pirate[$pc] = rand(0, 500);

            if ($pirate[$pc] < 0)
                $pgate[$pc] = "1";
            else if ($pirate[$pc] < 54)
                $pgate[$pc] = "2";
            else if ($pirate[$pc] < 102)
                $pgate[$pc] = "3";
            else if ($pirate[$pc] < 155)
                $pgate[$pc] = "4";
            else if ($pirate[$pc] < 199)
                $pgate[$pc] = "5";
            else if ($pirate[$pc] < 233)
                $pgate[$pc] = "6";
            else if ($pirate[$pc] < 233)
                $pgate[$pc] = "7";
            else if ($pirate[$pc] < 257)
                $pgate[$pc] = "8";
            else if ($pirate[$pc] < 258)
                $pgate[$pc] = "9";
            else if ($pirate[$pc] < 352)
                $pgate[$pc] = "10";
            else if ($pirate[$pc] < 363)
                $pgate[$pc] = "11";
            else if ($pirate[$pc] < 364)
                $pgate[$pc] = "12";
            else if ($pirate[$pc] < 404)
                $pgate[$pc] = "13";
            else if ($pirate[$pc] < 460)
                $pgate[$pc] = "14";
            else
                $pgate[$pc] = "15";
        }
    }
    else if ($_SESSION['counter'] == 32)
    {
        for ($pc = 1; $pc < 6 ; $pc++)
        {
            $pirate[$pc] = rand(0, 500);

            if ($pirate[$pc] < 0)
                $pgate[$pc] = "1";
            else if ($pirate[$pc] < 43)
                $pgate[$pc] = "2";
            else if ($pirate[$pc] < 81)
                $pgate[$pc] = "3";
            else if ($pirate[$pc] < 121)
                $pgate[$pc] = "4";
            else if ($pirate[$pc] < 191)
                $pgate[$pc] = "5";
            else if ($pirate[$pc] < 235)
                $pgate[$pc] = "6";
            else if ($pirate[$pc] < 235)
                $pgate[$pc] = "7";
            else if ($pirate[$pc] < 261)
                $pgate[$pc] = "8";
            else if ($pirate[$pc] < 276)
                $pgate[$pc] = "9";
            else if ($pirate[$pc] < 338)
                $pgate[$pc] = "10";
            else if ($pirate[$pc] < 358)
                $pgate[$pc] = "11";
            else if ($pirate[$pc] < 370)
                $pgate[$pc] = "12";
            else if ($pirate[$pc] < 425)
                $pgate[$pc] = "13";
            else if ($pirate[$pc] < 465)
                $pgate[$pc] = "14";
            else
                $pgate[$pc] = "15";
        }
    }
    else if ($_SESSION['counter'] == 33)
    {
        for ($pc = 1; $pc < 6 ; $pc++)
        {
            $pirate[$pc] = rand(0, 500);

            if ($pirate[$pc] < 0)
                $pgate[$pc] = "1";
            else if ($pirate[$pc] < 36)
                $pgate[$pc] = "2";
            else if ($pirate[$pc] < 84)
                $pgate[$pc] = "3";
            else if ($pirate[$pc] < 131)
                $pgate[$pc] = "4";
            else if ($pirate[$pc] < 172)
                $pgate[$pc] = "5";
            else if ($pirate[$pc] < 203)
                $pgate[$pc] = "6";
            else if ($pirate[$pc] < 231)
                $pgate[$pc] = "7";
            else if ($pirate[$pc] < 258)
                $pgate[$pc] = "8";
            else if ($pirate[$pc] < 268)
                $pgate[$pc] = "9";
            else if ($pirate[$pc] < 331)
                $pgate[$pc] = "10";
            else if ($pirate[$pc] < 342)
                $pgate[$pc] = "11";
            else if ($pirate[$pc] < 378)
                $pgate[$pc] = "12";
            else if ($pirate[$pc] < 413)
                $pgate[$pc] = "13";
            else if ($pirate[$pc] < 459)
                $pgate[$pc] = "14";
            else
                $pgate[$pc] = "15";
        }
    }
    else if ($_SESSION['counter'] == 34)
    {
        for ($pc = 1; $pc < 6 ; $pc++)
        {
            $pirate[$pc] = rand(0, 500);

            if ($pirate[$pc] < 0)
                $pgate[$pc] = "1";
            else if ($pirate[$pc] < 40)
                $pgate[$pc] = "2";
            else if ($pirate[$pc] < 87)
                $pgate[$pc] = "3";
            else if ($pirate[$pc] < 133)
                $pgate[$pc] = "4";
            else if ($pirate[$pc] < 176)
                $pgate[$pc] = "5";
            else if ($pirate[$pc] < 207)
                $pgate[$pc] = "6";
            else if ($pirate[$pc] < 226)
                $pgate[$pc] = "7";
            else if ($pirate[$pc] < 254)
                $pgate[$pc] = "8";
            else if ($pirate[$pc] < 270)
                $pgate[$pc] = "9";
            else if ($pirate[$pc] < 335)
                $pgate[$pc] = "10";
            else if ($pirate[$pc] < 348)
                $pgate[$pc] = "11";
            else if ($pirate[$pc] < 380)
                $pgate[$pc] = "12";
            else if ($pirate[$pc] < 416)
                $pgate[$pc] = "13";
            else if ($pirate[$pc] < 460)
                $pgate[$pc] = "14";
            else
                $pgate[$pc] = "15";
        }
    }
    else if (($_SESSION['counter'] < $maxround))
    {
        for ($pc = 1; $pc < 6 ; $pc++)
        {
            $pirate[$pc] = rand(0, 500);

            if ($pirate[$pc] < 0)
                $pgate[$pc] = "1";
            else if ($pirate[$pc] < 40)
                $pgate[$pc] = "2";
            else if ($pirate[$pc] < 87)
                $pgate[$pc] = "3";
            else if ($pirate[$pc] < 133)
                $pgate[$pc] = "4";
            else if ($pirate[$pc] < 176)
                $pgate[$pc] = "5";
            else if ($pirate[$pc] < 207)
                $pgate[$pc] = "6";
            else if ($pirate[$pc] < 226)
                $pgate[$pc] = "7";
            else if ($pirate[$pc] < 254)
                $pgate[$pc] = "8";
            else if ($pirate[$pc] < 270)
                $pgate[$pc] = "9";
            else if ($pirate[$pc] < 335)
                $pgate[$pc] = "10";
            else if ($pirate[$pc] < 348)
                $pgate[$pc] = "11";
            else if ($pirate[$pc] < 380)
                $pgate[$pc] = "12";
            else if ($pirate[$pc] < 416)
                $pgate[$pc] = "13";
            else if ($pirate[$pc] < 460)
                $pgate[$pc] = "14";
            else
                $pgate[$pc] = "15";
        }
    }

    } while (($pgate[1] == $pgate[2]) || ($pgate[1] == $pgate[3]) || ($pgate[1] == $pgate[4]) || ($pgate[1] == $pgate[5]) || ($pgate[2] == $pgate[3]) || ($pgate[2] == $pgate[4]) || ($pgate[2] == $pgate[5]) || ($pgate[3] == $pgate[4]) || ($pgate[3] == $pgate[5]) || ($pgate[4] == $pgate[5]));

    if(!isset($_SESSION['gameid']))
    {
        //Code for combination generator
        //Specify data for index 0 at the beginning
        //Randomly generated indices are from 1 to 10...assigned as 0 to 9
        //Specify data for index $maxround at the end

        $_SESSION['gameid'] = rand(1, 35);

        if ($_SESSION['gameid'] == 1)
            $_SESSION['combo'] = array(30,23,13,16,19,9,12,5,27,31,25,2,24,35,34,29,6,22,33,4,8,18,17,32,28,1,3,14,11,15,26,20,7,10,21,36);
        else if ($_SESSION['gameid'] == 2)
            $_SESSION['combo'] = array(23,16,30,9,13,5,19,31,12,2,27,35,25,29,24,22,34,4,6,18,33,32,8,1,17,14,28,15,3,20,11,10,26,21,7,36);
        else if ($_SESSION['gameid'] == 3)
            $_SESSION['combo'] = array(16,9,23,5,30,31,13,2,19,35,12,29,27,22,25,4,24,18,34,32,6,1,33,14,8,15,17,20,28,10,3,21,11,7,26,36);
        else if ($_SESSION['gameid'] == 4)
            $_SESSION['combo'] = array(9,5,16,31,23,2,30,35,13,29,19,22,12,4,27,18,25,32,24,1,34,14,6,15,33,20,8,10,17,21,28,7,3,26,11,36);
        else if ($_SESSION['gameid'] == 5)
            $_SESSION['combo'] = array(5,31,9,2,16,35,23,29,30,22,13,4,19,18,12,32,27,1,25,14,24,15,34,20,6,10,33,21,8,7,17,26,28,11,3,36);
        else if ($_SESSION['gameid'] == 6)
            $_SESSION['combo'] = array(31,2,5,35,9,29,16,22,23,4,30,18,13,32,19,1,12,14,27,15,25,20,24,10,34,21,6,7,33,26,8,11,17,3,28,36);
        else if ($_SESSION['gameid'] == 7)
            $_SESSION['combo'] = array(2,35,31,29,5,22,9,4,16,18,23,32,30,1,13,14,19,15,12,20,27,10,25,21,24,7,34,26,6,11,33,3,8,28,17,36);
        else if ($_SESSION['gameid'] == 8)
            $_SESSION['combo'] = array(35,29,2,22,31,4,5,18,9,32,16,1,23,14,30,15,13,20,19,10,12,21,27,7,25,26,24,11,34,3,6,28,33,17,8,36);
        else if ($_SESSION['gameid'] == 9)
            $_SESSION['combo'] = array(29,22,35,4,2,18,31,32,5,1,9,14,16,15,23,20,30,10,13,21,19,7,12,26,27,11,25,3,24,28,34,17,6,8,33,36);
        else if ($_SESSION['gameid'] == 10)
            $_SESSION['combo'] = array(22,4,29,18,35,32,2,1,31,14,5,15,9,20,16,10,23,21,30,7,13,26,19,11,12,3,27,28,25,17,24,8,34,33,6,36);
        else if ($_SESSION['gameid'] == 11)
            $_SESSION['combo'] = array(4,18,22,32,29,1,35,14,2,15,31,20,5,10,9,21,16,7,23,26,30,11,13,3,19,28,12,17,27,8,25,33,24,6,34,36);
        else if ($_SESSION['gameid'] == 12)
            $_SESSION['combo'] = array(18,32,4,1,22,14,29,15,35,20,2,10,31,21,5,7,9,26,16,11,23,3,30,28,13,17,19,8,12,33,27,6,25,34,24,36);
        else if ($_SESSION['gameid'] == 13)
            $_SESSION['combo'] = array(32,1,18,14,4,15,22,20,29,10,35,21,2,7,31,26,5,11,9,3,16,28,23,17,30,8,13,33,19,6,12,34,27,24,25,36);
        else if ($_SESSION['gameid'] == 14)
            $_SESSION['combo'] = array(1,14,32,15,18,20,4,10,22,21,29,7,35,26,2,11,31,3,5,28,9,17,16,8,23,33,30,6,13,34,19,24,12,25,27,36);
        else if ($_SESSION['gameid'] == 15)
            $_SESSION['combo'] = array(14,15,1,20,32,10,18,21,4,7,22,26,29,11,35,3,2,28,31,17,5,8,9,33,16,6,23,34,30,24,13,25,19,27,12,36);
        else if ($_SESSION['gameid'] == 16)
            $_SESSION['combo'] = array(15,20,14,10,1,21,32,7,18,26,4,11,22,3,29,28,35,17,2,8,31,33,5,6,9,34,16,24,23,25,30,27,13,12,19,36);
        else if ($_SESSION['gameid'] == 17)
            $_SESSION['combo'] = array(20,10,15,21,14,7,1,26,32,11,18,3,4,28,22,17,29,8,35,33,2,6,31,34,5,24,9,25,16,27,23,12,30,19,13,36);
        else if ($_SESSION['gameid'] == 18)
            $_SESSION['combo'] = array(10,21,20,7,15,26,14,11,1,3,32,28,18,17,4,8,22,33,29,6,35,34,2,24,31,25,5,27,9,12,16,19,23,13,30,36);
        else if ($_SESSION['gameid'] == 19)
            $_SESSION['combo'] = array(21,7,10,26,20,11,15,3,14,28,1,17,32,8,18,33,4,6,22,34,29,24,35,25,2,27,31,12,5,19,9,13,16,30,23,36);
        else if ($_SESSION['gameid'] == 20)
            $_SESSION['combo'] = array(7,26,21,11,10,3,20,28,15,17,14,8,1,33,32,6,18,34,4,24,22,25,29,27,35,12,2,19,31,13,5,30,9,23,16,36);
        else if ($_SESSION['gameid'] == 21)
            $_SESSION['combo'] = array(26,11,7,3,21,28,10,17,20,8,15,33,14,6,1,34,32,24,18,25,4,27,22,12,29,19,35,13,2,30,31,23,5,16,9,36);
        else if ($_SESSION['gameid'] == 22)
            $_SESSION['combo'] = array(11,3,26,28,7,17,21,8,10,33,20,6,15,34,14,24,1,25,32,27,18,12,4,19,22,13,29,30,35,23,2,16,31,9,5,36);
        else if ($_SESSION['gameid'] == 23)
            $_SESSION['combo'] = array(3,28,11,17,26,8,7,33,21,6,10,34,20,24,15,25,14,27,1,12,32,19,18,13,4,30,22,23,29,16,35,9,2,5,31,36);
        else if ($_SESSION['gameid'] == 24)
            $_SESSION['combo'] = array(28,17,3,8,11,33,26,6,7,34,21,24,10,25,20,27,15,12,14,19,1,13,32,30,18,23,4,16,22,9,29,5,35,31,2,36);
        else if ($_SESSION['gameid'] == 25)
            $_SESSION['combo'] = array(17,8,28,33,3,6,11,34,26,24,7,25,21,27,10,12,20,19,15,13,14,30,1,23,32,16,18,9,4,5,22,31,29,2,35,36);
        else if ($_SESSION['gameid'] == 26)
            $_SESSION['combo'] = array(8,33,17,6,28,34,3,24,11,25,26,27,7,12,21,19,10,13,20,30,15,23,14,16,1,9,32,5,18,31,4,2,22,35,29);
        else if ($_SESSION['gameid'] == 27)
            $_SESSION['combo'] = array(33,6,8,34,17,24,28,25,3,27,11,12,26,19,7,13,21,30,10,23,20,16,15,9,14,5,1,31,32,2,18,35,4,29,22,36);
        else if ($_SESSION['gameid'] == 28)
            $_SESSION['combo'] = array(6,34,33,24,8,25,17,27,28,12,3,19,11,13,26,30,7,23,21,16,10,9,20,5,15,31,14,2,1,35,32,29,18,22,4,36);
        else if ($_SESSION['gameid'] == 29)
            $_SESSION['combo'] = array(34,24,6,25,33,27,8,12,17,19,28,13,3,30,11,23,26,16,7,9,21,5,10,31,20,2,15,35,14,29,1,22,32,4,18,36);
        else if ($_SESSION['gameid'] == 30)
            $_SESSION['combo'] = array(24,25,34,27,6,12,33,19,8,13,17,30,28,23,3,16,11,9,26,5,7,31,21,2,10,35,20,29,15,22,14,4,1,18,32,36);
        else if ($_SESSION['gameid'] == 31)
            $_SESSION['combo'] = array(25,27,24,12,34,19,6,13,33,30,8,23,17,16,28,9,3,5,11,31,26,2,7,35,21,29,10,22,20,4,15,18,14,32,1,36);
        else if ($_SESSION['gameid'] == 32)
            $_SESSION['combo'] = array(27,12,25,19,24,13,34,30,6,23,33,16,8,9,17,5,28,31,3,2,11,35,26,29,7,22,21,4,10,18,20,32,15,1,14,36);
        else if ($_SESSION['gameid'] == 33)
            $_SESSION['combo'] = array(12,19,27,13,25,30,24,23,34,16,6,9,33,5,8,31,17,2,28,35,3,29,11,22,26,4,7,18,21,32,10,1,20,14,15,36);
        else if ($_SESSION['gameid'] == 34)
            $_SESSION['combo'] = array(19,13,12,30,27,23,25,16,24,9,34,5,6,31,33,2,8,35,17,29,28,22,3,4,11,18,26,32,7,1,21,14,10,15,20,36);
        else if ($_SESSION['gameid'] == 35)
            $_SESSION['combo'] = array(13,30,19,23,12,16,27,9,25,5,24,31,34,2,6,35,33,29,8,22,17,4,28,18,3,32,11,1,26,14,7,15,21,20,10,36);
        else
            $_SESSION['combo'] = array(2,11,31,9,21,14,34,12,32,5,4,20,17,35,13,18,25,33,24,7,23,22,8,10,15,27,28,19,29,16,36);

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

    for ($cmt=1; $cmt<5; $cmt++)
    {
        for ($cmt1 = $cmt+1; $cmt1<=5; $cmt1++)
        {
            if ($pgate[$cmt] > $pgate[$cmt1])
            {
                $temp = $pgate[$cmt];
                $pgate[$cmt] = $pgate[$cmt1];
                $pgate[$cmt1] = $temp;
            }
        }
    }

    /*if (($_SESSION['gameid'] <=10) && ($_SESSION['counter'] == 20))
    {
        $_SESSION['selection'][10] = $gate;
        $_SESSION['timemillis'][10] = time()-$_SESSION['pretime'];
        $_SESSION['guard'][10][1] = $pgate[1];
        $_SESSION['guard'][10][2] = $pgate[2];
        $_SESSION['guard'][10][3] = $pgate[3];
    }
    else
    {*/
        $_SESSION['selection'][$_SESSION['combo'][$_SESSION['position'] - 1]] = $gate;
        $_SESSION['timemillis'][$_SESSION['combo'][$_SESSION['position'] - 1]] = time()-$_SESSION['pretime'];
        $_SESSION['guard'][$_SESSION['combo'][$_SESSION['position'] - 1]][1] = $pgate[1];
        $_SESSION['guard'][$_SESSION['combo'][$_SESSION['position'] - 1]][2] = $pgate[2];
        $_SESSION['guard'][$_SESSION['combo'][$_SESSION['position'] - 1]][3] = $pgate[3];
        $_SESSION['guard'][$_SESSION['combo'][$_SESSION['position'] - 1]][4] = $pgate[4];
        $_SESSION['guard'][$_SESSION['combo'][$_SESSION['position'] - 1]][5] = $pgate[5];
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
    <h3>Round <?php echo $_SESSION['position']+1; ?> of <?php echo $curround; ?></h3>
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
        for ($i = 1, $j = 1; (($i <= $maxround) && ($j <= $curround)); $i++)
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
                    <td><?php if ($_SESSION['guard'][$_SESSION['combo'][$j - 2]][1] > 0) echo $_SESSION['guard'][$_SESSION['combo'][$j - 2]][1]; ?><?php if ($_SESSION['guard'][$_SESSION['combo'][$j - 2]][1] > 0) echo ", "; ?><?php if ($_SESSION['guard'][$_SESSION['combo'][$j - 2]][2] > 0) echo $_SESSION['guard'][$_SESSION['combo'][$j - 2]][2]; ?><?php if ($_SESSION['guard'][$_SESSION['combo'][$j - 2]][2] > 0) echo ", "; ?><?php if ($_SESSION['guard'][$_SESSION['combo'][$j - 2]][3] > 0) echo $_SESSION['guard'][$_SESSION['combo'][$j - 2]][3]; ?><?php if ($_SESSION['guard'][$_SESSION['combo'][$j - 2]][3] > 0) echo ", "; ?><?php if ($_SESSION['guard'][$_SESSION['combo'][$j - 2]][4] > 0) echo $_SESSION['guard'][$_SESSION['combo'][$j - 2]][4]; ?><?php if ($_SESSION['guard'][$_SESSION['combo'][$j - 2]][4] > 0) echo ", "; ?><?php echo $_SESSION['guard'][$_SESSION['combo'][$j - 2]][5]; ?></td>
                <?php if(($_SESSION['selection'][$_SESSION['combo'][$j - 2]] != $_SESSION['guard'][$_SESSION['combo'][$j - 2]][1]) && ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] != $_SESSION['guard'][$_SESSION['combo'][$j - 2]][2]) && ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] != $_SESSION['guard'][$_SESSION['combo'][$j - 2]][3]) && ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] != $_SESSION['guard'][$_SESSION['combo'][$j - 2]][4]) && ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] != $_SESSION['guard'][$_SESSION['combo'][$j - 2]][5]))
                    {
                        $twon++;
                        $won = "Yes";
                        $lost = "No";

                        if (($_SESSION['combo'][$j - 2] == 1) || ($_SESSION['combo'][$j - 2] == 2) || ($_SESSION['combo'][$j - 2] == 3) || ($_SESSION['combo'][$j - 2] == 4) || ($_SESSION['combo'][$j - 2] == 5) || ($_SESSION['combo'][$j - 2] == 6) || ($_SESSION['combo'][$j - 2] == 7))
                        {
                            if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = 7;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = 6;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = 8;
                        }
                        else if (($_SESSION['combo'][$j - 2] == 8) || ($_SESSION['combo'][$j - 2] == 9) || ($_SESSION['combo'][$j - 2] == 10) || ($_SESSION['combo'][$j - 2] == 11) || ($_SESSION['combo'][$j - 2] == 12) || ($_SESSION['combo'][$j - 2] == 13) || ($_SESSION['combo'][$j - 2] == 14))
                        {
                            if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = 10;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = 6;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = 3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = 10;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = 4;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = 9;
                        }
                        else if (($_SESSION['combo'][$j - 2] == 15) || ($_SESSION['combo'][$j - 2] == 16) || ($_SESSION['combo'][$j - 2] == 17) || ($_SESSION['combo'][$j - 2] == 18) || ($_SESSION['combo'][$j - 2] == 19) || ($_SESSION['combo'][$j - 2] == 20) || ($_SESSION['combo'][$j - 2] == 21))
                        {
                            if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = 2;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = 6;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = 5;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = 7;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = 8;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = 4;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = 9;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = 4;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "9") $points = 3;
                        }
                        else if (($_SESSION['combo'][$j - 2] == 22) || ($_SESSION['combo'][$j - 2] == 23) || ($_SESSION['combo'][$j - 2] == 24) || ($_SESSION['combo'][$j - 2] == 25) || ($_SESSION['combo'][$j - 2] == 26) || ($_SESSION['combo'][$j - 2] == 27) || ($_SESSION['combo'][$j - 2] == 28))
                        {
                            if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = 3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = 3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = 7;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = 3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = 4;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = 9;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = 7;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = 5;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "9") $points = 9;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "10") $points = 4;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "11") $points = 10;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "12") $points = 2;
                        }
                        else if (($_SESSION['combo'][$j - 2] == 29) || ($_SESSION['combo'][$j - 2] == 30) || ($_SESSION['combo'][$j - 2] == 31) || ($_SESSION['combo'][$j - 2] == 32) || ($_SESSION['combo'][$j - 2] == 33) || ($_SESSION['combo'][$j - 2] == 34) || ($_SESSION['combo'][$j - 2] == 35))
                        {
                            if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = 1;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = 9;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = 4;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = 5;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = 7;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = 4;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = 1;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = 4;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "9") $points = 3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "10") $points = 7;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "11") $points = 4;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "12") $points = 2;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "13") $points = 8;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "14") $points = 3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "15") $points = 7;
                        }
                        $tpoints += $points;
                    } else {
                        $tlost++;
                        $won = "No";
                        $lost = "Yes";

                        if (($_SESSION['combo'][$j - 2] == 1) || ($_SESSION['combo'][$j - 2] == 2) || ($_SESSION['combo'][$j - 2] == 3) || ($_SESSION['combo'][$j - 2] == 4) || ($_SESSION['combo'][$j - 2] == 5) || ($_SESSION['combo'][$j - 2] == 6) || ($_SESSION['combo'][$j - 2] == 7))
                        {
                            if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = -5;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = -1;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = -5;
                        }
                        else if (($_SESSION['combo'][$j - 2] == 8) || ($_SESSION['combo'][$j - 2] == 9) || ($_SESSION['combo'][$j - 2] == 10) || ($_SESSION['combo'][$j - 2] == 11) || ($_SESSION['combo'][$j - 2] == 12) || ($_SESSION['combo'][$j - 2] == 13) || ($_SESSION['combo'][$j - 2] == 14))
                        {
                            if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = -3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = -8;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = -2;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = -7;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = -7;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = -8;
                        }
                        else if (($_SESSION['combo'][$j - 2] == 15) || ($_SESSION['combo'][$j - 2] == 16) || ($_SESSION['combo'][$j - 2] == 17) || ($_SESSION['combo'][$j - 2] == 18) || ($_SESSION['combo'][$j - 2] == 19) || ($_SESSION['combo'][$j - 2] == 20) || ($_SESSION['combo'][$j - 2] == 21))
                        {
                            if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = -4;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = -8;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = -6;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = -10;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = -8;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = -3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = -2;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = -8;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "9") $points = -3;
                        }
                        else if (($_SESSION['combo'][$j - 2] == 22) || ($_SESSION['combo'][$j - 2] == 23) || ($_SESSION['combo'][$j - 2] == 24) || ($_SESSION['combo'][$j - 2] == 25) || ($_SESSION['combo'][$j - 2] == 26) || ($_SESSION['combo'][$j - 2] == 27) || ($_SESSION['combo'][$j - 2] == 28))
                        {
                            if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = -2;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = -10;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = -8;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = -4;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = -10;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = -1;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = -7;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = -6;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "9") $points = -8;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "10") $points = -9;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "11") $points = -3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "12") $points = -1;
                        }
                        else if (($_SESSION['combo'][$j - 2] == 29) || ($_SESSION['combo'][$j - 2] == 30) || ($_SESSION['combo'][$j - 2] == 31) || ($_SESSION['combo'][$j - 2] == 32) || ($_SESSION['combo'][$j - 2] == 33) || ($_SESSION['combo'][$j - 2] == 34) || ($_SESSION['combo'][$j - 2] == 35))
                        {
                            if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = -2;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = -9;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = -3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = -4;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = -1;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = -2;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = -3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = -6;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "9") $points = -8;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "10") $points = -2;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "11") $points = -9;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "12") $points = -3;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "13") $points = -4;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "14") $points = -1;
                            else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "15") $points = -9;
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
    <?php if ($_SESSION['counter'] > 6) { ?>
        <th>Gate 4<br/><Input type="radio" name="gate" value="4"/></th>
        <th>Gate 5<br/><Input type="radio" name="gate" value="5"/></th>
        <th>Gate 6<br/><Input type="radio" name="gate" value="6"/></th>
    <?php } ?>
    <?php if ($_SESSION['counter'] > 13) { ?>
        <th>Gate 7<br/><Input type="radio" name="gate" value="7"/></th>
        <th>Gate 8<br/><Input type="radio" name="gate" value="8"/></th>
        <th>Gate 9<br/><Input type="radio" name="gate" value="9"/></th>
    <?php } ?>
    <?php if ($_SESSION['counter'] > 20) { ?>
        <th>Gate 10<br/><Input type="radio" name="gate" value="10"/></th>
        <th>Gate 11<br/><Input type="radio" name="gate" value="11"/></th>
        <th>Gate 12<br/><Input type="radio" name="gate" value="12"/></th>
    <?php } ?>
    <?php if ($_SESSION['counter'] > 27) { ?>
        <th>Gate 13<br/><Input type="radio" name="gate" value="13"/></th>
        <th>Gate 14<br/><Input type="radio" name="gate" value="14"/></th>
        <th>Gate 15<br/><Input type="radio" name="gate" value="15"/></th>
    <?php } ?>
    </tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 0) || ($_SESSION['counter'] == 1) || ($_SESSION['counter'] == 2) || ($_SESSION['counter'] == 3) || ($_SESSION['counter'] == 4) || ($_SESSION['counter'] == 5) || ($_SESSION['counter'] == 6)) { ?>
    <tr align="center">
        <td bgcolor = #555555 align="left">Your Rewards</td>
        <td valign="bottom">7<br/><img src="Images/w7.jpg"></td>
        <td valign="bottom">6<br/><img src="Images/w6.jpg"></td>
        <td valign="bottom">8<br/><img src="Images/w8.jpg"></td>
    </tr>
    <tr align="center">
        <td bgcolor = #555555 align="left">Your Penalties</td>
        <td valign="top"><img src="Images/l5.jpg"><br/>-5</td>
        <td valign="top"><img src="Images/l1.jpg"><br/>-1</td>
        <td valign="top"><img src="Images/l5.jpg"><br/>-5</td>

    </tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 7) || ($_SESSION['counter'] == 8) || ($_SESSION['counter'] == 9) || ($_SESSION['counter'] == 10) || ($_SESSION['counter'] == 11) || ($_SESSION['counter'] == 12) || ($_SESSION['counter'] == 13)) { ?>
    <tr align="center">
        <td bgcolor = #555555 align="left">Your Rewards</td>
        <td valign="bottom">10<br/><img src="Images/w10.jpg"></td>
        <td valign="bottom">6<br/><img src="Images/w6.jpg"></td>
        <td valign="bottom">3<br/><img src="Images/w3.jpg"></td>
        <td valign="bottom">10<br/><img src="Images/w10.jpg"></td>
        <td valign="bottom">4<br/><img src="Images/w4.jpg"></td>
        <td valign="bottom">9<br/><img src="Images/w9.jpg"></td>
    </tr>
    <tr align="center">
        <td bgcolor = #555555 align="left">Your Penalties</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
        <td valign="top"><img src="Images/l8.jpg"><br/>-8</td>
        <td valign="top"><img src="Images/l2.jpg"><br/>-2</td>
        <td valign="top"><img src="Images/l7.jpg"><br/>-7</td>
        <td valign="top"><img src="Images/l7.jpg"><br/>-7</td>
        <td valign="top"><img src="Images/l8.jpg"><br/>-8</td>

    </tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 14) || ($_SESSION['counter'] == 15) || ($_SESSION['counter'] == 16) || ($_SESSION['counter'] == 17) || ($_SESSION['counter'] == 18) || ($_SESSION['counter'] == 19) || ($_SESSION['counter'] == 20)) { ?>
    <tr align="center">
        <td bgcolor = #555555 align="left">Your Rewards</td>
        <td valign="bottom">2<br/><img src="Images/w2.jpg"></td>
        <td valign="bottom">6<br/><img src="Images/w6.jpg"></td>
        <td valign="bottom">5<br/><img src="Images/w5.jpg"></td>
        <td valign="bottom">7<br/><img src="Images/w7.jpg"></td>
        <td valign="bottom">8<br/><img src="Images/w8.jpg"></td>
        <td valign="bottom">4<br/><img src="Images/w4.jpg"></td>
        <td valign="bottom">9<br/><img src="Images/w9.jpg"></td>
        <td valign="bottom">4<br/><img src="Images/w4.jpg"></td>
        <td valign="bottom">3<br/><img src="Images/w3.jpg"></td>
    </tr>
    <tr align="center">
        <td bgcolor = #555555 align="left">Your Penalties</td>
        <td valign="top"><img src="Images/l4.jpg"><br/>-4</td>
        <td valign="top"><img src="Images/l8.jpg"><br/>-8</td>
        <td valign="top"><img src="Images/l6.jpg"><br/>-6</td>
        <td valign="top"><img src="Images/l10.jpg"><br/>-10</td>
        <td valign="top"><img src="Images/l8.jpg"><br/>-8</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
        <td valign="top"><img src="Images/l2.jpg"><br/>-2</td>
        <td valign="top"><img src="Images/l8.jpg"><br/>-8</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
    </tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 21) || ($_SESSION['counter'] == 22) || ($_SESSION['counter'] == 23) || ($_SESSION['counter'] == 24) || ($_SESSION['counter'] == 25) || ($_SESSION['counter'] == 26) || ($_SESSION['counter'] == 27)) { ?>
    <tr align="center">
        <td bgcolor = #555555 align="left">Your Rewards</td>
        <td valign="bottom">3<br/><img src="Images/w3.jpg"></td>
        <td valign="bottom">3<br/><img src="Images/w3.jpg"></td>
        <td valign="bottom">7<br/><img src="Images/w7.jpg"></td>
        <td valign="bottom">3<br/><img src="Images/w3.jpg"></td>
        <td valign="bottom">4<br/><img src="Images/w4.jpg"></td>
        <td valign="bottom">9<br/><img src="Images/w9.jpg"></td>
        <td valign="bottom">7<br/><img src="Images/w7.jpg"></td>
        <td valign="bottom">5<br/><img src="Images/w5.jpg"></td>
        <td valign="bottom">9<br/><img src="Images/w9.jpg"></td>
        <td valign="bottom">4<br/><img src="Images/w4.jpg"></td>
        <td valign="bottom">10<br/><img src="Images/w10.jpg"></td>
        <td valign="bottom">2<br/><img src="Images/w2.jpg"></td>
    </tr>
    <tr align="center">
        <td bgcolor = #555555 align="left">Your Penalties</td>
        <td valign="top"><img src="Images/l2.jpg"><br/>-2</td>
        <td valign="top"><img src="Images/l10.jpg"><br/>-10</td>
        <td valign="top"><img src="Images/l8.jpg"><br/>-8</td>
        <td valign="top"><img src="Images/l4.jpg"><br/>-4</td>
        <td valign="top"><img src="Images/l10.jpg"><br/>-10</td>
        <td valign="top"><img src="Images/l1.jpg"><br/>-1</td>
        <td valign="top"><img src="Images/l7.jpg"><br/>-7</td>
        <td valign="top"><img src="Images/l6.jpg"><br/>-6</td>
        <td valign="top"><img src="Images/l8.jpg"><br/>-8</td>
        <td valign="top"><img src="Images/l9.jpg"><br/>-9</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
        <td valign="top"><img src="Images/l1.jpg"><br/>-1</td>
    </tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 28) || ($_SESSION['counter'] == 29) || ($_SESSION['counter'] == 30) || ($_SESSION['counter'] == 31) || ($_SESSION['counter'] == 32) || ($_SESSION['counter'] == 33) || ($_SESSION['counter'] == 34)) { ?>
    <tr align="center">
        <td bgcolor = #555555 align="left">Your Rewards</td>
        <td valign="bottom">1<br/><img src="Images/w1.jpg"></td>
        <td valign="bottom">9<br/><img src="Images/w9.jpg"></td>
        <td valign="bottom">4<br/><img src="Images/w4.jpg"></td>
        <td valign="bottom">5<br/><img src="Images/w5.jpg"></td>
        <td valign="bottom">7<br/><img src="Images/w7.jpg"></td>
        <td valign="bottom">4<br/><img src="Images/w4.jpg"></td>
        <td valign="bottom">1<br/><img src="Images/w1.jpg"></td>
        <td valign="bottom">4<br/><img src="Images/w4.jpg"></td>
        <td valign="bottom">3<br/><img src="Images/w3.jpg"></td>
        <td valign="bottom">7<br/><img src="Images/w7.jpg"></td>
        <td valign="bottom">4<br/><img src="Images/w4.jpg"></td>
        <td valign="bottom">2<br/><img src="Images/w2.jpg"></td>
        <td valign="bottom">8<br/><img src="Images/w8.jpg"></td>
        <td valign="bottom">3<br/><img src="Images/w3.jpg"></td>
        <td valign="bottom">7<br/><img src="Images/w7.jpg"></td>
    </tr>
    <tr align="center">
        <td bgcolor = #555555 align="left">Your Penalties</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-2</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-9</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-4</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-1</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-2</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-6</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-8</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-2</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-9</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-4</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-1</td>
        <td valign="top"><img src="Images/l3.jpg"><br/>-9</td>
    </tr>
<?php } ?>

<?php if ($_SESSION['counter'] == 0) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.78<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.49<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.73<br/><img src="Images/pn7.jpg"></td>

    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.22</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.51</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.27</td>

    </tr>
<?php } else if ($_SESSION['counter'] == 1) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.77<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.51<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>

    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.23</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.49</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>

    </tr>
<?php } else if ($_SESSION['counter'] == 2) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.70<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.66<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.64<br/><img src="Images/pn6.jpg"></td>

    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.30</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.34</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.36</td>

    </tr>
<?php } else if ($_SESSION['counter'] == 3) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.67<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.61<br/><img src="Images/pn6.jpg"></td>

    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.33</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.39</td>

    </tr>
<?php } else if ($_SESSION['counter'] == 4) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.71<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.64<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.65<br/><img src="Images/pn7.jpg"></td>

    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.29</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.36</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.35</td>

    </tr>
<?php } else if ($_SESSION['counter'] == 5) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.75<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.53<br/><img src="Images/pn5.jpg"></td>

    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.25</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.47</td>

    </tr>
<?php } else if ($_SESSION['counter'] == 6) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.74<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.71<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.55<br/><img src="Images/pn6.jpg"></td>

    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.26</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.29</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.45</td>

    </tr>
<?php } else if ($_SESSION['counter'] == 7) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.40<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.80<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.60<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.64<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.85<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.71<br/><img src="Images/pn7.jpg"></td>

    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.60</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.20</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.40</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.36</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.15</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.29</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 8) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.37<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.78<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.54<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.79<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.83<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.69<br/><img src="Images/pn7.jpg"></td>

    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.63</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.22</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.46</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.21</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.17</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.31</td>

    </tr>
<?php } else if ($_SESSION['counter'] == 9) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.24<br/><img src="Images/pn2.jpg"></td>
        <td valign="bottom">0.75<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.89<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.67<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.95<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.50<br/><img src="Images/pn5.jpg"></td>

    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p8.jpg"><br/>0.76</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.25</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.11</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.33</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.05</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.50</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 10) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.34<br/><img src="Images/pn3.jpg"></td>
<td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
<td valign="bottom">0.82<br/><img src="Images/pn8.jpg"></td>
<td valign="bottom">0.71<br/><img src="Images/pn7.jpg"></td>
<td valign="bottom">0.84<br/><img src="Images/pn8.jpg"></td>
<td valign="bottom">0.57<br/><img src="Images/pn6.jpg"></td>

    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p7.jpg"><br/>0.66</td>
<td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>
<td valign="top"><img src="Images/p2.jpg"><br/>0.18</td>
<td valign="top"><img src="Images/p3.jpg"><br/>0.29</td>
<td valign="top"><img src="Images/p2.jpg"><br/>0.16</td>
<td valign="top"><img src="Images/p4.jpg"><br/>0.43</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 11) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.41<br/><img src="Images/pn4.jpg"></td>
<td valign="bottom">0.73<br/><img src="Images/pn7.jpg"></td>
<td valign="bottom">0.86<br/><img src="Images/pn9.jpg"></td>
<td valign="bottom">0.55<br/><img src="Images/pn6.jpg"></td>
<td valign="bottom">0.84<br/><img src="Images/pn8.jpg"></td>
<td valign="bottom">0.61<br/><img src="Images/pn6.jpg"></td>

    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.59</td>
<td valign="top"><img src="Images/p3.jpg"><br/>0.27</td>
<td valign="top"><img src="Images/p1.jpg"><br/>0.14</td>
<td valign="top"><img src="Images/p4.jpg"><br/>0.45</td>
<td valign="top"><img src="Images/p2.jpg"><br/>0.16</td>
<td valign="top"><img src="Images/p4.jpg"><br/>0.39</td>

    </tr>
<?php } else if ($_SESSION['counter'] == 12) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.44<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.88<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.66<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.75<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.66<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.61<br/><img src="Images/pn6.jpg"></td>

    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.56</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.12</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.34</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.25</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.34</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.39</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 13) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.42<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.82<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.71<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.61<br/><img src="Images/pn6.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.58</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.18</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.29</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.39</td>

    </tr>
<?php } else if ($_SESSION['counter'] == 14) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.79<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.76<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.79<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.70<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.56<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.23<br/><img src="Images/pn2.jpg"></td>
        <td valign="bottom">0.83<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.62<br/><img src="Images/pn6.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.21</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.24</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.21</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.30</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.44</td>
        <td valign="top"><img src="Images/p8.jpg"><br/>0.77</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.17</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.38</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 15) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.71<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.86<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.67<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.76<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.66<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.58<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.42<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.80<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.54<br/><img src="Images/pn5.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.29</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.14</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.33</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.24</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.34</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.42</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.58</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.20</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.46</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 16) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.87<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.83<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.64<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.70<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.55<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.56<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.40<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.77<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.68<br/><img src="Images/pn7.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.13</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.17</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.36</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.30</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.45</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.44</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.60</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.23</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.32</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 17) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.77<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.63<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.65<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.48<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.52<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.37<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.86<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p0.jpg"><br/>0.00</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.23</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.37</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.35</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.52</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.48</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.63</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.14</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 18) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.91<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.68<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.68<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.67<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.59<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.63<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.31<br/><img src="Images/pn3.jpg"></td>
        <td valign="bottom">0.79<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.74<br/><img src="Images/pn7.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.09</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.32</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.32</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.33</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.41</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.37</td>
        <td valign="top"><img src="Images/p7.jpg"><br/>0.69</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.21</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.26</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 19) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.83<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.85<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.52<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.85<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.52<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.58<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.38<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.76<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.71<br/><img src="Images/pn3.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.17</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.15</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.48</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.15</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.48</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.42</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.62</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.24</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.29</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 20) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.84<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.84<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.55<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.80<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.53<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.61<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.39<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.76<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.68<br/><img src="Images/pn7.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.16</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.16</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.45</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.20</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.47</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.39</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.61</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.24</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.32</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 21) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.58<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.93<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.76<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.78<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.90<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.13<br/><img src="Images/pn1.jpg"></td>
        <td valign="bottom">0.73<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.77<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.70<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.89<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.38<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.45<br/><img src="Images/pn4.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.42</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.07</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.24</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.22</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.10</td>
        <td valign="top"><img src="Images/p9.jpg"><br/>0.87</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.27</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.23</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.30</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.11</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.62</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.55</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 22) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.45<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.90<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.71<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.68<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.86<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.42<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.67<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.70<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.65<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.84<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.34<br/><img src="Images/pn3.jpg"></td>
        <td valign="bottom">0.78<br/><img src="Images/pn8.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.55</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.10</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.29</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.32</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.14</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.58</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.33</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.30</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.35</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.16</td>
        <td valign="top"><img src="Images/p7.jpg"><br/>0.66</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.22</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 23) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.64<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.57<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.84<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.95<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.39<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.52<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.66<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.43<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.92<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.22<br/><img src="Images/pn2.jpg"></td>
        <td valign="bottom">0.86<br/><img src="Images/pn9.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.36</td>
        <td valign="top"><img src="Images/p0.jpg"><br/>0.00</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.43</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.16</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.05</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.61</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.48</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.34</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.57</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.08</td>
        <td valign="top"><img src="Images/p8.jpg"><br/>0.78</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.14</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 24) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.66<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.87<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.58<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.71<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.80<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.46<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.55<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.62<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.50<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.78<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.49<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.92<br/><img src="Images/pn9.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.34</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.13</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.42</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.29</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.20</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.54</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.45</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.38</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.50</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.22</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.51</td>
        <td valign="top"><img src="Images/p0.jpg"><br/>0.02</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 25) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.71<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.89<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.64<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.79<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.83<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.26<br/><img src="Images/pn3.jpg"></td>
        <td valign="bottom">0.61<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.69<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.56<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.81<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.35<br/><img src="Images/pn3.jpg"></td>
        <td valign="bottom">0.86<br/><img src="Images/pn9.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.29</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.11</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.36</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.21</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.17</td>
        <td valign="top"><img src="Images/p7.jpg"><br/>0.74</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.39</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.31</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.44</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.19</td>
        <td valign="top"><img src="Images/p7.jpg"><br/>0.65</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.14</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 26) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.94<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.49<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.71<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.64<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.36<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.47<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.59<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.47<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.78<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.55<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.00</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.06</td>
        <td valign="top"><img src="Images/p0.jpg"><br/>0.51</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.29</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.36</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.64</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.53</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.41</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.53</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.22</td>
        <td valign="top"><img src="Images/p0.jpg"><br/>0.45</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.00</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 27) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.91<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.91<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.52<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.73<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.68<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.38<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.49<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.61<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.48<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.79<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.50<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.09</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.09</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.48</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.27</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.32</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.62</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.51</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.39</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.52</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.21</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.50</td>
        <td valign="top"><img src="Images/p0.jpg"><br/>0.00</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 28) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.84<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.74<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.64<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.67<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.18<br/><img src="Images/pn2.jpg"></td>
        <td valign="bottom">0.52<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.90<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.82<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.91<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.37<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.89<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.80<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.54<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.38<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.80<br/><img src="Images/pn8.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.16</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.26</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.36</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.33</td>
        <td valign="top"><img src="Images/p8.jpg"><br/>0.82</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.48</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.10</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.18</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.09</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.63</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.11</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.20</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.46</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.62</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.20</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 29) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.71<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.58<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.61<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.56<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.65<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.83<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.78<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.88<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.30<br/><img src="Images/pn3.jpg"></td>
        <td valign="bottom">0.86<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.59<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.44<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.77<br/><img src="Images/pn8.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.29</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.42</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.39</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.44</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.35</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.17</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.22</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.12</td>
        <td valign="top"><img src="Images/p7.jpg"><br/>0.70</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.14</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.41</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.56</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.23</td>
    </tr>
    <?php } else if ($_SESSION['counter'] == 30) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.54<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.55<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.53<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.58<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.67<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.70<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.84<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.27<br/><img src="Images/pn3.jpg"></td>
        <td valign="bottom">0.80<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.62<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.46<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.62<br/><img src="Images/pn6.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p0.jpg"><br/>0.00</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.46</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.45</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.47</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.42</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.33</td>
        <td valign="top"><img src="Images/p0.jpg"><br/>0.00</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.30</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.16</td>
        <td valign="top"><img src="Images/p7.jpg"><br/>0.73</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.20</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.18</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.38</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.54</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.38</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 31) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.46<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.52<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.47<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.56<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.66<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.76<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.99<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.06<br/><img src="Images/pn1.jpg"></td>
        <td valign="bottom">0.89<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.99<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.60<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.44<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.60<br/><img src="Images/pn6.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p0.jpg"><br/>0.00</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.54</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.48</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.53</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.44</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.34</td>
        <td valign="top"><img src="Images/p0.jpg"><br/>0.00</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.24</td>
        <td valign="top"><img src="Images/p0.jpg"><br/>0.01</td>
        <td valign="top"><img src="Images/p9.jpg"><br/>0.94</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.11</td>
        <td valign="top"><img src="Images/p0.jpg"><br/>0.01</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.40</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.56</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.40</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 32) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.57<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.62<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.60<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.30<br/><img src="Images/pn3.jpg"></td>
        <td valign="bottom">0.56<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.74<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.85<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.38<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.80<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.88<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.45<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.60<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.65<br/><img src="Images/pn6.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p0.jpg"><br/>0.00</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.43</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.38</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.40</td>
        <td valign="top"><img src="Images/p7.jpg"><br/>0.70</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.44</td>
        <td valign="top"><img src="Images/p0.jpg"><br/>0.00</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.26</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.15</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.62</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.20</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.12</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.55</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.40</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.35</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 33) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.64<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.52<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.53<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.59<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.69<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.73<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.90<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.37<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.89<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.64<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.65<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.54<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.59<br/><img src="Images/pn6.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p0.jpg"><br/>0.00</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.36</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.48</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.47</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.41</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.31</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.27</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.10</td>
        <td valign="top"><img src="Images/p6.jpg"><br/>0.63</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.11</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.36</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.35</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.46</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.41</td>
    </tr>
<?php } else if ($_SESSION['counter'] == 34) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
        <td valign="bottom">0.60<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.53<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.54<br/><img src="Images/pn5.jpg"></td>
        <td valign="bottom">0.57<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.79<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.81<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.84<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.35<br/><img src="Images/pn4.jpg"></td>
        <td valign="bottom">0.87<br/><img src="Images/pn9.jpg"></td>
        <td valign="bottom">0.68<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.66<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.56<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.60<br/><img src="Images/pn6.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p0.jpg"><br/>0.00</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.40</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.47</td>
        <td valign="top"><img src="Images/p5.jpg"><br/>0.46</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.43</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.31</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.19</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.16</td>
        <td valign="top"><img src="Images/p7.jpg"><br/>0.65</td>
        <td valign="top"><img src="Images/p1.jpg"><br/>0.13</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.32</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.36</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.44</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.40</td>
    </tr>

<?php } else if ($_SESSION['counter'] < $maxround) { ?>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
        <td valign="bottom">0.64<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.68<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.73<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.67<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.76<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.08<br/><img src="Images/pn1.jpg"></td>
        <td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.64<br/><img src="Images/pn6.jpg"></td>
        <td valign="bottom">0.68<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.73<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.67<br/><img src="Images/pn7.jpg"></td>
        <td valign="bottom">0.76<br/><img src="Images/pn8.jpg"></td>
        <td valign="bottom">0.08<br/><img src="Images/pn1.jpg"></td>
        <td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
    </tr>
    <tr align="center" bgcolor="#afc7c7" style="color: #555555">
        <td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.36</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.32</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.27</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.33</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.24</td>
        <td valign="top"><img src="Images/p9.jpg"><br/>0.92</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>
        <td valign="top"><img src="Images/p4.jpg"><br/>0.36</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.32</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.27</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.33</td>
        <td valign="top"><img src="Images/p2.jpg"><br/>0.24</td>
        <td valign="top"><img src="Images/p9.jpg"><br/>0.92</td>
        <td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>
    </tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 0) || ($_SESSION['counter'] == 1) || ($_SESSION['counter'] == 2) || ($_SESSION['counter'] == 3) || ($_SESSION['counter'] == 4) || ($_SESSION['counter'] == 5) || ($_SESSION['counter'] == 6)) { ?>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Guards' Rewards</td><td>8</td><td>7</td><td>3</td>
    </tr>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Guards' Penalties</td><td>-4</td><td>-4</td><td>-9</td>
    </tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 7) || ($_SESSION['counter'] == 8) || ($_SESSION['counter'] == 9) || ($_SESSION['counter'] == 10) || ($_SESSION['counter'] == 11) || ($_SESSION['counter'] == 12) || ($_SESSION['counter'] == 13)) { ?>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Guards' Rewards</td><td>4</td><td>5</td><td>5</td><td>9</td><td>5</td><td>9</td>
    </tr>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Guards' Penalties</td><td>-6</td><td>-1</td><td>-9</td><td>-2</td><td>-10</td><td>-6</td>
    </tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 14) || ($_SESSION['counter'] == 15) || ($_SESSION['counter'] == 16) || ($_SESSION['counter'] == 17) || ($_SESSION['counter'] == 18) || ($_SESSION['counter'] == 19) || ($_SESSION['counter'] == 20)) { ?>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Guards' Rewards</td><td>7</td><td>7</td><td>1</td><td>3</td><td>4</td><td>9</td><td>6</td><td>10</td><td>2</td>
    </tr>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Guards' Penalties</td><td>-5</td><td>-2</td><td>-10</td><td>-2</td><td>-9</td><td>-8</td><td>-10</td><td>-5</td><td>-6</td>
    </tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 21) || ($_SESSION['counter'] == 22) || ($_SESSION['counter'] == 23) || ($_SESSION['counter'] == 24) || ($_SESSION['counter'] == 25) || ($_SESSION['counter'] == 26) || ($_SESSION['counter'] == 27)) { ?>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Guards' Rewards</td><td>1</td><td>2</td><td>2</td><td>7</td><td>4</td><td>6</td><td>3</td><td>9</td><td>2</td><td>10</td><td>1</td><td>2</td>
    </tr>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Guards' Penalties</td><td>-2</td><td>-2</td><td>-9</td><td>-5</td><td>-9</td><td>-9</td><td>-10</td><td>-8</td><td>-8</td><td>-4</td><td>-3</td><td>-1</td>
    </tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 28) || ($_SESSION['counter'] == 29) || ($_SESSION['counter'] == 30) || ($_SESSION['counter'] == 31) || ($_SESSION['counter'] == 32) || ($_SESSION['counter'] == 33) || ($_SESSION['counter'] == 34)) { ?>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Guards' Rewards</td><td>2</td><td>3</td><td>3</td><td>9</td><td>6</td><td>9</td><td>10</td><td>8</td><td>1</td><td>1</td><td>9</td><td>2</td><td>7</td><td>7</td><td>9</td>
    </tr>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Guards' Penalties</td><td>-5</td><td>-4</td><td>-9</td><td>-10</td><td>-4</td><td>-4</td><td>-10</td><td>-5</td><td>-3</td><td>-8</td><td>-2</td><td>-10</td><td>-4</td><td>-8</td><td>-9</td>
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

<?php if ($_SESSION['counter'] >= $maxround) {
    session_destroy();
 } ?>

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

<div class="Theme-Sponsors" style="margin-bottom:5px;" align="left">This Page was last updated on November 24, 2010</div>
<!-- END Footer -->

</body>

</html>