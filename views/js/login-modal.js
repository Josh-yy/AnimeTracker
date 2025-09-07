$(document).ready(function(){

    const signUpModal = document.getElementById('sign-up-modal');
    const signInModal = document.getElementById('sign-in-modal');
    const loginModal = document.getElementById('modal-backdrop');
    const navigationButton = document.getElementById('navigation-buttons');

    $(document).on("click", "#sign-up-button-modal", function(){
        signUpModal.classList.toggle('dataMistShow');
        signUpModal.classList.toggle('dataMistHide');
        signInModal.classList.toggle('dataMistShow');
        signInModal.classList.toggle('dataMistHide');
    });

    $(document).on("click", "#sign-in-button-modal", function(){
        signInModal.classList.toggle('dataMistShow');
        signInModal.classList.toggle('dataMistHide');
        signUpModal.classList.toggle('dataMistShow');
        signUpModal.classList.toggle('dataMistHide');
    });

    $(document).on("click", '#close-modal', function(){
        loginModal.classList.remove('dataMistShow');
        loginModal.classList.add('dataMistHide');
        console.log(loginModal)
       
    });
    
    $(document).on("click", '#log-in-button', function(){
        loginModal.classList.add('dataMistShow');
        loginModal.classList.remove('dataMistHide');
        // signUpModal.classList.toggle('dataMistShow');
        // signUpModal.classList.toggle('dataMistHide');
        // signInModal.classList.toggle('dataMistShow');
        // signInModal.classList.toggle('dataMistHide');
        console.log(loginModal)

    });

    $(document).on("click", '#sign-up-button', function(){
        loginModal.classList.add('dataMistShow');
        loginModal.classList.remove('dataMistHide');
        signInModal.classList.toggle('dataMistShow');
        signInModal.classList.toggle('dataMistHide');
        signUpModal.classList.toggle('dataMistShow');
        signUpModal.classList.toggle('dataMistHide');
        console.log(loginModal)
    });

    $(document).on("click", '#sign-up-submit-button', function(){
        const signUpForm = document.getElementById('sign-up-form');
        let username = signUpForm.elements.username.value;
        let password = signUpForm.elements.password.value;
        let error = document.getElementById('sign-up-error-message');
        let passwordConfirmation = signUpForm.elements.password_confirmation.value;

        $.ajax({
            url: "/register",
            method: "POST",
            data: {
                username: username,
                password: password,
                passwordConfirmation: passwordConfirmation,
            },
            success: function(response){
                if (response.error){
                    error.innerHTML = response.error;
                    signUpForm.elements.password.value = "";
                    signUpForm.elements.password_confirmation.value = "";
                }else{
                    $('#navigation-buttons').load(location.href + " #navigation-buttons > *");
                    $('#navigation-success-message').html("")
                    $('#navigation-success-message').html(response.success)
                    $('#navigation-success').toggleClass('hidden');


                    setTimeout(function(){
                        $('#navigation-success').toggleClass('hidden');
                    }, 8000);

                    loginModal.classList.remove('dataMistShow');
                    loginModal.classList.add('dataMistHide');
                }
            }
        });
    });

    $(document).on("click", '#sign-in-submit-button', function(){
        const signInForm = document.getElementById('sign-in-form');
        let username = signInForm.elements.username.value;
        let password = signInForm.elements.password.value;
        let error = document.getElementById('sign-in-error-message');

        $.ajax({
            url: "/login",
            method: "POST",
            data: {
                username: username,
                password: password,
            },
            success: function(response){
                if (response.error){
                    error.innerHTML = response.error;
                    signInForm.elements.password.value = "";
                }else{
                    $('#navigation-buttons').load(location.href + " #navigation-buttons > *");
                    $('#navigation-success-message').html("")
                    $('#navigation-success-message').html(response.success)
                    $('#navigation-success').toggleClass('hidden');

                    setTimeout(function(){
                        $('#navigation-success').toggleClass('hidden');
                    }, 8000);

                    loginModal.classList.remove('dataMistShow');
                    loginModal.classList.add('dataMistHide');
                }
            }
        });
    });

    function popSuccessMessage(message){
        
    }


});