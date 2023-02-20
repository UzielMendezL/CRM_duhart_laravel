$(document).ready(function () {
    // $("#list-materials-transaction").hide()
    $("#loader-transaction-material").hide();
    $('#trMaterialTransaction').hide();
    $('#card-material-options').hide();
  });

function searchMaterialTransaction(){

    // $('#box-inputs').remove();
    // $("#list-materials-transaction").fadeIn();
    $('#card-material-options').hide();
    $('#trMaterialTransaction').fadeIn();
    $("#loader-transaction-material").fadeIn();
    var inputSearch = $('#search-entry-material').val();
        $.ajax({
  
            url:"/transaction/material/search",
            // //url: '/departure/' + id + '/edit',
            // method: "GET",
            // headers: {
            //     "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            // },
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            },
            data:{
                materialSearch:inputSearch
            },
            success: function (result) {
                             
                console.log(resultData);

                var resultData = result.data;

                
                    actualEditId = resultData.idMaterial;

                for (let index = 0; index < resultData.length; index++) {
                    const element = resultData[index];
                    let entryMaterial = `
                    <tbody>
                    <tr>
                        <td id = "material-${element.idMaterial}">
                        <button onClick = "return selectMaterialTransaction( ${element.idMaterial} );" type = "button" class = "btn btn-secondary">${element.nameMaterial}</button>
                        </td>
                        <td id = "material-${element.idMaterial}-stock">${element.stock}</td>
                    </tr>
                    </tbody>`;
                    $('#trMaterialTransaction').prepend(entryMaterial);    
      
                    // $('.container-inputs-entry').append(completeInputs);
                }

                $("#loader-transaction-material").fadeOut();
      
            }
        });
}

function selectMaterialTransaction(id){

    let selectedMaterial  =  $('#idSMST');
    let selectedStock  = $('#idStockM');
    let materialSelected  =  $(`#material-${id}`);
    let materialStock  =  $(`#material-${id}-stock`);

    selectedMaterial.val(materialSelected.text());
    selectedStock.val(materialStock.text());

    $('#card-material-options').fadeIn();
    selectedMaterial.focus();

}  