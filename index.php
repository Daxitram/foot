<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style type="text/css"></style>
  </head>
  <body>
  	<select id="mySelect" onchange="myFunction(this.value)">
<option value="0" selected="selected">Default</option>
<option value="1" >4-4-2 (4 2-2 2)</option>
<option value="11">4-4-2 (4-4-2 losange)</option>
<option value="12">4-4-2 (4 3-1 2)</option>
<option value="14">4-3-3 (4 2-1 3)</option>
<option value="17">4-3-3 (4 3 2-1)</option>
<option value="2">4-3-3 (4 1-2 3)</option>
<option value="7">4-5-1 (4 2-3 1)</option>
<option value="10">4-5-1 (4 1-4 1)</option>
<option value="3">3-5-2 (3 3-2 2)</option>
<option value="16">3-5-2 (3 1-2-2 2)</option>
<option value="22">3-5-2 (3 2-2-1 2)</option>
<option value="18">3-4-3 (3 1-2-1 3)</option>
<option value="15">3-4-3 (3 4 1-2)</option>
<option value="23">3-4-3 (3 4 2-1)</option>
<option value="9">5-3-2 (5 1-2 2)</option>
<option value="21">5-3-2 (5 2-1 2)</option>
<option value="8">5-4-1</option>
</select>
<div id="compofoot" >
<div id="1" align="center" style="border-spacing: 5px 1rem;" hidden>
		<br><select><option>test</option></select><select><option>test</option></select>

	<br><select><option>test</option></select><select><option>test</option></select>

	<br><select><option>test</option></select><select><option>test</option></select>

	<br><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select>

	<br><select><option>test</option></select>
</div>

<div id="11" align="center" hidden>
	<br><select><option>test</option></select><select><option>test</option></select>

	<br><select><option>test</option></select>

	<br><select><option>test</option></select><select><option>test</option></select>

	<br><select><option>test</option></select>

	<br><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select>

	<br><select><option>test</option></select>
</div>
<div id="12" align="center" hidden>
	<br><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select>
</div>

<div id="14" align="center" hidden>
	<br><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select>
</div>

<div id="17" align="center" hidden>
	<br><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select>
</div>

<div id="2" align="center" hidden>
	<br><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select>
</div>

<div id="7" align="center" hidden>
	<br><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select>
</div>

<div id="10" align="center" hidden>
	<br><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select>
</div>

<div id="3" align="center" hidden>
	<br><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select>
</div>

<div id="16" align="center" hidden>
	<br><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select>
</div>

<div id="22" align="center" hidden>
	<br><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select>
</div>

<div id="18" align="center" hidden>
	<br><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select>
</div>

<div id="15" align="center" hidden>
	
	
	<br><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select>
</div>

<div id="23" align="center" hidden>
	<br><select><option>test</option></select>
	
	<br><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select>
</div>

<div id="9" align="center" hidden>
	<br><select><option>test</option></select><select><option>test</option></select>
	
	<br><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select>
</div>

<div id="21" align="center" hidden>
	<br><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select>
</div>

<div id="8" align="center" hidden>
	<br><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select><select><option>test</option></select>
	<br><select><option>test</option></select>
</div>
</div>

<p id="demo"></p>
<script>
function myFunction(valuee) {
  var x = document.getElementById("mySelect").value;
  document.getElementById("demo").innerHTML = "You selected: " + valuee;
  //document.getElementById("test").removeAttribute("hidden");

  	document.getElementById("1").setAttribute("hidden", true);
  	document.getElementById("11").setAttribute("hidden", true);
  	document.getElementById("12").setAttribute("hidden", true);
  	document.getElementById("14").setAttribute("hidden", true);
  	document.getElementById("17").setAttribute("hidden", true);
  	document.getElementById("2").setAttribute("hidden", true);
  	document.getElementById("7").setAttribute("hidden", true);
  	document.getElementById("10").setAttribute("hidden", true);
  	document.getElementById("3").setAttribute("hidden", true);
  	document.getElementById("16").setAttribute("hidden", true);
  	document.getElementById("22").setAttribute("hidden", true);
  	document.getElementById("18").setAttribute("hidden", true);
  	document.getElementById("15").setAttribute("hidden", true);
  	document.getElementById("23").setAttribute("hidden", true);
  	document.getElementById("9").setAttribute("hidden", true);
  	document.getElementById("21").setAttribute("hidden", true);
  	document.getElementById("8").setAttribute("hidden", true);

  	document.getElementById(valuee).removeAttribute("hidden");

}
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>