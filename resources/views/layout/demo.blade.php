<!doctype html>
<html lang="en">

<head>
    <title>Sidebar 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4">
                <h1><a href="index.html" class="logo"><h1>CRMS</h1><span style="margin-top:-1rem">Where Learning Begins</span></a></h1>
                <ul class="list-unstyled components mb-5">
                    <li id="home" class="colorp">
                        <a href="{{ url('/') }}/home"><span class="fa fa-home mr-3"></span> Home</a>
                    </li>
                    <li id="profile" class="colorp">
                        <a href="{{ url('/') }}/profile"><span class="fa fa-user mr-3"></span> Profile</a>
                    </li>
                    <li class="colorp">
                        <a href="#"><span class="fa fa-briefcase mr-3"></span> Works</a>
                    </li>
                    <li class="colorp">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="fa-solid fa-magnifying-glass mr-3"></span>Searching</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li class="colorp">
                                <a href="#"><span class="fa-solid fa-magnifying-glass mr-3"></span>Searching Teachers</a>
                            </li>
                            <li class="colorp">
                                <a href="#"><span class="fa-solid fa-magnifying-glass mr-3"></span>Searching Students</a>
                            </li>
                        </ul>
                    </li>
                    <li class="colorp">
                        <a href="#"><span class="fa fa-sticky-note mr-3"></span> Blog</a>
                    </li>
                    <li class="colorp">
                        <a href="#"><span class="fa fa-suitcase mr-3"></span> Gallery</a>
                    </li>
                    <li class="colorp">
                        <a href="#"><span class="fa fa-cogs mr-3"></span> Services</a>
                    </li>
                    <li class="colorp">
                        <a href="#"><span class="fa fa-paper-plane mr-3"></span> Contacts</a>
                    </li>
                </ul>

                

                <div class="footer">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | CRMS
                    </p>
                </div>

            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" >
            <div class="welcome">
                <div class="image">
                    <img src="/images/shawon-dp.jpg" alt="">
                </div>
                <div class="name">
                    <small>Welcome,</small>
                    <b>Md. Bokhtiar Nadeem Shawon</b>
                </div>
            </div>
            <div class="row content" >
                @yield('normal')
                <div class="col-8 main-section">
                    @yield('main-part')
                </div>
                <div class="col-3">
                    @yield('others')
                </div>

            </div>
            
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
