<!DOCTYPE html>
<html>
    <head>
        <title>WA</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                background: url({{asset('images/Eb_bg.jpg')}}) no-repeat center center fixed;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;
                  background-size: cover;
            }

            .modal {
              text-align: center;
            }

            .modal:before {
              display: inline-block;
              vertical-align: middle;
              content: " ";
              height: 100%;
            }

            .modal-dialog {
              display: inline-block;
              text-align: left;
              vertical-align: middle;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body >
        <div class="container-fluid">
         @include('modals.RegisterModal')
        </div>




        <!-- JavaScript -->
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="content/bootstrapJS/jquery-2.1.1.min.js" type="text/javascript"></script>
            <script type="text/javascript">
             $(window).load(function(){
             $('#myModal').modal('show');
               })
               $('#myModal').modal({
                 backdrop: 'static'
               })
            </script>
    </body>


    </html>
