<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>

    <?php
    $listName = [
        [
            "Name"
        ],
        [
            "Description"
        ],
        [
            "Parking"
        ],
        [
            "Ratings"
        ],
        [
            "Distance To Center"
        ],


    ];
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
</head>

<body>
    <form>
        <input type="checkbox" name="parkingCheck">
        <label>Parking</label>
        <input type="submit" value="SEARCH">

    </form>
    <table class="table">
        <thead>
            <tr>
                <?php
                foreach ($listName as $arrayNames) {
                    foreach ($arrayNames as $name) {
                        echo "<th>" . $name . "</th>";
                    }
                }
                ?>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($hotels as $key => $hotel) {
                $park = $_GET["parkingCheck"];
                $name = $hotel["name"];
                $description = $hotel["description"];
                $parking = $hotel["parking"];
                $vote = $hotel["vote"];
                $distance = $hotel["distance_to_center"];
                if ($_GET['parkingCheck'] == 'on' && $parking === false) {

                } else {

                    echo "<tr>";
                    echo "<td>" . $name . "</td>";
                    echo "<td>" . $description . "</td>";
                    echo $parking === false ? "<td>" . "No" . "</td>" : "<td>" . "Yes" . "</td>";
                    echo "<td>" . $vote . "/5" . "</td>";
                    echo "<td>" . $distance . " km" . "</td>";
                    echo "</tr>";
                }
            }

            ?>
        </tbody>
    </table>
    <?php

    ?>

</body>

</html>