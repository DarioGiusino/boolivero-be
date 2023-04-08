// get element from dom
const checkInputs = document.querySelectorAll(".patch-checkbox");

// for each input
checkInputs.forEach((input) => {
    //lister the change event
    input.addEventListener("change", () => {
        // get title from custom attribute
        const title = input.getAttribute("data-input");

        // ask delete confirmation
        const confirm = window.confirm(
            `Vuoi davvero modificare lo stato di "${title}"?`
        );

        // if yes, submit
        if (confirm) {
            input.parentElement.submit();
        }
        // otherwise stop the check behavior
        else {
            input.checked = !input.checked;
        }
    });
});
