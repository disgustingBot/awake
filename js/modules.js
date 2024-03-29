d=document;w=window;c=console;
String.prototype.capitalize=function(){return this.charAt(0).toUpperCase()+this.slice(1);}

// color console
c.lof = (message, farbe = false)=>{
	if(farbe){c.log("%c" + message, "color:" + farbe);}
	else{c.log(message)}
};




/*

SELECT BOX:
opcional CUSTOM del elemento select y sus option

TODO: de todo

*/
selectBoxSpace = {
	selectBoxPlanet:[],
	poblate:()=>{
		if (d.querySelector('.SelectBox')) {
			var selectBoxes = d.querySelectorAll('.SelectBox');
			selectBoxes.forEach( selectBox => {
				selectBoxSpace.selectBoxPlanet.push(new SelectBox(selectBox))
			});
		}
	},
}
class SelectBox {
	constructor(element){
		// console.log(element);
		this.element = element;
		this.list = element.querySelector('.selectBoxList');
		this.button = element.querySelector('.selectBoxButton');
		this.className = element.className;
		this.id = element.id;

		this.config = { attributes: true, childList: true, characterData: true }
	}
	select(a, selectBoxId, current){
		c.log(a)
		if(!!a){d.querySelector(selectBoxId).classList.add('alt')}
		else   {d.querySelector(selectBoxId).classList.remove('alt')}

		d.querySelector(current).innerHTML=a;
		d.querySelector(selectBoxId).classList.remove('focus')
		d.activeElement.blur();
	}
}








/*

GROW UP:
para subir visualmente un numero desde 0 hasta el valor elegido

*/
growUpController = {
	growUps:[],
	setup:()=>{
		if (d.querySelectorAll('.GrowUp')) {
			var growUps = d.querySelectorAll('.GrowUp');
			growUps.forEach( growUp => {
				growUpController.growUps.unshift(new GrowUp(growUp))
			});
		}
	},
	again:()=>{
		growUpController.growUps.forEach( growUp => {
			growUp.again();
		});
	}
}
class GrowUp {
	constructor(element){
		// console.log(element);
		this.element = element;
		this.className = element.className;
		this.target = element.dataset.target;
		this.step = 50;
		this.timeDuration = 2500;
		this.current = parseFloat(element.innerHTML);

		this.config = { attributes: true, childList: true, characterData: true }

		this.init();
	}

	init(){
		this.observer = new MutationObserver( (mutations) => {
            mutations.forEach((mutation) => {
                if (mutation.type === 'attributes') {
                            if (mutation.target.className.includes('observed')) {
                                console.log(mutation.target.className)
                                this.grow();
                            }
                }
            });
		});
		this.observer.observe(this.element, this.config);
	}

	grow(){
		this.observer.disconnect();
		this.current = this.current + this.target / this.step;
		// console.log('number of ' + this.element.id + ', is: ', this.current);
		this.element.innerHTML = parseInt(this.current);
		if (parseFloat(this.element.innerHTML) < this.target ) {
			setTimeout(() =>{
				this.grow();
			}, this.timeDuration / this.step)
		} else {
			this.element.innerHTML = this.target;
		}
	}
	again(){
		this.element.innerHTML = 0;
		this.current = 0;
		// this.grow();
		setTimeout(() =>{
			this.grow();
		}, 1000)
	}
}




/*

CUANTOS:
para subir y bajar un contador con 2 botones

*/
cuantosController = {
	cuantoses:[],
	setup:()=>{
		if (d.querySelectorAll('.Cuantos')) {
			var cuantoses = d.querySelectorAll('.Cuantos');
			cuantoses.forEach( cuantos => {
				cuantosController.cuantoses.unshift(new Cuantos(cuantos))
			});
		}
	},
}
class Cuantos {
	constructor(element){
        this.element = element;
        // c.log(this.element);
		this.quantity = parseInt(element.querySelector('.cuantosQantity').value);
		element.querySelector('.cuantosPlus').onclick = () =>{this.changeQuantity(+1)}
		element.querySelector('.cuantosMins').onclick = () =>{this.changeQuantity(-1)}
	}
	changeQuantity (value) {
		this.quantity += value;
		if (this.quantity<=1) {
			this.quantity = 1;
		}
		this.element.querySelector('.cuantosQantity').value = this.quantity;
	}
}





/*

OBSE:
funcion para activar y desactivar elementos usando scroll como disparador

*/
obseController = {
	obses:[],
	setup:()=>{
		if (d.querySelectorAll('.Obse')) {
			var obses = d.querySelectorAll('.Obse');
			// console.log(obses)
			obses.forEach( obse => {
				obseController.obses.unshift(new Obse(obse))
			});
		}
	}
}
class Obse {
	constructor(element){
		this.j = 1;
		this.id = element.id;
		this.observe = [...d.querySelectorAll(element.dataset.observe)];
		this.unobserve = element.dataset.unobserve;
		this.first_time = true;
		this.first_observation = false;

		this.options = { root: null, threshold: .1, rootMargin: "0px 0px 0px 0px" };
		this.observer = new IntersectionObserver((entries, observer)=>{
			entries.forEach(entry => {
				if(entry.isIntersecting){
					element.classList.add('observed')
					if(this.first_time){this.first_observation=true;this.first_time=false;}
					if(this.unobserve=='true'){observer.unobserve(entry.target)}
				} else {
					element.classList.remove('observed')
				}
			})
			if(this.first_observation){this.first_observation=false;element.classList.add('observed')}
		}, this.options);

		this.activate();
	}

	activate(){
		this.observe.forEach((redDot)=>{
			this.observer.observe(redDot);
		})
	}
}










/*

CAROUSEL:
para dar, alternativamente, el estado de activo a un elemento de un conjunto
como un carousel....

TODO: que pueda reflejar cambios hacia adelante o atras

*/
carouselController = {
	carousels:[],
	setup:()=>{
		if (d.querySelectorAll('.Carousel')) {
			var carousels = d.querySelectorAll('.Carousel');
			carousels.forEach( carousel => {
				carouselController.carousels.unshift(new Carousel(carousel))
			});
		}
		// if(){
		//
		// }
	}
}

class Carousel {
	constructor(gallery){
		this.j = 1;
		this.elements = gallery.querySelectorAll('.Element');
		this.title = gallery.id;

		if(this.elements.length>1){
						console.log('ELEMENTS:', this.elements);
            gallery.querySelector('#nextButton').onclick = () =>{this.plusDivs(+1)}
            gallery.querySelector('#prevButton').onclick = () =>{this.plusDivs(-1)}
            this.showDivs(this.j);
            setTimeout(()=>{this.carousel()}, 5000);
        }

	}

    showDivs(n){
			console.log('showDivs');
			console.log(this.elements);

        if(n>this.elements.length){this.j=1}
        if(n<1){this.j=this.elements.length}
        for(i=0;i<this.elements.length;i++){this.elements[i].classList.add("inactive")}
        this.elements[this.j-1].classList.remove("inactive");

					console.log(' end showDivs');
					console.log(this.elements);
    }
    carousel(){this.j++;
			console.log('hi');
			console.log(this.elements);
        if (this.elements) {
            for(i=0;i<this.elements.length;i++){this.elements[i].classList.add("inactive")}
            if(this.j>this.elements.length){this.j=1}
            this.elements[this.j-1].classList.remove("inactive");
						setTimeout(()=>{this.carousel()}, 5000);
        }

    }

    plusDivs(n){this.showDivs(this.j+=n)}
}
