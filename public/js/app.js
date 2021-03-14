//Variable Declarations
const alertBanner = document.getElementById("alert");
const user = document.getElementById("userField");
const message = document.getElementById("messageField");
const send = document.getElementById("send");
const frequency = document.getElementsByClassName("traffic-nav-link");
const storageSettings = [];
const email = document.getElementById('email-notifications');
const profileSetting = document.getElementById('public');
const timezone = document.getElementById('timezone');
const save = document.getElementById('save');
const cancel = document.getElementById('cancel');
const notificationBell = document.getElementById('bell')
const notificationCircle = document.getElementById('circle');


// create the html for the banner
alertBanner.innerHTML =`
<div class="alert-banner">
<p><strong>Alert:</strong> You have <strong>3</strong> overdue tasks
to complete</p>
<p class="alert-banner-close">x</p>
</div>
`;

const notifications = document.getElementById("notifications");
const closeNotifications = document.getElementById("close-notifications");
notifications.style.display = "none";


notificationBell.addEventListener('click', e => {
    const element = e.target;

    notificationCircle.style.display = 'none';
    element.style.fill = '#a0a0a0'
    notificationBell.classList.remove('ring')
    notifications.style.display = "";

})

alertBanner.addEventListener('click', e => {
    const element = e.target;
    
    if (element.classList.contains("alert-banner-close")) {
    alertBanner.style.display = "none";
    }
});

closeNotifications.addEventListener('click', e => {
    const element = e.target;
    const parentofParent = element.parentElement.parentElement;
    parentofParent.style.display = "none";
});

send.addEventListener('click', (e) => {
    e.preventDefault();

    // ensure user and message fields are filled out
    if (user.value === "" && message.value === "") {
    alert("Please fill out user and message fields before sending");
    } else if (user.value === "" ) {
    alert("Please fill out user field before sending");
    } else if (message.value === "" ) {
    alert("Please fill out message field before sending");
    } else {
    alert(`Message successfully sent to: ${user.value}`);
    message.value = '';
    }
});


// change active class for time frequency on click
for(let i = 0; i < frequency.length; i++){
frequency[i].addEventListener("click", (e) => {
    const element = e.target;

    for(let i = 0; i < frequency.length; i++){
        if(frequency[i] === element){
            element.classList.add('active');
        } else if(frequency[i] !== element){
            frequency[i].classList.remove('active');
        }
    }   
});
}

//Local Storage

function localSave() {
    storageSettings.push(email.checked);
    storageSettings.push(profileSetting.checked);
    storageSettings.push(timezone.value);
    localStorage.setItem('settings', JSON.stringify(storageSettings));
    alert('Settings Saved');
}

function localLoad() {
    let checked = JSON.parse(localStorage.getItem('settings'));
    email.checked = checked[0];
    profileSetting.checked = checked[1];
    timezone.value = checked[2];
}

function localRemove() {
    location.reload();
    localStorage.clear();
}


save.addEventListener('click', (e) => {
    e.preventDefault();
    localSave();
});

cancel.addEventListener('click', (e) => {
    e.preventDefault();
    localRemove();
});

window.addEventListener('load', () => {
    localLoad();
});