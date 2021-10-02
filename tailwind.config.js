module.exports = {
	mode: 'jit',
	purge: {
		content: [
			'./template-parts/**/*.php',
			'./*.php',
		],
	},
	darkMode: false, //you can set it to media(uses prefers-color-scheme) or class(better for toggling modes via a button)
	theme: {
		extend: {
			colors: {
				'primary': '#243c5a',
			}
		},
	},
	variants: {},
	plugins: [],
}