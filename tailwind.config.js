/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            sans: ["Inter"],
        },
        extend: {
            fontFamily: {
                syne: ["Syne"],
            },
        },
    },
    plugins: [require("@tailwindcss/typography")],
};
