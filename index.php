<?php
require 'vendor/autoload.php';

use Carbon\Carbon;
 
$date = Carbon::now();

echo "Current Date and Time: ".$date->toDayDateTimeString();
