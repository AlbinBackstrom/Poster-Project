<?php include("header.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lägg till ny</title>
</head>
<body>

<div class="add-new-movie-form">
    <div class="row">
        <div class="col-lg-12">
            <form action="#addnewmovie">
                <fieldset class="scheduler-border">
                    <legend class="scheduler-border"><h2>Add a new movie</h2></legend>
                    <legend>Please provide the following information:</legend>
                    <div class="form-group">
                        <label>Title:</label>
                        <input type="text" class="form-control" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label>Length (in minutes):</label>
                        <input type="number" class="form-control" placeholder="Length">
                    </div>
                    <div class="form-group ">
                        <label>Actors</label>
                        <input type="text" class="form-control" placeholder="Actors">
                    </div>
                    <div class="form-group ">
                        <label>Director:</label>
                        <input type="text" class="form-control" placeholder="Director">
                    </div>
                    <div class="form-group ">
                        <label>Age restriction:</label>
                        <input type="number" class="form-control" placeholder="Age restriction">
                    </div>
                    <div class="form-group ">
                        <label>External link e.g. IMDB </label>
                        <input type="text" class="form-control" placeholder="Link">
                    </div>
                    <div class="form-group">
                        <label>Plot:</label>
                        <textarea class="form-control" placeholder="Plot" rows="3"></textarea></div>

                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border"><h4>Trailer and poster</h4></legend>
                        <p class="help-block">Upload or use an existing link to a poster and trailer</p>

                        <div class="form-group col-lg-6 ">
                            <h4>Poster:</h4>
                            <input type="text" class="form-control"
                                   placeholder="http://posters.com/myposter.jpg">
                        </div>

                        <div class="form-group col-lg-6 ">
                            <h4>Trailer:</h4>
                            <input type="text" class="form-control"
                                   placeholder="http://trailers.com/mytrailer"></div>

                    </fieldset>
                    <button type="submit" class="btn btn-primary btn-custom col-lg-2">Submit</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>

</body>
</html>
