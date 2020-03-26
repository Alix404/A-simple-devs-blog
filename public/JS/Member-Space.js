var event = document.addEventListener("click", switchingShows);

function switchingShows(event) {
    event.stopPropagation();
    var profileTab = document.getElementById('profileTab');
    var messageTab = document.getElementById('messagesTab');
    var editTab = document.getElementById('editTab');

    var profile = document.getElementById('profile');
    var messages = document.getElementById('messages');
    var edit = document.getElementById('edit');

    switch (event.target) {
        case profileTab:
            messages.style.display = "none";
            edit.style.display = "none";
            profile.style.display = "block";

            messageTab.removeAttribute('active');
            editTab.removeAttribute('active');
            profileTab.setAttribute('active', 'true');
            break;
        case messageTab:
            profile.style.display = "none";
            edit.style.display = "none";
            messages.style.display = "block";

            profileTab.removeAttribute('active');
            editTab.removeAttribute('active');
            messageTab.setAttribute('active', 'true');
            break;
        case editTab:
            messages.style.display = "none";
            profile.style.display = "none";
            edit.style.display = "block";

            messageTab.removeAttribute('active');
            profileTab.removeAttribute('active');
            editTab.setAttribute('active', 'true');
            break;
        default:
            return;
    }
}



