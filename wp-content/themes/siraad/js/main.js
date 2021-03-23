//select all box class elements
let box = document.querySelectorAll('.box');
box.forEach((imageBox) => {
    //save box height & width in var
   //let bw = imageBox.clientWidth;
   let bw = imageBox.offsetWidth;
   let bh = imageBox.offsetHeight;
   
   //save img in var
   //save img height and width in a var
   let img = imageBox.childNodes[1].childNodes[0];
   //let img2 = img;
   let imgh = img.offsetHeight;
   let imgw = img.offsetWidth;
   console.log(img,imgh);
   // console.log(img2);
   // if image height is greater than width 
 //add class 'ww' to image & remove 'wh' class
// else add 'wh' class & remove 'ww' class
   if (imgh>imgw) {//if portrait
       img.classList.add('ww');//set width 100%
       img.classList.remove('wh')
   } else {//if landscape
       img.classList.add('wh');//set height 100%
       img.classList.remove('ww');
   }

   let nh = img.offsetHeight;
   console.log(nh);
   let nw = img.offsetWidth;
   let hd = (nh-bh)/2;
   console.log(hd);
   let wd = (nw-bw)/2;

   if (nh<nw) {//if portrait
       
       img.style.margin = `0 0 0 -${wd}px`;
   } else {//if landscape
    
       img.style.margin = `-${hd}px 0 0 0 `;//offset top
   }
});


function doThings() {
    let burger = document.querySelector('.burger');
    let list = document.querySelector('.menu');
    let navLinks = document.querySelectorAll('.menu li')
   
    burger.addEventListener('click', () => {
        console.log("Hi!!!");
        list.classList.toggle('nav-active');
        
        navLinks.forEach((element, index) => {
            if(element.style.animation) {
                element.style.animation ='';
            }else {
                element.style.animation = `navLinksFade 0.5s ease forwards ${index / 7 +1.5}s`;
            }
            
        });
        burger.classList.toggle('toggle');
    });

    
}

doThings();