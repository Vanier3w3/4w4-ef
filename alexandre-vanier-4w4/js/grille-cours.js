(function(){
	let cours = document.querySelectorAll(".typeCours")
	console.log(cours)
	cours.addEventListener('mousedown', function() {
		for(const element of cours){
			console.log(element)
		}
	})
}())	