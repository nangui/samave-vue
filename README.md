:thumbsup:

## Samane MVC version 1.5

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/0a1ff6b3dc164a09b9ee6f8d15ce00e3)](https://app.codacy.com/app/nangui/samave-vue?utm_source=github.com&utm_medium=referral&utm_content=nangui/samave-vue&utm_campaign=Badge_Grade_Dashboard)

## SamaneMVC Vuejs Ready to uses

<img src="capture_samane_vue_1.png" alt="Image home page"/>  

<img src="capture_samane_vue_2.png" alt="Image âge list"/>  

In this depot I put a version of samanemvc with viewjs ready to use, to do this, I used [laravel-mix](https://laravel-mix.com/).

laravel-mix
: An elegant wrapper around Webpack for the 80% use case.

I also added bootstrap 4 and jquery. Inside the libs/rooting.conf.php, i added the function called public_url() to return the public/dist folder and in the system/View.lib.class.php file, line 33, I added this code `$data['url_public'] = public_url();`, finally I moved all the files css and js in the folder `public/dist/`.

If you want to use this project, you can clone this repo and used it.

First of all you have to install the dependencies.

Here are the steps to follow

-  Clone repository `git clone https://github.com/anangui/samane-vue.git`
-  Install dependencies by go inside the public folder and make `npm install` command
-  :white_check_mark:

You are Welcome component for example, it is in `public/src/components/` folder and the `public/src/app.js` file you are the main code. 


:email:

Here is Ngor Seck email, CEO at Samane
<ngorsecka@gmail.com>
<samanemvc@gmail.com>

And this is my email
<adonainangui03@gmail.com>
