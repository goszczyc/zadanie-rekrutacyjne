export default (burger: Element, burgerMenu: Element) => {
    burger.addEventListener("click", (e) => {
        e.preventDefault();
        burger.setAttribute('aria-expanded', toggleAriaExpanded(burger));
        burgerMenu.setAttribute("aria-hidden", toggleAriaHidden(burgerMenu));
    });
};

const toggleAriaHidden = (element) => {
    if (element.getAttribute("aria-hidden") === "true") return "false";
    return "true";
};
const toggleAriaExpanded = (element) => {
    if (element.getAttribute("aria-expanded") === "true") return "false";
    return "true";
};
