// JavaScript code for form submission handling
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contact-form");

    form.addEventListener("submit", function (event) {
        event.preventDefault();
        const formData = new FormData(form);
        const name = formData.get("name");
        const email = formData.get("email");
        const message = formData.get("message");

        // Replace this with your preferred method of handling form submissions (e.g., sending an email)
        console.log("Name:", name);
        console.log("Email:", email);
        console.log("Message:", message);

        // Reset the form after submission
        form.reset();
    });
});
