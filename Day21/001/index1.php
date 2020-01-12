<?php
include_once "excel/export.php";
include_once "excel/import.php";
//include_once "trait/momo.php";
//include_once "trait/Napas.php";
include_once "unities/payment.php";
include_once "unities/paypal.php";
include_once "unities/pdf.php";
use \Excel\Exportexcel;
use \Excel\Importexcel;
use \unities\payment\payment;
use \Utilities\Paypal\Paypal;
use \Utilities\Pdf\Pdf;
$export=new Exportexcel();
$export->demo();
$import=new Importexcel();
$import->demo();
$payment=new payment();
$payment->demo();
$paypal=new Paypal();
$payment->demo();

$pdf=new Pdf();
$paypal->demo();
$payment->demoMOMO();
$payment->demoNapas();