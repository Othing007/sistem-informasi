// public/js/app.js

document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".button");

    buttons.forEach(button => {
        button.addEventListener("click", function () {
            alert("Button clicked!");
        });
    });
});
