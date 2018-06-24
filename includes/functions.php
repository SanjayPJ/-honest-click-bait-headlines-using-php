<?php 

function click_bait_to_honest()
{
    //grab values from the textarea
    //change it to lowercase using strtolower methode and assigned it to a variable

    $click_bait_headline = $_POST['click_bait_headline'];
    $lower_click_bait_headline = strtolower($click_bait_headline);

    $clck_bait_sounding_words = array(
        "scientist",
        "doctores",
        "hate",
        "stupid",
        "weired",
        "simple",
        "trick",
        "shocked me",
        "you'll never believe",
        "hack",
        "epic",
        "unbelievable"
    );
    $changed_clck_bait_sounding_words = array(
        "so-called scientist",
        "so-called doctores",
        "are't threten by",
        "average",
        "completely normal",
        "ineffective",
        "methode",
        "is no different than others",
        "you wont really be surprise",
        "slightly improved",
        "boring",
        "normal"
    );

    $honest_headline = str_replace($clck_bait_sounding_words, $changed_clck_bait_sounding_words, $lower_click_bait_headline);
    return array($lower_click_bait_headline ,$honest_headline);
}

function display_click_bait( $lower_click_bait_headline, $honest_headline)
{
    echo '<div class="alert alert-danger"><h4>Original headline</h4>' . ucwords($lower_click_bait_headline) . '</div>';
    echo '<div class="alert alert-success"><h4>Honest headline</h4>' . ucwords($honest_headline) . '</div>';
}

?>