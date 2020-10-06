d=document;w=window;c=console;


w.onload=()=>{
  // LAZY LOAD FUNCTIONS MODULE
  var lBs=[].slice.call(d.querySelectorAll(".lazy-background")),lIs=[].slice.call(d.querySelectorAll(".lazy")),opt={threshold:.01};
  if("IntersectionObserver" in window){
    let lBO=new IntersectionObserver(es=>{es.forEach(e=>{if(e.isIntersecting){let l=e.target;l.classList.add("visible");lBO.unobserve(l)}})},opt),
        lIO=new IntersectionObserver(es=>{es.forEach(e=>{if(e.isIntersecting){let l=e.target;l.classList.remove("lazy");lIO.unobserve(l);l.srcset=l.dataset.url}})},opt);
    lIs.forEach(lI=>{lIO.observe(lI)});lBs.forEach(lB=>{lBO.observe(lB)});
  }

  // Modules setup
  selectBoxSpace.poblate()
  carouselController.setup()
  cuantosController.setup()
	growUpController.setup()
	obseController.setup()
  d.getElementById("load").style.top="-100vh";

  reportWindowSize();
}
w.onresize = ()=>{reportWindowSize()};


// SLIDER:
// TODO: mejorar modulo para poder reutilizarlo sin duplicar codigo
var j=1,x=d.getElementsByClassName("carouselItem");
const showDivs=n=>{
  if(n>x.length){j=1}
  if(n<1){j=x.length}
  for(i=0;i<x.length;i++){x[i].classList.add("inactive")}
  x[j-1].classList.remove("inactive");
}
const carousel=()=>{j++;
  for(i=0;i<x.length;i++){x[i].classList.add("inactive")}
  if(j>x.length){j=1}
  x[j-1].classList.remove("inactive");
  setTimeout(carousel, 8000); // Change image every N/1000 seconds
}
const plusDivs=n=>{showDivs(j+=n)}
if(x.length>0){showDivs(j);setTimeout(carousel, 8000);}










// alternates a class from a selector of choice, example:
// <div class="someButton" onclick="altClassFromSelector('activ', '#navBar')"></div>
const altClassFromSelector = ( clase, selector, mainClass = false )=>{
  const elementos = [...d.querySelectorAll(selector)];
  elementos.forEach(elemento => {

    // if there is a main class removes all other classes
    // TODO: hacer que mainClass sea en realidad una lista de clases a ignorar
    if(mainClass){
      elemento.classList.forEach( item=>{
        if( item!=mainClass && item!=clase ){
          elemento.classList.remove(item);
        }
      });
    }
  
    if(elemento.classList.contains(clase)){
      elemento.classList.remove(clase)
    }else{
      elemento.classList.add(clase)
    }
  })
}





// SELECT BOX CONTROLER
// TODO: mejorar eso a clases y POO
const selectBoxControler=(a, selectBoxId, current)=>{ //c.log(a)
	if(!!a){d.querySelector(selectBoxId).classList.add('alt')}
	else   {d.querySelector(selectBoxId).classList.remove('alt')}

	d.querySelector(current).innerHTML=a;
	d.querySelector(selectBoxId).classList.remove('focus')
	d.activeElement.blur();
}






// GO BACK BUTTONS
function goBack(){w.history.back()}














//Accordion //Desplegable
var acc = d.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click",()=>{
    this.classList.toggle("active");
    // TODO: Hacer que se puede elegir el elemento a acordionar
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
      panel.style.padding = "0";
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
      panel.style.padding = "20px";
    }
  });
}





const adjust_tory_img_height = ()=>{
  let torys = [...d.querySelectorAll('.tory')];
  torys.forEach((tory)=>{
    let tory_img              = tory.querySelector('.tory_img');
    let tory_text_height      = tory.querySelector('.tory_text').clientHeight;
    let tory_subtitle_height  = tory.querySelector('.tory_subtitle').clientHeight;
    let tory_img_height;
    if([...tory.classList].includes('tory_1')){
      let tory_root_height      = tory.querySelector('.tory_root').clientHeight;
      let tory_highlight_height = tory.querySelector('.tory_highlight').clientHeight;
      tory_img_height = tory_root_height + tory_subtitle_height + tory_text_height - tory_highlight_height;
    } else {
      tory_img_height = tory_subtitle_height + tory_text_height;
    }
    tory_img.style.height = 'calc(' + tory_img_height + 'px + 1rem)';
  })
  
}
function reportWindowSize() {
  if(d.querySelector('.tory')){
    adjust_tory_img_height();
  }
}
