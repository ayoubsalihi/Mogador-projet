const next_button = document.querySelector(".button-next")
const previous_button = document.querySelector(".button-previous")
const steps = document.querySelectorAll(".step")
const forms_steps = document.querySelectorAll(".form-step")
let active = 1

// next treat
next_button.addEventListener('click', ()=>{
    active++
    if (active > steps.length) {
        active = steps.length
    }
    updatingProgress()
})
// prev treat
previous_button.addEventListener('click', ()=>{
    active--
    if (active < 1) {
        active = 1
    }
    updatingProgress()
})

const updatingProgress = () => {
    // console.log('steps.length =>' + steps.length)
    // console.log('active =>' + active)
    // crossing binathom
    steps.forEach((step, i)=>{
        if (i == (active - 1)) {
            step.classList.add('active')
            forms_steps[i].classList.add('active')
            // console.log('i =>' +i)
        }else{
            step.classList.remove('active')
            forms_steps[i].classList.remove('active')
        }
    })
    // treat
    if (active === 1) {
        previous_button.disabled = true
    }else if(active === steps.length){
        next_button.disabled = true
    }else{
        previous_button.disabled=false
        next_button.disabled=false
    }
}
