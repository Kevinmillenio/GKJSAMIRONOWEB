function closeNotification(){
    $('.notification').hide();
}

function openModalDelete(btn){
    var id = $(btn).attr('msg-id');
    var name = $(btn).attr('msg-name');
    $('#delete-message-message').text(`Apakah anda yakin akan menghapus pesan dari ${name}?`);
    $('.confirm-delete-footer').empty();
    $('.confirm-delete-footer').append(`<a href='/message/delete/${id}'><button class='btn btn-danger'>Hapus</button></a>`);
    $('.confirm-delete').show();
}

function closeModalDelete(){
    $('.confirm-delete').hide();
}