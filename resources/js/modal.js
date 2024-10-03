const modal = document.getElementById("modal")
const loading = document.getElementById("loading")
const modalContent = document.getElementById("modal-content")

window.addEventListener("open-modal",e=>{
    modal.classList.remove("hidden")
    modal.classList.add("flex")
    loading.classList.add("block")
    modalContent.classList.add("hidden")
    setTimeout(()=>{
        modalContent.classList.add("block")
        modalContent.classList.remove("hidden")
        loading.classList.add("hidden")
        loading.classList.remove("block")
    },3000)

})