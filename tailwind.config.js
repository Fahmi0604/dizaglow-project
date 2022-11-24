/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./public/**/*.{html,js,php}'],
  theme: {
    extend: {
      colors: {
        "primary": '#F0A500',
        "secondary": '#FF6881',
        "custom-black": '#1B1A17',
        "custom-muted": '#87898B'
      },
      fontFamily: {
        'Proxima': ['Proxima Nova', 'sans-serif'],
      }
    },
  },
  plugins: [],
}
