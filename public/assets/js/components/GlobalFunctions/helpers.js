$(document).ready(function () {

  });
function getEstimationDepartureGlobal(idWorkSite,html, typeAjax ){
    // idObra, idHtml
let dynamicUrl = "";
switch (typeAjax) {
  case 'provider':
    dynamicUrl= '/list-providers-active/'
    break;

    case 'estimation':
      dynamicUrl = "/inventory/departure/search-estimation-";
    break;
}
    if(idWorkSite > 0 ){
  
      $.ajax({
           url: dynamicUrl + idWorkSite,
           method: "GET",
           headers: {
               "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
           },
           success: function (result) {
              
              for (i = 0; i < result.length; i++) {
                  let iteration = result[i];
                  var option = `<option value = "${iteration.idEstimation}" >${iteration.nameEstimation}</option>`
                  $(`#${html}`).prepend(option)    
              }
           }
       });
    }
  }