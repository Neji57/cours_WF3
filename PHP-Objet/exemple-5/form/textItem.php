<?php 

require_once('FormItem.php');

class TextItem extends FormItem
{
    public function createView()
    {
        $html = $this->startView();
        $html .= '<input trpe="text" class="form-control"' . $this->getName() . '" value="' . $this->getValue() . '" />';
        $html .= $this->endView();

        return $html;
    }

    
}