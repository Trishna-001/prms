function validateForm() {
    var firstName = document.getElementById("first_name").value.trim();
    var lastName = document.getElementById("last_name").value.trim();
    var specialty = document.getElementById("specialty").value.trim();

    if (firstName === "" || lastName === "" || specialty === "") {
        alert("Please fill in all required fields.");
        return false;
    }

    return true;
}