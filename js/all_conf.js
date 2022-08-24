let id;


$(function () {
    $(".get").on("click", function () {
        id = this.getAttribute('id');
        document.getElementById('input-id-delete').value = id;
        document.getElementById('input-id-info').value = id;
        document.getElementById('input-id-update').value = id;
        console.log(id);
    });
});




