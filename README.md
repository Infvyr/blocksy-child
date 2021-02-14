# blocksy-child
This is my custom child theme boilerplate for WordPress Blocksy Theme

### Presets
Before you execute any scripts from package.json you need to create this file
`.babelrc` which should contains this JS object
`{
    "presets": ["@babel/env"]
}`

### Usage
To start use this workflow you need to run the following commnands in terminal:

1. `npm run dev` - start the workflow in development mode. Be careful to modify the 45th line from **gulpfile.babel.js** with your local address before you begin the  theme development on your machine.
2. `npm run build` - start the workflow in production mode
3. `npm run bundle` - create a clean zip archive of your theme (in production mode)
