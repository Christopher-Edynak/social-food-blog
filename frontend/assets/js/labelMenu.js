var button    = document.querySelector("#labelMenu");
var labelMenu = document.querySelector(".label-menu");

button.addEventListener("click", function(event){
  event.stopPropagation();
    labelMenu.classList.toggle("display");
    var newLabel = document.querySelector("#newLabel");


    newLabel.addEventListener("click", function(event){
      var checkBox = document.querySelectorAll(".postCheckBox");
      var array = new Array();
      
      checkBox.forEach(function(el){
        if(el.checked){
                  array.push(el.value);
        }
      });

      if(array.length > 0){
        var newLabelValue = prompt("Enter the new label");

        if(newLabelValue != null || newLabelValue != ''){
          var regex  = /^[a-z0-9]+/i;
          var label  = newLabelValue.match(regex);


				  if(label !== null){
					//Ajax request
          alert('its working');       
          }
        }
      }else{
        alert("No posts are selected!");
        location.reload(true);
      }
    });
    
    document.onclick = function(e){
      e.stopPropagation();
		if(e.target !== button && e.target.className !== "label-menu"){
			labelMenu.classList.remove("display");
		}
	}
});
