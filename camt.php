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
 * Main Class
 */
class Camt extends XMLWriter {

	/** 
     * Constructor. 
     * @param string $prm_xsltFilePath Path of a XSLT file. 
     * @access public 
     * @param null 
     */ 
    public function __construct( $prm_xsltFilePath='' ){ 
        $this->openMemory(); 
        $this->setIndent(true); 
        $this->setIndentString(4); 
        $this->startDocument('1.0', 'UTF-8'); 

        if($prm_xsltFilePath){ 
            $this->writePi('xml-stylesheet', 'type="text/xsl" href="'.$prm_xsltFilePath.'"'); 
        } 

        $this->startElement('Document');
        $this->writeAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
    } 
}