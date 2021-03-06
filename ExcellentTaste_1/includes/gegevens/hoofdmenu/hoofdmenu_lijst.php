<?php

$sql_gerechten_voorgerecht_warm = 'SELECT * FROM menuitem LEFT JOIN subgerecht ON menuitem.subgerechtcode = subgerecht.subgerechtcode LEFT JOIN gerecht ON menuitem.gerechtcode = gerecht.gerechtcode WHERE subgerecht.subgerechtcode = 2';
$sql_gerechten_voorgerecht_koud = 'SELECT * FROM menuitem LEFT JOIN subgerecht ON menuitem.subgerechtcode = subgerecht.subgerechtcode LEFT JOIN gerecht ON menuitem.gerechtcode = gerecht.gerechtcode WHERE subgerecht.subgerechtcode = 1';

$sql_gerechten_hoofdgerecht_vis = 'SELECT * FROM menuitem LEFT JOIN subgerecht ON menuitem.subgerechtcode = subgerecht.subgerechtcode LEFT JOIN gerecht ON menuitem.gerechtcode = gerecht.gerechtcode WHERE subgerecht.subgerechtcode = 3';
$sql_gerechten_hoofdgerecht_vlees = 'SELECT * FROM menuitem LEFT JOIN subgerecht ON menuitem.subgerechtcode = subgerecht.subgerechtcode LEFT JOIN gerecht ON menuitem.gerechtcode = gerecht.gerechtcode WHERE subgerecht.subgerechtcode = 4';
$sql_gerechten_hoofdgerecht_vega = 'SELECT * FROM menuitem LEFT JOIN subgerecht ON menuitem.subgerechtcode = subgerecht.subgerechtcode LEFT JOIN gerecht ON menuitem.gerechtcode = gerecht.gerechtcode WHERE subgerecht.subgerechtcode = 5';

$sql_gerechten_nagerecht_ijs = 'SELECT * FROM menuitem LEFT JOIN subgerecht ON menuitem.subgerechtcode = subgerecht.subgerechtcode LEFT JOIN gerecht ON menuitem.gerechtcode = gerecht.gerechtcode WHERE subgerecht.subgerechtcode = 8';
$sql_gerechten_nagerecht_mousse = 'SELECT * FROM menuitem LEFT JOIN subgerecht ON menuitem.subgerechtcode = subgerecht.subgerechtcode LEFT JOIN gerecht ON menuitem.gerechtcode = gerecht.gerechtcode WHERE subgerecht.subgerechtcode = 9';

?>


