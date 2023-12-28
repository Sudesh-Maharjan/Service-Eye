/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        screens:{
          xs: "320px",
          sm: "375px",
          sml: "500px",
          md: "667px",
          mdl: "768px",
          lg: "960px",
          lgl: "1024px",
          xl: "1280px",
          xxl: "1392px",
          xxxl: "2000px",
        },
        colors: {
          themecolor: '#324465',
        },
        rotate: {
          '360': '360deg',
        },
      },
    },
    plugins: [ require('@tailwindcss/line-clamp'),],
  }