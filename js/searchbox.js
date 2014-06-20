function changeLength(){
	var searchbox=document.getElementById("s");
	searchbox.onmouseover=function(){this.style.width="150px";};
	searchbox.onmouseout=function(){this.style.width="100px";};
}

changeLength();
