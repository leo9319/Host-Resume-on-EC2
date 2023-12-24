module.exports = {
  content: [
    "*.{php,html}",
    "./assets/js/*.js",
    "./src/View/*.php",
  ],
  theme: {
    extend: {
      fontFamily: {
        'inter': ['Inter', 'ui-sans-serif']
      },
      colors: {
        'blue-1': '#3758F9',
        'blue-2': '#4361FF1A',
        'blue-3': '#8099EC',
        'gray-1': '#DFE4EA',
        'gray-2': '#637381',
        'gray-3': '#F9FAFB',
        'gray-4': '#F3F4F6',
        'gray-5': '#6B7280',
        'black-1': '#111827',
        'black-2': '#4B5563',
      },
    },
  },
  plugins: [
  ],
}

