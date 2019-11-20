window.addEventListener('load', () => {

	var data = {
		fn: 'fetch_content'
	};
	makeAjaxReq('get', 'public/index.php', data);

	var input = document.querySelector('#search');
	input.addEventListener('keyup', (e) => {
		var res = e.target.value;
		var data = {
			fetched: res,
			fn: 'fetch_content'
		};
		makeAjaxReq('get', 'public/index.php', data);
		console.log(data);

	})
});

function makeAjaxReq(method, url, callback){
	var xhr = new XMLHttpRequest();
	// console.log(xhr);
	xhr.open(method, url);
	xhr.onreadystatechange = () =>{
		if (xhr.readyState === 4 && xhr.status === 200) {
			if (xhr.responseText == false) {
				var response = JSON.parse(xhr.responseText);
				showResult('results', response);
			console.log(response);
			}
		}
	}
	xhr.send();
}
function showResult(container, res){
	var cont = document.querySelector('#results');
	cont.innerHTML = '';
	for (var i = 0; i < res.length; i++) {
		var r = res[i];
		var	append_el = `
			<a href="#">${r.fetched}</a>
		`;
		cont.innerHTML == append_el;
		console.log(cont);
	}
}