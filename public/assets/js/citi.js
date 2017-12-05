//CitiClick JS 

var profielPic = (function (){
    var output;

    var setUpEventListeners = function()
    {
        document.getElementById('imgField').addEventListener('change', clicky);
        document.getElementById('userAvatar').addEventListener('submit', ajaxSend);
    };


    var ajaxSend = function(event)
    {
        event.preventDefault();
        // console.log(this);
        var img = document.getElementById('imgField').value;
        var token = document.getElementById('_token').value;
        $.ajax({
            url: '/profile-pic',
            type: 'POST',
            data: {
                token: token,
                img: img,
            },
            beforeSend: function(){
                output.src = '/assets/img/loading.gif';  
            },
            complete: function(data){
                // console.log(data);
            }
        });
    };

    var clicky = function(event)
    {
         var reader = new FileReader();
         reader.onload = function()
         {
          output = event.target.parentNode.previousElementSibling.previousElementSibling.firstElementChild;
          // output.classList.add('userImg')
          output.className += ' userImg';
          output.src = reader.result;
         }
         reader.readAsDataURL(event.target.files[0]);
    };

    return {
        init: function()
        {
             setUpEventListeners();
        },
    }
})();

profielPic.init();