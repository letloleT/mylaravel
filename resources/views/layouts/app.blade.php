<!DOCTYPE html>
<html lang="{{ config('app.locale')}}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

        <title>{{config('app.name','Laravel')}}</title>

        <style>
            .bg{
                background-color: #f5f5f0;
                font-family:Verdana, Geneva, Tahoma, sans-serif;
            }

            .navbar{
                box-shadow: 0px 1px 20px #999;
                height: 80px;
                background-color: transparent !important;
            }
            .navbar-brand{
                text-decoration-color: black;
                font-weight:inherit;
            }

            .form-control{
                /* margin: auto; */
                height:auto;
                background: rgba(255,255,255,0.5);
                max-width: 25vw;
                /*border-radius: 4px;
                box-shadow:0.2em 0.2em 0.7em grey;*/
                padding: 12px 20px;
                border-left: none;
                border-right:none;
                border-top: none;
            }

            .form-group{
                border: none;
            }

            .container-form{
                background-color:aquamarine;
            }
            
            .top {
                position: relative;
                margin: auto;
            }

            .top img {
                vertical-align: middle;
                height: 80vh;
                width:100%;
            }

            .top .content {
                position: absolute;
                bottom: 0;
                background: rgba(0, 0, 0, 0.3); /* Black background with transparency */
                color: #f1f1f1;
                width: 100%;
                padding: 20px;
            }
          
            .rows{
                margin-left: auto;
                margin-right: auto;
                width: 650px;
            }
         
            .card{
                overflow: hidden; /*card zooms within border*/
                border:none;
                box-shadow: 0px 1px 20px #999;
            }

            .card-deck{
                 margin: 0 100px 0 100px;
             }
            
            /* .card-img-top:hover{
                -moz-transform: scale(1.1);
                -webkit-transform: scale(1.1);
                transform: scale(1.1);  
             } */
             
             .card .overlay {
                position: absolute; 
                bottom: 0; 
                background: rgb(0, 0, 0);
                background: rgba(0, 0, 0, 0.5); /* Black see-through */
                color: #f1f1f1; 
                width: 100%;
                transition: .5s ease;
                opacity:0;
                color: white;
                font-size: 20px;
                padding: 20px;
                text-align: center;
                }

                .card:hover .overlay {
                 opacity: 1;
                }
             
             #carouselExampleIndicators{
                 width:900px;
                 margin: auto;
             }
        </style>
    </head>

    <body>
        @yield('content')
        {{-- <script type="text/javascript" src="layouts/slider.js"></script> --}}
  
    </body>
</html>
