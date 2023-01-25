<?php

if ($stmt = $conn->prepare("SELECT itemPic, title, descript, category, brand, condition1, price FROM itemsMode")) {
    $stmt->execute(); // execute sql statement
    $result = $stmt->get_result(); //returns the results from sql statement


    //DISPLAYING DATABASE WITH BOOTSTRAP CARDS
    echo '<div class="section-card-items-home">';
    while ($row = $result->fetch_assoc()) { //fetches one row of data from the results set. Continues until there are no more rows

        echo '<div class="card-item">';
        echo '<a href="https://www.w3schools.com"><img class="card-img-top" alt="..." src=' . '"' .  $row['itemPic'] . '"' . '></a>';
        echo '<div class="card-body">';
        echo '<div class="display-title-favorite">';
        echo '<h4 class="card-title">' . $row['price'] . '</h4>';
        echo '<span class="material-symbols-outlined">favorite</span>';
        echo '</div>';
        echo '<p class="card-text">' . $row['descript'] . '</p>';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>';
    $stmt->close(); // close sql statement
    $conn->close(); // close dbase connection

}
