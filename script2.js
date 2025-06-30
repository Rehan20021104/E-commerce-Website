/*login page*/

const signUpbutton=document.getElementById('signupbutton');
const signInbutton=document.getElementById('signinbutton');
const signinform=document.getElementById('signin');
const signupform=document.getElementById('signup');

signUpbutton.addEventListener('click',function(){
    signinform.style.display="none";
    signupform.style.display="block";
})

signInbutton.addEventListener('click',function(){
    signupform.style.display="none";
    signinform.style.display="block";
})