 function validation()
 {
     var form = document.getElementById("form");
     var email= document.getElementById("email").value;
     var text = document.getElementById("text0");
     var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

     if(email.match(pattern))
     {
         form.classList.add("valid");
         form.classList.remove("invalid");
         text.innerHTML ="Your Email Address in Valid";
         text.style.color ="#00ff00";
     }
     else
     {
         form.classList.remove("valid");
         form.classList.add("invalid");
         text.innerHTML ="Please Enter Valid Email Address";
         text.style.color ="#ff0000";
     }

          if(email == "")
     {
         form.classList.remove("valid");
         form.classList.remove("invalid");
         text.innerHTML ="";
         text.style.color ="#00ff00";
     }
 }


const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});
