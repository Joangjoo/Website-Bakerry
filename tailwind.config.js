/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{php,js}",
    "./**/*.{php,js}",
    "!./node_modules/**/*",],
  theme: {
    extend: {
      colors: {
        'primary': '#F5E7ED',
        'secondary' : '#F2C2D8',
        'button' : '#D9526B',
        'text' : '#DA498D',
        'text2' : '#FAC67A'
      },
      keyframes : {
        shimmer : {
          '0%': { backgroundPosition: '200% 0' },
          '100%': { backgroundPosition: '-200% 0' },
        },
      },
      animation : {
        shimmer : 'shimmer 2s infinite linear'
      }
    },
  },
  plugins: [],
}