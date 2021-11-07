# Task

Entry level task is based on HTML, CSS, Bootstrap 4 boilerplate. It requires absolutely no configuration prior to the development work.

HTML code is located in `index.html`, which dynamically fetches Bootstrap 4 dependencies from a CDN. Image assets are located in `images` directory. Any changes to CSS should be placed within `assets/custom.css` and custom JS code within `assets/custom.js`.

**Requirements**

* The component is expected to be pixel perfect implementation of the [prototype](https://xd.adobe.com/spec/9981f5d9-8668-4cc6-526f-53b0e436b63e-efb0/). 
* The component should be optimized for all sized devices starting at 320px width. 
* The component should be placed in standard sized container.

**Testing**

Testing procedure for this specific task covers latest version of Chrome with following screen widths: 1280px, 768px, 640px, 320px. You can get extra points for pointing out solutions that won't work in IE11 with suggestions of how to resolve them – no actual work is required to fix issues though.

**Answear to additional question**

IE doeasn't support css `object-fit` property and html <picture>

* `object-fit` fix for IE is available here: https://newbedev.com/ie-and-edge-fix-for-object-fit-cover and it's about positioning image absolute in the container and placing it in the center.
* <picture> can be set with polyfill such as https://scottjehl.github.io/picturefill/
* all issues might be simply solved by stop using IE if it's possible; the browser's going out of support for certain operating systems starting June 15, 2022