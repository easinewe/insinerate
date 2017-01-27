<? include 'insinerate_sql.php' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, user-scalable=0;">
<title>inSinerate | Online Rosary | Absolve Yourself of Sin Through Prayer or Charity</title>

<meta name="description" content="Absolve your sins quickly and anonymously with our Rosary App.  Find the right charity for your sin.">
<meta name="keywords" content="Rosary, Sin , Catholic Sin, Hail Mary, charities, charity finder, Catholic Guilt, Redemption from Sin, Absolution">
<meta name="author" content="Eamonn Fitzmaurice">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="js/formToWizard.js"></script>
<script src="js/jquery.knob.js"></script>

<link href='http://fonts.googleapis.com/css?family=Cinzel:400,700' rel='stylesheet' type='text/css'>
<link href="css/untitled.css" rel="stylesheet" type="text/css" />
<link href="css/magic.css" rel="stylesheet" type="text/css" />

<script>
$.fn.preload = function() {
    this.each(function(){
        $('<img/>')[0].src = this;
    });
}

$(['images/button_circle_off.png','images/button_circle.png','images/go_button_circle.png', 'images/go_button_circle.png','images/pray.png']).preload();
</script>


<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "061405b6-5ff2-4dda-a743-2b26474aef6e", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

</head>

<?php include_once("analyticstracking.php") ?>

<body>

<div id="heading">
    <h2>in<span class="red">Sin</span>erate</h2>
    
    <div class="linkedin">
        <span class='st_facebook'></span>
        <span class='st_twitter'></span>
        <span class='st_email'></span>
        <span class='st_fblike'></span>
    </div>
</div>

<div id="container">

	<div style="clear:both"></div>
    
    <div id="svg_holder"><? include 'rosary_svg.php' ?></div>
    
     <div id="big" class="demo" style="height:432px;width:100%">
    <input class="knob" data-min="0" data-max="40" data-width="432" data-height="432" data-thickness=".13" data-cursor=true data-displayInput=false data-fgColor="#FF0000" data-bgColor="#FFFFFF">
    </div>

    <div id="text_holder">
            
            
            <!--this input is always hidden and used to get the type of sin-->
            <input id="thesintype"  type="hidden" name="thesintype" value="0" />
            <!--end of hidden value-->
            
    
            <div id="main">
            
            <!--function at end will take care of submitting the data-->
            <form id="SinForm">
            <!--first window-->
            <fieldset>
            <h3><span class="steps">Step One</span></h3>
            <p class="questions">Bless me Father for I have sinned,<br>my last confession was...</p>
            <h1><span class="choose"><div id="choose_year">Select Year</div></span></h1>
            <input type="hidden" id="Year" name="Year" value="2000" />
            </fieldset>
    
            <!--submit becomes visible or invisible depending on the sin_type value-->
            <input type="submit" value=" " class="submit_sin_invisible" id="one"/>
            
            <!--second window-->
            <fieldset>
            <h3><span class="steps">Step Two</span></h3>
            <p class="questions"> <br>What sin have you committed?</p>
            <h1><span class="choose"><div id="choose_sin">Select Sin</div></span></h1>
            <input id="thesin" type="hidden" name="thesin" value="nothing chosen" />
            </fieldset>
            
    
            <fieldset>
            <h3><span class="steps">Step Three</span></h3>
            <p class="questions"> <br>Against whom have you sinned?</p>
            <h1><span class="choose"><div id="choose_victim">Select Victim</div></span></h1>
            <input id="victim" type="hidden" name="victim" value="Yourself"/>
            
            <!--submit-->
            
            <input type="submit" value=" " class="submit_sin"/>
            </form>
            </div>
    </div>
</div>

<div id="credit">inSinerate ©2013 | Developed by <a href="mailto:eamonnfizmaurice@gmail.com?Subject=iSinerate%20Website">eamonnfitzmaurice@gmail.com</a> | version 1.0</div>


	<audio id="hailMaryPrayer">
        <source src="resource/hailmary2.ogg" type="audio/ogg" />
        <source src="resource/hailmary2.mp3" type="audio/mpeg" />
        Sorry, your browser does not support HTML5 audio.
    </audio>


</body>



<script>



