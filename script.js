$(document).ready(function () {
    $('#registrationForm').submit(function (event) {
        event.preventDefault();  // Prevent the default form submission

        var formData = $(this).serialize(); // Get form data

        $.ajax({
            url: 'submit.php',
            type: 'POST',
            data: formData,
            success: function (response) {
                $('#responseData').html(<p style="color: green; font-weight: bold;">Form submitted successfully!</p>
            ${responseHtml}); // Display the response data
                $('#responseContainer').removeClass('hidden'); // Show the response container
                $('#registrationForm').trigger('reset'); // Reset the form
            },
            error: function () {
                alert("There was an error submitting the form.");
            }
        });
    });
});
