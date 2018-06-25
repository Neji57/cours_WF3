<?php

/* 
id
username
password
email 
`*/

class User
{
	// Attributs
	private $username;
    private $password;
    private $email;
    private $id;

	public function __construct($username, $password, $email)
	{
		this->setUsername($username);
		this->setPassword($password);
		this->setEail($email);
		this->id = (uniqid();
	}

	// Methodes
	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$this->email = $email;
		}
		else
		{
			trigger_error("L'adresse email n'est pas valide");
		}

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}