        save = function(){
            var list = document.querySelectorAll(`[type*="checkbox"]`);
            list.forEach( el => {
                localStorage.setItem(el.id, el.checked);
                console.log(el.id,el.checked);

            })
	        window.alert("保存到!");
        }
        
         var list = document.querySelectorAll(`[type*="checkbox"]`);
            list.forEach( el => {
            var checked = JSON.parse(localStorage.getItem(el.id));
            document.getElementById(el.id).checked = checked;
            });


		function jump(h){
		    var top = document.getElementById(h).offsetTop;
		    window.scrollTo(0, top + (window.innerHeight / 2 ));
		}


		function hide(){
            var list = document.querySelectorAll(`[type*="checkbox"]`);
            list.forEach( el => {
			if (el.checked) {
				var temp = 'label[for=' + '"' + el.id + '"' + ']';
				var element = document.querySelector(temp);
				element.style.display = "none";
				AOS.refresh()
				}
		})
		}
		
		function show(){
            var list = document.querySelectorAll(`[type*="checkbox"]`);
            list.forEach( el => {
				var temp = 'label[for=' + '"' + el.id + '"' + ']';
				var element = document.querySelector(temp);
				element.style.display = "block";
				AOS.refresh()
		})
		}

