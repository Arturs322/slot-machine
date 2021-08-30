<?php
$input = readline("Do you want to play slots? Type \"yes\" or \"no\": ");

if ($input == "no")
{
    echo "Goodbye!" . PHP_EOL;
    exit;
} elseif ($input == "yes")
{
    echo "Lets play!" . PHP_EOL;
} else
{
    echo "Invalid input mate!" . PHP_EOL;
    exit;
}

$board = [
  [],
  [],
  []
];
$rows = 3;
$columns = 4;
// , "D" => 40, 1 => 5, 2 => 10, 3 => 15, 4 => 20
$payout = ["A" => 10, "B" => 20, "C" => 30, "D" => 40];

$symbols = array_keys($payout);

$validBets = [10 , 20 , 30 , 40 , 50 ];
$coefficient = [$validBets[0] => 1, $validBets[1] => 2, $validBets[2] => 3, $validBets[3] => 4, $validBets[4] => 5];
echo "Valid bets are: " . PHP_EOL;
foreach ($validBets as $validBet)
{
    echo $validBet . PHP_EOL;
}
$bet = (int) readline("Choose your bet: ") . PHP_EOL;

if ($bet == $validBets[0])
{
    echo "Ok, now lets play!" . PHP_EOL;

} elseif ($bet == $validBets[1])
{
    echo "Ok, now lets play!" . PHP_EOL;

} elseif ($bet == $validBets[2])
{
    echo "Ok, now lets play!" . PHP_EOL;
} elseif ($bet == $validBets[3])
{
    echo "Ok, now lets play!" . PHP_EOL;
} elseif ($bet == $validBets[4]) {
    echo "Ok, now lets play!" . PHP_EOL;
} else
{
    echo "You chose wrong bet, please try again!"  . PHP_EOL;
    exit;
}

for ($r = 0; $r < $rows; $r++)
{
    for ($c = 0; $c < $columns; $c++)
    {
        $board[$r][$c] = $symbols[array_rand($symbols)];
    }
}

foreach ($board as $row)
{
    foreach ($row as $symbol)
    {
        echo $symbol . ' ';
    }
    echo PHP_EOL;
}

$conditions = [
  [
      [0,0], [0,1], [0,2], [0,3]
  ],
    [
        [1,0], [1,1], [1,2], [1,3]
    ],
    [
        [2,0], [2,1], [2,2], [2,3]
    ],
    [
        [0,0], [0,1], [0,2]
    ],
    [
        [1,0], [1,1], [1,2]
    ],
    [
        [2,0], [2,1], [2,2]
    ],
    [
        [0,1], [0,2], [0,3]
    ],
    [
        [1,1], [1,2], [1,3]
    ],
    [
        [2,1], [2,2], [2,3]
    ],
];
$youWon = 0;
//var_dump($conditions);
foreach ($conditions as $condition)
{
    $x = [];
    foreach ($condition as $positions)
    {
        $row = $positions[0];
        $column = $positions[1];

        $x[] = $board[$row][$column];
    }

  //  $gameIsLive = true;
   // $choice = readline("Try again? \"yes\" or \"no\"?: ");

        if (count(array_unique($x)) == 1)
        {
            echo "Your prize: " . PHP_EOL;
            echo $youWon += $payout[$x[0]];
            echo PHP_EOL;


        }

    }
if ($bet == 10)
{
    echo $youWon * 1 . "$". PHP_EOL;

} elseif ($bet == 20)
{
    echo $youWon * 2 . "$" . PHP_EOL;

} elseif ($bet == 30)
{
    echo $youWon * 3 . "$" . PHP_EOL;
} elseif ($bet == 40)
{
    echo $youWon * 4 . "$" . PHP_EOL;
} elseif ($bet == 50)
{
    echo $youWon * 5 . "$" . PHP_EOL;
} elseif ($youWon === 0)
{
    echo "Im sorry mate you won nothing :(!" . PHP_EOL;

} else
{
    echo "Im sorry mate you won nothing :(!" . PHP_EOL;
}
//echo $youWon * 2 . PHP_EOL;














/*
echo "Lets play slots!" . PHP_EOL;

$symbols = [
    "A" => 5,
    "B" => 10,
    "C" => 20,
    "D" => 30,
    "E" => 40,
     1 => 3,
     2 => 6,
     3 => 9,
     4 => 12,
     5 => 15
];
$board =[[" "," "," "],
    [" "," "," "],
    [" "," "," "]];

function display_board(array $board)
{
    echo" {$board[0][0]} | {$board[0][1]} | {$board[0][2]} \n";
    echo "---+---+--- \n";
    echo" {$board[1][0]} | {$board[1][1]} | {$board[1][2]} \n";
    echo "---+---+--- \n";
    echo" {$board[2][0]} | {$board[2][1]} | {$board[2][2]} \n";

}
display_board($board);

//foreach ($symbols as $symbol)
{
   // echo array_rand($symbols) . PHP_EOL;
}

$startGame = readline("Enter yes to play slots: ");
if ($startGame === "yes")
{
    $gameIsLive = true;
}else
{
    echo "Thank you for visiting!" . PHP_EOL;
}
$gameIsLive = true;

while ($gameIsLive)
{

    $validBets = [10, 20, 40, 80, 160];
    echo "Valid bets are: 10, 20, 40, 80, 160 ";
    $bet = (int) readline("Enter a bet: ");
    if (!in_array($bet, $validBets))
    {
        echo "Invalid bet!" . PHP_EOL;
        continue;
    }
    for ($i = 0; $i < count($board[$i]);$i++)
    {
        for ($y = 0; $y < count($board[$i]); $y++)
        {
            $slotDisplay[$i][$y] = $symbols[array_rand($symbols)];
        }
    }
    for ($i = 0; $i = count($slotDisplay[$i]); $i++)
    {
        if (in_array($board[$i]));
        {
            echo "hi";
        }

    }
} */
/* echo = $person->likme * a * a * a;
echo = $person->likme * b * b * b;
echo = $person->likme * a * a * a;
echo = $person->likme * a * a * a;
echo = $person->likme * a * a * a;

3a = 10;
3b = 20;
3c = 30;
*/