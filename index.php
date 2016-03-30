<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-quiv="content-type" content="text/html"; charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Weather Scraper</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- My styles -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 center">
                <h1 class="center"><strong>Weather</strong></h1>
                <p class="lead center">Enter your city below to get a forecast for the weather.</p>

                <form method="post">
                    <div class="form-group">
                        <input type="text" id="city" name="city" class="form-control center" placeholder="Eg. Santa Barbara, San Franciso, Goleta..." />
                    </div>

                    <button id="go" name="go" class="btn btn-info btn-lg">Go!</button>
                </form>

                <div id="success" class="alert alert-success"></div>
                <div id="fail" class="alert alert-danger">Could not find city. Please try again.</div>
                <div id="nocity" class="alert alert-danger">Please enter a city.</div>
            </div>
        </div>
    </div>

    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/scraper.js"></script>

</body>

</html>
