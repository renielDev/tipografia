var webpack = require('webpack');

var PROD = JSON.parse(process.env.PROD_DEV || "0");
PROD = 0;
module.exports = {
	entry: {
		a: './resources/assets/js/entry.js'
	},
	output: {
		path: './public/assets/js',
		filename: PROD ? '[name].min.js' : '[name].js'
	},
	plugins: PROD ? [
	    new webpack.optimize.UglifyJsPlugin({minimize: true})
    ] : []
}