$(function() {

//create an array of years
var years = [];
for (var i = 2013; i >= 1953; i--) {
    years.push(i);
}

// create an array of sins
var sins = [
  'Adultery','Arrogance','Assault','Astrology','Birth Control','Blasphemy','Cheating','Covetousness','Cupidity','Defilement','Dishonesty','Dissension','Divorce','Envy','Greed','Haughtiness','Hyperbole','Idolatry','Impatience','Impure Thoughts','Lustfulness','Misogony','Murder','Narcissism','Onanism','Original','Polytheism','Premarital Sex','Pride','Prostitution','Sabbath Desacration','Sedition','Sloth','Suicide','Theft','Uncleanness','Unfaithfulness','Usury','Wickedness','Witchcraft','Wrathfulness',];

// create an array of sin identifiers

var sinType = [
  '1','0','1','0','0','0','1','1','1','1','1','1','1','1','0','1','0','0','1','1','1','0','1','0','0','0','0','1','0','1','0','1','0','0','1','0','1','1','1','1','1',];

var sinType2 = [
  'submit_sin_invisible','submit_sin','submit_sin_invisible','submit_sin','submit_sin','submit_sin','submit_sin_invisible','submit_sin_invisible','submit_sin_invisible','submit_sin_invisible','submit_sin_invisible','submit_sin_invisible','submit_sin_invisible','submit_sin_invisible','submit_sin','submit_sin_invisible','submit_sin','submit_sin','submit_sin_invisible','submit_sin_invisible','submit_sin_invisible','submit_sin','submit_sin_invisible','submit_sin','submit_sin','submit_sin','submit_sin','submit_sin_invisible','submit_sin','submit_sin_invisible','submit_sin','submit_sin_invisible','submit_sin','submit_sin','submit_sin_invisible','submit_sin','submit_sin_invisible','submit_sin_invisible','submit_sin_invisible','submit_sin_invisible','submit_sin_invisible',];


var victims = [
  'Aunt','Baby','Best Friend','Bishop','Boss','Boyfriend','Brother','Cat','Coach','Colleague','Criminal','Customer','Daughter','Employee','Father','Father-in-Law','Girlfriend','God','Grandma','Grandpa','Holy Spirit','Jesus Christ','Man’s Best Friend','Mayor','Mother','Mother-in-Law','Neighbor’s Husband','Neighbor’s Wife','Nun','Police Officer','Pope','President','Priest','Roomate','Sister','Son','Student','Teacher','Uncle','Waiter','Worst Enemy','Yourself',];

        
        

$(".knob").knob(
{change : function (value){

if ($('#step0').is(':visible')){
	$('#Year').val(years[value]);
	$('#choose_year').html(years[value]);
}

else  if ($('#step1').is(':visible')){
	$('#thesin').val(sins[value]);
	$('#thesintype').val(sinType[value]);
	$('#choose_sin').html(sins[value]);
	$('#one').removeClass('submit_sin_invisible').addClass(sinType2[value]);
}


else  if ($('#step2').is(':visible')){
	$('#victim').val(victims[value]);
	$('#choose_victim').html(victims[value]);
}

}});


})
</script>



<script type="text/javascript">
$(document).ready(function(){
$("#SinForm").formToWizard({ submitButton: 'SaveAccount' })
});
</script>

<script>
var i = 6;
var prev = 5;
function loopit(){
setTimeout(function () {
	//changing each to red
	$('#'+i).attr('fill', 'FF0000');
	//and then changing the one before it to white to make it look animated
	$('#'+prev).attr('fill', 'FFFFFF');
	i++;
	prev++;
	if (i < 62) {
	loopit();
	}
	//following will reset i for a continous loop
	else{
	i = 6;
	prev = 5;
	loopit();
	}
}, 40)}

//run the function when cross is clicked
$("#cross").click(function(){location.reload()});

</script>

	



<script>
var bead_int = 0;


playSong = function(){
var song = document.getElementsByTagName('audio')[0];
song.play();
};

var pulse = function(theNumber){
$('#'+theNumber).delay(200).fadeOut('slow').delay(200).fadeIn('slow');
};


function repeat(theBead,times) {
    for(var i = 0; i < times; i++) pulse(theBead);
	if (i = times) { $('#'+theBead).attr('fill', '#FFFFFF');}
}



//loop the audio every 14 seconds (14000) until stopPlaying is less than or equal to zero
function hail(stopPlaying){
	playSong();
	repeat(stopPlaying, 8);
	$(".theNumber").html(stopPlaying); //changing the central number as we descend
	stopPlaying--;
	if (stopPlaying <= 0) {
	clearTimeout(timer);
	$('#1').attr('fill', '#FFFFFF');
	//adding a delay which waits for the pulsating to end before changing the cross
	setTimeout(function (){
	$('#cross').attr('fill', '#76EE00');
	$(".theNumber").html('0');
	}, 15000);
	/*$('#cross').delay(14000).attr('fill', '#76EE00');*/
	}

	else {timer = setTimeout(function(){hail(stopPlaying);},15000)}
}
//continue loop changing bead colors until you hit the stop number
function bead_count(stopNum){
	$('#'+bead_int).attr('fill', '#FF0000'); bead_int++;
	//expanding the divs to fit text
	$('#text_holder').css('width','380');
	$('#text_holder').css('left','125px');
	$('#text_holder').css('top','196px');
	$('#main').css('width','380');
	//done expanding the divs

	if (bead_int > stopNum) {clearTimeout(timer)}
	else {timer = setTimeout(function(){bead_count(stopNum);},60)}
	}


function hideForm(){$("#main").fadeOut("slow");};
function showResult(){$("#main").fadeIn("slow");};
function replaceData(resultingdata){$("#main").html(resultingdata);};
function hideDial(){$("#big").fadeOut("slow");};

function pulsate() {
$("#pray-no").
animate({opacity: 0.2}, 1500, 'linear').
animate({opacity: 1}, 1500, 'linear', pulsate);
}

$(function(){
    $("#SinForm").submit(function(e){
       e.preventDefault();
 
        dataString = $("#SinForm").serialize();
        $.ajax({
        type: "POST",
		url: "submit_wiz_result.php",
        async:false,
		data: dataString,
		complete: function(){
				hideDial();
				$('#sinfinal').click();//forcing a click of the link in the ajax result to get the dial results
					},
		dataType: "html",
        success: function(data) {
		$("#main").html(data);
  		pulsate();
		},
		error: function(){alert("Sorry, I can't accept your answer.  Please try again.");}
           
        });         
         
    });
});


</script>


