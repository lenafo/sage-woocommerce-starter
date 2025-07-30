# Lenafo Sage WooCommerce Starter

Tema moderno para WordPress basado en **Sage 10**, con estilos utilitarios de **Tailwind CSS** y soporte completo para **WooCommerce**. Plantilla lista para desarrollo rápido, escalable, con alto rendimiento, y preparada para producción y distribución en marketplaces.

---

## 🚀 Características principales

- **Sage 10** con Blade templating y arquitectura modular moderna.
- **Tailwind CSS** para estilos responsivos, mobile-first y altamente personalizables.
- **WooCommerce** integrado con [`generoi/sage-woocommerce`](https://github.com/generoi/sage-woocommerce).
- Plantillas base para listado y detalle de productos.
- Configuración Vite con hot reload y build optimizado.
- Totalmente compatible con WordPress y WooCommerce actualizados.
- Preparado para animaciones, ACF, y componentes Blade reutilizables.

---

## 🔧 Requisitos previos

- PHP 8.0 o superior
- Composer
- Node.js v16 o superior
- Yarn o npm
- WordPress instalado
- WooCommerce instalado
- WP-CLI (opcional, recomendado)

---

## ⚙️ Instalación

1. Clona este repositorio dentro de `wp-content/themes`:

```bash
cd wp-content/themes
git clone https://github.com/lenafo/sage-woocommerce-starter.git mi-theme
cd mi-theme
```

2. Instala dependencias:

```bash
composer install
yarn install
```

3. Copia el archivo de entorno:

```bash
cp .env.example .env
```

Edita `.env` y asegúrate de que `APP_URL` apunta a tu URL local.

4. Publica las vistas de WooCommerce:

```bash
wp acorn vendor:publish --tag="woocommerce-template-views"
```

5. Ejecuta el entorno de desarrollo:

```bash
yarn dev
```

6. Activa el tema en el panel de administración de WordPress.

---

## 🛠️ Desarrollo

- Archivos Blade en `resources/views`
- CSS Tailwind en `resources/css/app.css`
- JS en `resources/js/app.js`
- Ejecuta `yarn build` para versión de producción
- Agrega GSAP con:

```bash
yarn add gsap
```

- Integra ACF Pro para campos personalizados

---

## 🧪 Testing y optimización

- Usa [Query Monitor](https://wordpress.org/plugins/query-monitor/)
- Lighthouse y PageSpeed Insights para performance
- Optimiza imágenes, scripts, fonts
- Usa lazy loading
- Prueba en móvil y diferentes navegadores

---

## 📚 Recursos

- [Roots Sage 10](https://roots.io/sage/docs/)
- [Tailwind CSS](https://tailwindcss.com/docs)
- [WooCommerce Docs](https://woocommerce.com/documentation/)
- [Blade Templating (Laravel)](https://laravel.com/docs/blade)
- [generoi/sage-woocommerce](https://github.com/generoi/sage-woocommerce)

---

## 🙋‍♀️ Contribuciones

Este proyecto es mantenido por **Lenafo**.

Si encuentras un bug o tienes una sugerencia, abre un issue.  
¿Quieres mejorar el proyecto? Haz un fork y envía tu pull request.

---

## 📄 Licencia

MIT © 2025 Lenafo — Consulta el archivo `LICENSE` para más información.

---

### 🚀 ¡Gracias por usar esta plantilla!