<!-- Voorgerechten -->
<div style="margin-top:40px; color:black; background: white;" class="container">
    <button onclick="goBack()">Terug</button>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <br>
    <h1>Voorgerechten</h1>
    <br>
    <table class="table table-sm table-striped" >
        <thead>
            <tr>
                <th>Menu Item (Warm voorgerecht) [<a href="?addsubgerechtcode=2&gerechtcode=1"><font color="red">Voeg toe</font></a>]</th>
                <th>Prijs</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($db->query($sql_gerechten_voorgerecht_warm) as $results){ ?>
            <tr>
                <td><?php echo $results["menuitem"]; ?></td>
                <td>???<?php echo $results["prijs"]; ?></td>
                <td><a href="?wijzig=<?php echo $results["menuitemcode"]; ?>"><img border="0" alt="W3Schools" src="images/pencil-edit-button.png" width="15" height="15"></a></td>
                <td><a href="?verwijder=<?php echo $results["menuitemcode"]; ?>"><img border="0" alt="W3Schools" src="images/delete.png" width="15" height="15"></a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <table class="table table-sm table-striped">
        <thead>
            <tr>
                <th>Menu Item (Koud voorgerecht) [<a href="?addsubgerechtcode=1&gerechtcode=1"><font color="red">Voeg toe</font></a>]</th>
                <th>Prijs</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($db->query($sql_gerechten_voorgerecht_koud) as $results){ ?>
            <tr>
                <td><?php echo $results["menuitem"]; ?></td>
                <td>???<?php echo $results["prijs"]; ?></td>
                <td><a href="?wijzig=<?php echo $results["menuitemcode"]; ?>"><img border="0" alt="W3Schools" src="images/pencil-edit-button.png" width="15" height="15"></a></td>
                <td><a href="?verwijder=<?php echo $results["menuitemcode"]; ?>"><img border="0" alt="W3Schools" src="images/delete.png" width="15" height="15"></a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<!-- Einde voorgerechten -->

<!-- Hoofdgerechten -->
<div style="margin-top:40px; color:black; background: white;" class="container">

    <h1>Hoofdgerechten</h1>
    <br>
    <table class="table table-sm table-striped">
        <thead>
        <tr>
            <th>Menu Item (Visgerechten) [<a href="?addsubgerechtcode=3&gerechtcode=2"><font color="red">Voeg toe</font></a>]</th>
            <th>Prijs</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($db->query($sql_gerechten_hoofdgerecht_vis) as $results){ ?>
            <tr>
                <td><?php echo $results["menuitem"]; ?></td>
                <td>???<?php echo $results["prijs"]; ?></td>
                <td><a href="?wijzig=<?php echo $results["menuitemcode"]; ?>"><img border="0" alt="W3Schools" src="images/pencil-edit-button.png" width="15" height="15"></a></td>
                <td><a href="?verwijder=<?php echo $results["menuitemcode"]; ?>"><img border="0" alt="W3Schools" src="images/delete.png" width="15" height="15"></a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <table class="table table-sm table-striped">
        <thead>
        <tr>
            <th>Menu Item (Vleesgerechten) [<a href="?addsubgerechtcode=4&gerechtcode=2"><font color="red">Voeg toe</font></a>]</th>
            <th>Prijs</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($db->query($sql_gerechten_hoofdgerecht_vlees) as $results){ ?>
            <tr>
                <td><?php echo $results["menuitem"]; ?></td>
                <td>???<?php echo $results["prijs"]; ?></td>
                <td><a href="?wijzig=<?php echo $results["menuitemcode"]; ?>"><img border="0" alt="W3Schools" src="images/pencil-edit-button.png" width="15" height="15"></a></td>
                <td><a href="?verwijder=<?php echo $results["menuitemcode"]; ?>"><img border="0" alt="W3Schools" src="images/delete.png" width="15" height="15"></a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <table class="table table-sm table-striped">
        <thead>
        <tr>
            <th>Menu Item (Vegetarische gerechten) [<a href="?addsubgerechtcode=5&gerechtcode=2"><font color="red">Voeg toe</font></a>]</th>
            <th>Prijs</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($db->query($sql_gerechten_hoofdgerecht_vega) as $results){ ?>
            <tr>
                <td><?php echo $results["menuitem"]; ?></td>
                <td>???<?php echo $results["prijs"]; ?></td>
                <td><a href="?wijzig=<?php echo $results["menuitemcode"]; ?>"><img border="0" alt="W3Schools" src="images/pencil-edit-button.png" width="15" height="15"></a></td>
                <td><a href="?verwijder=<?php echo $results["menuitemcode"]; ?>"><img border="0" alt="W3Schools" src="images/delete.png" width="15" height="15"></a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<!-- Einde hoofdgerechten -->

<!-- Nagerechten -->
<div style="margin-top:40px; color:black; background: white;" class="container">
    <h1>Nagerechten</h1>
    <br>
    <table class="table table-sm table-striped">
        <thead>
        <tr>
            <th>Menu Item (IJs) [<a href="?addsubgerechtcode=8&gerechtcode=3"><font color="red">Voeg toe</font></a>]</th>
            <th>Prijs</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($db->query($sql_gerechten_nagerecht_ijs) as $results){ ?>
            <tr>
                <td><?php echo $results["menuitem"]; ?></td>
                <td>???<?php echo $results["prijs"]; ?></td>
                <td><a href="?wijzig=<?php echo $results["menuitemcode"]; ?>"><img border="0" alt="W3Schools" src="images/pencil-edit-button.png" width="15" height="15"></a></td>
                <td><a href="?verwijder=<?php echo $results["menuitemcode"]; ?>"><img border="0" alt="W3Schools" src="images/delete.png" width="15" height="15"></a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <table class="table table-sm table-striped">
        <thead>
        <tr>
            <th>Menu Item (Mousse) [<a href="?addsubgerechtcode=9&gerechtcode=3"><font color="red">Voeg toe</font></a>]</th>
            <th>Prijs</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($db->query($sql_gerechten_nagerecht_mousse) as $results){ ?>
            <tr>
                <td><?php echo $results["menuitem"]; ?></td>
                <td>???<?php echo $results["prijs"]; ?></td>
                <td><a href="?wijzig=<?php echo $results["menuitemcode"]; ?>"><img border="0" alt="W3Schools" src="images/pencil-edit-button.png" width="15" height="15"></a></td>
                <td><a href="?verwijder=<?php echo $results["menuitemcode"]; ?>"><img border="0" alt="W3Schools" src="images/delete.png" width="15" height="15"></a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<!-- Einde nagerechten -->
