<html>
<head>
    <title>Numerology Calculator</title>
    <style>
        body 
        {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image:url(t.jpg);
        }

        .container
         {
            width: 50%;
            margin: 0 auto;
            background-color: #88cafc;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            opacity: 0.6;
        }

        h2 
        {
            color: #333;
        }

        input[type="text"]
         {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="submit"] 
        {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover
         {
            background-color: #0056b3;
        }
       
    </style>
</head>
<body>
   
    <div class="container">
       <h2> Numerology Name Calculator</h2>
        <form method="post" action="">
            <input type="text" name="name" placeholder="Enter your name"><br><br>
            <input type="submit" value="Find out">
        </form>
        <?php
if (!empty($_POST)) {
    $x = strtoupper($_POST['name']);
    $s = array(
        'A' => 1, 'I' => 1, 'J' => 1, 'Q' => 1, 'Y' => 1,
        'B' => 2, 'K' => 2, 'R' => 2,
        'C' => 3, 'G' => 3, 'L' => 3, 'S' => 3,
        'D' => 4, 'M' => 4, 'T' => 4,
        'E' => 5, 'H' => 5, 'N' => 5, 'X' => 5,
        'U' => 6, 'V' => 6, 'W' => 6,
        'O' => 7, 'Z' => 7,
        'F' => 8, 'P' => 8
    );

    $tot = 0;

    for ($i = 0; $i < strlen($x); $i++)
     {
        if (isset($s[$x[$i]]))
         {
            $tot += $s[$x[$i]];
        }
    }
    function k1($num) 
    {
        if ($num < 10)
         {
            return $num;
        } 
        else 
        {
            $sum = 0;
            while ($num != 0) 
            {
                $sum += $num % 10;
                $num = k1($num / 10);
            }
            return k1($sum);
        }
    }
    $s = k1($tot);
    echo "<p>Numerology Number for $x is: $s</p>";

    switch ($s)
     {
        case 1:
            echo " SUN – King, Leadership Qualities, Egoistic ";
            break;
        case 2:
            echo "MOON – Queen, Emotions ";
            break;
        case 3:
            echo "JUPITER – Guru, Minister, Counselor, Creative, Hungry of Knowledge ";
            break;
        case 4:
            echo "RAHU – Mischievous, Shadow of Sun, and Planner";
            break;
        case 5:
            echo "MERCURY – Prince, Accountant, Mental & Emotional Balance ";
            break;
        case 6:
            echo "VENUS – Guru, Bad Minister, Strategy expert, Dancer, Luxury ";
            break;
        case 7:
            echo "VENUS – Guru, Bad Minister, Strategy expert, Dancer, Luxury ";
            break;
        case 8:
            echo "SATURN – Judge, Servant, Struggle, Money Manager ";
            break;
        case 9:
            echo " MARS – Commander, Humanity, Anger, Honorable old life ";
            break;
        default:
            echo "";
            break;
    }

}
?>
    </div>
</body>
</html>
