document.getElementById('saveButton').addEventListener("click", refreshDates);

getDataListCountry();

function refreshDates() {


    if (!isCorrectName(document.getElementById('name-create').value)) {
        return alert("Incorrect name");
    }
    document.getElementById('a-name').value = document.getElementById('name-create').value;
    let data = document.getElementById('create-date').value;
    if (!isCorrectDate(data)) {
        return alert("Incorrect date");
    }
    let array = data.toString().split(".");
    document.getElementById('a-date').value = array[2] + "-" + array[1] + "-" + array[0];

    if (!isCorrectCountry(document.getElementById('create-country').value)) {
        return alert("incorrect country");
    }
    document.getElementById('a-country').value = document.getElementById('create-country').value;
    if (!isCordinatCorrect(document.getElementById('create-lat').value)
        || !isCordinatCorrect(document.getElementById('create-lng').value)) {
        return alert("incorrect coordinates");
    }
    document.getElementById('a-lat').value = document.getElementById('create-lat').value;
    document.getElementById('a-lng').value = document.getElementById('create-lng').value;
}

