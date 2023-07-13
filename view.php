<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Liste des Clients Potentiel</title>

    <!-- links style -->

    <link rel="stylesheet" href="./feuilles_Style/style.css">
</head>
<body>
    <section>
        <h1>Les Liste des Clients Potentiels</h1>

        <?php

            while ($allclients = $req->fetch(PDO::FETCH_ASSOC)) {

        ?>
                <table class="t1">
                    <tr>
                        <th>
                            <td><?= $allclients['id']; ?></td>
                        </th>
                        <th><?= $allclients['prenom']; ?></th> 
                        <th><?= $allclients['nom']; ?></th>
                    </tr>
                </table>
            <?php
            }

        ?>

    </section> 
</body>
</html>