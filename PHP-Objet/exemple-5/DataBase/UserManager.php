<?php

namespace DataBase;

use Entity\User;

class UserManager extends DBManager
{
	public function save(User $user)
	{
		$query = $this -> pdo -> prepare("INSERT INTO user (username, password, email, pays, sexe, presentation) VALUES (:username, :password, :email, :pays, :sexe, :presentation)");
		$query -> bindValue(':username', $user, $user -> getUsername());
		$query -> bindValue(':password', $user, $user -> getPassword());
		$query -> bindValue(':email', $user, $user -> getEmail());
		$query -> bindValue(':pays', $user, $user -> getPays());
		$query -> bindValue(':sexe', $user, $user -> getSexe());
		$query -> bindValue(':presentation', $user, $user -> getPresentation());

		$query -> execute();
	}
}