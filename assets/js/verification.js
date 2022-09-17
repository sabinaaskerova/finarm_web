document.querySelector('div form button')
        .addEventListener('click', function(event){
            event.preventDefault()
            let hasError = false
            const errorParagraph = document.querySelector('form p')
            let emailInput = document.querySelector('form input')
            if(emailInput?.value.length == 0){
                errorParagraph.style.display = "block"
                errorParagraph.innerHTML = "Email not valid"
                emailInput.classList.add('error')
                hasError = true
            }  
            if(emailInput.value.match(/[a-z0-9-_.]+@[a-z0-9-_.]+\.[a-z]{2,}/) === null){
                errorParagraph.style.display = "block"
                errorParagraph.innerHTML = "Email not valid"
                emailInput.classList.add('error')
                hasError = true
            }
            emailInput.addEventListener('input', function(){
                if(this.value.match(/[a-z0-9-_.]+@[a-z0-9-_.]+\.[a-z]{2,}/) === null){
                    this.classList.add('error')
                } else{
                    this.classList.remove('error')
                }
            })
            if(!hasError){
                //document.querySelector('form').submit()
                fetch("../index.php")
            }
})