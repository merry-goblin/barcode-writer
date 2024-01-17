<?php

use MerryGoblin\BarcodeWriter\Services\Barcode\BarcodeConfig;

/**
 * @return BarcodeConfig
 */
function getStandardConfig()
{
	$barcodeConfig = new BarcodeConfig();
	$barcodeConfig->w = 600;
	$barcodeConfig->h = 85;
	$barcodeConfig->ts = 10;
	$barcodeConfig->th = 15;
	$barcodeConfig->pb = 15;
	$barcodeConfig->displayLabel = true;

	return $barcodeConfig;
}

/**
 * @return BarcodeConfig
 */
function getSVGConfig()
{
	$barcodeConfig = getStandardConfig();
	$barcodeConfig->tf = 'Arial, Helvetica, sans-serif';

	return $barcodeConfig;
}
