<?php
require_once 'bubble-sort.php';
require_once 'insertion-sort.php';
require_once 'merge-sort.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="numbers">Type numbers to be ordered desecendant by Bubble Sort Algorithm, separated by commas</label>
        <input type="text" name="numbers" placeholder="Type here">
        <button type="submit">Sort</button>
    </form>

    <form action="" method="post">
        <label for="words">Type words to be ordered usig Merge Sort Algorithm</label>
        <input type="text" name="words" placeholder="Type here">
        <button type="submit">Sort</button>
    </form>

    <form action="" method="post">
        <label for="names-words">Type words to be ordered usig Insertion Sort Algorithm</label>
        <input type="text" name="names-words" placeholder="Type here">
        <button type="submit">Sort</button>
    </form>

    <form action=""></form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['numbers'])) {
            $numbers = explode(',', $_POST['numbers']);
            //Printing the array before sorting
            echo "Before: " . implode(', ', $numbers) . "<br>";

            //Sorting the array and printing it out
            bubbleSort($numbers);
            echo "After: " . implode(', ', $numbers);
        }

        if(isset($_POST['words'])){
            $words = explode(',', $_POST['words']);
            //Printing the array before sorting
            echo "Before: " . implode(', ', $words) . "<br>";

            //Sorting the array and printing it out
            mergeSort($words);
            echo "After: " . implode(', ', $words);
        }

        if(isset($_POST['names-words'])){
            $namesWords = explode(',', $_POST['names-words']);
            //Printing the array before sorting
            echo "Before: " . implode(', ', $namesWords) . "<br>";

            //Sorting the array and printing it out
            insertionSort($namesWords);
            echo "After: " . implode(', ', $namesWords);
        }
    }
    ?>
</body>

</html>