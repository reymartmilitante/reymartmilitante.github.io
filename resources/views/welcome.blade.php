<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
                        /* Sticky footer styles
            -------------------------------------------------- */
            html {
            position: relative;
            min-height: 100%;
            }
            body {
            margin-bottom: 60px; /* Margin bottom by footer height */
            }
            .header-section {
                height: 450px;
                background: url(' {{ URL::to('/') }}/app/public/assets/img/bg.jpg ');
            }
            .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px; /* Set the fixed height of the footer here */
            line-height: 60px; /* Vertically center the text there */
            background-color: #f5f5f5;
            }

        </style>
    </head>
    <body>
    <div class="container-fluid header-section">
      <div class="container" style="padding-top:20px;">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="text-muted" href="#">RM Developer</a>
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="#" style="padding:4px;" >About</a>
                <a class="blog-header-logo text-dark" href="#" style="padding:4px;">Projects</a>
                <a class="blog-header-logo text-dark" href="#" style="padding:4px;">Blog</a>
                <a class="blog-header-logo text-dark" href="#" style="padding:4px;">Contact</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a href="#" style="padding:2px;">
                <img style="background:#fff; border-radius:50%;" src="https://img.icons8.com/ios-filled/35/000000/facebook-circled.png"/>
                </a>
                <a href="#" style="padding:4px;">
                <img style="background:#fff; border-radius:50%;" src="https://img.icons8.com/ios-filled/35/000000/linkedin-circled.png"/>
                </a>
                <a href="#" style="padding:4px;">
                <img style="background:#fff; border-radius:50%;" src="https://img.icons8.com/ios-filled/35/000000/github.png"/>
                </a>
                <a href="#" style="padding:4px;">
                <img style="background:#fff; border-radius:50%;" src="https://img.icons8.com/ios-filled/35/000000/facebook-messenger.png"/>
                </a>
            </div>
            </div>
        </header>
      </div>
    </div>
    <div class="container">
        <div class="about">
            About
        </div>
        <div class="projects">
            Projects
        </div>
        <div class="blog">
            Blog
        </div>
        <div class="contact">
            Contact
        </div>
    </div>
        <footer class="footer bg-dark">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</html>
