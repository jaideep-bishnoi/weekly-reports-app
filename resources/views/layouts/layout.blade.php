<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/app.js"></script>

</head>

<body>
    
    <div class="container is-fluid">
        <div class="columns">
            <!-- sidebar menu -->
            <div class="column is-2 sidebar">
                <aside class="menu is-hidden-mobile">
                    <ul class="menu-list" id="menu">
                        <li><a class="" href="/">Dashboard</a></li>
                        <li><a class="" href="reports">Weekly Reports</a></li>
                        <p class="menu-label">
                        Setting
                        </p>
                        <li><a class="" href="profile">Profile</a>
                        <li><a class="" href="add-user">Add User</a></li>
                        <li><a class="" href="logout">Logout</a></li>
                        </li>
                    </ul>
                    
                </aside>
            </div>
            <!-- sidebar menu ends -->
            <div class="column is-10">
            
        @yield('content')

        </div>
    </div>
    </div>  
    <script src="js/main.js"></script>
</body>

</html>