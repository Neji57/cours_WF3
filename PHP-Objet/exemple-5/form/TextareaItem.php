<?php 

namespace Form;

class TextareaItem extends FormItem
{
	public function createView()
    {
        $html = $this->startView();
        $html .= '<textarea class="form-control" name="' . $this->getName() . '"/>' . $this -> getValue() .'</textarea>';
        $html .= $this->endView();

        return $html;
    }
}