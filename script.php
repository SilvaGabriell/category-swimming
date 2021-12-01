<?php

    include "./services/message.php";
    include "./services/validate.php";
    include "./services/category-competitor.php";

    $name = $_POST["name"];
    $age = $_POST["age"];

    defineCategoryCompetitor($name, $age);

    header('location: index.php');
?> 