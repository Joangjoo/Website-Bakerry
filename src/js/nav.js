const navbar = document.getElementById("navbar");

function scrollTop() {
    if (window.scrollY > 10) {
        navbar.classList.add( "border-2", "border-secondary", "rounded-full", "transition-all", "duration-500");
        navbar.classList.remove("bg-transparent");
        navbar.classList.add("bg-secondary");
    } else {
        navbar.classList.remove(  "border-2", "border-secondary", "rounded-full");
        navbar.classList.remove("bg-secondary");
        navbar.classList.add("bg-transparent");
    }
}

window.addEventListener("scroll", scrollTop);
