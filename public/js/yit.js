// const options = {
// 	method: 'GET',
// 	headers: {
// 		'X-RapidAPI-Key': '0667130f28mshd78e9373d331b82p12892djsnc626c1f0f926',
// 		'X-RapidAPI-Host': 'fake-identity-generation.p.rapidapi.com'
// 	}
// };

// fetch('https://fake-identity-generation.p.rapidapi.com/identity/person', options)
// 	.then(response => response.json())
// 	.then(response => console.log(response))
// 	.catch(err => console.error(err));

validate();
function validate() {
    if (document.myForm.email.value == "") {
        document.querySelector('.a').innerHTML = "Veuillez fournir votre email !";
        validate();
    }
    if (document.myForm.email.value !== "") {
        document.querySelector('.a').innerHTML = "";
    }
    if (document.myForm.password.value == "") {
        document.querySelector('.b').innerHTML = "Veuillez fournir votre mots de passe !";
        validate();
    }
    if (document.myForm.password.value !== "") {
        document.querySelector('.b').innerHTML = "";
    }
}