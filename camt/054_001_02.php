<?php
/**
 * Copyright 2014 Code Master Oy (http://www.codemaster.fi/)
 *
 * This file is part of PHP ISO 20022.
 *
 * PHP ISO 20022 is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * PHP ISO 20022 is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with PHP ISO 20022. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * CAMT.054.001.02
 */
class Camt_054_001_02 extends Camt {

	/** 
     * Constructor. 
     * @param string $prm_xsltFilePath Path of a XSLT file. 
     * @access public 
     * @param null 
     */ 
    public function __construct( $prm_xsltFilePath='' ) { 
        parent::__construct($prm_xsltFilePath);

        $this->writeAttribute('xmlns', 'urn:iso:std:iso:20022:tech:xsd:camt.054.001.02');

        $this->startElement('BkToCstmrDbtCdtNtfctn');
    }

    public function getXml() {
        while ( $this->endElement() !== false ) {
            continue;
        }
        return $this->outputMemory( true );
    }


    public function setGrpHdr( $msgId, $creDtTm = date('r'), $msgRcpt = null, $msgPgntn = null, $addtlInf = null ) {

        if ( empty( $msgId ) ) {
            throw Camt_Exception('Missing Message Id');
        }

        $creTmInt = strtotime( $creDtTm );
        if ( $creTmInt == 0 || $creTmInt > time() ) {
            throw Camt_Exception('Invalid Cration Date Time');
        }

        $this->startElement('GrpHdr');
        $this->writeElement('MsgId', $msgId);
        $this->writeElement('CreDtTm', $creDtTm);
        $this->endElement();
    }
}