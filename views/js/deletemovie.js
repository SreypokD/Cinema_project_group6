const onDelete = document.querySelector('.delete');


onDelete.addEventListener('click', function()
{
    swal({
        title: "Are you sure?",
        text: "You will remove this movie from database and view!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            swal("Your movie has been deleted!", {
            icon: "success",
            });
        } 
    
    });
    
});