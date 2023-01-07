function showPopup(element){
    
    if(element.style.visibility == 'visible'){ 
        element.style.visibility = 'hidden';
	    element.classList.remove('active');
    }
    else{
        element.style.visibility = 'visible';
        element.classList.add('active'); 
    }
}