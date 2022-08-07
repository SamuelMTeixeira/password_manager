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
                    100: '#edf1fc',
                    200: '#7084dc',
                    300: '#1057B0',
                    400: '#94acfc',
                    500: '#4D66E1',
                },
            },
            fontFamily: {
                'lora': ['Lora', 'sans-serif'],
                'rubik': ['Rubik', 'sans-serif'],
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
