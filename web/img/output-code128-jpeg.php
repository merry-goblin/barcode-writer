<?php

use MerryGoblin\BarcodeWriter\Services\Barcode\BarcodeWriter;

require_once(__DIR__.'/../../vendor/autoload.php');
require_once(__DIR__.'/../inc/barcode-config.inc.php');

$format = 'jpeg';
$type = 'code128';
$data = '1235467890123456';

$barcodeWriter = new BarcodeWriter();
$barcodeConfig = getStandardConfig();

$barcodeWriter->output($format, $type, $data, $barcodeConfig);
