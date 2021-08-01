const colors = require('./node_modules/tailwindcss/colors');

module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      keyframes: {
        wiggle: {
          '0%, 100%': { transform: 'rotate(-3deg)' },
          '50%': { transform: 'rotate(3deg)' },
        }
       },
      spacing: {
        128: '32rem',
      },
      colors: {
        'mitherapy_purple': {  
          DEFAULT: '#3D1D41',  
          '50': '#BE7EC5',  
          '100': '#B56CBE',  
          '200': '#A04CAB',  
          '300': '#7F3C88',  
          '400': '#5E2D64',  
          '500': '#3D1D41',  
          '600': '#1C0D1E',  
          '700': '#000000',  
          '800': '#000000',  
          '900': '#000000'},
        'mitherapy_pink': {  DEFAULT: '#E99FB9',  
        '50': '#FFFFFF',  '100': '#FFFFFF',  
        '200': '#FFFFFF',  
        '300': '#FCF2F6',  
        '400': '#F3C8D7',  
        '500': '#E99FB9',  
        '600': '#DF769B',  
        '700': '#D64C7C',  
        '800': '#C22D61',  
        '900': '#99234C'},
        teal: {
          50: '#f0fdfa',
          100: '#ccfbf1',
          200: '#99f6e4',
          300: '#5eead4',
          400: '#2dd4bf',
          500: '#14b8a6',
          600: '#0d9488',
          700: '#0f766e',
          800: '#115e59',
          900: '#134e4a',
        },
      },
      animation: {
        'spin-slow': 'spin 3s linear infinite',
        'pulse-slow' : 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
        'bounce-slow' : 'bounce 3s infinite',
        'wiggle': 'wiggle 1s ease-in-out infinite',
       },
       height: (theme) => ({
        'screen-1/3': '33vh',
        'screen-1/2': '50vh',
        'screen-2/3': '66vh',
        'screen-3/4': '75vh',
        'screen-4/5': '80vh',
    }),
    minHeight: {
        'screen-1/3': '33vh',
        'screen-1/2': '50vh',
        'screen-2/3': '66vh',
        'screen-3/4': '75vh',
        'screen-4/5': '80vh',
    },
    backgroundSize: {
        '100-200': '110% 220%',
    },

    },
  },
  variants: {
    animation: ['responsive', 'motion-safe', 'motion-reduce'],
    extend: {
      backgroundColor: ['active'],
      animation: ['hover', 'group-hover'],

    },
  },
  plugins: [
    require("tailwindcss-scrollbar"),
    require('daisyui'),
  ],

}
