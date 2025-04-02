document.addEventListener("DOMContentLoaded", function () {
    document.querySelector("#quote-form").addEventListener("submit", function (e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        
        fetch("quote.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            alert("Your request has been sent successfully!");
            document.querySelector("#quote-form").reset();
        })
        .catch(error => {
            console.error("Error:", error);
            alert("Failed to send request.");
        });
    });
});