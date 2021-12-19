<?php

require_once __DIR__.'/../vendor/autoload.php';

if (false === isset($_POST['content']) || false === is_string($_POST['content']) || true === empty($_POST['content'])) {
    require_once __DIR__.'/../template/index.php';
    exit;
}

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\SvgWriter;

try {
    $result = Builder::create()
        ->writer(new SvgWriter())
        ->writerOptions([
            SvgWriter::WRITER_OPTION_EXCLUDE_XML_DECLARATION => true,
        ])
        ->data($_POST['content'])
        ->encoding(new Encoding('UTF-8'))
        ->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
        ->size(300)
        ->margin(10)
        ->roundBlockSizeMode(new RoundBlockSizeModeMargin())
        ->build();

    $qrcode = base64_encode($result->getString());

    require_once __DIR__.'/../template/result.php';
} catch (\Throwable $e) {
    $error = $e->getMessage();

    require_once __DIR__.'/../template/error.php';
}
