<!DOCTYPE html>
<html lang="en">

<head>
    <title>SportApp</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, viewport-fit=cover">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel='stylesheet' type='text/css' href='style/style.css'>
</head>

<body>
    <div class="main-wrapper">
        <div class="main-container">
        <div class="top">
                <div class="topbar-wrapper">
                    <div class="topbar-container">
                        <div class="topbar-separater"></div>
                    </div>
                </div>
            </div>  
                <div class="side">
                    <div class="sidebar-wrapper">
                    <button class="hide-side" onclick="toggleSide() "><i class="fas fa-chevron-left" id="fas fa-chevron-left" style="display:block;"></i><i class="fas fa-chevron-right" id="fas fa-chevron-right" style="display:none;"></i></button>
                            <div class="sidebar-container" id="sidebar-container" style="display:block;">
                                <div class="sidebar-separater"></div>
                            </div>
                    </div>
                </div>
                <div class="board">
                    <div class="board-wrapper">
                        <div class="board-container">

                        </div>
                    </div>
                </div>
            </div>                  
        </div>
    </div>

</body>

</html>

<script>
    function toggleSide() {
        var x = document.getElementById("fas fa-chevron-left");
        var y = document.getElementById("fas fa-chevron-right");
        var s = document.getElementById("sidebar-container");


        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }

        if (y.style.display === "none") {
            y.style.display = "block";
        } else {
            y.style.display = "none";
        }

        if (s.style.display === "none") {
            s.style.display = "block";
        } else {
            s.style.display = "none";
        }
    }
</script>