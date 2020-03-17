<?php
    require_once('connexion.php');

    // on verifie que le formulaire est envoyé en verifiant que la propriété
    // first_name existe
    if(isset($_POST['first_name'])) {
        $request = $pdo->prepare('insert into user (first_name, last_name, birthday, email) values (:first_name, :last_name, :birthday, :email)');
        $result = $request->execute([
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'birthday' => $_POST['birthday'],
            'email' => $_POST['email'],
        ]);
        if($result) {
                header('location: index.php');
                exit;
        } else {
            echo "<span style='color: #FF0000'>Une erreur s'est produite lors de l'enregistrement</span>";
        }
    }
?>
<div style="background: #EEE;padding: 5px;min-height: 400px;">
    <form action="" method="post" style="border: 1px solid #000; width: 400px;padding: 5px">
        <div>
            <label for="firstName">First name</label>
            <input id="firstName" name="first_name" value="">
        </div>
        <div>
            <label for="lastName">Last name</label>
            <input id="lastName" name="last_name" value="">
        </div>
        <div>
            <label for="birthday">Birthday</label>
            <input id="birthday" name="birthday" value="">
        </div>
        <div>
            <label for="email">Email</label>
            <input id="email" name="email" value="">
        </div>
        <div style="text-align: right">
            <input type="submit" value="Enregistrer">
        </div>
    </form>
</div>
