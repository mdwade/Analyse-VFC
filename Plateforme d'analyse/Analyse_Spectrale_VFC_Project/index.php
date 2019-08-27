
<?php
require "vendor/autoload.php";

use Webit\Math\ComplexNumber\ComplexArray;
use Webit\Math\Fft\Dimension;
use Webit\Math\Fft\FftCalculatorRadix2;
// FFT

move_uploaded_file($_FILES['file']['tmp_name'], "" . $_FILES['file']['name']);

$file_handle = fopen($_FILES['file']['name'], "r");

$listValue = array();
while (!feof($file_handle)) {

	$line_of_text = fgets($file_handle);
	$t = trim($line_of_text);
	if (!empty($t)) {
		array_push($listValue, $t);
	}
}

fclose($file_handle);

$calculator = new FftCalculatorRadix2();

$signal = ComplexArray::create($listValue);

$fft = $calculator->calculateFft($signal, Dimension::create(count($listValue))); //ComplexArray

$complex = $fft[2];

$data = array();
foreach ($fft as $complex) {
	# code...
	$n = 20 * log10(sqrt($complex->getReal() * $complex->getReal() + $complex->getImaginary() * $complex->getImaginary()));

	$val = explode(".", $n);
	if (!empty($val[0])) {
		array_push($data, $val[0]);
		//$data = $data . $val[0] . ",";
	}
}

echo json_encode($data);
