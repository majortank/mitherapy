module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
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
      },
      animation: {
        'spin-slow': 'spin 3s linear infinite',
        'pulse-slow' : 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
        'bounce-slow' : 'bounce 3s infinite',
       }

    },
  },
  variants: {
    animation: ['responsive', 'motion-safe', 'motion-reduce'],
    extend: {
      backgroundColor: ['active'],

    },
  },
  plugins: [
    require("tailwindcss-scrollbar"),
  ],
}
