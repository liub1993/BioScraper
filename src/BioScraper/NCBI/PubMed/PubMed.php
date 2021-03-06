<?php
/*
 * This file is part of the BioScraper package.
 *
 * (c) Bing Liu <liub@mail.bnu.edu.cn>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BioScraper\NCBI\PubMed;
use BioScraper\NCBI\Entrez;

abstract class PubMed extends Entrez
{
	/**
	* Amount of articles found
	* @var integer
	*/
	protected $articleCount = 0;

	/**
	* Return the article count
	* @return integer number of results
	*/
	public function getArticleCount()
	{
		return intval($this->articleCount);
	}

	/**
	* Set the maximum returned articles
	* @param integer $value maximum return articles
	*/
	public function setReturnMax($max)
	{
		return $this->returnMax = intval($max);
	}

	/**
	 * set db
	 * @return string $this->db
	 */
	public function getDb(){
		return $this->db = 'pubmed';
	}
}