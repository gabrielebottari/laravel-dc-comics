import './bootstrap';

// Ci portiamo appresso il file scss
import '~resources/scss/app.scss';

// Import all of Bootstrap's JS
import * as bootstrap from 'bootstrap';

// Ci portiamo appresso tutte le immagini che si trovano nella cartella resources/img
import.meta.glob([
    '../img/**'
]);

document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete-button');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            const confirmed = confirm('Are you sure you want to delete this comic?');

            if (confirmed) {
                this.form.submit();
            }
        });
    });
});