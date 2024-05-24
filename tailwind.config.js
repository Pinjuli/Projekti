import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */

export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    screens: {

      //  'phone': '480px',
      //  @media (min-width: 480px) { 
      //      color: red;

     //  }

        'tablet': '576px',
       // @media (min-width: 576px) {  
        //    background-color: red;
       // }
      
        'laptop': '992px',
       // @media (min-width: 992px) {  
       //     background-color: yellow;
//        }
      
        'desktop': '1200px',
  //      @media (min-width: 1200px) { 
    //        background-color: blue;
      //   }

        
      },

    plugins: [forms],
    
};
