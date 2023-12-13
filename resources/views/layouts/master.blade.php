<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            @media (max-width:768px){
                .sidebar{
                    background-color: #f5f5f5;
                }
            }

            @media (min-width:768px){
                .sidebar {
                    position: fixed;
                    top: 104px;
                    bottom: 0;
                    left: 0;
                    z-index: 1000;
                    display: block;
                    padding: 20px;
                    overflow-x: hidden;
                    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
                    background-color: #f5f5f5;
                    border-right: 1px solid #eee;
                }
            }
        </style>
    </head>
    <body>
        
        <header class="bg-dark text-white p-4 sticky-top">
            <div class="container-fluid">
                <h1>Start Time- 07:27 AM</h1>
            </div>
        </header>

        @yield('content')
        
    </body>
</html>