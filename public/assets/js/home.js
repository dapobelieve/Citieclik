
data = {
    'p' : [],
    's' : []
}

function getCats(section)
{
    let caty;
    // console.log(section);
    document.getElementById('sList2').innerHTML = '';
    // if(sList === 'sList2'){
        var selectData = `<select class="form-control" name="category">
                            <option value="">Categories</option>`;
        axios.get('/api/getcat/'+section)
        .then(response => {

            caty = response.data;
            caty.forEach(function (index, ele) {
                selectData += `<option value="${index.id}">${index.category}</option>`;
            });
            selectData += `</select>`;
            document.getElementById('sList2').insertAdjacentHTML('beforeend', selectData);
        })
        .catch(error => {
            console.log(error.data);
        });

        
    // }

    
}