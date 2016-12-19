<?php
namespace X4E\X4etcpdf\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Michel Georgy<michel@4eyes.ch>, 4eyes GmbH
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/


/**
 *
 *
 * @package x4esyntheseexport
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */

use TCPDF;

class Pdf extends TCPDF {
	/**
	 * @var string
	 */
	public $footerText = '';

	public function Header() {

	}

	// Page footer
	public function Footer() {
		// Set font
		$this->SetFont('times', 'N', 8);

		if($this->PageNo() > 1) {
			// text
			$this->Cell(72, 10, $this->footerText, 0, false, 'L', false, '', 1, false, 'T', 'C');

			// date
			$this->Cell(30, 10, \Date("d.m.Y"), 0, false, 'C', false, '', 1, false, 'T', 'C');

			// Page number
			$this->Cell(72, 10, $this->getAliasRightShift() . $this->getAliasNumPage() . ' / ' . $this->getAliasNbPages(), 0, false, 'R', false, '', 1, false, 'T', 'C');
		}
	}
}