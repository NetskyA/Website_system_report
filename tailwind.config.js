/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['index.php', '../loginadmin.php', 'landing-page.php', 'additem.php', 'stock.php', './node_modules/flowbite/**/*.js', './src/**/*.{html,js}', './node_modules/tw-elements/dist/js/**/*.js'],
  darkMode: 'class',
  container: {
    center: true,
    padding: '16',
  },
  theme: {
    container: {
      center: true,
      padding: '16',
    },
    extend: {
      colors: {
        primary: '#f97316',
        secondary: '#a1a1aa',
        dark: '#212121',
      },
      screens: {
        '2xl': '1320px',
      },
      backgroundImage: {
        heropattern: "url('dist/asset/login/background-login.jpg')",
      }
    },
  },
  plugins: [
    require('flowbite/plugin', 'tw-elements/dist/plugin.cjs')
  ],
  darkMode: "class"
}

