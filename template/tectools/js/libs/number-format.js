function number_format(r,e,i,t){if(null==r||!isFinite(r))throw new TypeError("number is not valid");if(!e){var n=r.toString().split(".").length;e=n>1?n:0}i||(i="."),t||(t=",");var l=(r=(r=parseFloat(r).toFixed(e)).replace(".",i)).split(i);return l[0]=l[0].replace(/\B(?=(\d{3})+(?!\d))/g,t),r=l.join(i)}