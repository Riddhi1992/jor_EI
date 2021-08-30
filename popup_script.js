var selectedOption = document.getElementById("selection");
var ownerSelected = document.getElementById("ownerActivities");

var userSelected = document.getElementById("userActivities");

function selectOption() {
    ownerSelected.style.display = selectedOption.value == "Owner" ? "block" : "none";
    userSelected.style.display = selectedOption.value == "User" ? "block" : "none";
}

var selectedBusiness = document.getElementById("floatingSelect");
var otherSelected = document.getElementById("otherBusiness");
// var userSelected = document.getElementById("userActivities");

function selectBusiness() {
    otherSelected.style.display = selectedBusiness.value == "Other" ? "block" : "none";
    // userSelected.style.display = selectedBusiness.value == "User" ? "block" : "none";
}

