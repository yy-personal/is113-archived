// DO NOT CHANGE THIS CODE

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

function setEmptyImage(cell){
    cell.innerHTML= "<img src='empty.png'/>";
}

function setErrorImage(cell){
    cell.innerHTML= "<img src='red_X.png'/>";
}

function setMarioImage(cell){
    cell.innerHTML= "<img src='mario.png'/>";
}

async function animation() {
	var hiddenpath = document.getElementById("hiddenpath");
	var pathstring=hiddenpath.getAttribute("value");
	console.log("PATH:" + pathstring);
	var motionbox = document.getElementById("motion");
	if (pathstring.length==0){
		return;
	}
	if (pathstring =="-1"){
		motionbox.innerHTML="NO FEASIBLE PATH!";
		return;
    }
	
	console.log("Animation is coming!");
	var tab = document.getElementById("mazetable");
	
	var startX=null;
	var startY=null;
	var endX=null;
	var endY=null;
	
	for (var i = 0, row; row = tab.rows[i]; i++) {
		for (var j = 0, col; col = row.cells[j]; j++) {
            console.log("Visit "+ i+" "+j+" "+col.firstChild.src);
			if (col.firstChild.src.indexOf("mario.png")>=0){
				startX=i;
                startY=j;   
			}else if (col.firstChild.src.indexOf("end.png")>=0){
				endX=i;
				endY=j;
			}
   		}  
	}
	
	console.log("START: " + startX+ " " + startY);
    console.log("END: " + endX + " " + endY);

    var error=false;
  
	for (i=0;i<pathstring.length;i++){
		var action =  pathstring[i];
		var nextX = startX;
		var nextY = startY;

		if (action == 'U'){
			motionbox.innerHTML="Up";
			nextX-=1;
		}else if (action =='D'){
			motionbox.innerHTML="Down";
			nextX+=1;
		}else if (action =='L'){
			motionbox.innerHTML="Left";
			nextY-=1;
		}else if (action =='R'){
			motionbox.innerHTML="Right";
			nextY+=1;
		}
		
		if (!(0<=nextX && nextX < tab.rows.length && 0<= nextY && nextY < tab.rows[0].cells.length )) {
			console.log("ERROR: out of maze!");
			motionbox.innerHTML="Error";
			console.log("ERROR: change of "+startX+" "+startY);
			setMarioImage(tab.rows[startX].cells[startY]);
			error=true;
			break;
		} else if (tab.rows[nextX].cells[nextY].firstChild.src.indexOf("obstacle.png")>=0){
			console.log("ERROR: pass through a rock!");
			motionbox.innerHTML="Error";
			console.log("ERROR: change of "+nextX+" "+nextY);
			setErrorImage(tab.rows[nextX].cells[nextY]);
			error=true;
			break;
		} else{	
            await sleep(500); // sleep here
            console.log("UPDATE to empty: "+startX+" "+startY);
            setEmptyImage(tab.rows[startX].cells[startY]);
            startX=nextX;
			startY=nextY;
			setMarioImage(tab.rows[startX].cells[startY]);
            console.log("UPDATE to mario: "+startX+" "+startY);
		}
	}

	if (!error && !(startX ==endX && startY ==endY )){
		console.log("ERROR: last cell is not the destination!");
		motionbox.innerHTML="Error";
		console.log("ERROR: change of "+startX+" "+startY);
		setErrorImage(tab.rows[startX].cells[startY]);
		error=true;
	}
	var result = document.getElementById("result");

	if (!error){
		setMarioImage(tab.rows[startX].cells[startY]);
		result.innerHTML="SUCCESSFUL!";
		result.style.color="green";
	}
	else{
		result.innerHTML="FAILED!";
		result.style.color="red";
	}
}