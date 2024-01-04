//active
$(function(){
    var path = window.location.href; 
     $('.nav__items ul li a').each(function() {
      if (this.href === path) {
       $(this).addClass('link-active');
       console.log('Ok');
      }
     });
});

// global form submit 
function submitMe(elem)
{
    var form = $(elem).closest('form');

    $prevText = $(elem).html();

    var requiredFieldsFilled = true;

    form.find('input[required]').each(function() {
      var input = $(this);
      if (input.val() === '') {
        requiredFieldsFilled = false;
        return false;
      }
      else
      {
        return true;
      }
    });

    //if all fields are filled
    if (requiredFieldsFilled)
    {
        var url = form.attr('actionUrl');
        $(elem).prop('disabled', true);
        $(elem).html('<div class="spinner-border spinner-sm text-light spinner-border-sm" role="status"><span class="visually-hidden"></span></div>');
        $.ajax({
            type: $(form).attr('method'),
            url: url,
            data: new FormData(form[0]),
            processData: false,
            contentType: false,
            success: function(data)
            {
                if(data == true){
                    $(elem).prop('disabled', false);
                    $(elem).html($prevText);
                    $(form)[0].reset();
                    toast('<span class="text-dark"><i class="fa-solid fa-circle-check"></i> Success! Refresh to see changes</span>');
                }
                else
                {
                    $(elem).prop('disabled', false);
                    $(elem).html('Retry');
                    toast('<span class="text-danger"><i class="fa-solid fa-circle-xmark"></i> Failed</span>');
                }
            }
        });
    }
    //if any required field is empty
    else
    {
        toast('<span class="text-primary"><i class="fa-solid fa-circle-xmark"></i> Please fill all the required fields.</span>');
    }
}