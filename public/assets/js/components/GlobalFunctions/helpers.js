$(document).ready(function () {

  });
function getEstimationDepartureGlobal(idWorkSite,html ){
    // idObra, idHtml
    if(idWorkSite > 0 ){
  
      $.ajax({
           url:"/inventory/departure/search-estimation-" + idWorkSite,
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