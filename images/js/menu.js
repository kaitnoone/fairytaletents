	var currentDropDown = -1;
	
	function about_dropdown(){
		clear_dropdowns()
		if(currentDropDown != 1){
			document.getElementById("menu_dropdown").style.height='5px';
			document.getElementById("associations_menu").style.display = "block";
			currentDropDown = 1;
			y=20;
			menu_fadeIn();
		}		
	}
	
	function services_dropdown(){
		clear_dropdowns()
		if(currentDropDown != 1){
			document.getElementById("menu_dropdown").style.height='5px';
			document.getElementById("services_menu").style.display = "block";
			currentDropDown = 1;
			y=20;
			menu_fadeIn();
		}		
	}
	
	function clear_dropdowns(){
		if(currentDropDown == 1){
			document.getElementById("services_menu").style.display = "none";
			document.getElementById("associations_menu").style.display = "none";
			currentDropDown = -1;
		}
		//menu_fadeOut();
	}
	
	function fade_services_dropdown(){
		currentDropDown = -1;
		//fadeOut();
	}
	var y=20;
	
	function menu_fadeIn() {
		document.getElementById("menu_dropdown").style.height=y+'px';
		if(y>100) { 
			clearTimeout(t);
			return;
		}
		y=y + 10;
		t=setTimeout('menu_fadeIn()',10); 
	}
	
	function menu_fadeOut() {
		if(y<=20) { 
			clearTimeout(t);
			y=20;
			document.getElementById("services_menu").style.display = "none";
			currentDropDown = -1;
			return;
		}
		y=y-10;
		t=setTimeout('menu_fadeOut()',30); 
	}
