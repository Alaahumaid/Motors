<!DOCTYPE html>
<title>test</title>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Robot Control</h1>
    <form method="POST" action= new.php>
        <div class="slideContainer">
            <h3>Motor 1</h3>
            <div class="range">
                <input type="range" min="0" max="180" value="0" class="slider" id="myrange1" name="v1">
                <p>Value: <span id="value1"></span></p>
                <br>
            </div>

            <h3>Motor 2</h3>
            <div class="range">
                <input type="range" min="0" max="180" value="0" class="slider" id="myrange2" name="v2">
                <p>Value: <span id="value2"></span></p>
            </div>
            <br>

            <h3>Motor 3</h3>
            <div class="range">
                <input type="range" min="0" max="180" value="0" class="slider" id="myrange3" name="v3">
                <p>Value: <span id="value3"></span></p>
            </div>
            <br>

            <h3>Motor 4</h3>
            <div class="range">
                <input type="range" min="0" max="180" value="0" class="slider" id="myrange4" name="v4">
                <p>Value: <span id="value4"></span></p>
            </div>
            <br>

            <h3>Motor 5</h3>
            <div class="range">
                <input type="range" min="0" max="180" value="0" class="slider" id="myrange5" name="v5">
                <p>Value: <span id="value5"></span></p>
                <br>
            </div>

            <h3>Motor 6</h3>
            <div class="range">
                <input type="range" min="0" max="180" value="0" class="slider" id="myrange6" name="v6">
                <p>Value: <span id="value6"></span></p>
            </div>
            <br>
            <div>
            
        <input type="submit" name="Run" Value="Run" style="font-size: 25px; background: rgb(39, 174, 228)">

            <br>
 <input type="submit" name="Save" value="Save" style="font-size: 25px; background: green">
            </div>

            
            <?php


?>
        </div>
    </form>
</body>
<script src="alaa.js"></script>
</html>