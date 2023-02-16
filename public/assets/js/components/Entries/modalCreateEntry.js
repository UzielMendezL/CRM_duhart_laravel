$(document).ready(function () {
    $("#loader-entry").hide();
    $('#loaderEditEntrySearch').hide();
    $('#material-selected').hide();
    $('#loaderEditEntrySearch').hide();
     $('#clearButton').click(clear);
    //  $('#testClick').click(function(){
    //     Swal.fire(
    //         'The Internet?',
    //         'That thing is still around?',
    //         'question'
    //       )
    //  });
    //Definiendo la el rango de fechas a entregar
    const format2 = "YYYY-MM-DD";
    var date2 = new Date();
    var formatDays = moment(date2).format(format2);
    //var dateSelectMax = moment(date2).add(1,'days').format(format2);
    //var dateSelectMin = moment(date2).subtract(1,'days').format(format2);
    // $("#entryDate").attr("max", dateSelectMax); 
    // $("#entryDate").attr("min", dateSelectMin);

    $("#search-entry-material").keyup(function () {

        localiceEntryMaterials();
    });

    $("#entryDate").val(formatDays);

    $("#addEntry").attr("disabled", true);

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName("needs-validation");
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener(
            "submit",
            function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add("was-validated");
            },
            false
        );
    });
});

var actualEditId = null;

function onlyNumbers(e) {
    if (event.charCode >= 48 && event.charCode <= 57) {
        return true;
    } else {
        event.preventDefault();
    }
}
//Abrir el modal de editar

function getInfoEntry(id) {

    $('#box-inputs').remove();
    $("#loader-edit-entry").fadeIn();
    $.ajax({

        url: '/entry/' + id + '/edit',
        method: "GET",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        },
        success: function (data) {
            
            const format2 = "YYYY-MM-DD";

            var formatDays = moment(data.dateEntry).format(format2);

            console.log(data);
            setTimeout(() => {
                actualEditId = data.idMaterial;
                $("#loaderEditEntrySearch").fadeOut();
                var completeInputs = `
                <div class="form-row" id= 'box-inputs'>
                <div class="form-group col-md-12">
                    <label for="recipient-name" class="col-form-label">
                        Nombre del material:
                    </label>
                    <input value = "${data.nameMaterial}" readonly  type = 'text'  id='entryDate' class ='form-control' name="entryDate" /> 
                </div>
                 <div class="form-group col-md-6">
                     <label for="recipient-name" class="col-form-label">
                         Fecha:
                     </label>
                     <input value = "${formatDays}" readonly  type = 'text'  id='entryDate' class ='form-control' name="entryDate" /> 
                 </div>
                 <div class="form-group col-md-6">
                     <label for="recipient-name" class="col-form-label">
                         Recibio:
                     </label>
                     <input value = "${data.completeName}" readonly  type = 'text'  id='nameCompleted' class ='form-control' name="nameCompleted" /> 
                 </div>
                 <div class="form-group col-md-6">
                     <label for="recipient-name" class="col-form-label">
                         Cantidad:
                     </label>
                     <input  value= "${data.quantity}" readonly  type = 'text'  id='quantity' class ='form-control' name="quantity" /> 
                 </div>
                 <div class="form-group col-md-6">
                     <label for="recipient-name" class="col-form-label">
                         Stock Existente:
                     </label>
                     <input value = "${data.stock}" readonly type = 'text'  id='stock' class ='form-control' name="stock" /> 
                 </div>

                 <div class="box-img-modal-entry">
                     <img src="../../../img/PruebaTest.jpg" class="size-img-edit-modal">
                </div>
           	`;

                $('.container-inputs-entry').append(completeInputs);
                $("#loader-edit-entry").fadeOut();
            }, 700);


        }
    });

}
//Almacena la el filtro actual buscado 
var getFilterData = null;


function clear(){
    $('#materials').val('');
    $('#sendPetititon').submit();
}

function serviceAjax(){
    var inputSearch = $('#search-entry-material').val();
    if (inputSearch.length > 1) {
        $.ajax({

           // url: '/entrySearchMaterial/' + inputSearch,
           url: '/inventory/entry/search',
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            },
            data:{
                materialSearch:inputSearch
            },
            success: function (result) {
                $('#table-filtered').remove();
                var table = `
                <div id='table-filtered' class = 'containerTable table-responsive'>
                <div id='loaderEditEntrySearch' style="paddingTop:25%" class="container-inputs-edit-modal">
                <div  id= 'selectMaterial' style="width:100%" class="form-row container-inputs-entry">

                    <div  class="text-center loader-size">
                        <div class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
                        </div>
                    </div>		
               </div>
            </div>
                <table id = 'table-test' class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Inventario</th>
                    <th scope="col">Foto</th>
                  </tr>
                </thead>
              </table>
              </div>

                `;

                $('#box-entry-inputs').append(table);
                $('#selectMaterial').fadeOut();

                for (i = 0; i < result.data.length; i++) {
                    let tdBody = ` <tbody>
                    <tr>
                      <td id = ${i} class= 'td-intent' style = 'width:46%'>
                        <a onclick ='return selectMaterial(${i});' id ='matrerial-${i}' href = '#'>${result.data[i].nameMaterial}</a>
                    </td>
                      <td id = "table-option-${i}">${result.data[i].inventory}</td>
                      <td id = "table-photo-${i}"><button id = "button-option-${i}"class="btn btn-entry">Ver Foto</button></td>
                    </tr>
                  </tbody>`;

                    $(`#table-test`).prepend(tdBody);
                }
                getFilterData = result.data;
            }
        });
    } else {
        $('#material-selected').hide();
        $('#table-filtered').remove();
        getFilterData = null;
    }
}

var time = '';
//Search Modal  input entryMaterials 
function localiceEntryMaterials() {
    $('#selectMaterial').fadeIn();
    clearTimeout(time);
    time  = setTimeout(serviceAjax,250);
}
function selectMaterial(id) {
    // Seleccionar Tabla No borrar
    // if ($("#matrerial-"+ id).is(":focus")) {
    // //     var cssComponent = {
    // //         'background':'black', 
    // //         'color':'white'
    // //     };
    // //     $('#table-option-'+ id).css(cssComponent);
    // //     $('#table-photo-'+ id).css(cssComponent);
    // //     $('#button-option-' + id).css(cssComponent);
    // //   }

    //         $('#table-option-'+ id).addClass('color-td');
    //         $('#table-photo-'+ id).addClass('color-td');
    //         $('#button-option-' + id).addClass('color-button-td');
    // }else{
        
    //     $('#table-option-'+ id).removeClass('color-td');
    //     $('#table-photo-'+ id).removeClass('color-td');
    //     $('#button-option-' + id).removeClass('color-button-td');
    // }
    $('#material-selected').show();
    //Vaciamos el contenido
    $('#stockMaterial').val('');
    $("#addEntry").attr("disabled", false);

    var materialSelected = $('#matrerial-' + id).text();
    $('#select-Material').val(materialSelected);

    $('#stockMaterial').val(getFilterData[id].stock);
    $('#priceUnitary').val(getFilterData[id].unitaryPrice);
    $("#quantityEntry").focus();
}
