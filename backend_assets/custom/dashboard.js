var base_url = $('body').data('base-url');

//Confirm Action for delete 
toastr.options = {
    closeButton: true,
    progressBar: true,
    showMethod: 'slideDown',
    timeOut: 3000
};
// For Delete ajax function
function confirmAction(e){
    toastr.clear();
    swal({
        title               : "Are you sure?",
        text                : $(e).data('message'),
        type                : "warning",
        showCancelButton    : true,
        confirmButtonClass  : "btn-danger",
        confirmButtonText   : "Yes",
        cancelButtonText    : "No",
        closeOnConfirm      : true,
        closeOnCancel       : true,
        // showLoaderOnConfirm: true
    },
    function(isConfirm) {
        if (isConfirm) {
            $.ajax({
                type          : "POST",
                url           : $(e).data('url'),
                data          : {id:$(e).data('id'), tableName:$(e).data('tablename')},
                //headers       : { 'authToken':authToken},
                cache         : false,
                beforeSend    : function() {
                    //preLoadshow(true);
                },     
                success       : function (res) {
                    //..preLoadshow(false);
                    if(res.status=='success'){
                        toastr.success(res.message, 'Success', {timeOut: 3000});
                        if($(e).data('list')==3)
                        {
                            $('.dataTable').DataTable().ajax.reload();
                        }
                        else if($(e).data('list')==1){
                            setTimeout(function(){ window.location = base_url; },3000);
                        }else{
                            setTimeout(function(){ window.location.reload(); },2000);
                        }
                    }else{
                        toastr.error(res.message, 'Alert!', {timeOut: 5000});
                    }             
                }
            });
        } else {
            //swal("Cancelled", "Your Process has been Cancelled", "error");
        }
    });
}

// Add partner's count
function fetchdata(){
    $.ajax({
        method      : 'get',
        url         : base_url+'adminapi/partnersCount',
        data        : {partner: 'all'},
        
        success: function (response) {
            $('#spanT').html(response.count.countT);
            $('#spanA').html(response.count.countA);
            $('#spanO').html(response.count.countO);
            $('#spanH').html(response.count.countT);
        },
        error: function () {
            toastr.error('Something went wrong, Try again.', 'Alert!', { timeOut: 5000 });
        }
    });
}

$(document).ready(function(){
    setInterval(fetchdata,5000);
});

function updatePartnersRequest(partnerId){
    $.ajax({
        method      : 'get',
        url         : base_url+'adminapi/partners',
        data        : {partner: partnerId},
        
        success: function (response) {
            $('#spanT').html(response.count.countT);
            $('#spanA').html(response.count.countA);
            $('#spanO').html(response.count.countO);
            $('#spanH').html(response.count.countT);
        },
        error: function () {
            toastr.error('Something went wrong, Try again.', 'Alert!', { timeOut: 5000 });
        }
    });
}