
function getLoco (value) {
    document.getElementById('locations').innerHTML = '';
     let selectData = `
            <label for="location">Local government</label>
                <select required id="location" class="form-control" name="location">
    `;

    axios.get('/api/getloco/'+value)
    .then(response => {
        let results = response.data;
        console.table(results);
        if(results == null){
            return;
        }else{
            results.forEach(function (ele, index) {
                selectData += `<option value=${ele.id}>${ele.lga}</option>`
            });

            selectData += `</select>`;
            document.getElementById('locations').insertAdjacentHTML('beforeend', selectData);
         }

    })
    .catch(error => {
        console.log(error);
    })
}


function getCat2(value)
{
    document.getElementById('cat2').innerHTML = '';
    document.getElementById('subcat').innerHTML = '';
    document.getElementById('subcat2').innerHTML = '';

    let selectData = `
            <label for="checkout-country">Select a Category</label>
                <select required onchange="getSubCat(this.value)" class="form-control" name="serCat" id="serCat">
    `;

    axios.get('/api/getcategory/'+value)
    .then(response => {
        let results = response.data;
        if(results == null){
            return;
        }else{
            results.forEach(function (ele, index) {
                selectData += `<option value=${ele.id}>${ele.category}</option>`
            });

            selectData += `</select>`;
            document.getElementById('cat2').insertAdjacentHTML('beforeend', selectData);
         }

    })
    .catch(error => {
        console.log(error);
    })
}

function getSubCat(value)
{
    document.getElementById('subcat').innerHTML = '';
    let selectData = `
            <label for="checkout-country">Options</label>
                <select required onchange="getSubCat2(this.value)" class="form-control" name="subCat" id="subCat">
    `;

    axios.get('/api/getsubcategory/'+value)
    .then(response => {
        let results = response.data;
        if(results.length === 0){
            console.log("empty");
        }else{
            // console.log(results);
            results.forEach(function (ele, index) {
            selectData += `<option value=${ele.id}>${ele.sub_category}</option>`
            });

            selectData += `</select>`;
            
            document.getElementById('subcat').insertAdjacentHTML('beforeend', selectData);
        }
        

    })
    .catch(error => {
        console.log(error);
    })
}

function getSubCat2(value)
{
    document.getElementById('subcat2').innerHTML = '';
    let selectData = `
            <label for="checkout-country">Options</label>
                <select required  class="form-control">
    `;

    axios.get('/api/getsubcategory2/'+value)
    .then(response => {
        let results = response.data;
        if(results.length === 0){
            console.log("empty");
        }else{
            // console.log(results);
            results.forEach(function (ele, index) {
            selectData += `<option value=${ele.id}>${ele.sub_category}</option>`
            });

            selectData += `</select>`;
            
            document.getElementById('subcat2').insertAdjacentHTML('beforeend', selectData);
        }
        

    })
    .catch(error => {
        console.log(error);
    })
}
