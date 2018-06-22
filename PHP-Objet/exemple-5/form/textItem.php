<?php

require_once('formItem.php');

class TextItem extends FormItem
{
	public function createView()
	{
		$html = $this->startView();
		$html .= '<input type="text" class="form-control" name="' . $this->getName() . '" />';
		$html .= $this->endView();

		return $html;
	}
}