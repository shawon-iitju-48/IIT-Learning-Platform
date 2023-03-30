<!doctype html>
<html lang="en">

<head>
    <title>CRMS | Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="container">
        <div class="col-3">
            <div class="brand">
                <div class="icon">
                    <i class="fas fa-book"></i>
                </div>
                <div class="name">
                    <b>CRMS</b>
                </div>
            </div>

            <div class="dashboard">
                <a href="{{ url('/') }}/home">
                    <div id="home" class="golla">
                        <div class="icon">
                            <i class="fa-solid fa-house-user"></i>
                        </div>
                        <div class="name">
                            <b>Home</b>
                        </div>
                    </div>
                </a>
                <a href="{{ url('/') }}/courses">
                <div class="golla">
                    <div class="icon">
                        <i class="fa-solid fa-bookmark"></i>
                    </div>
                    <div class="name">
                        <b>Courses</b>
                    </div>
                </div>
            </a>
                <a href="{{ url('/') }}/profile">
                    <div id="profile" class="golla">
                        <div class="icon">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="name">
                            <b>Profile</b>
                        </div>
                    </div>
                </a>
                <div class="golla ">
                    <div class="icon">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </div>
                    <div class="name">
                        <b>Log out</b>
                    </div>
                </div>
                <div class="golla">
                    <div class="icon">
                        <i class="fa-solid fa-person-chalkboard"></i>
                    </div>
                    <div class="name">
                        <b>Instructors</b>
                    </div>
                </div>
                <div class="golla ">
                    <div class="icon">
                        <i class="fa-solid fa-message"></i>
                    </div>
                    <div class="name">
                        <b>Messages</b>
                    </div>
                </div>

            </div>
        </div>
        <div class="vr"></div>
        <div class="col-9">
            <div class="welcome shadow-sm p-4 mb-4 bg-white">
                <div class="image">
                    <img src="/images/shawon-dp.jpg" alt="">
                </div>
                <div class="name">
                    <small>Welcome,</small>
                    <b>Md. Bokhtiar Nadeem Shawon</b>
                </div>
            </div>
            <div class="row content">
                <div class="col-10 main-section">
                    @yield('main-part')
                </div>
                <div class="col-3">
                    @yield('others')
                </div>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
