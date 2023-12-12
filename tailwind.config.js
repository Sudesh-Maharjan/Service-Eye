/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        themecolor: '#324465',
      },
      rotate: {
        '360': '360deg',
      },
    },
  },
  plugins: [],
}

