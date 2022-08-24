document.getElementById('saveUpdate').addEventListener("click", refreshDates);


function refreshDates() {

    if (!isCorrectName(document.getElementById('name-update').value)) {
        return alert("Incorrect name");
    }
    document.getElementById('u-name').value = document.getElementById('name-update').value;
    let data = document.getElementById('update-date').value;
    if (!isCorrectDate(data)) {
        return alert("Incorrect date");
    }
    let array = data.toString().split(".");
    document.getElementById('u-date').value = array[2] + "-" + array[1] + "-" + array[0];
    if (!isCorrectCountry(document.getElementById('country-update').value)) {
        return alert("incorrect country");
    }
    document.getElementById('u-country').value = document.getElementById('country-update').value;
    if (!isCordinatCorrect(document.getElementById('update-lat').value)
        || !isCordinatCorrect(document.getElementById('update-lng').value)) {
        return alert("incorrect coordinates");
    }
    document.getElementById('u-lat').value = document.getElementById('update-lat').value;
    document.getElementById('u-lng').value = document.getElementById('update-lng').value;
    document.getElementById('u-id').value = document.getElementById('update-id-info').value;
}
