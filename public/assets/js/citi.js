//CitiClick JS 

var profielPic = (function (){

    var ajaxSend = function(output)
    {
        document.getElementById('userAvatar').addEventListener('submit', function (event) {
            event.preventDefault();
            output.src = '/assets/img/loading.gif';
            console.log(event.target);
        });
        $.ajax({
            url: '',
            type: 'POST',
            data: {},
            beforeSend: function(){

            },
            complete: function(){

            }
        });
    };
    
    var clicky = function()
    {
        document.getElementById('imgField').addEventListener('change', function (event) {
             var reader = new FileReader();
             reader.onload = function()
             {
              var output = event.target.parentNode.previousElementSibling.previousElementSibling.firstElementChild;
              // output.classList.add('userImg')
              output.className += ' userImg';
              output.src = reader.result;
             }
             reader.readAsDataURL(event.target.files[0]);
             ajaxSend(output);
        });
    };
    return {
        init: function()
        {
             clicky();
        },
    }
})();

profielPic.init();