<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Appointment System</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins',sans-serif;
        }

        body{
            background:#f4f8fb;
        }

        nav{
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:20px 8%;
            background:#fff;
            box-shadow:0 2px 10px rgba(0,0,0,.1);
        }

        .logo{
            font-size:28px;
            font-weight:700;
            color:#0d6efd;
        }

        .nav-links a{
            text-decoration:none;
            color:#333;
            margin-left:25px;
            font-weight:500;
        }

        .hero{
            min-height:90vh;
            display:flex;
            justify-content:center;
            align-items:center;
            padding:0 8%;
        }

        .hero-content{
            flex:1;
        }

        .hero-content h1{
            font-size:55px;
            color:#222;
            margin-bottom:20px;
        }

        .hero-content span{
            color:#0d6efd;
        }

        .hero-content p{
            font-size:18px;
            color:#666;
            margin-bottom:30px;
            line-height:1.8;
        }

        .btn{
            display:inline-block;
            padding:14px 35px;
            background:#0d6efd;
            color:white;
            text-decoration:none;
            border-radius:10px;
            font-weight:600;
            transition:.3s;
        }

        .btn:hover{
            background:#084fc7;
        }

        .hero-image{
            flex:1;
            text-align:center;
        }

        .hero-image img{
            width:90%;
            max-width:550px;
        }

        .features{
            padding:80px 8%;
            background:white;
        }

        .section-title{
            text-align:center;
            margin-bottom:50px;
        }

        .section-title h2{
            font-size:40px;
            color:#222;
        }

        .cards{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
            gap:25px;
        }

        .card{
            background:#f8fbff;
            padding:30px;
            border-radius:15px;
            text-align:center;
            box-shadow:0 5px 15px rgba(0,0,0,.08);
        }

        .card h3{
            margin:15px 0;
            color:#0d6efd;
        }

        footer{
            background:#0d6efd;
            color:white;
            text-align:center;
            padding:20px;
        }

        @media(max-width:768px){
            .hero{
                flex-direction:column;
                text-align:center;
                padding-top:50px;
            }

            .hero-content h1{
                font-size:38px;
            }
        }
    </style>
</head>
<body>

<nav>
    <div class="logo">MediCare</div>

    <div class="nav-links">
        <a href="#">Home</a>
        <a href="#">Doctors</a>
        <a href="#">Services</a>
        <a href="{{ route ('login') }}">Login</a>
        <a href="{{ route ('register') }}">Register</a>
    </div>
</nav>

<section class="hero">
    <div class="hero-content">
        <h1>Book Your <span>Doctor Appointment</span> Online</h1>

        <p>
            Fast, secure and easy appointment booking system.
            Find experienced doctors and schedule appointments
            anytime, anywhere.
        </p>

        <a href="/register" class="btn">Get Started</a>
    </div>

    <div class="hero-image">
        <img src="https://cdn-icons-png.flaticon.com/512/2785/2785544.png" alt="Doctor">
    </div>
</section>

<section class="features">
    <div class="section-title">
        <h2>Why Choose Us?</h2>
    </div>

    <div class="cards">

        <div class="card">
            <h3>Online Booking</h3>
            <p>Book appointments quickly without waiting in line.</p>
        </div>

        <div class="card">
            <h3>Expert Doctors</h3>
            <p>Consult experienced and verified medical specialists.</p>
        </div>

        <div class="card">
            <h3>24/7 Access</h3>
            <p>Manage appointments anytime from any device.</p>
        </div>

        <div class="card">
            <h3>Secure Data</h3>
            <p>Your medical information is protected and encrypted.</p>
        </div>

    </div>
</section>

<footer>
    <p>© 2026 Doctor Appointment System | Developed with Laravel</p>
</footer>

</body>
</html>