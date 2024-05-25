//acount

var Acount_el = document.getElementById("Acount");

var user_acount_popup_el = document.getElementById("USER_ACOUNT_POPUP");

var admen_acount_popup_el = document.getElementById("ADMEN_ACOUNT_POPUP");

var auther_acount_popup_el = document.getElementById("AUTHER_ACOUNT_POPUP");

var logoicon_el = document.getElementById("logoicon");

//main contaners

var fav_Card_sp_el = document.getElementById("fav_Card_sp");

var fav_Card_po_el = document.getElementById("fav_Card_po");

var fav_Card_he_el = document.getElementById("fav_Card_he");

var fav_Card_te_el = document.getElementById("fav_Card_te");

let RB_el = document.getElementsByName("fav_Card_rb");

var img = document.getElementById("img");

var img_viue = document.getElementById("img_viue");

var plas = document.getElementById("plas");

//popup sing up & login 

var popup_el = document.getElementById("popup");

var SINGUP_el = document.getElementById("SingUP");

var LogIN_el = document.getElementById("LogIN");

const eye = document.querySelectorAll('.eye_boll');

function Ad_Acount_active(){
    admen_acount_popup_el.style.display = "block";
};

function Us_Acount_active(){
    user_acount_popup_el.style.display = "block";
};

function Au_Acount_active(){
    auther_acount_popup_el.style.display = "block";
};

function Close_popup(){
    popup_el.style.display = "none";
};

function Close_acount_popup(){
    admen_acount_popup_el.style.display = "none";
    auther_acount_popup_el.style.display = "none";
    user_acount_popup_el.style.display = "none";
};

function log_in(){
    popup_el.style.display = "block";
}

function Register(){
    SINGUP_el.style.display = "block";
    LogIN_el.style.display = "none";
};

function logout_icon(src){
    logoicon_el.src = src
};

function show_pass(pass, _eye){
    const passwordInput = document.getElementById(pass);
    var show_eye = document.getElementById(_eye);

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        show_eye.setAttribute('active', 'true');
    }else {
        passwordInput.type = 'password';
        show_eye.setAttribute('active', 'false');
    }
}

RB_el.forEach(radio => {
    radio.addEventListener("change",function(){
        if(radio.value == "Spore"){
            fav_Card_sp_el.setAttribute("active", "true");
            fav_Card_po_el.setAttribute("active", "false");
            fav_Card_he_el.setAttribute("active", "false");
            fav_Card_te_el.setAttribute("active", "false");
        }
        else if(radio.value == "Politics"){
            fav_Card_sp_el.setAttribute("active", "false");
            fav_Card_po_el.setAttribute("active", "true");
            fav_Card_he_el.setAttribute("active", "false");
            fav_Card_te_el.setAttribute("active", "false");
        }
        else if(radio.value == "Health"){
            fav_Card_sp_el.setAttribute("active", "false");
            fav_Card_po_el.setAttribute("active", "false");
            fav_Card_he_el.setAttribute("active", "true");
            fav_Card_te_el.setAttribute("active", "false");
        }
        else if(radio.value == "Technology"){
            fav_Card_sp_el.setAttribute("active", "false");
            fav_Card_po_el.setAttribute("active", "false");
            fav_Card_he_el.setAttribute("active", "false");
            fav_Card_te_el.setAttribute("active", "true");
        }
    })
});

const inputElements = document.querySelectorAll('.pop_SingUP input');

inputElements.forEach(input => {
    input.addEventListener('input', function() {
    if (input.value.trim() !== '') {
        input.classList.add('filled');
    } else {
        input.classList.remove('filled');
    }
});
});

if (img) {
    img.addEventListener('change', function() {
    let imgLink = URL.createObjectURL(img.files[0]);
    img_viue.style.backgroundImage = `url(${imgLink})`;
    plas.textContent = "";
});
}



document.onmousemove = (event) => {
    const x = event.clientX *100 /window.innerHeight + '%';
    const y = event.clientY *100 /window.innerWidth + '%';

    for(let i =0; i<eye.length; i++ ){
        eye[i].style.top = y;
        eye[i].style.left = x;
    }
}

