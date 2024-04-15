<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIDE</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        /* Global Styles */
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('images/Purisima.jpg'); /* Background photo */
            background-size: cover; /* Cover the entire viewport */
            background-position: center; /* Center the background image */
        }

        a {
            text-decoration: none;
        }

        li {
            list-style: none;
        }

        /* Sidebar Styles */
        .wrapper {
            display: flex;
            min-height: 100vh;
        }

        #sidebar {
            width: 250px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: width 0.3s ease;
        }

        #sidebar:hover {
            width: 300px;
        }

        .sidebar-logo {
            padding: 1rem 0;
            color: #1a1e91;
            text-align: center;
            border-bottom: 1px solid #1a1e91;
        }

        .system {
            font-size: 1.5rem; /* Increase font size */
            font-weight: 700;
            color: #1a1e91;
            display: block;
            margin-top: 10px; /* Add margin top for spacing */
            text-transform: uppercase; /* Convert text to uppercase */
            letter-spacing: 2px; /* Add letter spacing for a modern look */
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); /* Add text shadow for depth */
        }

        .sidebar-logo img {
            width: 150px; /* Adjust the width as needed */
            height: auto; /* Maintain aspect ratio */
            display: block; /* Ensure the image is centered */
            margin: 0 auto 10px; /* Add margin for spacing below the logo */
        }

        .sidebar-nav {
            padding: 0;
            margin: 0;
        }

        .sidebar-item {
            margin-bottom: 8px;
            transition: background-color 0.3s ease;
        }

        .sidebar-item:hover {
            background-color: #edeef0;
        }

        .sidebar-link {
            display: block;
            padding: 12px;
            color: #080808;
            font-weight: 500;
        }

        .sidebar-link i {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <aside id="sidebar" class="bg-light">
            <div class="sidebar-logo">
                <img src="{{ asset('images/cpc.png') }}" alt="CPC">
                <span class="system">PurisimianPulse Information System</span>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="/home" class="sidebar-link">
                        <i class="fas fa-home"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/create" class="sidebar-link">
                        <i class="fas fa-user"></i>
                        <span>Add Student</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/user" class="sidebar-link">
                        <i class="fas fa-user-graduate"></i>
                        <span>Student</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/genders" class="sidebar-link">
                        <i class="fas fa-male"></i> <i class="fas fa-female"></i>
                        <span>Genders</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/logout" class="sidebar-link">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>
        </aside>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <!-- FontAwesome Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
