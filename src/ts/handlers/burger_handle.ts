export default ()=> {
    const burger = document.querySelector('#burger');
    const burgerMenu = document.querySelector('#burger-menu');

    if(!burger || !burgerMenu) return;

    import('../inits/burger_init').then(module => {
        const burger_init = module.default;

        burger_init(burger, burgerMenu);
    })
}