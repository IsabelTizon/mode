<?php

$ID =  $_GET['ID'];

if ($stmt = $conn->prepare("SELECT * FROM itemsMode WHERE image_ID='$ID'")) {
    $stmt->execute(); // execute sql statement
    $result = $stmt->get_result();


    echo '<div class="section-card-items-home">';
    while ($row = $result->fetch_assoc()) { //fetches one row of data from the results set. Continues until there are no more rows


        echo '<div class="card-item">';
        echo '<a href="item-page.php?ID=' . $row['image_ID'] . '"><img class="card-img-top" alt="item picture" src=' . '"' . $row['itemPic'] . '"' . '></a>';
        echo '<div class="card-body"></a>';
        echo '<div class="display-title-favorite">';
        echo '<h6 class="card-title">' . $row['price'] . '</h6>';
        echo '<span class="material-symbols-outlined">favorite</span>';
        echo '</div>';
        echo '<p class="card-text">' . $row['brand'] . '</p>';
        echo '<p class="card-text">' . $row['descript'] . '</p>';
        echo '<p class="card-text">size ' . $row['size'] . '</p>';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>';
    $stmt->close(); // close sql statement
    $conn->close(); // close dbase connection

}
