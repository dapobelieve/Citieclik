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
      url: url1+$(this).val(),
      method: 'GET',
    })
    .done(function(data) {
      $location = $('#location');
      // $location.removeAttr('disabled');//enable
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
    var catId = $(this).data('id');

    // load sub cats ajaxically       
    $('.subCatWid').show();
    $.ajax({
      url: url2+catId,
      method: 'GET',
    })
    .done(function(data) {
      $location = $('#subCatz');
      $location.children().remove();//clear the select tag first
      var dee = JSON.parse(data); //convert the json data to array here
      $.each(dee,function(index, value){
        $location.append("<label class='custom-control dcheck custom-checkbox d-block'>"+
                               "<input class='custom-control-input' type='checkbox' value='"+value.slug+"'>"+
                                "<span class='custom-control-indicator'></span>"+
                                "<span class='custom-control-description'>"+value.sub_category+"&nbsp;"+
                                "<span class='text-muted'>(254)</span></span>"+
                        "</label>");
      })
    });

    isotopeIt(filterValueCat);
 })