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
    <main>
        <form action="" method="GET">
            <select name="info" id="">
                <option value="">all</option>
                <option value="parking">parking</option>
            </select>
            <button>cerca</button>
        </form>
        
        <h1>PHP Hotels</h1>
        <div class="container">
        <?php 
            $filter = $_GET['info'] == 'parking';

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
    </main>
</body>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    h1{
        text-align: center;
    }
    .container{
        display: flex;
        justify-content: center;
        width: 90%;
        margin: 0 auto;
    }
    form{
        margin: 30px 30px;
    }
    p{
        margin-bottom: 5px;
    }
    .container > div{
        border: 1px solid black;
        padding: 10px;
        margin: 30px 10px;
        border-radius: 10px;
    }

</style>
</html>