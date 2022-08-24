function isCorrectName(name) {
    if (name.length < 2 || name.length > 255) {
        return false;
    }
    return /^[a-zA-Z0-9" "]+$/.test(name);
}

function isCorrectDate(date) {
    let dateReg = /^\d{2}.\d{2}.\d{4}$/;

    return dateReg.test(date);
}

function isCorrectCountry(country) {
    return list.includes(country);
}

function isCordinatCorrect(cr) {
    let type = typeof cr;
    if (type.toString() === 'float') {
        return true;
    } else {
        return false;
    }
}