'use strict'
//$('.container-tabata').hide();
$(document).ready(function(){
    $(".inic").hide();
    $(".empezar").hide();
    ajaxVerTabatas();
    
})

function ajaxVerTabatas(){
    $.ajax({
        url: "../Controlador/accion/ajax_verTabatas.php",
        success: function(resultado){
            insertarTabatas(JSON.parse(resultado))
        },
        error: function(xhr){
            alert("Ocurrio un error: "+ xhr.status+" "+ xhr.statusText);
        }
    });
}

function insertarTabatas(resultado){
    let tabata='';

    $.each(resultado, function(i){
        tabata += '<div class="col-4 ">' 
        +'<div class="card" style="width: 18rem; ">'
        +'<img class="card-img-top" src="./img/imgCards.jpg" alt="Card image cap">'
        +'<div class="card-body">'
        +'<h5 class="card-title text-center text-dark">'+resultado[i].nombre.charAt(0).toUpperCase()+resultado[i].nombre.slice(1)+'</h5>'
        +'<a type="button" href="#" class="ver btn btn-primary mr-2" id='+resultado[i].id+'>Ver</a>'
        +'<a type="button" class="editar btn btn-warning mr-2 ml-1 " data-toggle="modal" data-target="#modalEditarTabata" id='+resultado[i].id+'>Editar</a>'
        +'<a href="../Controlador/accion/act_eliminarTabata.php?id='+resultado[i].id+'" class="btn btn-danger ml-1">Eliminar</a>'
        +'</div>'
        +'</div>'
        +'</div>'
    })
    $('#tabata').append(tabata);
    editarDatos();
    ver();
    

}

function editarDatos(){
    $(".editar").on("click",function(){
        let idTabata=$(this).closest("a").attr("id");
        $.ajax({
            type: "POST",
            data: {idTabata: parseInt(idTabata,10)},
            url: "../Controlador/accion/ajax_verTabataId.php",
            success: function(data){
                let tabata=JSON.parse(data);
                $("#modalEditarTabata input[name='id']").val(tabata[0].id);
                $("#modalEditarTabata input[name='nombre']").val(tabata[0].nombre);
                $("#modalEditarTabata input[name='tPreparacion']").val(tabata[0].tPreparacion);
                $("#modalEditarTabata input[name='tActividad']").val(tabata[0].tActividad);
                $("#modalEditarTabata input[name='tDescanso']").val(tabata[0].tDescanso);
                $("#modalEditarTabata input[name='numSeries']").val(tabata[0].numSeries);
                $("#modalEditarTabata input[name='numRondas']").val(tabata[0].numRondas);
                
            }
        })
    })
}

function ver(){
    $(".ver").on("click",function(){
    let idTabata=$(this).closest("a").attr("id");
    $.ajax({
        type: "POST",
        data: {idTabata: parseInt(idTabata,10)},
        url: "../Controlador/accion/ajax_verTabataId.php",
        success: function(data){
            let tabata =JSON.parse(data);
            let numSeries=parseInt(tabata[0].numSeries);
            let tPreparacion=parseInt(tabata[0].tPreparacion);
            let numRondas=parseInt(tabata[0].numRondas);
            let tDescanso=parseInt(tabata[0].tDescanso);
            let tActividad=parseInt(tabata[0].tActividad);
            let tTotalseg=(((tDescanso+tActividad)*numSeries)*numRondas)+tPreparacion;
            let tTotal= convertir(tTotalseg);

            $("#serie").html(numSeries);
            $("#tPreparacion").html(tPreparacion);
            $("#tActividad").html(tActividad);
            $("#numRondas").html(numRondas);
            $("#tDescanso").html(tDescanso);
            $("#tTotal").html(tTotal);
            $(".iniciar").attr('id',tabata[0].id);
            $(".Tabatas").hide();
            $(".inic").show();
                      
        }
    })
    })
}
function convertir(seconds) {
    var hour = Math.floor(seconds / 3600);
    hour = (hour < 10)? '0' + hour : hour;
    var minute = Math.floor((seconds / 60) % 60);
    minute = (minute < 10)? '0' + minute : minute;
    var second = seconds % 60;
    second = (second < 10)? '0' + second : second;
    return minute + ':' + second;
}

function iniciar(comp){
    let idTabata=comp.id;
    $.ajax({
        type: "POST",
        data: {idTabata: parseInt(idTabata,10)},
        url: "../Controlador/accion/ajax_verTabataId.php",
        success: function(data){
            let tabata =JSON.parse(data);
            let numSeries=parseInt(tabata[0].numSeries);
            let tPreparacion=parseInt(tabata[0].tPreparacion);
            let numRondas=parseInt(tabata[0].numRondas);
            let tDescanso=parseInt(tabata[0].tDescanso);
            let tActividad=parseInt(tabata[0].tActividad);
            let tTotalseg=(((tDescanso+tActividad)*numSeries)*numRondas)+tPreparacion;
            $(".inic").hide();
            $(".empezar").show();
            cronometro(numSeries,numRondas,tPreparacion,tDescanso,tActividad,tTotalseg);
            
                      
        }
    })
    
}