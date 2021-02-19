<?php
echo '<h1>Recharge Card Generator</h1>';

    function rechargeCardGenerator($digits) {
    $pins = '';

    for($i = 0; $i < $digits; $i++) {
        $pins .= mt_rand(0, 9);
    }

    return $pins;
    }
    for($i = 0; $i < 200; $i++){
    echo rechargeCardGenerator(12) .'<br>';
        
    }

?>

