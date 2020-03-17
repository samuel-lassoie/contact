<?php
    require_once('connexion.php');
    $query = $pdo->query('select * from user', PDO::FETCH_ASSOC);
    $users = $query->fetchAll();
?>

<div style="background: #EEE;padding: 5px;min-height: 400px;">
    <div style="text-align: right">
        <a href="edit.php">
            <button style="background: #80D666;border: 1px solid #196C00">
                AJOUTER
            </button>
        </a>
    </div>
    <table style="width: 100%; border: 1px solid #000;margin-top: 20px;">
        <tr style="background:#CCC;">
            <th>#ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Birthday</th>
            <th>Email</th>
        </tr>
<?php
    foreach($users as $user) {
        echo "<tr>
            <th>". $user['id']."</th>
            <th>". $user['first_name']."</th>
            <th>". $user['last_name']."</th>
            <th>". $user['birthday']."</th>
            <th>". $user['email']."</th>
        </tr>";
    }
?>

    </table>
</div>
