import create_config from '@kucrut/vite-for-wp';

export default create_config({
    main: "./src/main.js",
    testimonials: "./src/blocks/testimonials/script.js",
    right_left: "./src/blocks/right-left/script.js",
}, 'dist');