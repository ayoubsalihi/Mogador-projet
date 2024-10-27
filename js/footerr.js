var email = document.getElementById('email_footer')

email.addEventListener('keyup',()=>{
    var regex_email = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/
   if (regex_email.test(email.value)=1) {
        email.style.backgroundColor="red"
    }else if (email.test=0){
        email.style.backgroundColor="green"
    } 
})
