module.exports = {
  content: [
    './public/**/*.{php,html,js}',
    './templates/page-defaults/**/*.{php,html,js}',
    './templates/page-tests/**/*.{php,html,js}',
    ],
  theme: {
    extend: {
      colors: {
        'blue': '#016ea9',
        
      }
    },
    borderWidth: {
      DEFAULT: '1px',
      '0': '0',
      '2': '2px',
      '3': '3px',
      '4': '4px',
      '6': '6px',
      '8': '8px',
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
