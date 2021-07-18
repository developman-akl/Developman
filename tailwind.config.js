const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                body: ['Orbitron', ...defaultTheme.fontFamily.sans],
                content: ['Montserrat', ...defaultTheme.fontFamily.sans],
            },
            screens: {
                'portrait': {'raw': '(orientation: portrait)'},
                'landscape': {'raw': '(orientation: landscape)'},
            },
            boxShadow: {
                news: '1px 3px 6px rgba(0, 0, 0, 0.52)'
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};
