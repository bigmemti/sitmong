/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    fontFamily:{
      vazir:['vazir']
    },
    extend: {
      screens: {
        'sm': '459px',
      },
    },
  },
  plugins: [],
}
