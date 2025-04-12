<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Add necessary meta tags, title, and CSS links here -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel = "stylesheet" href= "{{ asset('admin/css/style.css') }}" />
</head>

<body>
    @include('admin.blocks.header');
    <section id ="sidebar">
        <a href="#" class= "brand">
            <i class ='bx bxs-smile'></i>
            <span class="text">
                <ADMIN>
            </span>
        </a>
        <ul class = "side-menu top">
            <li><a href ="#">
                    <i class = 'bx bxs-bashboard'></i>
                    <span class = "text">Dashboard</span>
                </a></li>
        </ul>
        <ul class = "side-menu top">
            <li><a href ="#">
                    <i class = 'bx bxs-bashboard'></i>
                    <span class = "text">Dashboard</span>
                </a></li>
        </ul>
        <ul class = "side-menu top">
            <li><a href ="#">
                    <i class = 'bx bxs-bashboard'></i>
                    <span class = "text">Dashboard</span>
                </a></li>
        </ul>
    </section>
</body>

</html>
