/** @type {import('tailwindcss').Config} */
export default {
    content: ["./node_modules/flowbite/**/*.js"],
    theme: {
        extend: {},
    },
    plugins: [require("flowbite/plugin")],
};

// module.exports = {
//   content: ['./src/**/*.{html,js}'],
//   theme: {
//       extend: {}
//   },
//   plugins: []
// }
