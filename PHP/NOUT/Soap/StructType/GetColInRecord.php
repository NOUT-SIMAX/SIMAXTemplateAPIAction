<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for GetColInRecord StructType
 * @subpackage Structs
 */
class GetColInRecord extends AbstractStructBase
{
    /**
     * The Column
     * @var string
     */
    public $Column;
    /**
     * The Record
     * @var string
     */
    public $Record;
    /**
     * The Encoding
     * @var string
     */
    public $Encoding;
    /**
     * The MimeType
     * @var string
     */
    public $MimeType;
    /**
     * The TransColor
     * @var string
     */
    public $TransColor;
    /**
     * The WantContent
     * @var string
     */
    public $WantContent;
    /**
     * The ColorFrom
     * @var string
     */
    public $ColorFrom;
    /**
     * The ColorTo
     * @var string
     */
    public $ColorTo;
    /**
     * The Width
     * @var string
     */
    public $Width;
    /**
     * The Height
     * @var string
     */
    public $Height;
    /**
     * Constructor method for GetColInRecord
     * @uses GetColInRecord::setColumn()
     * @uses GetColInRecord::setRecord()
     * @uses GetColInRecord::setEncoding()
     * @uses GetColInRecord::setMimeType()
     * @uses GetColInRecord::setTransColor()
     * @uses GetColInRecord::setWantContent()
     * @uses GetColInRecord::setColorFrom()
     * @uses GetColInRecord::setColorTo()
     * @uses GetColInRecord::setWidth()
     * @uses GetColInRecord::setHeight()
     * @param string $column
     * @param string $record
     * @param string $encoding
     * @param string $mimeType
     * @param string $transColor
     * @param string $wantContent
     * @param string $colorFrom
     * @param string $colorTo
     * @param string $width
     * @param string $height
     */
    public function __construct($column = null, $record = null, $encoding = null, $mimeType = null, $transColor = null, $wantContent = null, $colorFrom = null, $colorTo = null, $width = null, $height = null)
    {
        $this
            ->setColumn($column)
            ->setRecord($record)
            ->setEncoding($encoding)
            ->setMimeType($mimeType)
            ->setTransColor($transColor)
            ->setWantContent($wantContent)
            ->setColorFrom($colorFrom)
            ->setColorTo($colorTo)
            ->setWidth($width)
            ->setHeight($height);
    }
    /**
     * Get Column value
     * @return string|null
     */
    public function getColumn()
    {
        return $this->Column;
    }
    /**
     * Set Column value
     * @param string $column
     * @return \NOUT\Soap\StructType\GetColInRecord
     */
    public function setColumn($column = null)
    {
        // validation for constraint: string
        if (!is_null($column) && !is_string($column)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($column, true), gettype($column)), __LINE__);
        }
        $this->Column = $column;
        return $this;
    }
    /**
     * Get Record value
     * @return string|null
     */
    public function getRecord()
    {
        return $this->Record;
    }
    /**
     * Set Record value
     * @param string $record
     * @return \NOUT\Soap\StructType\GetColInRecord
     */
    public function setRecord($record = null)
    {
        // validation for constraint: string
        if (!is_null($record) && !is_string($record)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($record, true), gettype($record)), __LINE__);
        }
        $this->Record = $record;
        return $this;
    }
    /**
     * Get Encoding value
     * @return string|null
     */
    public function getEncoding()
    {
        return $this->Encoding;
    }
    /**
     * Set Encoding value
     * @param string $encoding
     * @return \NOUT\Soap\StructType\GetColInRecord
     */
    public function setEncoding($encoding = null)
    {
        // validation for constraint: string
        if (!is_null($encoding) && !is_string($encoding)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($encoding, true), gettype($encoding)), __LINE__);
        }
        $this->Encoding = $encoding;
        return $this;
    }
    /**
     * Get MimeType value
     * @return string|null
     */
    public function getMimeType()
    {
        return $this->MimeType;
    }
    /**
     * Set MimeType value
     * @param string $mimeType
     * @return \NOUT\Soap\StructType\GetColInRecord
     */
    public function setMimeType($mimeType = null)
    {
        // validation for constraint: string
        if (!is_null($mimeType) && !is_string($mimeType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mimeType, true), gettype($mimeType)), __LINE__);
        }
        $this->MimeType = $mimeType;
        return $this;
    }
    /**
     * Get TransColor value
     * @return string|null
     */
    public function getTransColor()
    {
        return $this->TransColor;
    }
    /**
     * Set TransColor value
     * @param string $transColor
     * @return \NOUT\Soap\StructType\GetColInRecord
     */
    public function setTransColor($transColor = null)
    {
        // validation for constraint: string
        if (!is_null($transColor) && !is_string($transColor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transColor, true), gettype($transColor)), __LINE__);
        }
        $this->TransColor = $transColor;
        return $this;
    }
    /**
     * Get WantContent value
     * @return string|null
     */
    public function getWantContent()
    {
        return $this->WantContent;
    }
    /**
     * Set WantContent value
     * @param string $wantContent
     * @return \NOUT\Soap\StructType\GetColInRecord
     */
    public function setWantContent($wantContent = null)
    {
        // validation for constraint: string
        if (!is_null($wantContent) && !is_string($wantContent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wantContent, true), gettype($wantContent)), __LINE__);
        }
        $this->WantContent = $wantContent;
        return $this;
    }
    /**
     * Get ColorFrom value
     * @return string|null
     */
    public function getColorFrom()
    {
        return $this->ColorFrom;
    }
    /**
     * Set ColorFrom value
     * @param string $colorFrom
     * @return \NOUT\Soap\StructType\GetColInRecord
     */
    public function setColorFrom($colorFrom = null)
    {
        // validation for constraint: string
        if (!is_null($colorFrom) && !is_string($colorFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($colorFrom, true), gettype($colorFrom)), __LINE__);
        }
        $this->ColorFrom = $colorFrom;
        return $this;
    }
    /**
     * Get ColorTo value
     * @return string|null
     */
    public function getColorTo()
    {
        return $this->ColorTo;
    }
    /**
     * Set ColorTo value
     * @param string $colorTo
     * @return \NOUT\Soap\StructType\GetColInRecord
     */
    public function setColorTo($colorTo = null)
    {
        // validation for constraint: string
        if (!is_null($colorTo) && !is_string($colorTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($colorTo, true), gettype($colorTo)), __LINE__);
        }
        $this->ColorTo = $colorTo;
        return $this;
    }
    /**
     * Get Width value
     * @return string|null
     */
    public function getWidth()
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param string $width
     * @return \NOUT\Soap\StructType\GetColInRecord
     */
    public function setWidth($width = null)
    {
        // validation for constraint: string
        if (!is_null($width) && !is_string($width)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        $this->Width = $width;
        return $this;
    }
    /**
     * Get Height value
     * @return string|null
     */
    public function getHeight()
    {
        return $this->Height;
    }
    /**
     * Set Height value
     * @param string $height
     * @return \NOUT\Soap\StructType\GetColInRecord
     */
    public function setHeight($height = null)
    {
        // validation for constraint: string
        if (!is_null($height) && !is_string($height)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        $this->Height = $height;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\GetColInRecord
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
