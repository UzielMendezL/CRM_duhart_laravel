$(document).ready(function () {
    $("#form-type").change(selectInput);
    $("#loader").hide();
    //Modal pierda su foco en el boton
    // $('.close-modal').click(()=>{
    //     alert('Hola')
    //     $('.editMaterial').blur();
    // });
    // $('#myTab a').click(function (e) {
    //   //  alert('s')
    //   e.preventDefault()
    //   $(this).tab('dispose')
  
    //   alert('He')
    // })
  
    // $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    //     e.target // newly activated tab
    //     e.relatedTarget // previous active tab
    //   })
    // $('#materials-tab').tab('show')
    // alert('h')


// Agregarlo  despues
  // $("#addMaterial").attr("disabled", false);
  
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
      // $('#close-modal-edit').click(()=>{
      //     $('#containerMaterial')
      //     .nextAll()
      //     .remove();
      // })
    });
  
    //Evento boton editar
    //getInfoMaterial();
  });
  
  var inputActual = null;
  var newParameterFilter = [];
  var indexBox = 0;
  var actualEditId = null;
  //Listado de los campos del formulario
  var listFieldsMaterials = [];
  function selectInput() {
    $("#loader").fadeIn();
    //Se limpia los inputs dejandolos en blanco
    newParameterFilter = [];
    $("#containerMaterial").empty();
    $("#loader").fadeOut();
    var inputSelect = $("#form-type").val();
    switch (inputSelect) {
      case "":
        break;
      case "Activo Fijo":
        formInventory("Activo Fijo");
        break;
      case "Barniz":
        formInventory("Barniz");
        break;
      case "Herrajes":
        formInventory("Herrajes");
        break;
      case "Madera":
        formInventory("Madera");
        break;
      case "Mano de obra":
        formInventory("Mano de Obra");
        break;
      case "Otros":
        formInventory("Otros");
        break;
      default:
        console.log("default");
    }
  }
  
  function addedInput(input) {
    // //Id del input
    var inputOldSelect = input.id;
    var gerValueInput = $(`#${inputOldSelect}`).val();
  
    var newCategoryInput = null;
    var newNameCategory = null;
    var optionSelect = "grupo";
    var newsInputs = `
                      <div class="form-group col-md-6">
                      <label for="recipient-name" class="col-form-label">
                          Código del material:
                      </label>
                      <input  required  placeholder = 'Escribe el código del material'  type = 'text'  id='materialCode' class ='select-validated form-control' name="materialCode" /> 
                      <div class="invalid-feedback">Ingresa el código del Material</div>
                      </div>
                      <div class="form-group col-md-6">
                      <label for="recipient-name" class="col-form-label">
                          Stock:
                      </label>
                      <input onkeypress ='return onlyNumbers(this);' required min = '0'  placeholder = 'Escribe el stock del material' required type = 'number'  id='stock' class ='select-validated form-control' name="stock" /> 
                      <div class="invalid-feedback">Ingresa la cantidad de stock del producto</div>
                      </div>
                        <div class="form-group  col-md-6">
                            <label for="recipient-name" class="col-form-label">
                              Precio Unitario:
                            </label>
                            <input required onkeypress ='return onlyNumbers(this);'  placeholder = 'Escribe el precio del material' required type = 'text'  id='unitaryPrice' class =' select-validated form-control' name="unitaryPrice" /> 
                            <div class="invalid-feedback">Ingresa el precio del producto</div>
                          </div>
                           <div class="form-group col-md-6">
                           <label for="recipient-name" class="col-form-label">
                               Precio del Proveedor:
                           </label>
                           <input onkeypress ='return onlyNumbers(this);'  required   placeholder = 'Escribe el precio del Proveedor' type = 'text'  id='supplierPrice' class ='select-validated form-control' name="supplierPrice" /> 
                           <div class="invalid-feedback">Ingresa el código del Material</div>
                           </div>
                        <div class="form-group col-md-12">
                          <label for="recipient-name" class="col-form-label">
                            Imagen del material:
                          </label>
                          <input  type = 'file'  id='photo' class ='form-control input-file-modal' name="photo" /> 
                          <div class="invalid-feedback">Selecciona una imagen</div>
                        <div>
                      </div>
                         `;
    //	<input type="file" class="custom-file-input" id="validatedCustomFile" required>
    //<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
  
    //Se verifica que si el campo se actualiza o añade
    var filter = [inputOldSelect, "=", gerValueInput];
    newParameterFilter.push(filter);
    listFieldsMaterials.map((item, index) => {
      //Solamente si ya existe el campo
      if (item == inputOldSelect) {
        var removeItem = newParameterFilter;
        removeItem.map((item, index) => {
          if (item[0] == inputOldSelect) {
            newParameterFilter.splice(index);
          }
        });
        //Elimina todas las opciones anteriores
        $(`${"#box-input-" + index}`)
          .nextAll()
          .remove();
        newParameterFilter.push(filter);
      }
    });
    var isRequired = null;
    //Se cambia a input viejo a uno nuevo
    switch (inputOldSelect) {
      case "category":
        //Sera el campo siguiente una vez que selecciones o ingreses un valor en el anteriro campo
        newCategoryInput = "group3";
        newNameCategory = "Grupo 3";
        optionSelect = "Escoge un grupo";
        isRequired = true;
        break;
      case "group3":
        newCategoryInput = "group4";
        newNameCategory = "Grupo 4";
        optionSelect = "Escoge un grupo";
        isRequired = true;
        break;
      case "group4":
        newCategoryInput = "group5";
        newNameCategory = "Grupo 5";
        optionSelect = "Escoge un grupo ";
        isRequired = true;
        break;
      case "group5":
        newCategoryInput = "group6";
        newNameCategory = "Grupo 6";
        optionSelect = "Escoge una medida";
        isRequired = true;
        break;
      case "group6":
        newCategoryInput = "group7";
        newNameCategory = "Grupo 7";
        optionSelect = "Escoge una medida";
        isRequired = true;
        break;
      case "group7":
        newCategoryInput = "mark";
        newNameCategory = "Marca";
        optionSelect = "Escoge una marca";
        isRequired = false;
        break;
      case "mark":
        newCategoryInput = "nameCommercial";
        newNameCategory = "Proveedores";
        isRequired = true;
        optionSelect = "Escoge un proveedor";
        break;
      case "nameCommercial":
        newCategoryInput = "completed";
        isRequired = false;
        break;
    }
    if (newCategoryInput == "completed") {
      $("#loader").fadeIn();
      setTimeout(() => {
        $("#loader").fadeOut();
        $(`#containerMaterial`).append(newsInputs);
      }, 500);
    }
    if (gerValueInput != "" && newCategoryInput != "completed") {
      //Servicio Ajax
      $.ajax({
        // url:"{{route('material')}}",
        url: "/material/find",
        method: "POST",
        headers: {
          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        },
  
        data: {
          //Madera
          inventoryActual: inputActual,
          selectCategory: newCategoryInput,
          filterMaterial: newParameterFilter
        },
        success: function (data) {
  
          console.log(data)
          //Se agrega el campo una vez que ya se ha generado la peticion y ha sido exitosa
          listFieldsMaterials.push(inputOldSelect);
          //   console.log(data);
          $("#loader").fadeIn();
  
          setTimeout(() => {
            $("#loader").fadeOut();
  
            var inputSelectCategory = `
                      <div id = 'box-input-${(indexBox += 1)}' class="form-group col-md-6">
                          <label for="recipient-name" class="col-form-label">
                          ${newNameCategory}:
                          </label>
                          <select required = "${isRequired}" onChange ='return addedInput(this);'  class ='select-validated form-control' name="${newCategoryInput}" id="${newCategoryInput}">
                          <option selected value= "">${optionSelect}</option>   
                      </select> 
                      <div class="invalid-feedback">${optionSelect} correcta</div>
                      </div>`;
            $("#containerMaterial").append(inputSelectCategory);
  
            if (newCategoryInput == "mark") {
              $("#mark").removeAttr("required");
            }
  
            // if (newCategoryInput == "mark") {
            //   console.log('/////////////////////////////////')
            //   console.log(data)
            //   for (i = 0; i < data[0].length; i++) {
            //    // console.log(data[0])
            //     let $option = $("<option />", {
            //       text: data[i][`${newCategoryInput}`],
            //       value: data[i][`${newCategoryInput}`]
            //     });
            //     //Siempre sera la primera posicion del array las marcas 
            //     //La segunda sera de los provedores
  
            //     console.log(data[0].length)
  
            //      $(`#${newCategoryInput}`).prepend($option);
  
            //  }
            //  }else{
  
            for (i = 0; i < data.length; i++) {
              let $option = $("<option />", {
                text: data[i][`${newCategoryInput}`],
                value: data[i][`${newCategoryInput}`]
              });
              $(`#${newCategoryInput}`).prepend($option);
            }
            //  }
            if (data.length == 0 && inputOldSelect == "group7") {
              $("#loader").fadeIn();
              setTimeout(() => {
                $("#loader").fadeOut();
                $(`#containerMaterial`).append(newsInputs);
              }, 100);
            }
          }, 100);
        }
      });
    }
  }
  
  function onlyNumbers(e) {
    if (event.charCode >= 48 && event.charCode <= 57) {
      return true;
    } else {
      event.preventDefault();
    }
  }
  
  var getDataMaterialEntry = [];
  var getDataMaterialDeparture = [];

  function clearInfoMaterialOfInventory(){
    $('#trEntryMaterial').fadeOut();
    $('#trDepartureMaterial').fadeOut();
  }
  function getInfoMaterialOfInventory(){
    for (let index = 0; index < getDataMaterialEntry.length; index++) {
      const element = getDataMaterialEntry[index];
      let entryMaterial = `
      <tbody>
      <tr>
          <td>${element.idEntry}</td>
          <td>${element.entryDate}</td>
          <td>${element.quantity}</td>
      </tr>
      </tbody>`;
      $('#trEntryMaterial').prepend(entryMaterial);                    
    }
   
    for (let index = 0; index < getDataMaterialDeparture.length; index++) {
      const element = getDataMaterialDeparture[index];
      let departureMaterial = `
      <tbody>
      <tr>
      <td>${element.idDeparture}</td>
      <td>${element.departureDate}</td>            
        <td>${element.quantity}</td>
      </tr>
      </tbody>`;
      $('#trDepartureMaterial').prepend(departureMaterial);
    }
    $('#modalEditMaterial').css("width","750px");
    checkLoaderModalEdit();
  }


  function getInfoMaterial(id) {
  
    $('#box-inputs').remove();
    $("#loader-edit-home").fadeIn();
    $("#loader-edit-provider").fadeIn();
    $("#loader-edit-departure").fadeIn();
    $("#loader-edit-entry").fadeIn();

    clearInfoMaterialOfInventory();
    
    $.ajax({
      //url: '/material/' + id + '/edit',
      url: ' /inventory/material/edit/' + id,
      method: "GET",
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
      },
      success: function (data) {
       
        $('#code-material').val(data[0].materialCode);
        $('#price-provider').val(data[0].supplierPrice);
        $('#provider-material').val(data[0].nameCommercial);
        setTimeout(() => {
          actualEditId = data[0].idMaterial;
          // $("#loader-edit").fadeOut();
          var completeInputs = `
                  <div class="row" id= 'box-inputs'>
                   <div class="form-group col-md-6">
                       <label for="recipient-name" class="col-form-label">
                           Inventario:
                       </label>
                       <input value = "${data[0].inventory}" disabled  type = 'text'  id='inventory' class ='form-control' name="inventory" /> 
                   </div>
                   <div class="form-group col-md-6">
                       <label for="recipient-name" class="col-form-label">
                           Categoría:
                       </label>
                       <input value = "${data[0].category}" disabled  type = 'text'  id='category' class ='form-control' name="category" /> 
                   </div>
                   <div class="form-group col-md-12">
                       <label for="recipient-name" class="col-form-label">
                           Nombre:
                       </label>
                       <input  value= "${data[0].nameMaterial}"  type = 'text'  id='nameMaterial' class ='form-control' name="nameMaterial" /> 
                   </div>
                   <div class="form-group col-md-6">
                       <label for="recipient-name" class="col-form-label">
                           SubCategoría:
                       </label>
                       <input value = "${data[0].group3}" disabled type = 'text'  id='group3' class ='form-control' name="group3" /> 
                   </div>
                   <div class="form-group col-md-6">
                       <label for="recipient-name" class="col-form-label">
                           Tipo (Grupo):
                       </label>
                       <input value = "${data[0].group4}" disabled  type = 'text'  id='group4' class ='form-control' name="group4" /> 
                   </div>
                   
                   <div class="form-group col-md-6">
                       <label for="recipient-name" class="col-form-label">
                          Opciones (Grupo2):
                       </label>
                       <input value = "${data[0].group5}" disabled  type = 'text'  id='group5' class ='form-control' name="group5" /> 
                   </div>
                   
                   <div class="form-group col-md-6">
                       <label for="recipient-name" class="col-form-label">
                         Grosor (Grupo3):
                       </label>
                       <input value  = "${data[0].group6}" disabled type = 'text'  id='group6' class ='form-control' name="group6" /> 
                   </div>
                   
                   <div class="form-group col-md-6">
                       <label for="recipient-name" class="col-form-label">
                         Medidas (Grupo4):
                       </label>
                       <input value = "${data[0].group7}" disabled  type = 'text'  id='group7' class ='form-control' name="group7" /> 
                   </div>
                   
                   <div class="form-group col-md-6">
                       <label for="recipient-name" class="col-form-label">
                           Marca:
                       </label>
                       <input value = "${data[0].mark}" disabled type = 'text'  id='mark' class ='form-control' name="mark" /> 
                   </div>
                   
                   <div class="form-group col-md-6">
                       <label for="recipient-name" class="col-form-label">
                           Preio Unitario:
                       </label>
                       <input value = "${data[0].unitaryPrice}"  type = 'text'  id='unitaryPrice' class ='form-control' name="unitaryPrice" /> 
                   </div>
                   
                   <div class="form-group col-md-6">
                       <label for="recipient-name" class="col-form-label">
                           Stock:
                       </label>
                       <input value = "${data[0].stock}"  min="0" type = 'number'  id='stock' class ='form-control' name="stock" /> 
                   </div>
                   <div class="container-img">
                      <img src="./assets/img/materials/${data[0].photo}" class="size-img-material" alt="">
                    </div>
                  </div>	`;

          getDataMaterialEntry =  data[1];
          getDataMaterialDeparture = data[2];       
          $('.container-inputs-material').append(completeInputs);
          
          checkLoaderModalEdit();
          $('#trDepartureMaterial').fadeIn();
          $('#trEntryMaterial').fadeIn();
  
        }, 700);
  
  
      }
    });
  
  }

