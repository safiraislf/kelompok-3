<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <title>Belajar Controller & View pada Laravel</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <center>
                <h2>Selamat datang di Ujian Tengah Semester</h2>
                <p>Esa Kharima Putra NIM 1204200080</p><br /><br />
                <img class="img-thumbnail" src="{{ Vite::asset('resources/images/logo.png') }}" alt="image">
                <p><a class="btn btn-primary btn-lg" href="{{ route('home') }}" role="button">GO TO HOME</a></p>
                <div class="caption">
                    <p>มหัศจรรย์ข้าวผัด ปรากฏเมื่อเราไม่ได้มอง หายไปเมื่อท้องของเรา มองหามัน</p>
                </div>
            </center>
        </div>
        @vite('resources/js/app.js')
</body>

</html>
