export default () => {
    const loadBtn = document.querySelector('#more-posts') as HTMLButtonElement;

    if(!loadBtn) return;

    import('../inits/loadPosts_init').then(module=> {
        const loadPosts_init = module.default;

        loadPosts_init(loadBtn);
    })
}