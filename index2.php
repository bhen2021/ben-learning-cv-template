<!DOCTYPE html>
<html lang="en">
<title>cv-ben@youhq</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body,h1,h2,h3,h4,h5,h6,p,i {
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
}

a {
    text-decoration: none;
}
body {
    background-color: darkgray;
    }
.bottom-left {
    position: absolute;
    bottom: 30px;
    left: 25px;
    top: 250px;
    }
div.a {
    text-align: left;
    padding-left: 25px;
    margin: 20px;
}
hr.a {
    border-top: 1px solid lightgray;
    width: 92%;
    text-align: center;
}
hr.b {
    border: 5px solid grey;
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
        background-color: grey;
        padding: 10px;
    }
    .grid-container > div {
        padding: 0px;
        background-color: grey;
        text-align:center;
        background-color: whitesmoke;
    }
    </style>
    <!-- grid container -->
    <div class="grid-container">
        <!-- left column -->
        <div>
            <img src="bhen1.jpg" width="428" height="290" alt="master" >
            <div class="bottom-left" style="color:white";><h2>Bensor O. Datumanong</h2></div>
        </div>
        <!-- end left column -->
     




        <!-- right column -->
        <div></br>
            <div class="a">
            <h1><i class='fa fa-briefcase' style="font-size:30px;color:black;"></i> Work Experience</h1>
            </div>
            <div class="a">
                <b>PHP Developer / Letscobo.com</b></br>
                <i class='far fa-calendar-alt'> Jan 2021 - Current</i></br>
                <?= $cvtemp['work1']; ?>
            </div>
            <hr class="a">
            <div class="a">
                <b>Laboratory Custodian / Asian Institute of Cumputer Studies</b></br>
                <i class='far fa-calendar-alt'> Aug 2019 - June 2020</i></br>
                <?= $cvtemp['work2']; ?>
            </div>
            <hr class="a">
            <div class="a">
                <b>MIS Assistant / Asia Source College of Arts & Technology</b></br>
                <i class='far fa-calendar-alt'> Aug 2018 - June 2019</i></br>
                <?= $cvtemp['work3']; ?>
            </div>
            <hr class="a">
            <div class="a">
                <b>Student Assistant / Asian Institute of Cumputer Studies</b></br>
                <i class='far fa-calendar-alt'> Jun 2014 - June 2015</i></br>
                <?= $cvtemp['work4']; ?>
            </div></br>
            <hr class="b">
            



        </div>
        <!--end right column -->    
        
        
        
        
        
    

    </div>
    <!-- grid container -->

</div>

</body>

</html>