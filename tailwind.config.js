/** @type {import('tailwindcss').Config} */
module.exports = {
    daisyui: {
        themes: [
            "dark","light","cupcake",
            {
                mytheme: {

      "default": "#1e293b",

       "primary": "#570DF8",

       "secondary": "#F000B8",

       "accent": "#37CDBE",

       "neutral": "#3D4451",

       "base-100": "#FFFFFF",

       "info": "#3ABFF8",

       "success": "#36D399",

       "warning": "#FBBD23",

       "error": "#F87272",
                },
              },
          ],
      },
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
        // you can configure the container to be centered
        center: true,

        // or have default horizontal padding
        padding: '1rem',

        // default breakpoints but with 40px removed
        screens: {
          sm: '600px',
          md: '950px',
          lg: '1150px',
          xl: '1300px',
        },
      },
    extend: {

    },
  },
  plugins: [require("daisyui")],
}
