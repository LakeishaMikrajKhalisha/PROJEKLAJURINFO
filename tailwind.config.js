const defaultTheme = require('tailwindcss/defaultTheme')
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['InterVariable', ...defaultTheme.fontFamily.sans],
      },
    },
    colors: {
      'BlueAccent': '#76a1cc',
      'grey': '#aeb7c1',
      'link': '#2563eb',
      'fontDefault':'#1a202c'
      }
  },
  plugins: [
      require('flowbite/plugin')
  ],
}