@extends('layouts.app')

@section('title', 'Servicios')

@section('contenido')

    <div class="container mx-auto py-12">
        <h1 class="text-4xl font-semibold text-center mb-10 text-amber-800"><strong>Nuestros Servicios</strong></h1>

        <!-- Soporte de Hardware -->
        <div class="mb-12">
            <h3 class="text-2xl font-semibold mb-4 text-amber-800">Soporte de Hardware</h3>
            <img src="{{ asset('imagenes/hardware.png') }}" alt="Soporte de Hardware"
                class="w-full h-auto object-cover rounded-lg shadow-lg mb-6">

            <a href="{{ url('/formulario') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">
                Nuevo Ticket
            </a><br>

            <p class="text-cyan-600">
                El soporte de hardware es el conjunto de servicios y actividades dedicadas a garantizar el correcto
                funcionamiento, mantenimiento y reparación de los componentes físicos de un sistema informático. Es un pilar
                fundamental para mantener la productividad, prolongar la vida útil de los equipos y prevenir fallas críticas
                que puedan afectar el desempeño de una organización o usuario.
            </p><br>
            <p><strong>¿Qué incluye el soporte de hardware?</strong></p><br>
            <p><strong>Instalación de dispositivos:</strong></p>
            <li>Configuración inicial de componentes como monitores, impresoras, discos duros, tarjetas gráficas, entre
                otros.</li>
            <li>Ensamblaje de computadoras personalizadas según las necesidades del usuario.</li><br>
            <p><strong>Diagnóstico y reparación:</strong></p>
            <li>Identificación de problemas en componentes defectuosos.</li>
            <li>Sustitución o reparación de partes dañadas como RAM, fuente de poder o procesadores.</li><br>
            <p><strong>Mantenimiento preventivo:</strong></p>
            <li>Limpieza física de los componentes para evitar acumulación de polvo y sobrecalentamiento.</li>
            <li>Verificación de conexiones y actualizaciones de firmware.</li><br>
            <p><strong>Actualización de hardware:</strong></p>
            <li>Reemplazo de componentes para mejorar el rendimiento del equipo (p. ej., añadir memoria RAM o cambiar a un
                SSD).</li>
            <li>Asesoramiento sobre nuevas tecnologías compatibles.</li><br>
            <p><strong>Soporte técnico remoto o presencial:</strong></p>
            <li>Resolución de problemas relacionados con el hardware.</li>
            <li>Guía para la correcta manipulación de equipos.</li><br>
            <p><strong>Beneficios de un buen soporte de hardware</strong></p>
            <li><strong>Aumento de la productividad:</strong>Equipos en buen estado funcionan sin interrupciones.</li>
            <li><strong>Prevención de costos elevados:</strong>El mantenimiento regular evita reparaciones costosas.</li>
            <li><strong>Optimización de recursos:</strong>Al extender la vida útil de los dispositivos, se reduce la
                necesidad de reemplazos constantes.</li>
            <li><strong>Seguridad garantizada:</strong>Sistemas bien cuidados minimizan riesgos de fallos críticos que
                puedan afectar datos sensibles.</li><br>
            <p><strong>Conclusión:</strong></p>
            <p>El soporte de hardware no solo resuelve problemas, sino que también previene futuros inconvenientes,
                optimizando el rendimiento y prolongando la utilidad de los equipos. Es una inversión clave en la era
                tecnológica, tanto para individuos como para empresas.</p><br>

        </div>

        <!-- Soporte de Software -->
        <div class="mb-12">
            <h3 class="text-2xl font-semibold mb-4 text-amber-800">Soporte de Software</h3>
            <img src="{{ asset('imagenes/software.png') }}" alt="Soporte de Software"
                class="w-full h-auto object-cover rounded-lg shadow-lg mb-6">

            <a href="{{ url('/formulario') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">
                Nuevo Ticket
            </a>

            <p class="text-cyan-600">
                El soporte de software es el servicio técnico encargado de garantizar que los programas y sistemas
                operativos funcionen de manera eficiente, segura y acorde con las necesidades del usuario. Este soporte
                abarca desde la instalación y configuración inicial hasta la resolución de problemas y actualizaciones,
                proporcionando una experiencia tecnológica fluida.
            </p><br>
            <p><strong>¿Qué incluye el soporte de software?</strong></p>
            <p><strong>Instalación y configuración:</strong></p>
            <li>Asistencia para instalar sistemas operativos (Windows, macOS, Linux, etc.).</li>
            <li>Configuración de programas y aplicaciones según los requisitos del usuario o empresa.</li>
            <p><strong>Actualizaciones y parches:</strong></p>
            <li>Implementación de actualizaciones críticas para mejorar la seguridad y el rendimiento.</li>
            <li>Aplicación de parches para corregir errores y vulnerabilidades en el software.</li>
            <p><strong>Resolución de problemas:</strong></p>
            <li>Diagnóstico y solución de errores comunes como bloqueos, conflictos entre programas o problemas de
                compatibilidad.</li>
            <li>Recuperación de datos en caso de fallos de software.</li>
            <p><strong>Optimización del rendimiento:</strong></p>
            <li>Limpieza de programas no deseados o innecesarios.</li>
            <li>Configuración avanzada para maximizar la velocidad y eficiencia del software.</li>
            <p><strong>Capacitación y soporte al usuario:</strong></p>
            <li>Asesoramiento sobre el uso correcto del software.</li>
            <li>Responda a preguntas frecuentes para evitar errores operativos.</li>
            <p><strong>Seguridad y respaldo:</strong></p>
            <li>Instalación y configuración de antivirus y herramientas de protección.</li>
            <li>Implementación de soluciones de respaldo para garantizar la recuperación de datos en caso de pérdida.</li>
            <br>
            <p><strong>Beneficios de un buen soporte de software</strong></p><br>
            <li><strong>Mayor eficiencia:</strong>Los programas funcionan sin interrupciones ni errores.</li>
            <li><strong>Seguridad garantizada:</strong>Protección frente a amenazas cibernéticas y vulnerabilidades.</li>
            <li><strong>Ahorro de tiempo y recursos:</strong>Solución rápida de problemas sin necesidad de reinstalar
                sistemas.</li>
            <li><strong>Personalización:</strong>Ajuste de software según las necesidades específicas de cada usuario.</li>
            <br>
            <p><strong>Conclusión:</strong></p>
            <p>El soporte de software es esencial para garantizar el correcto funcionamiento de los sistemas y programas,
                evitando interrupciones y maximizando la productividad. Es una herramienta clave en el entorno digital, que
                combina prevención, solución de problemas y capacitación para un uso eficiente de la tecnología.</p>
        </div>

        <!-- Soporte de Redes -->
        <div class="mb-12">
            <h3 class="text-2xl font-semibold mb-4 text-amber-800">Soporte de Redes</h3>
            <img src="{{ asset('imagenes/redes.png') }}" alt="Soporte de Redes"
                class="w-full h-auto object-cover rounded-lg shadow-lg mb-6">

            <a href="{{ url('/formulario') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">
                Nuevo Ticket
            </a>

            <p class="text-cyan-600">
                El soporte de redes es el conjunto de servicios técnicos enfocados en garantizar la conectividad, seguridad
                y rendimiento de las redes de comunicación. Es clave para mantener operativos los sistemas de intercambio de
                datos entre dispositivos, tanto en entornos empresariales como personales.
            </p><br>
            <p><strong>¿Qué incluye el Soporte de Redes?</strong></p><br>
            <p><strong>Diseño e instalación:</strong></p>
            <li>Planificación de la infraestructura de red, ya sea alámbrica o inalámbrica.</li>
            <li>Instalación de equipos como routers, switchs, puntos de acceso y cableado </li>
            <p><strong>Configuración de la red:</strong></p>
            <li>Creación de redes locales (LAN) y redes extendidas (WAN).</li>
            <li>Configuración de parámetros como direcciones IP, protocolos de comunicación y firewalls.</li>
            <p><strong>Mantenimiento preventivo:</strong></p>
            <li>Monitoreo constante del rendimiento de la red.</li>
            <li>Actualización del firmware de dispositivos para mejorar la seguridad y funcionalidad.</li>
            <p><strong>Resolución de problemas:</strong></p>
            <li>Identificación y solución de caídas de red, conexiones lentas o interrupciones.</li>
            <li>Reemplazo de hardware defectuoso, como cables o puntos de acceso.</li>
            <p><strong>Gestión de la seguridad:</strong></p>
            <li>Implementación de medidas para proteger la red de amenazas como malware, hackers o accesos no autorizados.
            </li>
            <li>o Configuración de VPN (Redes Privadas Virtuales) para conexiones seguras.</li>
            <p><strong>Optimización y escalabilidad:</strong></p>
            <li>Ajuste de la red para mejorar la velocidad y eficiencia en el uso de ancho de banda.</li>
            <li>Expansión de la red para adaptarse al crecimiento de la organización.</li><br>
            <p><strong>Beneficios de un buen Soporte de Redes</strong></p><br>
            <li><strong>Conectividad constante:</strong>Reducción de interrupciones que afectan el trabajo o el acceso a
                datos.</li>
            <li><strong>Seguridad robusta:</strong>Protección frente a ataques cibernéticos y pérdida de información.</li>
            <li><strong>Rendimiento óptimo:</strong>Velocidades estables y adecuadas para las actividades diarias.</li>
            <li><strong>Adaptabilidad:</strong>Redes diseñadas para crecer y adaptarse a nuevas demandas tecnológicas.</li>
            <br>
            <p><strong>Conclusión:</strong></p>
            <p>El soporte de redes asegura una infraestructura de comunicación eficiente, segura y preparada para los retos
                tecnológicos actuales. Una red bien diseñada y mantenida es la base de cualquier sistema digital exitoso,
                facilitando el intercambio de información y el trabajo colaborativo.</p>

        </div>

        <!-- Venta de Equipos -->
        <div class="mb-12">
            <h3 class="text-2xl font-semibold mb-4 text-amber-800">Venta de Equipos</h3>
            <img src="{{ asset('imagenes/equipos.png') }}" alt="Venta de Equipos"
                class="w-full h-auto object-cover rounded-lg shadow-lg mb-6">

            <a href="{{ url('/formulario') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">
                Nuevo Ticket
            </a>

            <p class="text-cyan-600">
                La venta de equipos tecnológicos es un servicio especializado que se enfoca en proporcionar soluciones
                modernas y adaptadas a las necesidades del cliente. Incluye desde dispositivos básicos hasta herramientas
                avanzadas para empresas y usuarios particulares, asegurando calidad, eficiencia y soporte continuo.
            </p><br>
            <p><strong>¿Qué abarca la Venta de Equipos?</strong></p><br>
            <p><strong>Equipos de computación:</strong></p>
            <li>Computadoras de escritorio y portátiles.</li>
            <li>Servidores de alto rendimiento.</li>
            <li>Accesorios como monitores, teclados, ratones y más.</li>
            <p><strong>Dispositivos de conectividad:</strong></p>
            <li>Enrutadores, conmutadores y puntos de acceso inalámbrico.</li>
            <li>Sistemas de red para hogares y empresas.</li>
            <li>Equipos para videoconferencias y comunicación en tiempo real.</li>
            <p><strong>Periféricos y accesorios:</strong></p>
            <li>Impresoras, escáneres y dispositivos multifuncionales.</li>
            <li>Unidades de almacenamiento externo (HDD, SSD, USB).</li>
            <li>Soportes, bases y componentes de repuesto.</li>
            <p><strong>Sistemas de seguridad:</strong></p>
            <li>Cámaras de vigilancia y sistemas de monitoreo.</li>
            <li>Equipos de control de acceso (biométricos, tarjetas RFID).</li>
            <li>Alarmas y soluciones de seguridad inteligentes.</li>
            <p><strong>Tecnología de última generación:</strong></p>
            <li>Tabletas, teléfonos inteligentes y dispositivos IoT.</li>
            <li>Componentes para juegos y entretenimiento.</li>
            <li>Equipos especializados como estaciones de diseño gráfico o edición.</li><br>
            <p><strong>Beneficios de Comprar Equipos con Nosotros</strong></p><br>
            <li><strong>Variedad y personalización:</strong>Disponemos de una amplia gama de opciones que se adaptan a
                diferentes presupuestos y necesidades.</li>
            <li><strong>Garantía de calidad:</strong>Todos los productos cuentan con respaldo de fabricantes reconocidos.
            </li>
            <li><strong>Asesoría experta:</strong>Ayudamos a elegir los equipos más adecuados según las actividades del
                cliente.</li>
            <li><strong>Soporte técnico continuo:</strong>Incluimos opciones de instalación, configuración y mantenimiento.
            </li><br>
            <p><strong>Conclusión:</strong></p>
            <p>La venta de equipos no es solo un intercambio comercial, es una oportunidad para empoderar a nuestros
                clientes con tecnología que impulsa su productividad, conectividad y seguridad. Apostamos por la innovación
                y la satisfacción total.</p>
        </div>

    </div>

@endsection
