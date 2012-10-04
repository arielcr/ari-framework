<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

        <?php include DIR_INC . 'head.php'; ?>

    </head>

    <body>

        <div id="container">

            <div id="login">

                <form id="frm_login" name="frm_login"  action="login/validar" onsubmit="return validar_login(this)" method="post">

                    <table align="center">
                        <tr>
                            <td height="35" align="right">Usuario:</td>
                            <td><input type="text" name="username" id="username" value="" /></td>

                        </tr>
                        <tr>
                            <td  height="35" align="right">Contrase&ntilde;a:</td>
                            <td><input type="password" name="password" id="password" value="" autocomplete="off" /></td>

                        </tr>
                        <tr>
                            <td height="35"></td>
                            <td>
                                <input type="submit" name="ingresar" id="ingresar" value="Ingresar" /><br/>
                            </td>
                        </tr>

                        <tr>
                            <td height="40" colspan="2" class="texto-rojo" align="center" >
                                <?php if ($sesion_invalida) { ?> 
                                    Nombre de usuario o contrase&ntilde;a inv&aacute;lidos.<br/>
                                <?php } ?>

                            </td>

                        </tr>

                    </table>

                </form>

            </div>


        </div>

    </body>
</html>