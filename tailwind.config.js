module.exports = {
	mode: 'jit',
	purge: {
		content: [
			'./template-parts/**/*.php',
			'./assets/js/*.js',
			'./*.php',
		],
	},
	darkMode: false, //you can set it to media(uses prefers-color-scheme) or class(better for toggling modes via a button)
	theme: {

		screens: {
			'xxs': '20rem',
			'xs': '30rem',
			'sm': '40rem',
			'md': '48rem',
			'ml': '56rem',
			'lg': '64rem',
			'xl': '80rem',
			'2xl': '96rem',
		},

		// Generate your color shades in https://javisperez.github.io/tailwindcolorshades/

		extend: {
			colors:{
				primary: {
					50: '#f4fbf8',
					100: '#e8f7f2',
					200: '#c6eade',
					300: '#a3deca',
					400: '#5fc5a2',
					500: '#1aac7a',
					600: '#179b6e',
					700: '#14815c',
					800: '#106749',
					900: '#0d543c',
				},
			},
		},
	},
	variants: {},
	plugins: [],
}