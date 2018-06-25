<?php


/* class Select
{
	private $id;
    private $username;
    private $password;
    private $email;
} */
/* 
<select name="select" ...>
	<option value="valid">Valide</option>
	<option value="deleted">Supprimé</option>
</select>
 */

/* 
array(
	"Valide" => "valid",
	"Supprimé" => "deleted",
)
*/


class SelectItem extends FormItem
{

	private $options;

	public function __construct($name, $label, array $options)
	{
		$this->setOptions($options);
	}

	public function createView()
    {
        $html = $this->startView();
		$html .= '<select name="' . $this->getName() . '">';

		foreach ($this->getOptions() as $key => $value) 
		{
			$html .= '<option value="' . $value . '">' . $key . '</option>';
		}

		

        $html .= '</select>';
        $html .= $this->endView();

        return $html;
    }

	/**
	 * Get the value of options
	 */ 
	public function getOptions()
	{
		return $this->options;
	}

	/**
	 * Set the value of options
	 *
	 * @return  self
	 */ 
	public function setOptions($options)
	{
		$this->options = $options;

		return $this;
	}
}
