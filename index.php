<?php
    $voters_age = 18;
    $has_PVC = true;
    $voters_ward = 020;

    if($voters_age < 18){
        echo "voter is below 18 years";
    }
    elseif(!$has_PVC){
        echo "Voter has no Permanent Voter's Card";
    }
    elseif($voters_ward != 020){
        echo "Voter's ward is not 020";
    }
    else {
        echo "Voter eligible to vote";
    }
?>