function checkLoaderModalEdit(){
  
  let itemsLoader =  ["home","provider","departure","entry"];
          for (let index = 0; index < itemsLoader.length; index++) {
            const element = $(`#${itemsLoader[index]}`);
            if(element.hasClass( "active" )){
              $(`#loader-edit-${itemsLoader[index]}`).fadeOut();
            }
          }
}

//Abrir el modal de editar
  // Mover la function al archivo de entradas

function getInfoEntry(id) {

  $('#box-inputs').remove();
  $("#loader-edit-entry").fadeIn();
  $.ajax({

     url:'/inventory/entry/edit/' + id,
     // url: '/entry/' + id + '/edit',
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

              var reltivePath = `./img/materials/${data.photo}`;
              if(data.photo == undefined){
                reltivePath =  "./img/materials/image-default.png";
              }

              $("#loaderEditEntrySearch").fadeOut();
              var completeInputs = `
              <div class="row" id= 'box-inputs'>
              <div class="form-group col-md-12">
                  <label for="recipient-name" class="col-form-label">
                      Nombre del material:
                  </label>
                  <input value = "${data.nameMaterial}" readonly  type = 'text'  id='entryDate' class ='form-control' name="entryDate" /> 
              </div>
               <div class="col-md-6">
                   <label for="recipient-name" class="col-form-label">
                       Fecha:
                   </label>
                   <input value = "${formatDays}" readonly  type = 'text'  id='entryDate' class ='form-control' name="entryDate" /> 
               </div>
               <div class = "col-md-6">
               <label for="recipient-name" class="col-form-label">
               Recibio:
              </label>
              <input value = "${data.completeName}" readonly  type = 'text'  id='nameCompleted' class ='form-control' name="nameCompleted" /> 
               </div>
               
              
               <div class="col-md-6">
                   <label for="recipient-name" class="col-form-label">
                       Cantidad:
                   </label>
                   <input  value= "${data.quantity}" readonly  type = 'text'  id='quantity' class ='form-control' name="quantity" /> 
               </div>
               <div class="col-md-6">
                   <label for="recipient-name" class="col-form-label">
                       Stock Existente:
                   </label>
                   <input value = "${data.stock}" readonly type = 'text'  id='stock' class ='form-control' name="stock" /> 
               </div>

               <div class="box-img-modal-entry">
                  <img src="./assets/img/materials/${data.photo}" class="size-img-material" alt="">
              </div>
           `;

              $('.container-inputs-entry').append(completeInputs);
              $("#loader-edit-entry").fadeOut();

          }, 700);


      }
  });

}
//Abrir el modal de editar

