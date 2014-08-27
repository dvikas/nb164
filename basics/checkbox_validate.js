function validate() 
{
	var oHobbies = document.getElementsByName('hobbies[]');

	var count  = 0;
	
	for(var i=0 ; i < oHobbies.length ; i++){
		
		if(oHobbies[i].checked == true){
			count++;
		}
	}
	
	if(count < 2){
		alert("Please select any 2 Hobbies");		
		return false;
	} 
}
