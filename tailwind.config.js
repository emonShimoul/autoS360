/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php", "./template-parts/*.php"],
  theme: {
    extend: {
      colors: {
        primaryColor: "#1E40AF",
      },

      backgroundImage: {
        banner: "url('https://i.ibb.co.com/Ph9bqNh/banner.jpg')",
      },

      fontFamily: {
        daysOneRegular: ["Days One", "sans-serif"], // Add Google Font
      },
    },
  },
  plugins: [require("daisyui")],
};
