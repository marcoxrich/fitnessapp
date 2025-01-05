document.getElementById('signUpForm').addEventListener('submit', validateSignUpForm);

function validateSignUpForm(event) {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username.length < 3) {
        alert('Username must be at least 3 characters long.');
        event.preventDefault(); // Prevent form submission
    }

    if (password.length < 6) {
        alert('Password must be at least 6 characters long.');
        event.preventDefault(); // Prevent form submission
    }
}
