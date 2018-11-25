			$(document).ready(Principal);

			function Principal(){
				//---------IMAGENES-----------//
				$("#btnA").click(AumentaA);
				$("#btnB").click(AumentaB);
				$("#btnC").click(AumentaC);
				$("#btnD").click(AumentaD);

				//-------USO-DEL-$(this)------//
				$("#inst").click(HideP);

		    	//------LIMPIADOR-DE-DIV------//
				$("#limpiador").mouseover(Limpio);

			}


			//-----------------AUMENTA-TAMAÑO-IMAGENES---------------------//			

			function AumentaA() {$("#divimg1").fadeOut("slow", ImagenA);}
			function AumentaB() {$("#divimg1").fadeOut("slow", ImagenB);}
			function AumentaC() {$("#divimg1").fadeOut("slow", ImagenC);}
			function AumentaD() {$("#divimg1").fadeOut("slow", ImagenD);}			

			function ImagenA(){
				$("#divimg1").fadeIn("slow");
				$("#divimg1").html("<img src='imagenes/juego.png' width='600'>");
			}
			function ImagenB(){
				$("#divimg1").fadeIn("slow");
				$("#divimg1").html("<img src='imagenes/juego2.png' width='600'>");
			}
			function ImagenC(){
				$("#divimg1").fadeIn("slow");
				$("#divimg1").html("<img src='imagenes/juego3.png' width='600'>");
			}
			function ImagenD(){
				$("#divimg1").fadeIn("slow");
				$("#divimg1").html("<img src='imagenes/juego4.png' width='600'>");
			}			
			
			function HideP(){
				$(this).hide("slow");
			}

			//-------------------LIMPIA-EL-DIV-INFERIOR--------------------//
			
			function Limpio() {
				$("#divimg1").fadeOut("slow", Restaura);
			}
			function Restaura(){
				$("#divimg1").fadeIn("slow");
				$("#divimg1").html("...");
			}

			//--------------------------------------------------------------//

			//---------------------------------------------------------------//
     		