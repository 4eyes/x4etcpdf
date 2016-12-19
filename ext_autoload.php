<?php

$libraryClassesPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('x4etcpdf') . 'Classes/Library/Tcpdf/';
$includeLibraryClassesPath = $libraryClassesPath . '/include/';

return array(
	'TCPDF' => $libraryClassesPath . 'tcpdf.php',
	'TCPDF_PARSER' => $libraryClassesPath . 'tcpdf_parser.php',
	'TCPDF_IMPORT' => $libraryClassesPath . 'tcpdf_import.php',
	'TCPDFBarcode' => $libraryClassesPath . 'tcpdf_barcodes_1d.php',
	'TCPDF2DBarcode' => $libraryClassesPath . 'tcpdf_barcodes_2d.php',
	'TCPDF_COLORS' => $includeLibraryClassesPath . 'tcpdf_colors.php',
	'TCPDF_FILTERS' => $includeLibraryClassesPath . 'tcpdf_filters.php',
	'TCPDF_FONT_DATA' => $includeLibraryClassesPath . 'tcpdf_font_data.php',
	'TCPDF_FONTS' => $includeLibraryClassesPath . 'tcpdf_fonts.php',
	'TCPDF_IMAGES' => $includeLibraryClassesPath . 'tcpdf_images.php',
	'TCPDF_STATIC' => $includeLibraryClassesPath . 'tcpdf_static.php',
	'Datamatrix' => $includeLibraryClassesPath . 'barcodes/datamatrix.php',
	'PDF417' => $includeLibraryClassesPath . 'barcodes/pdf417.php',
	'QRcode' => $includeLibraryClassesPath . 'barcodes/qrcode.php'
);