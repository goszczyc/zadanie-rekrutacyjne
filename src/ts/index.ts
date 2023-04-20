import headerScroll_handle from "./handlers/headerScroll_handle";
import burger_handle from "./handlers/burger_handle";
import loadPosts_handle from "./handlers/loadPosts_handle";

document.addEventListener("DOMContentLoaded", () => {
    headerScroll_handle();
    burger_handle();
    loadPosts_handle();
});
