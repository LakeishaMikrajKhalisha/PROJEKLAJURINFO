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
      'link': '#2563eb'
      }
  },
  plugins: [
      require('flowbite/plugin')
  ],
}
