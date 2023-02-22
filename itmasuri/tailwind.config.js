/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/**/*.blade.php"],
  theme: {
    extend: {
      fontFamily: {
        Poppins: ["Poppins", "sans-serif"],
      },
      colors: {
        darkblue: "#050634",
        primary: "#5800FF",
        secondary: "#FFC600",
        secondarydarker: "#D2A60E",
        accent: "#E900FF",
      },
      dropShadow: {
        custom: "0  2px 10px rgba(0,0,0,0.25)",
        custominset: "inset 0px 1px 2px rgba(0, 0, 0, 0.25);",
      },
    },
  },
  plugins: [],
};
