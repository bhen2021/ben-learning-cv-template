<!DOCTYPE html>
<html lang="en">
<title>cv-ben@youhq</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
a {
    text-decoration: none;
}
body {
    background-color: orange;
    }
.bottom-left {
    position: absolute;
    bottom: 30px;
    left: 25px;
    top: 250px;
    }
h2 {
    color: whitesmoke;
}
div.a {
    text-align: left;
    padding-left: 25px;
}
</style>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<div>
    <style>
    .grid-container {
        display: grid;
        grid-template-columns: 428px 877px;
        grid-template-rows: 1000px;
        grid-gap: 10px;
        background-color: orange;
        padding: 10px;
    }
    .grid-container > div {
        padding: 0px;
        background-color: grey;
        text-align:center;
        background-color: whitesmoke;
    }
    </style>

    <div class="grid-container">
        <!-- left column -->
        <div>
            <img src="bhen1.jpg" width="428" height="290" alt="master" >
            <div class="bottom-left"><h2>Bensor O. Datumanong</h2></div>
        </div>
        <!-- end left column -->
     

        <!-- right column -->
        <div></br>
            <div class="a">
            <h1><i class='fa fa-briefcase' style="font-size:36px"> Work Experience</i></h1>
            </div>
            <div class="a">
                <b>PHP Developer / Letscobo.com</b></br>
                <i class='far fa-calendar-alt'> Jan 2021 - Current</i></br>
                <?= $cvtemp['work1']; ?>
            </div>
            



        </div>
        <!-- right column -->    
        
        
        
        
        
    

    </div>


</div>

</body>

</html>