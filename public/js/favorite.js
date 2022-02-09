var contacts = document.getElementsByClassName('favorite');

Array.from(contacts).forEach(function(contact) {
    contact.addEventListener('click', function () {
        id = this.dataset.id;

        var url = "/favorites";

        var xhr = new XMLHttpRequest();
        xhr.open("POST", url + '?contact_id=' + id, true);

        xhr.setRequestHeader("Accept", "application/json");
        xhr.setRequestHeader("Content-Type", "application/json");
        xhr.setRequestHeader("X-CSRF-TOKEN", document.querySelector("meta[name=csrf-token]").getAttribute("content"));

        xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            alert('Контакт добавлен в избранное');
        }};

        xhr.send('contact_id=' + id);

    });
});