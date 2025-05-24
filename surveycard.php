<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="surveycard.css">
	<title>Survey Card</title>
</head>
<body>

	<header>
			<div class="logo"><h1>Short Sell Carbon</h1> </div>
	</header>


<section>
	<h1>Flight</h1>
	<h3>What is the average distance you travel using flight ?</h3>
	<input type="" name="" size="" id="flight">

<select id="air">
    
    <option value="mile">Mile</option>
    <option value="km">Km</option>
    
</select>
<select id="airtime">
    
    <option value="daily">Daily</option>
    <option value="week">Week</option>
    <option value="month">Monthly</option>
    <option value="yearly">Yearly</option>
    
</select>
  <!-- <button>Skip</button> -->
</section>



<section>
	<h1>Train</h1>
	<h3>What is the average distance you travel using train ?</h3>
	<input type="" name="" id="train">

<select id="air">
    
    <option value="mile">Mile</option>
    <option value="km">Km</option>
    
</select>

<select id="railtime">
    
    <option value="daily">Daily</option>
    <option value="week">Week</option>
    <option value="month">Monthly</option>
    <option value="yearly">Yearly</option>
    
</select>
  <!-- <button>Skip</button> -->
</section>




<section>
	<h1>Gasoline/Petrol</h1>
	<h3>What is the average amount of gasoline or petrol you consume ?</h3>
	<input type="" name="" id="gas">

	<select id="gasvolume">
    
    <option value="litre">Litre</option>
    <option value="gallon">Gallon</option>
    
</select>

<select id="gaso">
    
    <option value="daily">Daily</option>
    <option value="week">Week</option>
    <option value="month">Monthly</option>
    <option value="yearly">Yearly</option>
    
</select>
  <!-- <button>Skip</button> -->
</section>



<section>
	<h1>Source of Electricity</h1>
	<h3>What is the source of your electricity production ?</h3>
	<!-- <input type="" name="" id="electric_production"> -->

<select id="electprod">
    
    <option value="coal">Coal</option>
    <option value="natural gas">Natural Gas</option>
    <option value="oil">Oil</option>
    
</select>
  <!-- <button>Skip</button> -->
</section>




<section>
	<h1>Electricity Usage</h1>
	<h3>What is the average unit of electricity you consume ?</h3>
	<input type="" name="" id="electricity_usage">

<select id="electusage">
    
     <option value="daily">Daily</option>
    <option value="week">Week</option>
    <option value="month">Monthly</option>
    <option value="yearly">Yearly</option>
    
</select>
  <!-- <button>Skip</button> -->
</section>




<section>
	<h1>Chicken Meat</h1>
	<h3>What is the average amount of chicken meat do you consume ?</h3>
	<input type="" name="" id="chicken">

<select id="chick">
    
    <option value="kg">Kg</option>
    <option value="g">gram</option>
    
</select>


<select id="chicktime">
    
     <option value="daily">Daily</option>
    <option value="week">Week</option>
    <option value="month">Monthly</option>
    <option value="yearly">Yearly</option>
    
</select>



  <!-- <button>Skip</button> -->
</section>




<section>
	<h1>Red Meat</h1>
	<h3>What is the average amount of red meat do you consume ?</h3>
	<input type="number" name="" id="red_meat">

<select id="meat_red">
    
    <option value="kg">Kg</option>
    <option value="g">gram</option>
    
</select>


<select id="redmeattime">
    
     <option value="daily">Daily</option>
    <option value="week">Week</option>
    <option value="monthly">Monthly</option>
    <option value="yearly">Yearly</option>
    
</select>

  <!-- <button>Skip</button> -->
</section>
<br>
<br>
<br>



<button onclick="submit_survey()">Submit</button>

<script type="text/javascript">
	function submit_survey()
	{
		   var f = document.getElementById('flight').value;
		   alert(f);
   		location.href = "submitsurvey.html";
   	
	}






</script>
</body>
</html>