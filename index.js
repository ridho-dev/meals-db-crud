$(document).ready(function () {
  console.log('success');
  $('#modal-konfirmasi').on('show.bs.modal', function (event) {
    var div = $(event.relatedTarget) // To where the modal displayed

    // To retrieve the value from data-id="" which we have placed on the delete link
    var id = div.data('id')
    var modal = $(this)
    console.log(modal);

    // Fill in the href attribute on the yes button which we give the id delete-true to the modal
    modal.find('#delete-true-data').attr("href", "utils/delete.php?id=" + id);
  })

});