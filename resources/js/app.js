require('./bootstrap');

window.addEventListener("DOMContentLoaded", function () {
    const formsDelete = document.querySelectorAll(".form_delete")

    formsDelete.forEach((form) => {
        form.addEventListener("submit", (e) => {
            e.preventDefault()

            const comicTitle = form.comicTitle

            const result = confirm(`Sei sicuro di voler cancellare l'elemento "${comicTitle.value.slice(0, 20)}..." ? L'operazione sarà irreversibile!`)

            if (result) {
                form.submit()
            }
        })
    })
})
