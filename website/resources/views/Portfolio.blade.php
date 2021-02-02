<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        *{
            padding:0;
            box-sizing: border-box;
        }
        :root{
            --link-color: #FFFFFF;
            --navbar-fixed-top:#FFFFFF;
            --background-scrollbar:#f1f1f1;
            --background-scrollbar-hover:#555;
            --link-color-fixed-top:#1C1C1C;
            --background-color-main:#222222;
            --color-filter:#FFFFFF;
        }
        body{

        }
        /*
        scrollFunction bar
         */
        ::-webkit-scrollbar {
            width: 5px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: var(--background-scrollbar);
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: var(--background-scrollbar-hover);
        }
        .nav-link{
            text-decoration: none;
            font-size: 1.3rem;
            font-weight: 500;
            color:var(--link-color);
        }
        .navbar-fixed-top{
            top: 0;
            position:fixed;
            width:100%;
            background-color:var(--navbar-fixed-top);
            transition: background-color 1s ease-in-out

        }
        .navbar-fixed-top > ul > li > a{
            color: var(--link-color-fixed-top);
        }


        #navbarNav{
            justify-content:center;
        }
        .navbar{
            padding : 0;
        }
        .container-fluid{
            padding:0;
        }

        .box-navbar{
            background: url(https://scontent-hkt1-2.xx.fbcdn.net/v/t1.0-9/136067005_2808063012768694_8239462329838003659_o.jpg?_nc_cat=107&ccb=2&_nc_sid=09cbfe&_nc_ohc=i1WNlpkxlGQAX-4TxMq&_nc_ht=scontent-hkt1-2.xx&oh=84d244cea77f90d7a7fe6df4cbab96e2&oe=602BD93C) no-repeat   ;
            min-height:800px;

            height:100vh;
            width:100%;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        main{
            background-color:var(--background-color-main);
            min-height:800px;
        }
        .section-main{
            padding:5em 0;
        }
        .section-heading{
            position:relative;
            font-weight:200;
            padding-top:15px;
            font-size:1.6rem;
            color:var(--link-color);
        }
        .filter{
            text-align:center;
            color:var(--color-filter);
            width:100%;
        }
        .filter > ul{
            display: block;
            list-style-type: disc;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            padding-inline-start: 40px;

        }
        .filter >ul > li{
            display:inline-block;
            cursor: pointer;
            padding:20px;
            -webkit-transition: .3s all ease;
            -o-transition: .3s all ease;
            transition: .3s all ease
        }
        .filter > ul > li:hover {
            color:#bac964;
            border-bottom:  1px solid;
        }
        .filter-content{
            width:100%;
        }
        .row-filter-content{
            position:relative;
            height:1000px;

        }

    </style>

</head>
<body>
   <div class="container-fluid">
       <header>
           <nav class="navbar navbar-expand-lg ">
               <section class="box-navbar">
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="navbarNav">
                       <ul class="navbar-nav">
                           <li class="nav-item active">
                               <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="#">Features</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="#">Pricing</a>
                           </li>
                       </ul>
                   </div>
               </section>

           </nav>
       </header>
       <main>
            <section class="section-main">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center section-heading">
                                <h2>Featured <strong>Portfolio</strong></h2>
                            </div>
                            <div class="filter">
                                <ul>
                                    <li>Test</li>
                                    <li>Test</li>
                                    <li>Test</li>
                                    <li>Test</li>
                                    <li>Test</li>
                                </ul>

                            </div>
                            <div class="filter-content">
                                <div class="row grid row-filter-content">
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
       </main>
       <footer>

       </footer>
   </div>
<script>
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("navbarNav").classList.add('navbar-fixed-top');


        } else {
            document.getElementById("navbarNav").classList.remove('navbar-fixed-top');

        }
    }
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
