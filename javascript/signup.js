const container = document.getElementById("container");
const signUp = document.getElementById("sign-up");

setTimeout(() => {
    container.classList.add("sign-up");
}, 200);

const toggle = () => {
    container.classList.toggle("sign-up");
};

signUp.addEventListener("click", toggle);