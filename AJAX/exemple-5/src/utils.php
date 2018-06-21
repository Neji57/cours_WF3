<?php 


function dbConnect() 
{
    $attributes = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    return new PDO('sqlite:' . __DIR__ . '/../database/data.db', null, null, $attributes);
}

function register($pdo, $post, $files) //$post => $_POST, $files => $_FILES
{
    if(empty($post['username']) || empty($post['email']) || empty($post['password'])) 
    {
        return array(
            'success' => false,
            'message' => 'Vous devez entrer un nom d\'utilisateur, email et mot de passe!',
        );
    }

    $checkUser = checkUser($pdo, $post);
    if(!$checkUser['success']) 
    {
        return $checkUser;
    }

    $password = md5($post['password'] . "WF3");

    // upload de l'avatar
    $avatar = uniqid() . $files['avatar']['name'];
    if(!empty($files['avatar']['name'])) 
    {
        copy($files['avatar']['tmp_name'], 'images/' . $avatar);
    }

    $query = $pdo->prepare("INSERT INTO user (username, password, email, avatar) VALUES (:username, :password, :email, :avatar)");
    $query->bindValue(':username', $post['username'], PDO::PARAM_STR);
    $query->bindValue(':password', $password, PDO::PARAM_STR);
    $query->bindValue(':avatar', $avatar, PDO::PARAM_STR);
    $query->bindValue(':email', $post['email'], PDO::PARAM_STR);

    if($query->execute()) 
    {
        return array(
            'success' => true, 
            'message' => "Bienvenue!",
        );
    }

}

function checkUser($pdo, $post) 
{
    $query = $pdo->prepare("SELECT * FROM user WHERE username = :username OR email = :email");
    $query->bindValue(':username', $post['username']);
    $query->bindValue(':email', $post['email']);
    $query->execute(array('username' => $post['username'], 'email' => $post['email']));
    if($query->fetch()) 
    {
        return array(
            'success' => false, 
            'message' => 'Le nom d\'utilisateur ou l\'adresse email existe déjà.'
        );
    }

    return array(
        'success' => true, 
        'message' => ''
    );
}

function login($pdo, $post)
{
    if(empty($post['username']) || empty($post['password']))
    {
        return array(
            'success' => false,
            'message' => "Vous devez entrer un nom d'utilisateur et un mot de passe",
        );
    }
    $password = md5($post['password'] . "WF3");
    $query = $pdo-> prepare("SELECT * FROM user WHERE (username = :username OR email = :username) AND password = :password");
    $query -> execute(array(':username' => $post['username'], 'password' => $password));

    // var_dump($query->fetch());
    // var_dump($pdo->errorInfo());
    // if($user) {...}
    if($user = $query->fetch())
    {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['username'];
        $_SESSION['user_email'] = $user['email'];
        $_SESSION['user_avatar'] = $user['avatar'];

        return array(
            'success' => true,
            'message' => "",
        );
    }

    return array(
        'success' => false,
        'message' => "Impossible de se connecter",
    );
}

function getUser()
{
    if(isset($_SESSION['user_id']))
    {
        return array(
        'id' => $_SESSION['user_id'],
        'username' => $_SESSION['user_name'],
        'email' => $_SESSION['user_email'],
        'avatar' => $_SESSION['user_avatar'],
    );
    }
    return false;

}

function logout()
{
    if(isset($_SESSION['user_id']))
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_avatar']);
    }
}

function getLastMessages($pdo, $lastId)
{
    if($lastId == 0) // premier chargement de la page
    {
        $count = 10;
        $query = $pdo->prepare("SELECT message.*, user.username, user.avatar FROM message JOIN user On user.id = message.user ORDER BY id DESC LIMIT :limit");
        $query->bindValue(':limit', $count, PDO::PARAM_INT);
        $query->execute();

        // La fonction array_reverse() inverse l'ordre du tableau
        return array_reverse($query->fetchAll());
    }
    else
    {
        $query = $pdo->prepare("SELECT message.*, user.username, user.avatar FROM message JOIN user On user.id = message.user WHERE message.id > :lastId ORDER BY id ASC");
        $query->bindValue(':lastId', $lastId, PDO::PARAM_INT);
        $query->execute();
    }

    return $query->fetchAll();
}

function postMessage($pdo, $user, $message)
{
    $query = $pdo->prepare("INSERT INTO message (content, user, date) VALUES (:content, :userId, :date)");
    // La fonction strip_tags() supprime les balises qui sont entrées dans le formulaire pour éviter les injections XSS.
    $query->bindValue(':content', strip_tags($message), PDO::PARAM_STR);
    $query->bindValue(':userId', $user['id'], PDO::PARAM_INT);
    $query->bindValue(':date', time('now'), PDO::PARAM_STR);

    if($query->execute())
    {
        return array(
            'success' => true,
            'message' => "",
        );
    }
    //var_dump($pdo->errorInfo());
    //die;
    return array(
        'success' => false,
        'message' => "Impossible d'envoyer le message'",
    );
}



?>