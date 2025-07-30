Lenafo Sage WooCommerce Starter

Tema moderno para WordPress basado en Sage 10, con estilos utilitarios de Tailwind CSS y soporte completo para WooCommerce. Plantilla lista para desarrollo rápido, escalable, con alto rendimiento, y preparada para producción y distribución en marketplaces.
🚀 Características principales

    Sage 10 con Blade templating y arquitectura modular moderna.

    Tailwind CSS para estilos responsivos, mobile-first y altamente personalizables.

    WooCommerce integrado con generoi/sage-woocommerce para manejo de tienda online.

    Plantillas base para listado y detalle de productos (archive-product.blade.php y single-product.blade.php).

    Configuración Vite para desarrollo rápido con hot reload y build optimizado.

    Compatibilidad con WordPress y WooCommerce actualizados.

    Preparado para implementar animaciones y personalizaciones avanzadas.

    Estructura limpia para mantener y escalar tu proyecto fácilmente.

🔧 Requisitos previos

    PHP 8.0 o superior

    Composer

    Node.js (versión 16+ recomendada)

    Yarn o npm

    Instalación de WordPress y WooCommerce (versión compatible)

    WP-CLI (opcional pero recomendado)

⚙️ Instalación

    Clona el repositorio dentro de wp-content/themes de tu instalación WordPress:

cd wp-content/themes
git clone https://github.com/lenafo/sage-woocommerce-starter.git mi-theme
cd mi-theme

    Instala las dependencias PHP y JS:

composer install
yarn install

    Configura tu entorno local copiando el archivo .env.example a .env y ajusta URLs:

cp .env.example .env
# Edita .env con tu editor favorito para poner tu URL local (APP_URL)

    Publica las vistas personalizadas de WooCommerce:

wp acorn vendor:publish --tag="woocommerce-template-views"

    Ejecuta el servidor de desarrollo con hot reload:

yarn dev

    Activa el tema desde el panel de administración WordPress.

🛠️ Uso y desarrollo

    Las vistas Blade se encuentran en resources/views. Edita y crea componentes reutilizables.

    Estilos Tailwind se configuran y extienden en tailwind.config.js y se importan en resources/css/app.css.

    Scripts JavaScript modernos se editan en resources/js/app.js.

    Para construir los assets listos para producción, ejecuta:

yarn build

    Para añadir animaciones, puedes instalar GSAP:

yarn add gsap

y luego importarlo y usarlo en resources/js/app.js.

    Para campos personalizados y bloques avanzados, integra ACF Pro y usa sus funciones en tus vistas Blade.

🧪 Testing y producción

    Utiliza herramientas como Query Monitor para debug.

    Optimiza las imágenes y recursos estáticos para mejorar la carga.

    Implementa lazy loading para imágenes y scripts no críticos.

    Comprueba con Lighthouse y PageSpeed Insights que el rendimiento es óptimo.

    Realiza pruebas en dispositivos móviles y diferentes navegadores para asegurar compatibilidad.

📚 Recursos útiles

    Documentación Sage 10

    Tailwind CSS Docs

    WooCommerce Docs

    Generoi Sage WooCommerce

    Blade Templating

🙋‍♂️ Soporte y contribución

Este repositorio es mantenido por Lenafo. Puedes abrir issues para sugerencias o reportar errores.

Si quieres colaborar, crea un fork y envía pull requests con mejoras.
📄 Licencia

Este proyecto está bajo licencia MIT — consulta el archivo LICENSE para más detalles.
¡Gracias por usar esta plantilla! 🚀
