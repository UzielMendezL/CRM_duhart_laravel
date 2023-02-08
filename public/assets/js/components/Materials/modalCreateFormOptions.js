function formInventory(inventory){
    //	$('#form-Material').addClass('was-validated');
    $("#addMaterial").removeAttr("disabled");
    inputActual = inventory;
    var filter = ["inventory", "=", inputActual];
    newParameterFilter.push(filter);

    $.ajax({
        // url:"{{route('material')}}",
        url: "/material/find",
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        },

        data: {
            inventoryActual: inputActual,
            selectCategory: "category",
            filterMaterial: newParameterFilter
        },
        success: function(data) {
            setTimeout(() => {
                $("#loader").fadeOut();
                var selectCategory = `
                <div id ='containerNameMaterial' class="form-group col-md-12">
                    <label for="recipient-name" class="col-form-label">
                    Nombre del material:
                    </label>
                    <input required placeholder = 'Escribe el nombre del material' required type = 'text'  id='nameMaterial' class ='select-validated form-control' name="nameMaterial"/> 
                    <div class="invalid-feedback">Escribe el nombre del producto</div>
                </div>
                <div id = 'box-input-0' class="form-group col-md-6">
                    <label for="recipient-name" class="col-form-label">
                    Categoria:
                    </label>
                    <select required onChange ='return addedInput(this);' id='category' class ='select-validated form-control' name="category">
                        <option value="">Escoge una categoría</option>   
                    </select> 
                    <div class="invalid-feedback">Selecciona la categoría</div>
                </div>
                
                    `;
                $("#containerMaterial").append(selectCategory);
                //$("#chooseMaterial").after(selectCategory);

                for (i = 0; i < data.length; i++) {
                    let $option = $("<option />", {
                        text: data[i].category,
                        value: data[i].category
                    });
                    $("#category").prepend($option);
                }
            }, 700);
        }
    });


}