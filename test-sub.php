<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv = "Content-Type" content = "text/html; charset = UTF-8"/>
        <title>Git Test</title>
    </head>
    <body>
	    <h1>Solicitud</h1>       
        <form name = "form1" enctype = "multipart/form-data" method = "post">
            
            <table>
				
                <tr>
                    <td>Persona que solicita:</td>
                    <td><input type = "text" name = "persona" id = "persona" size = "50" maxlength = "500" ></input></td>
                </tr>
                <tr>
                    <td>Puesto:</td>
                    <td><input type = "text" name = "puesto" id = "puesto" size = "50" maxlength = "300" ></input></td>
                </tr>
                <tr>
                    <td>Titulo de la Solicitud:</td>
                    <td><input type = "text" name = "objetivo" id = "objetivo" size = "50" maxlength = "200"  ></input></td>
                </tr>
                <tr>
                    <td>Descripción:</td>
                    <td><textarea name = "descripcion" id = "descripcion" rows="10" cols="80" ></textarea></td>
				</tr>
                <tr>
					<td>Turno:</td>
					<td><select name = 'turno' id = 'turno'>				
					<option value = 'Matutino'>Matutino</option>
					<option value = 'Vespertino'>Vespertino</option>
					<option value = 'Nocturno'>Nocturno</option>
					</select></td>
				</tr>
			</table>        
            <table>
            	<tr>
                    <td><input type = "submit" id = "BSend" name = "BSend" value = "Enviar Solicitud" ></input></td>
                </tr>
            </table>
            
        </form>
    </body>
</html>
