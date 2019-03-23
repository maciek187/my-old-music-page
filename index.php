<html>
<style>
body {
    background: gray;
}
table, th {
    border: 3px solid white;
    border-spacing: 10px;
    background-color: #000000;
    background: rgba(100, 100, 100, 0.2);
    color: white;
    border-radius: 25px;
    padding: 15px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19), 0 5px 5px 0 rgba(0,0,0,0.5),0 5px 5px 0 rgba(0,0,0,0.5);
    width: 45%;
}
td {
    font-size: 30px;
}
hr {
    border-width: 4px;
}
a {
    color: white;
}
</style>
<body>
<font size="20px">
<?php
$file=@fopen("count.dat","r+");
fscanf($file,"%d",$count);
$count++;
rewind($file);
fputs($file,$count);
fclose($file);
echo $count;
?>

<hr>
<br>

<table align="center" background-color="black" color="white">

    <tr><td>Dubstep</td></tr>
    <tr>
        <th>
		<h2>Like I always wanted</h2>
		<audio controls>
			<source src="Dj-EmcK - Like I always wanted.wav" type="audio/wav">
		</audio>
        </th>
    </tr>

    <tr>
        <th>
		<h2>I'm doing just fine</h2>
		<audio controls>
			<source src="Dj-EmcK - I'm doing just fine.wav" type="audio/wav">
	    	</audio>
        </th>
    </tr>

</table>
<br>
<table align="center">

    <tr><td>EDM</td></tr>
    <tr>
        <th>	
		<h2>Still love you</h2>
            	<audio controls>
			<source src="Dj-EmcK - Still love you.wav" type="audio/wav">
	    	</audio>
        </th>
    </tr>

    <tr>
        <th>
		<h2>Funny Guy</h2>
            	<audio controls>
			<source src="Dj-EmcK - FunnyGuy.wav" type="audio/wav">
	    	</audio>
        </th>
    </tr>

</table>

</font>
</body>
</html>
