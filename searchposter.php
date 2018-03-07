<?php include("header.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script>

        $(document).ready(function () {

            $('#hit').click(function () {

                var query = ($('#term').val());

                console.log(query);

                $.getJSON("https://api.themoviedb.org/3/search/movie?api_key=15d2ea6d0dc1d476efbca3eba2b9bbfb&query=" +
                    query + "&callback=?", {
                        format: "json",
                        tagmode: "any"
                    },
                    function (data) {
                        var result = "";
                        var div = "";
                        var imgurl = "http://image.tmdb.org/t/p/w500/";
                        console.log(data);

                        $.each(data, function (i, object) {
//                            console.log(i +'('+object.length+')')
                            $.each(object, function (index, obj) {
//                                console.log(obj.title);
                                result += "<div class='posters col-lg-6'>" +
                                    "<h1 class='title-poster'>" + obj.title + "</h1>" +
                                    "<div class='btn-del'>" +
                                "<form method='post' action='config/cruddb.php'>" +
                                "<button class='btn btn-default btn-lg' type='submit' name='saveposter'> " +
                                "<span class='glyphicon glyphicon-star' aria-hidden='true'>  Spara</span>" +
                                "<input type='hidden' name='imgurl' value='" + obj.poster_path + "'/>" +
                                "<input type='hidden' name='imgname' value=' " + obj.title + " '/>" +
                                "</button>" +
                                "</form>" +
                                "</div>" +
                                "<img class='multiple-borders' src='" + imgurl + obj.poster_path + "' />" +
                                    "</div>";

                                $('#result').html(result);

                            });
                        });
                    });
            });
        });

    </script>
</head>
<div class="main-body">
    <div class="row">
        <div class="col-lg-12 col-xs-6">
            <div class="input-group input-group-lg " id="search">
                <input id="term" type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button id="hit" class="btn btn-default btn-custom-search" type="button">Sök!</button>
      </span>
            </div>
        </div>
    </div>
    <div id="result">

    </div>


</div> <!--main-body-->
</body>
</html>
