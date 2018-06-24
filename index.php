<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <style>
    body{
        font-family: 'PT Sans', sans-serif;
    }    
    </style>
    <title>PHP - TUT</title>
</head>

<body>

    <?php

    include "includes/functions.php";

    ?>

    <div class="container pt-4">
        <h1 class="text-center">Honest click bait headlines</h1>
        <p class="text-center lead">Hate click bait? Turn those annoying headlines into realestic and honest ones using this simple program.</p>

        <form action="" class="mt-5" action="index.html" method="post">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Paste click bait header here..." name="click_bait_headline"></textarea>
            <button class="btn btn-primary w-100 my-2" name="submit">Fix it!</button>
            
            <!-- click_bait_heading container -->

            <?php 

            if (isset($_POST['submit'])) {
                display_click_bait(click_bait_to_honest()[0] , click_bait_to_honest()[1]);
            }
            ?>
        </form>

    </div>
</body>

</html>