function getInfoDeparture(id) {

  $('#box-inputs').remove();
  $("#loader-edit-entry").fadeIn();
  $.ajax({

      url:"/inventory/departure/edit/" + id,
      //url: '/departure/' + id + '/edit',
      method: "GET",
      headers: {
          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
      },
      success: function (data) {
          
          const format2 = "YYYY-MM-DD";

          var formatDays = moment(data.departureDate).format(format2);

          console.log(data);
          setTimeout(() => {
              actualEditId = data.idMaterial;
              $("#loaderEditEntrySearch").fadeOut();
              var completeInputs = `
              <div class="row" id= 'box-inputs'>
              <div class="col-md-6">
                  <label for="recipient-name" class="col-form-label">
                      Nombre de la obra:
                  </label>
                  <input value = "${data[0].nameWorkSite}" readonly  type = 'text'  id='constructionName' class ='form-control' name="constructionName" /> 
              </div>
              <div class="col-md-6">
                  <label for="recipient-name" class="col-form-label">
                    Personal que lo entregó:
                 </label>
                 <input  value= "${data[0].completeName}" readonly  type = 'text'  id='quantity' class ='form-control' name="quantity" /> 
             </div>
              <div class="col-md-12">
                  <label for="recipient-name" class="col-form-label">
                      Nombre del material:
                  </label>
                  <input value = "${data[0].nameMaterial}" readonly  type = 'text'  id='entryDate' class ='form-control' name="entryDate" /> 
              </div>
               <div class="col-md-6">
                   <label for="recipient-name" class="col-form-label">
                       Fecha:
                   </label>
                   <input value = "${formatDays}" readonly  type = 'text'  id='entryDate' class ='form-control' name="entryDate" /> 
               </div>
               <div class="col-md-6">
                   <label for="recipient-name" class="col-form-label">
                   Personal que lo recibió:
                   </label>
                   <input value = "${data[1].completeName}" readonly  type = 'text'  id='nameCompleted' class ='form-control' name="nameCompleted" /> 
               </div>
               <div class="col-md-6">
                   <label for="recipient-name" class="col-form-label">
                       Cantidad:
                   </label>
                   <input  value= "${data[0].quantity}" readonly  type = 'text'  id='quantity' class ='form-control' name="quantity" /> 
               </div>
               <div class="col-md-6">
                   <label for="recipient-name" class="col-form-label">
                       Stock Existente:
                   </label>
                   <input value = "${data[0].stock}" readonly type = 'text'  id='stock' class ='form-control' name="stock" /> 
               </div>

               <div class="box-img-modal-entry">
                  <img src="./assets/img/materials/${data[0].photo}" class="size-img-material" alt="">
              </div>
           `;

              $('.container-inputs-entry').append(completeInputs);
              $("#loader-edit-entry").fadeOut();
          }, 700);


      }
  });

}

  function updateInfoM() {
    //Se obtiene el valor de los inputs
    var formId = $('#form-edit');
    let formValues = {};
    let sendForm = [];
    var form1Inputs = document.forms[6].getElementsByTagName("input");
   for (let i = 0; i < form1Inputs.length; i++) {
      if (form1Inputs[i].name != '_token') {
        formValues[form1Inputs[i].name] = form1Inputs[i].value;
      }
    }
  
    //sendForm.push(formValues);
    $.ajax({
  
      url:"/inventory/material-update/edit/" + actualEditId,
      //url: '/material/' + actualEditId,
      method: "PUT",
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
      },
      data: {
  
        materialUpdate: formValues,
        materialId: actualEditId
      },
      success: function (data) {
        console.log(data);
      }
    }).then((result) => {
      if (result){
        let timerInterval;
        Swal.fire({
          title: 'Se guardo correctamente',
          timer: 2000,
          timerProgressBar: true,
          willClose: () => {
            clearInterval(timerInterval)
          }
        },);
      }else{
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Al parecer paso algo',
          timer: 2000,
          showCloseButton: false,
          showCancelButton: false,
          timerProgressBar: true,
          willClose: () => {
            clearInterval(timerInterval)
          }
        },);
      }
    })
  }