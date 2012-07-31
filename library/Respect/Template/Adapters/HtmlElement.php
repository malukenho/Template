<?php
namespace Respect\Template\Adapters;

use Respect\Template\Adapter;

class HtmlElement extends AbstractAdapter
{
	public function isValidData($data)
	{
		return ($data instanceof \Respect\Template\HtmlElement);
	}

	protected function getDomNode($data, $parent)
	{
		return $data->getDOMNode($this->getDom());
	}

	public function getDecorator()
	{
		return 'Respect\Template\Decorators\Replace';
	}

}
