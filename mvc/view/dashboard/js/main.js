window.addEventListener('load', () => {

	disInfo();
});
function disInfo(){

	var dis_u = document.querySelectorAll('.display-user');
	var dis_e = document.querySelectorAll('.exit-btn');

	var rep_btn = document.querySelectorAll('.published-bys');
	for (let i = 0; i < rep_btn.length; i++) {
		rep_btn[i].addEventListener('click', (e) =>{
			// alert(i);
			// var e_trg = e.target;
			var dis_b = document.querySelectorAll('.display-blur');
			for (let u = 0; u < dis_b.length; u++) {
				dis_b[u].addEventListener('load', () => {
					alert(u);
				})
				dis_b[i].style.display = 'block';
			}
			dis_e[i].style.display = 'block';

			var ex_btn = document.querySelectorAll('.exit-btn');
			for (let u = 0; u < ex_btn.length; u++) {
				ex_btn[u].addEventListener('click', () => {
					ex_btn[i].style.display = 'none';
					dis_b[i].style.display = 'none';
					dis_u.style.display = 'none';
				})
			}
		});
	}
}