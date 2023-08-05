<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div style="width: 100%; height: 100%; background: linear-gradient(105deg, #300109 0%, #571216 17%, #942B2B 48%, #DB5D28 100%), linear-gradient(155deg, rgba(0, 0, 0, 0.20) 0%, rgba(0, 0, 0, 0) 100%), linear-gradient(100deg, rgba(220, 93, 40, 0.20) 0%, rgba(221, 94, 40, 0.20) 100%), linear-gradient(100deg, rgba(220, 94, 40, 0.20) 0%, rgba(217, 91, 41, 0.20) 36%, rgba(220, 94, 40, 0.20) 100%); justify-content: center; align-items: center; display: inline-flex">
            <div style="flex: 1 1 0; align-self: stretch; padding-bottom: 107.10px; padding-left: 120px; padding-right: 120px; flex-direction: column; justify-content: flex-start; align-items: center; gap: 75.10px; display: inline-flex">
                <div style="width: 1680px; height: 111px; position: relative; border-bottom: 0.50px rgba(255, 255, 255, 0.40) solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                    <div style="width: 680px; height: 57px; position: relative"></div>
                    <div style="width: 1659px; justify-content: space-between; align-items: center; gap: 59px; display: inline-flex">
                        <div style="height: 50px; justify-content: space-between; align-items: flex-start; gap: 84px; display: flex">
                            <div style="justify-content: flex-start; align-items: center; gap: 24px; display: flex">
                                <img src="{{ asset('Frame 19.svg') }}" alt="Logo">
                            </div>
                            <div style="justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                                <div style="height: 46px; padding: 16px; justify-content: center; align-items: center; display: flex">
                                    {{-- <div style="width: 77px; height: 0px; border: 0.50px white solid"></div> --}}
                                    <div style="text-align: center; color: white; font-size: 16px; font-family: Inter; font-weight: 700; text-transform: uppercase; line-height: 13.20px; letter-spacing: 1.44px; word-wrap: break-word">home</div>
                                </div>
                                <div style="height: 46px; padding: 16px; justify-content: center; align-items: center; display: flex">
                                    <a href="{{ route('page2') }}">
                                        <div style="text-align: center; color: white; font-size: 16px; font-family: Inter; font-weight: 700; text-transform: uppercase; line-height: 13.20px; letter-spacing: 1.44px; word-wrap: break-word">services</div>
                                    </a>
                                </div>
                                <div style="height: 46px; padding: 16px; justify-content: center; align-items: center; display: flex">
                                    <div style="text-align: center; color: white; font-size: 16px; font-family: Inter; font-weight: 700; text-transform: uppercase; line-height: 13.20px; letter-spacing: 1.44px; word-wrap: break-word">industries</div>
                                </div>
                                <div style="height: 46px; padding: 16px; justify-content: center; align-items: center; display: flex">
                                    <div style="text-align: center; color: white; font-size: 16px; font-family: Inter; font-weight: 700; text-transform: uppercase; line-height: 13.20px; letter-spacing: 1.44px; word-wrap: break-word">company</div>
                                </div>
                                <div style="height: 46px; padding: 16px; justify-content: center; align-items: center; display: flex">
                                    <div style="text-align: center; color: white; font-size: 16px; font-family: Inter; font-weight: 700; text-transform: uppercase; line-height: 13.20px; letter-spacing: 1.44px; word-wrap: break-word">Our Thinking</div>
                                </div>
                                <div style="height: 46px; padding: 16px; justify-content: center; align-items: center; display: flex">
                                    <div style="text-align: center; color: white; font-size: 16px; font-family: Inter; font-weight: 700; text-transform: uppercase; line-height: 13.20px; letter-spacing: 1.44px; word-wrap: break-word">case studies</div>
                                </div>
                            </div>
                        </div>
                        



                        <div style="width: 305px; height: 57px; padding-left: 19px; padding-right: 18px; border-radius: 8px; overflow: hidden; border: 0.50px white solid; justify-content: center; align-items: center; display: flex">
                            <div style="height: 17px; justify-content: space-between; align-items: center; gap: 87px; display: inline-flex">
                                <div style="color: white; font-size: 16px; font-family: Inter; font-weight: 600; text-transform: capitalize; line-height: 16.50px; letter-spacing: 0.30px; white-space: nowrap;">contact us</div> 
                                <!-- Include the inline SVG directly -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="fill: white; height: 1.25rem; width: 1.25rem;">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>

            </div>
                </div>
                <div style="align-self: stretch; height: 505.80px; flex-direction: column; justify-content: center; align-items: center; gap: 50px; display: inline-flex">
                    <div style="width: 1526.62px; text-align: center; color: white; font-size: 90px; font-family: Alfa Slab One; font-weight: 400; text-transform: uppercase; line-height: 133px; letter-spacing: 0.90px; word-wrap: break-word">Next-gen enterprise<br/>software development company</div>
                    <div style="width: 367px; height: 56.80px; padding-top: 20px; padding-bottom: 19.80px; padding-left: 16px; padding-right: 16px; background: #CA5817; border-radius: 8px; overflow: hidden; justify-content: center; align-items: center; display: inline-flex">
                        <div style="height: 17px; justify-content: space-between; align-items: center; gap: 87px; display: inline-flex">
                            <div style="color: white; font-size: 16px; font-family: Inter; font-weight: 600; text-transform: capitalize; line-height: 16.50px; letter-spacing: 0.30px; word-wrap: break-word">let’s talk</div>
                            <div style="width: 10px; height: 11.17px; position: relative">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="fill: white; height: 1.25rem; width: 1.25rem;">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>









        
        
        
        
        <div style="width: 100%; height: 100%; padding-top: 96px; padding-bottom: 96px; background: #1D2939; justify-content: center; align-items: flex-start; display: inline-flex">
            <div style="width: 1280px; padding-left: 32px; padding-right: 32px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 32px; display: inline-flex">
                <div style="align-self: stretch; text-align: center; color: #EAECF0; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Join 4,000+ companies already growing</div>
                <div style="align-self: stretch; justify-content: space-between; align-items: center; gap: 48px; display: inline-flex">
                    <div style="width: 170px; height: 48px; padding-top: 2px; padding-bottom: 2px; padding-right: 0.74px; justify-content: center; align-items: center; gap: 11.38px; display: flex">              
                        <div style="justify-content: flex-start; align-items: center; gap: 24px; display: flex">
                            <img src="{{ asset('logo20.svg') }}" alt="Logo">
                        </div>
                    </div>
                    <div style="width: 182px; height: 48px; padding-top: 2px; padding-bottom: 2px; padding-right: 0.77px; justify-content: center; align-items: center; gap: 10.87px; display: flex">
                        <div style="justify-content: flex-start; align-items: center; gap: 24px; display: flex">
                            <img src="{{ asset('logo26.svg') }}" alt="Logo">
                        </div>
                    </div>
                    <div style="width: 178px; height: 48px; position: relative; margin-top: 10px;" >
                        <div style="justify-content: flex-start; align-items: center; gap: 24px; display: flex">
                            <img src="{{ asset('logo21.svg') }}" alt="Logo">
                        </div>
                    </div>
                    <div style="width: 198px; height: 48px; padding-top: 2px; padding-bottom: 2px; padding-right: 0.15px; justify-content: center; align-items: center; gap: 9.93px; display: flex">
                        <div style="justify-content: flex-start; align-items: center; gap: 24px; display: flex">
                            <img src="{{ asset('logo22.svg') }}" alt="Logo">
                        </div>
                    </div>
                    <div style="width: 166px; height: 48px; position: relative; margin-top: 10px;">
                        <div style="justify-content: flex-start; align-items: center; gap: 24px; display: flex">
                            <img src="{{ asset('logo23.svg') }}" alt="Logo">
                        </div>
                    </div>
                    <div style="width: 197px; height: 48px; padding-top: 2px; padding-bottom: 2px; padding-right: 0.43px; justify-content: center; align-items: center; gap: 9.02px; display: flex">
                        <div style="justify-content: flex-start; align-items: center; gap: 24px; display: flex">
                            <img src="{{ asset('logo24.svg') }}" alt="Logo">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

















