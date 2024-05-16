/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily: {
        "poppins": ["Poppins", "sans-serif"],
      },
      colors: {
        orange: {
          '50': '#fff8f1',
          '100': '#ffeedd',
          '200': '#ffdab3',
          '300': '#ffc789',
          '400': '#ffb25e',
          '500': '#f98125', // Warna oranye primary
          '600': '#e47422',
          '700': '#bf651e',
          '800': '#9b541a',
          '900': '#7c4516',
        },
      }
    }
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

