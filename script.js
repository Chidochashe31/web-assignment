
const membershipForm = document.getElementById("membershipForm");

if (membershipForm) {
    membershipForm.addEventListener("submit", function (event) {
        const fullName = document.getElementById("fullname").value.trim();
        const studentNumber = document.getElementById("studentNumber").value.trim();
        const email = document.getElementById("email").value.trim();
        const phone = document.getElementById("phone").value.trim();
        const interest = document.getElementById("interest").value;

        if (!fullName || !studentNumber || !email || !phone || !interest) {
            event.preventDefault();
            alert("Please complete all the fields before submitting.");
            return;
        }

        const confirmed = confirm("Are you sure you want to submit your membership application?");

        if (!confirmed) {
            event.preventDefault();
        }
    });
}
