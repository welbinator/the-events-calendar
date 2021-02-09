module.exports = {
	"presets": [
		[ "@babel/preset-env", {
			"modules": false,
			"targets": {
				"browsers": [
					"last 2 Chrome versions",
					"last 2 Firefox versions",
					"last 2 Safari versions",
					"last 2 Edge versions",
					"last 2 Opera versions",
					"last 2 iOS versions",
					"last 1 Android version",
					"last 1 ChromeAndroid version",
					"ie 11",
					"> 1%"
				]
			}
		} ],
		[ "@babel/preset-react", {
			"pragma": "wp.element.createElement"
		} ]
	],
	"plugins": [
		[ "@babel/plugin-proposal-class-properties", { "loose": true } ],
		"@babel/plugin-proposal-object-rest-spread",
		"@babel/plugin-transform-async-to-generator",
		["@babel/plugin-transform-runtime", {
			"regenerator": true
		}],
		["lodash"]
	],
	"env": {
		"default": {
			"plugins": [
				"@babel/plugin-proposal-class-properties",
				"babel-plugin-import-glob"
			]
		},
		"test": {
			"presets": [ "env" ],
			"plugins": [
				"@babel/plugin-proposal-class-properties",
			]
		},
		"gettext": {
			"plugins": [
				[ "./i18n/babel-plugin", {
					"output": "languages/gutenberg.pot"
				} ]
			]
		}
	}
}
