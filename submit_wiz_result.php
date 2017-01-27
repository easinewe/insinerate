<? include 'insinerate_sql.php' ?>

<?
$year = $_POST[Year];
$sin = $_POST[thesin];
$victim = $_POST[victim];

		$sql_1 = "SELECT * FROM `sins` WHERE sin_name = '$sin'";
        $result = mysql_query($sql_1);
		while ( $article = mysql_fetch_array($result) ){ 
		$sin_plain = $article['sin_plain'];
		$sin_points = $article['sin_points'];
		$sin_charity = $article['sin_charity'];
		$charity_plain = $article['charity_plain'];}

		
		$sql_2 = "SELECT * FROM `victims` WHERE name = '$victim'";
        $result_2 = mysql_query($sql_2);
		while ( $article = mysql_fetch_array($result_2) ){ 
		$points = $article['points'];
		$theVictim = $article['name_gram'];}

		$total = round ($points*$sin_points); //we are rounding the number since we are working with decimal values
		
		$bead_limit = $sin_points;
		
		
?>
        <h3><span class="steps">Penance</span></h3>

        <p class="questions">As penance for <? echo $sin_plain ?> <? echo $theVictim ?> please say</p>
        
        <h2><span class="theNumber, choose"><? echo $total; ?> Hail Mary's</a></span></h2>
        
        <p class="charity">Or give to this sin suggested charity:<br>
        <a href="<? echo $sin_charity ?> "><? echo $charity_plain ?></a></p>
        
        

                

		<a href="#" id="pray" onClick="hail(<? echo $total ?>);"><img src="images/prayon.png" /></a>

		<a href="#" id="sinfinal" onClick="bead_count(<? echo $total?>);"></a>
