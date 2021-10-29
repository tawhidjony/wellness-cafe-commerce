module.exports = {
    mode: "jit",
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        container: {
            center: true,
            padding: "1.5rem"
        },
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [],
}