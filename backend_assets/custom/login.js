var base_url  = $('body').data('base-url'); // Base url
var authToken = $('body').data('auth-url'); // Base url

// Validation
$("#login-form").validate({
  // Rules for form validation
  rules : {
    email   : {
              required  : true,
              email     : true
            },
    password : {
              required  : true,
              minlength : 3,
              maxlength : 20
            }
  },
  // Messages for form validation
  messages : {
    email : {
              required  : 'Please enter your email address',
              email     : 'Please enter a valid email address'
            },
    password : {
              required  : 'Please enter your password'
            }
  },
  // Do not change code below
  errorPlacement : function(error, element) {
            error.insertAfter(element.parent());
          },
  // ajax 
  submitHandler: function (form) {
    toastr.clear();
    $('#submit').prop('disabled', true);
      $.ajax({
        type        : "POST",
        url         : base_url+'adminapi/'+$(form).attr('action'),
        data        : $(form).serialize(),
        cache       : false,
        beforeSend  : function() {
          //preLoadshow(true);
          $('#submit').prop('disabled', true);  
        },     
        success: function (res) {
          //preLoadshow(false);
          setTimeout(function(){  $('#submit').prop('disabled', false); },4000);
          if(res.status=='success'){
            toastr.success(res.message, 'Success', {timeOut: 3000});
            setTimeout(function(){ window.location = base_url+'dashboard'; },4000);
          }else{
            toastr.error(res.message, 'Alert!', {timeOut: 3000});
          }
        }
      });
      return false; // required to block normal submit since you used ajax
  }
});    // Validation