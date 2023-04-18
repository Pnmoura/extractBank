const editButtons = document.querySelectorAll("[id^='edit-btn-']");

editButtons.forEach(button => {
    button.addEventListener("click", () => {
        const fields = button.parentNode.parentNode.querySelectorAll(".editable-field");
        fields.forEach(field => {
            field.removeAttribute("disabled");
        })
    })
})
