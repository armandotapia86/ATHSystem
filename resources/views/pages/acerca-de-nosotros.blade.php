@extends('layouts.app')

@section('title', 'Acerca de Nosotros')

@section('contenido')
    <div class="container mx-auto px-4 py-8">
        <!-- Carrusel -->
        <div class="carousel w-full mb-12">
            <div id="item1" class="carousel-item w-full">
                <img src="{{ asset('imagenes/nosotros01.png') }}" alt="Imagen de Soporte de Software" class="w-full" />
            </div>
            <!-- Texto sobre la imagen -->
            <div
                class="absolute top-5 left-1/2 transform -translate-x-1/2 text-white text-lg bg-opacity-75 bg-gray-800 p-4 rounded-lg z-10">
                <h2 class="text-center font-bold"><strong>Acerca de Nosotros</strong></h2>
            </div>
            <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white text-left bg-opacity-75 bg-gray-800 p-4 rounded-lg z-10">
                <h3 class="font-semibold"><strong>Asistencia Técnica Rápida y Eficaz:</strong></h3><br>
                <p class="mt-2">
                    <strong>¿Problemas con tu tecnología?</strong> ¡No te preocupes! En ATHSystem ofrecemos soluciones
                    inmediatas y efectivas para que sigas adelante sin interrupciones. Nuestro equipo de expertos está listo
                    para diagnosticar y resolver cualquier inconveniente de manera rápida y eficiente.
                </p><br>
                <p>Contamos con un servicio disponible siempre que lo necesites, asegurando que tus equipos funcionen al
                    máximo de su capacidad. ¡No más esperas ni complicaciones! Confía en nosotros para mantener tu
                    tecnología en óptimas condiciones y disfrutar de una experiencia sin preocupaciones.</p><br>
            </div>
        </div>

        <!-- Nuestra Historia -->
        <div class="history mb-12">
            <h2 class="text-3xl font-semibold text-amber-800 mb-4"><strong>Nuestra Historia</strong></h2><br>
            <p class="text-gray-600 leading-relaxed">
                <strong>Un sueño que se convirtió en solución para todos</strong>
            </p><br>
            <p>Nuestra historia comienza con una pasión: la tecnología. Desde muy jóvenes, descubrimos cómo el mundo digital
                podía transformar vidas, facilitar tareas y conectar a las personas. Sin embargo, también vimos cómo la
                tecnología puede ser un desafío para quienes no cuentan con el soporte adecuado. Fue entonces cuando nació
                nuestra misión: ser esa mano amiga que guía y soluciona problemas tecnológicos, mientras ofrecemos equipos
                de calidad que hagan la vida más fácil.</p><br>
            <p>Hace algunos años, con apenas una computadora, herramientas básicas y un gran sueño, dimos el primer paso.
                Empezamos ofreciendo soporte técnico a pequeños negocios y hogares. Con el tiempo, nuestro compromiso,
                calidad y atención personalizada nos llevaron a ganar la confianza de nuestros clientes, permitiéndonos
                crecer y ampliar nuestros servicios.</p><br>
            <p>Hoy, somos más que una empresa de soporte técnico y venta de equipos: somos una comunidad que entiende las
                necesidades de cada cliente y busca brindar soluciones rápidas, efectivas y accesibles. Desde resolver
                problemas técnicos hasta asesorarte en la elección del equipo perfecto para tu hogar o negocio, estamos
                contigo en cada paso del camino.</p><br>
            <p><strong>Nuestra filosofía: calidad y confianza</strong></p>
            <p>Creemos que la tecnología debe ser un aliado, sin obstáculos. Por eso, trabajamos con los mejores equipos,
                mantenemos un servicio técnico actualizado y personalizado, y, sobre todo, escuchamos a nuestros clientes.
            </p><br>
            <p>Cada reparación que hacemos, cada equipo que vendemos, lo hacemos pensando en cómo mejorar la experiencia
                tecnológica de las personas. Porque más que resolver problemas, queremos construir relaciones basadas en la
                confianza y el profesionalismo.</p><br>
            <p><strong>¿Qué nos hace diferentes?</strong></p>
            <li>Atención personalizada: Cada cliente es único, y nos aseguramos de ofrecer soluciones adaptadas a sus
                necesidades.</li>
            <li>Innovación constante: Nos mantenemos al día con las últimas tecnologías para brindarte siempre lo mejor.
            </li>
            <li>Compromiso: Tu satisfacción es nuestra prioridad, y trabajamos para que cada experiencia contigo sea
                positiva y sin preocupaciones.</li><br>
            <p><strong>¡Gracias por confiar en nosotros!</strong></p>
            <p>Nuestro compromiso es seguir creciendo contigo, ayudándote a superar cualquier desafío tecnológico y
                acompañándote en la búsqueda de soluciones innovadoras. Juntos, hacemos que la tecnología sea simple,
                accesible y poderosa.</p>
        </div>

        <!-- Misión, Visión y Valores -->
        <div class="mission-vision-values mb-12">
            <h2 class="text-3xl font-semibold text-amber-800 mb-8"><strong>Misión, Visión y Valores</strong></h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Misión -->
                <div>
                    <h3 class="text-xl font-semibold text-amber-800 mb-2">Misión</h3><br>
                    <img src="{{ asset('imagenes/mision.png') }}" alt="Imagen de la Misión"
                        class="rounded-lg shadow-lg mb-4 w-full">                    
                    <p class="text-white-600">
                        Brindar soluciones tecnológicas integrales y personalizadas a nuestros clientes, combinando un
                        servicio de soporte técnico eficiente y accesible con la venta de equipos de alta calidad. Nuestro
                        objetivo es simplificar el uso de la tecnología, optimizando su funcionalidad y garantizando la
                        satisfacción de nuestros clientes, siempre con un enfoque en la confianza, la innovación y el
                        compromiso.
                    </p>
                </div>

                <!-- Visión -->
                <div>
                    <h3 class="text-xl font-semibold text-amber-800 mb-2">Visión</h3><br>
                    <img src="{{ asset('imagenes/vision.png') }}" alt="Imagen de la Visión"
                        class="rounded-lg shadow-lg mb-4 w-full">                    
                    <p class="text-white-600">
                        Convertirnos en la empresa líder en soluciones tecnológicas y soporte técnico, reconocida por
                        nuestra excelencia, innovación y compromiso con nuestros clientes. Aspiramos a ser el referente en
                        la venta de equipos tecnológicos y servicios de soporte, construyendo relaciones duraderas basadas
                        en la confianza, y contribuyendo al desarrollo tecnológico de hogares y empresas en nuestra
                        comunidad.
                    </p>
                </div>
            </div>

            <!-- Valores -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                <!-- Valor 1 -->
                <div class="text-center">
                    <h3 class="font-semibold text-lg text-amber-800"><strong>Compromiso</strong></h3><br>
                    <img src="{{ asset('imagenes/compromiso.png') }}" alt="Compromiso"
                        class="rounded-lg shadow-lg mb-4 w-full">                    
                    <p class="text-cyan-600 text-left">En nuestra empresa, el compromiso es el pilar que guía cada una de nuestras
                        acciones. Nos esforzamos por brindar servicios y productos tecnológicos que no solo cumplan con las
                        expectativas, sino que las superen.</p>
                    <li class="text-left"><strong>Con nuestros clientes </strong>Garantizamos atención personalizada, soluciones efectivas y
                        un acompañamiento constante, asegurando su satisfacción en cada interacción.</li>
                    <li class="text-left"><strong>Con la calidad:</strong>Nos dedicamos a ofrecer servicios y equipos que reflejan excelencia,
                        confiabilidad y durabilidad.</li>
                    <li class="text-left"><strong>Con la innovación:</strong>Mantenemos un enfoque proactivo, adaptándonos a las nuevas
                        tecnologías para ofrecer siempre lo mejor.</li>
                    <li class="text-left"><strong>Con la comunidad:</strong>Fomentamos el desarrollo tecnológico accesible, promoviendo el uso
                        responsable y consciente de los recursos.</li>
                    <li class="text-left"><strong>Con el medio ambiente:</strong>Priorizamos prácticas sostenibles para minimizar nuestro
                        impacto ambiental y contribuir a un futuro más verde.</li><br>
                    <p class="text-left">Estamos comprometidos a ser más que una empresa: queremos ser un aliado confiable que te acompañe en
                        tu camino tecnológico, siempre con ética, responsabilidad y profesionalismo.</p>
                </div>
                <!-- Valor 2 -->
                <div class="text-center">
                    <h3 class="font-semibold text-lg text-amber-800"><strong>Innovación</strong></h3><br>
                    <img src="{{ asset('imagenes/innovacion.png') }}" alt="Innovación"
                        class="rounded-lg shadow-lg mb-4 w-full">                    
                    <p class="text-cyan-600 text-left">La innovación es el motor que impulsa nuestra empresa. Nos dedicamos a
                        explorar, aprender y adoptar las últimas tendencias tecnológicas para ofrecer a nuestros clientes
                        soluciones avanzadas y eficientes.</p>

                    <li class="text-left"><strong>Soluciones modernas:</strong>Incorporamos herramientas y tecnologías de vanguardia para
                        satisfacer las necesidades cambiantes de nuestros clientes.</li>
                    <li class="text-left"><strong>Adaptabilidad:</strong>Nos mantenemos ágiles y abiertos al cambio, adaptándonos
                        rápidamente a los nuevos desafíos del mercado tecnológico.</li>
                    <li class="text-left"><strong>Creatividad:</strong>Fomentamos la generación de ideas innovadoras para resolver
                        problemas de manera única y efectiva.</li>
                    <li class="text-left"><strong>Mejora continua:</strong>Estamos comprometidos con la evolución constante de nuestros
                        servicios y productos, garantizando excelencia y relevancia en todo lo que hacemos.</li><br>                    
                    <p class="text-left">Creemos que la innovación no solo consiste en estar a la vanguardia, sino en transformar ideas en
                        soluciones que hagan la tecnología accesible y significativa para todos.</p>
                </div>
                <!-- Valor 3 -->
                <div class="text-center">
                    <h3 class="font-semibold text-lg text-amber-800"><strong>Sostenibilidad</strong></h3><br>
                    <img src="{{ asset('imagenes/sostenibilidad.png') }}" alt="Sostenibilidad"
                        class="rounded-lg shadow-lg mb-4 w-full">                    
                    <p class="text-cyan-600 text-left">En nuestra empresa, entendemos que la tecnología no solo debe facilitar la
                        vida, sino también contribuir al cuidado del medio ambiente y al bienestar social. Por eso, asumimos
                        un enfoque sostenible en todas nuestras operaciones:</p>
                    <li class="text-left"><strong>Productos responsables:</strong>Promovemos equipos tecnológicos eficientes y de larga
                        duración para reducir el desperdicio electrónico.</li>
                    <li class="text-left"><strong>Reciclaje y reutilización:</strong>Ofrecemos programas de reciclaje para dispositivos
                        electrónicos y fomentamos la reutilización de componentes funcionales.</li>
                    <li class="text-left"><strong>Operaciones conscientes:</strong>Optimizamos nuestros procesos para minimizar el impacto
                        ambiental, desde el uso responsable de recursos hasta la reducción de emisiones.</li>
                    <li class="text-left"><strong>Compromiso social:</strong>Impulsamos el acceso a la tecnología de manera inclusiva,
                        apoyando iniciativas que benefician a la comunidad y reduzcan la brecha digital.</li><br>
                    <p class="text-left">Nuestro meta es ser un ejemplo de cómo la tecnología y la sostenibilidad pueden trabajar juntas para
                        construir un futuro mejor.</p>
                </div>
            </div>
        </div>

        <!-- Nuestro Equipo -->
        <div class="team">
            <h2 class="text-3xl font-semibold text-amber-800 mb-8"><strong>Nuestro Equipo</strong></h2>
            < class="text-cyan-600 mb-6 text-left">
                Detrás de cada solución tecnológica y cada equipo entregado hay un grupo apasionado de profesionales que
                trabajan con dedicación para ofrecerte lo mejor.
                <li><strong>Especialistas capacitados: </strong>Contamos con un equipo de técnicos y asesores expertos en
                    tecnología, siempre actualizados en las últimas tendencias del mercado.</li>
                <li><strong>Atención personalizada:</strong>Nos enfocamos en entender las necesidades específicas de cada
                    cliente, brindando un trato cercano y soluciones hechas a medida.</li>
                <li><strong>Pasión por la tecnología:</strong>Somos un equipo comprometido con nuestra misión, impulsados
                    por el entusiasmo de ayudar a las personas a sacar el máximo provecho de la tecnología.</li>
                <li><strong>Trabajo en equipo:</strong>Fomentamos un ambiente colaborativo donde cada miembro aporta su
                    experiencia para garantizar un servicio de excelencia.</li>
            <p>Nuestro equipo es el corazón de nuestra empresa, y su compromiso es lo que nos permite marcar la diferencia
                en cada proyecto y en cada cliente que confía en nosotros.</p><br>
                
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="member text-center">
                    <img class="w-32 h-32 mx-auto rounded-full mb-4" src="https://via.placeholder.com/150"
                        alt="Miembro del equipo">
                    <h3 class="font-semibold">Nombre 1</h3>
                    <p class="text-gray-500">Rol: [Posición]</p>
                </div>
                <div class="member text-center">
                    <img class="w-32 h-32 mx-auto rounded-full mb-4" src="https://via.placeholder.com/150"
                        alt="Miembro del equipo">
                    <h3 class="font-semibold">Nombre 2</h3>
                    <p class="text-gray-500">Rol: [Posición]</p>
                </div>
            </div>
        </div>
    </div>
@endsection
