document.addEventListener('DOMContentLoaded', function () {
    // Get the form element
    const form = document.querySelector('form');

    // Add event listener for form submission
    form.addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent form submission

        // Get the form input values
        const firstName = document.getElementById('first-name').value;
        const lastName = document.getElementById('last-name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;

        // Send the form data to the server (example using console.log)
        console.log("What are you looking for?")
        console.log("Here is a sample of what you sent:")
        console.log('First Name:', firstName);
        console.log('Last Name:', lastName);
        console.log('Email:', email);
        console.log('Message:', message);

        // Reset the form fields
        form.reset();
    });
});
