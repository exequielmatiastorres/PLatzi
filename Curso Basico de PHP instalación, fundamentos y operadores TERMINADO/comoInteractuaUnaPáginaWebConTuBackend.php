<!-- ¿comoInteractuaUnaPáginaWebConTuBackend? 

cliente servidor
Toda nuestra app está guardada en un servidor, el cual entrega una copia de la misma a cada cliente que la solicite.
Además, el servidor también se encarga de responder cada solicitud del usuario.


Dominio:
El dominio es nuestra dirección en internet. Gracias a él cualquier computadora es capaz de encontrar nuestra página web.


Servidor web:
Es un programa que correo dentro de nuestro servidor físico y se encarga de gestionar cualquier petición que llegue al mismo.
Esta petición es procesada por algún lenguaje de programación y a final devuelve una respuesta.

Métodos HTTP(formas que tenemos para pedirle algo al servidor. )
Los métodos HTTP son una forma de comunicación entre el cliente y el navegador. A través de una solicitud HTTP el cliente es capaz de pedirle al servidor que realice una acción

GET
Este método permite solicitar información al servidor. Por ejemplo, podemos pedirle una lista de productos en el caso de que estemos haciendo un e-commerce o una lista de cursos si tenemos una pagina como Platzi.

POST
Este método permite guardar información. Por ejemplo, podemos recabar datos del usuario desde un formulario y mandarlos a nuestro servidor para procesarlos.

podríamos guardarlos para armar una base de datos de usuarios o incluso un sistema de login.

PUT/PATCH
Estos métodos permiten actualizar información ya guardada. Por ejemplo, podemos darle la oportunidad a un usuario de actualizar su correo electrónico o incluso cambiar su contraseña.

La diferencia es que PUT reemplaza toda la información existente y PATCH solo reemplaza lo necesario, es decir, “parcha” la información

DELETE
Este método lo usamos para eliminar un recurso del servidor. Por ejemplo, podemos usarlo si deseamos eliminar un blogpost o un comentario.

Esto no significa que dejamos eliminarlo necesariamente dentro de nuestra base de datos, podemos hacer un “Soft delete”.



php -a  desde la terminal de xampp (nos va a abrir la consola interactiva de php<)

-->