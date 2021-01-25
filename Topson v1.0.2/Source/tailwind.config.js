const plugin = require('tailwindcss/plugin')

module.exports = {
  purge: false,
  variants: {
    zIndex: ['responsive', 'hover'],
    position: ['responsive', 'hover'],
    padding: ['responsive', 'last'],
    margin: ['responsive', 'last'],
    borderWidth: ['responsive', 'last'],
    backgroundColor: ['responsive', 'hover', 'dark', 'dark-hover'],
    borderColor: ['responsive', 'hover', 'dark', 'dark-hover'],
    textColor: ['responsive', 'hover', 'dark', 'dark-hover']
  },
  theme: {
    extend: {
      colors: {
        light: {
          1: '#3A8DF5',
          2: '#F1F6FB',
          3: '#FAFBFF',
          4: '#EEF0F4',
          5: '#E4EFF8',
          6: '#A5CCFF',
          7: '#F3F3F5'
        },
        dark: {
          1: '#293145',
          2: '#232a3b',
          3: '#313a55',
          4: '#303748',
          5: '#3f4865',
          6: '#2b3348'
        }
      },
      fontFamily: {
        'roboto': ['Roboto']
      },
      container: {
        center: true
      },
      maxWidth: {
        '1/4': '25%',
        '1/2': '50%',
        '3/4': '75%'
      },
      screens: {
        'sm': '640px',
        'md': '768px',
        'lg': '1024px',
        'xl': '1280px',
        'xxl': '1600px'
      }
    }
  },
  plugins: [
    plugin(function({ addVariant, e }) {
      addVariant('dark', ({ modifySelectors, separator }) => {
        modifySelectors(({ className }) => {
          return `.dark .${e(`dark${separator}${className}`)}`
        })
      })
      addVariant('dark-hover', ({ modifySelectors, separator }) => {
        modifySelectors(({ className }) => {
          return `.dark .${e(`dark${separator}hover${separator}${className}`)}:hover`
        })
      })
    })
  ]
}