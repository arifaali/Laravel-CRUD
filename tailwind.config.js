/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ['./resources/views/**/*.{blade.php,vue,js}'],
    theme: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/forms'),
    ],
};
