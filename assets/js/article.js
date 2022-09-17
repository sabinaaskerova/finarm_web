document.querySelector('form button')
    .addEventListener('click', function(event){
        event.preventDefault()
        let hasError = false
        const errorParagraph = document.querySelector('form p')
        const author = document.querySelector('input') 
        
        
        if(author?.value.length === 0){
            errorParagraph.style.display = "block"
            errorParagraph.innerHTML = "Please enter the name of the author"
            hasError = true
            author.classList.add('error')
        }
        
        author.addEventListener('input', function(){
            errorParagraph.style.display = "none"
            errorParagraph.innerHTML = ""
            if(this.value.length > 255){
                this.classList.add('error')
            } else{
                this.classList.remove('error')
            }
        })
        
        const article = document.querySelector('textarea[name="article"]')
        if(article?.value.length === 0){
            errorParagraph.style.display = "block"
            errorParagraph.innerHTML += "<br>"+"Please enter text of your article"
            hasError = true
            article.classList.add('error')
        }
        if(article?.value.length >1000){
            errorParagraph.style.display = "block"
            errorParagraph.innerHTML += "<br>"+"Limit of characters reached for the article"
            hasError = true
            article.classList.add('error')
        }
        article.addEventListener('input', function(){
            errorParagraph.style.display = "none"
            errorParagraph.innerHTML = ""
            if(this.value.length === 0 || this.value.length > 999){
                this.classList.add('error')
            } else{
                this.classList.remove('error')
            }
        })
        const heading = document.querySelector('textarea[name="heading"]')
        if(heading?.value.length === 0){
            errorParagraph.style.display = "block"
            errorParagraph.innerHTML += "<br>"+"Please enter text of your heading"
            hasError = true
            heading.classList.add('error')
        }
        if(heading?.value.length >255){
            errorParagraph.style.display = "block"
            errorParagraph.innerHTML += "<br>"+"Limit of characters reached for heading"
            hasError = true
            heading.classList.add('error')
        }
        heading.addEventListener('input', function(){
            errorParagraph.style.display = "none"
            errorParagraph.innerHTML = ""
            if(this.value.length === 0 || this.value.length > 255){
                this.classList.add('error')
            } else{
                this.classList.remove('error')
            }
        })
        if(!hasError){
            document.querySelector('form').submit()

        } 
        
    })
