function limit(element){
	var maxChars = 9;
	if(element.value.length > maxChars){
		element.value = element.value.substr(0, maxChars);
	}
}