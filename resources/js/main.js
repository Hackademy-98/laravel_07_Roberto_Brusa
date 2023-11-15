// delete pop-up
let cards = document.querySelectorAll('.button-monster-delete')

cards.forEach(el => {
    let el_delete = document.querySelector(`#delete-${el.id}`)
    el.addEventListener("click", ()=>{
        el_delete.classList.toggle('d-none')
    });
    let el_delete_back = document.querySelector(`#delete-back-${el.id}`)
    el_delete_back.addEventListener("click", ()=>{
        console.log(el_delete_back);
        el_delete.classList.toggle('d-none')
    })
});

//edit page
let prova = document.querrySelectorAll()