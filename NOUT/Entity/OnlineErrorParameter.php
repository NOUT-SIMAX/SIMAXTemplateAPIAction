<?php
/**
 * Created by PhpStorm.
 * User: Ninon
 * Date: 28/07/14
 * Time: 14:36
 */

namespace NOUT\Entity;

class OnlineErrorParameter
{
	protected $m_nID;
	protected $m_sTitle;
	protected $m_sValue;

	public function __construct($nID, $sTitle, $sValue)
	{
		$this->m_nID    = (string) $nID;
		$this->m_sTitle = (string) $sTitle;
		$this->m_sValue = (string) $sValue;
	}

	/**
	 * @param mixed $m_nID
	 */
	public function setID($m_nID)
	{
		$this->m_nID = $m_nID;
	}

	/**
	 * @return mixed
	 */
	public function getID()
	{
		return $this->m_nID;
	}

	/**
	 * @param string $m_sTitle
	 */
	public function setTitle($m_sTitle)
	{
		$this->m_sTitle = $m_sTitle;
	}

	/**
	 * @return string
	 */
	public function getTitle()
	{
		return $this->m_sTitle;
	}

	/**
	 * @param string $m_sValue
	 */
	public function setValue($m_sValue)
	{
		$this->m_sValue = $m_sValue;
	}

	/**
	 * @return string
	 */
	public function getValue()
	{
		return $this->m_sValue;
	}
}
