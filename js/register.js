 $(document).ready( function() {  
    $("#Selectmarca").on('change', function () {
    var selectMarca = $(this).val();
    $.ajax({
        type: "POST",
        url: "pre_renta_select.php",
        data: {'selectMarca': selectMarca },
        success: function (data) {
            var d = JSON.parse(data);
            //d = d[0];
            console.log(d.IDModelo);
             console.log(d.Descripcion);
            console.log(data);// do things

    $('#Selectmodelo').attr('enabled', 'true');
    $.each(d, function() {
        $('#Selectmodelo').empty();
        $('#Selectplaca').empty();
        $('#Selectplaca').append(
            $("<option></option>").text('Placas').val(''));
        $('#Selectmodelo').append(
            $("<option></option>").text('Modelos').val(''));
        
        $('#Selectmodelo').append(
            $("<option></option>").text(d.Descripcion).val(d.IDModelo)
        );
    });
        }
    });
});

    $("#Selectmodelo").on('change', function () {
    var selectModelo = $(this).val();
    var selectMarca1 = $('#Selectmarca').val();
    var actionData = "selectModelo=" + selectModelo + "&selectMarca1=" + selectMarca1;
    $.ajax({
        type: "POST",
        url: "pre_renta_select.php",
        data: actionData ,
        success: function (data) {
            var d = JSON.parse(data);
            console.log(d.IDModelo);
             console.log(d.Descripcion);
            console.log(data);// do things

    $('#Selectplaca').attr('enabled', 'true');
    $.each(d, function() {
        $('#Selectplaca').empty();
        $('#Selectplaca').append(
            $("<option></option>").text('Placas').val(''));
        
        $('#Selectplaca').append(
            $("<option></option>").text(d.Placa).val(d.Placa)
        );
    });
       
        }
    });
});
 
   });



