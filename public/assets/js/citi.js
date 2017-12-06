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
      var formData;
        event.preventDefault();
        
        var imge = document.getElementById('imgField').files[0];
        var token = document.getElementById('_token').value;
        formData = new FormData();
        formData.append('dfile',imge);
        formData.append('_token',token);
        // console.log(formData);
        $.ajax({
            url: 'profile-pic',
            type: 'POST',
            contentType: false,
            processData: false,
            data: formData,
            beforeSend: function(){
                output.src = '/assets/img/loading.gif';
                document.getElementById("saveChange").textContent = 'Loading Please wait...';
                document.getElementById("saveChange").disabled = true;
            },
            complete: function(data){
                var Dimg = JSON.parse(data.responseText);
                output.src = Dimg.url;
                document.getElementById("userMainAvatar").src = Dimg.url;
                document.getElementById("saveChange").style.visibility = 'hidden';
            }
        });
    };

    var clicky = function(event)
    {
         document.getElementById("saveChange").style.visibility = '';
         document.getElementById("saveChange").textContent = 'SAVE CHANGES';
         document.getElementById("saveChange").disabled = false;
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

    var reset = function()
    {

    }

    return {
        init: function()
        {
             setUpEventListeners();
        },
    }
})();

profielPic.init();