document.querySelector('button[name="login"]')
.addEventListener('click', function(event){
    event.preventDefault()
    let hasError = false
    const errorParagraph = document.querySelector('form p')
    const emailInput = document.querySelector("input[name='email']");
    const passwordInput = document.querySelector("input[name='password']");
    if(emailInput?.value.length == 0){
        errorParagraph.style.display = "block"
        errorParagraph.innerHTML = "Email or password not valid"
        emailInput.classList.add('error')
        hasError = true
    } 
    if(passwordInput?.value.length == 0){
        errorParagraph.style.display = "block"
        errorParagraph.innerHTML = "Email or password not valid"
        passwordInput.classList.add('error')
        hasError = true
    }  
    if(emailInput.value.match(/[a-z0-9-_.]+@[a-z0-9-_.]+\.[a-z]{2,}/) === null){
        emailInput.classList.add('error')
    }
    emailInput.addEventListener('input', function(){
        if(this.value.match(/[a-z0-9-_.]+@[a-z0-9-_.]+\.[a-z]{2,}/) === null){
            this.classList.add('error')
        } else{
            this.classList.remove('error')
        }
    })
    passwordInput.addEventListener('input', function(){
        if(this.value.length == 0){
            this.classList.add('error')
        } else{
            this.classList.remove('error')
        }
    })
    if(!hasError){
        document.querySelector('form').submit()
    }
})