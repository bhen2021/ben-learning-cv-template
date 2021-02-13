<!DOCTYPE html>
<html lang="en">
<title>cv-ben@youhq</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body,h1,h2,h3,h4,h5,h6,p,i {
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', 'Geneva', 'Verdana', 'sans-serif'
}
a {
    text-decoration: none;
    
}
body {
    background-color: lightgray;
}
/* nameinimgbhen */
.bottom-left {
    position: absolute;
    bottom: 30px;
    left: 90px;
    top: 240px;
}
div.a {
    text-align: left;
    padding-left: 25px;
    margin: 20px;
}
div.b {
    text-align: center;


}
hr.a {
    border-top: 1px solid gray;
    width: 92%;
    text-align: center;
}
hr.b {
    border: 8px solid lightgray;
}
.grid-container {
  display: grid;
  grid-template-columns: 445px 900px;
  grid-template-rows: 1130px;
  grid-gap: 18px;
  background-color: lightgray;
  padding: 10px;
  padding-left: 68px;
  padding-top: 8px;
}


.grid-container > div {
    text-align: center;
    background-color: white;
}


</style>

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>

    
    <!-- main grid container -->
    <div class="grid-container">
    

        <!-- left column -->
        <div>
            <img src="imgbhenn.jpg" width="445" height="290" alt="master" >
            <div class="bottom-left" style="color:white";><h2>Bensor O. Datumanong</h2></div></br>
            <div class="a">
                <p><i class='fa fa-briefcase' style="font-size:18px;color:black;padding-top:20;padding-right:15px"></i>I.T. at Letscobo.com</p></div>
            <div class="a">
                <p><i class='fas fa-home' style="font-size:18px;color:black;padding-top:20;padding-right:15px"></i>Arayat Pampanga, PHIL.</p></div>
            <div class="a">
                <p><i class='fa fa-envelope' style="font-size:18px;color:black;padding-top:20;padding-right:15px"></i>Ben@youhq.co</p></div>
            <div class="a">
                <p><i class='fa fa-phone' style="font-size:18px;color:black;padding-top:20;padding-right:15px"></i>09307446988</p></div>
            <hr class="a" style="width:350px">
            <div class="a">
            <h3><i class='fa fa-asterisk' style="font-size:20px;color:black;padding-top:20;padding-right:15px;"></i>Soft Skills</h3></div>

            <div class="a">
            <p>PHP</p>

            <p>Wordpress</p>

            <p>Interserver</p>

            <p>Photoshop</p>

            <p>CSSDigital Marketing</p>

            <p>Employee Attendance Monitoring System</p>

            <p>Lan Network Setup</p>

            <p>System Unit Repair</p>

            <p>Computer Laboratory Setup and Maintenance</p>
            </div>


        </div>
        <!-- end left column -->
     



        
        <!-- right column  -->
        <div></br>

            <!-- work expi -->
            <div class="a">
            <h1><i class='fa fa-briefcase' style="font-size:30px;color:black;padding-right:10px"></i> Work Experience</h1>
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
            <!-- end work exp -->

            <!-- educational --> 
            <div class="a">
            <h1><i class='fa fa-certificate' style="font-size:30px;color:black;padding-top:30px;padding-right:10px"></i> Educational</h1>
            </div>
            <div class="a">
                <b>Asian Institute of Cumputer Studies</b></br>
                <i class='far fa-calendar-alt'> 2014 - 2018</i></br>
                <?= $cvtemp1['educa1']; ?>
            </div>
            <hr class="a">
            <div class="a">
                <b>Maria Tinga Natinal High School</b></br>
                <i class='far fa-calendar-alt'> 2010 - 2014</i></br>
                <?= $cvtemp1['educa2']; ?>
            </div>
            <hr class="a">
            <div class="a">
                <b>Maharlika Elementary Shool</b></br>
                <i class='far fa-calendar-alt'> Jan 2004 - 2010</i></br>
                <?= $cvtemp1['educa3']; ?>
            </div></br>
            <!--end educational -->  

        </div>  
        <!-- end right column -->
    </div>
    
    <!-- end main grid container -->  
<div class="b">

<footer style="background-color: grey;padding-bottom:13px"></br>
<a href="https://www.facebook.com/" class="fa fa-facebook" style="color: black"></a>
<a href="https://twitter.com/" class="fa fa-twitter" style="color: black"></a>
<a href="https://www.google.com/" class="fa fa-google" style="color: black"></a>
<a href="https://www.linkedin.com/" class="fa fa-linkedin" style="color: black"></a>
<a href="https://www.youtube.com/" class="fa fa-youtube" style="color: black"></a>
<a href="https://www.instagram.com/" class="fa fa-instagram" style="color: black"></a>
<a href="https://www.pinterest.ph" class="fa fa-pinterest" style="color: black"></a>
<a href="https://www.snapchat.com" class="fa fa-snapchat-ghost" style="color: black"></a>

</br><p>Powered by:<a href="https://www.letscobo.com/" target="_blank" style="color:black;"> <strong>Letscobo.com</a></strong></p>
</footer>
</div>
</body>

</html>
