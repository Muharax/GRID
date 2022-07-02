<script src="jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" >


<div class="first"></div>


<div id="mod" style="transform: translate(0px, 0px)">
	<div class="wrapper">
	  <div class="grid">
		<div class="row">
		  <div class="cell"><div class="wew">ALE</div></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		</div>
		<div class="row">
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		</div>
		<div class="row">
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		</div>
		<div class="row">
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		</div>
		<div class="row">
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		</div>
		<div class="row">
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		</div>
		<div class="row">
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		</div>
		<div class="row">
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		</div>
		<div class="row">
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		</div>
		<div class="row">
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		  <div class="cell"></div>
		</div>
	  </div>
	</div>
</div>

<script>
dragElement(document.getElementById("mod"));

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
 
    elmnt.onmousedown = dragMouseDown;


  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
	z = parseInt($('#mod').css('transform').split(',')[4]);
	x = parseInt($('#mod').css('transform').split(',')[5]);
	y = (x - pos2) + "px";
	x = (z - pos1) + "px";
	
	
	document.getElementById("mod").style.transform = "translate("+x+","+y+")";
	console.log(x);
	console.log(y);
    
  }

  function closeDragElement() {
    document.onmouseup = null;
    document.onmousemove = null;
  }
}

</script>