<div style=" background: #1D2939;">
  <div style="width: 89%; height: 44%; padding-top: 96px; margin:5%; padding-bottom: 96px; background: black; overflow: hidden; flex-direction: column; justify-content: center; align-items: center; gap: 64px; display: inline-flex">
        <div style="height: 100px; padding-left: 32px; padding-right: 32px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 32px; display: flex; width: 90%; ">
            <div style="align-self: stretch; height: 100px; flex-direction: column; justify-content: flex-start; align-items: center; gap: 48px; display: flex; width: 100%; ">
                <div style="height: 100px; flex-direction: column; justify-content: flex-start; align-items: center; gap: 20px; display: flex; width: 100%">
                    <div style="align-self: stretch; text-align: center; color: white; font-size: 48px; font-family: Inter; font-weight: 600; text-transform: capitalize; line-height: 49.50px; word-wrap: break-word">How we can help you</div>
                    <div style="align-self: stretch; text-align: center; color: rgba(255, 255, 255, 0.80); font-size: 20px; font-family: Inter; font-weight: 400; line-height: 30px; word-wrap: break-word">Everything you need to know about the product and billing.</div>
                </div>
            </div>
        </div>
        <div style="height: 448px; padding-left: 32px; padding-right: 32px; flex-direction: column; justify-content: flex-start; align-items: center; gap: 64px; display: flex; width: 80%">
            <div style="align-self: stretch; height: 448px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 32px; display: flex">
                <div style="align-self: stretch; height: 28px; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                        <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                            <div style="align-self: stretch; color: white; font-size: 18px; font-family: Inter; font-weight: 500; line-height: 28px; word-wrap: break-word">Innovation Consulting?</div>
                        </div>
                        <div style="padding-top: 2px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                            <div style="width: 24px; height: 24px; position: relative">
                                <div style="width: 20px; height: 20px; left: 2px; top: 2px; position: absolute; border: 1px white solid; border-radius: 15px; color:#ffffff; text-align:center; display: flex; justify-content: center; align-items: center;">+</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="align-self: stretch; height: 52px; padding-top: 24px; border-top: 0.50px white solid; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                        <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                            <div style="align-self: stretch; color: white; font-size: 18px; font-family: Inter; font-weight: 500; line-height: 28px; word-wrap: break-word">Digital Transformation?</div>
                        </div>
                        <div style="padding-top: 2px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                            <div style="width: 24px; height: 24px; position: relative">
                                <div style="width: 20px; height: 20px; left: 2px; top: 2px; position: absolute; border: 1px white solid; border-radius: 15px; color:#ffffff; text-align:center; display: flex; justify-content: center; align-items: center;">+</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="align-self: stretch; height: 52px; padding-top: 24px; border-top: 0.50px white solid; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                        <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                            <div style="align-self: stretch; color: white; font-size: 18px; font-family: Inter; font-weight: 500; line-height: 28px; word-wrap: break-word">Software Engineering?</div>
                        </div>
                        <div style="padding-top: 2px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                            <div style="width: 24px; height: 24px; position: relative">
                                <div style="width: 20px; height: 20px; left: 2px; top: 2px; position: absolute; border: 1px white solid; border-radius: 15px; color:#ffffff; text-align:center; display: flex; justify-content: center; align-items: center;">+</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="align-self: stretch; height: 52px; padding-top: 24px; border-top: 0.50px white solid; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                        <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                            <div style="align-self: stretch; color: white; font-size: 18px; font-family: Inter; font-weight: 500; line-height: 28px; word-wrap: break-word">Big Data & Analytics?</div>
                        </div>
                        <div style="padding-top: 2px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                            <div style="width: 24px; height: 24px; position: relative">
                                <div style="width: 20px; height: 20px; left: 2px; top: 2px; position: absolute; border: 1px white solid; border-radius: 15px; color:#ffffff; text-align:center; display: flex; justify-content: center; align-items: center;">+</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="align-self: stretch; height: 52px; padding-top: 24px; border-top: 0.50px white solid; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                        <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                            <div style="align-self: stretch; color: white; font-size: 18px; font-family: Inter; font-weight: 500; line-height: 28px; word-wrap: break-word">Artificial Intelligence?</div>
                        </div>
                        <div style="padding-top: 2px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                            <div style="width: 24px; height: 24px; position: relative">
                                <div style="width: 20px; height: 20px; left: 2px; top: 2px; position: absolute; border: 1px white solid; border-radius: 15px; color:#ffffff; text-align:center; display: flex; justify-content: center; align-items: center;">+</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="align-self: stretch; height: 52px; padding-top: 24px; border-top: 0.50px white solid; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                        <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                            <div style="align-self: stretch; color: white; font-size: 18px; font-family: Inter; font-weight: 500; line-height: 28px; word-wrap: break-word">Extended Reality?</div>
                        </div>
                        <div style="padding-top: 2px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                            <div style="width: 24px; height: 24px; position: relative">
                                <div style="width: 20px; height: 20px; left: 2px; top: 2px; position: absolute; border: 1px white solid; border-radius: 15px; color:#ffffff; text-align:center; display: flex; justify-content: center; align-items: center;">+</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    











    <div style="width: 89%; height: 44%; padding-top: 36px; margin-left:5%; margin-right:5%; padding-bottom: 6px; background: black; overflow: hidden; flex-direction: column; justify-content: center; align-items: center; gap: 64px; display: inline-flex">
        
        <div style="width: 100%; height: 800%; flex-direction: column; padding:5%; background: rgb(0, 0, 0); justify-content: flex-start; align-items: flex-start; gap: 50px; display: inline-flex">
            <div style="color: white; font-size: 48px; font-family: Inter; font-weight: 600; text-transform: capitalize; line-height: 49.50px; word-wrap: break-word">Latest projects</div>
            <div style="width: 100%; height: 475px; justify-content: flex-start; align-items: flex-start; gap: 32px; display: inline-flex">
            
                <div style="width: 33%; height: 575px; padding: 35px; position: relative">
                    <div style="left: 0px; top: 359px; position: absolute; color: white; font-size: 23px; font-family: Inter; font-weight: 600; text-transform: capitalize; line-height: 28.80px; width: 100%;">AI-based enterprise software for No.1 retailer</div>
                    <div style="padding-right: 14.23px; left: 0px; top: 397.79px; position: absolute; justify-content: flex-start; align-items: flex-start; display: inline-flex; width: 100%;">
                        <div style="color: #989898; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 23.80px; margin-top:25px; word-wrap: break-word">Self-service analytics enabled by AI algorithms empowers 3 million users with instant actionable insights.</div>
                    </div>
                    <div style="width: 100%; left: 0px; top: 0px; position: absolute; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                        <img style="width: 100%; height: 340px; border-top-left-radius: 8px; border-top-right-radius: 8px" src="{{ asset('111.jpg') }}"  />
                    </div>
                </div>
                



                <div style="width: 33%; height: 475px; padding:35px; position: relative">
                    <div style="left: 0px; top: 359px; position: absolute; color: white; font-size: 23px; font-family: Inter; font-weight: 600; text-transform: capitalize; line-height: 28.80px; width: 100%;">Organ-on-a-chip platform for drug development</div>
                    <div style="padding-right: 14.23px; left: 0px; top: 397.79px; position: absolute; justify-content: flex-start; align-items: flex-start; display: inline-flex; width: 100%;">
                        <div style="color: #989898; margin-top:25px; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 23.80px; word-wrap: break-word">Next-gen biotech platform relying on organ-chips enables faster, safer, and cheaper drug development for human use</div>
                    </div>
                    <div style="width: 100%; left: 0px; top: 0px; position: absolute; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                        <img style="width: 100%; height: 340px; border-top-left-radius: 8px; border-top-right-radius: 8px" src="{{ asset('121.jpg') }}"  />
                    </div>
                </div>
                <div style="width: 33%; height: 475px; padding:35px; position: relative">
                    <div style="left: 0px; top: 359px; position: absolute; color: white; font-size: 23px; font-family: Inter; font-weight: 600; text-transform: capitalize; line-height: 28.80px; width: 100%;">Predictive analytics for cancer clinicians</div>
                    <div style="padding-right: 14.23px; left: 0px; top: 397.79px; position: absolute; justify-content: flex-start; align-items: flex-start; display: inline-flex; width: 100%;">
                        <div style="color: #989898; margin-top:25px; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 23.80px; word-wrap: break-word">ML-based analytics improves cancer prognostic accuracy and treatment recommendations.</div>
                    </div>
                    <div style="width: 100%; left: 0px; top: 0px; position: absolute; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                        <img style="width: 100%; height: 340px; border-top-left-radius: 8px; border-top-right-radius: 8px" src="{{ asset('123.jpg') }}" />
                    </div>

                </div>
            </div>
            <div style="align-self: stretch; justify-content: space-between; align-items: center; gap: 616.91px; display: inline-flex">
                <div style="padding-right: 0.09px; justify-content: center; align-items: center; display: flex">
                    <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 7px; display: inline-flex">
                        <div style="color: white; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 20.40px; word-wrap: break-word">View all cases</div>
                        <div style="justify-content: center; align-items: flex-start; display: flex">
                            <div style="width: 22px; height: 22px; position: relative">
                                <div style="width: 22px; border-radius:25px; height: 22px; left: 0px; top: 0px; position: absolute; background: #D95B29">
                                    <img src="{{ asset('arrow.svg') }}" alt="Logo">
                                </div>
                                



                            </div>
                        </div>
                    </div>
                </div>
                <div style="width: 367px; height: 56.80px; padding-top: 20px; padding-bottom: 19.80px; padding-left: 16px; padding-right: 16px; background: #CA5817; border-radius: 8px; overflow: hidden; justify-content: center; align-items: center; display: flex">
                    <div style="height: 17px; justify-content: space-between; align-items: center; gap: 87px; display: inline-flex">
                        <div style="color: white; font-size: 16px; font-family: Inter; font-weight: 600; text-transform: capitalize; line-height: 16.50px; letter-spacing: 0.30px; word-wrap: break-word">Start your innovation journey</div>
                        <div style="width: 10px; height: 11.17px; margin-bottom:10px; position: relative">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="fill: white; height: 1.25rem; width: 1.25rem;">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                            {{-- <div style="width: 4.49px; height: 8.98px; left: 3.74px; top: 1.18px; position: absolute; border: 0.88px white solid"></div> --}}
                            {{-- <div style="width: 8.23px; height: 0px; left: 0px; top: 5.66px; position: absolute; border: 0.88px white solid"></div> --}}
                        </div>
                    </div>
                </div>


            </div>
        </div>
        {{-- <div style="width: 1687px; padding-top: 146.36px; left: 39.50px; top: 217px; position: absolute; justify-content: space-between; align-items: flex-start; gap: 1030px; display: inline-flex">
            <div style="padding-top: 0.46px; padding-bottom: 0.46px; justify-content: center; align-items: flex-start; display: flex">
                <div style="width: 170px; height: 69.08px; position: relative">
                    <div style="width: 164.47px; height: 64.47px; left: 67.24px; top: 64.47px; position: absolute; transform: rotate(180deg); transform-origin: 0 0; background: #4861FC"></div>
                    <div style="width: 16.38px; height: 13.75px; left: 26.81px; top: 25.36px; position: absolute; background: white"></div>
                </div>
            </div>
            <div style="height: 73.39px; padding-bottom: 3.39px; justify-content: flex-start; align-items: flex-start; display: flex">
                <div style="justify-content: center; align-items: flex-start; display: flex">
                    <div style="width: 170px; height: 70px; position: relative">
                        <div style="width: 170px; height: 70px; left: 0px; top: 0px; position: absolute; background: #4861FC"></div>
                        <div style="width: 117.78px; height: 14.93px; left: 26.11px; top: 27.54px; position: absolute; background: white"></div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div> 












    <div style="width: 89%; height: 44%; padding-top: 1px; margin:5%; padding-bottom: 96px; background: rgb(0, 0, 0); overflow: hidden; flex-direction: column; justify-content: center; align-items: center; gap: 64px; display: inline-flex">
        <div style="width: 100%; height: 100%; background: rgb(0, 0, 0); flex-direction: column; justify-content: center; align-items: center; gap: 100px; display: inline-flex">
            <div style="width: 80%; margin-top:3%; height: 120px;  justify-content: center; align-items: center; display: inline-flex">
                <div style="color: white; font-size: 48px; font-family: Inter; font-weight: 600; line-height: 10%; word-wrap: break-word">How we collaborate with you</div>
            </div>
            <div style=" background: rgb(0, 0, 0); padding-right: 2px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 10px; display: flex; height:600px; width:80%">
                <div id= "div1"style="align-self: stretch; padding: 10px; margin: 10px; background: black; justify-content: flex-start; height:48%; align-items: flex-start; display: flex; flex-wrap: wrap;">
                    <div style="height: 100%; justify-content: flex-start; align-items: center; display: flex; flex-basis: 50%;">
                        <img style="width: 25%; margin:20px; border-radius:60px; height: 87%;" src="{{ asset('img101.jpg') }}" />

                        <div style="padding-bottom: 18.40px; width: 70%; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex;">
                            <div style="color: white; font-size: 27px; font-family: Inter; font-weight: 600; text-transform: capitalize; line-height: 33.60px; word-wrap: break-word;">Thinking big</div>
                            <div style="width: 100%; padding-right: 29px; justify-content: flex-start; align-items: flex-start; display: inline-flex;">
                                <div style="color: #8F8F97; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 23.80px; word-wrap: break-word;">After digging deep to understand holistically your challenges and business objectives, we< chart your technology path that will keep your business future-proof.</div>
                            </div>
                        </div>
                    </div>
                    <div style="height: 100%; justify-content: flex-start; align-items: center; display: flex; flex-basis: 50%;">
                        <img style="width: 27%; margin:20px; border-radius:40px; height: 87%;" src="{{ asset('1102.png') }}" />
                        <div style="padding-bottom: 17.40px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex;">
                            <div style="color: white; font-size: 27px; font-family: Inter; font-weight: 600; text-transform: capitalize; line-height: 33.60px; word-wrap: break-word;">Starting small</div>
                            <div style="width: 330px; padding-right: 7px; justify-content: flex-start; align-items: flex-start; display: inline-flex;">
                                <div style="color: #8F8F97; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 23.80px; word-wrap: break-word;">At the beginning of the transformation journey, we start with simple use cases that bring you immediate results.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="div2" style="align-self: stretch; height:48%; padding: 10px; margin: 10px; background: rgb(0, 0, 0); justify-content: flex-start; align-items: flex-start; display: flex; flex-wrap: wrap;">
                    <div style="height: 98%; justify-content: flex-start; align-items: center; display: flex; flex-basis: 50%;">
                        <img style="width: 27%; margin:20px; border-radius:40px; height: 87%;" src="{{ asset('1103.png') }}" />
                        <div style="padding-bottom: 18.40px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex;">
                            <div style="color: white; font-size: 27px; font-family: Inter; font-weight: 600; text-transform: capitalize; line-height: 33.60px; word-wrap: break-word;">Creating value fast</div>
                            <div style="width: 338px; padding-right: 29px; justify-content: flex-start; align-items: flex-start; display: inline-flex;">
                                <div style="color: #8F8F97; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 23.80px; word-wrap: break-word;">We then build an MVP, testing the first use cases and collecting feedback. Along the way, we introduce enhancements to align business deliverables and add new usecases.</div>
                            </div>
                        </div>
                    </div>
                    <div style="height: 98%; justify-content: flex-start; align-items: center; display: flex; flex-basis: 50%;">
                        <img style="width: 27%; margin:20px; border-radius:40px; height: 87%;" src="{{ asset('1104.png') }}" />
                        <div style="padding-bottom: 17.40px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex;">
                            <div style="color: white; font-size: 27px; font-family: Inter; font-weight: 600; text-transform: capitalize; line-height: 33.60px; word-wrap: break-word;">Innovating at scale</div>
                            <div style="width: 330px; padding-right: 7px; justify-content: flex-start; align-items: flex-start; display: inline-flex;">
                                <div style="color: #8F8F97; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 23.80px; word-wrap: break-word;">We are expanding the functionality of yoursystem, keeping it flexible on the tech stack, hugely adaptable to humans, and easily scalable to evolve along with your business growth.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>








            <div style="width: 367px; height: 56.80px; padding-top: 20px; padding-bottom: 19.80px; padding-left: 16px; padding-right: 16px; background: #CA5817; border-radius: 8px; overflow: hidden; justify-content: center; align-items: center; display: inline-flex">
                <div style="height: 17px; justify-content: space-between; align-items: center; gap: 87px; display: inline-flex">
                    <div style="color: white; font-size: 16px; font-family: Inter; font-weight: 600; text-transform: capitalize; line-height: 16.50px; letter-spacing: 0.30px; word-wrap: break-word">let’s collaborate</div>
                    <div style="width: 10px; height: 11.17px; position: relative">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="fill: white; height: 1.25rem; width: 1.25rem;">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        </div> 



        




        <div style="width: 89%; height: 44%; padding-top: 1px; margin:5%; padding-bottom: 96px; background: #1D2939; overflow: hidden; flex-direction: column; justify-content: center; align-items: center; gap: 64px; display: inline-flex">

        <div style="width: 100%; height: 44%;  background:#1D2939;; flex-direction: column; margin:1%;justify-content: center; align-items: center; gap: 50px; display: inline-flex">
            <div style="color: white;width: 99%; font-size: 48px; font-family: Inter; font-weight: 600; line-height: 49.50px; word-wrap: break-word">Latest thinking</div>
            <div style="align-self: stretch; height: 2900px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 100px; display: flex">
                <div style="width: 100%; height: 430px; position: relative">
                    <img style="width: 1808px; height: 430px; left: 0px; top: 0px; position: absolute" src="{{ asset('bck101.png') }}" />
                    <div style="width: 1808px; height: 430px; left: 0px; top: -0.21px; position: absolute">
                        <div style="width: 1808px; height: 430.19px; left: 0px; top: 0px; position: absolute; background: linear-gradient(98deg, rgba(0, 0, 0, 0.83) 11%, rgba(255, 255, 255, 0) 100%); border-radius: 4px"></div>
                        <div style="left: 150px; top: 113px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 32px; display: inline-flex">
                            <div style="color: white; font-size: 32px; font-family: Inter; font-weight: 700; text-transform: uppercase; line-height: 60px; word-wrap: break-word">How to implement AI in your organization: the<br/>definitive guide [with a free eBook inside]</div>
                            <div style="align-self: stretch; color: rgba(255, 255, 255, 0.70); font-size: 19px; font-family: Inter; font-weight: 500; line-height: 26px; word-wrap: break-word">How to implement AI in your business and achieve a substantial return on your artificial intelligence investments? Our AI eBook will help you with that!</div>
                        </div>
                    </div>
                </div>
                <div style="width: 1808px; height: 430px; position: relative">
                    <img style="width: 1808px; height: 430px; left: 0px; top: 0px; position: absolute" src="{{ asset('bckk2.png') }}" />
                    <div style="width: 1808px; height: 431px; left: 0px; top: -0.50px; position: absolute">
                        <div style="width: 1808px; height: 430.19px; left: 0px; top: 0px; position: absolute; background: linear-gradient(267deg, rgba(0, 0, 0, 0.83) 40%, rgba(255, 255, 255, 0) 74%); border-radius: 4px"></div>
                        <div style="height: 204px; left: 797px; top: 113.50px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 32px; display: inline-flex">
                            <div style="align-self: stretch; color: white; font-size: 32px; font-family: Inter; font-weight: 700; text-transform: uppercase; line-height: 60px; word-wrap: break-word">IPA vs. RPA vs. BPA: what is the right automation option for your company?</div>
                            <div style="align-self: stretch; color: rgba(255, 255, 255, 0.70); font-size: 19px; font-family: Inter; font-weight: 500; line-height: 26px; word-wrap: break-word">Could you tell the difference between BPA, RPA, and IPA without running a few Google searches? If not, don’t bother surfing — we’ve done the job for you!</div>
                        </div>
                    </div>
                </div>
                <div style="width: 1808px; height: 430px; position: relative">
                    <img style="width: 1808px; height: 430px; left: 0px; top: 0px; position: absolute" src="{{ asset('bck104.png') }}" />
                    <div style="width: 1808px; height: 430px; left: 0px; top: -0.21px; position: absolute">
                        <div style="width: 1808px; height: 430.19px; left: 0px; top: 0px; position: absolute; background: linear-gradient(98deg, rgba(0, 0, 0, 0.83) 24%, rgba(255, 255, 255, 0) 81%); border-radius: 4px"></div>
                        <div style="height: 200px; left: 150px; top: 115px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 32px; display: inline-flex">
                            <div style="align-self: stretch; color: white; font-size: 32px; font-family: Inter; font-weight: 700; text-transform: uppercase; line-height: 60px; word-wrap: break-word">ITRex launches two more initiatives to help Ukrainians</div>
                            <div style="align-self: stretch; color: #8F8F97; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 23.80px; word-wrap: break-word">Learn how ITRex continues to provide much-needed assistance to<br/>Ukranians living in crisis since Russia began its invasion.</div>
                        </div>
                    </div>
                </div>
                <div style="width: 100%; height: 430px; position: relative">
                    <img style="width: 1808px; height: 430px; left: 0px; top: 0px; position: absolute" src="{{ asset('bckk.png') }}" />
                    <div style="width: 1808px; height: 431px; left: 0px; top: -0.50px; position: absolute">
                        <div style="width: 1808px; height: 430.19px; left: 0px; top: 0px; position: absolute; background: linear-gradient(267deg, rgba(0, 0, 0, 0.83) 39%, rgba(255, 255, 255, 0) 92%); border-radius: 4px"></div>
                        <div style="height: 230px; left: 797px; top: 100.50px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 32px; display: inline-flex">
                            <div style="align-self: stretch; color: white; font-size: 32px; font-family: Inter; font-weight: 700; text-transform: uppercase; line-height: 60px; word-wrap: break-word">Metaverse for business leaders: complete guide</div>
                            <div style="align-self: stretch; color: rgba(255, 255, 255, 0.70); font-size: 19px; font-family: Inter; font-weight: 500; line-height: 26px; word-wrap: break-word">From immersive gaming environments to full-blown digital auctions where NFTs are traded, metaverse can be a multitude of things. And the reasons to start using metaverse for business are as diverse as the technology’s definition.</div>
                        </div>
                    </div>
                </div>
                <div style="align-self: stretch; height: 780px; padding-top: 159px; padding-bottom: 184.92px; padding-left: 410px; padding-right: 410px; background: linear-gradient(0deg, black 0%, black 100%); background-image: url({{ asset('bckk3.png') }}); flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 70.50px; display: flex">
                    <div style="color: rgb(217, 129, 129); font-size: 48px; font-family: Inter; font-weight: 600; line-height: 49.50px; word-wrap: break-word">Contact us</div>
                    <div style="height: 315.58px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                        <div style="width: 1100px; justify-content: space-between; align-items: flex-start; gap: 44px; display: inline-flex">
                            <div style="width: 528px; padding-top: 24px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                <div style="height: 45.80px; padding-top: 2px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 23.80px; display: flex">
                                    <div style="width: 528px; padding-right: 476px; opacity: 0.55; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="color: white; font-size: 16px; font-family: Inter; font-weight: 400; word-wrap: break-word">Name*</div>
                                    </div>
                                    <div style="width: 20px; height: 20px; border-radius: 1000px; border: 0.50px rgba(255, 255, 255, 0.25) solid"></div>
                                    <div style="width: 528px; height: 1px; background: rgba(255, 255, 255, 0.25)"></div>
                                </div>
                                <div style="height: 45.80px; padding-top: 2px; padding-bottom: 0.01px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 23.79px; display: flex">
                                    <div style="width: 528px; padding-right: 481px; opacity: 0.55; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="color: white; font-size: 16px; font-family: Inter; font-weight: 400; word-wrap: break-word">Email*</div>
                                    </div>
                                    <div style="width: 20px; height: 20px; border-radius: 1000px; border: 0.50px rgba(255, 255, 255, 0.25) solid"></div>
                                    <div style="width: 528px; height: 1px; background: rgba(255, 255, 255, 0.25)"></div>
                                </div>
                            </div>
                            <div style="width: 528px; padding-top: 24px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                <div style="height: 45.80px; padding-top: 2px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 23.80px; display: flex">
                                    <div style="width: 528px; padding-right: 481px; opacity: 0.55; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="color: white; font-size: 16px; font-family: Inter; font-weight: 400; word-wrap: break-word">Phone</div>
                                    </div>
                                    <div style="width: 20px; height: 20px; border-radius: 1000px; border: 0.50px rgba(255, 255, 255, 0.25) solid"></div>
                                    <div style="width: 528px; height: 1px; background: rgba(255, 255, 255, 0.25)"></div>
                                </div>
                                <div style="width: 528px; padding-top: 49.39px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                    <div style="flex: 1 1 0; height: 1px; background: rgba(255, 255, 255, 0.25)"></div>
                                    <div style="width: 20px; height: 20px; border-radius: 1000px; border: 0.50px rgba(255, 255, 255, 0.25) solid"></div>
                                </div>
                            </div>
                        </div>
                        <div style="width: 1100px; height: 171.39px; position: relative">
                            <div style="width: 170px; height: 47.59px; left: 0px; top: 24px; position: absolute">
                                <div style="width: 22px; left: 0px; top: 0.89px; position: absolute; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                    <div style="width: 22px; height: 22px; position: relative">
                                        <div style="width: 22px; height: 22.37px; left: 0px; top: 0px; position: absolute; background: #FFDB3B"></div>
                                    </div>
                                </div>
                                <div style="padding-bottom: 0.80px; padding-right: 0.83px; left: 34px; top: -1px; position: absolute; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                    <div style="color: white; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 23.80px; word-wrap: break-word">Attach your file</div>
                                </div>
                                <div style="width: 137px; padding-bottom: 0.80px; padding-right: 52px; left: 33px; top: 22.79px; position: absolute; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                    <div style="color: #737373; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 23.80px; word-wrap: break-word">up to 20MB</div>
                                </div>
                            </div>
                            <div style="height: 71.59px; padding-top: 19px; padding-bottom: 1.59px; left: 572px; top: 0px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex">
                                <div style="width: 528px; padding-bottom: 1px; padding-right: 112px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                    <div><span style="color: rgba(255, 255, 255, 0.40); font-size: 11px; font-family: Inter; font-weight: 400; line-height: 20px; word-wrap: break-word">We will process your personal information in accordance with our </span><span style="color: #FFDB3B; font-size: 11px; font-family: Inter; font-weight: 400; line-height: 20px; word-wrap: break-word">Privacy Policy.</span></div>
                                </div>
                                <div style="padding-right: 10.11px; justify-content: flex-start; align-items: center; gap: 12px; display: inline-flex">
                                    <div style="width: 16px; height: 16px; opacity: 0.50; border-radius: 1000px; border: 0.50px #8F8F97 solid"></div>
                                    <div style="align-self: stretch; padding-bottom: 1px; padding-right: 16.89px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="color: #8F8F97; font-size: 12px; font-family: Inter; font-weight: 400; line-height: 20px; word-wrap: break-word">I would like to be contacted with news and updates about your events and services</div>
                                    </div>
                                </div>
                            </div>
                            <div style="width: 1100px; padding-top: 17px; padding-bottom: 18.80px; padding-left: 493.02px; padding-right: 492.98px; left: 0px; top: 111.59px; position: absolute; background: rgba(255, 255, 255, 0.10); justify-content: center; align-items: flex-start; display: inline-flex">
                                <div style="text-align: center; color: rgba(255, 255, 255, 0.20); font-size: 16px; font-family: Inter; font-weight: 600; line-height: 23.80px; word-wrap: break-word">Send message</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>

    </body>
</html>
