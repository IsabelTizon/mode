<?php

$ID =  $_GET['ID'];

if ($stmt = $conn->prepare("SELECT * FROM itemsMode WHERE order_ID='$ID'")) {
    $stmt->execute(); // execute sql statement
    $result = $stmt->get_result();


    echo '<div class="det-record">';
    while ($row = $result->fetch_assoc()) { //fetches one row of data from the results set. Continues until there are no more rows


        echo '<img class="img-record" alt="item picture" src=' . '"' . $row['itemPic'] . '"' . '>';

        echo '<div class="container-det">';
        echo '<h5 class="det det-price">' . $row['price'] . '</h5>';
        echo '<p class="det det-brand">BRAND: ' . $row['brand'] . '</p>';
        echo '<p class="det det-descript">DESCRIPTION: ' . $row['descript'] . '</p>';
        echo '<p class="det det-size">SIZE: ' . $row['size'] . '</p>';
        echo '<p class="det det-condition1">CONDITION: ' . $row['condition1'] . '</p>';



        echo '<div class="display-btnBuy-favorite">';
        echo '<span class="material-symbols-outlined favorite-icon">favorite</span>';
        echo '<button type="button" class="btn btn-purple">Buy now</button>';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>';
    $stmt->close(); // close sql statement
    $conn->close(); // close dbase connection

}
