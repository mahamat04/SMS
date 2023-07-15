/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#1c64f2',
        'secondary': '#ffed4a',
        'my-color': '#93c5fd',
      },
      fontFamily: {
        'sans': ['"Poppins"', 'sans-serif'],
      },
    },
    fontSize: {
      'sm': '14px',
      'base': '16px',
      'lg': '18px',
      'xl': '40px',
      '2xl': '60px',
      // ...
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}

const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
    ]);

