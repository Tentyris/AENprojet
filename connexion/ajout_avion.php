

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>




<form method="POST" class="form-horizontal" action='add_plane.php'>

    <fieldset>

        <!-- Form Name -->
        <legend>Avion </legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Modèle</label>
            <div class="col-md-4">
                <input id="model" name="model" type="text" placeholder="Modèle" class="form-control input-md" required="" value="">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="ln">Groupe acoustique</label>
            <div class="col-md-4">
                    <input id="ga" name="ga" type="number" placeholder="Groupe Acoustique " class="form-control input-md" required="" value="">

            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="ln">Type</label>
                <div class="col-md-4">
                    <input id="type" name="type" type="text" placeholder="Groupe Acoustique"  class="form-control input-md" required="" value="">

                </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="age">Nombre de place</label>
                <div class="col-md-4">
                    <input id="nbp" name="nbp" type="number" placeholder="nbp" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->


            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="add1">Stationnement</label>
                <div class="col-md-4">
                    <input id="park" name="park" type="text" placeholder="hangar" class="form-control input-md" required=" " >

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="zip">reservoir carburant</label>
                <div class="col-md-4">
                    <input id="cap_carbu" name="cap_carbu" type="number" class="form-control input-md" required=""value="">

                </div>
            </div>


            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="phone">Consomation de Carburant</label>
                <div class="col-md-4">
                    <input id="conso_carbu" name="conso_carbu" type="number" placeholder="téléphone" class="form-control input-md" required=""value="">

                </div>
            </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="phone">Utilisation</label>
                    <div class="col-md-4">
                        <input id="conso_carbu" name="conso_carbu" type="text"  class="form-control input-md" required=""value="">

                    </div>
                </div>





                <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
                    <button id="submit" name="update" class="btn btn-primary">Ajouter</button>

                </div>


    </fieldset>
</form>
