<?php
    $hotels = [
        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php hotel</title>
</head>
<body>
    
    <form action="" method="GET">
        <select name="info" id="">
            <option value="all">all</option>
            <option value="parking">parking</option>
        </select>
        <button>cerca</button>
    </form>
    
    <div class="container">
    <?php 
        $filter = isset($_GET['info']) && $_GET['info'] == 'parking';

        foreach ($hotels as $key => $hotel) {
            if ($filter && !$hotel['parking']) {
                continue;
            }

            echo '<div>';
            foreach($hotel as $index => $info) {
                echo '<h2>';
                echo $index.': ';
                echo '</h2>';

                echo '<p>';
                echo $info;
                echo '</p>';
            }
            echo '</div>';
        }
?>
    </div>
</body>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        display: flex;
        justify-content: space-between;
        width: 90%;
        margin: 0 auto;
    }
    p{
        margin-bottom: 5px;
    }
    .container > div{
        border: 1px solid black;
        padding: 10px;
        margin-top: 20px;
    }

</style>
</html>