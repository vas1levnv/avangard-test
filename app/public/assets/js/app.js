document.addEventListener('DOMContentLoaded', () => {
	const header = document.querySelector('.header')
	const mobileMenu = document.querySelector('.mobile-menu')
	const headerToggler = document.querySelector('.header-btn')
	const body = document.querySelector('body')

	document.addEventListener('scroll', () => {
		window.pageYOffset > 0
			? header.classList.add('active')
			: header.classList.remove('active')
	})

	headerToggler.addEventListener('click', () => {
		headerToggler.classList.toggle('active')
		header.classList.toggle('active-background')
		mobileMenu.classList.toggle('active')
		body.classList.toggle('lock')
	})
})
