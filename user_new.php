<?php

session_start();

/**
 * Protection
 */
/*if (empty($_SESSION['connected'])) {
    echo 'Forbidden !';
    die;
}*/

/** @var \Doctrine\ORM\EntityManager $em */
$em = require __DIR__.'/bootstrap.php';

use Cartman\Init\User;

$username = !empty($_POST['username']) ? $_POST['username'] : null;
$password = !empty($_POST['password']) ? $_POST['password'] : null;

/**
 * SignIn
 */
/*if (null !== $username && null !== $password) {
    $user = new User();

    $user
        ->setUsername($username)
        ->setPassword($password)
    ;

    $em->persist($user);
    $em->flush();

    echo 'User created!';
}*/

/**
 * Login
 */
if (null !== $username && null !== $password) {
    /** @var \Doctrine\ORM\EntityRepository $userRepository */
    $userRepository = $em->getRepository('Cartman\Init\User');

    /** @var User|null $user */
    $user = $userRepository->findOneBy([
        'username' => $username,
        'password' => $password,
    ]);


    if (null !== $user) {
        $_SESSION['id'] = $user->getId();
        $_SESSION['username'] = $user->getUsername();
        $_SESSION['connected'] = true;
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="username">Username: </label>
        <input type="text" id="username" name="username" required autofocus>
        <br>
        <label for="password">Password: </label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="Créer User!">
    </form>
</body>
</html>