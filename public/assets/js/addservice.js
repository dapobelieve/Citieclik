
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


function getSubCat(value)
{
    document.getElementById('subcatty').innerHTML = '';
    document.getElementById('subcatty2').innerHTML = '';

    let selectData = `
            <label for="checkout-country">Sub Category</label>
                <select required onchange="getSubCat2(this.value)" class="form-control" name="subCat" id="subCat">
    `;

    axios.get('/api/getcategory/'+value)
    .then(response => {
        let results = response.data;
        if(results == null){
            return;
        }else{
            results.forEach(function (ele, index) {
                selectData += `<option value=${ele.id}>${ele.sub_category}</option>`
            });

            selectData += `</select>`;
            document.getElementById('subcatty').insertAdjacentHTML('beforeend', selectData);
         }

    })
    .catch(error => {
        console.log(error);
    })
}

function getSubCat2(value)
{
    document.getElementById('subcatty2').innerHTML = '';
    let selectData = `
            <label for="checkout-country">Options</label>
                <select required  class="form-control" name="subCat2" id="subCat">
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
            
            document.getElementById('subcatty2').insertAdjacentHTML('beforeend', selectData);
        }
        

    })
    .catch(error => {
        console.log(error);
    })
}
