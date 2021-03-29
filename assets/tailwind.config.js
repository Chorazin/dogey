module.exports = {
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
  },
  darkMode: false,
  purge: [
    // Paths to your templates...
    "../**.php",
    "../**/**.php",
    "./src/js/**.js"
    ],
  theme: {
    extend: {},
  },
  variants: {},
  plugins: [],
}
