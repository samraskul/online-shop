let children = document.querySelectorAll(".card-body");

children.forEach(child => {
    let parent = child.parentElement;
    let widthOfParent = parent.getBoundingClientRect().width;
    child.style.width = widthOfParent + "px";
});

window.onresize = setCardsWidths;
function setCardsWidths() {
    let children = document.querySelectorAll(".card-body");

    children.forEach(child => {
        child.style.width = "202px";
    });

    children.forEach(child => {
        let parent = child.parentElement;
        let widthOfParent = parent.getBoundingClientRect().width;
        child.style.width = widthOfParent + "px";
    });
}
