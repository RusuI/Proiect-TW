const container = document.getElementById("container");
const signIn = document.getElementById("sign-in");

setTimeout(() => {
    container.classList.add("sign-in");
}, 200);

const toggle = () => {
    container.classList.toggle("sign-in");
};

signIn.addEventListener("click", toggle);