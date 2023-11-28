<!--# Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60-->

<?php
     $matches = [
                [
                    'team_one' => 'Pistons',
                    'team_two' => 'Wizards',
                    'point_one' => 107,
                    'point_two' => 126
                ],
                [
                    'team_one' => 'Sixers',
                    'team_two' => 'Lakers',
                    'point_one' => 138,
                    'point_two' => 94
                ],
                [
                    'team_one' => 'Pacers',
                    'team_two' => 'Trail Blazers',
                    'point_one' => 110,
                    'point_two' => 114
                ],
                [
                    'team_one' => 'Jazz',
                    'team_two' => 'Pelicans',
                    'point_one' => 114,
                    'point_two' => 112
                ],
                [
                    'team_one' => 'Clippers',
                    'team_two' => 'Nuggets',
                    'point_one' => 104,
                    'point_two' => 113
                ],
            ]; 
            
            foreach ($matches as $game){
                echo   "<ul>
                        <li>  {$game['team_one']}  - {$game['team_two']} | {$game['point_one']} - {$game['point_two']} </li>
                        </ul>";
            }

        ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP snack</title>
</head>
<body>
    
</body>
</html>