<!DOCTYPE html>
<html>
    <head>
    <title>Tabuleiro virtual</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
    <!-- Documentos CSS LOCAIS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="css/prettify.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Bibliotecas javascript
    ================================================== -->
    <script type="text/javascript" src="js/widgets.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script src="js/bootstrap-affix.js"></script>
    <script src="js/bootstrap-inputmask.js"></script>
    <script src="js/bootstrap-rowlink.js"></script>
    <script src="js/bootstrap-fileupload.js"></script>
    <script src="js/holder.js"></script>
    <script src="js/prettify.js"></script>
    <script src="js/application.js"></script>   
    <script type="text/javascript">
    	$(document).ready(function(){
			var cont=1;		
			var jogador1=prompt("Nome do Jogador 1:");
			var jogador2=prompt("Nome do Jogador 2:");
			var x="x";
			var o="o";			
			var nome1="x => "+jogador1;
			var nome2="o => "+jogador2;
										   
			$("form[name='jogo'] input").each(function(){
                $(this).focus(function(){				
					if(cont%2!=0){
						$(this).val(x);
						cont++;
					}
					else{
						$(this).val(o);
						cont++;
					}
					//horizontal 1
					if($("input[name='1']").val()==x && 
				   	   $("input[name='2']").val()==x &&
				       $("input[name='3']").val()==x ||
					//horizontal 2
					   $("input[name='4']").val()==x && 
				   	   $("input[name='5']").val()==x &&
				       $("input[name='6']").val()==x ||
					//horizontal 3
					   $("input[name='7']").val()==x && 
				   	   $("input[name='8']").val()==x &&
				       $("input[name='9']").val()==x ||
					//vertical 1
					   $("input[name='1']").val()==x && 
				   	   $("input[name='4']").val()==x &&
				       $("input[name='7']").val()==x ||
					//vertical 2
					   $("input[name='2']").val()==x && 
				   	   $("input[name='2']").val()==x &&
				       $("input[name='8']").val()==x ||
					//vertical 3
					   $("input[name='3']").val()==x && 
				   	   $("input[name='6']").val()==x &&
				       $("input[name='9']").val()==x ||
					//diagonal-principal  
					   $("input[name='1']").val()==x && 
				   	   $("input[name='5']").val()==x &&
				       $("input[name='9']").val()==x ||
					//diagonal-secundaria
					   $("input[name='3']").val()==x && 
				   	   $("input[name='5']").val()==x &&
				       $("input[name='7']").val()==x 
					  ){
						
						alert("Vencedor: "+nome1); 
						location="index.php";
					};
					
					//horizontal 1
					if($("input[name='1']").val()==o && 
				   	   $("input[name='2']").val()==o &&
				       $("input[name='3']").val()==o ||
					//horizontal 2
					   $("input[name='4']").val()==o && 
				   	   $("input[name='5']").val()==o &&
				       $("input[name='6']").val()==o ||
					//horizontal 3
					   $("input[name='7']").val()==o && 
				   	   $("input[name='8']").val()==o &&
				       $("input[name='9']").val()==o ||
					//vertical 1
					   $("input[name='1']").val()==o && 
				   	   $("input[name='4']").val()==o &&
				       $("input[name='7']").val()==o ||
					//vertical 2
					   $("input[name='2']").val()==o && 
				   	   $("input[name='2']").val()==o &&
				       $("input[name='8']").val()==o ||
					//vertical 3
					   $("input[name='3']").val()==o && 
				   	   $("input[name='6']").val()==o &&
				       $("input[name='9']").val()==o ||
					//diagonal-principal  
					   $("input[name='1']").val()==o && 
				   	   $("input[name='5']").val()==o &&
				       $("input[name='9']").val()==o ||
					//diagonal-secundaria
					   $("input[name='3']").val()==o && 
				   	   $("input[name='5']").val()==o &&
				       $("input[name='7']").val()==o 
					  ){
						alert("Vencedor: "+nome2); location="index.php";
					};
					
				});
				
				
            });
			
			// -----teste----
			//$("input[name='1']").keyup(function(){
				//var valor=$(this).val();
				//$("input[name='3']").val(valor);
				//alert("o valor do campo 1 é: "+valor);
			//});
		});
   	</script>        
    </head>
    
       
    <body>
    
  	<!--@@@@@@@@@@@@@@ tabela do jogo @@@@@@@@@@@@@@@-->
    <?php
	ini_set('default_charset','UTF-8');
	error_reporting(0);
	include_once("processo.php");   
    ?>
      
      <div id="tabuleiro" align="center">                   
      <form name="jogo" action="#" method="post">
      
     <table>
        <thead>
     		<!--tr><th align="center" colspan="3" id="texto-tabuleiro">Tabuleiro Virtual</th></tr-->
       </thead>
	</table>
    
    <br/>
      
      <table>
           <thead>
           		<tr><th align="center" colspan="3"></th></tr>
           </thead>
           <tbody>
           		<tr>
                    <td><input name="1" class="span1" type="text"  MAXLENGTH="1" value=""></td>
                    <td><input name="2" class="span1" type="text"  MAXLENGTH="1" value=""></td>
                    <td><input name="3" class="span1" type="text"  MAXLENGTH="1" value=""></td>
                </tr> 
                <tr>
                    <td><input name="4" class="span1" type="text"  MAXLENGTH="1" value=""></td>
                    <td><input name="5" class="span1" type="text"  MAXLENGTH="1" value=""></td>
                    <td><input name="6" class="span1" type="text"  MAXLENGTH="1" value=""></td>
                </tr> 
                <tr>
                    <td><input name="7" class="span1" type="text"  MAXLENGTH="1" value=""></td>
                    <td><input name="8" class="span1" type="text"  MAXLENGTH="1" value=""></td>
                    <td><input name="9" class="span1" type="text"  MAXLENGTH="1" value=""></td>
                </tr>
                 
	       </tbody>
      </table>
      
      </form>
        
    </div>  
       	   	
 </body>
    
</html>
 
