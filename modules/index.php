<?php

//Selecting data from itemsMode table
if ($stmt = $conn->prepare("SELECT order_ID, itemPic, title, descript, category, brand, condition1, size, price FROM itemsMode")) {
    $stmt->execute(); // execute sql statement
    $result = $stmt->get_result(); //returns the results from sql statement



    //DISPLAYING DATABASE WITH BOOTSTRAP CARDS
    echo '<div class="section-card-items-home">';
    while ($row = $result->fetch_assoc()) { //fetches one row of data from the results set. Continues until there are no more rows

        //Card
        echo '<div class="card-item">';
        echo '<a href="item-page.php?ID=' . $row['order_ID'] . '"><img class="card-img-top" alt="item picture" src=' . '"media/items/photos/' . $row['itemPic'] . '"' . '></a>';
        echo '<div class="card-body"></a>';
        echo '<div class="display-title-favorite">';
        echo '<h6 class="card-title">£' . $row['price'] . '</h6>';
        echo '<button class="btn favorite-btn" onclick="btnNotLogged()"><span class="material-symbols-outlined">favorite</span></button>';
        echo '</div>';
        echo '<p class="card-text">' . $row['brand'] . '</p>';
        echo '<p class="card-text">' . $row['descript'] . '</p>';
        echo '<p class="card-text">size ' . $row['size'] . '</p>';
        echo '</div>';
        echo '</div>';
    }
}
echo '</div>';
$stmt->close(); // close sql statement
$conn->close(); // close dbase connection
