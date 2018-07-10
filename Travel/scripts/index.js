var idx=1;
slider();

function slider(){
	var x=document.getElementsByClassName("slides");
	for(var i=0;i<x.length;i++){
		x[i].style.display="none";
	}
	idx++;
	if(idx>x.length)
		idx=1;
	x[idx-1].style.display="block";
	setTimeout(slider,3000);
}