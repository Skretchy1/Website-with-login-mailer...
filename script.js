window.onload = function(){
	//Cart box.
	const iconShopping = document.querySelector('.iconShopping');
	const cartCloseBtn = document.querySelector('.fa-close');
	const cartBox = document.querySelector('.cartBox');
	iconShopping.addEventListener("click",function(){
		cartBox.classList.add('active');
	});
	cartCloseBtn.addEventListener("click",function(){
		cartBox.classList.remove('active');
	});


	//Adding data to localstorage.
	const attToCartBtn = document.getElementsByClassName('attToCart');
	let items = [];
	for(let i=0; i<attToCartBtn.length; i++){
		attToCartBtn[i].addEventListener("click",function(e){
			if(typeof(Storage) !== 'undefined'){
				let item = {
						id:i+1, 
						name:e.target.parentElement.children[0].textContent,
						price:e.target.parentElement.children[1].children[0].textContent,
						no:1
					};
				if(JSON.parse(localStorage.getItem('items')) === null){
					items.push(item);
					localStorage.setItem("items",JSON.stringify(items));
					window.location.reload();
				}else{
					const localItems = JSON.parse(localStorage.getItem("items"));
					localItems.map(data=>{
						if(item.id == data.id){
							item.no = data.no + 1; 
						}else{
							items.push(data);
						}
					});
					items.push(item);
					localStorage.setItem('items',JSON.stringify(items));
					window.location.reload();
				}
			}else{
				alert('local storage is not working on your browser');
			}
		});
	}

	//Adding data to shopping cart.
	const iconShoppingP = document.querySelector('.iconShopping p');
	let no = 0;
	JSON.parse(localStorage.getItem('items')).map(data=>{
		no = no+data.no;	
    });
	iconShoppingP.innerHTML = no;
	
	
	//Adding cartbox data in a table.
	const cardBoxTable = cartBox.querySelector('table');
	let tableData = '';
	tableData += '<tr><th>P No.</th><th>Item Name</th><th>Item No.</th><th>Item Price</th><th></th></tr>';
	if(JSON.parse(localStorage.getItem('items'))[0] === null){
		tableData += '<tr><td colspan="5">No items found</td></tr>'
	}else{
		JSON.parse(localStorage.getItem('items')).map(data=>{
			tableData += '<tr><th>'+data.id+'</th><th>'+data.name+'</th><th>'+data.no+'</th><th>'+data.price+'</th><th><a href="#" onclick=Delete(this);>Delete</a></th></tr>';
		});
	}
	cardBoxTable.innerHTML = tableData;
    
}


//The action.
var today = new Date();
document.getElementById("example").innerHTML = today;

var d = new Date(2022, 3, 4);
document.getElementById("dateExp").innerHTML = d;
var timeDate = d - today;
document.getElementById("dateLeft").innerHTML=convert(timeDate)

// Time calculations for hours, minutes and seconds. We convert miliseconds in hours minutes and seconds.
function convert(timeDate){
    let hours,minutes,seconds;
    hours = Math.floor(timeDate/1000/60/60);
    minutes = Math.floor((timeDate/1000/60/60-hours)*60);
    seconds = Math.floor(((timeDate/1000/60/60-hours)*60-minutes)*60);
  
    if(timeDate>=0)
    return hours + " hours, " + minutes + " minutes and " + seconds + " seconds.";
    else return "Offer has finshed!";
}

function validDate() {
    let name = document.forms["newForm"]["name"].value;
    let lastname = document.forms["newForm"]["lastname"].value;
    let email = document.forms["newForm"]["email"].value;
    let phone = document.forms["newForm"]["phone"].value;
    let age =document.forms["newForm"]["age"].value;
    


    if (name == "") {
        alert("Please enter your name");
        return false;
    }
    
    if (lastname == "") {
        alert("Please enter your lastname");
        return false;
    }

    if(email.length <= 9) {
        alert("The minimal  length of email addresses are 9 characters")
        return false;
    } 
    
    if(email.length > 64) {
        alert("There is a length limit on email addresses. That limit is a maximum of 64 characters.")
        return false;
    }

    if (phone==""){
        alert("Please enter your phone number")
            return false;
    }

    if(age==""){
        alert("Please write your age")
            return false;
    }
    
}

function isNumber(evt) {
    evt = (evt) ? evt : window.event; //condition ? if (true) : if (false).
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

function calculator() {
    let package = document.forms["cena"]["type"].value;
    let quantity = document.forms["cena"]["quantity"].value;
    let price = package*quantity;
    let a = package*quantity*0.12;
    let total = price + a;
    
    
    if(package == 0) alert("Please select a package.")
    else alert("Your monthly cost is: € " + total);
    return false;
    
}



// $(document).ready(function(){
// 	$('#sproba').hide();
// 	$("#trigger1").hover(function(){
// 		$("#sproba").slideToggle("slow");
// 	});
// });
        