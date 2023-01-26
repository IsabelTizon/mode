<?php

$ID =  $_GET['ID'];

if ($stmt = $conn->prepare("SELECT * FROM itemsMode WHERE image_ID='$ID'")) {
    $stmt->execute(); // execute sql statement
    $result = $stmt->get_result();


    echo '<div class="details-record">';
    while ($row = $result->fetch_assoc()) { //fetches one row of data from the results set. Continues until there are no more rows


        echo '<img class="img-record" alt="item picture" src=' . '"' . $row['itemPic'] . '"' . '>';

        echo '<div class="container-details">';
        echo '<h6 class="detail">' . $row['price'] . '</h6>';

        echo '<p class="detail">' . $row['title'] . '</p>';
        echo '<p class="detail">' . $row['brand'] . '</p>';
        echo '<p class="detail">' . $row['descript'] . '</p>';
        echo '<p class="detail">' . $row['category'] . '</p>';
        echo '<p class="detail">' . $row['size'] . '</p>';
        echo '<p class="detail">' . $row['condition1'] . '</p>';



        echo '<div class="display-btnBuy-favorite">';
        echo '<span class="material-symbols-outlined">favorite</span>';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>';
    $stmt->close(); // close sql statement
    $conn->close(); // close dbase connection

}
