<?php
include 'includes/header.php';
// pone todo el contenido del archivo
require "/home/parzival/Documentos/proyectoSalon/includes/config/conectandodb.php";
connect2db();

// Tu le dices lo que quieres que meta en tu archivo 

?>

<section>
    <h2> Más sobre Nosotros</h2>
    <div>
        <!-- ICONO SEGURIDAD -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock" width="52" height="52"
            viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff4500" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
            <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
            <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
        </svg>

        <h3>Seguridad</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, eveniet asperiores eos expedita ab
            ipsam sed temporibus.</p>
    </div>
    <div>
        <!-- ICONO DINERO -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-currency-dollar" width="52"
            height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff4500" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" />
            <path d="M12 3v3m0 12v3" />
        </svg>

        <h3>Precio</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, eveniet asperiores eos expedita ab
            ipsam sed temporibus.</p>
    </div>
    <div>
        <!-- ICONO TIEMPO -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hourglass-high" width="48"
            height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff4500" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M6.5 7h11" />
            <path d="M6 20v-2a6 6 0 1 1 12 0v2a1 1 0 0 1 -1 1h-10a1 1 0 0 1 -1 -1z" />
            <path d="M6 4v2a6 6 0 1 0 12 0v-2a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1z" />
        </svg>

        <h3>Tiempo</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, eveniet asperiores eos expedita ab
            ipsam sed temporibus.</p>
    </div>
</section>

<main>
    <section>
        <h3>Casas y Depas en Venta</h3>
        <div>
            <h4>Title Anuncios</h4>
            <!-- Imagen de la casa -->
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et pariatur consectetur inventore excepturi
                ex, deleniti blanditiis quibusdam</p>
            500000.00

            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bath" width="44" height="44"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 12h16a1 1 0 0 1 1 1v3a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4v-3a1 1 0 0 1 1 -1z" />
                    <path d="M6 12v-7a2 2 0 0 1 2 -2h3v2.25" />
                    <path d="M4 21l1 -1.5" />
                    <path d="M20 21l-1 -1.5" />
                </svg>
                4
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-car-garage" width="44"
                    height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 20a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M15 20a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M5 20h-2v-6l2 -5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5" />
                    <path d="M3 6l9 -4l9 4" />
                </svg>
                3
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bed" width="44" height="44"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M7 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M22 17v-3h-20" />
                    <path d="M2 8v9" />
                    <path d="M12 14h10v-2a3 3 0 0 0 -3 -3h-7v5z" />
                </svg>
                4

            </div>

        </div>
    </section>
    <a href="">Ver Más</a>
</main>
<section>
    <h3>Encuentra la casa de tus sueños</h3>
    <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa officia reprehenderit minima, cupiditate
        atque at praesentium similique quia est dolorem quisquam, quam quo facilis ad eveniet eos accusamus volupta
    </p>
    <a href="">Contactanos</a>
</section>

<section>
    <div>
        <h3>Nuestro Blog</h3>
        <div>Entrada Blog 1</div>
        <div>Entrada Blog 2</div>
    </div>
    <div>
        <h3>Testimonios</h3>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa officia reprehenderit minima, cupiditate
            atque at praesentium similique quia est dolorem quisquam, quam quo facilis ad eveniet eos accusamus
            volupta
        </p>
    </div>
</section>

<section>
    <footer>
        <nav>
            <a href="">Nosotros</a>
            <a href="">Anuncios</a>
            <a href="">+Blog</a>
            <a href="">Contacto</a>
        </nav>
        <p>Todos los derechos reservados by: Constantinopla</p>
    </footer>
</section>
