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
                orbitron: ['Orbitron', ...defaultTheme.fontFamily.sans],
                montserrat: ['Montserrat', ...defaultTheme.fontFamily.sans],
            },
            screens: {
                'portrait': {'raw': '(orientation: portrait)'},
                'landscape': {'raw': '(orientation: landscape)'},
            },
            boxShadow: {
                news: '1px 3px 6px rgba(0, 0, 0, 0.52)',
                contact: '8px 5px 10px #00000029;',
            },
            colors: {
                'dvlpmn-gray-dark': '#ECECEC',
                'dvlpmn-gray-light': '#FEFEFE',
                'dvlpmn-blue-dark': '#001E4F',
                'dvlpmn-blue-mid': '#0041aa',
                'dvlpmn-blue-light': '#0050D1',
                'dvlpmn-blue-nav': '#0050D16B',
                'dvlpmn-blue-nav-btn': '#00358a',
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
        scrollSnapType: ['responsive'],
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('tailwindcss-scroll-snap'),
    ],
};
