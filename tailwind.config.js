module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
            'nunito': ['Nunito'],
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
