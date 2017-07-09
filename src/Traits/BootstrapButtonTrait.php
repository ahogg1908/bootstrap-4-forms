<?php
/**
 * Created by Petr Čech (czubehead) : https://petrcech.eu
 * Date: 9.7.17
 * Time: 20:02
 * This file belongs to the project bootstrap-4-forms
 * https://gitlab.com/czubehead/bootstrap-4-forms
 */

namespace Czubehead\BootstrapForms\Traits;

use Nette\Utils\Html;


/**
 * Trait BootstrapButtonTrait
 * @package Czubehead\BootstrapForms
 * @property string $btnType
 */
trait BootstrapButtonTrait
{
	/**
	 * @var string
	 */
	private $btnClass = 'btn-primary';

	public function getControl($caption = NULL)
	{
		$control = parent::getControl($caption);
		$this->addBtnClass($control);

		return $control;
	}

	/**
	 * @param Html $element
	 */
	protected function addBtnClass($element)
	{
		$element->class[] = 'btn ' . $this->getBtnClass();
	}

	/**
	 * Gets additional button class. Default is btn-primary.
	 * @return string
	 */
	public function getBtnClass()
	{
		return $this->btnClass;
	}

	/**
	 * Sets additional button class. Default is btn-primary
	 * @param string $btnClass
	 * @return static
	 */
	public function setBtnClass($btnClass)
	{
		$this->btnClass = $btnClass;

		return $this;
	}
}