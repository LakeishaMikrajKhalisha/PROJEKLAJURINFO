module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {},
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