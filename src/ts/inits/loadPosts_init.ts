import fetch_init from "./fetch_init";

export default (loadBtn: HTMLButtonElement) => {
    const postsContainer = document.querySelector("#blog-posts-container");
    const loader = document.querySelector("#loader");
    loadBtn.addEventListener("click", async (e) => {
        e.preventDefault();
        loader.classList.toggle("loading");
        let page = loadBtn.dataset.page;

        let data = new FormData();
        data.append("action", "get_more_posts");
        data.append("page", page);
        console.log(data);

        let response: any = await fetch_init(data);
        loader.classList.toggle("loading");
        if (!response) return;

        postsContainer.innerHTML += response.html;
        if (response.isMore) {
            page = `${parseInt(page) + 1}`;
            loadBtn.dataset.page = page;
            return;
        }

        loadBtn.remove();
    });
};
