<?php
include 'includes/header.php';
// pone todo el contenido del archivo
require "/home/parzival/Documentos/proyectoSalon/includes/config/conectandodb.php";
connect2db();

// Tu le dices lo que quieres que meta en tu archivo 

?>
    <body>
        <section>
            <h2> Contactanos </h2>
            <!-- imagen -->
        </section>
        <section>
            <h2> Llena el Formulario de Contactacto</h2>
            <form action="">
                <fieldset>
                <legend>Informacion Personal</legend>
                <div>
                    <label for="name">Nombre</label>
                    <input type="text" name = "name" id="name" placeholder="Escribe tu Nombre">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="tu@email.com">
                </div>
                <div>
                    <label for="phone">Telefono</label>
                    <input type="text" name="phone" id="phone" placeholder="555-5555-55">
                </div>
                <div>
                    <label for="msg">Mensaje</label>
                    <textarea type="text" name="msg" id="msg" placeholder="Escribe un mensaje"></textarea>
                </div>
            </fieldset>
                <fieldset>
                    <legend>Informacion de la Propiedad</legend>
                    <div>
                        <label for="vencom">Vende o Compra</label>
                        <input type=" select" name="vencom" id="vencom">
                    </div>
                    <div>
                        <label for="quantity">Cantidad</label>
                        <input type="number" name="quantity" id="quantity">
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Contacto</legend>
                    <div>
                        <label for="tel">Telefono</label>
                        <input type="radio" name="tel" id="tel">
                        <label for="e-mail">Email</label>
                        <input type="radio" name="e-mail" id="e-mail">
                    </div>
                    <div>
                        <label for="date">Fecha</label>
                        <input type="date" name="date" id=" date">
                        <label for="hour">Hora</label>
                        <input type="time" name="hour" id="hour">
                    </div>
                </fieldset>
                <div>
                    <button>Conctactar</button>
                </div>
            </form>
        </section>
    </body>