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
                    <input id="slider1" class="slider" onchange="slider()" type="range" min="50" max="100" step="25" value="100">
                                <?php 
                                    require_once( "src/modules/amount.php"); 
                                    require_once( "src/modules/boardcustom.php"); 
                                ?>
                    </div>
                        <div class="topbar-separater"></div>
                    </div>
                </div>
            </div>
            <div class="side">
                <div class="sidebar-wrapper">
                    <button class="hide-side" onclick="toggleSide() "><i class="fas fa-chevron-left" id="fas fa-chevron-left" style="display:block;"></i><i class="fas fa-chevron-right" id="fas fa-chevron-right" style="display:none;"></i></button>
                    <div class="sidebar-container" id="sidebar-container" style="display:block;">
                        <div class="category-wrapper">
                            <div class="category-container">
                                <?php 
                                    require_once( "src/modules/category.php"); 
                                ?>
                            </div>
                        </div>
                        <div class="export-wrapper">
                            <div class="export-container">
                                <?php 
                                    require_once( "src/modules/export.php"); 
                                ?>
                            </div>
                        </div>
                        <div class="sidebar-separater"></div>
                    </div>
                </div>
            </div>
            <div class="board">
                <div class="board-wrapper">
                    <div class="board-container" id="board-container">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script type="text/javascript" language="javascript" src="./html2canvas.min.js">
    </script>
    <script type="text/javascript" language="javascript" src="./jquery.plugin.html2canvas.js">
    </script>
    <script>
        const saveCanvas = async () => {

            var img = ""

            $('#board-container').html2canvas({
                onrendered: function (canvas) {
                    img = canvas.toDataURL();

                    download();
                }
            })

            const download = () => {
                var a = document.createElement('a');
                a.href = img;
                a.download = 'download';

                console.log(a)

                a.click();
            }
        }

        function toggleSide() {
            var x = document.getElementById("fas fa-chevron-left");
            var y = document.getElementById("fas fa-chevron-right");
            var s = document.getElementById("sidebar-container");
            var e = document.getElementById("board-container");


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
                e.style.width = "80%"
            } else {
                s.style.display = "none";
                e.style.width = "100%"
            }
        }

        slider = () => {
                console.log(document.getElementById("slider1").value);
                if(document.getElementById("slider1").value == 75){
                    $('.scale').not($(this)).removeClass('scaled50')
                    $('.scale').not($(this)).addClass('scaled75')
                }else if(document.getElementById("slider1").value == 50){
                    $('.scale').not($(this)).removeClass('scaled75')
                    $('.scale').not($(this)).addClass('scaled50')
                }else if(document.getElementById("slider1").value == 100){
                    $('.scale').not($(this)).removeClass('scaled75')
                    $('.scale').not($(this)).removeClass('scaled50')
                    $('.scale').not($(this)).addClass('scaled100')
                }
        }
    </script>
</body>

</html>