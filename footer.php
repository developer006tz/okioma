<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    if (window.location.search.indexOf('framgång') > -1) {
        Swal.fire(
            'framgång!',
            'Ditt meddelande har skickats.',
            'success'
        ).then(() => {
            const url = new URL(window.location.href);
            url.searchParams.delete('framgång');
            window.history.replaceState(null, null, url);
        });
    }
    if (window.location.search.indexOf('fel') > -1) {
        Swal.fire(
            'fel!',
            'Ditt meddelande har inte skickats !.',
            'error'
        ).then(() => {
            const url = new URL(window.location.href);
            url.searchParams.delete('fel');
            window.history.replaceState(null, null, url);
        });
    }

    if (window.location.search.indexOf('felnull') > -1) {
        Swal.fire(
            'varning!',
            'Alla fält är obligatoriska, vänligen fyll i alla fältDitt meddelande har inte skickats !.',
            'warning'
        ).then(() => {
            const url = new URL(window.location.href);
            url.searchParams.delete('felnull');
            window.history.replaceState(null, null, url);
        });
    }

    // Handle form submission via AJAX
    const form = document.querySelector('form');
    form.addEventListener('submit', (event) => {
        event.preventDefault
        const formData = new FormData(form);
        const xhr = new XMLHttpRequest();
        xhr.open(form.method, form.action);
        xhr.setRequestHeader('Accept', 'application/json');
        xhr.onreadystatechange = () => {
            if (xhr.readyState !== XMLHttpRequest.DONE) return;
            if (xhr.status === 200) {
                // Handle success response
                const response = JSON.parse(xhr.response);
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: response.message,
                });
                form.reset();
            } else {
                // Handle error response
                const response = JSON.parse(xhr.response);
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: response.message,
                });
            }
            //catch error


        };
        xhr.send(formData);
    });



</script>

</body>

</html>