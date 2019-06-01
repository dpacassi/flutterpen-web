<?php
require_once './vendor/autoload.php';
include_once './web/data/flutterpens.php';

use Endroid\QrCode\QrCode;

foreach ($flutterPens as $flutterPen) {
  $qrCode = new QrCode($flutterPen['qrcode_content']);
  $qrCode->setSize(300);
  $qrCode->setWriterByName('png');
  $qrCode->setEncoding('UTF-8');
  $qrCode->writeFile(__DIR__ . '/web' . $flutterPen['qrcode_file']);
}
