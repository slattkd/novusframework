module.exports = {
  content: [
    './public/**/*.{php,html,js}',
    './templates/page-defaults/**/*.{php,html,js}',
    './templates/page-tests/**/*.{php,html,js}',
    ],
  theme: {
    extend: {
      screens: {
        'xs': '480px',
      },
      colors: {
        'orange': '#EB873D',
        'orangish': '#f19237',
        'blue': '#016ea9',
        'yella': '#F8D990',
        'rpblue': '#01699c',
        'tygreen': '#14a536',
        'fbgreen': '#59B87D',
        'greenish': '#40A900',
        'rpblue': '#2bb0da',
        'redish': '#b60000',
        'fs-blue': '#3482D5',
        'fs-blue-light': '#58BAE1',
        'fs-blue-dark': '#1B345D',
        'fs-yellow': '#FBE47C',
        'fs-green': '#8FBFBA',
        'fs-orange': '#CA7C4F',
        'fs-purple': '#A6B2D4',
        'rpt-blue-0': '#08203d',
        'rpt-blue-1': '#0046a3',
        'rpt-blue-2': '#3b80c5',
        'rpt-blue-3': '#3ba7de',
        'rpt-blue-4': '#cce3f8',
        'rpt-btn-0': '#df7960',
        'rpt-btn-1': '#ffa88c',
        'rpt-blue': '#83a2f5',
        'rpt-purple': '#785fff',
        'rpt-lavender': '#c299f9',
        'rpt-pink-0': '#ffb7e2',
        'rpt-pink-1': '#fdf2f0',
        'rpt-gold': '#ffcb03',
        'rpt-green': '#b9d53f',
        'rpt-yellow': '#f4e97d',
        'rpt-light': '#f5f4f1',
        'rpt-white': '#fffbf0',
        'rpt-peach-0': '#f5daa8',
        'rpt-peach-1': '#ffecb6',
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
