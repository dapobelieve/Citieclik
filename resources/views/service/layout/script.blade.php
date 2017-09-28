<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/isotope.js"></script>
<script type="text/javascript">
//js version of slug
    function slugIt(string) {
      return string
        .toString()
        .trim()
        .toLowerCase()
        .replace(/\s+/g, "-")
        .replace(/[^\w\-]+/g, "")
        .replace(/\-\-+/g, "-")
        .replace(/^-+/, "")
        .replace(/-+$/, "");
    }

    //isotope function
    function isotopeIt(theValue)
    {
      $grid.isotope({ filter: "."+theValue });
    }

    //initialize isotope
    $grid = $('.isodata').isotope({
      itemSelector: '.isoitem',
      layoutMode: 'fitRows',
      fitRows: {
        gutter: 30
      },
      stagger: 30,
    });

    // filter based on the selected state
    $('.hereIt').on('change','#serState',function(event){
      //get value of currently selected option
        var filterValue = slugIt(this.options[this.selectedIndex].text);

        // console.log(filterValue);   
        //load lgas ajaxically       
        $('.locs').show();
        $.ajax({
          url: "service/state/location/"+$(this).val(),
          method: 'GET',
        })
        .done(function(data) {
          $location = $('#location');
          $location.removeAttr('disabled');//enable
          $location.children().remove();//clear the select tag first
          var dee = JSON.parse(data); //convert the json data to array here
          $.each(dee,function(index, value){
            $location.append("<option value='"+value.id+"' >"+ value.lga +"</option>");
          })
        });

        isotopeIt(filterValue);
     })

    //filter based on location aka lgas
    $('.hereIt').on('change','#location', function(event){
      var filterValue = slugIt(this.options[this.selectedIndex].text);
      isotopeIt(filterValue);
    })
    // ==================Categories Section============================\
    // some mad stuffs here, isotope wont take "&" so had to modify my slugIt function in 
    // the service model to replace "&" with "-" #badAss huh ;)
    $('.hereIt').on('click','.catz',function(event){
      event.preventDefault();
      //get value of currently clicked option
        var filterValueCat =  slugIt($(this).data('filter'));
        console.log(filterValueCat);   
        //load lgas ajaxically       
        // $('.locs').show();
        // $.ajax({
        //   url: "service/state/location/"+$(this).val(),
        //   method: 'GET',
        // })
        // .done(function(data) {
        //   $location = $('#location');
        //   $location.removeAttr('disabled');//enable
        //   $location.children().remove();//clear the select tag first
        //   var dee = JSON.parse(data); //convert the json data to array here
        //   $.each(dee,function(index, value){
        //     $location.append("<option value='"+value.id+"' >"+ value.lga +"</option>");
        //   })
        // });

        isotopeIt(filterValueCat);
     })




</script>