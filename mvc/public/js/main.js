window.addEventListener('load', () => {
	hideSideBar();
	// toggleLoginForm();
});

function hideSideBar(){
	var hide = document.querySelector('.aside-hide');
	var side_hide = document.querySelector('.side-arrow');

	side_hide.addEventListener('click', (e) => {
	
		hide.classList.toggle('side-bar-show');
		side_hide.classList.toggle('side-bar-show');

		if (side_hide.classList.contains('side-bar-show')) {
			side_hide.classList.toggle('side-arrow-left');
		} else{
			side_hide.classList.remove('side-arrow-left');
		}
	});
}
function toggleLoginForm(){
	var login = document.querySelector('.login');
	login.addEventListener('click', () => {
		login.style.transitionDelay = '2s';
		// login.style.overflow = 'visible';
		// login.style.height = 'inherit';
		login.classList.add('art-side-1');

		if (login.classList.contains('art-side-1')) {
			login.classList.toggle('login');
		}
	});

}