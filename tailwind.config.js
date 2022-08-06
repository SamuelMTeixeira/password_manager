const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                azul: {
                    100: '#C5DFFF',
                    200: '#061E3C',
                    300: '#1057B0'
                },
            },
            fontFamily: {
                baloo: ['Baloo Paaji 2', 'cursive'],
            },
            keyframes: {
                sino_kf: {
                    '0%, 100%': {
                        transform: 'rotate(-10deg)'
                    },
                    '50%': {
                        transform: 'rotate(10deg)'
                    }
                }
            },
            animation: {
                sino: 'sino_kf 0.33s ease-in-out infinite'
            }

        }
    },

    plugins: [require('@tailwindcss/forms')],
};
