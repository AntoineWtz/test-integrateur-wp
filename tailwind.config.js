/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './index.php',
    './**/*.php'
  ],
  theme: {
    extend: {
      colors: {
        'ac-red': '#C01822',
        'ac-orange': '#EF780A',
        'ac-purple': '#662483',
        'ac-yellow': '#FABF33',
        'ac-green': '#00A39B',
        'ac-blue': '#1C70B8',
        'ac-lightblue': '#E1EFFE',
        'ac-darkblue': '#0F0C24',
      },
      fontFamily: {
        bauhaus: ['"Bauhaus"', 'sans-serif'],
        jakarta: ['"Plus Jakarta Sans"', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
