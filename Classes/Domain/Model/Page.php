<?php

namespace Netzmacher\Start\Domain\Model;

/* * *
 *
 * This file is part of the "Book a tile!" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019-2020 Dirk Wildt (Die Netzmacher) <http://wildt@die-netzmacher.de>, Die Netzmacher
 *
 * * */

/**
 * Page
 */
class Page extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

	/**
	 * doktype
	 * 
	 * @var integer
	 */
	protected $doktype = '';

	/**
	 * image
	 * 
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 * @internal http://keinerweiss.de/755-typo3-fal-in-einer-eigenen-extbasefluid-extension-einsetzen.html
	 */
	protected $image = 0;

	/**
	 * title
	 * 
	 * @var string
	 */
	protected $title = '';

	/**
	 * txStartAddressline
	 * 
	 * @var string
	 */
	protected $txStartAddressline = '';

	/**
	 * txStartEmail
	 * 
	 * @var string
	 */
	protected $txStartEmail = '';

	/**
	 * txStartFoundationTopbarName
	 * 
	 * @var string
	 */
	protected $txStartFoundationTopbarName = '';

	/**
	 * txStartFoundationTopbarTitle
	 * 
	 * @var string
	 */
	protected $txStartFoundationTopbarTitle = '';

	/**
	 * txStartSocialFacebook
	 * 
	 * @var string
	 */
	protected $txStartSocialFacebook = '';

	/**
	 * txStartSocialFlickr
	 * 
	 * @var string
	 */
	protected $txStartSocialFlickr = '';

	/**
	 * txStartSocialGithub
	 * 
	 * @var string
	 */
	protected $txStartSocialGithub = '';

	/**
	 * txStartSocialGoogleplus
	 * 
	 * @var string
	 */
	protected $txStartSocialGoogleplus = '';

	/**
	 * txStartSocialInstagram
	 * 
	 * @var string
	 */
	protected $txStartSocialInstagram = '';

	/**
	 * txStartSocialLinkedin
	 * 
	 * @var string
	 */
	protected $txStartSocialLinkedin = '';

	/**
	 * txStartSocialPicasa
	 * 
	 * @var string
	 */
	protected $txStartSocialPicasa = '';

	/**
	 * txStartSocialPinterest
	 * 
	 * @var string
	 */
	protected $txStartSocialPinterest = '';

	/**
	 * txStartSocialSpotify
	 * 
	 * @var string
	 */
	protected $txStartSocialSpotify = '';

	/**
	 * txStartSocialTwitter
	 * 
	 * @var string
	 */
	protected $txStartSocialTwitter = '';

	/**
	 * txStartSocialVimeo
	 * 
	 * @var string
	 */
	protected $txStartSocialVimeo = '';

	/**
	 * txStartSocialYoutube
	 * 
	 * @var string
	 */
	protected $txStartSocialYoutube = '';

	/**
	 * txStartgreenCiDevisionLabel
	 * 
	 * @var string
	 */
	protected $txStartgreenCiDevisionLabel = '';

	/**
	 * txStartgreenCiDevisionShort
	 * 
	 * @var string
	 */
	protected $txStartgreenCiDevisionShort = '';

	/**
	 * Returns the doktype
	 * 
	 * @return string $doktype
	 */
	public function getDoktype()
	{
		return $this->doktype;
	}

	/**
	 * Sets the doktype
	 * 
	 * @param string $doktype
	 * @return void
	 */
	public function setDoktype( $doktype )
	{
		$this->doktype = $doktype;
	}

	/**
	 * Returns the image
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $image
	 * @internal http://keinerweiss.de/755-typo3-fal-in-einer-eigenen-extbasefluid-extension-einsetzen.html
	 */
	public function getImage()
	{
		return $this->image;
	}

	/**
	 * Sets the image
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $image
	 * @return void
	 * @internal http://keinerweiss.de/755-typo3-fal-in-einer-eigenen-extbasefluid-extension-einsetzen.html
	 */
	public function setImage( $image )
	{
		$this->image = $image;
	}

	/**
	 * Returns the title
	 * 
	 * @return string $title
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * Sets the title
	 * 
	 * @param string $title
	 * @return void
	 */
	public function setTitle( $title )
	{
		$this->title = $title;
	}

	/**
	 * Returns the txStartAddressline
	 * 
	 * @return string $txStartAddressline
	 */
	public function getTxStartAddressline()
	{
		return $this->txStartAddressline;
	}

	/**
	 * Sets the txStartAddressline
	 * 
	 * @param string $txStartAddressline
	 * @return void
	 */
	public function setTxStartAddressline( $txStartAddressline )
	{
		$this->txStartAddressline = $txStartAddressline;
	}

	/**
	 * Returns the txStartEmail
	 * 
	 * @return string $txStartEmail
	 */
	public function getTxStartEmail()
	{
		return $this->txStartEmail;
	}

	/**
	 * Sets the txStartEmail
	 * 
	 * @param string $txStartEmail
	 * @return void
	 */
	public function setTxStartEmail( $txStartEmail )
	{
		$this->txStartEmail = $txStartEmail;
	}

	/**
	 * Returns the txStartFoundationTopbarName
	 * 
	 * @return string $txStartFoundationTopbarName
	 */
	public function getTxStartFoundationTopbarName()
	{
		return $this->txStartFoundationTopbarName;
	}

	/**
	 * Sets the txStartFoundationTopbarName
	 * 
	 * @param string $txStartFoundationTopbarName
	 * @return void
	 */
	public function setTxStartFoundationTopbarName( $txStartFoundationTopbarName )
	{
		$this->txStartFoundationTopbarName = $txStartFoundationTopbarName;
	}

	/**
	 * Returns the txStartFoundationTopbarTitle
	 * 
	 * @return string $txStartFoundationTopbarTitle
	 */
	public function getTxStartFoundationTopbarTitle()
	{
		return $this->txStartFoundationTopbarTitle;
	}

	/**
	 * Sets the txStartFoundationTopbarTitle
	 * 
	 * @param string $txStartFoundationTopbarTitle
	 * @return void
	 */
	public function setTxStartFoundationTopbarTitle( $txStartFoundationTopbarTitle )
	{
		$this->txStartFoundationTopbarTitle = $txStartFoundationTopbarTitle;
	}

	/**
	 * Returns the txStartSocialFacebook
	 * 
	 * @return string $txStartSocialFacebook
	 */
	public function getTxStartSocialFacebook()
	{
		return $this->txStartSocialFacebook;
	}

	/**
	 * Sets the txStartSocialFacebook
	 * 
	 * @param string $txStartSocialFacebook
	 * @return void
	 */
	public function setTxStartSocialFacebook( $txStartSocialFacebook )
	{
		$this->txStartSocialFacebook = $txStartSocialFacebook;
	}

	/**
	 * Returns the txStartSocialFlickr
	 * 
	 * @return string $txStartSocialFlickr
	 */
	public function getTxStartSocialFlickr()
	{
		return $this->txStartSocialFlickr;
	}

	/**
	 * Sets the txStartSocialFlickr
	 * 
	 * @param string $txStartSocialFlickr
	 * @return void
	 */
	public function setTxStartSocialFlickr( $txStartSocialFlickr )
	{
		$this->txStartSocialFlickr = $txStartSocialFlickr;
	}

	/**
	 * Returns the txStartSocialGithub
	 * 
	 * @return string $txStartSocialGithub
	 */
	public function getTxStartSocialGithub()
	{
		return $this->txStartSocialGithub;
	}

	/**
	 * Sets the txStartSocialGithub
	 * 
	 * @param string $txStartSocialGithub
	 * @return void
	 */
	public function setTxStartSocialGithub( $txStartSocialGithub )
	{
		$this->txStartSocialGithub = $txStartSocialGithub;
	}

	/**
	 * Returns the txStartSocialGoogleplus
	 * 
	 * @return string $txStartSocialGoogleplus
	 */
	public function getTxStartSocialGoogleplus()
	{
		return $this->txStartSocialGoogleplus;
	}

	/**
	 * Sets the txStartSocialGoogleplus
	 * 
	 * @param string $txStartSocialGoogleplus
	 * @return void
	 */
	public function setTxStartSocialGoogleplus( $txStartSocialGoogleplus )
	{
		$this->txStartSocialGoogleplus = $txStartSocialGoogleplus;
	}

	/**
	 * Returns the txStartSocialInstagram
	 * 
	 * @return string $txStartSocialInstagram
	 */
	public function getTxStartSocialInstagram()
	{
		return $this->txStartSocialInstagram;
	}

	/**
	 * Sets the txStartSocialInstagram
	 * 
	 * @param string $txStartSocialInstagram
	 * @return void
	 */
	public function setTxStartSocialInstagram( $txStartSocialInstagram )
	{
		$this->txStartSocialInstagram = $txStartSocialInstagram;
	}

	/**
	 * Returns the txStartSocialLinkedin
	 * 
	 * @return string $txStartSocialLinkedin
	 */
	public function getTxStartSocialLinkedin()
	{
		return $this->txStartSocialLinkedin;
	}

	/**
	 * Sets the txStartSocialLinkedin
	 * 
	 * @param string $txStartSocialLinkedin
	 * @return void
	 */
	public function setTxStartSocialLinkedin( $txStartSocialLinkedin )
	{
		$this->txStartSocialLinkedin = $txStartSocialLinkedin;
	}

	/**
	 * Returns the txStartSocialPicasa
	 * 
	 * @return string $txStartSocialPicasa
	 */
	public function getTxStartSocialPicasa()
	{
		return $this->txStartSocialPicasa;
	}

	/**
	 * Sets the txStartSocialPicasa
	 * 
	 * @param string $txStartSocialPicasa
	 * @return void
	 */
	public function setTxStartSocialPicasa( $txStartSocialPicasa )
	{
		$this->txStartSocialPicasa = $txStartSocialPicasa;
	}

	/**
	 * Returns the txStartSocialPinterest
	 * 
	 * @return string $txStartSocialPinterest
	 */
	public function getTxStartSocialPinterest()
	{
		return $this->txStartSocialPinterest;
	}

	/**
	 * Sets the txStartSocialPinterest
	 * 
	 * @param string $txStartSocialPinterest
	 * @return void
	 */
	public function setTxStartSocialPinterest( $txStartSocialPinterest )
	{
		$this->txStartSocialPinterest = $txStartSocialPinterest;
	}

	/**
	 * Returns the txStartSocialSpotify
	 * 
	 * @return string $txStartSocialSpotify
	 */
	public function getTxStartSocialSpotify()
	{
		return $this->txStartSocialSpotify;
	}

	/**
	 * Sets the txStartSocialSpotify
	 * 
	 * @param string $txStartSocialSpotify
	 * @return void
	 */
	public function setTxStartSocialSpotify( $txStartSocialSpotify )
	{
		$this->txStartSocialSpotify = $txStartSocialSpotify;
	}

	/**
	 * Returns the txStartSocialTwitter
	 * 
	 * @return string $txStartSocialTwitter
	 */
	public function getTxStartSocialTwitter()
	{
		return $this->txStartSocialTwitter;
	}

	/**
	 * Sets the txStartSocialTwitter
	 * 
	 * @param string $txStartSocialTwitter
	 * @return void
	 */
	public function setTxStartSocialTwitter( $txStartSocialTwitter )
	{
		$this->txStartSocialTwitter = $txStartSocialTwitter;
	}

	/**
	 * Returns the txStartSocialVimeo
	 * 
	 * @return string $txStartSocialVimeo
	 */
	public function getTxStartSocialVimeo()
	{
		return $this->txStartSocialVimeo;
	}

	/**
	 * Sets the txStartSocialVimeo
	 * 
	 * @param string $txStartSocialVimeo
	 * @return void
	 */
	public function setTxStartSocialVimeo( $txStartSocialVimeo )
	{
		$this->txStartSocialVimeo = $txStartSocialVimeo;
	}

	/**
	 * Returns the txStartSocialYoutube
	 * 
	 * @return string $txStartSocialYoutube
	 */
	public function getTxStartSocialYoutube()
	{
		return $this->txStartSocialYoutube;
	}

	/**
	 * Sets the txStartSocialYoutube
	 * 
	 * @param string $txStartSocialYoutube
	 * @return void
	 */
	public function setTxStartSocialYoutube( $txStartSocialYoutube )
	{
		$this->txStartSocialYoutube = $txStartSocialYoutube;
	}

	/**
	 * Returns the txStartgreenCiDevisionLabel
	 * 
	 * @return string $txStartgreenCiDevisionLabel
	 */
	public function getTxStartgreenCiDevisionLabel()
	{
		return $this->txStartgreenCiDevisionLabel;
	}

	/**
	 * Sets the txStartgreenCiDevisionLabel
	 * 
	 * @param string $txStartgreenCiDevisionLabel
	 * @return void
	 */
	public function setTxStartgreenCiDevisionLabel( $txStartgreenCiDevisionLabel )
	{
		$this->txStartgreenCiDevisionLabel = $txStartgreenCiDevisionLabel;
	}

	/**
	 * Returns the txStartgreenCiDevisionShort
	 * 
	 * @return string $txStartgreenCiDevisionShort
	 */
	public function getTxStartgreenCiDevisionShort()
	{
		return $this->txStartgreenCiDevisionShort;
	}

	/**
	 * Sets the txStartgreenCiDevisionShort
	 * 
	 * @param string $txStartgreenCiDevisionShort
	 * @return void
	 */
	public function setTxStartgreenCiDevisionShort( $txStartgreenCiDevisionShort )
	{
		$this->txStartgreenCiDevisionShort = $txStartgreenCiDevisionShort;
	}

}
