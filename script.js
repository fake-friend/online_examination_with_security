function eye()
     {
     const togglePassword = document.querySelector('#togglePassword');
     const password = document.querySelector('#pw');
      
        togglePassword.addEventListener('click', function (e) {
          // toggle the type attribute
          const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
          password.setAttribute('type', type);
          // toggle the eye slash icon
          this.classList.toggle('fa-eye-slash');
      });
      }

function login()
{
    var username=document.getElementById("unm").value;
    var text=document.getElementById("text1");
    if(username=="")
    {
        document.getElementById("unm").style.borderColor = "red";
        text.innerHTML="!";
    }
    else
    {
        document.getElementById("unm").style.borderColor = "";
        text.innerHTML="";
    }

    var password=document.getElementById("pw").value;
    var text=document.getElementById("text2");
    if(password=="")
    {
        document.getElementById("pw").style.borderColor = "red";
        text.innerHTML="!";
    }
    else
    {
        document.getElementById("pw").style.borderColor = "";
        text.innerHTML="";
    }

    if(username!="" && password!="")
    {
        var form=document.getElementById("form");
        form.onsubmit="return true";
    }
}

