<?php

//http://completewebdevelopercourse.com/locations/London

    if ($_POST['city']) {
        $forcastPage = file_get_contents("https://www.weather-forecast.com/locations/London/forecasts/latest");

        echo $forcastPage;
    }

?>