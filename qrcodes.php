<?php
require_once './vendor/autoload.php';

use Endroid\QrCode\QrCode;

$codes = [[
  'content' => 'qrcode1',
  'filename' => 'hidden_drawer_menu.png',
], [
  'content' => 'qrcode2',
  'filename' => 'flutter_inner_drawer.png',
]];

foreach ($codes as $code) {
  $qrCode = new QrCode($code['content']);
  $qrCode->setSize(300);
  $qrCode->setWriterByName('png');
  $qrCode->setEncoding('UTF-8');
  $qrCode->writeFile(__DIR__ . '/web/img/qrcodes/' . $code['filename']);
}
