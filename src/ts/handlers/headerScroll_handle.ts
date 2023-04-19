export default () => {
    const header = document.querySelector('.header');

    if(!header) return;

    import('../inits/headerScroll_init').then(module => {
        const headerScroll_init = module.default;

        headerScroll_init(header);
    })
}