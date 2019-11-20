window.addEventListener('load', () => {
	makeAjaxRequest('get', 'http://localhost/as-project/mvc/public/json/main.json');
	bttnClick();

});

/*function for getting next image*/
function bttnClick(){
	var np = 1;

	var bttn = document.querySelector('.next-fam');
	bttn.addEventListener('click', () => {

		var row = document.querySelectorAll('.row-1');
		for (var n = 0; n < row.length; n++) {
			row[n].style.display = 'none';
		}
		np++;
		if (np > row.length) {
			np = 1;
		}
		row[np-1].style.display = 'block';

		/*postavi da na svaki klik svaki sledeci bude display block a prethodni dispaly none*/
	});
}
/*function where we making ajax req to get val from json*/
function makeAjaxRequest(method, url){

	var xhr = new XMLHttpRequest(); 
	xhr.open(method, url);
	xhr.onreadystatechange = () => {
		if (xhr.readyState === 4 && xhr.status === 200) {
			var response = JSON.parse(xhr.responseText);
			getCelebInfo(response);	
		}
	}
	xhr.send();
};
/*function for creating element for image*/
function getCelebInfo(data){
	var pic_list = document.querySelector('.main-div');
	pic_list.innerHTML = '';

	for (var i = 0; i < data.resp.length; i++) {
		var pic = data.resp[i];
			var d_el = `
			<div class="row-1">
				<img src="${pic.image}">
				<div class="row-1-f">
					<h1>${pic.name}</h1>
					<p class="h-sign">${pic.sign}</p>
					<p>${pic.birth}</p>
				</div>
			</div>
		`;
	pic_list.innerHTML += d_el;
	}
};
function toggle(){
	var drop = document.querySelector('.dropdown');
	console.log(drop);
}
