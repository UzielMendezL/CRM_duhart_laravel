$(document).ready(function () {
    // $("#list-materials-transaction").hide()
    $("#loader-transaction-material").hide();
    $('#trMaterialTransaction').hide();
    $('#card-material-options').hide();
    $('#btn-submit-transaction-material').attr('disabled', true);
  });


var getFindMaterialTransactions = [];
function searchMaterialTransaction(){
    
    // $('#box-inputs').remove();
    // $("#list-materials-transaction").fadeIn();
    $('#card-material-options').hide();
    $('#trMaterialTransaction').fadeIn();
    $("#loader-transaction-material").fadeIn();
    var inputSearch = $('#search-entry-material').val();
    if(inputSearch.length > 0){
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
              
                var resultData = result.data;
                getFindMaterialTransactions = resultData;
                
                
                actualEditId = resultData.idMaterial;
                 
                $('#table-filtered').remove();
                var table = `
                <div id='table-filtered' class = 'containerTable table-responsive'>
                     <div id='loaderTransactionMaterialSearch' style="paddingTop:25%" class="container-inputs-edit-modal">
                     <div  id= 'selectMaterial' style="width:100%" class="form-row container-inputs-entry">
    
                            <div  class="text-center loader-size">
                                <div class="spinner-border" role="status">
                                <span class="sr-only">Loading...</span>
                                </div>
                            </div>		
                        </div>
                    </div>
                    <table id = 'table-transaction-material' class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Stock</th>
                      </tr>
                    </thead>
                  </table>
                </div>
    
                    `;
                
                $('#trMaterialTransaction').prepend(table);   

                for (let index = 0; index < resultData.length; index++) {
                    const element = resultData[index]; 
                    let entryMaterial = `
                        <tr>
                            <td style = "padding:20px" >
                                <a href = #  onClick = "return selectMaterialTransaction( ${element.idMaterial} );"   >${element.nameMaterial}</a>
                            </td>
                            <td style = "text-align:center;" >${element.stock}</td>
                        </tr>
                    `;
                     $('#table-transaction-material').prepend(entryMaterial);    
      
                    // $('.container-inputs-entry').append(completeInputs);
                }

                setTimeout(()=>{
                    $("#loaderTransactionMaterialSearch").fadeOut();
                },500)
                
      
            }
        });   
    }
}

function selectMaterialTransaction(id){

    let selectedMaterial  =  $('#idSMST');
    let selectedIdMaterial  = $('#idConcept');
    let selectedunitaryPrice  = $('#unitaryPrice');
    let selectedinventory  = $('#idInventory');
    let selectedNameInventory = $('#nameInventory');
    let selectedUnity  = $('#unity');

    // let materialSelected  =  $(`#material-${id}`);
    // let materialStock  =  $(`#material-${id}-stock`);

    var objMaterial = getFindMaterialTransactions.find(element => element.idMaterial == id );
    console.log(objMaterial)
    if(objMaterial != null){
        $('#quantity').val('');
        selectedMaterial.val(objMaterial.nameMaterial);
        selectedunitaryPrice.val(objMaterial.unitaryPrice);
        selectedIdMaterial.val(objMaterial.idMaterial);
        selectedNameInventory.val(objMaterial.nameInventory);
        selectedinventory.val(objMaterial.idInventory);
        selectedUnity.val(objMaterial.unity);
    }
    $('#card-material-options').fadeIn();
    //focus Input
    selectedMaterial.focus();
}  
function removeAtrr(value){

    let statusAttr = true;
    if(value > 0){
        statusAttr  = false;
        getPrice = $('#unitaryPrice').val();
        var mountTotal = getPrice * value;
    }
    
    $('#btn-submit-transaction-material').attr('disabled', statusAttr);
    $('#mount').val(mountTotal);
}

function getTotalItemTransaction(val){
    let y = $('#quantity').val()
    if(y > 0){
       
        let mountTotal = val * y;
        $('#mount').val(mountTotal);
    }
}

function getValueId(nameProvider, listProvider){
    let getId = listProvider.find((element)=> element.nameProvider == nameProvider );
    $('#idProvider').val(getId.idProvider);
}

function detailToWorkSite(elementA){
    console.log(elementA);

    $('#workSiteSelected').text(elementA.text);
    $('#containerWorkSite').focus();
    $('#goToWorkSite').attr('href', '/test');

}

