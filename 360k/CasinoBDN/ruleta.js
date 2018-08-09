        var saldo=2000; ganas=0;
        var miRuleta = new Winwheel({
          'numSegments':25,
          'outerRadius':170,
          'segments':[
            {'fillStyle': '#58FA58', 'text':'0'},
            {'fillStyle': '#F78181', 'text':'15'},
            {'fillStyle': '#BDBDBD', 'text':'19'},
            {'fillStyle': '#F78181', 'text':'4'},
            {'fillStyle': '#BDBDBD', 'text':'21'},
            {'fillStyle': '#F78181', 'text':'2'},
            {'fillStyle': '#BDBDBD', 'text':'17'},
            {'fillStyle': '#F78181', 'text':'6'},
            {'fillStyle': '#BDBDBD', 'text':'13'},
            {'fillStyle': '#F78181', 'text':'11'},
            {'fillStyle': '#BDBDBD', 'text':'8'},
            {'fillStyle': '#F78181', 'text':'23'},
            {'fillStyle': '#BDBDBD', 'text':'10'},
            {'fillStyle': '#F78181', 'text':'5'},
            {'fillStyle': '#BDBDBD', 'text':'24'},
            {'fillStyle': '#F78181', 'text':'16'},
            {'fillStyle': '#BDBDBD', 'text':'1'},
            {'fillStyle': '#F78181', 'text':'20'},
            {'fillStyle': '#BDBDBD', 'text':'14'},
            {'fillStyle': '#F78181', 'text':'9'},
            {'fillStyle': '#BDBDBD', 'text':'22'},
            {'fillStyle': '#F78181', 'text':'18'},
            {'fillStyle': '#BDBDBD', 'text':'7'},
            {'fillStyle': '#F78181', 'text':'12'},
            {'fillStyle': '#BDBDBD', 'text':'3'},
          ],

          'animation':{
            'type': 'spinToStop',
            'duration':6,
            'callbackFinished': 'Mensaje()',
            'callbackAfter': 'dibujarIndicador()'
          }

        });

        function Mensaje() {
           var SegmentoSeleccionado = miRuleta.getIndicatedSegment();
           miRuleta.stopAnimation(false);
           miRuleta.rotationAngle = 0;
           miRuleta.draw();
           premios(SegmentoSeleccionado.text);
           dibujarIndicador();
       }

       function push(){
         $('#resultado').html("");
         $('#Numero').html("");
         var valor=$('#apuesta').val();
         if (saldo<0){
           alert('Tu saldo es 0 Se recargara');
           saldo=2000;
         }
         $('#Saldo').html("Saldo.:"+saldo);
         if (valor>24){
           $('#resultado').html("Numero Mayor de 24");
           return;
         }
          miRuleta.startAnimation();
          $('#resultado').html("");
       }

        dibujarIndicador();

        function dibujarIndicador() {
            var ctx = miRuleta.ctx;
            ctx.strokeStyle = 'navy';
            ctx.fillStyle = 'black';
            ctx.lineWidth = 2;
            ctx.beginPath();
            ctx.moveTo(170, 0);
            /*
            ctx.lineTo(230, 0);
            ctx.lineTo(200, 40);
            ctx.lineTo(171, 0);*/
            ctx.lineTo(210, 0);
            ctx.lineTo(180, 40);
            ctx.lineTo(151, 0);
            ctx.stroke();
            ctx.fill();
       }

       function premios(SegmentoSeleccionado){
         var apuesta = $('#apuesta').val()
          $('#Saldo').html("Saldo.:"+saldo);
         if(apuesta===SegmentoSeleccionado && SegmentoSeleccionado!=="0"){
           $('#resultado').html("Has Ganado");
           saldo=saldo*2;
         }else if(apuesta===SegmentoSeleccionado && SegmentoSeleccionado==="0"){
           $('#resultado').html("Salio 0 tu Saldo * 50");
           saldo=saldo*50;
         }else{
           $('#resultado').html("Has Perdido");
           $('#Numero').html("Salio el Numero "+Number(SegmentoSeleccionado));
           saldo=saldo-100;
         }
       }
