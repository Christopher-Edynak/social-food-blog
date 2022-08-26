var button = document.querySelector("#postJumpMenu");
var page = document.querySelector(".p-num > ul");
var pageMenu = document.querySelector(".p-num");

if(page.lastElementChild != null){
	if(page.lastElementChild.innerHTML.trim() > 1){
		enableBtn();
	}
}

button.addEventListener("click", function(event){
	event.preventDefault();
	event.stopPropagation();

  pageMenu.classList.toggle('display');

  document.onclick = function(e){
		e.stopPropagation();
		if(e.target !== button ){
			pageMenu.classList.remove("display");
		}
	}
});

function enableBtn(){
	button.disabled = false;
	button.classList.remove('disabled');
}

