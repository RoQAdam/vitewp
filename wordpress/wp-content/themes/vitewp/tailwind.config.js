/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.php",
    "./header.php",
    "./footer.php",
    "./src/blocks/**/template.php",
    "./src/blocks/**/script.js",
    "./src/blocks/**/parts/*.php",
    "./template-parts/*.php",
  ],
  theme: {
    extend: {
      colors: {
        main: '#747bff',
        secondary: '#e4e932',
        white: '#ffffff',
        black: '#000000',
      },
      width: {
        star05: 'calc(42px * .5)',
        star1: 'calc(42px * 1)',
        star15: 'calc(42px * 1.5)',
        star2: 'calc(42px * 2)',
        star25: 'calc(42px * 2.5)',
        star3: 'calc(42px * 3)',
        star35: 'calc(42px * 3.4)',
        star4: 'calc(42px * 4)',
        star45: 'calc(42px * 4.5)',
        star5: 'calc(42px * 5)'
      },
      backgroundImage: {
        star: "url('/wp-content/themes/vitewp/src/blocks/testimonials/images/star-icon.png')"
      },
      backgroundSize: {
        star: 'auto 100%',
      },
      gridTemplateColumns: {
        opinions: 'repeat(auto-fill, minmax(280px, 1fr))'
      },
      flexBasis: {
        large: 'flex-basis: 560px',
        min: 'min-content'
      }
    }
  },
  plugins: [],
}

