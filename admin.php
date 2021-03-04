<?php

session_start();

include 'function.php';
include 'db.php';

if (array_key_exists('abcdef', $_GET)) {
    logout();
}

if (!empty($_POST['email'])) {
    //récupérer l'email
    $email = $_POST['email'];
    // Récupérer l'utilisateur ayant potentiellement cet email en base
    $user = get_user_by_email($email);
    //vérifier si l'utilisateur avec cet email existe
    if ($user !== null) {
        //si oui, vérifier la similitude du mot de passe
        $password = $_POST['password']; // password contient le MDP envoyé ==> "admin"
        $userHashedPassword = $user['password']; // 'password' correspond au nom du champs de la table admin_user ==> "$2a$12$S.Bm.J9jm4QQK.OHKMlq2.wUnyi/6l4uPe1unLbrxbE1aFfWMghN6"

        if (password_verify($password, $userHashedPassword)) {
            login($email);
        }
    }
}

?>
<html>
<head>
    <?php include 'head.php';?>
</head>
<body>
<?php if (is_logged_in()):
    echo '<p>Bonjour ' . $_SESSION['email'] . '</p>';
    echo '<a href="admin.php?abcdef" class="btn btn-primary">déconnexion</a>';
else: ?>
    <form action="admin.php" method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" class="form-control" name="email" type="email" placeholder="Entrez votre email">
        </div>
        <div class="form-group">
            <label for="password">Mot de Passe</label>
            <input id="password" class="form-control" name="password" type="password" placeholder="Entrez votre mot de passe">
        </div>
        <button type="submit" class="btn btn-primary">connexion</button>
    </form>
<?php endif; ?>
<?php include 'footer.php';?>
</body>
</html>
