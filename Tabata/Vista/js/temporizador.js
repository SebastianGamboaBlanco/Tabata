'use strict'
function cronometro(numSeries,numRondas,tPreparacion,tDescanso,tActividad,tTotalseg){
    let numron=1;
    let numSe=1;
    let esperaAct=0
    let esperaDes=0
    correr('Tiempo de preparacion',tPreparacion); 
    
    //while(numron<=numRondas){
        //while(numSe<=numSeries){
            esperaAct=tPreparacion*1000;
            esperaDes=tActividad*1000;
            setTimeout(correr,esperaAct+1000,'Tiempo de actividad',tActividad);
            setTimeout(correr,(esperaAct+1000)+(esperaDes+1000),'Tiempo De Descanso',tDescanso);
            //numSe=numSe+1;
       // }
       // numron++; 
   //}
   

}

function temporizador(id,inicio,final){
    this.id=id;
    this.inicio=inicio;
    this.final=final;
    this.contador=this.inicio;

    this.conteoSeg=function(){
        if(this.contador == this.final){
            this.conteoSeg==null;
            return;
        }
        $(this.id).val(this.contador=this.contador-1).trigger('change');
        setTimeout(this.conteoSeg.bind(this),1000);
    };
}

function correr(nombre,num){
    $(".circulo").append("<input type='text'class='circle'></input>");
    $(".evento").html(nombre);
    $(".circle").val(num).trigger('change');
    $(".circle").knob({
        "min":0,
        "max":num,
        "width":250,
        "height":250,
        "fgColor":"#171f46",
        "readOnly":true,
    })
    let temp= new temporizador(".circle",num+1,0);
    temp.conteoSeg();
    setTimeout(eliminar,num*1000);
}

function eliminar(){
    $('.circle').parent().remove();
    $('.circle').remove();

}
