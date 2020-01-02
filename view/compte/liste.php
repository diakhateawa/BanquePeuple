<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BanquePeuple</title>
    <script src="main.js"></script>
    <link rel ="stylesheet" type="text/css" media ="screen" href="public/css/bootstrap-cerulean.min.css">



</head>
<body>
<div class =" nav navbar-primary">
    <ul class =" nav navbar-nav">
        <li><a href="clients">Gestions des clients</a></li>
        <li><a href="comptes">Gestions des comptes</a></li>
    </ul>
</div>
<div class="container col-md-6">
    <div class="panel panel-primary">
        <div class="panel-heading">liste des comptes</div>
        <div class="panel-body">
            <table class="table">
                <tr>
                    <td>ID</td>
                    <td>Numero</td>
                    <td>Solde</td>
                    <td>Etat Compte</td>
                    <td>Client</td>
                </tr>

                <?php
                require_once '../../model/comptedb.php';
                $comptes = listeCompte()-> fetchAll();
                foreach ($comptes as $key => $value){
                    echo "<tr>
                                            <td>$value[0]</td>
                                            <td>$value[1]</td>
                                            <td>$value[2]</td>
                                            <td>$value[3]</td>
                                            <td>$value[4]</td>
                                        </tr>";
                }
                ?>
            </table>
        </div>
        <div class="panel-footer">DITI4</div>
    </div>
</div>

<div class="container col-md-6">
    <div class="panel panel-primary">
        <div class="panel-heading">Formulaire de gestion des comptes</div>
        <div class="panel-body">
            <form action="compteController" method="POST">
                <div class="form-group">
                    <label class="control-label" for="numero">Numero de compte</label>
                    <input class="form-control" type="number", name="numero", id="numero"/>
                </div>
                <div class="form-group">
                    <label class="control-label" for="solde">Solde de compte</label>
                    <input class="form-control" type="text", name=solde", id="solde"/>
                </div>

                <div class="form-group">
                    <label class="control-label" for="Client">Clients</label>
                    <select class="form-control" name="idC", id="idC">
                        <option value=""> Faites votre choix</option>
                        <?php
                        require_once '../../model/clientdb.php';
                        $clients = listeClient()-> fetchAll();
                        foreach ($clients as $key => $value){
                            echo "<option value='".$value[0]."'>$value[0]</option>";
                                           
                        }
                        ?>
                    </select>

                </div>

                <div class="form-group">
                    <input class="btn btn-success" type="submit", name="ajouter", id="ajouter", value="Ajouter"/>
                    <input class="btn btn-danger" type="reset", name="annuler", id="annuler", value="annuler"/>
                </div>

            </form>
        </div>
        <div class="panel-footer">DITI4</div>
    </div>
</div>



</body>
</html>