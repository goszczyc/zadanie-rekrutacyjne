export default (header) => {
    window.addEventListener("scroll", (e) => {
        if(window.scrollY > 10) {
			header.classList.add('pt-2')
			header.classList.add('pb-2')
		} else {
			header.classList.remove('pt-2')
			header.classList.remove('pb-2')
		}
    });
};
