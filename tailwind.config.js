/** @type {import('tailwindcss').Config} */
module.exports = {
	mode: "jit",
	content: [
		"./index.php",
		"./header.php",
		"./footer.php",
		"./functions.php",
		"./page-templates/**/*.php",
		"./template-parts/**/*.php",
		"./components/**/*.php",
		"./src/ts/**/*.ts"
	],
	theme: {
		extend: {
			transitionDelay: {
				'0': '0ms',
				'2000': '2000ms',
				'burger': '0ms, 200ms, 0ms',
				'burger-active': '200ms, 0ms, 0ms',
			},
			transitionProperty: {
				'burger': 'background-color, top, transform'
			},
			fontSize: {
				'2xs': ['0.625rem', '0.75rem']
			}
		},
		fontFamily: {
			'sans': ['Lato', 'sans-serif'],
			'quicksand': ['Quicksand', 'sans-serif']
		},
		screens: {
			xs: "576px",
			sm: "768px",
			md: "992px",
			lg: "1200px",
			xl: "1400px",
			"2xl": "1600px",
		},
		container: {
			screens: {
				lg: "1228px",
			},
		},
		colors: {
			primary: "#1C3E95",
			'primary-d': '#132A67',
			secondary: '#fe7a22',
			'secondary-d': '#e95a1b',
			white: "#ffffff",
			"l-gray": "#f5f5f5",
			gray: "#ebebeb",
			"d-gray": '#979494',
			black: "#161616",
			inherit: 'inherit',
			current: "currentColor",
			transparent: "transparent"
		},
	},
	plugins: [
		require('@tailwindcss/typography'),
	],
};
